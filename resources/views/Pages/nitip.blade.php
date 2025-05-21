<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Steel Product Categories</title>
  <link rel="stylesheet" href="{{ asset('css/output.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@600;700&display=swap"/>
  
    {{-- body {
      font-family: "Inter", sans-serif;
      background-image: url('images/bg_konten1.jpg');
	  background-repeat: no-repeat;
      background-size: cover;
      background-position: center; 
	  min-height: 100vh;
    } --}}
    
</head>
<body>
	<div class="min-h-screen p-6 sm:p-10 relative overflow-hidden">
        <img src="{{ asset('images/bg_konten3.jpg') }}" alt="Ocean container ship background image"
            class="absolute inset-0 w-full h-full object-cover object-center -z-10" />
    <a href="index.html" aria-label="Back to homepage" class="inline-block mb-8">
      <button type="button" class="bg-black text-yellow-500 rounded-lg w-12 h-12 flex items-center justify-center shadow-lg hover:bg-gray-500 transition duration-300 focus:outline-none focus:ring-4 focus:ring-yellow-400">
        <i class="fas fa-arrow-left text-lg"></i>
      </button>
    </a>
	<h1 class="text-black font-extrabold text-3xl mb-12 text-center tracking-wide select-none">
      Product Categories
    </h1>
    
	<div class="grid grid-cols-1 sm:grid-cols-2 gap-10 justify-center max-w-5xl mx-auto">
      <!-- Card 1 -->
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden max-w-sm mx-auto hover:shadow-2xl transition-shadow duration-300 flex flex-col">
        <img alt="Metal tubes and pipes stacked, shiny metallic texture" src="https://storage.googleapis.com/a1aa/image/ce2a6ffb-8f79-438e-0b85-c8d845d60a9b.jpg" class="w-full h-48 object-cover" loading="lazy"/>
        <div class="p-6 flex flex-col flex-1">
          <h2 class="text-yellow-500 font-bold text-2xl mb-3 drop-shadow-sm">
            Tubes and Pipes
          </h2>
          <p class="text-black text-sm mb-6 flex-1">
            High-quality steel tubes and pipes suitable for construction,
            plumbing, and industrial applications.
          </p>
          <a href="detail-tubes.html" class="self-start">
            <button type="button" class="bg-gradient-to-r from-yellow-400 to-yellow-600 text-black text-sm font-semibold px-6 py-3 rounded-lg flex items-center gap-3 shadow-md hover:from-yellow-500 hover:to-yellow-400 transition duration-300 focus:outline-none focus:ring-4 focus:ring-yellow-400">
              See more <i class="fas fa-arrow-right"></i>
            </button>
          </a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden max-w-sm mx-auto hover:shadow-2xl transition-shadow duration-300 flex flex-col">
        <img alt="Stacked steel bars in a pile, gray metallic texture" src="https://storage.googleapis.com/a1aa/image/43518efe-80cb-4b6c-f3f5-06222d9337cb.jpg" class="w-full h-48 object-cover" loading="lazy"/>
        <div class="p-6 flex flex-col flex-1">
          <h2 class="text-yellow-500 font-bold text-2xl mb-3 drop-shadow-sm">
            Raw and Semi-Finished Steel Products
          </h2>
          <p class="text-black text-sm mb-6 flex-1">
            Raw and semi-finished steel products for further processing and
            manufacturing.
          </p>
          <a href="detail-raw.html" class="self-start">
			<button type="button" class="bg-gradient-to-r from-yellow-400 to-yellow-600 text-black text-sm font-semibold px-6 py-3 rounded-lg flex items-center gap-3 shadow-md hover:from-yellow-500 hover:to-yellow-400 transition duration-300 focus:outline-none focus:ring-4 focus:ring-yellow-400">
				See more <i class="fas fa-arrow-right"></i>
			</button>
          </a>
        </div>
      </div>

      <!-- Card 3 (full width on small screens) -->
      <div class="sm:col-span-2 flex justify-center">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden max-w-sm mx-auto hover:shadow-2xl transition-shadow duration-300 flex flex-col">
          <img alt="Stacked stainless steel blocks with shiny metallic surface" src="https://storage.googleapis.com/a1aa/image/b9baacc5-54a3-45f6-514c-97bfbfdca457.jpg" class="w-full h-48 object-cover" loading="lazy"/>
          <div class="p-6 flex flex-col flex-1">
            <h2 class="text-yellow-500 font-bold text-2xl mb-3 drop-shadow-sm">
              Stainless Steel Products
            </h2>
            <p class="text-black text-sm mb-6 flex-1">
              Durable and corrosion-resistant stainless steel products for a
              variety of uses.
            </p>
            <a href="detail-stainless.html" class="self-start">
				<button type="button" class="bg-gradient-to-r from-yellow-400 to-yellow-600 text-black text-sm font-semibold px-6 py-3 rounded-lg flex items-center gap-3 shadow-md hover:from-yellow-500 hover:to-yellow-400 transition duration-300 focus:outline-none focus:ring-4 focus:ring-yellow-400">
					See more <i class="fas fa-arrow-right"></i>
				</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>