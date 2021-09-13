<template>
    <div class="container mx-auto" id="content-wrapper">
        <article>
            <div class="my-10">
                <p class="font-bold text-center text-xl">Ringkasan Belanja</p>
                <p class="font-bold text-center text-gray-500">Terima kasih telah berbelanja di Tokopayuli!</p>
            </div>
            <div class="container border py-5 mx-auto mb-4" style="max-width: 660px">
                <p class="text-center font-bold mb-4">No. Referensi : #{{ Date.now() }}</p>
                <table class="mb-4">
                    <thead>
                        <tr>
                            <td class="px-4 border">No.</td>
                            <td class="px-4 border">Produk</td>
                            <td class="px-4 border w-full">Detail</td>
                        </tr>
                    </thead>
                    <tbody>
                        <table-row-summary-item v-for="(product, index) in getProductList" :index="index + 1" :image="product.image" :name="product.name" :price="product.price" :category="product.category" :quantity="1" :key="product.name"></table-row-summary-item>
                    </tbody>
                </table>
                <div class="flex justify-end">
                    <button class="px-4 py-2 border rounded tokopayuli-bg-green text-white mx-2">Simpan bukti transaksi</button>
                </div>
            </div>
        </article>
    </div>
</template>
<script>
import TableRowSummaryItem from '../components/TableRowSummaryItem.vue'

export default {
    components: {
        'table-row-summary-item': TableRowSummaryItem
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