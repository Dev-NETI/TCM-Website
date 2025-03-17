@props(['services'])

<div class="bg-gradient-to-r  from-[#1b3693] to-[#3d79be] w-full h-auto flex flex-col items-center justify-center pt-[12em] px-[20px] md:px-[40px] ">
    <div class="text-center">
        <div>
            <span class="text-5xl text-white">OUR SERVICES</span>
        </div>
        <div class="mt-[1em]">
            <span class="text-xl text-white">TDG Maritime aims to provide a full service ship commercial enterprise
                that is involved in the following:</span>
        </div>
    </div>

    <div class="max-w-screen-lg mt-[4em] mb-[4em] grid grid-cols-1 md:grid-cols-2 gap-8">
        @foreach($services as $service)
        <div class="mb-8">
            {{-- title --}}
            <div class="max-w-[20vh] md:max-w-[20vh] lg:max-w-[50vh] 2xl:max-w-[20vh] text-center font-bold text-sm md:text-lg px-[1em] py-[.5em] bg-[#685cfc] text-white rounded-tr-[2em]">
                {{ $service['title'] }}
            </div>            
            <div class="flex flex-col h-full">
                {{-- subtitle --}}
                <p class="text-gray-700 text-xl overflow-hidden shadow-lg bg-white pt-[2em] px-[2em] font-bold flex-1 border-none">
                    {{ $service['sub'] }}
                </p>
                {{-- subdetails --}}
                <p class="text-gray-700 text-md overflow-hidden shadow-lg bg-white px-[2em] pb-[2em] flex-1 border-none">
                    {{ $service['details'] }}
                </p>
            </div>
            
        </div>
        @endforeach
    </div>
    
</div>
