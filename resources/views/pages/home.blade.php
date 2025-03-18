@extends('layouts.app')

@section('title', 'Home')

@section('content')
@php
$galleryImages = [
'/images/gallery/gallery (1).jpg',
'/images/gallery/gallery (2).jpg',
'/images/gallery/gallery (3).jpg',
'/images/gallery/gallery (4).jpg',
'/images/gallery/gallery (5).jpg',
'/images/gallery/gallery (6).jpg',
'/images/gallery/gallery (7).jpg',
'/images/gallery/gallery (10).jpg',
];
@endphp

<div class="relative">
    <!-- Hero Section -->
    <div class="relative bg-blue-900 text-white min-h-screen">
        <!-- Background image -->
        <div class="absolute inset-0 bg-black">
            <img src="{{ asset('assets/images/_K3P1108.jpg') }}" alt="Hero Background"
                class="w-full h-full object-cover opacity-50">
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 flex flex-col items-center justify-center text-center px-4 min-h-[calc(100vh-88px)] animate-fadeIn">
            <div class="max-w-8xl mx-auto">
                <h1 class="font-poppins text-5xl sm:text-5xl md:text-6xl font-bold mb-4 sm:mb-6 leading-tight underline decoration-2 decoration-white tracking-[.15em]">WELCOME TO TDG MARITIME</h1>
                <p class="font-poppins text-xl sm:text-2xl md:text-3xl">A LEADER IN SHIP MANAGEMENT AND MARINE SERVICES</p>
            </div>
        </div>
    </div>
    <!-- Curved Transition Top -->
    <div class="relative">
        <svg class="absolute bottom-0 w-full h-24 -mb-1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1440 320">
            <path fill="white" fill-opacity="1" d="M0,160 C480,320 960,0 1440,160 L1440,320 L0,320 Z"></path>
        </svg>
    </div>

    <!-- Content Section -->
    <section id="services" class="bg-white text-gray-800 py-4 sm:py-5">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-8 sm:mb-12">OUR MEMBER COMPANIES</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Company 1 -->
                <div class="flex flex-col items-center">
                    <div class="relative overflow-hidden rounded-lg  mb-4">
                        <img src="{{ asset('assets/images/logos/FETRAN.jpg') }}" alt="Company 1"
                            class="w-full h-64 object-cover transition-transform duration-300 ">
                    </div>
                    <h3 class="text-xl font-semibold text-center">Far-East Transport Co., Ltd.</h3>
                    <p class="text-gray-600 text-center">(FETRAN)</p>
                </div>

                <!-- Company 2 -->
                <div class="flex flex-col items-center">
                    <div class="relative overflow-hidden rounded-lg  mb-4">
                        <img src="{{ asset('assets/images/logos/TSM.jpg') }}" alt="Company 2"
                            class="w-full h-64 object-cover transition-transform duration-300 ">
                    </div>
                    <h3 class="text-xl font-semibold text-center">TDG Ship Management, Inc.</h3>
                    <p class="text-gray-600 text-center">(TDGSM)</p>
                </div>

                <!-- Company 3 -->
                <div class="flex flex-col items-center">
                    <div class="relative overflow-hidden rounded-lg  mb-4">
                        <img src="{{ asset('assets/images/logos/TCM.jpg') }}" alt="Company 3"
                            class="w-full h-64 object-cover transition-transform duration-300 ">
                    </div>
                    <h3 class="text-xl font-semibold text-center">TDG Crew Management, Inc.</h3>
                    <p class="text-gray-600 text-center">(TDGCM)</p>
                </div>

                <!-- Company 4 -->
                <div class="flex flex-col items-center">
                    <div class="relative overflow-hidden rounded-lg  mb-4">
                        <img src="{{ asset('assets/images/logos/Vroon.jpg') }}" alt="Company 4"
                            class="w-full h-64 object-cover transition-transform duration-300 ">
                    </div>
                    <h3 class="text-xl font-semibold text-center">Vroon-Fil Ship Management, Inc.</h3>
                    <p class="text-gray-600 text-center">(VFSM)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Curved Transition Bottom -->
    <div class="relative z-30">
        <svg class="w-full h-32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1440 320">
            <path fill="white" fill-opacity="1" d="M0,160 C480,320 960,0 1440,160 L1440,0 L0,0 Z"></path>
        </svg>
    </div>
    <x-gallery :images="$galleryImages" />
    <x-contact-form />
</div>

@endsection