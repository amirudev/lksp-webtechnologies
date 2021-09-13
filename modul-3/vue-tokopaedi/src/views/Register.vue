<template>
    <div class="container mx-auto" id="content-wrapper" style="max-width: 600px">
        <article class="container">
            <div class="my-10 text-center">
                <p class="font-bold text-2xl mb-4">Daftar / Register</p>
                <p class="font-bold">
                    Daftar akun Tokopayuli untuk bertransaksi, sudah punya akun ? 
                    <router-link to="/login">
                        <span class="text-red-500">Login disini</span>
                    </router-link>
                </p>
                <div class="mt-5">
                    <form action="">
                        <div class="mt-4">
                            <label for="username" class="font-bold">Username</label>
                            <input type="text" name="username" id="username" class="w-full p-2 rounded border mt-4">
                        </div>
                        <div class="mt-4">
                            <label for="password" class="font-bold">Password</label>
                            <input type="password" name="password" id="password" class="w-full p-2 rounded border mt-4">
                        </div>
                        <button type="submit" class="w-full py-2 tokopayuli-bg-green tokopayuli-border-green text-white rounded mt-4">Daftar</button>
                    </form>
                </div>
            </div>
        </article>
    </div>
</template>