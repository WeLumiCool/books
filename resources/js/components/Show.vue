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
                            <p class="font-weight-bold h3">САД. СТЕПНОВА М. </p>
                            <p class="font-weight-bold h6  pt-2">Степнова М.</p>
                            <span class="font-weight-bold">Объем: <span class="text-muted">123 <span>стр</span></span></span><br>
                            <span class="font-weight-bold">Жанр: <span class="text-muted">Зарубежные детективы, Крутой детектив</span></span>
                            <p class="font-weight-bold">Издательство: <span class="text-muted"> АСТ; Редакция Елены Шубиной</span></p>
                            <p class="font-weight-bold">Аннотация: <br>
                            <span class="text-muted">«Сад» — новый роман Марины Степновой, автора бестселлера «Женщины Лазаря» (премия «Большая книга»), романов «Хирург», «Безбожный переулок» и сборника «Где?то под Гроссето».
                                Середина девятнадцатого века. У князя и княгини Борятинских рождается поздний и никем не жданный ребенок — девочка, которая буквально разваливает семью, прежде казавшуюся идеальной. Туся с самого начала не такая, как все. В строгих рамках общества, полного условностей, когда любой в первую очередь принадлежит роду, а не себе самому, она ведет себя как абсолютно — ненормально даже — независимый человек. Сама принимает решения — когда родиться и когда заговорить. Как вести себя, чем увлекаться, кого любить или ненавидеть. История о том, как трудно быть свободным человеком в несвободном мире.
                            </span></p>
                        </div>
                        <div class="col-lg-4 product_checkout  order-lg-2">
                            <div class=" ">
                                <p class="text-center">Цена в Интернет магазине:</p>
                                <div class="d-flex border p-2 rounded">
                                    <div class="headerSectionProduct">
                                        <div class="priceTargetSection">
                                            <span class="finalProductPrice">300 </span>
                                            <span>сом</span>
                                        </div>
                                    </div>
                                    <div class="cuantityOfProduct" id="RF-PRD5">
                                        <div class="buttonTriggers buttonLess">-</div>
                                        <input type="number" class="productCuantityInput" min="0" value="0" readonly="">
                                        <div class="buttonTriggers buttonMore">+</div>
                                    </div>
                                </div>

                            </div>
                            <div class="checkoutPrice py-3">
                                <div class="separatorPrices">
                                    <span>Доставка</span>
                                    <div id="shipingTotal">100<span> сом</span></div>
                                </div>
                                <div class="separatorPrices">
                                    <span>Итого:</span>
                                    <div id="priceTotal">400<span> сом</span></div>
                                </div>
                            </div>
                            <button class="col-12 btn btn-danger text-uppercase">Купить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Show"
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
