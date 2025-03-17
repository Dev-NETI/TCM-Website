<!-- resources/views/components/navigation.blade.php -->
<nav class="top-0 left-0 w-full bg-white shadow-md z-50">
    <!-- First Layer - Top Navigation -->
    <div class="bg-gray-800 relative text-white py-2">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <!-- Left Side - Contact Info -->
            <div class="flex flex-col md:flex-row space-y-1 md:space-y-0 md:space-x-4 text-sm">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    <span>Contact: (123) 456-7890</span>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    <span>Email: info@example.com</span>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                    </svg>
                    <span>Hours: Mon-Fri 9AM-5PM</span>
                </div>
            </div>

            <!-- Right Side - Join Us -->
            <div>
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-1 rounded text-sm transition duration-300">Join Us</a>
            </div>
        </div>
    </div>

    <!-- Second Layer - Main Navigation -->
    <div class="bg-white ">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="text-xl font-bold text-gray-800">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10">
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-8">
                <a href="" class="text-gray-800 hover:text-blue-600 transition duration-300">Home</a>
                <a href="" class="text-gray-800 hover:text-blue-600 transition duration-300">About Us</a>
                <a href="/services" class="text-gray-800 hover:text-blue-600 transition duration-300">Services</a>
                <a href="/contact" class="text-gray-800 hover:text-blue-600 transition duration-300">Contact</a>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200 mt-4">
            <div class="container mx-auto px-4 py-2">
                <a href="/" class="block py-2 text-gray-800 hover:text-blue-600 transition duration-300">Home</a>
                <a href="/us" class="block py-2 text-gray-800 hover:text-blue-600 transition duration-300">About Us</a>
                <a href="/services" class="block py-2 text-gray-800 hover:text-blue-600 transition duration-300">Services</a>
                <a href="/contact" class="block py-2 text-gray-800 hover:text-blue-600 transition duration-300">Contact</a>
            </div>
        </div>
    </div>
</nav>

<!-- JavaScript for Mobile Menu Toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
