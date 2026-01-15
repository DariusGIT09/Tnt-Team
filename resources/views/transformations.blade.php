@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <div class="bg-[#111111] min-h-screen pt-24 pb-12">
        <!-- Header -->
        <div class="text-center py-16 px-4" data-aos="fade-down">
            <h1 class="text-5xl md:text-7xl font-heading font-bold text-white uppercase tracking-tighter mb-4">
                Real People. <span class="text-brand-gold">Real Results.</span>
            </h1>
            <p class="text-gray-400 text-xl font-medium tracking-wide max-w-2xl mx-auto">
                Proof that the TNT method works. No shortcuts, just hard work and science.
            </p>
        </div>

        <!-- Masonry Grid with Lightbox -->
        <div x-data="{ modalOpen: false, activeImage: '' }" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if(count($images) > 0)
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 auto-rows-[200px] gap-1 grid-flow-dense">
                    @foreach($images as $image)
                        <div class="relative group cursor-pointer overflow-hidden bg-brand-dark {{ $loop->iteration % 9 == 1 || $loop->iteration % 13 == 5 ? 'col-span-2 row-span-2' : '' }}"
                            @click="modalOpen = true; activeImage = '{{ $image }}'" data-aos="zoom-in"
                            data-aos-delay="{{ $loop->iteration * 50 }}">

                            <!-- Image -->
                            <img src="{{ $image }}" aria-hidden="true"
                                class="w-full h-full object-cover grayscale brightness-75 group-hover:grayscale-0 group-hover:brightness-110 transition-all duration-500 ease-in-out"
                                loading="lazy">

                            <!-- Minimal Overlay (Darken on default, clear on hover) -->
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-300">
                            </div>

                            <!-- Border Effect -->
                            <div
                                class="absolute inset-0 border-2 border-transparent group-hover:border-brand-gold transition-colors duration-300 pointer-events-none">
                            </div>

                            <!-- Text Overlay (Only on hover) -->
                            <div
                                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-black/40">
                                <span
                                    class="text-brand-gold font-bold uppercase tracking-widest text-sm drop-shadow-md border-b border-brand-gold pb-0.5 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">View
                                    Result</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-20">
                    <p class="text-gray-500 italic text-xl">Upload transformation images to /public/images/results to see them
                        here.</p>
                </div>
            @endif

            <!-- Lightbox Modal -->
            <div x-show="modalOpen" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 z-[100] flex items-center justify-center bg-black/95 p-4"
                @keydown.escape.window="modalOpen = false" style="display: none;">

                <!-- Close Button -->
                <button @click="modalOpen = false"
                    class="absolute top-6 right-6 text-gray-400 hover:text-white focus:outline-none z-50">
                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Image Container -->
                <div class="max-w-7xl max-h-screen relative" @click.outside="modalOpen = false">
                    <img :src="activeImage" class="max-h-[90vh] w-auto rounded-lg shadow-2xl border border-white/10"
                        alt="Full screen transformation">
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection