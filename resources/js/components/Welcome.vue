<template>
    <div>
        <section class="pt-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 pt-2">
                        <label for="cars">Выберите Тип:</label>
                        <select name="cars" id="cars">
                            <option value="children">Детская литература</option>
                            <option value="saab">Художественная литература</option>
                            <option value="business">Бизнес-книги</option>
                            <option value="psihology">Психология</option>
                            <option value="fantasy">Фантастика</option>
                        </select>
<!--                        <ul class="nav ">-->
<!--                            <li class="nav-item dropdown menu-area ">-->
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
<!--                            </li>-->
<!--                            <li class="nav-item dropdown menu-area ">-->
<!--                                <a class="nav-link dropdown-toggle  text-decoration-none" href="#"-->
<!--                                   id="mega-two" role="button" data-toggle="dropdown"-->
<!--                                   aria-haspopup="true" aria-expanded="false">-->
<!--                                    Типы-->
<!--                                </a>-->
<!--                                <div class="dropdown-menu mega-area" aria-labelledby="mega-two">-->
<!--                                    <div class="row p-5">-->
<!--                                        <div class="col-sm-6 col-lg-3">-->
<!--                                            <h5>Image</h5>-->
<!--                                            <img src="" alt="" style="width: 100%;">-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6 col-lg-3">-->
<!--                                            <h5>Marketplace We work</h5>-->
<!--                                            <a class="dropdown-item" href="#">Themeforest</a>-->
<!--                                            <a class="dropdown-item" href="#">Another action</a>-->
<!--                                            <a class="dropdown-item" href="#">Something else here</a>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6 col-lg-3">-->
<!--                                            <h5>It Consulting</h5>-->
<!--                                            <a class="dropdown-item" href="#">Themeforest</a>-->
<!--                                            <a class="dropdown-item" href="#">Another action</a>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-6 col-lg-3">-->
<!--                                            <h5>Tags</h5>-->
<!--                                            <p>-->
<!--                                                <span class="badge badge-secondary">Marketing</span>-->
<!--                                                <span class="badge badge-secondary">Web Design</span>-->
<!--                                                <span class="badge badge-secondary">Consulting</span>-->
<!--                                                <span class="badge badge-secondary">Consulting</span>-->
<!--                                                <span class="badge badge-secondary">Consulting</span>-->
<!--                                                <span class="badge badge-secondary">Consulting</span>-->
<!--                                                <span class="badge badge-secondary">Consulting</span>-->
<!--                                                <span class="badge badge-secondary">Consulting</span>-->
<!--                                                <span class="badge badge-secondary">Consulting</span>-->
<!--                                            </p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        </ul>-->
                    </div>

                </div>
            </div>
        </section>
        <section class="pt-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="list-group">
                            <p class="font-weight-bold text-center">Жанры</p>
                            <a href="#" @click="filter_genre()"
                               class="list-group-item list-group-item-action small"
                               :class="{active:genre_id === 0}">Все</a>
                            <a v-for="genre in genres" href="#" @click="filter_genre(genre.id)"
                               class="list-group-item list-group-item-action small"
                               :class="{active:genre_id === genre.id}">{{ genre.name }}</a>

                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div v-for="book in paginateData.data" class="col-lg-3 col-12">
                                <div class="card mb-3">
                                    <img :src="book.image" alt="">
                                    <div class="card-body">
                                        <p class=" text-muted"> {{ book.author.name }}</p>
                                        <p class="card-title font-weight-bold h5"> {{ book.name }}</p>
                                        <span class="">Цена: <span
                                                class="font-weight-bold"> {{ book.price }}</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <pagination :data="paginateData" @pagination-change-page="get_books"></pagination>
                    </div>

                </div>
            </div>
        </section>
    </div>
</template>
<script>
    const axios = require('axios');
    export default {
        data() {
            return {
                paginateData: {},
                genres: [],
                genre_id: 0,
                type_id: 0,

            }
        },
        methods: {
            get_genres() {
                axios.get('api/get_genres').then(response => {
                    this.genres = response.data.genres;
                })
            },
            get_books(page = 1) {
                axios.get('api/get_books?page=' + page, {
                    params: {
                        genre_id: this.genre_id,
                        type_id: this.type_id
                    }
                }).then(response => {
                    this.paginateData = response.data.books;
                });
            },
            filter_genre(genre_id = 0) {
                this.genre_id = genre_id;
                this.get_books();
            }
        },
        mounted() {
            this.get_books();
            this.get_genres();
        },
    }
</script>

<style scoped>
    .card:hover{
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
        transition: 0.3s;
        padding: 1px;
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
