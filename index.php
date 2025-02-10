<?php include("./includes/header.php"); ?>

  <!-- Full-screen background section -->
  <div class="relative bg-cover bg-center h-screen" style="background-image: url('./assetes/images/bg1.png');">
  
    <nav class="w-full py-4 flex justify-between items-center absolute z-10 px-4 lg:px-16">
        <!-- Logo -->
        <div class="flex items-center">
    <a href="./index.php" class="flex items-center">
        <img src="./assetes/images/Vertical-transparent2.png" alt="Alluring Tours" class="h-16 md:h-24">
    </a>
</div>


        <!-- Navigation Links -->
        <div class="hidden lg:flex space-x-4 lg:space-x-12 text-white lora-">
            <a href="./index.php" class="nav-link font-extrabold italic hover:underline">Home</a>
            <a href="#about" class="nav-link font-extrabold italic hover:underline">About Us</a>
            <a href="./destinations.php" class="nav-link font-extrabold italic hover:underline">Destinations</a>
            <a href="#experiences" class="nav-link hover:underline font-extrabold italic">Key Experiences</a>
            <a href="#footer" class="nav-link font-extrabold italic hover:underline">Contact Us</a>
        </div>

        <!-- CTA Button -->
        <a href="#packages" class="border border-[#B9C37B] lora- italic bg-[#D9D9D92E] px-3 py-1 lg:px-4 lg:py-2 text-[#B9C37B] rounded-full hover:bg-[#B9C37B] hover:text-black transition">
            Plan Your Trip
        </a>

        <!-- Mobile Menu Button -->
        <div class="lg:hidden">
            <button id="mobile-menu-button" class="text-white focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden flex flex-col items-center bg-black bg-opacity-80 text-white py-4 space-y-4 absolute w-full top-16 left-0 z-20">
        <a href="./index.php" class="nav-link font-extrabold italic hover:underline">Home</a>
        <a href="#about" class="nav-link font-extrabold italic hover:underline">About Us</a>
        <a href="./destinations.php" class="nav-link font-extrabold italic hover:underline">Destinations</a>
        <a href="#experiences" class="nav-link hover:underline font-extrabold italic">Key Experiences</a>
        <a href="#footer" class="nav-link font-extrabold italic hover:underline">Contact Us</a>
    </div>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    <!-- Dark overlay for better text contrast -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Centered content -->
    <div class="relative flex flex-col items-center justify-center h-full text-center text-white px-4">
        <!-- Title -->
        <div class="relative mb-4 md:pr-96 md:mb-0 mt-16">
            <h1 class="text-5xl md:text-[160px] font-extrabold uppercase text-stroke lora-">
                Ayubowan
            </h1>
        </div>

        <div class="relative lora- flex justify-center items-end mb-28  md:mb-0 mt-4">
            <h2 class="absolute inset-0 text-5xl md:text-[160px] font-extrabold opacity-50 text-[#B9C37B66] lora- uppercase tracking-wide">
                Sri Lanka
            </h2>
            <h2 class="relative text-5xl md:text-[160px] bottom-1 font-extrabold text-[#B9C37B] uppercase tracking-wide lora-">
                Sri Lanka
            </h2>
        </div>

        <div class="w-full px-4 md:px-16">
            <!-- Description -->
            <div class="-mt-12 bg-opacity-60 text-white w-full rounded-lg bg-[#2B2C2CB2] p-4 md:p-8 pt-6 md:pt-12">
                <p class="text-base md:text-xl leading-relaxed lora- px-2 md:px-24">
                    Discover the charm of Sri Lanka, a land of stunning landscapes, rich culture, and warm hospitality. From golden beaches to ancient temples, lush tea plantations to vibrant wildlife, every corner of this island is a treasure waiting to be explored. Begin your journey with "Ayubowan," a heartfelt wish for long life and happiness!
                </p>
            </div>
        </div>
        <div class="w-full pt-4 flex justify-center space-x-4 lora- mt-8">
        <a href="https://www.tripadvisor.com/Attraction_Review-g1500185-d13329321-Reviews-Alluring_Tours-Katunayake_Negombo_Western_Province.html" class="inline-block">
  <button class="bg-[#B9C37B6B] text-black text-xl border-2 border-[#B9C37B] font-bold italic p-4 rounded-full hover:bg-[#B9C37B] transition mx-auto lg:mx-0">
    <div class="w-full">
    <div class="w-8 h-8 bg-white flex justify-center items-center rounded-full">
    <img src="./assetes/images/tripadvisor.png" alt="Alluring Tours" class="w-8 h-8">
    </div>
    </div>
 
  </button>
