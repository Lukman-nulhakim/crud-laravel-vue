<template>
    <div>
        <Navbar />
        <section
            class="flex flex-col antialiased text-gray-600 min-h-screen p-4"
        >
            <div class="h-full">
                <!-- Table -->
                <div
                    class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-lg border border-gray-200 overflow-hidden"
                >
                    <header
                        class="px-5 py-3 border-b border-gray-100 bg-gradient-to-t from-purple-500 to-blue-300 flex"
                    >
                        <p class="font-semibold text-white text-lg my-auto">
                            Products
                        </p>
                        <router-link
                            to="/product/create"
                            class="rounded-full hover:bg-purple-700 hover:text-white bg-white text-purple-900 hover:shadow-xl focus:outline-none w-10 h-10 flex ml-auto transition duration-300"
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
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </router-link>
                    </header>
                    <div class="p-3">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead
                                    class="text-xs font-semibold uppercase text-gray-400 bg-gray-50"
                                >
                                    <tr>
                                        <th class="p-2 whitespace-nowrap">
                                            <div
                                                class="font-semibold text-center"
                                            >
                                                Name
                                            </div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div
                                                class="font-semibold text-center"
                                            >
                                                Price
                                            </div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div
                                                class="font-semibold text-center"
                                            >
                                                Desc
                                            </div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div
                                                class="font-semibold text-center"
                                            >
                                                Image
                                            </div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div
                                                class="font-semibold text-center"
                                            >
                                                Color & Qty
                                            </div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div
                                                class="font-semibold text-center"
                                            >
                                                Action
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-gray-100">
                                    <tr
                                        v-for="(product, index) in products"
                                        :key="index"
                                    >
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">
                                                <div
                                                    class="font-medium text-gray-800 text-center"
                                                >
                                                    {{ product.name }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div
                                                class="text-center font-medium text-red-400"
                                            >
                                                Rp. {{ product.price }}
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div
                                                class="text-center font-medium text-green-500"
                                            >
                                                {{ product.description }}
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 whitespace-nowrap flex justify-center"
                                        >
                                            <img
                                                class="rounded-lg h-16 w-16"
                                                :src="url + product.image"
                                                alt=""
                                            />
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">
                                                <div
                                                    class="font-medium text-gray-800 text-center"
                                                >
                                                    <p v-for="value, index in JSON.parse(product.variant)" :key="index">
                                                        {{ value.color }} = {{ value.qty }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex justify-center">
                                                <router-link
                                                    :to="{name: 'editProduct', params: {id:product.id}}"
                                                    class="rounded-full bg-warning w-8 h-8 bg-yellow-400 hover:bg-black hover:bg-opacity-20 mr-1 p-2"
                                                >
                                                    <img
                                                        src="/icon/edit.svg"
                                                        alt=""
                                                    />
                                                </router-link>
                                                <div
                                                    class="rounded-full bg-warning w-8 h-8 bg-red-500 p-2 hover:bg-black hover:bg-opacity-20"
                                                >
                                                    <img
                                                        class="text-white"
                                                        src="/icon/trash.svg"
                                                        alt=""
                                                    />
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
