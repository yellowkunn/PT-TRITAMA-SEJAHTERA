    <header id="navbar"
        class="fixed inset-x-0 top-0 z-50 mx-auto w-full mt-0 md:mt-6 max-w-screen-md bg-white/30 backdrop-blur-md py-3 shadow-md transition-all duration-300 ease-in-out md:top-6 md:rounded-3xl lg:max-w-screen-lg">
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
                    <a href="/"
                        class="px-2 py-1 text-sm font-medium text-gray-900 hover:bg-white/30 rounded-lg">Home</a>
                    <div class="relative group">
                        <button id="companyDropdownBtn"
                            class="px-2 py-1 text-sm font-medium text-gray-900 hover:bg-white/30 rounded-lg inline-flex items-center gap-1">
                            Company
                            <svg id="companyDropdownIcon" class="w-4 h-4 transform transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="companyDropdown"
                            class="absolute left-0 mt-5 w-40 py-2 hidden flex-col rounded-md bg-white shadow-lg z-50 transition-all duration-300 ease-in-out opacity-0 scale-95">
                            <a href="#"
                                class="block w-full px-4 py-1 my-1 text-sm text-gray-700 hover:bg-gray-100">About Us</a>
                            <a href="#"
                                class="block w-full px-4 py-1 my-1 text-sm text-gray-700 hover:bg-gray-100">Our
                                Vision</a>
                            <a href="#"
                                class="block w-full px-4 py-1 my-1 text-sm text-gray-700 hover:bg-gray-100">Careers</a>
                        </div>
                    </div>


                    <div class="relative group">
                        <button id="productDropdownBtn"
                            class="px-2 py-1 text-sm font-medium text-gray-900 hover:bg-white/30 rounded-lg inline-flex items-center gap-1">
                            Product
                            <svg id="productDropdownIcon" class="w-4 h-4 transform transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="productDropdown"
                            class="absolute left-0 mt-5 w-40 py-2 hidden flex-col rounded-md bg-white shadow-lg z-50 transition-all duration-300 ease-in-out opacity-0 scale-95">
                            @foreach ($categories as $item)
                                <a href="{{ route('kategori.show', ['name' => $item->name]) }}"
                                    class="block w-full px-4 py-1 my-1 text-sm text-gray-700 hover:bg-gray-100">{{ $item->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <a href="{{ route('home') }}#our-team"
                        class="px-2 py-1 text-sm font-medium text-gray-900 hover:bg-white/30 rounded-lg">Our team</a>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="mt-3 hidden flex-col space-y-2 md:hidden">
                <a href="/" class="block px-4 py-2 text-sm text-gray-900 rounded-lg hover:bg-gray-100">Home</a>
                <div>
                    <button id="companyMobileDropdownBtn"
                        class="w-full flex justify-between items-center px-4 py-2 text-sm text-gray-900 rounded-lg hover:bg-gray-100 transition-colors">
                        Company
                        <svg id="companyMobileDropdownIcon" class="w-4 h-4 transform transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="companyMobileDropdown"
                        class="hidden flex-col px-4 pt-1 pb-1 space-y-1 transition-all duration-300 ease-in-out opacity-0 scale-95">
                        <a href="#"
                            class="block w-full py-1 pl-4 text-sm text-gray-700 rounded-lg hover:bg-gray-100">About
                            Us</a>
                        <a href="#"
                            class="block w-full py-1 pl-4 text-sm text-gray-700 rounded-lg hover:bg-gray-100">Our
                            Vision</a>
                        <a href="#"
                            class="block w-full py-1 pl-4 text-sm text-gray-700 rounded-lg hover:bg-gray-100">Careers</a>
                    </div>
                </div>
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
                        @foreach ($categories as $item)
                            <a href="{{ route('kategori.show', ['name' => $item->name]) }}" <a href="#"
                                class="block w-full py-1 pl-4 text-sm text-gray-700 rounded-lg hover:bg-gray-100">{{ $item->name }}</a>
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('home') }}#our-team"
                    class="block px-4 py-2 text-sm text-gray-900 rounded-lg hover:bg-gray-100">Our
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

            const companyBtn = document.getElementById("companyDropdownBtn");
            const companyDropdown = document.getElementById("companyDropdown");
            const companyIcon = document.getElementById("companyDropdownIcon");

            const companyMobileBtn = document.getElementById("companyMobileDropdownBtn");
            const companyMobileDropdown = document.getElementById("companyMobileDropdown");
            const companyMobileIcon = document.getElementById("companyMobileDropdownIcon");

            let lastScrollTop = 0;

            // --- Helper functions to close dropdowns ---
            function closeProductDropdown() {
                productDropdown.classList.remove("opacity-100", "scale-100");
                productDropdown.classList.add("opacity-0", "scale-95");
                productIcon.classList.remove("rotate-180");
                setTimeout(() => productDropdown.classList.add("hidden"), 300);
            }

            function closeCompanyDropdown() {
                companyDropdown.classList.remove("opacity-100", "scale-100");
                companyDropdown.classList.add("opacity-0", "scale-95");
                companyIcon.classList.remove("rotate-180");
                setTimeout(() => companyDropdown.classList.add("hidden"), 300);
            }

            function closeProductMobileDropdown() {
                productMobileDropdown.classList.remove("opacity-100", "scale-100");
                productMobileDropdown.classList.add("opacity-0", "scale-95");
                productMobileIcon.classList.remove("rotate-180");
                setTimeout(() => productMobileDropdown.classList.add("hidden"), 300);
            }

            function closeCompanyMobileDropdown() {
                companyMobileDropdown.classList.remove("opacity-100", "scale-100");
                companyMobileDropdown.classList.add("opacity-0", "scale-95");
                companyMobileIcon.classList.remove("rotate-180");
                setTimeout(() => companyMobileDropdown.classList.add("hidden"), 300);
            }

            // --- Scroll behavior ---
            window.addEventListener("scroll", function() {
                const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

                if (currentScroll > lastScrollTop) {
                    navbar.style.opacity = "0";
                    navbar.style.transform = "translateY(-20px)";
                } else {
                    navbar.style.opacity = "1";
                    navbar.style.transform = "translateY(0)";
                }

                mobileMenu.classList.add("hidden");
                closeProductDropdown();
                closeCompanyDropdown();
                closeProductMobileDropdown();
                closeCompanyMobileDropdown();

                lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
            });

            // --- Toggle mobile menu ---
            toggleBtn.addEventListener("click", () => {
                mobileMenu.classList.toggle("hidden");
            });

            // --- Desktop Product Dropdown ---
            productBtn.addEventListener("click", (e) => {
                e.stopPropagation();
                const isHidden = productDropdown.classList.contains("hidden");

                if (isHidden) {
                    closeCompanyDropdown(); // 🔒 Tutup dropdown lainnya
                    productDropdown.classList.remove("hidden");
                    requestAnimationFrame(() => {
                        productDropdown.classList.remove("opacity-0", "scale-95");
                        productDropdown.classList.add("opacity-100", "scale-100");
                        productIcon.classList.add("rotate-180");
                    });
                } else {
                    closeProductDropdown();
                }
            });

            // --- Desktop Company Dropdown ---
            companyBtn.addEventListener("click", (e) => {
                e.stopPropagation();
                const isHidden = companyDropdown.classList.contains("hidden");

                if (isHidden) {
                    closeProductDropdown(); // 🔒 Tutup dropdown lainnya
                    companyDropdown.classList.remove("hidden");
                    requestAnimationFrame(() => {
                        companyDropdown.classList.remove("opacity-0", "scale-95");
                        companyDropdown.classList.add("opacity-100", "scale-100");
                        companyIcon.classList.add("rotate-180");
                    });
                } else {
                    closeCompanyDropdown();
                }
            });

            // --- Close all if click outside ---
            window.addEventListener("click", (e) => {
                if (!productBtn.contains(e.target) && !productDropdown.contains(e.target)) {
                    closeProductDropdown();
                }
                if (!companyBtn.contains(e.target) && !companyDropdown.contains(e.target)) {
                    closeCompanyDropdown();
                }
            });

            // --- Mobile Product Dropdown ---
            productMobileBtn.addEventListener("click", () => {
                const isHidden = productMobileDropdown.classList.contains("hidden");

                if (isHidden) {
                    closeCompanyMobileDropdown(); // 🔒 Tutup dropdown lainnya
                    productMobileDropdown.classList.remove("hidden");
                    requestAnimationFrame(() => {
                        productMobileDropdown.classList.remove("opacity-0", "scale-95");
                        productMobileDropdown.classList.add("opacity-100", "scale-100");
                        productMobileIcon.classList.add("rotate-180");
                    });
                } else {
                    closeProductMobileDropdown();
                }
            });

            // --- Mobile Company Dropdown ---
            companyMobileBtn.addEventListener("click", () => {
                const isHidden = companyMobileDropdown.classList.contains("hidden");

                if (isHidden) {
                    closeProductMobileDropdown(); // 🔒 Tutup dropdown lainnya
                    companyMobileDropdown.classList.remove("hidden");
                    requestAnimationFrame(() => {
                        companyMobileDropdown.classList.remove("opacity-0", "scale-95");
                        companyMobileDropdown.classList.add("opacity-100", "scale-100");
                        companyMobileIcon.classList.add("rotate-180");
                    });
                } else {
                    closeCompanyMobileDropdown();
                }
            });
        </script>



    </header>
