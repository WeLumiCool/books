<template>
    <div>
        <section class="pt-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 py-2">
                        <div class="select">
                            <select name="cars" id="cars">
                                <option value="children">Детская литература</option>
                                <option value="saab">Художественная литература</option>
                                <option value="business">Бизнес-книги</option>
                                <option value="psihology">Психология</option>
                                <option value="fantasy">Фантастика</option>
                            </select>
                        </div>
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
    .card:hover {
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

    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        appearance: none;
        outline: 0;
        box-shadow: none;
        border: 0 !important;
        background: #007bff;
        background-image: none;
    }

    /* Remove IE arrow */
    select::-ms-expand {
        display: none;
    }

    /* Custom Select */
    .select {
        position: relative;
        display: flex;
        width: 16em;
        height: 3em;
        line-height: 3;
        background: #dff4e8;
        overflow: hidden;
        border-radius: .25em;
    }

    select {
        flex: 1;
        padding: 0 .5em;
        color: #fff;
        cursor: pointer;
    }

    /* Arrow */
    .select::after {
        content: '\25BC';
        color: white;
        position: absolute;
        top: 0;
        right: 0;
        padding: 0 1em;
        background: #007bff;
        cursor: pointer;
        pointer-events: none;
        -webkit-transition: .25s all ease;
        -o-transition: .25s all ease;
        transition: .25s all ease;
    }

    /* Transition */
    .select:hover::after {
        color: #000;
    }



</style>
