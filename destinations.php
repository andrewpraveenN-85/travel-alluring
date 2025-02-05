<?php include("./includes/header.php"); ?>

<?php
$images = [
    ["src" => "./assetes/images/d1.png", "title" => "COLOMBO", "link" => "travelsd.php?interface=COLOMBO"],
    ["src" => "./assetes/images/Galle Fort.jpeg", "title" => "GALLE", "link" => "travelsd.php?interface=GALLE"],
    ["src" => "./assetes/images/d5.png", "title" => "KANDY", "link" => "travelsd.php?interface=KANDY"],
    ["src" => "./assetes/images/d4.png", "title" => "JAFFNA", "link" => "travelsd.php?interface=JAFFNA"],
    ["src" => "./assetes/images/d3.png", "title" => "ANURADHAPURA", "link" => "travelsd.php?interface=ANURADHAPURA"],
    ["src" => "./assetes/images/Polonnaruwa Gal Viharaya.jpeg", "title" => "POLONNARUWA", "link" => "travelsd.php?interface=POLONNARUWA"],
    ["src" => "./assetes/images/Light House -Dondra (Dewundara), SriLanka.jpeg", "title" => "MATHARA", "link" => "travelsd.php?interface=MATHARA"],
    ["src" => "./assetes/images/Edison bungalow.jpeg", "title" => "NUWARAELIYA", "link" => "travelsd.php?interface=NUWARAELIYA"],
    ["src" => "./assetes/images/Kinda Hard one.jpeg", "title" => "HAMBANTHOTA", "link" => "travelsd.php?interface=HAMBANTHOTA"],
    ["src" => "./assetes/images/Ella Nine Arches Bridge.jpeg", "title" => "BADULLA", "link" => "travelsd.php?interface=BADULLA"],
    ["src" => "./assetes/images/Kalutara Sri Lanka.jpeg", "title" => "KALUTHARA", "link" => "travelsd.php?interface=KALUTHARA"],
    ["src" => "./assetes/images/Koneswaram Temple.jpeg", "title" => "TRINCOMALEE", "link" => "travelsd.php?interface=TRINCOMALEE"],
];
?>

<div class="relative w-full h-screen flex flex-col items-center bg-cover bg-center" style="background-image: url('./assetes/images/bg1.png');">
    <!-- Black Opacity Overlay -->
    <div class="absolute inset-0 bg-black opacity-80"></div>

    <!-- Content Section -->
    <div class="relative w-full flex flex-col justify-center items-center mt-8 space-y-2 z-10">
        <p class="text-4xl md:text-6xl text-[#B9C37B] font-bold">DESTINATIONS</p>
        <p class="text-[#B9C37B] text-lg md:text-2xl font-bold text-center">Every destination is a new adventure waiting for you!</p>
    </div>

    <!-- Carousel Section -->
    <div class="relative h-[1000px] w-full md:w-full md:w-full md:h-[100vh] flex flex-col justify-center items-center z-10 overflow-hidden ">
        <div id="carousel" class="flex gap-4 transition-transform duration-500 overflow-x-auto snap-x snap-mandatory w-full px-6 md:overflow-hidden">
            <?php foreach ($images as $index => $image): ?>
                <a href="<?= $image['link'] ?>" class="carousel-item flex-none flex flex-col w-1/2 md:w-1/5 md:h-[500px] h-[400px] justify-between items-center transition-all duration-500 snap-center" data-index="<?= $index ?>">
                    <div class="flex justify-center items-center h-[400px]  md:h-[400px]">
                        <img class="rounded-[180px] w-[200px] md:w-[260px] md:h-[400px] h-[300px] transition-all duration-500 opacity-80 hover:opacity-100 md:mt-24" src="<?= $image['src'] ?>" alt="<?= $image['title'] ?>" />
                    </div>
                    <p class="text-center text-md md:text-xl opacity-0 text-[#B9C37B] transition-opacity duration-500"><?= $image['title'] ?></p>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Left Arrow -->
        <button id="leftArrow" class="hidden md:flex absolute left-4 top-1/2 transform -translate-y-1/2 bg-[#EFBF044D] w-12 h-12 text-[#B9C37B] text-3xl border border-[#EFBF04] rounded-full shadow-lg z-20 items-center justify-center hover:bg-gray-400">
            <span>&lt;</span>
        </button>

        <!-- Right Arrow -->
        <button id="rightArrow" class="hidden md:flex absolute right-4 top-1/2 transform -translate-y-1/2 bg-[#EFBF044D] w-12 h-12 text-[#B9C37B] text-3xl border border-[#EFBF04] rounded-full shadow-lg z-20 items-center justify-center hover:bg-gray-400">
            <span>&gt;</span>
        </button>
    </div>
</div>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.getElementById('carousel');
    const images = carousel.querySelectorAll('.carousel-item');
    let selectedIndex = 0;
    const isMobile = window.innerWidth < 768;

    function updateCarousel() {
        const selectedElement = images[selectedIndex];
        carousel.scrollTo({
            left: selectedElement.offsetLeft - carousel.offsetWidth / 2 + selectedElement.offsetWidth / 2,
            behavior: "smooth"
        });

        images.forEach((image, index) => {
            const imgElement = image.querySelector('img');
            const titleElement = image.querySelector('p');
            if (index === selectedIndex) {
                imgElement.classList.add('opacity-100', 'scale-110');
                imgElement.classList.remove('opacity-50');
                titleElement.classList.add('opacity-100');
            } else {
                imgElement.classList.remove('opacity-100', 'scale-110');
                imgElement.classList.add('opacity-50');
                titleElement.classList.remove('opacity-100');
            }
        });
    }
    const selectImage = (index) => {
            selectedIndex = index;
            updateCarousel();
        };
    if (isMobile) {
        let startX = 0, endX = 0;
        
        carousel.addEventListener("touchstart", (e) => startX = e.touches[0].clientX);
        carousel.addEventListener("touchend", (e) => {
            endX = e.changedTouches[0].clientX;
            if (endX < startX - 30 && selectedIndex < images.length - 1) {
                selectedIndex++;
            } else if (endX > startX + 30 && selectedIndex > 0) {
                selectedIndex--;
            }
            updateCarousel();
        });
    } else {
        document.getElementById('leftArrow').addEventListener('click', () => {
            if (selectedIndex > 0) selectedIndex--;
            updateCarousel();
        });

        document.getElementById('rightArrow').addEventListener('click', () => {
            if (selectedIndex < images.length - 1) selectedIndex++;
            updateCarousel();
        });
    }

    updateCarousel();
    selectImage(2);
});
</script>