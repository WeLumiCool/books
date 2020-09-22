<template>
    <div>
        <div class="container">
            <div class="col-12">
                <h2 class="pb-3">Корзина товаров</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row border rounded p-2 my-2 bg-white justify-content-center ">
                        <div class="col-12 col-lg-2 d-flex justify-content-lg-start justify-content-center">
                            <img :src="'img/i699736 (2).jpg'" alt="" height="150px" width="150px">
                        </div>
                        <div class="col-lg-4 d-flex justify-content-lg-start justify-content-center  align-items-center">
                            <p class="font-weight-bold h5">Сад</p> <br>
                        </div>
                        <div class="col-lg-3 d-flex d-flex justify-content-lg-start justify-content-center align-items-center">
                            <div class="amount-form form">
                                <div class="amount-form__group">
                                    <button data-max="999"
                                            class="amount-form__control amount-form__control_dec js-amount-control border-none"
                                            data-value="dec" style="border: none!important;">−
                                    </button>
                                    <input data-max="999" id="" type="text"
                                           class="amount-form__input js-amount-input" value="1" maxlength="3">
                                    <button data-max="999"
                                            class="amount-form__control amount-form__control_inc js-amount-control border-none"
                                            data-value="inc" style="border: none!important;">+
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 d-flex justify-content-lg-start justify-content-center align-items-center">
                            <p class="font-weight-bold h6">500 <span>сом</span></p>
                        </div>
                        <div class="col-lg-1 d-flex justify-content-lg-start justify-content-center align-items-center">
                            <button class="btn btn-danger rounded-pill"><i class="far fa-trash-alt"></i></button>
                        </div>
                    </div>
                    <div class="row border rounded p-2 my-2 bg-white justify-content-center ">
                        <div class="col-12 col-lg-2 d-flex justify-content-lg-start justify-content-center">
                            <img :src="'img/i699736 (2).jpg'" alt="" height="150px" width="150px">
                        </div>
                        <div class="col-lg-4 d-flex justify-content-lg-start justify-content-center  align-items-center">
                            <p class="font-weight-bold h5">Сад</p> <br>
                        </div>
                        <div class="col-lg-3 d-flex d-flex justify-content-lg-start justify-content-center align-items-center">
                            <div class="amount-form form">
                                <div class="amount-form__group">
                                    <button data-max="999"
                                            class="amount-form__control amount-form__control_dec js-amount-control border-none"
                                            data-value="dec" style="border: none!important;">−
                                    </button>
                                    <input data-max="999" id="" type="text"
                                           class="amount-form__input js-amount-input" value="1" maxlength="3">
                                    <button data-max="999"
                                            class="amount-form__control amount-form__control_inc js-amount-control border-none"
                                            data-value="inc" style="border: none!important;">+
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 d-flex justify-content-lg-start justify-content-center align-items-center">
                            <p class="font-weight-bold h6">500 <span>сом</span></p>
                        </div>
                        <div class="col-lg-1 d-flex justify-content-lg-start justify-content-center align-items-center">
                            <button class="btn btn-danger rounded-pill"><i class="far fa-trash-alt"></i></button>
                        </div>
                    </div>
                    <div class="row border rounded p-2 my-2 bg-white justify-content-center ">
                        <div class="col-12 col-lg-2 d-flex justify-content-lg-start justify-content-center">
                            <img :src="'img/i699736 (2).jpg'" alt="" height="150px" width="150px">
                        </div>
                        <div class="col-lg-4 d-flex justify-content-lg-start justify-content-center  align-items-center">
                            <p class="font-weight-bold h5">Сад</p> <br>
                        </div>
                        <div class="col-lg-3 d-flex d-flex justify-content-lg-start justify-content-center align-items-center">
                            <div class="amount-form form">
                                <div class="amount-form__group">
                                    <button data-max="999"
                                            class="amount-form__control amount-form__control_dec js-amount-control border-none"
                                            data-value="dec" style="border: none!important;">−
                                    </button>
                                    <input data-max="999" id="" type="text"
                                           class="amount-form__input js-amount-input" value="1" maxlength="3">
                                    <button data-max="999"
                                            class="amount-form__control amount-form__control_inc js-amount-control border-none"
                                            data-value="inc" style="border: none!important;">+
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 d-flex justify-content-lg-start justify-content-center align-items-center">
                            <p class="font-weight-bold h6">500 <span>сом</span></p>
                        </div>
                        <div class="col-lg-1 d-flex justify-content-lg-start justify-content-center align-items-center">
                            <button class="btn btn-danger rounded-pill"><i class="far fa-trash-alt"></i></button>
                        </div>
                    </div>

                </div>
                <div class="col-12 row justify-content-lg-end justify-content-center py-3">
                    <div class="">
                        <div class="col-12">
                            <p class="h5 font-weight-bold">Итого: <span> 1500 </span> <span>cом</span></p>
                        </div>
                        <div class="col-12 pt-3">
                            <button class="btn btn-danger text-uppercase" data-toggle="modal" data-target="#exampleModal" style="padding: 16px 36px 15px 31px;">Оформить заказ</button>
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
                                <label for="name">Имя</label>
                                <input type="text" class="form-control" id="name" placeholder="Турсунбек">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="admin@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="telephone">Телефон</label>
                                <input type="tel" class="form-control" id="telephone" placeholder="+996550123123">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
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
    export default {
        name: "Basket"
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
