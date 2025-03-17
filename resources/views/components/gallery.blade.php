@props(['images' => []])

<section class="gallery-section py-16 relative overflow-hidden bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-center text-5xl font-bold text-[#1e3a8a] mb-8">GALLERY</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($images as $index => $image)
                @if($index < 12)
                    <div class="gallery-item overflow-hidden rounded-lg">
                        <img src="{{ $image }}" alt="Gallery Image {{ $index + 1 }}" class="w-full h-64 object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    
    <!-- Background decoration -->
    <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-[#e0f7fa] rounded-full opacity-30 z-0"></div>
    <div class="absolute -top-32 -right-32 w-64 h-64 bg-[#e0f7fa] rounded-full opacity-20 z-0"></div>
</section>

<style>
    .gallery-section {
        position: relative;
        z-index: 1;
        background-color: #ffffff;
        background-image: linear-gradient(to bottom, #f8fafc, #ffffff);
    }
    
    .gallery-item {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border-radius: 4px;
        overflow: hidden;
    }
    
    .gallery-item:hover {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        transform: translateY(-5px);
    }
    
    .gallery-section h2 {
        letter-spacing: 1px;
    }
</style> 