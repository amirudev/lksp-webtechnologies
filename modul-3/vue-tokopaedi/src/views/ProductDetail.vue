<template>
    <div class="container mx-auto" id="content-wrapper">
        <article class="container my-5 flex flex-wrap">
            <div class="bg-gray-200 mx-2 w-full md:w-5/12 rounded-lg" style="max-height: 400px">
                <img src="/images/product-1.png" alt="Product" style="width: 100%; max-height: 400px; object-fit: contain;">
            </div>
            <div class="m-2 md:my-0 w-full md:w-1/2 flex flex-col justify-between">
                <div>
                    <h1 class="text-xl font-bold mb-4">{{ currentDisplayedProduct.name }}</h1>
                    <div class="flex items-end mb-4">
                        <p class="text-3xl font-bold mr-2">{{ currentDisplayedProduct.price }}</p>
                        <p class="text-xl font-bold text-sm line-through text-red-500">{{ currentDisplayedProduct.normalPrice }}</p>
                    </div>
                    <hr>
                    <p class="text-lg font-bold mt-4 mb-2">Deskripsi Produk</p>
                    <p>{{ currentDisplayedProduct.description }}</p>
                </div>
                <div class="flex mt-4">
                    <button @click="addItemToCart" class="border tokopayuli-border-green tokopayuli-color-green px-2 md:px-4 py-2 rounded">
                        Tambah ke Keranjang
                    </button>
                    <button class="border tokopayuli-bg-green tokopayuli-border-green text-white px-2 md:px-4 py-2 rounded ml-1 flex-grow">
                        Beli Sekarang
                    </button>
                </div>
            </div>
        </article>
    </div>
</template>
<script>
export default {
    data(){
        return {
            products: [
                {
                    id: '1',
                    name: 'Macbook 2016',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-1.png',
                    category: 'Laptop',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae mollitia alias voluptatibus, fugiat dicta pariatur incidunt aut, explicabo excepturi officiis. Nobis dolorum magnam cum ut, culpa suscipit totam adipisci?',
                },
                {
                    id: '2',
                    name: 'Macbook 2017',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-1.png',
                    category: 'Laptop',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae mollitia alias voluptatibus, fugiat dicta pariatur incidunt aut, explicabo excepturi officiis. Nobis dolorum magnam cum ut, culpa suscipit totam adipisci?',
                },
                {
                    id: '3',
                    name: 'Macbook 2018',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-1.png',
                    category: 'Laptop',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae mollitia alias voluptatibus, fugiat dicta pariatur incidunt aut, explicabo excepturi officiis. Nobis dolorum magnam cum ut, culpa suscipit totam adipisci?',
                },
                {
                    id: '4',
                    name: 'Macbook 2019',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-1.png',
                    category: 'Laptop',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae mollitia alias voluptatibus, fugiat dicta pariatur incidunt aut, explicabo excepturi officiis. Nobis dolorum magnam cum ut, culpa suscipit totam adipisci?',
                },
                {
                    id: '5',
                    name: 'iPHone 2016',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-2.png',
                    category: 'Handphone',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae mollitia alias voluptatibus, fugiat dicta pariatur incidunt aut, explicabo excepturi officiis. Nobis dolorum magnam cum ut, culpa suscipit totam adipisci?',
                },
                {
                    id: '6',
                    name: 'iPHone 2017',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-2.png',
                    category: 'Handphone',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae mollitia alias voluptatibus, fugiat dicta pariatur incidunt aut, explicabo excepturi officiis. Nobis dolorum magnam cum ut, culpa suscipit totam adipisci?',
                },
                {
                    id: '7',
                    name: 'iPHone 2018',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-2.png',
                    category: 'Handphone',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae mollitia alias voluptatibus, fugiat dicta pariatur incidunt aut, explicabo excepturi officiis. Nobis dolorum magnam cum ut, culpa suscipit totam adipisci?',
                },
                {
                    id: '8',
                    name: 'iPHone 2019',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-2.png',
                    category: 'Handphone',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae mollitia alias voluptatibus, fugiat dicta pariatur incidunt aut, explicabo excepturi officiis. Nobis dolorum magnam cum ut, culpa suscipit totam adipisci?',
                },
                {
                    id: '9',
                    name: 'Model LTE Apple 2016',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-3.png',
                    category: 'Modem',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae mollitia alias voluptatibus, fugiat dicta pariatur incidunt aut, explicabo excepturi officiis. Nobis dolorum magnam cum ut, culpa suscipit totam adipisci?',
                },
                {
                    id: '10',
                    name: 'Model LTE Apple 2017',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-3.png',
                    category: 'Modem',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae mollitia alias voluptatibus, fugiat dicta pariatur incidunt aut, explicabo excepturi officiis. Nobis dolorum magnam cum ut, culpa suscipit totam adipisci?',
                },
                {
                    id: '11',
                    name: 'Model LTE Apple 2018',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-3.png',
                    category: 'Modem',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae mollitia alias voluptatibus, fugiat dicta pariatur incidunt aut, explicabo excepturi officiis. Nobis dolorum magnam cum ut, culpa suscipit totam adipisci?',
                },
                {
                    id: '12',
                    name: 'Model LTE Apple 2019',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-3.png',
                    category: 'Modem',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae mollitia alias voluptatibus, fugiat dicta pariatur incidunt aut, explicabo excepturi officiis. Nobis dolorum magnam cum ut, culpa suscipit totam adipisci?',
                },
                {
                    id: '13',
                    name: 'iWatch 16',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-4.png',
                    category: 'Smartwatch',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae mollitia alias voluptatibus, fugiat dicta pariatur incidunt aut, explicabo excepturi officiis. Nobis dolorum magnam cum ut, culpa suscipit totam adipisci?',
                },
                {
                    id: '14',
                    name: 'iWatch 17',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-4.png',
                    category: 'Smartwatch',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae mollitia alias voluptatibus, fugiat dicta pariatur incidunt aut, explicabo excepturi officiis. Nobis dolorum magnam cum ut, culpa suscipit totam adipisci?',
                },
                {
                    id: '15',
                    name: 'iWatch 18',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-4.png',
                    category: 'Smartwatch',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae mollitia alias voluptatibus, fugiat dicta pariatur incidunt aut, explicabo excepturi officiis. Nobis dolorum magnam cum ut, culpa suscipit totam adipisci?',
                },
                {
                    id: '16',
                    name: 'iWatch 19',
                    normalPrice: 'Rp19.000.000',
                    price: 'Rp18.000.000',
                    image: '/images/product-4.png',
                    category: 'Smartwatch',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae mollitia alias voluptatibus, fugiat dicta pariatur incidunt aut, explicabo excepturi officiis. Nobis dolorum magnam cum ut, culpa suscipit totam adipisci?',
                },
            ]
        }
    },
    computed: {
        currentDisplayedProduct(){
            return this.products.find(product => {
                return product.id == this.$route.params.product_id
            })
        }
    },
    methods: {
        addItemToCart(){
            this.$store.commit('addItem', this.currentDisplayedProduct.id)
        }
    },

}
</script>