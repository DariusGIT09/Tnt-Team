@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <!-- Hero -->
    <div class="relative min-h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <!-- Hero Image -->
            <img src="{{ asset('images/story/optimized/IMG_5594.webp') }}"
                class="w-full h-full object-cover object-[center_27%] grayscale brightness-[0.4]" alt="David Stage">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#111111] via-black/50 to-transparent z-10"></div>
        <div class="relative z-20 text-center px-4 max-w-5xl mx-auto mt-20">
            <span class="text-brand-gold font-bold tracking-[0.3em] uppercase mb-4 block" data-aos="fade-down">Case
                Study</span>
            <h1 class="text-5xl md:text-8xl font-heading font-bold text-white uppercase tracking-tighter mb-6"
                data-aos="fade-down" data-aos-delay="100">
                Road to <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-brand-gold to-[#fef08a]">Nationals</span>
                2025
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 font-medium max-w-3xl mx-auto" data-aos="fade-up"
                data-aos-delay="200">
                David's journey from average gym-goer to National Competitor. A masterclass in consistency.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 space-y-32">

        <!-- Chapter 1: The Start -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6" data-aos="fade-right">
                <div class="flex items-center space-x-4">
                    <span class="text-6xl font-heading font-bold text-gray-800">01</span>
                    <h2 class="text-4xl font-heading font-bold text-white uppercase">The Start</h2>
                </div>
                <div class="h-1 w-20 bg-brand-gold"></div>
                <p class="text-gray-400 text-lg leading-relaxed">
                    Our collaboration began over 4 years ago, when David was just 16 years old, standing 1.74 m tall and
                    weighing close to 110 kg. He came to me with a simple but deeply important goal: to lose weight and
                    reach a normal, healthy bodyweight, so he could feel good in his own skin and live a normal life for his
                    age.
                </p>
                <div class="grid grid-cols-2 gap-8 pt-4">
                    <div>
                        <span class="block text-3xl font-bold text-white">110kg</span>
                        <span class="text-sm text-gray-500 uppercase tracking-wider">Starting Weight</span>
                    </div>
                    <div>
                        <span class="block text-3xl font-bold text-white">22%</span>
                        <span class="text-sm text-gray-500 uppercase tracking-wider">Body Fat</span>
                    </div>
                </div>
            </div>
            <div class="relative h-[600px] border border-white/10 rounded-xl overflow-hidden group" data-aos="fade-left">
                <img src="{{ asset('images/story/optimized/IMG_2330.webp') }}"
                    class="w-full h-full object-cover object-[center_70%] grayscale group-hover:grayscale-0 transition-all duration-700 top"
                    alt="David Before">
                <div
                    class="absolute bottom-4 left-4 bg-black/80 px-4 py-2 text-white font-bold uppercase tracking-wider text-sm">
                    Day 1</div>
            </div>
        </div>

        <!-- Chapter 2: The Grind -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 grid grid-cols-2 gap-4" data-aos="fade-right">
                <div class="h-[350px] rounded-xl overflow-hidden border border-white/5">
                    <img src="{{ asset('images/story/optimized/IMG_4824.webp') }}"
                        class="w-full h-full object-cover object-[center_40%] opacity-80" alt="Training Grind">
                </div>
                <div class="h-[400px] rounded-xl overflow-hidden border border-white/5 mt-8">
                    <img src="{{ asset('images/story/optimized/IMG_5147.webp') }}"
                        class="w-full h-full object-cover object-[center_80%] opacity-80 scale-[1.2]" alt="Diet Grind">
                </div>
            </div>
            <div class="order-1 md:order-2 space-y-6" data-aos="fade-left">
                <div class="flex items-center space-x-4">
                    <span class="text-6xl font-heading font-bold text-gray-800">02</span>
                    <h2 class="text-4xl font-heading font-bold text-white uppercase">The Grind</h2>
                </div>
                <div class="h-1 w-20 bg-brand-gold"></div>
                <p class="text-gray-400 text-lg leading-relaxed">
                    In the beginning, we worked through in-person personal training at the gym. What stood out immediately
                    was David's exceptional seriousness and commitment.
                    He followed the nutrition plan without deviations, completed every workout exactly as prescribed, and
                    pushed every session to maximum intensity.
                    The first major milestone was achieved: dropping down to 70 kg — a massive transformation.
                </p>
                <ul class="space-y-3 text-gray-300">
                    <li class="flex items-center"><span class="w-2 h-2 bg-brand-gold rounded-full mr-3"></span> Dropped to
                        70kg</li>
                    <li class="flex items-center"><span class="w-2 h-2 bg-brand-gold rounded-full mr-3"></span> Unwavering
                        Discipline</li>
                    <li class="flex items-center"><span class="w-2 h-2 bg-brand-gold rounded-full mr-3"></span> Complete
                        Mindset Shift</li>
                </ul>
            </div>
        </div>

        <!-- Chapter 3: The Stage -->
        <div class="space-y-12">
            <div class="text-center max-w-3xl mx-auto space-y-6" data-aos="fade-down">
                <div
                    class="inline-block border border-brand-gold px-4 py-1 text-brand-gold uppercase tracking-widest font-bold text-sm">
                    The Result</div>
                <h2 class="text-5xl font-heading font-bold text-white uppercase">The Stage</h2>
                <p class="text-gray-400 text-lg">
                    In 2025, David competed in his first bodybuilding competition — the National Championships, where he
                    presented an outstanding physique for a first-time competitor.
                    David is already preparing for future competitions in 2026, continuing to build, improve, and raise his
                    standards.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="h-[500px] rounded-xl overflow-hidden border-2 border-brand-gold shadow-[0_0_20px_rgba(250,204,21,0.2)] group relative"
                    data-aos="zoom-in" data-aos-delay="0">
                    <img src="{{ asset('images/story/optimized/IMG_5575.webp') }}"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 scale-125"
                        alt="Stage Front">
                </div>
                <!-- Main Center Image -->
                <div class="h-[500px] md:h-[600px] md:-mt-12 rounded-xl overflow-hidden border-2 border-brand-gold shadow-[0_0_40px_rgba(250,204,21,0.3)] z-10 group relative"
                    data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('images/story/optimized/IMG_5594.webp') }}"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        alt="Stage Center">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/90 to-transparent p-6 text-center">
                        <span class="text-white font-bold text-xl uppercase"></span>
                    </div>
                </div>
                <div class="h-[500px] rounded-xl overflow-hidden border-2 border-brand-gold shadow-[0_0_20px_rgba(250,204,21,0.2)] group relative"
                    data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('images/story/optimized/IMG_5550.webp') }}"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 scale-125"
                        alt="Stage Back">
                </div>
            </div>
        </div>

        <!-- Footer Quote -->
        <div class="text-center pt-20 border-t border-white/5">
            <blockquote class="text-3xl md:text-5xl font-heading font-bold text-white uppercase leading-tight">
                "Trust the process. <br><span class="text-brand-gold">Be the work.</span>"
            </blockquote>
            <cite class="block mt-6 text-gray-500 font-medium not-italic">- David, National Competitor</cite>
        </div>

    </div>

    @include('partials.footer')
@endsection