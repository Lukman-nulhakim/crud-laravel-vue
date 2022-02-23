<template>
    <div>
        <Navbar />
        <!-- <nav
            class="h-16 w-full bg-gradient-to-r from-purple-700 to-blue-400"
        ></nav> -->

        <!-- <div class="container">
            <div class="row my-3">
                <div
                    class="col-lg-3 col-md-4 col-sm-4 col-6"
                    v-for="(product, index) in products"
                    :key="index"
                >
                    <div class="card">
                        <img src="" class="card-img-top" alt="image-product" />
                        <div class="card-body">
                            <h5 class="card-title">{{ product.title }}</h5>
                            <p class="card-text">{{ product.description }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div
            class="col-lg-3 col-md-4 col-sm-4 col-6"
            v-for="(product, index) in products"
            :key="index"
        >
            /////////////////////////
        </div> -->

        <div
            class="flex items-center w-100 min-h-screen"
            style="font-family: 'Muli', sans-serif"
        >
            <div class="container ml-auto mr-auto flex flex-wrap items-start">
                <div class="w-full pl-5 lg:pl-2 mb-4">
                    <h1
                        class="text-3xl lg:text-2xl text-gray-700 font-extrabold"
                    >
                        Best Sellers
                    </h1>
                </div>
                <div
                    v-for="(product, index) in products"
                    :key="index"
                    class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2"
                >
                    <div
                        class="bg-white rounded-lg m-h-64 p-2 transform hover:-translate-y-2 hover:shadow-xl transition duration-300"
                    >
                        <figure class="mb-2">
                            <img
                                :src="url + product.image"
                                alt=""
                                class="h-64 ml-auto mr-auto"
                            />
                        </figure>
                        <div class="rounded-lg p-4 bg-purple-500 flex flex-col">
                            <div>
                                <h5
                                    class="text-white text-2xl font-bold leading-none"
                                >
                                    {{ product.name }}
                                </h5>
                                <span
                                    class="text-xs text-white leading-none"
                                    >{{ product.description }}</span
                                >
                            </div>
                            <div class="flex items-center">
                                <div class="text-lg text-white font-light">
                                    Rp. {{ product.price }}
                                </div>
                                <button
                                    href="javascript:;"
                                    class="rounded-full bg-purple-900 text-white hover:bg-white hover:text-purple-900 hover:shadow-xl focus:outline-none w-10 h-10 flex ml-auto transition duration-300"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="stroke-current m-auto"
                                    >
                                        <line
                                            x1="12"
                                            y1="5"
                                            x2="12"
                                            y2="19"
                                        ></line>
                                        <line
                                            x1="5"
                                            y1="12"
                                            x2="19"
                                            y2="12"
                                        ></line>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div
            class="flex items-center w-100 min-h-screen"
            style="font-family: 'Muli', sans-serif"
        >
            <div class="container ml-auto mr-auto flex flex-wrap items-start">
                <div class="w-full pl-5 lg:pl-2 mb-4">
                    <h1
                        class="text-3xl lg:text-2xl text-gray-700 font-extrabold"
                    >
                        Best Sellers
                    </h1>
                </div>
                <div
                    class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2"
                >
                    <div
                        class="bg-white rounded-lg m-h-64 p-2 transform hover:-translate-y-2 hover:shadow-xl transition duration-300"
                    >
                        <figure class="mb-2">
                            <img
                                src="https://srv-cdn.onedio.com/store/bf2cbc886120f284ef46fd92a48f5fb58c62e6a50fbdf8fa796d057dd0ddc242.png"
                                alt=""
                                class="h-64 ml-auto mr-auto"
                            />
                        </figure>
                        <div class="rounded-lg p-4 bg-purple-700 flex flex-col">
                            <div>
                                <h5
                                    class="text-white text-2xl font-bold leading-none"
                                >
                                    iPhone 11 Pro Max
                                </h5>
                                <span class="text-xs text-gray-400 leading-none"
                                    >And then there was Pro.</span
                                >
                            </div>
                            <div class="flex items-center">
                                <div class="text-lg text-white font-light">
                                    $1099,00
                                </div>
                                <button
                                    href="javascript:;"
                                    class="rounded-full bg-purple-900 text-white hover:bg-white hover:text-purple-900 hover:shadow-xl focus:outline-none w-10 h-10 flex ml-auto transition duration-300"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="stroke-current m-auto"
                                    >
                                        <line
                                            x1="12"
                                            y1="5"
                                            x2="12"
                                            y2="19"
                                        ></line>
                                        <line
                                            x1="5"
                                            y1="12"
                                            x2="19"
                                            y2="12"
                                        ></line>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2"
                >
                    <div
                        class="bg-white rounded-lg m-h-64 p-2 transform hover:-translate-y-2 hover:shadow-xl transition duration-300"
                    >
                        <figure class="mb-2">
                            <img
                                src="https://srv-cdn.onedio.com/store/7fd6410ffac110960cb4a60b09878db19ebbdf3c8b6e842918d16f3c61784763.png"
                                alt=""
                                class="h-64 ml-auto mr-auto"
                            />
                        </figure>
                        <div class="rounded-lg p-4 bg-purple-600 flex flex-col">
                            <div>
                                <h5
                                    class="text-white text-2xl font-bold leading-none"
                                >
                                    iPhone 11
                                </h5>
                                <span class="text-xs text-gray-400 leading-none"
                                    >Just the right amount of everything.</span
                                >
                            </div>
                            <div class="flex items-center">
                                <div class="text-lg text-white font-light">
                                    $699,00
                                </div>
                                <button
                                    href="javascript:;"
                                    class="rounded-full bg-purple-800 text-white hover:bg-white hover:text-purple-900 hover:shadow-xl focus:outline-none w-10 h-10 flex ml-auto transition duration-300"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="stroke-current m-auto"
                                    >
                                        <line
                                            x1="12"
                                            y1="5"
                                            x2="12"
                                            y2="19"
                                        ></line>
                                        <line
                                            x1="5"
                                            y1="12"
                                            x2="19"
                                            y2="12"
                                        ></line>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2"
                >
                    <div
                        class="bg-white rounded-lg m-h-64 p-2 transform hover:-translate-y-2 hover:shadow-xl transition duration-300"
                    >
                        <figure class="mb-2">
                            <img
                                src="https://srv-cdn.onedio.com/store/988bccbdb9ca395f581f98faa9ce3a55123f12bfcef608c838532b813646e557.png"
                                alt=""
                                class="h-64 ml-auto mr-auto"
                            />
                        </figure>
                        <div class="rounded-lg p-4 bg-gray-700 flex flex-col">
                            <div>
                                <h5
                                    class="text-white text-2xl font-bold leading-none"
                                >
                                    iPhone XR
                                </h5>
                                <span class="text-xs text-gray-400 leading-none"
                                    >Brilliant. In every way.</span
                                >
                            </div>
                            <div class="flex items-center">
                                <div class="text-lg text-white font-light">
                                    $599,00
                                </div>
                                <button
                                    href="javascript:;"
                                    class="rounded-full bg-gray-900 text-white hover:bg-white hover:text-purple-900 hover:shadow-xl focus:outline-none w-10 h-10 flex ml-auto transition duration-300"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="stroke-current m-auto"
                                    >
                                        <line
                                            x1="12"
                                            y1="5"
                                            x2="12"
                                            y2="19"
                                        ></line>
                                        <line
                                            x1="5"
                                            y1="12"
                                            x2="19"
                                            y2="12"
                                        ></line>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2"
                >
                    <div
                        class="bg-white rounded-lg m-h-64 p-2 transform hover:-translate-y-2 hover:shadow-xl transition duration-300"
                    >
                        <figure class="mb-2">
                            <img
                                src="https://srv-cdn.onedio.com/store/cfdd8ebc1b39e215c44c7c9a02bfaa49287f79b806ec5743124d0aea25c2b0c3.png"
                                alt=""
                                class="h-64 ml-auto mr-auto"
                            />
                        </figure>
                        <div class="rounded-lg p-4 bg-gray-600 flex flex-col">
                            <div>
                                <h5
                                    class="text-white text-2xl font-bold leading-none"
                                >
                                    iPhone SE
                                </h5>
                                <span class="text-xs text-gray-400 leading-none"
                                    >Lots to love. Less to spend.</span
                                >
                            </div>
                            <div class="flex items-center">
                                <div class="text-lg text-white font-light">
                                    $399,00
                                </div>
                                <button
                                    href="javascript:;"
                                    class="rounded-full bg-gray-800 text-white hover:bg-white hover:text-purple-900 hover:shadow-xl focus:outline-none w-10 h-10 flex ml-auto transition duration-300"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="stroke-current m-auto"
                                    >
                                        <line
                                            x1="12"
                                            y1="5"
                                            x2="12"
                                            y2="19"
                                        ></line>
                                        <line
                                            x1="5"
                                            y1="12"
                                            x2="19"
                                            y2="12"
                                        ></line>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</template>
<script>
import axios from "axios";
import Navbar from "../../layouts/navbar/Navbar.vue";

export default {
    components: { Navbar },
    data() {
        return {
            url: window.location.origin,
            products: [],
            errors: [],
        };
    },

    // Fetches posts when the component is created.
    created() {
        this.getProduct();
    },

    methods: {
        async getProduct() {
            const data = await axios.get(`/api/product`);
            if (data.status) {
                this.products = data.data;
            }
        },

        async submitPostDelete(id, index) {
            const data = await axios.delete(`/api/product/${id}`);
            if (data.status) {
                this.products.splice(index, 1);
            }
        },
    },
};
</script>
