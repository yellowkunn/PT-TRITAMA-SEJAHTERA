<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
    About Us 
  </title>
  <script src="https://cdn.tailwindcss.com"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: "Roboto", sans-serif;
    }
   /* @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap");
    body {
      font-family: "Inter", sans-serif;
    } */
  </style>
 </head>
 <body class="bg-[#f2f0e9] text-gray-900 relative">
    @include('components.navbar')
  <!-- Hero Section -->
  <section class="relative w-full h-[280px] sm:h-[320px] md:h-[360px] lg:h-[400px] xl:h-[440px]">
   <img alt="Close-up of palm oil fruits and green palm leaves on a wooden surface with a bottle of palm oil" class="w-full h-full object-cover" decoding="async" height="440" loading="lazy" src="https://storage.googleapis.com/a1aa/image/abc1f6bc-f2f5-424c-675a-d9dbb2b535f9.jpg" width="1920"/>
   <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center px-4 text-center">
    <h1 class="text-white font-extrabold text-2xl sm:text-3xl md:text-4xl lg:text-5xl">
     About Us
    </h1>
    <p class="text-white max-w-xl mt-3 text-sm sm:text-base md:text-lg leading-relaxed">
     Despite its economic advantages, palm oil production has been linked to severe environmental degradation. The main environmental concerns include
    </p>
   </div>
  </section>
  <!-- Content Section -->
  <section class="max-w-7xl mx-auto px-6 sm:px-10 md:px-16 lg:px-20 xl:px-24 py-16 flex flex-col md:flex-row items-center md:items-start gap-10 md:gap-20">
     <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 lg:grid-cols-2 gap-x-10 gap-y-10">
        <div class="space-y-6">
            <img alt="A bottle of palm oil pouring into a white cup of tea placed on a bed of palm fruits and green leaves" class="w-full object-cover" height="350" src="https://storage.googleapis.com/a1aa/image/febbb9c4-22c2-43d6-d989-665228c26ce3.jpg" width="600"/>
            <img alt="Close up of a glass bottle of palm oil and a white cup of tea on a bed of palm fruits and green leaves" class="w-full object-cover" height="350" src="https://storage.googleapis.com/a1aa/image/e231b725-ea97-43d5-3ec0-0fd3ab4bb924.jpg" width="600"/>
        </div>
        <div class="flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-sm mb-1 border-b-2 border-[#dba43a] inline-block pb-0.5">
                    About us
                </h3>
                <h1 class="font-extrabold text-4xl leading-tight mt-2 mb-4">
                    PT Tritama Sejahtera Indonesia (TRISEINDO)
                </h1>
                <p class="text-base leading-relaxed max-w-xl">     
                    is engaged in domestic and international trade of agricultural and plantation products.
                    Our company also operates in the palm oil plantation sector, as well as in the trade of bread, food, and beverages.

                    The company was established on July 8, 2023, before Notary R. Ramadipta, S.H., M.Kn., under Deed of Establishment Number 1 of 2023, and has been officially approved by the Ministry of Law and Human Rights of the Republic of Indonesia through Decree Number AHU-0055232.AH.01.01 in 2023.
                </p>
            </div>
    <div class="mt-10 flex gap-6">
        <img alt="Portrait of a man wearing a brown leather jacket, blue shirt, tie, and sunglasses standing outdoors" class="w-[200px] h-[280px] object-cover" height="280" src="https://storage.googleapis.com/a1aa/image/85f8fe98-f70f-43df-f2a1-665e5e367af5.jpg" width="200"/>
        <div>
            <h4 class="font-bold text-lg mb-1 border-b-2 border-[#dba43a] inline-block pb-0.5">
                Aditya Sofyan
            </h4>
            <h5 class="font-bold text-base mb-3 border-b-2 border-[#dba43a] inline-block pb-0.5">
                CEO of Company
            </h5>
            <p class="text-base leading-relaxed max-w-xs">
                Creating supply chains that are transparent and traceable to ensure that palm oil is sourced responsibly.
            </p>
        </div>
    </div>
</div>
</div>  
</section>
  
      {{-- konten 3 --}}
    <div class="bg-gray-100">
        <section class="max-w-7xl mx-auto px-6 md:px-20 py-20 flex flex-col md:flex-row items-center gap-10">
            <div class="md:w-1/2 space-y-6">
                <h2 class="text-5xl font-semibold">Introducing Our Work</h2>
                <p class="text-3xl max-w-xl">
                    Tailoring services for global exporters with personalized attention.
                </p>
                <p class="text-base text-gray-700 max-w-xl">
                    Our creativity is driven by depth study in an effort to give you the best result and position of
                    your product successfully in international market.
                </p>
                <p class="text-sm text-gray-700 max-w-xl">
                    We’re on a mission to start studying the exact market for your products worldwide and establish the
                    product in appropriate market.
                </p>
            </div>


            <div id="animation-carousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="https://storage.googleapis.com/a1aa/image/0f65669a-8b70-44e8-58af-35211dcd26b1.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="https://storage.googleapis.com/a1aa/image/0f65669a-8b70-44e8-58af-35211dcd26b1.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                        <img src="https://storage.googleapis.com/a1aa/image/0f65669a-8b70-44e8-58af-35211dcd26b1.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="https://storage.googleapis.com/a1aa/image/0f65669a-8b70-44e8-58af-35211dcd26b1.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </section>
    </div>
  
  
  <!-- Contact Button -->
  <a aria-label="Contact us" class="fixed bottom-6 right-6 flex items-center gap-3 bg-white text-gray-700 rounded-full px-4 py-2 shadow-lg hover:shadow-xl transition-shadow" href="#">
   <span class="text-base font-medium">
    Contact us!
   </span>
   <i class="fab fa-whatsapp text-2xl text-green-500">
   </i>
  </a>

  @include('components.footer')
  
 </body>
</html>
