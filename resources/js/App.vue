<template>
    <div>
        <nav class="site-header sticky-top py-1">
            <div class="container d-flex flex-column flex-md-row justify-content-between">
                <a class="py-2" href="#" aria-label="Product">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                         stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto"
                         role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title>
                        <circle cx="12" cy="12" r="10"></circle>
                        <path
                            d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path>
                    </svg>
                </a>
                <a class="py-2 d-none d-md-inline-block" href="#">Tour</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Product</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Features</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Support</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Pricing</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
            </div>
        </nav>
        <main class="py-4">
            <router-view></router-view>

        </main>
        <div class="container">
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                    <div class="col-12 col-md">
                        <img class="mb-2" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                        <small class="d-block mb-3 text-muted">© 2017-2020</small>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Features</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Cool stuff</a></li>
                            <li><a class="text-muted" href="#">Random feature</a></li>
                            <li><a class="text-muted" href="#">Team feature</a></li>
                            <li><a class="text-muted" href="#">Stuff for developers</a></li>
                            <li><a class="text-muted" href="#">Another one</a></li>
                            <li><a class="text-muted" href="#">Last time</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Resources</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Resource</a></li>
                            <li><a class="text-muted" href="#">Resource name</a></li>
                            <li><a class="text-muted" href="#">Another resource</a></li>
                            <li><a class="text-muted" href="#">Final resource</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>About</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Team</a></li>
                            <li><a class="text-muted" href="#">Locations</a></li>
                            <li><a class="text-muted" href="#">Privacy</a></li>
                            <li><a class="text-muted" href="#">Terms</a></li>
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
                isLoggedIn: null,
                name: null
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
</style>
