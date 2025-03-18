@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="w-full h-[40vh] md:h-[60vh] lg:h-[80vh] 2xl:h-[70vh] bg-cover bg-center relative " style="background-image: url('/assets/images/contact-us.jpg'); background-position: top;">
        <div class="absolute inset-0 bg-[#0818A8] opacity-30"></div>
        <div class="relative z-10 flex items-center justify-center w-full h-full animate-fadeIn">
                <div class="flex flex-col items-center">
                        <div class="border-b-white border-b-[1px] p-4">
                                <span class="font-bold text-white md:text-3xl lg:text-5xl ">
                                        CONTACT US
                                </span>
                        </div>
                </div>
        </div>
</div>

<div class="bg-white w-full relative">
        <div class="w-full h-8 absolute top-[-1em] md:top-[-3em] xl:top-[-5em] left-0 right-0 z-10">
                <svg viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M0 43.9999C106.667 43.9999 213.333 7.99994 320 7.99994C426.667 7.99994 533.333 43.9999 640 43.9999C746.667 43.9999 853.333 7.99994 960 7.99994C1066.67 7.99994 1173.33 43.9999 1280 43.9999C1386.67 43.9999 1440 19.0266 1440 9.01329V100H0V43.9999Z"
                                class="fill-current text-white"></path>
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
</div>


@endsection