@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <!-- Hero -->
    <div class="relative min-h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <!-- Hero Image -->
            <img src="{{ asset('images/story/optimized/IMG_5594.jpeg') }}"
                class="w-full h-full object-cover object-[center_27%] grayscale brightness-[0.4]" alt="David Stage">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#111111] via-black/50 to-transparent z-10"></div>
        <div class="relative z-20 text-center px-4 max-w-5xl mx-auto mt-20">
            <span class="text-brand-gold font-bold tracking-[0.3em] uppercase mb-4 block">Case Study</span>
            <h1 class="text-5xl md:text-8xl font-heading font-bold text-white uppercase tracking-tighter mb-6">
                Road to <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-brand-gold to-[#fef08a]">Nationals</span>
                2025
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 font-medium max-w-3xl mx-auto">
                David's journey from average gym-goer to National Competitor. A masterclass in consistency.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 space-y-32">

        <!-- Chapter 1: The Start -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <div class="flex items-center space-x-4">
                    <span class="text-6xl font-heading font-bold text-gray-800">01</span>
                    <h2 class="text-4xl font-heading font-bold text-white uppercase">The Start</h2>
                </div>
                <div class="h-1 w-20 bg-brand-gold"></div>
                <p class="text-gray-400 text-lg leading-relaxed">
                    When David first came to us, he had hit a plateau. He was training hard but eating without purpose. His
                    goal was simple but ambitious: he wanted to step on stage. We started with a complete metabolic reset
                    and a hypertrophy block designed to bring up his lagging parts.
                </p>
                <div class="grid grid-cols-2 gap-8 pt-4">
                    <div>
                        <span class="block text-3xl font-bold text-white">85kg</span>
                        <span class="text-sm text-gray-500 uppercase tracking-wider">Starting Weight</span>
                    </div>
                    <div>
                        <span class="block text-3xl font-bold text-white">22%</span>
                        <span class="text-sm text-gray-500 uppercase tracking-wider">Body Fat</span>
                    </div>
                </div>
            </div>
            <div class="relative h-[600px] border border-white/10 rounded-xl overflow-hidden group">
                <img src="{{ asset('images/story/optimized/IMG_2330.jpeg') }}"
                    class="w-full h-full object-cover object-[center_70%] grayscale group-hover:grayscale-0 transition-all duration-700 top"
                    alt="David Before">
                <div
                    class="absolute bottom-4 left-4 bg-black/80 px-4 py-2 text-white font-bold uppercase tracking-wider text-sm">
                    Day 1</div>
            </div>
        </div>

        <!-- Chapter 2: The Grind -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 grid grid-cols-2 gap-4">
                <div class="h-[300px] rounded-xl overflow-hidden border border-white/5">
                    <img src="{{ asset('images/story/optimized/IMG_4824.jpeg') }}"
                        class="w-full h-full object-cover object-[center_40%] opacity-80" alt="Training Grind">
                </div>
                <div class="h-[300px] rounded-xl overflow-hidden border border-white/5 mt-8">
                    <img src="{{ asset('images/story/optimized/IMG_5212.jpeg') }}"
                        class="w-full h-full object-cover opacity-80 rotate-90 scale-110 " alt="Diet Grind">
                </div>
            </div>
            <div class="order-1 md:order-2 space-y-6">
                <div class="flex items-center space-x-4">
                    <span class="text-6xl font-heading font-bold text-gray-800">02</span>
                    <h2 class="text-4xl font-heading font-bold text-white uppercase">The Grind</h2>
                </div>
                <div class="h-1 w-20 bg-brand-gold"></div>
                <p class="text-gray-400 text-lg leading-relaxed">
                    16 weeks of pure focus. We implemented strict carb cycling and high-intensity hypertrophy training.
                    David didn't miss a meal. He didn't miss a rep. This phase wasn't just about physical change, it was
                    about forging the mindset of a champion.
                </p>
                <ul class="space-y-3 text-gray-300">
                    <li class="flex items-center"><span class="w-2 h-2 bg-brand-gold rounded-full mr-3"></span> 5AM Cardio
                        Sessions</li>
                    <li class="flex items-center"><span class="w-2 h-2 bg-brand-gold rounded-full mr-3"></span> Precision
                        Macro Tracking</li>
                    <li class="flex items-center"><span class="w-2 h-2 bg-brand-gold rounded-full mr-3"></span> Weekly Form
                        Analysis</li>
                </ul>
            </div>
        </div>

        <!-- Chapter 3: The Stage -->
        <div class="space-y-12">
            <div class="text-center max-w-3xl mx-auto space-y-6">
                <div
                    class="inline-block border border-brand-gold px-4 py-1 text-brand-gold uppercase tracking-widest font-bold text-sm">
                    The Result</div>
                <h2 class="text-5xl font-heading font-bold text-white uppercase">The Stage</h2>
                <p class="text-gray-400 text-lg">
                    Nationals 2025. David stepped on stage at his all-time best condition. A transformation that speaks for
                    itself.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div
                    class="h-[500px] rounded-xl overflow-hidden border-2 border-brand-gold shadow-[0_0_20px_rgba(250,204,21,0.2)] group relative">
                    <img src="{{ asset('images/story/optimized/IMG_5575.jpeg') }}"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 rotate-90 scale-125"
                        alt="Stage Front">
                </div>
                <!-- Main Center Image -->
                <div
                    class="h-[500px] md:h-[600px] md:-mt-12 rounded-xl overflow-hidden border-2 border-brand-gold shadow-[0_0_40px_rgba(250,204,21,0.3)] z-10 group relative">
                    <img src="{{ asset('images/story/optimized/IMG_5594.jpeg') }}"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        alt="Stage Center">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/90 to-transparent p-6 text-center">
                        <span class="text-white font-bold text-xl uppercase"></span>
                    </div>
                </div>
                <div
                    class="h-[500px] rounded-xl overflow-hidden border-2 border-brand-gold shadow-[0_0_20px_rgba(250,204,21,0.2)] group relative">
                    <img src="{{ asset('images/story/optimized/IMG_5550.jpeg') }}"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 rotate-90 scale-125"
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