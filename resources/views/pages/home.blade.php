@extends('layouts.app')

@section('title', 'Home')

@php
    $companies = [
        ['name' => 'Far-East Transport Co., Ltd.','sub' => '(FETRAN)', 'image' => '/images/gallery/FETRAN.jpg'],
        ['name' => 'TDG Ship Management, Inc.', 'sub' => '(TDGSM)', 'image' => '/images/gallery/TSM.jpg'],
        ['name' => 'TDG Crew Management, Inc.', 'sub' => '(TDGCM)', 'image' => '/images/gallery/TCM.jpg'],
        ['name' => 'Vroon-Fil Ship Management, Inc.','sub' => '(VFSM)',  'image' => '/images/gallery/Vroon.jpg'],
    ];
    $services = [
        ['title' => 'SHIP OWNING', 'sub' => 'PROVIDING FOR RELIABLE AND COMPREHENSIVE SHIPOWNING ACTIVIES', 'details' => 'Including incorporation of the owning company, newbuilding consultancy, ship drawing examination, construction supervision, and vessel registration...'],
        ['title' => 'SHIP MANAGEMENT', 'sub' => 'MANAGING VARIOUS TYPES AND SIZES OF VESSELS', 'details' => 'Including bulk carriers, container vessels, pure car carriers (PCC), cable layer vessels, product/ chemical tankers, general cargo ships and reefers...'],
        ['title' => 'SHIP CREWING', 'sub' => 'ONE OF THE MAJOR PLAYERS IN THE PHILIPPINE SHIP MANNING INDUSTRY', 'details' => 'Offering safe operations manned by a highly qualified crew that embodies the TDG values...'],
        ['title' => 'CREW MANAGEMENT', 'sub' => 'CURRENTLY INVOLVED IN PARTNERSHIPS WITH VARIOUS SHIP PRINCIPALS', 'details' => 'With support of its principals, TDG Maritime through its manning companies implement various crew maintenance programs such as...'],
    ]
@endphp
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
        <x-hero-section />
        <x-affiliated-company :companies="$companies" />
        <x-services-section :services="$services"/>
        <x-profile />
        <x-gallery :images="$galleryImages" />
        <x-contact-form />    
    </div>

@endsection
