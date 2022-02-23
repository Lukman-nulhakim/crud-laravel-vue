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
                        class="px-5 py-4 border-b border-gray-100 bg-gradient-to-t from-purple-500 to-blue-300"
                    >
                        <div class="max-w-xl mx-auto my-2">
                            <div class="flex">
                                <div class="flex-1">
                                    <div
                                        class="w-10 h-10 bg-green-400 border-2 border-white shadow-xl mx-auto rounded-full text-center py-1"
                                    >
                                        <span
                                            class="text-xl font-bold text-white"
                                            >1</span
                                        >
                                    </div>
                                </div>

                                <div
                                    class="w-2/6 align-center items-center align-middle content-center flex"
                                >
                                    <div
                                        :class="
                                            step === 2 || step === 3
                                                ? 'bg-green-300 w-full rounded items-center align-middle align-center flex-1'
                                                : 'bg-white w-full rounded items-center align-middle align-center flex-1'
                                        "
                                    >
                                        <div
                                            class="bg-green-light text-xs leading-none py-1 text-center text-grey-darkest rounded"
                                            style="width: 20%"
                                        ></div>
                                    </div>
                                </div>

                                <div class="flex-1">
                                    <div
                                        :class="
                                            step === 2 || step === 3
                                                ? 'w-10 h-10 bg-green-400 border-2 border-white mx-auto rounded-full text-center text-white py-1 shadow-xl'
                                                : 'w-10 h-10 bg-white border-2 border-gray-300 mx-auto rounded-full text-center py-1 shadow-xl'
                                        "
                                    >
                                        <span class="text-xl font-bold">2</span>
                                    </div>
                                </div>

                                <div
                                    class="w-2/6 align-center items-center align-middle content-center flex"
                                >
                                    <div
                                        :class="
                                            step === 3
                                                ? 'bg-green-300 w-full rounded items-center align-middle align-center flex-1'
                                                : 'bg-white w-full rounded items-center align-middle align-center flex-1'
                                        "
                                    >
                                        <div
                                            class="bg-green-light text-xs leading-none py-1 text-center text-grey-darkest rounded"
                                            style="width: 0%"
                                        ></div>
                                    </div>
                                </div>

                                <div class="flex-1">
                                    <div
                                        :class="
                                            step === 3
                                                ? 'w-10 h-10 bg-green-400 border-2 border-white mx-auto rounded-full text-center text-white py-1 shadow-xl'
                                                : 'w-10 h-10 bg-white border-2 border-gray-300 mx-auto rounded-full text-center py-1 shadow-xl'
                                        "
                                    >
                                        <span class="text-xl font-bold">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="p-5 bg-gray-50">
                        <form
                            @submit.prevent="submitPost(id)"
                            enctype="multipart/form-data"
                        >
                            <div v-show="step === 1">
                                <div class="my-2">
                                    <label
                                        for="name"
                                        class="font-semibold text-gray-500 ml-1"
                                        >Name</label
                                    >
                                    <input
                                        type="text"
                                        class="w-full shadow h-8 text-sm py-1 px-2 rounded-md focus:border focus:outline-none focus:shadow-outline placeholder-gray-300"
                                        placeholder="Product name .."
                                        v-model="product.name"
                                    />
                                </div>
                                <div class="my-2">
                                    <label
                                        for="name"
                                        class="font-semibold text-gray-500 ml-1"
                                        >Price</label
                                    >
                                    <input
                                        type="number"
                                        class="w-full shadow h-8 text-sm py-1 px-2 rounded-md focus:border focus:outline-none focus:shadow-outline placeholder-gray-300"
                                        placeholder="Product price .."
                                        v-model="product.price"
                                    />
                                </div>
                                <div class="my-2">
                                    <label
                                        for="name"
                                        class="font-semibold text-gray-500 ml-1"
                                        >Desc</label
                                    >
                                    <textarea
                                        type="file"
                                        class="bg-white w-full shadow h-20 text-sm py-1 px-2 rounded-md focus:border focus:outline-none focus:shadow-outline placeholder-gray-300"
                                        placeholder="Product description .."
                                        v-model="product.description"
                                    />
                                </div>
                            </div>
                            <div v-show="step === 2">
                                <div class="mr-9 flex justify-end">
                                    <div
                                        class="shadow-lg rounded-full hover:bg-purple-900 hover:text-white bg-purple-500 text-white hover:shadow-xl focus:outline-none w-10 h-10 flex transition duration-300"
                                        @click="addField(variant)"
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
                                    </div>
                                </div>
                                <div class="my-2">
                                    <div class="flex justify-around">
                                        <label
                                            for="name"
                                            class="font-semibold text-gray-500 ml-1 block"
                                            >Color</label
                                        >
                                        <label
                                            for="name"
                                            class="font-semibold text-gray-500 ml-1 block"
                                            >Qty</label
                                        >
                                    </div>
                                    <div
                                        class="flex justify-center my-2"
                                        v-for="(input, index) in variant"
                                        :key="`variant-${index}`"
                                    >
                                        <input
                                            type="text"
                                            class="w-2/5 shadow h-8 text-sm py-1 px-2 rounded-md focus:border focus:outline-none focus:shadow-outline placeholder-gray-300 mr-2 mt-1"
                                            placeholder="Color .."
                                            v-model="input.color"
                                        />
                                        <input
                                            type="text"
                                            class="w-2/5 shadow h-8 text-sm py-1 px-2 rounded-md focus:border focus:outline-none focus:shadow-outline placeholder-gray-300 mr-2 mt-1"
                                            placeholder="Qty .."
                                            v-model="input.qty"
                                        />
                                        <div
                                            class="shadow-lg rounded-full hover:bg-red-800 hover:text-white bg-red-500 text-white hover:shadow-xl focus:outline-none w-10 h-10 flex transition duration-300 p-3"
                                            @click="removeField(index, variant)"
                                            v-show="variant.length > 0"
                                        >
                                            <img
                                                src="/icon/trash.svg"
                                                alt=""
                                                width="20"
                                                height="20"
                                            />
                                        </div>
                                    </div>
                                    <div id="row-input"></div>
                                </div>
                            </div>
                            <div v-show="step === 3">
                                <div class="my-2">
                                    <label
                                        for="name"
                                        class="font-semibold text-gray-500 ml-1"
                                        >Image</label
                                    >
                                    <div
                                        class="flex items-center justify-center w-full mt-2"
                                    >
                                        <label
                                            class="flex flex-col w-full h-28 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300 bg-white mb-2"
                                        >
                                            <div
                                                class="flex flex-col items-center justify-center pt-4"
                                            >
                                                <div v-if="product.image">
                                                    <img
                                                        :src="product.image"
                                                        alt=""
                                                        class="w-24 h-20"
                                                    />
                                                </div>
                                                <div
                                                    v-else
                                                    class="flex flex-col items-center"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="w-12 h-12 text-gray-400 group-hover:text-gray-600"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor"
                                                    >
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                            clip-rule="evenodd"
                                                        />
                                                    </svg>
                                                    <p
                                                        class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600"
                                                    >
                                                        Select a photo
                                                    </p>
                                                </div>
                                            </div>
                                            <input
                                                type="file"
                                                class="opacity-0"
                                                accept="image/*"
                                                @change="previewImage"
                                            />
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div
                                :class="
                                    step === 1
                                        ? 'flex justify-end'
                                        : 'flex justify-between'
                                "
                            >
                                <button
                                    v-show="step === 2 || step === 3"
                                    class="rounded-full bg-white py-3 px-3 shadow-xl mr-2 hover:bg-gray-100"
                                    @click.prevent="prev()"
                                >
                                    <img src="/icon/prev.svg" alt="" />
                                </button>
                                <button
                                    v-show="step !== 3"
                                    class="rounded-full bg-white py-3 px-3 shadow-xl hover:bg-gray-100"
                                    @click.prevent="next()"
                                >
                                    <img
                                        src="/icon/next.svg"
                                        alt=""
                                        class="text-white"
                                    />
                                </button>
                                <button
                                    v-show="step === 3"
                                    class="px-4 h-10 shadow-lg text-white bg-blue-500 hover:bg-blue-700 rounded-full font-semibold mt-1"
                                >
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
import axios from "axios";

