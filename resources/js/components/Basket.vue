<template>
    <div>
        <div class="container">
            <div class="col-12">
                <h2 class="pb-3">Корзина товаров</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div v-for="(book,index) in basket"
                         class="row border rounded p-2 my-2 bg-white justify-content-center ">
                        <div class="col-12 col-lg-2 d-flex justify-content-lg-start justify-content-center">
                            <img :src="book.image" alt="" height="150px" width="150px">
                        </div>
                        <div class="col-lg-4 d-flex justify-content-lg-start justify-content-center  align-items-center">
                            <p class="font-weight-bold h5">{{book.name}}</p> <br>
                        </div>
                        <div class="col-lg-3 d-flex d-flex justify-content-lg-start justify-content-center align-items-center">
                            <div class="amount-form form">
                                <div class="amount-form__group">
                                    <button data-max="999"
                                            class="amount-form__control amount-form__control_dec js-amount-control border-none"
                                            style="border: none!important;" @click="change_basket(index, -1)">−
                                    </button>
                                    <input data-max="999" type="text"
                                           class="amount-form__input js-amount-input" :value="book.count" maxlength="3">
                                    <button data-max="999"
                                            class="amount-form__control amount-form__control_inc js-amount-control border-none"
                                            style="border: none!important;" @click="change_basket(index, 1)">+
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 d-flex justify-content-lg-start justify-content-center align-items-center">
                            <p class="font-weight-bold h6">{{ book.price }} <span>сом</span></p>
                        </div>
                        <div class="col-lg-1 d-flex justify-content-lg-start justify-content-center align-items-center">
                            <button class="btn btn-danger rounded-pill" @click="delete_book(index)"><i
                                    class="far fa-trash-alt"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-12 row justify-content-lg-end justify-content-center py-3">
                    <div class="">
                        <div class="col-12">
                            <p class="h5 font-weight-bold">Итого: <span> {{total}} </span> <span>cом</span></p>
                        </div>
                        <div class="col-12 pt-3">
                            <button class="btn btn-danger text-uppercase" data-toggle="modal"
                                    data-target="#exampleModal" style="padding: 16px 36px 15px 31px;">Оформить заказ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Оформление заказа</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" v-model="email"
                                       aria-describedby="emailHelp" placeholder="admin@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label>Телефон</label>
                                <input type="tel" class="form-control" v-model="phone" placeholder="+996550123123" required>
                            </div>
                            <button type="button" class="btn btn-primary" @click="purchased()">Отправить</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Заркыть</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    const axios = require('axios');
    export default {
        data() {
            return {
                basket: {},
                total: 0,
                phone: '12312312321',
                email: 'dawd@dawdw.com',
            }
        },
        methods: {
            get_basket() {
                if (this.$session.has('basket')) {
                    this.basket = this.$session.get('basket');
                    this.calc_total();
                }
            },
            calc_total() {
                for (let book in this.basket) {
                    this.total += this.basket[book].count * this.basket[book].price;
                }
            },
            change_basket(book_id, value /* 1 or -1*/) {
                if (this.basket[book_id].count === 1 && value === -1) {
                    if (confirm('вы точно хотите удалить?')) {
                        delete this.basket[book_id];
                        this.$session.set('basket', this.basket);
                        this.basket = this.$session.get('basket');
                    }
                }
                else if (this.basket[book_id].count !== 0 && value !== 0) {
                    this.basket[book_id].count += value;
                    this.$session.set('basket', this.basket);
                }
                this.total = 0;
                this.calc_total();
                this.$parent.counter_books_in_basket();
            },
            delete_book(book_id) {
                if (confirm('вы точно хотите удалить?')) {
                    delete this.basket[book_id];
                    this.$session.set('basket', this.basket);
                    this.basket = this.$session.get('basket');
                    this.total = 0;
                    this.calc_total();
                    this.$parent.counter_books_in_basket();
                }
            },
            purchased() {
                let basket = this.basket;
                let total = this.total;
                console.log(this.phone);
                let phone = this.phone;
                let email = this.email;
                axios.post('api/purchasing', {basket, total, phone, email}).then(response => {
                    $('#exampleModal').modal('hide');
                    this.$session.destroy();
                    this.basket = {};
                    this.total = 0;
                    this.$parent.counter_books_in_basket();
                })
            }
        },
        mounted() {
            this.get_basket();
        },
    }
</script>

<style scoped>
    .amount-form__input {
        width: 34px;
        height: 28px;
        border: 0;
        background: #ffffff;
        text-align: center;
        padding: 0;
        font-size: 16px;
    }

    .amount-form__control_dec {
        left: 0;
        border-right: 1px solid #dfdfdf;
        -webkit-border-radius: 4px 0 0 4px;
        -moz-border-radius: 4px 0 0 4px;
        border-radius: 4px 0 0 4px;
        font-weight: bold;
        font-size: 16px;
    }

    .amount-form__control_inc {
        right: 0;
        border-left: 1px solid #dfdfdf;
        -webkit-border-radius: 0 4px 4px 0;
        -moz-border-radius: 0 4px 4px 0;
        border-radius: 0 4px 4px 0;
        font-weight: bold;
        font-size: 16px;
    }

</style>
