@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<!-- Hero Section -->
<div class="relative text-white min-h-screen">
        <!-- Background image -->
        <div class="absolute inset-0 bg-black">
                <img src="{{ asset('assets/images/contact-us.jpg') }}" alt="Hero Background"
                        class="w-full h-full object-cover opacity-50">
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 flex flex-col items-center justify-center text-center px-4 min-h-[calc(100vh-88px)] animate-fadeIn">
                <div class="max-w-8xl mx-auto">
                        <h1 class="font-poppins text-5xl sm:text-5xl md:text-6xl font-bold mb-4 sm:mb-6 leading-tight underline decoration-2 decoration-white tracking-[.15em]">Get in touch with us</h1>
                </div>
        </div>
</div>
<!-- Curved Transition Top -->
<div class="relative">
        <svg class="absolute bottom-0 w-full h-24 -mb-1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1440 320">
                <path fill="#F3F4F6" fill-opacity="1" d="M0,160 C480,320 960,0 1440,160 L1440,320 L0,320 Z"></path>
        </svg>
</div>

<div class="flex flex-col items-center gap-6">
        <div class="flex flex-col md:flex-row justify-center items-center gap-16 max-w-5xl">
                <x-contact.contact-card-component company="Far-East Transport Co., Ltd. (FETRAN)"
                        contact="+81 3 6381 5073"
                        email="shipmanage@fetranship.co.jp"
                        workingHours="Monday - Friday; 9AM - 5PM" />

                <x-contact.map-component mapUrl="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d413214.3745076607!2d139.28967768906253!3d35.99006799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018a256e9b21b29%3A0x80e4d28699864913!2sFar%20East%20Trading%20Co.%2CLtd!5e0!3m2!1sen!2sph!4v1742190614598!5m2!1sen!2sph" />
        </div>

        <div class="flex flex-col md:flex-row justify-center items-center gap-16 max-w-5xl">
                <x-contact.contact-card-component company="TDG Ship Management, Inc. (TDGSM)"
                        contact="+632-8-527-7301"
                        websiteUrl="https://tdgworld.com"
                        email="techmanage@tdgsm.ph"
                        workingHours="Monday - Friday; 9AM - 5PM" />

                <x-contact.map-component mapUrl="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.1215573788736!2d120.98610757580504!3d14.535038785943563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cb0dfd7b31c7%3A0x559fa85b5a1a35fa!2sTDG%20Ship%20Management%2C%20Inc.!5e0!3m2!1sen!2sph!4v1742190759291!5m2!1sen!2sph" />
        </div>

        <div class="flex flex-col md:flex-row justify-center items-center gap-16 max-w-5xl">
                <x-contact.contact-card-component company="TDG Crew Management, Inc. (TDGCM)"
                        contact="+632-8-245-2202 / +632-8-245-2210"
                        websiteUrl="http://www.tdgcm.ph"
                        email="comms@tdgcm.ph, recruitment@tdgcm.ph"
                        workingHours="Monday - Friday; 9AM - 5PM" />

                <x-contact.map-component mapUrl="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.1195213523915!2d120.98595547580494!3d14.535155285943457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c92d300b718f%3A0x79c133a0a958e138!2sTDG%20Crew%20Management%20Inc.!5e0!3m2!1sen!2sph!4v1742190803592!5m2!1sen!2sph" />
        </div>

        <div class="flex flex-col md:flex-row justify-center items-center gap-16 max-w-5xl">
                <x-contact.contact-card-component company="Vroon-Fil Ship Management, Inc. (VFSM)"
                        contact="+632-8-525-2064"
                        websiteUrl="https://www.vroon.nl"
                        email="mhr@ph.vroonshipmanagement.com"
                        workingHours="Monday - Friday; 9AM - 5PM" />

                <x-contact.map-component mapUrl="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.121625537423!2d120.98606247580508!3d14.535034885943613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca3b09932843%3A0xf3ce235760442188!2sVroon-Fil%20Ship%20Management%20Inc.!5e0!3m2!1sen!2sph!4v1742190834388!5m2!1sen!2sph" />
        </div>
</div>
@endsection