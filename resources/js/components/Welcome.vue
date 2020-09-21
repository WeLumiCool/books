<template>
    <div>
        <section class="pt-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="list-group">
                            <p class="font-weight-bold text-center">Жанры</p>
                            <a href="#" class="list-group-item list-group-item-action small active">
                                Cras justo odio
                            </a>
                            <a href="#" class="list-group-item list-group-item-action small">Dapibus ac facilisis in</a>
                            <a href="#" class="list-group-item list-group-item-action small">Morbi leo risus</a>
                            <a href="#" class="list-group-item list-group-item-action small">Porta ac consectetur ac</a>
                            <a href="#" class="list-group-item list-group-item-action small" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div v-for="book in books" :key="book.id" class="col-lg-3 col-12">
                                <div class="card mb-3">
                                    <img :src="'img/i699736 (1).jpg'" alt="">
                                    <div class="card-body">
                                        <p class=" text-muted"> {{ book.author }}</p>
                                        <p class="card-title font-weight-bold h5"> {{ book.name }}</p>
                                        <span class="">Цена: <span class="font-weight-bold"> {{ book.price }}</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                books: [
                    {
                        'name': 'Война и мир',
                        'author': 'Лев Н.Т.',
                        'price': 500,
                        'image': 'dwadwad',
                    },
                    {
                        'name': 'Война и мир',
                        'author': 'Лев Н.Т.',
                        'price': 500,
                        'image': 'dwadwad',
                    },
                    {
                        'name': 'Война и мир',
                        'author': 'Лев Н.Т.',
                        'price': 500,
                        'image': 'dwadwad',
                    },
                    {
                        'name': 'Война и мир',
                        'author': 'Лев Н.Т.',
                        'price': 500,
                        'image': 'dwadwad',
                    },
                    {
                        'name': 'Война и мир',
                        'author': 'Лев Н.Т.',
                        'price': 500,
                        'image': 'dwadwad',
                    },
                    {
                        'name': 'Война и мир',
                        'author': 'Лев Н.Т.',
                        'price': 500,
                        'image': 'dwadwad',
                    },
                    {
                        'name': 'Война и мир',
                        'author': 'Лев Н.Т.',
                        'price': 500,
                        'image': 'dwadwad',
                    },
                ]
            }
        }
    }
</script>

<style scoped>

</style>
