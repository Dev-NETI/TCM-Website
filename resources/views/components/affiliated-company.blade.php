@props(['companies'])

<div class="bg-white w-full relative">
    <div class="w-full h-8 absolute top-[-1em] md:top-[-3em] xl:top-[-5em] left-0 right-0 z-10">
        <svg viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 43.9999C106.667 43.9999 213.333 7.99994 320 7.99994C426.667 7.99994 533.333 43.9999 640 43.9999C746.667 43.9999 853.333 7.99994 960 7.99994C1066.67 7.99994 1173.33 43.9999 1280 43.9999C1386.67 43.9999 1440 19.0266 1440 9.01329V100H0V43.9999Z"
                class="fill-current text-white"></path>
        </svg>
    </div>
    <div class="w-full pt-16 pb-16 relative z-20">
        <div class="flex flex-col items-center justify-center w-full h-[auto] xl:h-[60vh] 2xl:h-[40vh]">
            <div class="mb-8">
                <span class="text-2xl md:text-5xl text-[#282c64]">OUR MEMBER COMPANIES</span>
            </div>
            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">
                @foreach ($companies as $company)
                <div class="flex flex-col items-center">
                    <img src="{{ $company['image'] }}" alt="{{ $company['name'] }}" class="w-30 md:w-70 h-30 md:h-70 mb-4">
                    <p class="text-xl text-[#282c64]">{{ $company['name'] }}</p>
                    <p class="text-xl text-[#282c64]">{{ $company['sub'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="absolute lg:bottom-[-3rem] xl:bottom-[-5rem] left-0 right-0 z-[10]">
        <svg viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 100C106.667 100 213.333 56 320 56C426.667 56 533.333 100 640 100C746.667 100 853.333 56 960 56C1066.67 56 1173.33 100 1280 100C1386.67 100 1440 80 1440 70V0H0V100Z"
                class="fill-current text-white"></path>
        </svg>
    </div>
</div>