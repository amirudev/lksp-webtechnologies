<template>
    <router-link :to="'/product/' + this.id">
        <div class="bg-gray-200 rounded-lg mx-1 mb-3" style="width: 250px; height: 350px;">
            <img :src="this.image" class="mx-auto" alt="Products" style="width: 100%; height: 250px; object-fit: contain;">
            <div class="mx-4 product-description">
                <p class="font-bold mb-3">{{this.title}}</p>
                <p class="font-bold text-sm line-through">{{this.normalPrice}}</p>
                <p class="font-bold text-red-500">{{this.price}}</p>
            </div>
        </div>
    </router-link>
</template>
<script>
export default {
    name: 'card-product',
    component: {
        
    },
    props: ['id', 'title', 'normalPrice', 'price', 'image'],
}
</script>