<!-- resources/views/components/navigation.blade.php -->
<nav class="z-[999] top-0 overflow-visible h-min">

    <div class="relative text-white py-4 bg-linear-to-r from-blue-800 to-blue-900">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <!-- Left Side - Contact Info -->
            <div class="flex flex-col md:flex-row space-y-1 md:space-y-0 md:space-x-6 text-sm">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    <span>+632-8-527-7301</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    <span>techmanage@tdgsm.ph</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                    </svg>
                    <span>Mon-Fri: 9AM - 5PM</span>
                </div>
            </div>

            <!-- Right Side - Join Us -->
            <div class="flex items-center gap-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 text-yellow-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                </svg>
                <a href="#" class="">JOIN US!</a>
            </div>
        </div>
    </div>

    <!-- Second Layer - Main Navigation -->
    <div id="sticky-nav" class="absolute w-full py-4 z-100">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{route('home')}}" class="text-xl font-bold text-gray-800">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-28">
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="open-menu" class="md:hidden text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>

            <!-- Mobile Menu Overlay -->
            <div id="mobile-menu-overlay" class="fixed inset-0 backdrop-blur-lg bg-blue-900/90 z-[9999] transform translate-x-full transition-transform duration-300 md:hidden">
                <div class="flex flex-col h-full">
                    <div class="flex justify-end p-6">
                        <button id="close-menu" class="text-white hover:text-yellow-500 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex-1 flex items-center justify-center">
                        <ul class="flex flex-col items-center space-y-8 text-white text-xl">
                            <li><a href="{{route('home')}}" class="hover:text-yellow-500 transition-colors {{ (Route::currentRouteName() === 'home')? 'text-yellow-500 border-b-2 border-yellow-500': '' }}">Home</a></li>
                            <li><a href="{{route('about')}}" class="hover:text-yellow-500 transition-colors {{ request()->is('about*')? 'text-yellow-500 border-b-2 border-yellow-500': '' }}">About Us</a></li>
                            <li><a href="{{route('services')}}" class="hover:text-yellow-500 transition-colors {{ request()->is('services*')? 'text-yellow-500 border-b-2 border-yellow-500': '' }}">Our Services</a></li>
                            <li><a href="{{route('contact-us')}}" class="hover:text-yellow-500 transition-colors {{ request()->is('contact*')? 'text-yellow-500 border-b-2 border-yellow-500': '' }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <div id="sticky-nav-links" class="hidden md:flex space-x-8 text-white font-medium">
                <a href="{{route('home')}}" class="transition py-2 duration-300 hover:text-yellow-500 {{ (Route::currentRouteName() === 'home')? 'border-b-4 border-white active-nav': '' }}">Home</a>
                <a href="{{route('about')}}" class="transition py-2 duration-300 hover:text-yellow-500 {{ request()->is('about*')? 'border-b-4 border-white active-nav': '' }}">About Us</a>
                <a href="{{route('services')}}" class="transition py-2 duration-300 hover:text-yellow-500 {{ request()->is('services*')? 'border-b-4 border-white active-nav': '' }}">Our Services</a>
                <a href="{{route('contact-us')}}" class="transition py-2 duration-300 hover:text-yellow-500 {{ request()->is('contact*')? 'border-b-4 border-white active-nav': '' }}">Contact</a>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200 mt-4 text-blue-700 z-50">
            <div class="container mx-auto px-4 py-2">
                <a href="{{route('home')}}" class="block py-2 text-gray-800 hover:text-blue-600 transition duration-300 ">Home</a>
                <a href="{{route('about')}}" class="block py-2 text-gray-800 hover:text-blue-600 transition duration-300">About Us</a>
                <a href="{{route('services')}}" class="block py-2 text-gray-800 hover:text-blue-600 transition duration-300">Our Services</a>
                <a href="{{route('contact-us')}}" class="block py-2 text-gray-800 hover:text-blue-600 transition duration-300">Contact</a>
            </div>
        </div>
    </div>
</nav>

<!-- JavaScript for Mobile Menu Toggle -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const nav = document.querySelector("#sticky-nav");
        const links = document.querySelector("#sticky-nav-links");
        const activeLink = document.querySelector(".active-nav");
        const openMenuBtn = document.getElementById('open-menu');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        const navOffset = nav.offsetTop;

        // Function to update navigation styles based on scroll position
        function updateNavStyles() {
            const isScrolled = window.scrollY >= navOffset;

            if (isScrolled) {
                nav.classList.add("fixed", "top-0", "left-0", "shadow-md", "backdrop-blur-lg", "bg-blue-950/95");
                nav.classList.remove("absolute");
                links.classList.remove("text-white");
                links.classList.add("text-white");
                if (activeLink) {
                    activeLink.classList.remove("border-white");
                    activeLink.classList.add("border-white");
                }
                openMenuBtn.classList.remove("text-white");
                openMenuBtn.classList.add("text-blue-900");
            } else {
                nav.classList.remove("fixed", "top-0", "left-0", "shadow-md", "backdrop-blur-lg", "bg-blue-950/95");
                nav.classList.add("absolute");
                links.classList.add("text-white");
                links.classList.remove("text-blue-900");
                if (activeLink) {
                    activeLink.classList.add("border-white");
                    activeLink.classList.remove("border-blue-900");
                }
                openMenuBtn.classList.add("text-white");
                openMenuBtn.classList.remove("text-blue-900");
            }
        }

        // Call on scroll
        window.addEventListener("scroll", updateNavStyles);

        // Initial style update
        updateNavStyles();

        // Updated mobile menu toggle functionality
        document.getElementById('open-menu').addEventListener('click', () => {
            mobileMenuOverlay.classList.remove('translate-x-full');
            document.body.style.overflow = 'hidden';
            // Force the overlay to be at the very top of the viewport
            window.scrollTo(0, 0);
        });

        document.getElementById('close-menu').addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent event from bubbling to overlay
            mobileMenuOverlay.classList.add('translate-x-full');
            document.body.style.overflow = '';
        });

        // Prevent clicks inside the menu content from closing the menu
        mobileMenuOverlay.querySelector('.flex-col').addEventListener('click', (e) => {
            e.stopPropagation();
        });

        // Close menu when clicking outside
        mobileMenuOverlay.addEventListener('click', (e) => {
            if (e.target === mobileMenuOverlay) {
                mobileMenuOverlay.classList.add('translate-x-full');
                document.body.style.overflow = '';
            }
        });
    });
</script>