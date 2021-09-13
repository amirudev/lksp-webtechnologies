<template>
    <div class="container mx-auto" id="content-wrapper">
        <article class="container">
            <div class="font-bold my-10 text-center text-xl">Daftar Produk dalam "{{ $route.params.category_name }}"</div>
            <div class="flex flex-wrap justify-center" id="article-products">
                <card-product v-for="product in filteredProducts" :key="product.name" :id="product.id" :title="product.name" :normalPrice="product.normalPrice" :price="product.price" :image="product.image"/>
            </div>
        </article>
    </div>
</template>
<script>
import CardProduct from '../components/CardProduct.vue'

export default {
    components: {
        'card-product': CardProduct
    },
    computed: {
        filteredProducts(){
            return this.products.filter((product) => {
                return product.category.includes(this.$route.params.category_name)
            });
        }
    },
    data(){
        return {
            products: [
                {
                    id: '1',
                    name: 'Macbook 2016',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-1.png',
                    category: 'Laptop'
                },
                {
                    id: '2',
                    name: 'Macbook 2017',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-1.png',
                    category: 'Laptop'
                },
                {
                    id: '3',
                    name: 'Macbook 2018',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-1.png',
                    category: 'Laptop'
                },
                {
                    id: '4',
                    name: 'Macbook 2019',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-1.png',
                    category: 'Laptop'
                },
                {
                    id: '5',
                    name: 'iPHone 2016',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-2.png',
                    category: 'Handphone'
                },
                {
                    id: '6',
                    name: 'iPHone 2017',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-2.png',
                    category: 'Handphone'
                },
                {
                    id: '7',
                    name: 'iPHone 2018',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-2.png',
                    category: 'Handphone'
                },
                {
                    id: '8',
                    name: 'iPHone 2019',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-2.png',
                    category: 'Handphone'
                },
                {
                    id: '9',
                    name: 'Model LTE Apple 2016',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-3.png',
                    category: 'Modem'
                },
                {
                    id: '10',
                    name: 'Model LTE Apple 2017',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-3.png',
                    category: 'Modem'
                },
                {
                    id: '11',
                    name: 'Model LTE Apple 2018',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-3.png',
                    category: 'Modem'
                },
                {
                    id: '12',
                    name: 'Model LTE Apple 2019',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-3.png',
                    category: 'Modem'
                },
                {
                    id: '13',
                    name: 'iWatch 16',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-4.png',
                    category: 'Smartwatch'
                },
                {
                    id: '14',
                    name: 'iWatch 17',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-4.png',
                    category: 'Smartwatch'
                },
                {
                    id: '15',
                    name: 'iWatch 18',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-4.png',
                    category: 'Smartwatch'
                },
                {
                    id: '16',
                    name: 'iWatch 19',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-4.png',
                    category: 'Smartwatch'
                },
            ]
        }
    }
}
</script>