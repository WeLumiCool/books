<template>
    <div>
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

</style>
