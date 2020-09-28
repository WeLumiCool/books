<template>
    <div>
        <section class="pt-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3 py-2">
                        <div class="select">
                            <select class="font-size-14" @change="filter_type($event.target.value)">
                                <option value="0">Все</option>
                                <option v-for="type in types" :value="type.id">{{ type.name }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="input-group pt-3">
                            <input id="search" type="text" v-model="search" @keyup="get_books" class="form-control"
                                   placeholder="Название книги,автор">
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
                            <h4 class="text-muted">Жанры</h4>
                            <a href="#" @click="filter_genre()"
                               class="list-group-item list-group-item-action"
                               :class="{active:genre_id === 0}">Все</a>
                            <a v-for="genre in genres" href="#" @click="filter_genre(genre.id)"
                               class="list-group-item list-group-item-action font-size-14"
                               :class="{active:genre_id === genre.id}">{{ genre.name }}</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div v-for="book in paginateData.data" class="col-lg-3 col-12">
                                <router-link :to="{name:'show', params:{id:book.id}}" style="text-decoration: none">
                                    <div class="card mb-3" style="transition: 0.15s all ease-in-out;">
                                        <img :src="book.image" alt="">
                                        <div class="card-body">
                                            <p class="text-muted font-size-14"> {{ book.author.name }}</p>
                                            <p class="text-dark card-title font-weight-bold h6"> {{ book.name }}</p>
                                            <span class="text-dark font-size-14" >Цена: <span class="font-weight-bold"> {{ book.price }}</span></span>
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
                search: '',
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
                        type_id: this.type_id,
                        search_text: this.search
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
        box-shadow: rgba(0, 0, 0, 0.117647) 0px 1px 6px, rgba(0, 0, 0, 0.117647) 0px 1px 4px;
        transition: 0.3s;
        transform: scale(1.1);
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
        background: #e3e3e3;
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
        color: #000;
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
        background: #e3e3e3;
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

    .list-group-item {
        color: #000;
        background-color: #ffffff;
        padding: 0.45rem 2.15rem !important;
        border: none !important;
    }

    .list-group-item:hover {
        color: #007bff;
    }

    .font-size-14 {
        font-size: 14px;
    }
</style>
