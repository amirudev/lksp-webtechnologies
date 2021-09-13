<template>
    <header class="bg-white">
        <div class="justify-between pt-3 border-b-2 hidden md:flex">
            <div class="mb-3 ml-5">
                <a href="#" class="font-bold text-sm">Hubungi Kami</a>
            </div>
            <div class="mb-3 mr-5">
                <router-link to="/login">
                    <button class="tokopayuli-bg-green tokopayuli-border-green text-white border px-4 py-1 mr-1 rounded text-sm">Masuk</button>
                </router-link>
                <router-link to="/cart">
                    <button class="tokopayuli-color-green tokopayuli-border-green border px-4 py-1 mr-1 rounded text-sm">Keranjang Saya ( {{ countCartItem }} )</button>
                </router-link>
            </div>
        </div>
        <div class="flex justify-between border-b-2">
            <div class="flex py-3 ml-5">
                <div class="mr-5">
                    <img src="/images/logo-tokopayuli.png" alt="Logo Tokopayuli" style="height: 50px; width: 150px; object-fit: cover; object-position: center;">
                </div>
                <div class="hidden md:flex items-center">
                    <nav>
                        <router-link class="mx-3 font-bold" to="/">Home</router-link>
                        <router-link class="mx-3 font-bold" to="/category">Category</router-link>
                    </nav>
                </div>
            </div>
            <div class="hidden md:flex py-3 mr-5 items-center">
                <form action="/search" class="flex">
                    <div class="relative">
                        <input type="text" name="product_name" class="border tokopayuli-border-green tokopayuli-color-green rounded-full px-6 py-2" placeholder="Cari produk kami">
                        <button type="submit" class="p-2 tokopayuli-bg-green border tokopayuli-border-green text-white rounded-full absolute right-1 top-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <button class="flex md:hidden items-center p-4" id="mobile-responsive-nav-button" @click="toggleNavbarMobile">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <div id="mobile-responsive-nav" class="shadow" :class="{hidden: !isNavbarMobileOpen}">
            <div class="p-4">
                <div class="flex justify-between mx-5 mb-2">
                    <router-link to="/login">
                        <button class="tokopayuli-bg-green tokopayuli-border-green text-white border px-4 py-1 mr-1 rounded text-sm">Masuk</button>
                    </router-link>
                    <router-link to="/cart">
                        <button class="tokopayuli-color-green tokopayuli-border-green border px-4 py-1 mr-1 rounded text-sm">Keranjang Saya ( {{ countCartItem }} )</button>
                    </router-link>
                </div>
                <form action="/search" class="flex justify-center mb-2 relative">
                    <input type="text" name="product_name" class="border tokopayuli-border-green rounded-full py-1 w-full px-4 mx-5" placeholder="Cari produk kami">
                    <button type="submit" class="p-2 bg-gray-200 border tokopayuli-border-green tokopayuli-bg-green text-white rounded-full absolute right-5 top-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </form>
                <ul class="mt-4 text-left mx-4">
                    <li class="mb-2">
                        <router-link class="font-bold" to="/">Home</router-link>
                    </li>
                    <li class="mb-2">
                        <router-link class="font-bold" to="/category">Category</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</template>
<script>
import 'es6-promise/auto'

export default {
    name: 'Header',
    components: {
    },
    data() {
        return {
            isNavbarMobileOpen: false
        }
    },
    methods: {
        toggleNavbarMobile(){
            this.isNavbarMobileOpen = !this.isNavbarMobileOpen
        }
    },
    computed: {
        countCartItem(){
            return this.$store.getters.cartCount
        }
    }
}
</script>