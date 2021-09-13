<template>
    <router-link :to="'/category/' + this.title">
        <div class="bg-gray-200 rounded-lg mx-1 mb-3 flex flex-col justify-around" style="width: 250px; height: 350px;">
            <img :src="this.images" class="mx-auto" alt="Products" style="width: 100%; height: 250px; object-fit: contain;">
            <p class="text-center font-bold">{{ this.title }}</p>
        </div>
    </router-link>
</template>
<script>
export default {
    name: 'card-category',
    component: {
        
    },
    props: ['title', 'images'],
}
</script>