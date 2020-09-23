<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <img :src="'img/i699736.jpg'" alt="">
                    <ul class="d-flex pt-4" style="list-style: none;padding-left: 0">
                        <li><i class="fab fa-facebook   mx-2"
                               style="color: #cecece;font-size: 27px;"></i></li>
                        <li><i class="fab fa-whatsapp  mx-2" style="color: #cecece;font-size: 27px;"></i></li>
                        <li><i class="fab fa-telegram  mx-2" style="color: #cecece;font-size: 27px;"></i></li>
                        <li><i class="fab fa-vk  mx-2" style="color: #cecece;font-size: 27px;"></i></li>
                    </ul>

                </div>
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-lg-8  order-lg-1">
                            <p class="font-weight-bold h3">{{ book.name }}</p>
                            <p class="font-weight-bold h6  pt-2">{{ book.author.name }}</p>
                            <span class="font-weight-bold">Жанр: <span
                                    class="text-muted">{{ book.genre.name }}</span></span>
                            <p class="font-weight-bold">Аннотация: <br>
                                <span class="text-muted">{{ book.desc }}
                            </span></p>
                        </div>
                        <div class="col-lg-4 product_checkout  order-lg-2">
                            <div class=" ">
                                <p class="text-center">Цена в Интернет магазине:</p>
                                <div class="d-flex border p-2 rounded">
                                    <div class="headerSectionProduct">
                                        <div class="priceTargetSection">
                                            <span class="finalProductPrice">{{ book.price }}</span>
                                            <span>сом</span>
                                        </div>
                                    </div>
                                    <div class="cuantityOfProduct" id="RF-PRD5">
                                        <div class="buttonTriggers buttonLess" @click="change_count_book(-1)">-</div>
                                        <input type="number" class="productCuantityInput" :value="count_book" min="0"
                                               readonly="">
                                        <div class="buttonTriggers buttonMore" @click="change_count_book(1)">+</div>
                                    </div>
                                </div>

                            </div>
                            <div class="checkoutPrice py-3">
                                <div class="separatorPrices">
                                    <span>Итого:</span>
                                    <div id="priceTotal">{{ book.price * count_book }}<span> сом</span></div>
                                </div>
                            </div>
                        </div>
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
                book: {
                    author: {name: ''},
                    genre: {name: ''},
                    type: {name: ''},
                },
                count_book: 0,
                total_price: 0,
                basket: {},
            }
        },
        methods: {
            get_book() {
                axios.get(`api/get_book/${this.$route.params.id}`)
                    .then((response) => {
                        this.book = response.data.book;
                        this.get_basket();
                    });
            },
            get_basket() {
                if (this.$session.has('basket')) {
                    this.basket = this.$session.get('basket');
                    if (this.basket.hasOwnProperty(this.book.id)) {
                        this.count_book = this.basket[this.book.id].count;
                    }
                }
            },
            change_count_book(value /* 1 or -1*/) {
                if (this.count_book === 0 && value === 1) {
                    this.basket[this.book.id.toString()] = {
                        "count": 1,
                        "name": this.book.name,
                        "image": this.book.image,
                        "price": this.book.price,
                    };
                    this.count_book = 1;
                    this.$session.set('basket', this.basket);
                }
                else if (this.count_book === 1 && value === -1) {
                    delete this.basket[this.book.id];
                    this.$session.set('basket', this.basket);
                    this.count_book = 0;
                }
                else if (this.count_book !== 0 && value !== 0) {
                    this.count_book += value;
                    this.basket[this.book.id].count = this.count_book;
                    this.$session.set('basket', this.basket);
                }
            }
        },
        mounted() {
            // this.$session.set('basket',{"1":{"count":4, "name":"dawdawd"}, "2":{"count":5}});
            this.get_book();
        },
    }
</script>

<style scoped>
    .product_checkout {
        background-color: #f2f2f2;
        grid-area: product;
        height: fit-content;
        padding: 20px;
        border-radius: 6px;
    }

    .productName {
        color: #4E5150;
        font-weight: 600;
        font-size: 16px;
    }

    .priceTargetSection {
        padding: 10px 0;
        display: grid;
        gap: 10px;
        grid-template-columns: repeat(3, 1fr);
        font-weight: 600;
        align-items: center;
    }

    .finalProductPrice {
        color: #F2994A;
    }

    .cuantityOfProduct {
        width: 80%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        cursor: pointer;
    }

    .buttonLess {
        left: 5px;
    }

    .buttonTriggers {
        position: absolute;
        padding: 1px 7px;
        background: #E0E0E0;
        border-radius: 4px;
        color: #828282;
        font-weight: 600;
        cursor: pointer;
        font-size: 20px;
        z-index: 999;
    }

    .productCuantityInput {
        border: 0;
        background-color: transparent;
        text-align: center;
        width: 100%;
        outline: none;
        padding: 15px;
        -moz-appearance: textfield;
        position: relative;
        font-size: 15px;
        font-weight: 600;
    }

    .buttonMore {
        right: 5px;
    }

    .buttonTriggers {
        position: absolute;
        padding: 1px 7px;
        background: #E0E0E0;
        border-radius: 4px;
        color: #828282;
        font-weight: 600;
        cursor: pointer;
        font-size: 20px;
        z-index: 999;
    }

    .separatorPrices {
        padding: 5px 0;
        border-top: 1px solid #bdbdbd;
        font-weight: 600;
        font-size: 13px;
        display: flex;
        justify-content: space-between;
    }

</style>
