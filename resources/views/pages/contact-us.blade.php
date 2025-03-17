@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="flex flex-col gap-2">

    <div class="flex flex-row gap-4">
            <x-contact.contact-card company="Far-East Transport Co., Ltd. (FETRAN)" 
            contact="+81 3 6381 5073" 
            email="shipmanage@fetranship.co.jp"
            workingHours="Monday - Friday; 9AM - 5PM"/>

            <x-contact.map-component mapUrl="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d413214.3745076607!2d139.28967768906253!3d35.99006799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018a256e9b21b29%3A0x80e4d28699864913!2sFar%20East%20Trading%20Co.%2CLtd!5e0!3m2!1sen!2sph!4v1742190614598!5m2!1sen!2sph" />
    </div>

    <div class="flex flex-row gap-4">
            <x-contact.contact-card company="Far-East Transport Co., Ltd. (FETRAN)" 
            contact="09509098702" 
            email="neti@neti.com.ph"
            workingHours="Monday - Friday; 9AM - 5PM"/>

            <x-contact.map-component mapUrl="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.1215573788736!2d120.98610757580504!3d14.535038785943563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cb0dfd7b31c7%3A0x559fa85b5a1a35fa!2sTDG%20Ship%20Management%2C%20Inc.!5e0!3m2!1sen!2sph!4v1742190759291!5m2!1sen!2sph" />
    </div>

    <div class="flex flex-row gap-4">
            <x-contact.contact-card company="Far-East Transport Co., Ltd. (FETRAN)" 
            contact="09509098702" 
            email="neti@neti.com.ph"
            workingHours="Monday - Friday; 9AM - 5PM"/>

            <x-contact.map-component mapUrl="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.1195213523915!2d120.98595547580494!3d14.535155285943457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c92d300b718f%3A0x79c133a0a958e138!2sTDG%20Crew%20Management%20Inc.!5e0!3m2!1sen!2sph!4v1742190803592!5m2!1sen!2sph" />
    </div>

    <div class="flex flex-row gap-4">
            <x-contact.contact-card company="Far-East Transport Co., Ltd. (FETRAN)" 
            contact="09509098702" 
            email="neti@neti.com.ph"
            workingHours="Monday - Friday; 9AM - 5PM"/>

            <x-contact.map-component mapUrl="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.121625537423!2d120.98606247580508!3d14.535034885943613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca3b09932843%3A0xf3ce235760442188!2sVroon-Fil%20Ship%20Management%20Inc.!5e0!3m2!1sen!2sph!4v1742190834388!5m2!1sen!2sph" />
    </div>

</div>
@endsection