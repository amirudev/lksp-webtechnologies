<template>
    <div class="container mx-auto" id="content-wrapper">
        <article class="container">
            <div class="font-bold my-10 text-center text-xl">Kategori Produk</div>
            <div class="flex flex-wrap justify-center" id="article-products">
                <card-category v-for="category in this.categories" :title="category.title" :images="category.image" :key="category.title"/>
            </div>
        </article>
    </div>
</template>
<script>
import CardCategory from '../components/CardCategory.vue'

export default {
    data(){
        return {
            categories: [
                {
                    title: 'Laptop',
                    image: '/images/product-1.png',
                },
                {
                    title: 'Handphone',
                    image: '/images/product-2.png',
                },
                {
                    title: 'Modem',
                    image: '/images/product-3.png',
                },
                {
                    title: 'Smartwatch',
                    image: '/images/product-4.png',
                },
            ]
        }
    },
    components: {
        'card-category': CardCategory
    }
}
</script>