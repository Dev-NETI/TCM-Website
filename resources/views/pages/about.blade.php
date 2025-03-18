@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="w-full h-[50vh] md:h-[60vh] lg:h-[80vh] 2xl:h-[50vh] bg-cover bg-center relative" style="background-image: url('/images/gallery/hero_bg.png');">
    <div class="absolute inset-0 bg-[#0818A8] opacity-30"></div>
    <div class="relative z-10 flex items-center justify-center w-full h-full animate-fadeIn">
        <div class="flex flex-col items-center">
            <div class="border-b-white border-b-[1px] p-4">
                <span class="font-bold text-white md:text-3xl lg:text-5xl ">
                    ABOUT US
                </span>
            </div>
        </div>
    </div>
</div>

<div class="relative bg-white p-10">
    <div class="w-full h-8 absolute top-[-1em] md:top-[-3em] xl:top-[-5em] left-0 right-0 z-10">
        <svg viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 43.9999C106.667 43.9999 213.333 7.99994 320 7.99994C426.667 7.99994 533.333 43.9999 640 43.9999C746.667 43.9999 853.333 7.99994 960 7.99994C1066.67 7.99994 1173.33 43.9999 1280 43.9999C1386.67 43.9999 1440 19.0266 1440 9.01329V100H0V43.9999Z"
                class="fill-current text-white"></path>
        </svg>
    </div>
    <!-- Content -->
    <div class="relative mx-auto text-gray-700">
        <h3 class="font-bold text-2xl mb-10 text-center text-gray-900 underline mt-5">TDG Maritime</h3>
        <div class="space-y-6">
            <p class="text-gray-700 leading-relaxed text-justify">
                TDG Maritime is a wholly owned business unit of the Transnational Diversified Group (TDG) of Companies under
                its Ship Management and Manpower Division that delivers wide-ranging and quality commercial shipping
                services to its clients. It is committed to serve the needs and cater to the satisfaction of its
                stakeholders by upholding the values of excellence, community, stewardship, fairness, and integrity in its
                operations.
            </p>
            <p class="text-gray-700 leading-relaxed mt-4 text-justify">
                TDG Maritime first began with the establishment of the manning company - TDG Crew Management Inc. (formerly
                known as Dolphin Ship Management, Inc. or "DOLSHIP") that aims to deploy high-quality seafarers to our
                valued principals. Since then, we have carved out a respectable place and also sustained our growth within
                the Philippine maritime industry, serving various ships' principals of different nationalities. We have
                systematically improved and expanded our horizons to respond to the needs of the shipping industry in
                accordance with the standards established by international and local regulations and the requirements of the
                ship owners and principals.
            </p>
            <p class="text-gray-700 leading-relaxed mt-4 text-justify">
                Currently, TDG Maritime is composed of four (4) companies, namely: Far-East Transport, Co., Ltd, TDG Ship
                Management, Inc., TDG Crew Management, Inc., and Vroon-Fil Ship Management, Inc. All member companies are
                specialized to provide full services for all ship commercial activities of SHIP OWNING, SHIP MANAGEMENT,
                SHIP CREWING and CREW MANAGEMENT.
            </p>
        </div>
    </div>
</div>

<div class="relative bg-gradient-to-b from-blue-100 to-white p-10">
    <!-- Wave Background -->
    <div class="absolute top-0 left-0 w-full">
        <svg class="w-full h-auto" viewBox="0 160 1440 320">
            <path fill="#FFF"
                d="M0,160L80,176C160,192,320,224,480,224C640,224,800,192,960,186.7C1120,181,1280,203,1360,213.3L1440,224V0H0Z">
            </path>
        </svg>
    </div>

    <!-- Content -->
    <div class="relative mx-auto text-gray-700">
        <h3 class="font-bold text-2xl mb-10 text-center text-gray-900 underline mt-5">Our Member Companies</h3>
        <div class="space-y-6">
            <div>
                <h4 class="font-semibold text-xl text-gray-800 italic mb-5">Far-East Transport Co., Ltd. (FETRAN)
                </h4>
                <p class="text-gray-700 leading-relaxed text-justify">
                    In October 1979, FETRAN was incorporated with the intention of engaging in ship management,
                    newbuilding consultancy, ship repair supervision and other shipping related businesses.
                    Currently
                    based in Tokyo, Japan, it has evolved to cater to those who experience difficulties in securing
                    qualified specialists for these matters, and similarly reach out to those who find it convenient
                    to
                    partner with the Company for geographic and economic reasons.
                    <br><br>
                    The Company envisions itself to remain at the forefront of its business field through continuous
                    improvement, initiative and innovation with the participation, thoughts and endeavors of its
                    employees, seafarers and principals.
                </p>
            </div>
            <div>
                <h4 class="font-semibold text-xl text-gray-800 italic mb-5">TDG Ship Management, Inc. (TDGSM)</h4>
                <p class="text-gray-700 leading-relaxed text-justify">
                    TDGSM, formerly Transnational Ship Management, Inc. (TranSM), is a management company for
                    domestic
                    and international trade vessels based in Manila, the Philippines. Established in 1995, it
                    continues
                    to ensure safely managed vessels with quality, innovative and cost-efficient services, while
                    providing for the protection of the environment.
                    <br><br>
                    The operations of TDGSM are always led and guided by international standards. The Company's
                    Safety
                    Management System (SMS) and Maritime Labour Compliance (MLC 2006) are certified by Class NK.
                </p>
            </div>
            <div>
                <h4 class="font-semibold text-xl text-gray-800 italic mb-5">TDG Crew Management, Inc. (TDGCM)</h4>
                <p class="text-gray-700 leading-relaxed text-justify">
                    TDGCM was established in Manila in July of 1979 committed to provide Trustworthy, Disciplined,
                    Global, Competent, Maritime Personnel to the vessels of its principals. Formerly Dolphin Ship
                    Management, Inc. (DOLSHIP), the company has since grown remarkably to become one of the major
                    players in the Philippine ship manning industry, offering safe operations manned by a highly
                    qualified crew that embodies the TDG values.
                    <br><br>
                    TDGCM adopts a policy of "meeting change with change," always opening its doors to the dynamic
                    world
                    of shipping. Ever changing it may be, the company instills a strict implementation of "NO
                    TRAINING,
                    NO DEPLOYMENT" policy. This means that no crew can join any ship without first passing the
                    mandatory
                    STCW trainings as well as the training requirements for upgrading as prescribed by the
                    Principals.
                </p>
            </div>
            <div>
                <h4 class="font-semibold text-xl text-gray-800 italic mb-5">Vroon-Fil Ship Management, Inc. (VFSM)
                </h4>
                <p class="text-gray-700 leading-relaxed text-justify">
                    In January 2014, VFSM, a joint venture manning agency between Vroon BV of the Netherlands and
                    TDG
                    that recruits, deploys, and trains seafarers for Vroon deep sea and offshore fleets was
                    established.
                    The Company is located in the harbour district of Manila, Philippines and supports Vroon ship
                    management teams worldwide.
                    <br><br>
                    VFSM envisions to be recognized as the preferred manning and crew management agency of choice in
                    Vroon.
                </p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection