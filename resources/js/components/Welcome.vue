<template>
    <div>
        <section class="pt-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 pt-2">
                        <label for="types_filter">Выберите Тип:</label>
                        <select id="types_filter" @change="filter_type($event.target.value)">
                            <option value="0">Все</option>
                            <option v-for="type in types" :value="type.id">{{ type.name }}</option>
                        </select>
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
                                <router-link :to="{name:'show', params:{id:book.id}}">
                                    <div class="card mb-3">
                                        <img :src="book.image" alt="">
                                        <div class="card-body">
                                            <p class=" text-muted"> {{ book.author.name }}</p>
                                            <p class="card-title font-weight-bold h5"> {{ book.name }}</p>
                                            <span class="">Цена: <span
                                                    class="font-weight-bold"> {{ book.price }}</span></span>
                                        </div>
                                    </div>
                                </router-link>
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
                types: [],
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
            get_types() {
                axios.get('api/get_types').then(response => {
                    this.types = response.data.types;
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
            },
            filter_type(type_id = 0) {
                this.type_id = type_id;
                this.get_books();
            }
        },
        mounted() {
            this.get_books();
            this.get_genres();
            this.get_types();
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
</style>
