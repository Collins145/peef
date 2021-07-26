<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEEF</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/public/css/style.css' ?>">
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</head>
<body>
<!-- Navigation Menu -->
<nav x-data="{isOpen: false}">
    <div class="max-w-6xl mx-auto py-6">
        <div class="flex items-center justify-between">
            <a href="/"><p class="text-3xl font-bold ml-4">PEEF</p></a>
            <div class="space-x-6 invisible sm:visible">
                <a class="text-black hover:text-red-100 font-semibold" href="#">HOME</a>
                <a class="text-black hover:text-red-100 font-semibold" href="#about">ABOUT</a>
                <a class="text-black hover:text-red-100 font-semibold" href="#">SERVICES</a>
                <a class="text-black hover:text-red-100 font-semibold" href="#">CONTACT</a>
            </div>
            <button @click="isOpen = !isOpen" type="button" class="text-green-400 block sm:hidden cursor-pointer mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-red-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <!-- Mobile menu -->
        <div x-show="isOpen">
            <div class="space-y-4 text-center">
                <a href="#" class="block">HOME</a>
                <a href="#" class="block">ABOUT</a>
                <a href="#"class="block">SERVICES</a>
                <a href="#" class="block">CONTACT</a>
            </div>
        </div>
    </div>
</nav>
<!-- Main Section -->
<main>