<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Dashboard</title>
</head>

<body class="font-bold">


    <nav class=" border-gray-200 bg-black">
        <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ URL('images/TRISEINDO_ICON.png') }}" class="h-10" alt="Logo" />
                {{-- <img src="{{ URL('images/TRISEINDO_ICON.png') }}" class="h-10" alt="Logo" /> --}}
                <span class="self-center text-sm font-semibold whitespace-nowrap dark:text-white">Tritama Sejahtera <br>Indonesia</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-300 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Company</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Product</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Our
                            Team</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact
                            Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- konten 1 --}}
    {{-- <div class="w-full h-[94vh] relative overflow-hidden">
        <img src="{{ URL('images/bg_konten4.jpg') }}"
            class="w-full h-full object-cover absolute top-0 left-0 z-0 brightness-75" alt="Background">

        <div class="relative z-10 w-full h-full flex items-center justify-start pl-40 pr-4">

            <div class="max-w-3xl p-6 ">
                <div class="inline-block mb-4">
                    <div class="dark:text-white text-md font-semibold mb-2">innovative technology</div>
                    <div class="h-0.5 bg-[#ffcc00] rounded-full"></div>
                </div>

                <a href="#">
                    <div class="mb-2 text-5xl font-semibold tracking-tight text-gray-900 dark:text-white leading-snug">
                        Palm Oil Industry Commitment <br>To Sustainbility</div>
                </a>
                <p class="mb-5 font-normal text-gray-200 dark:text-gray-200">Palm oil and its derivatives are commonly
                    found in personal care and cosmetic products. They provide stability, texture, and moisturizing
                    properties to items like soaps, shampoos, lotions, and makeup.</p>
                <a href="#"
                    class="inline-flex items-center gap-2 px-3 py-1.5 bg-[#ffc300] dark:text-black rounded-md font-medium no-underline hover:bg-yellow-300">
                    Products
                    <svg class="w-4 h-4 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 12H5m14 0-4 4m4-4-4-4" />
                    </svg>

                </a>


            </div>

        </div>
    </div> --}}


    {{-- <div id="petshopCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- Slide 1 -->
          <div class="carousel-item active"
            style="height: 75vh; background-image: url({{ asset('images/bg_konten1.jpg') }}); background-size: cover; background-position: center;">
            <div class="carousel-caption d-flex align-items-center justify-content-center" style="position: absolute; bottom: 300px; left: 50%; transform: translateX(-50%); text-align: center; padding: 10px; border-radius: 8px; color: white; width: 80%; max-width: 1200px;">
              <h4>Perawatan untuk Peliharaan yang Anda Cintai</h4>
          </div>
          
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item"
            style="height: 75vh; background-image: url({{ asset('images/bg_konten2.jpg') }}); background-size: cover; background-position: center;">
            <div class="carousel-caption d-flex align-items-center justify-content-center" style="position: absolute; bottom: 300px; left: 50%; transform: translateX(-50%); text-align: center; padding: 10px; border-radius: 8px; color: white; width: 80%; max-width: 1200px;">
              <h4>Layanan Terjangkau dan Terpercaya</h4>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="carousel-item"
            style="height: 75vh; background-image: url({{ asset('images/bg_konten3.jpg') }}); background-size: cover; background-position: center;">
            <div class="carousel-caption d-flex align-items-center justify-content-center" style="position: absolute; bottom: 300px; left: 50%; transform: translateX(-50%); text-align: center; padding: 10px; border-radius: 8px; color: white; width: 80%; max-width: 1200px;">
              <h4>Kebahagiaan Hewan Peliharaan Anda, Prioritas Kami</h4>
            </div>
          </div>
        </div>
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#petshopCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#petshopCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> --}}

      

    <div id="animation-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        {{-- <div class="relative h-56 overflow-hidden  md:h-96"> --}}
        <div class="relative h-[30vh] overflow-hidden md:h-[94vh]">
            <!-- Item 1 -->
            <div class="hidden duration-300 ease-linear" data-carousel-item>
                <img src="{{ URL('images/bg_konten4.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                {{-- <div class="carousel-caption d-flex align-items-center justify-content-center" style="position: absolute; bottom: 300px; left: 50%; transform: translateX(-50%); text-align: center; padding: 10px; border-radius: 8px; color: white; width: 80%; max-width: 1200px;">
                    <h4>Layanan Terjangkau dan Terpercaya</h4>
                  </div> --}}
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-300 ease-linear" data-carousel-item>
                <img src="{{ URL('images/bg_konten1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-300 ease-linear" data-carousel-item="active">
                <img src="{{ URL('images/bg_konten3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-300 ease-linear" data-carousel-item>
                <img src="{{ URL('images/bg_konten2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            {{-- <div class="hidden duration-300 ease-linear" data-carousel-item>
                <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div> --}}
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>



    <!-- About Section -->
  <section
  class="bg-gray-100 pb-[50px] px py-12 px-6 md:px-20 max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-10">
  <div class="md:w-1/2">
    <img
      src="https://storage.googleapis.com/a1aa/image/5ed665a7-ec27-4714-565b-9ec36fa526ad.jpg"
      alt="Illustration of three people standing behind a computer with plants and abstract shapes"
      class="w-full"
      width="500"
      height="300"
    />
  </div>
  <div class="md:w-1/2 space-y-3">
    <h2 class="text-2xl font-extrabold">
      About <span class="text-yellow-600">TradeLinkGlobal</span>
    </h2>
    <p class="font-semibold text-base">
      Insights and Resources to help drive your Business Forward Faster.
    </p>
    <p class="text-xs leading-tight text-gray-700">
      We build results-oriented brand strategy and continually refine the
      campaign for the greatest outcome. From full scale branding strategy,
      we are reaching to almost desired buyers throughout the world.
    </p>
  </div>
