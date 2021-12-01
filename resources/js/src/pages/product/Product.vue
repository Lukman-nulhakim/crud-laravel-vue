<template>
    <div class="card mt-5">
        <div class="card-header">
            <router-link to="/product/create" class="btn btn-primary float-right">Create</router-link>
        </div>
        <div class="card-body">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="product, index in products" :key="index">
                        <td>{{ index+1 }}</td>
                        <td>{{ product.title }}</td>
                        <td>{{ product.description }}</td>
                        <td>
                            <router-link :to="{ name: 'editProduct', params:{id:product.id}}" class="btn btn-success">Edit</router-link>
                            <button class="btn btn-danger" v-on:click="submitPostDelete(product.id, index)">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
  data() {
    return {
      products: [],
      errors: []
    }
  },

  // Fetches posts when the component is created.
  mounted() {
    this.getProduct()
  },
  
  methods: {
    async getProduct(){
      const data = await axios.get(`/api/product`)
      if (data.status) {
          this.products = data.data
      }
    },

    async submitPostDelete(id, index)
    {
      const data = await axios.delete(`/api/product/${id}`)
      if (data.status) {
        this.products.splice(index, 1)
      }
    }
  },
}
</script>