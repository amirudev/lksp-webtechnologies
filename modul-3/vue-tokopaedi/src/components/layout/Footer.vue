<template>
    <footer class="border-t-2 bg-white p-10">
        <div class="flex justify-center items-center mb-10">
            <p class="font-bold mx-5 text-sm md:text-xl">Subscribe our newsletter</p>
            <form action="subscribe" class="flex items-center relative" id="footer-subscribe-form">
                <input type="text" class="border-2 rounded-full tokopayuli-border-green tokopayuli-color-green p-1 md:p-2 ml-5" style="width: 450px;">
                <button type="submit" class="tokopayuli-bg-green tokopayuli-border-green text-white rounded-full absolute right-0 border border-gray-500 p-1 md:p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </button>
            </form>
        </div>
        <div class="flex flex-wrap justify-between p-5 border-t-2">
            <div class="mx-2 text-center mb-4" style="max-width: 300px" id="footer-storeinformation">
                <img src="/images/logo-tokopayuli.png" class="mb-5 mx-auto" alt="Logo Tokopayuli" style="height: 50px; width: 150px; object-fit: cover; object-position: center;">
                <p class="text-md text-gray-500 mb-4">Jl. Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fugiat quos </p>
                <div class="flex flex-wrap justify-center">
                    <a href="#" class="rounded-lg border border px-6 py-2 tokopayuli-border-green tokopayuli-color-green mx-1 mb-2">Kunjungi</a>
                    <a href="#" class="rounded-lg border border px-6 py-2 tokopayuli-border-green tokopayuli-color-green mx-1 mb-2">Store Information</a>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full md:w-max mb-4 text-center md:text-left mx-6">
                    <p class="text-xl font-bold mb-5">Products</p>
                    <ul>
                        <li class="mb-1">
                            <a href="#">Clothes</a>
                        </li>
                        <li class="mb-1">
                            <a href="#">Accesories</a>
                        </li>
                        <li class="mb-1">
                            <a href="#">Art</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-max mb-4 text-center md:text-left mx-6">
                    <p class="text-xl font-bold mb-5">Our Company</p>
                    <ul>
                        <li class="mb-1">
                            <a href="#">Lorem ipsum</a>
                        </li>
                        <li class="mb-1">
                            <a href="#">dolor sit amet</a>
                        </li>
                        <li class="mb-1">
                            <a href="#">consectetur adipisicing</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-max mb-4 text-center md:text-left mx-6">
                    <p class="text-xl font-bold mb-5">Your Account</p>
                    <ul>
                        <li class="mb-1">
                            <a href="#">Lorem ipsum</a>
                        </li>
                        <li class="mb-1">
                            <a href="#">dolor sit amet</a>
                        </li>
                        <li class="mb-1">
                            <a href="#">consectetur adipisicing</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</template>
<script>
export default {
    name: 'Footer',
    component: {
        
    }
}
</script>