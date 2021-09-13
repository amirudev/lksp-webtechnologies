<template>
    <div class="container mx-auto" id="content-wrapper">
        <article>
            <div class="font-bold my-10 text-center text-xl">Keranjang Belanja</div>
            <div class="mb-4" style="overflow-x: auto">
                <table class="mx-auto table-auto border" style="max-width: 720px">
                    <thead>
                        <tr>
                            <th class="px-4 border">No.</th>
                            <th class="px-4 border">Produk</th>
                            <th class="px-4 border">Nama</th>
                            <th class="px-4 border">Harga</th>
                            <th class="px-4 border">Kategori</th>
                            <th class="px-4 border">Kuantitas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <table-row-cart-item v-for="(product, index) in getProductList" :index="index + 1" :image="product.image" :name="product.name" :price="product.price" :category="product.category" :quantity="1" :key="product.name"></table-row-cart-item>
                    </tbody>
                </table>
            </div>
            <div class="flex justify-end mb-4 mx-1">
                <router-link to="summary">
                    <button class="px-4 py-2 border rounded-lg tokopayuli-bg-green text-white">Lanjutkan ke Pembayaran</button>
                </router-link>
            </div>
        </article>
    </div>
</template>
<script>
import 'es6-promise/auto'
import TableRowCartItem from '../components/TableRowCartItem.vue'

export default {
    name: 'Cart',
    components: {
        'table-row-cart-item': TableRowCartItem
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
        getProductList(){
            let products = []
            this.$store.state.cart.forEach(itemId => {
                let product = this.products.find(product => {
                    return product.id == itemId
                })
                products.push(product)
            });

            return products
        }
    }
}
</script>