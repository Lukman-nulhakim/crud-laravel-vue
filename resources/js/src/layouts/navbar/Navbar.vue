<template>
    <!-- <div class="">
        <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
            <div class="bg-yellow-300">
                <div
                    x-data="{ open: true }"
                    class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8"
                >
                    <div class="flex flex-row items-center justify-between p-4">
                        <a
                            href="#"
                            class="text-lg font-semibold tracking-widest text-white uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"
                            >Flowtrail UI</a
                        >
                        <button
                            class="rounded-lg md:hidden focus:outline-none focus:shadow-outline"
                            @click="open = !open"
                        >
                            <svg
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                class="w-6 h-6"
                            >
                                <path
                                    x-show="!open"
                                    fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                    clip-rule="evenodd"
                                ></path>
                                <path
                                    x-show="open"
                                    fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                    </div>
                    <nav
                        :class="{ flex: open, hidden: !open }"
                        class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row"
                    >
                        <a
                            class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#"
                            >List Gitar</a
                        >
                        <a
                            class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#"
                            >Buat gitar</a
                        >
                    </nav>
                </div>
            </div>
        </div>
    </div> -->
    <nav class="bg-gradient-to-r from-purple-700 to-blue-300 shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center space-x-1">
                        <router-link
                            to="/"
                            class="py-4 px-2 text-white border-blue-500 font-semibold"
                            >Home</router-link
                        >
                        <router-link
                            to="/product"
                            class="py-4 px-2 text-white border-blue-500 font-semibold"
                            >Product</router-link
                        >
                        <router-link
                            to="/auth/profile"
                            class="py-4 px-2 text-white border-blue-500 font-semibold"
                            >Profile</router-link
                        >
                    </div>
                </div>
                <div class="flex justify-end">
                    <div class="hidden md:flex items-center space-x-1">
                        <div v-if="!is_login">
                            <router-link
                                to="/auth/login"
                                class="py-2 px-6 rounded-full shadow-lg hover:bg-purple-500 hover:text-white bg-white text-black font-semibold"
                            >
                                Login
                            </router-link>
                        </div>
                        <div v-if="is_login">
                            <button
                                class="bg-white py-2 px-6 rounded-full shadow-lg text-black hover:bg-red-500 hover:text-white font-semibold"
                                type="button"
                                @click="logout"
                            >
                                <!-- <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                                    />
                                </svg> -->
                                Logout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link to="/" class="nav-link">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/product" class="nav-link"
                            >Product</router-link
                        >
                    </li>
                    <li class="nav-item">
                        <router-link to="/auth/profile" class="nav-link"
                            >Profile</router-link
                        >
                    </li>
                </ul>
                <form class="d-flex">
                    <router-link
                        to="/auth/login"
                        class="btn btn-outline-success mr-2"
                        style="margin-right: 5px"
                    >
                        Login
                    </router-link>
                    <div v-if="is_login">
                        <button
                            class="btn btn-outline-danger"
                            type="button"
                            @click="logout"
                        >
                            Logout
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav> -->
</template>
<script>
import Cookies from "js-cookie";
import axios from "axios";
export default {
    data() {
        return {
            is_login: Cookies.get(`access_token`),
        };
    },
    methods: {
        async logout() {
            const headers = {
                headers: {
                    Authorization: `Bearer ${this.is_login}`,
                },
            };
            const data = await axios.get("/api/auth/logout", headers);
            if (data.data.status) {
                Cookies.remove(`access_token`);
                this.$router.push({ name: "login" });
            }
        },
    },
};
</script>