export default {
    data() {
        return {
            id: "",
            step: 1,
            product: {
                name: "",
                price: "",
                image: "",
                description: "",
                imageFile: "",
            },
            variant: [{ color: "", qty: "" }],
            errors: [],
        };
    },

    mounted: async function () {
        this.id = this.$route.params.id;
        await this.productEdit(this.$route.params.id);
    },

    methods: {
        async productEdit(id) {
            const data = await axios.get(`/api/product/${id}/edit`);
            console.log(data);
            this.id = data.data.id;
            this.product.name = data.data.name;
            this.product.price = data.data.price;
            this.variant = JSON.parse(data.data.variant);
            this.product.description = data.data.description;
            this.product.image = data.data.image;
        },

        async submitPost(id) {
            const formData = this.getFormData();
            console.log(formData);
            const data = await axios.patch(`/api/product/${id}`, formData);
            if (data.status) {
                this.$router.push({ path: "/product" });
                this.product = data.data;
            }
        },

        getFormData() {
            const formData = new FormData();
            formData.append("name", this.product.name);
            formData.append("price", this.product.price);
            formData.append("description", this.product.description);
            if (this.product.imageFile) {
                formData.append("imageFile", this.product.imageFile);
            } else {
                formData.append("image", this.product.image);
            }
            formData.append("variant", JSON.stringify(this.variant));
            return formData;
        },

        previewImage(event) {
            const file = event.target.files[0];
            this.product.imageFile = file;
            const reader = new FileReader();
            reader.addEventListener("load", this.imageLoaded);
            reader.readAsDataURL(file);
        },
        imageLoaded(event) {
            this.product.image = event.target.result;
        },

        prev() {
            this.step--;
        },

        next() {
            this.step++;
        },

        addField(fieldType) {
            fieldType.push({ color: "", qty: "" });
        },

        removeField(index, fieldType) {
            fieldType.splice(index, 1);
        },
    },
};
</script>
