<template>
    <div class="container">
        <!-- <div class="row d-flex justify-content-center" style="margin-top: 10%">
            <div class="col-lg-5 col-md-5">
                <div class="card py-3">
                    <div class="card-body px-5">
                        <form @submit.prevent="login">
                            <h3 class="text-center">Login</h3>
                            <label for="">Email</label>
                            <div class="input-group input-group-sm mb-3">
                                <span
                                    class="input-group-text"
                                    id="inputGroup-sizing-sm"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-envelope-fill"
                                        viewBox="0 0 16 16"
                                    >
                                        <path
                                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"
                                        /></svg
                                ></span>
                                <input
                                    type="text"
                                    class="form-control"
                                    aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-sm"
                                    v-model="data.email"
                                />
                            </div>
                            <label for="">Password</label>
                            <div class="input-group input-group-sm mb-3">
                                <span
                                    class="input-group-text"
                                    id="inputGroup-sizing-sm"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-shield-lock-fill"
                                        viewBox="0 0 16 16"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z"
                                        /></svg
                                ></span>
                                <input
                                    type="password"
                                    class="form-control"
                                    aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-sm"
                                    v-model="data.password"
                                />
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="max-w-md mx-auto bg-white shadow-xl rounded my-8">
            <div class="text-center text-gray-600 py-4">Sign in with</div>
            <div class="flex justify-center mb-10">
                <button
                    class="flex items-center bg-gray-100 shadow-md border border-gray-200 rounded px-4 py-2 mr-2"
                >
                    <svg
                        class="fill-current text-gray-600 w-4 h-4 mr-2"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                    >
                        <path
                            d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM7 6v2a3 3 0 1 0 6 0V6a3 3 0 1 0-6 0zm-3.65 8.44a8 8 0 0 0 13.3 0 15.94 15.94 0 0 0-13.3 0z"
                        />
                    </svg>
                    <div class="text-indigo-700">Facebook</div>
                </button>
                <button
                    class="flex items-center bg-gray-100 shadow-md border border-gray-200 rounded px-4 py-2 mr-2"
                >
                    <svg
                        class="fill-current text-gray-600 w-4 h-4 mr-2"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                    >
                        <path
                            d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM7 6v2a3 3 0 1 0 6 0V6a3 3 0 1 0-6 0zm-3.65 8.44a8 8 0 0 0 13.3 0 15.94 15.94 0 0 0-13.3 0z"
                        />
                    </svg>
                    <div class="text-indigo-700">GitHub</div>
                </button>
            </div>
            <div class="bg-gray-200 pt-8 pb-16">
                <div class="text-center text-gray-600 mb-6">
                    Or sign in with Email & Password
                </div>
                <form @submit.prevent="login">
                    <div class="w-4/5 mx-auto">
                        <div
                            class="flex items-center bg-white rounded shadow-md mb-4"
                        >
                            <span class="px-3">
                                <svg
                                    class="fill-current text-gray-500 w-4 h-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"
                                    />
                                </svg>
                            </span>
                            <input
                                class="w-full h-12 focus:outline-none"
                                type="email"
                                name="email"
                                placeholder="Email"
                                v-model="data.email"
                            />
                        </div>
                        <div
                            class="flex items-center bg-white rounded shadow-md mb-4"
                        >
                            <span class="px-3">
                                <svg
                                    class="fill-current text-gray-500 w-4 h-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M4 8V6a6 6 0 1 1 12 0h-3v2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"
                                    />
                                </svg>
                            </span>
                            <input
                                class="w-full h-12 focus:outline-none"
                                type="password"
                                name="password"
                                placeholder="Password"
                                v-model="data.password"
                            />
                        </div>
                        <div class="mb-4">
                            <input
                                type="checkbox"
                                name="remember"
                                class="mr-1"
                            />
                            <label for="remember" class="text-sm text-gray-600"
                                >Remember me</label
                            >
                        </div>
                        <button
                            class="bg-indigo-600 block mx-auto text-white text-sm uppercase rounded shadow-md px-6 py-2"
                        >
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";
import Cookies from "js-cookie";
export default {
    data() {
        return {
            data: {
                email: null,
                password: null,
            },
        };
    },
    created() {
        if (Cookies.get("access_token")) this.$router.push({ name: "home" });
    },
    methods: {
        async login() {
            const data = await axios.post(`/api/auth/login`, this.data);
            if (data.data.status) {
                Cookies.set("access_token", data.data.token);
                this.$router.push({ name: "home" });
            }
        },
    },
};
</script>
