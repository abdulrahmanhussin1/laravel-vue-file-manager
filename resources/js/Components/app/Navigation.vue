<template>
    <nav class="min-w-[200px]">
        <div class="h-[80px] px-3 flex items-center gap-3">

            <Link href="/">
            <ApplicationLogo class="block w-auto h-9 fill-current text-gray-800" />
            </Link>

            LaraStorage
        </div>
        <div class="px-">
            <CreateNewDropdown />
            <div class="py-3">
                <NavLink :href="route('myFiles')" :active="$page.url == '/my-files'">My Files</NavLink>
                <NavLink href="/">Shared with me</NavLink>
                <NavLink href="/">Shared by me</NavLink>
                <NavLink href="/">Trash</NavLink>
                <NavLink href="/">Starred Files</NavLink>

            </div>
        </div>
    </nav>
</template>


<script setup>
import { Link } from '@inertiajs/vue3'
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import CreateNewDropdown from '@/Components/app/CreateNewDropdown.vue';
import NavLink from '@/Components/NavLink.vue';

</script>


<style scoped></style>