</section>


    {{-- konten 2 --}}
    <div class="bg-white pb-[50px]">
        <div class="flex justify-center">
            <h1 class="text-4xl mt-[50px] mb-5">Services</h1>
        </div>
        <div class="flex flex-wrap justify-center gap-4">
            <div
                class="max-w-xs bg-white border border-yellow-200 rounded-lg shadow-2xl dark:bg-gray-800 m-8 transform transition duration-300 hover:scale-102 hover:shadow-[0_20px_60px_rgba(0,0,0,0.3)]">
                <a href="#">
                    <img class="rounded-t-lg h-48 w-full object-cover"
                        src="https://i.pinimg.com/474x/af/af/76/afaf76b051f3355db4321ecc56296bc9.jpg" alt="" />
                </a>
                <div class="p-5 text-center">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-300">Here are the biggest enterprise
                        technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <div
                class="max-w-xs bg-white border border-yellow-200 rounded-lg shadow-2xl dark:bg-gray-800 m-8 transform transition duration-300 hover:scale-102 hover:shadow-[0_20px_60px_rgba(0,0,0,0.3)]">
                <a href="#">
                    <img class="rounded-t-lg h-48 w-full object-cover"
                        src="https://i.pinimg.com/474x/af/af/76/afaf76b051f3355db4321ecc56296bc9.jpg"
                        alt="" />
                </a>
                <div class="p-5 text-center">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-300">Here are the biggest enterprise
                        technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <div
                class="max-w-xs bg-white border border-yellow-200 rounded-lg shadow-2xl dark:bg-gray-800 m-8 transform transition duration-300 hover:scale-102 hover:shadow-[0_20px_60px_rgba(0,0,0,0.3)]">
                <a href="#">
                    <img class="rounded-t-lg h-48 w-full object-cover"
                        src="https://i.pinimg.com/474x/af/af/76/afaf76b051f3355db4321ecc56296bc9.jpg"
                        alt="" />
                </a>
                <div class="p-5 text-center">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-300">Here are the biggest enterprise
                        technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </div>

    {{-- konten 3 --}}
    <div class="grid grid-cols-2 items-center justify-items-center px-20 h-[78vh]">
        <div class="w-full max-w-4xl mx-auto">
            <img src="https://storage.googleapis.com/a1aa/image/5ed665a7-ec27-4714-565b-9ec36fa526ad.jpg" class="max-w-full h-auto"
                alt="">
        </div>
        <div class="flex flex-col justify-center text-left">
            <div class="text-5xl text-[#023E8A]">About</div>
            <div class="pl-12 text-5xl text-[#0077B6]">Trade Link Global</div>
            <div class="text-3xl mt-10 max-w-xl">Insights and Resources to help drive your Business Forward Faster.
            </div>
            <p class="font-normal max-w-xl mt-10">We build results-oriented brand strategy and continually refine the
                campaign for the greatest outcome. From full scale branding strategy, we are reaching to almost desired
                buyers throughout the world.</p>
        </div>
    </div>


    {{-- konten 4 --}}
    <div class="w-full h-[60vh] relative overflow-hidden">
        <img src="/images/aerial-view-container-cargo-ship-sea (1).jpg"
            class="w-full h-full object-cover absolute top-0 left-0 z-0 brightness-30" alt="Background">

        <div class="relative z-10 w-full h-full flex items-center justify-center gap-10">

            {{-- cards --}}
            <div
                class="max-w-xs mb-[100px] rounded-xl shadow-[0_0_15px_rgba(255,255,255,0.5)] p-5 bg-white flex flex-col items-center">
                <img src="https://i.pinimg.com/474x/af/af/76/afaf76b051f3355db4321ecc56296bc9.jpg"
                    class=" mb-3 rounded-xl h-15 w-15 object-cover" alt="cards">
                <h5 class="text-sm font-bold tracking-tight text-gray-900">1500+</h5>
                <h6 class="text-sm font-normal text-gray-700">Consigment Done</h6>
            </div>

            <div
                class="max-w-xs mt-[100px] rounded-xl shadow-[0_0_15px_rgba(255,255,255,0.5)] p-5 bg-white flex flex-col items-center">
                <img src="https://i.pinimg.com/474x/af/af/76/afaf76b051f3355db4321ecc56296bc9.jpg"
                    class=" mb-3 rounded-xl h-15 w-15 object-cover" alt="cards">
                <h5 class="text-sm font-bold tracking-tight text-gray-900">1500+</h5>
                <h6 class="text-sm font-normal text-gray-700">Consigment Done</h6>
            </div>

            <div
                class="max-w-xs mb-[100px] rounded-xl shadow-[0_0_15px_rgba(255,255,255,0.5)] p-5 bg-white flex flex-col items-center">
                <img src="https://i.pinimg.com/474x/af/af/76/afaf76b051f3355db4321ecc56296bc9.jpg"
                    class=" mb-3 rounded-xl h-15 w-15 object-cover" alt="cards">
                <h5 class="text-sm font-bold tracking-tight text-gray-900">1500+</h5>
                <h6 class="text-sm font-normal text-gray-700">Consigment Done</h6>
            </div>
            {{-- cards --}}

        </div>
    </div>

    {{-- konten 5 --}}
    <div class="grid grid-cols-2 items-center justify-items-center px-40 h-[75vh]">

        <div class="flex flex-col justify-center text-left">
            <div class="text-5xl text-[#0077B6]">Introducing Our Work</div>
            <div class="text-3xl mt-10 max-w-xl">Insights and Resources to help drive your Business Forward Faster.
            </div>
            <p class="font-normal max-w-xl mt-10">Our creativity is driven by depth study in an effort to give you the
                best result and position of your product successfully in international market.
                <br><br>
                We’re on a mission to start studying the exact market for your products worldwide and establish the
                product in appropriate market.</p>
        </div>

        <div class="w-full max-w-4xl mx-auto">
            <img src="/images/forming team leadership 1.png" class="max-w-full h-auto"
                alt="">
        </div>
    </div>

    {{-- Konten 6 --}}
    <div class="flex flex-wrap justify-center gap-4 bg-amber-300">
        <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg h-40 w-full object-cover"
                    src="https://i.pinimg.com/474x/af/af/76/afaf76b051f3355db4321ecc56296bc9.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                        technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-300">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>


        <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg h-40 w-full object-cover"
                    src="https://i.pinimg.com/474x/eb/30/d7/eb30d7a8d3fb60c409da372e777e991a.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                        technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-300">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>


        <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg h-40 w-full object-cover"
                    src="https://i.pinimg.com/474x/87/da/ab/87daab35bf074f948f0f09840638485f.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                        technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-300">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    {{-- konten 7 --}}
    <div class="w-full h-[75vh] relative overflow-hidden">
        <img src="https://i.pinimg.com/736x/d9/b2/97/d9b29715b473dd0a5b37e1bc9929907b.jpg"
            class="w-full h-full object-cover absolute top-0 left-0 z-0" alt="Background">

        <div class="relative z-10 w-full h-full flex items-center justify-center">

            <div class="flex flex-col justify-center gap-4">

                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <svg class="w-7 h-7 text-gray-500 dark:text-gray-300 mb-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                    </svg>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Need a
                            help in Claim?</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-300">Go to this step by step guideline
                        process on how to certify for your weekly benefits:</p>
                    <a href="#" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                        See our guideline
                        <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                        </svg>
                    </a>
                </div>




                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <svg class="w-7 h-7 text-gray-500 dark:text-gray-300 mb-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                    </svg>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Need a
                            help in Claim?</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-300">Go to this step by step guideline
                        process on how to certify for your weekly benefits:</p>
                    <a href="#" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                        See our guideline
                        <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                        </svg>
                    </a>
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
                    <ul class="text-gray-500 dark:text-gray-300 font-medium">
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
                    <ul class="text-gray-500 dark:text-gray-300 font-medium">
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
                    <ul class="text-gray-500 dark:text-gray-300 font-medium">
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
                    <ul class="text-gray-500 dark:text-gray-300 font-medium">
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
                    <a href="#" class="text-gray-300 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-gray-900 dark:hover:text-white">
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
