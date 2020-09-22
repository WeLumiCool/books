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
                            <a href="#" class="list-group-item list-group-item-action small active">
                                Cras justo odio
                            </a>
                            <a href="#" class="list-group-item list-group-item-action small">Dapibus ac facilisis in</a>
                            <a href="#" class="list-group-item list-group-item-action small">Morbi leo risus</a>
                            <a href="#" class="list-group-item list-group-item-action small">Porta ac consectetur ac</a>
                            <a href="#" class="list-group-item list-group-item-action small" tabindex="-1"
                               aria-disabled="true">Vestibulum at eros</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div v-for="book in books" :key="book.id" class="col-lg-3 col-12">
                                <a href="#" class="text-decoration-none card-book">
                                    <div class="card mb-3">
                                        <img :src="'img/i699736 (1).jpg'" alt="">
                                        <div class="card-body">
                                            <p class=" text-muted "> {{ book.author }}</p>
                                            <p class="card-title font-weight-bold h5 text-dark"> {{ book.name }}</p>
                                            <span class="text-dark">Цена: <span class="font-weight-bold"> {{ book.price }}</span><span> сом</span></span>
                                        </div>
                                    </div>
                                </a>
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
