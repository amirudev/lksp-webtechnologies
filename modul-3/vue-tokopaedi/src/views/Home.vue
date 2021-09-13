<template>
    <div class="container mx-auto" id="content-wrapper">
        <section class="mt-4 md:m-5">
            <div class="flex mb-4" id="section-first-slideshow">
                <div class="slideshow-container w-full md:flex-grow sm:w-full bg-gray-200 rounded-lg mx-2 relative" style="height: 350px;">
                    <button id="slideshow-control-prev" class="slideshow-control absolute left-0 h-full flex items-center px-2" @click="changeCurrentSlideshowIndex(-1)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z" />
                        </svg>
                    </button>
                    <button id="slideshow-control-next" class="slideshow-control absolute right-0 h-full flex items-center px-2" @click="changeCurrentSlideshowIndex(1)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.933 12.8a1 1 0 000-1.6L6.6 7.2A1 1 0 005 8v8a1 1 0 001.6.8l5.333-4zM19.933 12.8a1 1 0 000-1.6l-5.333-4A1 1 0 0013 8v8a1 1 0 001.6.8l5.333-4z" />
                        </svg>
                    </button>
                    <img :src="slideshowAssetImage[currentSlideshowIndex]" alt="Slideshow" style="height: 100%; width: 100%; object-fit: cover;" id="slideshow-banner-image">
                </div>
                <card-product :title="products[0].name" :image="products[0].image" :price="products[0].price" :normalPrice="products[0].normalPrice" :id="products[0].id"/>
            </div>
        </section>
        <article class="container">
            <div class="font-bold my-10 text-center text-xl"> New Products </div>
            <div class="flex flex-wrap justify-center" id="article-products">
                <card-product v-for="(product, index) in getLatestProducts" :key="index" :title="product.name" :image="product.image" :price="product.price" :normalPrice="product.normalPrice" :id="product.id"/>
            </div>
            <div class="text-center mx-10">
                <a href="#" class="text-gray-500 font-bold">Lihat semua produk</a>
            </div>
        </article>
        <article class="m-5">
            <div class="w-full rounded-lg" id="article-banner" style="height: 250px;">
                <img src="/images/sale-2.jpg" alt="Banner" style="width: 100%; height: 100%; object-fit: contain;">
            </div>
        </article>
        <article class="m-5">
            <div class="w-full text-center bg-white p-10 rounded-lg">
                <h3 class="font-bold text-xl">CUSTOM TEXT BLOCK</h3>
                <p class="font-bold text-gray-500 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores quidem</p>
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam libero maxime praesentium labore eligendi esse quam laboriosam unde ex sint possimus, tenetur nisi suscipit consequuntur qui itaque obcaecati voluptates? Tempora!</p>
            </div>
        </article>
    </div>
</template>

<script>
import CardProduct from '../components/CardProduct.vue';


export default {
    name: 'Home',
    data(){
        return {
            slideshowAssetImage: ['/images/asset-1.jpg', '/images/asset-2.jpg', '/images/asset-3.jpg'],
            currentSlideshowIndex: 0,
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
    },
    methods: {
        changeCurrentSlideshowIndex(index) {
            this.currentSlideshowIndex += index;

            if(this.currentSlideshowIndex <= 0){
                this.currentSlideshowIndex = this.slideshowAssetImage.length - 1;
            } else if(this.currentSlideshowIndex > this.slideshowAssetImage.length - 1) {
                this.currentSlideshowIndex = 0;
            }
        }
    },
    components: {
        'card-product': CardProduct
    },
    computed: {
        getLatestProducts(){
            console.log()
            return this.products.slice(1, 4)
        }
    }
}
</script>
