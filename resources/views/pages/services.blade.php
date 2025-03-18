@extends('layouts.app')

@section('title', 'Services')

@section('content')

<body class="bg-gray-100">
    <!-- Hero Section -->
    <div class="relative bg-blue-900 text-white min-h-screen">
        <!-- Background image -->
        <div class="absolute inset-0 bg-black">
            <img src="{{ asset('assets/images/Services.png') }}" alt="Hero Background"
                class="w-full h-full object-cover opacity-50">
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 flex flex-col items-center justify-center text-center px-4 min-h-[calc(100vh-88px)] animate-fadeIn">
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <h1 class="text-5xl sm:text-5xl md:text-6xl font-bold mb-4 sm:mb-6 leading-tight">OUR SERVICES</h1>
            </div>

            <a href="#services" class="animate-bounce absolute bottom-8 sm:bottom-12">
                <svg class="w-6 h-6 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
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
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-8 sm:mb-12">Maritime Excellence</h2>
            <p class="text-lg sm:text-xl text-center mb-12 sm:mb-16 max-w-3xl mx-auto px-4">
                TDG Maritime aims to provide a full-service ship commercial enterprise that is involved in the following:
            </p>
        </div>
    </section>

    <!-- Curved Transition Bottom -->
    <div class="relative z-30">
        <svg class="w-full h-32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1440 320">
            <path fill="white" fill-opacity="1" d="M0,160 C480,320 960,0 1440,160 L1440,0 L0,0 Z"></path>
        </svg>
    </div>

    <!-- Full Width Image Section 1 -->
    <section class="relative h-[80vh] sm:h-screen -mt-24 group">
        <div class="absolute inset-0 transition-transform duration-700 group-hover:scale-105">
            <img src="{{ asset('assets/images/Pexels.jpg') }}"
                alt="Ship at Sea"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-blue-900/50 transition-opacity duration-500 group-hover:bg-blue-900/40"></div>
        </div>
        <div class="relative z-10 h-full flex items-center justify-center">
            <div class="text-center text-white px-4 transform transition-all duration-500 lg:translate-y-8 lg:opacity-0 opacity-100 lg:group-hover:translate-y-0 lg:group-hover:opacity-100">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 sm:mb-6">SHIP OWNING</h2>
                <p class="text-base sm:text-xl md:text-2xl max-w-4xl mx-auto bg-black/30 p-4 sm:p-6 rounded-lg backdrop-blur-sm">
                    TDG Maritime offers one-stop comprehensive services including incorporation of the owning company, newbuilding consultancy, ship drawing examination, construction supervision, and vessel registration under flag of choice. Coordination services between principals and their charterers and shippers of consignees are also available.
                </p>
            </div>
        </div>
    </section>

    <!-- Full Width Image Section 2 -->
    <section class="relative h-[80vh] sm:h-screen -mt-2 group">
        <div class="absolute inset-0 transition-transform duration-700 group-hover:scale-105">
            <img src="{{ asset('assets/images/CSAD.jpg') }}"
                alt="Maritime Services"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/50 transition-opacity duration-500 group-hover:bg-black/40"></div>
        </div>
        <div class="relative z-10 h-full flex items-center justify-center">
            <div class="text-center text-white px-4 transform transition-all duration-500 lg:translate-y-8 lg:opacity-0 opacity-100 lg:group-hover:translate-y-0 lg:group-hover:opacity-100">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 sm:mb-6">SHIP MANAGEMENT</h2>
                <p class="text-base sm:text-xl md:text-2xl max-w-4xl mx-auto bg-black/30 p-4 sm:p-6 rounded-lg backdrop-blur-sm">
                    TDG Maritime companies possess combined knowledge and expertise of managing various types and sizes of vessels including bulk carriers, container vessels, pure car carriers (PCC), cable layer vessels, product/ chemical tankers, general cargo ships and reefers. The scope of full management includes technical assistance and supervision, manning, vessel repair and maintenance, purchasing matters, and insurance and accounting processes, while partial management may involve purchasing, accounting and crew management.
                </p>
            </div>
        </div>
    </section>

    <!-- Full Width Image Section 3 -->
    <section class="relative min-h-screen -mt-2 group">
        <div class="absolute inset-0 transition-transform duration-700 group-hover:scale-105">
            <img src="{{ asset('assets/images/Deck.jpg') }}"
                alt="Maritime Services"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/50 transition-opacity duration-500 group-hover:bg-black/40"></div>
        </div>
        <div class="relative z-10 h-full flex items-center justify-center py-16 sm:py-24">
            <div class="text-center text-white px-4 transform transition-all duration-500 lg:translate-y-8 lg:opacity-0 opacity-100 lg:group-hover:translate-y-0 lg:group-hover:opacity-100">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 sm:mb-6">SHIP CREWING AND CREW MANAGEMENT</h2>
                <p class="text-base sm:text-lg md:text-xl max-w-7xl mx-auto bg-black/30 p-4 sm:p-6 rounded-lg backdrop-blur-sm overflow-y-auto max-h-[60vh] scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-transparent">
                    TDG Maritime is currently involved in partnerships with various principals of Japanese,
                    Italian, Greek, Norwegian, Indian, British, American and Dutch principals for crewing
                    services. <br> <br>
                    With the support of its principals, TDG Maritime through its manning companies
                    implement various crew maintenance programs such as: <br> <br>
                    - R.E.A.C.H. Program (Regale Express Across the High Seas), where seafarers can send
                    gifts, flowers, stuffed toys, etc. to their loved ones while they are at sea with hassle-free
                    terms of payments; <br> <br>
                    -The TDG Seafarers of the Year (SOTY) Award, wherein the SOTY Award is given
                    annually to seafarers who exemplify the TOG Core Values of excellence, community,
                    fairness, integrity and stewardship. <br> <br>
                    -Officers' Dialogue, where this activity provides a venue for discourse for our senior and
                    junior officers regarding contemporary issues in the ship manning business and
                    Principal-specific policies <br> <br>
                    -Crew Health Care and Savings Program, where various incentives are given by specific
                    Principals to active and loyal crew. <br> <br>
                    Aside from these, other crew morale and welfare initiatives include regular sending of
                    recreational materials to vessels such as quarterly corporate magazines, local
                    newspapers and magazines, and videotapes, and welfare assistance to crew families
                    given to seafarers' dependents in the event of accidents and death of a family member.
                </p>
            </div>
        </div>
    </section>
</body>

@endsection