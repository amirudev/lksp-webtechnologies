<template>
    <tr>
        <td class="border">
            <p class="text-center">{{ this.index }}</p>
        </td>
        <td class="border">
            <img :src="this.image" alt="Product 1" style="max-width: 100px">
        </td>
        <td class="border px-4">
            <p>Nama Produk : {{ this.name }}</p>
            <p>Kategori : {{ this.category }}</p>
            <p>Kuantitas : {{ this.quantity }}</p>
            <p>Harga : {{ this.price }}</p>
            <div class="flex justify-end">
                <p class="font-bold">Total : <span class="font-bold text-red-500">Rp20.000</span></p>
            </div>
        </td>
    </tr>
</template>
<script>
export default {
    name: 'table-row-summary-item',
    props: ['index', 'image', 'name', 'category', 'quantity', 'price'],
}
</script>