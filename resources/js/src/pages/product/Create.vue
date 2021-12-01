<template>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Buat Product</div>
                    <div class="card-body">
                        <form @submit.prevent="submitPost()">
                            <div class="form-group mb-2">
                                <input type="text" v-model="product.title" class="form-control" placeholder="Title">
                            </div>
                            <div class="form-group mb-2">
                                <textarea v-model="product.description" rows="5" placeholder="Description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <router-link to="/product" class="btn btn-warning">Back</router-link>
                                <button class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            product: {
                title:"",
                description:""
            },
            errors: []
        }
    },

    methods: {
        async submitPost() {
            const data = await axios.post(`/api/product`, this.product)
            if (data.status) {
                this.$router.push({path:'/product'})
                this.product = data.data
            }
        },
    }
}
</script>