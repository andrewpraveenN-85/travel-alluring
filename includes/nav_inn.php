<?php include("./includes/header.php"); ?>

<nav class="flex items-center justify-between px-8 pt-1 bg-black text-white">
<div class="flex items-center">
    <a href="./index.php" class="flex items-center">
        <img src="./assetes/images/Vertical-transparent2.png" alt="Alluring Tours" class="h-10 lg:h-20">
    </a>
</div>

        <!-- Hamburger Icon (Hidden on Large Screens) -->
        <button id="menu-toggle" class="lg:hidden text-white focus:outline-none">
            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <!-- Navigation Links (Hidden on Small Screens) -->
        <div id="menu" class="hidden lg:flex lg:flex-row flex-col md:space-x-12 text-white font-semibold absolute lg:relative top-16 left-0 w-full lg:w-auto lg:top-auto lg:bg-transparent bg-black lg:flex-row flex-col lg:items-center items-start p-6 lg:p-0">
            <a href="./index.php" class="nav-link hover:underline py-2">Home</a>
            <a href="./index.php#about" class="nav-link hover:underline py-2">About Us</a>
            <a href="./destinations.php" class="nav-link hover:underline py-2">Destinations</a>
            <a href="./index.php#experiences" class="nav-link hover:underline py-2">Key Experiences</a>
            <a href="./index.php#footer" class="nav-link hover:underline py-2">Contact Us</a>
        </div>

        <!-- CTA Button -->
        <a href="#" class="hidden lg:inline-block border border-[#B9C37B] px-4 py-2 text-[#B9C37B] rounded-full hover:bg-green-300 hover:text-black transition">
            Plan Your Trip
        </a>
    </nav>

    <script>
        document.getElementById("menu-toggle").addEventListener("click", function () {
            let menu = document.getElementById("menu");
            menu.classList.toggle("hidden");
            menu.classList.toggle("flex");
        });
    </script>
    