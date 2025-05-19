<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <style>
        #navbar {
            will-change: opacity, transform;
        }
    </style>
    <title>Dashboard</title>
</head>

<body>


    <header id="navbar"
        class="fixed inset-x-0 top-0 z-50 mx-auto w-full mt-0 md:mt-6 max-w-screen-md bg-white backdrop-blur-md py-3 shadow-md transition-all duration-300 ease-in-out md:top-6 md:rounded-3xl lg:max-w-screen-lg">
        <div class="px-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex shrink-0 md:hidden">
                    {{-- <a aria-current="page" class="flex items-center" href="#">
                    <img class="h-7 w-auto" src="{{ URL('/images/TRISEINDO ICON.png') }}" alt="Logo">
                    <p class="sr-only">Website Title</p>
                </a> --}}
                </div>

                <!-- Hamburger Button (mobile only) -->
                <button id="menu-toggle" class="md:hidden text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Desktop Menu -->
                <div class="hidden md:flex md:items-center md:gap-5 mx-auto">
                    <a href="#"
                        class="px-2 py-1 text-sm font-medium text-gray-900 hover:bg-white/30 rounded-lg">Home</a>
                    <a href="#"
                        class="px-2 py-1 text-sm font-medium text-gray-900 hover:bg-white/30 rounded-lg">Company</a>

                    <div class="relative group">
                        <button id="productDropdownBtn"
                            class="px-2 py-1 text-sm font-medium text-gray-900 hover:bg-white/30 rounded-lg inline-flex items-center gap-1">
                            Product
                            <svg id="productDropdownIcon" class="w-4 h-4 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="productDropdown"
                            class="absolute left-0 mt-5 w-40 py-2 hidden flex-col rounded-md bg-white shadow-lg z-50 transition-all duration-300 ease-in-out opacity-0 scale-95">
                            <a href="#"
                                class="block w-full px-4 py-1 my-1 text-sm text-gray-700 hover:bg-gray-100">Product
                                1</a>
                            <a href="#"
                                class="block w-full px-4 py-1 my-1 text-sm text-gray-700 hover:bg-gray-100">Product
                                2</a>
                            <a href="#"
                                class="block w-full px-4 py-1 my-1 text-sm text-gray-700 hover:bg-gray-100">Product
                                3</a>
                            <a href="#"
                                class="block w-full px-4 py-1 my-1 text-sm text-gray-700 hover:bg-gray-100">Product
                                4</a>
                        </div>
                    </div>

                    <a href="#"
                        class="px-2 py-1 text-sm font-medium text-gray-900 hover:bg-white/30 rounded-lg">Our team</a>
                    <a href="#"
                        class="px-2 py-1 text-sm font-medium text-gray-900 hover:bg-white/30 rounded-lg">Contact Us</a>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="mt-3 hidden flex-col space-y-2 md:hidden">
                <a href="#" class="block px-4 py-2 text-sm text-gray-900 rounded-lg hover:bg-gray-100">Home</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-900 rounded-lg hover:bg-gray-100">Company</a>

                <!-- Product Dropdown (Mobile) -->
                <div>
                    <button id="productMobileDropdownBtn"
                        class="w-full flex justify-between items-center px-4 py-2 text-sm text-gray-900 rounded-lg hover:bg-gray-100 transition-colors">
                        Product
                        <svg id="productMobileDropdownIcon" class="w-4 h-4 transform transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="productMobileDropdown"
                        class="hidden flex-col px-4 pt-1 pb-1 space-y-1 transition-all duration-300 ease-in-out opacity-0 scale-95">
                        <a href="#"
                            class="block w-full py-1 pl-4 text-sm text-gray-700 rounded-lg hover:bg-gray-100">Product
                            1</a>
                        <a href="#"
                            class="block w-full py-1 pl-4 text-sm text-gray-700 rounded-lg hover:bg-gray-100">Product
                            2</a>
                        <a href="#"
                            class="block w-full py-1 pl-4 text-sm text-gray-700 rounded-lg hover:bg-gray-100">Product
                            3</a>
                        <a href="#"
                            class="block w-full py-1 pl-4 text-sm text-gray-700 rounded-lg hover:bg-gray-100">Product
                            4</a>
                    </div>
                </div>

                <a href="#" class="block px-4 py-2 text-sm text-gray-900 rounded-lg hover:bg-gray-100">Our
                    team</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-900 rounded-lg hover:bg-gray-100">Contact
                    Us</a>
            </div>

        </div>

        <!-- Scroll behavior script -->
        <script>
            const navbar = document.getElementById("navbar");
            const toggleBtn = document.getElementById("menu-toggle");
            const mobileMenu = document.getElementById("mobile-menu");
        
            const productBtn = document.getElementById("productDropdownBtn");
            const productDropdown = document.getElementById("productDropdown");
            const productIcon = document.getElementById("productDropdownIcon"); 
        
            const productMobileBtn = document.getElementById("productMobileDropdownBtn");
            const productMobileDropdown = document.getElementById("productMobileDropdown");
            const productMobileIcon = document.getElementById("productMobileDropdownIcon"); 
        
            let lastScrollTop = 0;
        
            // Scroll behavior
            window.addEventListener("scroll", function () {
                const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        
                if (currentScroll > lastScrollTop) {
                    // Scroll down: hide navbar
                    navbar.style.opacity = "0";
                    navbar.style.transform = "translateY(-20px)";
                } else {
                    // Scroll up: show navbar
                    navbar.style.opacity = "1";
                    navbar.style.transform = "translateY(0)";
                }
        
                // Hide mobile menu on scroll
                mobileMenu.classList.add("hidden");
        
                // Hide both dropdowns on scroll with transition
                // Desktop dropdown
                productDropdown.classList.remove("opacity-100", "scale-100");
                productDropdown.classList.add("opacity-0", "scale-95");
                productIcon.classList.remove("rotate-180");
                setTimeout(() => {
                    productDropdown.classList.add("hidden");
                }, 300);
        
                // Mobile dropdown
                productMobileDropdown.classList.remove("opacity-100", "scale-100");
                productMobileDropdown.classList.add("opacity-0", "scale-95");
                productMobileIcon.classList.remove("rotate-180");
                setTimeout(() => {
                    productMobileDropdown.classList.add("hidden");
                }, 300);
        
                lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
            });
        
            // Toggle mobile menu
            toggleBtn.addEventListener("click", () => {
                mobileMenu.classList.toggle("hidden");
            });
        
            // Desktop dropdown toggle
            productBtn.addEventListener("click", (e) => {
                e.stopPropagation();
                const isHidden = productDropdown.classList.contains("hidden");
        
                if (isHidden) {
                    productDropdown.classList.remove("hidden");
                    requestAnimationFrame(() => {
                        productDropdown.classList.remove("opacity-0", "scale-95");
                        productDropdown.classList.add("opacity-100", "scale-100");
                        productIcon.classList.add("rotate-180");
                    });
                } else {
                    productDropdown.classList.remove("opacity-100", "scale-100");
                    productDropdown.classList.add("opacity-0", "scale-95");
                    productIcon.classList.remove("rotate-180");
                    setTimeout(() => {
                        productDropdown.classList.add("hidden");
                    }, 300);
                }
            });
        
            // Close desktop dropdown if clicked outside
            window.addEventListener("click", (e) => {
                if (!productBtn.contains(e.target) && !productDropdown.contains(e.target)) {
                    productDropdown.classList.remove("opacity-100", "scale-100");
                    productDropdown.classList.add("opacity-0", "scale-95");
                    setTimeout(() => {
                        productDropdown.classList.add("hidden");
                    }, 300);
                }
            });
        
            // Mobile dropdown toggle
            productMobileBtn.addEventListener("click", () => {
                const isHidden = productMobileDropdown.classList.contains("hidden");
        
                if (isHidden) {
                    productMobileDropdown.classList.remove("hidden");
                    requestAnimationFrame(() => {
                        productMobileDropdown.classList.remove("opacity-0", "scale-95");
                        productMobileDropdown.classList.add("opacity-100", "scale-100");
                        productMobileIcon.classList.add("rotate-180");
                    });
                } else {
                    productMobileDropdown.classList.remove("opacity-100", "scale-100");
                    productMobileDropdown.classList.add("opacity-0", "scale-95");
                    productMobileIcon.classList.remove("rotate-180");
                    setTimeout(() => {
                        productMobileDropdown.classList.add("hidden");
                    }, 300);
                }
            });
        </script>
        

    </header>


    {{-- konten 1 --}}
    <div class="w-full h-screen relative overflow-hidden">
        <img src="{{ URL('images/bg_konten1.jpg') }}"
            class="w-full h-full object-cover absolute top-0 left-0 z-0 brightness-75" alt="Background">

        <div class="relative z-10 w-full h-full flex items-center xl:pl-40 xl:justify-start lg:justify-center">
            <div class="max-w-xl p-6 ">
                {{-- <div class="inline-block mb-4">
                    <div class="dark:text-white text-md font-semibold mb-2">innovative technology</div>
                    <div class="h-0.5 bg-[#ffcc00] rounded-full"></div>
                </div> --}}
                <img src="{{ URL('images/logo.png') }}" alt="" class="h-25 mb-3">

                <a href="#">
                    <div
                        class="mb-3 text-2xl xl:text-4xl !text-2xl xl:!text-4xl font-normal tracking-tight text-gray-900 dark:text-white leading-snug">
                        Boost global business with our highly recommended trading company.
                    </div>
                </a>


                {{-- <p class="mb-5 font-normal text-gray-200 dark:text-gray-200">Palm oil and its derivatives are commonly
                    found in personal care and cosmetic products. They provide stability, texture, and moisturizing
                    properties to items like soaps, shampoos, lotions, and makeup.</p> --}}
                <a href="#"
                    class="inline-flex items-center gap-2 px-3 py-1.5 bg-[#ffc400] dark:text-black rounded-md font-medium no-underline hover:bg-yellow-300">
                    Learn More
                    {{-- <svg class="w-4 h-4 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 12H5m14 0-4 4m4-4-4-4" />
                    </svg> --}}
                </a>
            </div>
        </div>
    </div>


    {{-- konten 2 --}}
    <section class="max-w-7xl mx-auto px-6 md:px-20 py-20 flex flex-col md:flex-row items-center gap-10">
        <div class="md:w-1/2 flex justify-center">
            <img src="/images/5155720_2672334 1.png" class="rounded-lg max-w-full h-auto" alt="">
        </div>
        <div class="md:w-1/2 space-y-6">
            <h2 class="text-5xl text-black font-extrabold">About <br><span
                    class="text-5xl text-[#ffc400] md:pl-12">Trade Link Global</span></h2>
            <p class="text-3xl max-w-xl font-semibold">Insights and Resources to help drive your Business Forward
                Faster.</p>
            <p class="text-base text-gray-700 max-w-xl">
                We build results-oriented brand strategy and continually refine the campaign for the greatest outcome.
                From full scale branding strategy, we are reaching to almost desired buyers throughout the world.
            </p>
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


    {{-- <div class="md:w-1/2 flex justify-center">
        <img src="https://storage.googleapis.com/a1aa/image/0f65669a-8b70-44e8-58af-35211dcd26b1.jpg"
            alt="Hand selecting tomatoes in basket with other vegetables and cloth"
            class="rounded-lg max-w-full h-auto" width="400" height="300" />
    </div> --}}



    {{-- konten 4 --}}
    <div class="bg-white">
        <!-- Slider -->
        <div
            data-hs-carousel='{
    "loadingClasses": "opacity-0", "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500",
    "slidesQty": {
      "xs": 1,
      "md": 2,
      "lg": 3
    }
  }'class="relative">
            <div
                class="hs-carousel w-full overflow-hidden bg-white rounded-lg dark:bg-neutral-900 lg:max-w-[1200px] mx-auto">
                <div class="relative min-h-120 ">
                    <!-- transition-transform duration-700 -->
                    <div
                        class="hs-carousel-body flex items-center justify-center opacity-0 transition-transform duration-700 py-20">

                        <div class="hs-carousel-slide">
                            <div class="flex flex-col items-center justify-center h-full">
                                <div
                                    class="flex flex-col bg-white rounded-lg shadow-lg max-w-xs w-full overflow-hidden dark:bg-neutral-800">
                                    <!-- Gambar -->
                                    <div class="overflow-hidden group">
                                        <img src="https://storage.googleapis.com/a1aa/image/7d312398-c4d5-488b-be70-1740b696a65b.jpg"
                                            alt="Steel products stacked in warehouse with metal sheets"
                                            class="w-full h-60 object-cover transition-transform duration-500 ease-out group-hover:scale-110 rounded-t-lg"
                                            width="400" height="240" />
                                    </div>

                                    <!-- Konten -->
                                    <div class="p-4 flex flex-col flex-grow">
                                        <h4 class="text-lg font-semibold text-yellow-600 text-center mb-2">Steel
                                            Products</h4>
                                        <p class="text-xs text-center text-gray-700 dark:text-gray-300 flex-grow">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, dicta
                                            necessitatibus
                                        </p>
                                        <button
                                            class="mt-4 py-2 bg-black text-yellow-400 text-xs font-semibold rounded shadow hover:shadow-lg transition-shadow">
                                            Read more
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="hs-carousel-slide ">
                            <div class="flex flex-col items-center justify-center h-full">
                                <div
                                    class="flex flex-col bg-white rounded-lg shadow-lg max-w-xs w-full overflow-hidden dark:bg-neutral-800">
                                    <!-- Gambar -->
                                    <div class="overflow-hidden group">
                                        <img src="https://storage.googleapis.com/a1aa/image/7d312398-c4d5-488b-be70-1740b696a65b.jpg"
                                            alt="Steel products stacked in warehouse with metal sheets"
                                            class="w-full h-60 object-cover transition-transform duration-500 ease-out group-hover:scale-110 rounded-t-lg"
                                            width="400" height="240" />
                                    </div>

                                    <!-- Konten -->
                                    <div class="p-4 flex flex-col flex-grow">
                                        <h4 class="text-lg font-semibold text-yellow-600 text-center mb-2">Steel
                                            Products</h4>
                                        <p class="text-xs text-center text-gray-700 dark:text-gray-300 flex-grow">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, dicta
                                            necessitatibus
                                        </p>
                                        <button
                                            class="mt-4 py-2 bg-black text-yellow-400 text-xs font-semibold rounded shadow hover:shadow-lg transition-shadow">
                                            Read more
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="hs-carousel-slide ">
                            <div class="flex flex-col items-center justify-center h-full">
                                <div
                                    class="flex flex-col bg-white rounded-lg shadow-lg max-w-xs w-full overflow-hidden dark:bg-neutral-800">
                                    <!-- Gambar -->
                                    <div class="overflow-hidden group">
                                        <img src="https://storage.googleapis.com/a1aa/image/7d312398-c4d5-488b-be70-1740b696a65b.jpg"
                                            alt="Steel products stacked in warehouse with metal sheets"
                                            class="w-full h-60 object-cover transition-transform duration-500 ease-out group-hover:scale-110 rounded-t-lg"
                                            width="400" height="240" />
                                    </div>

                                    <!-- Konten -->
                                    <div class="p-4 flex flex-col flex-grow">
                                        <h4 class="text-lg font-semibold text-yellow-600 text-center mb-2">Steel
                                            Products</h4>
                                        <p class="text-xs text-center text-gray-700 dark:text-gray-300 flex-grow">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, dicta
                                            necessitatibus
                                        </p>
                                        <button
                                            class="mt-4 py-2 bg-black text-yellow-400 text-xs font-semibold rounded shadow hover:shadow-lg transition-shadow">
                                            Read more
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="hs-carousel-slide ">
                            <div class="flex flex-col items-center justify-center h-full">
                                <div
                                    class="flex flex-col bg-white rounded-lg shadow-lg max-w-xs w-full overflow-hidden dark:bg-neutral-800">
                                    <!-- Gambar -->
                                    <div class="overflow-hidden group">
                                        <img src="https://storage.googleapis.com/a1aa/image/7d312398-c4d5-488b-be70-1740b696a65b.jpg"
                                            alt="Steel products stacked in warehouse with metal sheets"
                                            class="w-full h-60 object-cover transition-transform duration-500 ease-out group-hover:scale-110 rounded-t-lg"
                                            width="400" height="240" />
                                    </div>

                                    <!-- Konten -->
                                    <div class="p-4 flex flex-col flex-grow">
                                        <h4 class="text-lg font-semibold text-yellow-600 text-center mb-2">Steel
                                            Products</h4>
                                        <p class="text-xs text-center text-gray-700 dark:text-gray-300 flex-grow">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, dicta
                                            necessitatibus
                                        </p>
                                        <button
                                            class="mt-4 py-2 bg-black text-yellow-400 text-xs font-semibold rounded shadow hover:shadow-lg transition-shadow">
                                            Read more
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-carousel-pagination justify-center absolute bottom-3 start-0 end-0 flex gap-x-2"></div>
        </div>

        {{-- <button type="button"
            class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </button>
        <button type="button"
            class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </span>
        </button> --}}

    </div>
    <!-- End Slider -->

    {{-- Konten 5 --}}
    <div class="flex flex-col items-center justify-center bg-gray-100 py-20">
        <h1 class="font-dmserif text-3xl text-black pb-10">Our Teams</h1>
        <div class="grid grid-cols-1 gap-20 md:grid-cols-2 lg:grid-cols-3">
            <div
                class="group rounded-lg relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                <div class="h-96 w-80">
                    <img class="h-full w-full object-cover transition duration-500 group-hover:scale-105 group-hover:blur-xs group-hover:brightness-75"
                        src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                        alt="" />
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                class="absolute inset-0 flex translate-y-[55%] group-hover:translate-y-[20%] flex-col items-center justify-center px-9 text-center transition-all duration-500">
                <h1 class="font-dmserif text-3xl font-bold text-white">Beauty</h1>
                <p
                    class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolore adipisci placeat.</p>
            
                <div class="flex gap-4">
                    <button class="w-8 h-8 p-2 rounded-full overflow-hidden bg-black shadow shadow-black/60">
                        <img src="{{ URL('images/icons8-instagram-24.png') }}" alt="icon 1" class="w-full h-full object-cover">
                    </button>
                    <button class="w-8 h-8 p-2 rounded-full overflow-hidden bg-black shadow shadow-black/60">
                        <img src="{{ URL('images/icons8-instagram-24.png') }}" alt="icon 2" class="w-full h-full object-cover">
                    </button>
                    <button class="w-8 h-8 p-2 rounded-full overflow-hidden bg-black shadow shadow-black/60">
                        <img src="{{ URL('images/icons8-instagram-24.png') }}" alt="icon 3" class="w-full h-full object-cover">
                    </button>
                </div>
            </div>
            
            </div>
            <div
                class="group rounded-lg relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                <div class="h-96 w-80">
                    <img class="h-full w-full object-cover transition duration-500 group-hover:scale-105 group-hover:blur-xs group-hover:brightness-75"
                        src="https://images.unsplash.com/photo-1494145904049-0dca59b4bbad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80"
                        alt="" />
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex translate-y-[55%] group-hover:translate-y-[20%] flex-col items-center justify-center px-9 text-center transition-all duration-500">
                    <h1 class="font-dmserif text-3xl font-bold text-white">Beyond Builder</h1>
                    <p
                        class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolore adipisci placeat.</p>
                        <div class="flex gap-4">
                            <button class="w-8 h-8 p-2 rounded-full overflow-hidden bg-black shadow shadow-black/60">
                                <img src="{{ URL('images/icons8-instagram-24.png') }}" alt="icon 1" class="w-full h-full object-cover">
                            </button>
                            <button class="w-8 h-8 p-2 rounded-full overflow-hidden bg-black shadow shadow-black/60">
                                <img src="{{ URL('images/icons8-instagram-24.png') }}" alt="icon 2" class="w-full h-full object-cover">
                            </button>
                            <button class="w-8 h-8 p-2 rounded-full overflow-hidden bg-black shadow shadow-black/60">
                                <img src="{{ URL('images/icons8-instagram-24.png') }}" alt="icon 3" class="w-full h-full object-cover">
                            </button>
                        </div>
                </div>
            </div>
            <div
                class="group rounded-lg relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                <div class="h-96 w-80">
                    <img class="h-full w-full object-cover transition duration-500 group-hover:scale-105 group-hover:blur-xs group-hover:brightness-75"
                        src="https://images.unsplash.com/photo-1502675135487-e971002a6adb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80"
                        alt="" />
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex translate-y-[55%] group-hover:translate-y-[20%] flex-col items-center justify-center px-9 text-center transition-all duration-500">
                    <h1 class="font-dmserif text-3xl font-bold text-white">Shooting Star</h1>
                    <p
                        class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolore adipisci placeat.</p>
                        <div class="flex gap-4">
                            <button class="w-8 h-8 p-2 rounded-full overflow-hidden bg-black shadow shadow-black/60">
                                <img src="{{ URL('images/icons8-instagram-24.png') }}" alt="icon 1" class="w-full h-full object-cover">
                            </button>
                            <button class="w-8 h-8 p-2 rounded-full overflow-hidden bg-black shadow shadow-black/60">
                                <img src="{{ URL('images/icons8-instagram-24.png') }}" alt="icon 2" class="w-full h-full object-cover">
                            </button>
                            <button class="w-8 h-8 p-2 rounded-full overflow-hidden bg-black shadow shadow-black/60">
                                <img src="{{ URL('images/icons8-instagram-24.png') }}" alt="icon 3" class="w-full h-full object-cover">
                            </button>
                        </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Footer --}}
    <footer class="bg-white dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl">
            <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class=" hover:underline">About</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Careers</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Brand Center</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Blog</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Discord Server</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Twitter</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Facebook</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Licensing</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">iOS</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Android</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Windows</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">MacOS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="px-4 py-6 bg-gray-100 dark:bg-gray-700 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2023 <a
                        href="https://flowbite.com/">Flowbite™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center md:mt-0 space-x-5 rtl:space-x-reverse">
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