</a>
<a href="https://www.routard.com/forum_message/4745771/recommendation_chauffeur_a_colombo.htm" class="inline-block">
  <button class="bg-[#B9C37B6B] text-black text-xl border-2 border-[#B9C37B] font-bold italic p-3 rounded-full hover:bg-[#B9C37B] transition mx-auto lg:mx-0">
    <div class="w-full">
    
    <img src="./assetes/images/bg2.png" alt="Alluring Tours" class="w-10 h-10">
    </div>
 
  </button>
</a>
<a href="https://www.losviajeros.com/foros.php?p=6301854#6301854" class="inline-block">
  <button class="bg-[#B9C37B6B] text-black text-xl border-2 border-[#B9C37B] font-bold italic p-3 rounded-full hover:bg-[#B9C37B] transition mx-auto lg:mx-0">
    <div class="w-full">
    <img src="./assetes/images/bg5.png" alt="Alluring Tours" class="w-10 h-10">
    </div>
 
  </button>
</a>

    </div>
</div>
  
<div id="packages" class="text-center bg-[#1E1E1E] py-12 px-6 md:px-12 lg:px-16">
  <!-- Section Title -->
  <h2 class="text-3xl md:text-5xl font-bold mb-4 text-[#B9C37B] lora-">OUR PACKAGES</h2>
  <p class="text-lg md:text-xl lora- italic font-bold text-[#B9C37B]">Choose the perfect package for your journey.</p>

  <!-- Packages Grid -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-12 bg-[#1E1E1E] p-8 md:p-8 lora-">
    
    <!-- Card 1 -->
  
    <a href="./packages.php">
  <div class="relative border border-[#B9C37B] p-4 md:p-6 hover:shadow-lg hover:scale-105 transition transform w-full h-48 md:h-64">
    <div class="w-full h-full absolute inset-0 flex items-start justify-center z-10 pt-8 md:pt-12">
      <h3 class="text-6xl md:text-9xl font-extrabold text-[#B9C37B]">01</h3>
    </div>
    <div class="w-full absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center z-20 px-4 md:px-8">
      <div class="w-full bg-[#222222] md:h-auto h-[80px] pb-4 md:pb-8">
        <p class="text-lg md:text-xl text-[#B9C37B] pt-8 md:pt-4">Travel Only</p>
      </div>
    </div>
  </div>
</a>
    <!-- Card 2 -->
    
    <a href="./packages.php">
    <div class="relative border border-[#B9C37B] p-4 md:p-6 hover:shadow-lg hover:scale-105 transition transform w-full h-48 md:h-64">
      <div class="w-full h-full absolute inset-0 flex items-start justify-center z-10 pt-8 md:pt-12">
        <h3 class="text-6xl md:text-9xl font-extrabold text-[#B9C37B]">02</h3>
      </div>
      <div class="w-full absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center z-20 px-4 md:px-8">
        <div class="w-full bg-[#222222] pb-4 md:pb-8">
          <div class="w-full md:h-auto h-[100px] flex flex-col -mb-8 md:-mb-8 text-lg md:text-xl text-[#B9C37B]">
            <p>Travel</p>
            <p>+</p>
            <p>Accommodation</p>
          </div>
        </div>
      </div>
    </div>
</a>
    <!-- Card 3 -->
    <a href="./packages.php">
    <div class="relative border border-[#B9C37B] p-4 md:p-6 hover:shadow-lg hover:scale-105 transition transform w-full h-48 md:h-64">
      <div class="w-full h-full absolute inset-0 flex items-start justify-center z-10 pt-8 md:pt-12">
        <h3 class="text-6xl md:text-9xl font-extrabold text-[#B9C37B]">03</h3>
      </div>
      <div class="w-full absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center z-20 px-4 md:px-8">
        <div class="w-full bg-[#222222] pb-4 md:pb-8">
          <div class="w-full flex flex-col md:h-auto h-[100px] -mb-8 md:-mb-8 text-lg md:text-xl text-[#B9C37B]">
            <p>Travel</p>
            <p>+</p>
            <p>Activities</p>
          </div>
        </div>
      </div>
    </div>
</a>

    <!-- Card 4 -->
    
    <a href="./packages.php">
    <div class="relative border border-[#B9C37B] p-4 md:p-6 hover:shadow-lg hover:scale-105 transition transform w-full h-48 md:h-64">
      <div class="w-full h-full absolute inset-0 flex items-start justify-center z-10 pt-8 md:pt-12">
        <h3 class="text-6xl md:text-9xl font-extrabold text-[#B9C37B]">04</h3>
      </div>
      <div class="w-full absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center z-20 px-4 md:px-8">
        <div class="w-full bg-[#222222] md:h-auto h-[80px] pb-4 md:pb-8">
          <p class="text-lg md:text-xl text-[#B9C37B] pt-8 md:pt-4">All Inclusive</p>
        </div>
      </div>
    </div>
</a>
  </div>
</div>

<div id="about" class="relative bg-cover bg-center bg-opacity-90" style="background-image: url('./assetes/images/bg1.png');">
  <div class="absolute inset-0 bg-black opacity-80 z-0"></div>
  <!-- Yellow Overlay -->
  <div class="absolute inset-0 bg-[#B9C37B80] opacity-90 z-10"></div>

  <!-- Content -->
  <div  class="w-full relative z-20 px-6 sm:px-12 py-12 text-black">
    <div class="container mx-auto flex flex-col lg:flex-row items-center gap-8">
      
      <!-- Image Section -->
      <div class="flex flex-wrap justify-center gap-4 flex-col w-full lg:w-1/2">
        <div class="flex flex-col md:flex-row gap-4 p-2 items-center">
          <!-- Image 1 -->
          <div>
            <img src="./assetes/images/bg44.png" alt="Tour Group 1"
              class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:w-[127px] h-[136px] object-cover mt-12 border-[6px] border-white" />
          </div>
          <!-- Image 2 -->
          <div>
            <img src="./assetes/images/bg42.png" alt="Tour Group 2"
              class="w-full max-w-xs sm:max-w-md md:w-[407px] h-[182px] object-cover border-[6px] border-white" />
          </div>
        </div>

        <div class="flex flex-col md:flex-row gap-4 p-2 items-center">
          <div class="flex flex-col gap-4">
            <!-- Image 3 -->
            <div>
              <img src="./assetes/images/bg40.png" alt="Tour Group 3"
                class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:w-[348px] h-[179px] object-cover border-[6px] border-white" />
            </div>
            <!-- Image 5 -->
            <div>
              <img src="./assetes/images/bg45.png" alt="Tour Group 5"
                class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:w-[348px] h-[182px] object-cover border-[6px] border-white" />
            </div>
          </div>

          <!-- Image 4 -->
          <div>
            <img src="./assetes/images/bg41.png" alt="Tour Group 4"
              class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:w-[184px] h-[318px] object-cover border-[6px] border-white" />
          </div>
        </div>
      </div>

      <!-- Text Section -->
      <div class="w-full lg:w-1/2 text-center lg:text-left">
        <h2 class="text-3xl md:text-5xl font-extrabold mb-6" style="font-family: 'Lora', serif;">
          ABOUT US
        </h2>
        <p class="text-lg md:text-xl leading-relaxed mb-4 font-semibold" style="font-family: 'Lora', serif;">
          Welcome to Alluring Tours Sri Lanka, your trusted partner for unforgettable travel experiences across the paradise island of Sri Lanka. Since our founding in 2008 by Mahesh Rathnayake.
        </p>
        <p class="text-lg md:text-xl leading-relaxed mb-4 font-semibold" style="font-family: 'Lora', serif;">
          Our highly competitive prices include everything you need for a hassle-free trip—vehicle, fuel, and road tolls—with absolutely no hidden fees. Whether you have a planned itinerary or need inspiration for the best places to visit, we’re here to help you make the most of your time in Sri Lanka.
        </p>
        <p class="text-lg md:text-xl leading-relaxed font-semibold" style="font-family: 'Lora', serif;">
          Let us take you on a journey to explore the stunning landscapes, historic sites, and vibrant culture of this beautiful island. Contact us today for a personalized quote and start planning your dream adventure!
        </p>
        <div class="w-full pt-4 text-center lg:text-left">
        <a href="https://www.tripadvisor.com/Attraction_Review-g1500185-d13329321-Reviews-Alluring_Tours-Katunayake_Negombo_Western_Province.html" class="inline-block">
  <button class="bg-[#D9D9D92E] text-black text-lg border-2 border-black font-semibold px-10 py-2 rounded-full hover:bg-[#B9C37B] transition mx-auto lg:mx-0">
    Get More Info
  </button>
</a>

        </div>
      </div>
      
    </div>
  </div>
</div>
<div class="w-full bg-black flex flex-col justify-center items-center pt-12">
<h2 class="text-3xl md:text-5xl font-bold mb-4 text-[#B9C37B] lora-">GALLERY</h2>
<div class="w-full flex flex-col justify-center items-center">
<p class="text-lg md:text-xl lora- italic font-bold text-[#B9C37B]">Explore the breathtaking beauty, rich culture, </p>
  <p class="text-lg md:text-xl lora- italic font-bold text-[#B9C37B]">and vibrant moments captured from across Sri Lanka.</p>

</div>
  

<div class="w-full flex space-x-4 space-y-4 px-24 lora-">
  
<div class="w-1/4 h-full flex flex-col space-y-4">
<div class="w-full h-[200px]">
    <img src="./assetes/images/bg36.png" alt="Alluring Tours" class="h-[200px] w-full">

    </div>
<div class="w-full flex justify-center items-center border border-[#B9C37B] p-4 md:p-6 bg-[#B9C37B80] w-full">
      <div class="w-full h-full flex items-start justify-center">
        <h3 class="text-xl text-black">Travel isn’t about the destination, but the memories made along the way.</h3>
      </div>
      
    </div>
    <div class="w-full h-[300px]">
    <img src="./assetes/images/bg39.png" alt="Alluring Tours" class="h-[300px] w-full">

    </div>

</div>
<div class="w-3/4 h-full flex flex-col space-y-4">
  <div class="w-full h-1/3 flex h-auto space-x-4">
    <div class="w-1/2 h-[200px]">
    <img src="./assetes/images/bg45.png" alt="Alluring Tours" class="h-[200px] w-full">

    </div>
<div class="w-1/4 flex h-[200px] justify-center items-center border border-[#B9C37B] p-4 md:p-6 bg-[#B9C37B80]">
      <div class="w-full flex items-start justify-center">
        <h3 class="text-xl text-black">Happiness is… a passport full of stamps and a heart full of memories.</h3>
      </div>
      
    </div>
    <div class="w-1/2 h-[200px]">
    <img src="./assetes/images/bg44.png" alt="Alluring Tours" class="h-[200px] w-full">

    </div>

  </div>
  <div class="w-full h-2/3 flex h-auto space-x-4">
    <div class="w-1/4 flex flex-col h-[400px] space-y-4">
    <img src="./assetes/images/bg41.png" alt="Alluring Tours" class="h-[300px] w-full">
    <div class="w-full flex h-[100px] justify-center items-center border border-[#B9C37B] p-4 md:p-6 bg-[#B9C37B80]">
      <div class="w-full flex items-start justify-center">
        <h3 class="text-xl text-black">Collect memories, not things – explore Sri Lanka with us!</h3>
      </div>
      
    </div>
    </div>
    <div class="w-3/4 flex flex-col h-[400px] space-y-4">
      <div class="w-full flex space-x-4">
      <div class="w-1/2 h-[200px]">
    <img src="./assetes/images/bg40.png" alt="Alluring Tours" class="h-[200px] w-full">
    </div> 
    <div class="w-1/2 h-[200px]">
    <img src="./assetes/images/bg38.png" alt="Alluring Tours" class="h-[200px] w-full">
    </div> 
      </div>
    
    <div class="w-full flex space-x-4">
    <div class="w-full h-[200px]">
    <img src="./assetes/images/bg56.png" alt="Alluring Tours" class="h-[200px] w-full">

    </div>   
    <div class="w-1/2 flex h-[200px] justify-center items-center border border-[#B9C37B] p-4 md:p-6 bg-[#B9C37B80]">
      <div class="w-full flex items-start justify-center">
        <h3 class="text-xl text-black">Let the beauty of Sri Lanka take your breath away and fill your soul with adventure.</h3>
      </div>
      
    </div>
    </div>
    
    </div>
    


  </div>
  
  
</div>

</div>

</div>

<div id="destinations">
  <?php include("./destinations.php"); ?>
</div>

    <div id=experiences class="bg-[#222222] text-white px-6 sm:px-12 lora-">
  <div class="flex flex-col lg:flex-row items-center gap-8 md:py-0 py-8">
    <!-- Text Section -->
<div class="w-full lg:w-1/2 text-center lg:text-left">
  <h2 class="text-3xl md:text-5xl font-bold mb-4">KEY EXPERIENCES</h2>
  <p class="text-lg md:text-xl italic mb-4">Every destination is a new adventure waiting for you!</p>
  <p class="text-base sm:text-lg leading-relaxed mb-6 pr-0 sm:pr-11">
    Discover the essence of Sri Lanka through unique adventures and cultural treasures.
    Whether you're seeking thrilling outdoor activities, serene escapes, or vibrant traditions,
    each experience is crafted to leave you inspired and amazed. Let every journey be a story
    worth telling.
  </p>
  
</div>


    <!-- Image Section -->
    <div class="w-1/3 flex flex-col md:inline hidden h-full ">
      <div class="relative">
        <img
          src="./assetes/images/bg6.png"
          alt="Experience 1"
          class="w-auto h-[620px] object-cover shadow-lg ml-64 "
          3
        />
        <img
          src="./assetes/images/bg4.png"
          alt="Experience 2"
          class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[350px] h-[350px] object-cover -mr-32  "
        />
      </div>
    </div>
  </div>
</div>
<div class="w-full relative bg-[#5A6857] bg-center">
    <div class="relative z-10 mx-auto px-6 py-16 text-white text-center">
        <!-- Section Title -->
        <h2 class="text-3xl md:text-5xl font-bold text-black mb-4 animate_animated animate_fadeIn" style="font-family: 'Lora', serif;">
            WHY CHOOSE US
        </h2>
        <p class="text-xl md:text-3xl mb-6 text-black font-semibold animate_animated animate_fadeIn animate_delay-1s" style="font-family: 'Lora', serif;">
            Our services have been trusted by world travelers.
        </p>

        <!-- Features Section -->
        <div class="flex flex-wrap md:flex-row justify-center items-center md:space-x-8 space-y-4 md:space-y-0">
            
            <!-- Card 1 -->
            <div class="w-full  max-w-xs h-[250px] md:w-[243px] md:h-[357px] bg-white bg-opacity-80 p-4 rounded-lg shadow-lg text-center transform transition duration-500 hover:scale-105 hover:shadow-2xl animate_animated animate_fadeIn animate_delay-2s">
                <div class="flex items-center justify-center">
                    <img src="assetes/images/l1.png" alt="Trusted Experience" class="w-[100px] md:w-[130px] h-[100px] md:h-[130px]">
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-black mt-4 mb-2" style="font-family: 'Lora', serif;">Trusted Experience</h3>
                <p class="text-lg text-black" style="font-family: 'Lora', serif;">We’ve been creating unforgettable journeys across Sri Lanka.</p>
            </div>

            <!-- Card 2 -->
            <div class="w-full max-w-xs md:w-[243px] h-[250px] md:h-[357px] bg-white bg-opacity-80 p-4 rounded-lg shadow-lg text-center transform transition duration-500 hover:scale-105 hover:shadow-2xl animate_animated animate_fadeIn animate_delay-3s">
                <div class="flex items-center justify-center">
                    <img src="assetes/images/l2.png" alt="Transparent Pricing" class="w-[100px] md:w-[130px] h-[100px] md:h-[130px]">
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-black mt-4 mb-2" style="font-family: 'Lora', serif;">Transparent Pricing</h3>
                <p class="text-lg text-black" style="font-family: 'Lora', serif;">Our prices include everything. So there are no hidden surprises.</p>
            </div>

            <!-- Card 3 -->
            <div class="w-full max-w-xs md:w-[243px] h-[250px] md:h-[357px] bg-white bg-opacity-80 p-4 rounded-lg shadow-lg text-center transform transition duration-500 hover:scale-105 hover:shadow-2xl animate_animated animate_fadeIn animate_delay-4s">
                <div class="flex items-center justify-center">
                    <img src="assetes/images/l4.png" alt="Personalized Itineraries" class="w-[90px] md:w-[110px] h-[90px] md:h-[110px]">
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-black md:mt-10 mt-4 mb-2" style="font-family: 'Lora', serif;">Personalized Itineraries</h3>
                <p class="text-lg text-black" style="font-family: 'Lora', serif;">We are making every journey unique to you.</p>
            </div>

            <!-- Card 4 -->
            <div class="w-full max-w-xs md:w-[243px] h-[250px] md:h-[357px] bg-white bg-opacity-80 p-4 rounded-lg shadow-lg text-center transform transition duration-500 hover:scale-105 hover:shadow-2xl animate_animated animate_fadeIn animate_delay-5s">
                <div class="flex items-center justify-center">
                    <img src="assetes/images/l5.png" alt="Comfortable Travel" class="w-[100px] md:w-[130px] h-[90px] md:h-[100px]">
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-black md:mt-10 mt-4 mb-2" style="font-family: 'Lora', serif;">Comfortable Travel</h3>
                <p class="text-lg text-black" style="font-family: 'Lora', serif;">Well-maintained vehicles with experienced and friendly drivers.</p>
            </div>

            <!-- Card 5 -->
            <div class="w-full max-w-xs md:w-[243px] h-[250px] md:h-[357px] bg-white bg-opacity-80 p-4 rounded-lg shadow-lg text-center transform transition duration-500 hover:scale-105 hover:shadow-2xl animate_animated animate_fadeIn animate_delay-6s">
                <div class="flex items-center justify-center">
                    <img src="assetes/images/l7.png" alt="Local Expertise" class="w-[100px] md:w-[130px] h-[100px] md:h-[130px]">
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-black md:mt-2 -mt-4 mb-2" style="font-family: 'Lora', serif;">Local Expertise</h3>
                <p class="text-lg text-black" style="font-family: 'Lora', serif;">We’re dedicated to making your trip smooth, memorable, and stress-free.</p>
            </div>

        </div>
    </div>
</div>

<div class="w-full bg-black px-6 lg:px-16 flex flex-col lg:flex-row items-center h-auto lg:h-screen gap-8" style="font-family: 'Lora', serif;">
    <div class="w-full lg:w-1/2 mb-12 lg:mb-44 text-center lg:text-left mt-8">
        <h1 class="text-3xl lg:text-5xl text-white font-bold" style="font-family: 'Lora', serif;">About Sri Lanka</h1>
        <h2 class="text-lg lg:text-2xl mt-4 text-gray-300" style="font-family: 'Lora', serif;">The Island of Endless Wonders and Timeless Beauty</h2>
        <p class="mt-6 text-base lg:text-lg text-white italic" style="font-family: 'Lora', serif;">
            Sri Lanka, the Pearl of the Indian Ocean, is a land of breathtaking beauty, rich history, and vibrant culture.
            From golden beaches to misty mountains, ancient temples to lush tea plantations, this island offers an
            unforgettable experience for every traveler. Whether you're seeking adventure, relaxation, or cultural exploration,
            Sri Lanka's warm hospitality and diverse landscapes make it a paradise waiting to be discovered.
        </p>
    </div>
    <div class="w-full lg:w-1/2">
        <img src="assetes/images/bg3.png" alt="Map of Sri Lanka" class="w-full max-w-md lg:max-w-2xl mx-auto">
    </div>
</div>

<div id="footer">
    <?php include("./includes/footer.php"); ?>
</div>


<script>
  document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach(link => {
      if (link.getAttribute("href") === window.location.pathname) {
        link.classList.add("text-[#B9C37B]");
      }

      link.addEventListener("click", function() {
        navLinks.forEach(nav => nav.classList.remove("text-[#B9C37B]"));
        this.classList.add("text-[#B9C37B]");
      });
    });
  });
</script>

<style>
  /* Custom font adjustments for shadow */
  .text-shadow {
    text-shadow: 2px 2px #1a1a1a;
  }

  .text-stroke {
    -webkit-text-stroke: 2px #FFFFFF; /* Border width and color */
    -webkit-text-fill-color: transparent; /* Transparent text fill */
  }
</style>



