<section class="relative w-full overflow-hidden bg-blue-500 flex items-center justify-center py-20">
    <div class="relative container bg-white mx-auto flex justify-center lg:justify-end px-12">
        <div class="relative w-[500px] h-full py-6 bg-white z-20 p-12 py-16 rounded-sm">
            <p class="text-5xl mb-8">Who We Are</p>
            <hr class="w-1/2 border-4 mb-8" />
            <div class="flex flex-col gap-8 mb-8">
                <p class=""><span class="font-bold">Transnational Diversified Group (TDG)</span> is a globally competitive and progressive business group of successful and diverse companies.</p>

                <ul class="pl-8 list-disc">
                    <li>Reputable business group with more than 40 operating companies.</li>
                    <li>Successful partnerships with global corporationss.</li>
                    <li>More than 40 years of market leadership in the industries we serve</li>
                </ul>

                <p><span class="font-bold">TDG Maritime</span> operates under TDG's Ship Management Division which engages in Total Ship Management including crew management, seafarer training , maritime education. ship management . and medical
                    and financial services</p>
            </div>
            <div class="flex gap-2 items-center">
                <a href="{{route('about')}}" class="text-blue-500">More about us</a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-blue-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>
    </div>
    <!-- Background decoration -->
    <div class="absolute left-0 top-0 w-full h-full z-10 bg-black opacity-50"></div>
    <div class="absolute left-0 top-0 w-full h-full">
        <img src="{{asset('images/tdg.png')}}" class="w-full h-full object-cover" />
    </div>
</section>