@props(['mapUrl' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.1194306006646!2d120.98595547685971!3d14.535160478672038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c92d300b718f%3A0x79c133a0a958e138!2sTDG%20Crew%20Management%20Inc.!5e0!3m2!1sen!2sph!4v1742187807700!5m2!1sen!2sph'])

<section class="contact-section relative overflow-hidden">
    <div class="w-full bg-[#0c2b7a] text-white py-16 relative overflow-hidden">
        <div class="container mx-auto px-4 md:px-8 lg:px-12 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Contact Form -->
                <div class="contact-form-container">
                    <h2 class="text-3xl font-bold mb-2">Drop us a line!</h2>
                    <div class="text-xs mb-4 opacity-70">
                        TDG-Maritime Website-3.1
                    </div>
                    
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" id="name" name="name" placeholder="Name" 
                                class="w-full px-4 py-2 rounded-sm border-0 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror">
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email" 
                                class="w-full px-4 py-2 rounded-sm border-0 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="subject" class="sr-only">Subject</label>
                            <input type="text" id="subject" name="subject" placeholder="Subject" 
                                class="w-full px-4 py-2 rounded-sm border-0 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('subject') border-red-500 @enderror">
                            @error('subject')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="message" class="sr-only">Message</label>
                            <textarea id="message" name="message" rows="5" placeholder="Message" 
                                class="w-full px-4 py-2 rounded-sm border-0 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('message') border-red-500 @enderror"></textarea>
                            @error('message')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="pt-2">
                            <button type="submit" 
                                class="bg-[#0c2b7a] hover:bg-[#081c54] text-white font-medium py-2 px-10 rounded-full transition duration-300 uppercase text-sm border border-white">
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
                
                <!-- Map -->
                <div class="map-container h-[400px] rounded-lg overflow-hidden shadow-lg">
                    <iframe 
                        src="{{ $mapUrl }}" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="rounded-lg">
                    </iframe>
                </div>
            </div>
        </div>
        
        <!-- Background decorations -->
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-[#081c54] to-transparent opacity-50"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-[#1e3a8a] rounded-full opacity-30"></div>
        <div class="absolute top-0 right-0 w-full h-full" style="background: radial-gradient(circle at top right, rgba(30, 58, 138, 0.3), transparent 60%);"></div>
    </div>
</section>

<style>
    .contact-section {
        position: relative;
        z-index: 1;
        background-color: #0c2b7a;
        background-image: linear-gradient(to bottom right, #0c2b7a, #1e3a8a);
    }
    
    .contact-form-container input,
    .contact-form-container textarea {
        background-color: white;
        color: #333;
    }
    
    .contact-form-container label {
        font-weight: 500;
    }
    
    .map-container {
        border: 4px solid white;
    }
    
    .contact-form-container input::placeholder,
    .contact-form-container textarea::placeholder {
        color: #666;
        opacity: 1;
    }
</style> 