<template>
    <tr>
        <td>
            <p class="text-center">{{ this.index }}</p>
        </td>
        <td class="px-2 border">
            <img :src="this.image" alt="Product 1" style="max-width: 100px">
        </td>
        <td class="px-2 border w-full">
            {{ this.name }}
        </td>
        <td class="px-2 border">
            {{ this.price }}
        </td>
        <td class="px-2 border">
            {{ this.category }}
        </td>
        <td class="px-2 border">
            <div class="flex">
                <button class="p-2 bg-gray-200">+</button><input type="number" class="py-2 w-16 text-center" :value="this.quantity"><button class="p-2 bg-gray-200">-</button>
            </div>
        </td>
    </tr>
</template>
<script>
export default {
    name: 'table-row-cart-item',
    props: ['index', 'image', 'name', 'price', 'category', 'quantity']
}
</script>