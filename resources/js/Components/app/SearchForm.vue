<template>
    <div class="w-[600px] h-[80px] flex items-center">
        <TextInput type="text" class="block w-full mr-2" v-model="form.search" autocomplete
            Placeholder="Search for files and folders" />
    </div>
</template>


<script setup>
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';



const form = useForm({

})
</script>


<style scoped></style>
