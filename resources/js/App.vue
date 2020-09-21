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
                            <li class="nav-item dropdown menu-area ">
<!--                                <a class="nav-link dropdown-toggle  text-decoration-none"-->
<!--                                   href="#"-->
<!--                                   id="mega-one" role="button" data-toggle="dropdown"-->
<!--                                   aria-haspopup="true" aria-expanded="false">-->
<!--                                    Жанры-->
<!--                                </a>-->
<!--                                <div class="dropdown-menu mega-area" aria-labelledby="mega-one">-->
<!--                                    <div class="row p-5">-->
<!--                                        <div class="col-sm-6 col-lg-3">-->
<!--                                            <h5>Web Design</h5>-->
<!--                                            <a class="dropdown-item" href="#">HTML Template</a>-->
<!--                                            <a class="dropdown-item" href="#">Another action</a>-->
<!--                                            <a class="dropdown-item" href="#">Something else-->
<!--                                                here</a>-->
<!--                                            <a class="dropdown-item" href="#">Something else-->
<!--                                                here</a>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6 col-lg-3">-->
<!--                                            <h5>Craphics Design</h5>-->
<!--                                            <a class="dropdown-item" href="#">Logo Design</a>-->
<!--                                            <a class="dropdown-item" href="#">Another action</a>-->
<!--                                            <a class="dropdown-item" href="#">Something else here</a>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6 col-lg-3">-->
<!--                                            <h5>Company Profile</h5>-->
<!--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt,-->
<!--                                                porro.</p>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6 col-lg-3">-->
<!--                                            <h5>Image</h5>-->
<!--                                            <img src="" alt="" style="width: 100%;">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
                            </li>
                            <li class="nav-item dropdown menu-area ">
                                <a class="nav-link dropdown-toggle  text-decoration-none" href="#"
                                   id="mega-two" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    Типы
                                </a>
                                <div class="dropdown-menu mega-area" aria-labelledby="mega-two">
                                    <div class="row p-5">
                                        <div class="col-sm-6 col-lg-3">
                                            <h5>Image</h5>
                                            <img src="" alt="" style="width: 100%;">
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <h5>Marketplace We work</h5>
                                            <a class="dropdown-item" href="#">Themeforest</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <h5>It Consulting</h5>
                                            <a class="dropdown-item" href="#">Themeforest</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <h5>Tags</h5>
                                            <p>
                                                <span class="badge badge-secondary">Marketing</span>
                                                <span class="badge badge-secondary">Web Design</span>
                                                <span class="badge badge-secondary">Consulting</span>
                                                <span class="badge badge-secondary">Consulting</span>
                                                <span class="badge badge-secondary">Consulting</span>
                                                <span class="badge badge-secondary">Consulting</span>
                                                <span class="badge badge-secondary">Consulting</span>
                                                <span class="badge badge-secondary">Consulting</span>
                                                <span class="badge badge-secondary">Consulting</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
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
<!--        <section class="pt-2">-->
<!--            <div class="container">-->
<!--                <div class="row">-->

<!--                    <div class="col-12 col-lg-9 pt-2">-->
<!--                        <ul class="nav ">-->
<!--                            <li class="nav-item active ">-->
<!--                                <a class="nav-link  " href="#">О нас<span class="sr-only">(current)</span></a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link  " href="#">Новости и мероприятия</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link  " href="#">Доставка и оплата</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link t" href="#">Что почитать?</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link  " href="#">Сотрудничество</a>-->
<!--                            </li>-->

<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="col-lg-3 col-12  pt-2">-->
<!--                        <div class="d-flex justify-content-end">-->
<!--                            <form class="form-inline my-2 my-lg-0">-->
<!--                                <input class="form-control mr-sm-2" type="search" placeholder="Поиск">-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
        <main class="">
            <router-view></router-view>
        </main>
        <div class="container">
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
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
                        <h5>Что почитать?</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Бестселлеры</a></li>
                            <li><a class="text-muted" href="#">Скоро в продаже</a></li>
                            <li><a class="text-muted" href="#">Популярные авторы</a></li>
                            <li><a class="text-muted" href="#">Интервью с авторами</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md pt-3">
                        <h5>Сотрудничесвто</h5>
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
