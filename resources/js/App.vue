<template>
    <div class="bg-light">
        <section class="">

            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light px-lg-0">
                    <a class="navbar-brand" href="#"><img :src="'img/logo_book.svg'" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo02">
                        <ul class="nav justify-content-lg-end justify-content-center">
                                <li class="nav-item active ">
                                    <a class="nav-link  " href="#">О нас<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">Новости и мероприятия</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">Доставка и оплата</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link t" href="#">Что почитать?</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">Сотрудничество</a>
                                </li>


                        </ul>

                        <ul class="navbar-nav  mt-2 mt-lg-0">
                            <li>
                                <a href="tel:+996707861441" class="pr-5 ">+996 707 86 14 41</a>
                                <a href=""><i class="fas fa-shopping-cart   pt-1 "></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

        </section>

        <main class="">
            <router-view></router-view>
        </main>
        <div class="container">
            <footer class="pt-4  pt-md-5 border-top">
                <div class="row">
                    <div class="col-12 col-md">
                        <img class="mb-2" :src="'img/logo_book.png'" alt="">
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">О компании</a></li>
                            <li><a class="text-muted" href="#">Новости и мероприятия</a></li>
                            <li><a class="text-muted" href="#">Доставка и оплата</a></li>
                            <li><a class="text-muted" href="#">Карта сайта</a></li>
                        </ul>

                    </div>
                    <div class="col-6 col-md pt-3">
                        <h6>Что почитать?</h6>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Бестселлеры</a></li>
                            <li><a class="text-muted" href="#">Скоро в продаже</a></li>
                            <li><a class="text-muted" href="#">Популярные авторы</a></li>
                            <li><a class="text-muted" href="#">Интервью с авторами</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md pt-3">
                        <h6>Сотрудничество</h6>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Библиотекам</a></li>
                            <li><a class="text-muted" href="#">Авторам</a></li>
                            <li><a class="text-muted" href="#">Партнерам</a></li>
                            <li><a class="text-muted" href="#">Издательствам</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md pt-3">
                        <ul class="d-flex  " style="list-style: none;padding-left: 0px;">
                            <li class=""><a href=""><i class="fab fa-facebook fa-2x  mx-2"
                                                       style="color: #cecece"></i></a></li>
                            <li><a href=""><i class="fab fa-whatsapp fa-2x mx-2" style="color: #cecece"></i></a></li>
                            <li><a href=""><i class="fab fa-telegram fa-2x mx-2" style="color: #cecece"></i></a></li>
                            <li><a href=""><i class="fab fa-vk fa-2x mx-2" style="color: #cecece"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {

            }
        },
        mounted() {

        }
    }
</script>

<style scoped>
    .site-header {
        background-color: rgba(0, 0, 0, .85);
        -webkit-backdrop-filter: saturate(180%) blur(20px);
        backdrop-filter: saturate(180%) blur(20px);
    }

    .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020;
    }

    .dropdown:hover {
        display: block;
    }

    .menu-area {
        position: static !important;
    }

    .mega-area {
        position: absolute;
        width: 100%;
        left: 0;
        right: 0;
        padding: 15px;
    }

    .dropdown-item {
        padding: 5px 0;
    }
</style>
