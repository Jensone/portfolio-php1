<?php
    // Récupération de la page courante
    $currentPage = $_SERVER['REQUEST_URI']; // '/quelque-chose'
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
    <script src="./assets/main.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-800 text-slate-50">
    <header>
        <nav class="p-2 flex justify-between items-center sticky top-0">
            <!-- Logo -->
            <a href="/">
                <img src="./images/logo.png" alt="votre logo" width="50">
            </a>

            <!-- Bouton hamburger pour mobile -->
            <button id="menu-btn" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Menu navigation -->
            <ul class="bg-slate-700 p-1 rounded-lg hidden md:flex gap-4" id="menu">
                <li class="p-2 duration-300 ease-in-out hover:text-amber-500 <?= $currentPage == '/about' ? 'bg-slate-50 text-slate-800 rounded-lg shadow-lg' : '' ?>">
                    <a href="/about">Présentation</a>
                </li>
                <li class="p-2 duration-300 ease-in-out hover:text-amber-500 <?= $currentPage == '/skills' ? 'bg-slate-50 text-slate-800 rounded-lg shadow-lg' : '' ?>">
                    <a href="/skills">Mes compétences</a>
                </li>
                <li class="p-2 duration-300 ease-in-out hover:text-amber-500 <?= $currentPage == '/projects' ? 'bg-slate-50 text-slate-800 rounded-lg shadow-lg' : '' ?>">
                    <a href="/projects">Mes projets</a>
                </li>
                <li class="p-2 duration-300 ease-in-out hover:text-amber-500 <?= $currentPage == '/contact' ? 'bg-slate-50 text-slate-800 rounded-lg shadow-lg' : '' ?>">
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Menu mobile -->
        <nav id="mobile-menu" class="hidden md:hidden fixed top-18 right-0 w-1/2 h-screen bg-slate-50 text-slate-500 shadow-xl">
            <ul class="flex flex-col p-4">
                <li class="p-2 flex gap-2 items-center hover:text-slate-800 duration-300 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2M7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.5.88 4.93 1.78A7.9 7.9 0 0 1 12 20c-1.86 0-3.57-.64-4.93-1.72m11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33A7.93 7.93 0 0 1 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.5-1.64 4.83M12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6m0 5a1.5 1.5 0 0 1-1.5-1.5A1.5 1.5 0 0 1 12 8a1.5 1.5 0 0 1 1.5 1.5A1.5 1.5 0 0 1 12 11"/></svg>
                    <a href="/about" class="">Présentation</a>
                </li>
                <li class="p-2 flex gap-2 items-center hover:text-slate-800 duration-300 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M3 21h8v-8H3m2 2h4v4H5m-2-8h8V3H3m2 2h4v4H5m8-6v8h8V3m-2 6h-4V5h4m-1 11h3v2h-3v3h-2v-3h-3v-2h3v-3h2Z"/></svg>
                    <a href="/skills" class="">Mes compétences</a>
                </li>
                <li class="p-2 flex gap-2 items-center hover:text-slate-800 duration-300 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6.1 10L4 18V8h17a2 2 0 0 0-2-2h-7l-2-2H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h15c.9 0 1.7-.6 1.9-1.5l2.3-8.5zM19 18H6l1.6-6h13z"/></svg>
                    <a href="/projects" class="">Mes projets</a>
                </li>
                <li class="p-2 flex gap-2 items-center hover:text-slate-800 duration-300 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M9 22a1 1 0 0 1-1-1v-3H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6.1l-3.7 3.71c-.2.19-.45.29-.7.29zm1-6v3.08L13.08 16H20V4H4v12zm6-2H8v-1c0-1.33 2.67-2 4-2s4 .67 4 2zm-4-8a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2"/></svg>
                    <a href="/contact" class="">Contact</a>
                </li>
            </ul>
        </nav>
    </header>