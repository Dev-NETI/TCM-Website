
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
        <x-profile />
        <x-gallery :images="$galleryImages" />
        <x-contact-form />    
    </div>

@endsection
