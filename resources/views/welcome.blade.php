@extends('layouts.app')

@section('content')

    @include('partials.navbar')

    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image with Dark Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="/images/Gym/optimized/IMG_3606.jpeg" alt="Hero Fitness Background"
                class="w-full h-full object-cover object-[50%_25%]">
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-brand-dark"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 text-center px-4 max-w-5xl mx-auto mt-16">
            <h1 class="text-6xl md:text-8xl font-heading font-bold text-white uppercase leading-none tracking-tighter mb-6 drop-shadow-lg"
                data-aos="fade-down">
                Push <span class="text-brand-gold">Limits.</span><br>
                Achieve <span class="text-white border-b-4 border-brand-gold">Greatness.</span>
            </h1>
            <p class="text-gray-300 text-lg md:text-2xl mb-10 font-normal max-w-2xl mx-auto">
                Elite custom training and nutrition formulation by <span class="text-brand-gold font-bold">Tiberiu
                    Tomoroga</span>.
                Forge your legacy.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4" data-aos="fade-up"
                data-aos-delay="200">
                <a href="{{ route('contact') }}"
                    class="bg-brand-gold hover:bg-brand-gold-hover text-black font-heading font-bold text-xl py-4 px-10 rounded-full transition-all transform hover:scale-105 shadow-[0_0_20px_rgba(250,204,21,0.4)]">
                    START YOUR JOURNEY
                </a>
                <a href="{{ route('transformations') }}"
                    class="border border-white/30 hover:border-brand-gold text-white hover:text-brand-gold font-heading font-bold text-xl py-4 px-10 rounded-full transition-all">
                    VIEW TRANSFORMATIONS
                </a>
            </div>
        </div>

        <!-- Floating UI Badges (Decorative) -->
        <div
            class="absolute top-[30%] left-[10%] hidden lg:block animate-bounce shadow-glow bg-brand-gray/80 backdrop-blur border border-brand-gold/20 p-4 rounded-xl">
            <div class="flex items-center space-x-3">
                <div class="text-brand-gold">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-xs text-gray-400 uppercase">Heart Rate</p>
                    <p class="text-white font-bold font-heading text-lg">121 BPM</p>
                </div>
            </div>
        </div>

        <div
            class="absolute bottom-[20%] right-[10%] hidden lg:block animate-pulse shadow-glow bg-brand-gray/80 backdrop-blur border border-brand-gold/20 p-4 rounded-xl">
            <div class="flex items-center space-x-3">
                <div class="text-brand-gold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-xs text-gray-400 uppercase">Intensity</p>
                    <p class="text-white font-bold font-heading text-lg">FAT BURN ZONE</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="bg-black py-10 border-t border-brand-gray border-b border-brand-gray relative z-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-white/10">
                <div class="p-4" data-aos="fade-up" data-aos-delay="0">
                    <p class="text-5xl font-heading font-bold text-brand-gold mb-2">7+</p>
                    <p class="text-gray-400 uppercase tracking-widest text-sm">Years Experience</p>
                </div>
                <div class="p-4" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-5xl font-heading font-bold text-brand-gold mb-2">250+</p>
                    <p class="text-gray-400 uppercase tracking-widest text-sm">Lives Transformed</p>
                </div>
                <div class="p-4" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-5xl font-heading font-bold text-brand-gold mb-2">100%</p>
                    <p class="text-gray-400 uppercase tracking-widest text-sm">Customized Plans</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Join Us Section -->
    <section class="relative py-24 bg-brand-dark overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 opacity-5 z-0">
            <div
                class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] animate-slide-bg">
            </div>
            <!-- Using a simple pattern first, but let's try to make it look like arrows as requested -->
            <div
                class="absolute inset-0 bg-[linear-gradient(45deg,transparent_25%,rgba(255,255,255,0.05)_25%,rgba(255,255,255,0.05)_50%,transparent_50%,transparent_75%,rgba(255,255,255,0.05)_75%,rgba(255,255,255,0.05)_100%)] bg-[length:40px_40px] animate-slide-bg">
            </div>
        </div>

        <!-- Big Arrow Overlay (SVG) -->
        <div class="absolute inset-0 z-0 opacity-10 pointer-events-none">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="arrow-pattern" x="0" y="0" width="200" height="200" patternUnits="userSpaceOnUse"
                        patternTransform="rotate(45)">
                        <path d="M100 0 L150 50 L100 100" fill="none" stroke="white" stroke-width="20" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#arrow-pattern)" class="animate-pulse" />
            </svg>
        </div>


        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row items-center gap-16">

                <!-- Text Content -->
                <div class="w-full md:w-1/2" data-aos="fade-right">
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-white uppercase italic leading-tight mb-6">
                        No Shortcuts. <span class="text-brand-gold">Just The Truth.</span>
                    </h2>

                    <div class="space-y-6 text-gray-400 text-lg leading-relaxed">
                        <p>
                            You won't hear me say "Lose 10kg in one month". I don't use cheap marketing tricks or sell false
                            promises.
                            I promote real, sustainable results built on intelligent training, consistency, and patience.
                        </p>
                        <p>
                            Talent is cheap. Discipline is expensive. Whether you are a beginner or an advanced athlete, the
                            principles remain the same:
                            work with purpose, remain disciplined, and the results will follow.
                        </p>
                    </div>

                    <div class="mt-8">
                        <a href="{{ route('about') }}"
                            class="inline-block border border-white/30 hover:border-brand-gold text-white hover:text-brand-gold font-bold uppercase tracking-wide py-3 px-8 rounded-full transition-all">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Image with slanted background effect -->
                <div class="w-full md:w-1/2 relative" data-aos="fade-left">
                    <!-- Slanted Backdrops -->
                    <div
                        class="absolute top-0 right-0 -mr-10 -mt-10 w-full h-full bg-brand-gray/50 transform skew-x-12 rounded-3xl z-0">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 -ml-4 -mb-4 w-full h-full border-2 border-brand-gold/20 transform -skew-x-6 rounded-3xl z-0">
                    </div>

                    <img src="/images/Gym/optimized/IMG_3607.jpeg" alt="Fitness Woman Running"
                        class="relative z-10 w-full rounded-2xl shadow-2xl grayscale hover:grayscale-0 transition-all duration-500 object-cover object-[50%_25%]">
                </div>

            </div>
        </div>
    </section>

    </section>

    <!-- Features & Stats Section -->
    <section class="py-24 bg-[#111111] relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="absolute top-10 left-10 w-96 h-96 bg-brand-gold/5 rounded-full filter blur-[100px]"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-brand-gold/5 rounded-full filter blur-[100px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row gap-16">
                <!-- Left Column: Text & Stats -->
                <div class="w-full lg:w-5/12 flex flex-col justify-center" data-aos="fade-right">
                    <!-- Big Arrow Background Effect (CSS only for shape) -->
                    <div class="relative">
                        <div class="absolute -left-20 -top-20 w-80 h-full opacity-5 pointer-events-none">
                            <svg viewBox="0 0 100 100" fill="none" stroke="white" stroke-width="20" class="w-full h-full">
                                <path d="M20 0 L70 50 L20 100" />
                            </svg>
                        </div>

                        <h2 class="text-4xl md:text-5xl font-heading font-bold text-white mb-6 uppercase">
                            Why join us ?
                        </h2>
                        <p class="text-gray-400 text-lg mb-12 leading-relaxed">
                            Discover a fitness community that inspires, motivates, and supports you at every step. Achieve
                            your goals with expert guidance and top-notch facilities.
                        </p>
                    </div>

                    <div class="flex flex-row gap-12">
                        <!-- Stat 1 -->
                        <div>
                            <div class="flex items-start">
                                <span class="text-4xl font-heading font-bold text-white">24/7</span>
                            </div>
                            <p class="text-gray-400 mt-1 uppercase tracking-wider text-sm">Support</p>
                        </div>

                        <!-- Stat 2 -->
                        <div>
                            <div class="flex items-start">
                                <span class="text-4xl font-heading font-bold text-white">1-on-1</span>
                            </div>
                            <p class="text-gray-400 mt-1 uppercase tracking-wider text-sm">Direct Access</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: 2x2 Grid -->
                <div class="w-full lg:w-7/12">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Card 1: Personal Training -->
                        <div class="bg-[#2a2f38] p-8 rounded-xl border border-brand-gold/10 hover:border-brand-gold transition-all duration-300 hover:-translate-y-1 shadow-md hover:shadow-glow"
                            data-aos="fade-up" data-aos-delay="0">
                            <div
                                class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-6 shadow-[0_0_10px_rgba(255,255,255,0.2)]">
                                <img src="{{ asset('images/ICONS/dumbelICON.png') }}" class="w-9 h-9 object-contain"
                                    alt="Personal Training">
                            </div>
                            <h3 class="text-2xl font-heading font-bold text-white mb-4">Personal Training</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Work one-on-one with expert coaches who design custom programs to help you reach your
                                fitness goals.
                            </p>
                        </div>

                        <!-- Card 2: Posing & Presentation -->
                        <div class="bg-[#2a2f38] p-8 rounded-xl border border-brand-gold/10 hover:border-brand-gold transition-all duration-300 hover:-translate-y-1 mt-0 md:mt-12 shadow-md hover:shadow-glow"
                            data-aos="fade-up" data-aos-delay="100">
                            <div
                                class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-6 shadow-[0_0_10px_rgba(255,255,255,0.2)]">
                                <img src="{{ asset('images/ICONS/PosingICON.png') }}" class="w-9 h-9 object-contain"
                                    alt="Posing">
                            </div>
                            <h3 class="text-2xl font-heading font-bold text-white mb-4">Posing & Presentation</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Master the art of presentation. We refine your posing routine to ensure you showcase your
                                physique perfectly on stage.
                            </p>
                        </div>

                        <!-- Card 3: Strength Training -->
                        <div class="bg-[#2a2f38] p-8 rounded-xl border border-brand-gold/10 hover:border-brand-gold transition-all duration-300 hover:-translate-y-1 shadow-md hover:shadow-glow"
                            data-aos="fade-up" data-aos-delay="200">
                            <div
                                class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-6 shadow-[0_0_10px_rgba(255,255,255,0.2)]">
                                <img src="{{ asset('images/ICONS/Biceps icon.png') }}" class="w-9 h-9 object-contain"
                                    alt="Strength Training">
                            </div>
                            <h3 class="text-2xl font-heading font-bold text-white mb-4">Strength Training</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Utilize advanced equipment and techniques to build muscle, increase power, and achieve.
                            </p>
                        </div>

                        <!-- Card 4: Nutrition Guidance -->
                        <div class="bg-[#2a2f38] p-8 rounded-xl border border-brand-gold/10 hover:border-brand-gold transition-all duration-300 hover:-translate-y-1 mt-0 md:mt-12 shadow-md hover:shadow-glow"
                            data-aos="fade-up" data-aos-delay="300">
                            <div
                                class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-6 shadow-[0_0_10px_rgba(255,255,255,0.2)]">
                                <img src="{{ asset('images/ICONS/NutritionICON.png') }}" class="w-9 h-9 object-contain"
                                    alt="Nutrition">
                            </div>
                            <h3 class="text-2xl font-heading font-bold text-white mb-4">Nutrition Guidance</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Receive personalized diet plans and expert nutritional advice to fuel your fitness journey.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-24 bg-brand-dark relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-white uppercase italic mb-4">
                    Choose Your <span class="text-brand-gold">Path</span>
                </h2>
                <div class="w-24 h-1 bg-brand-gold mx-auto shadow-glow"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="group relative bg-brand-gray p-8 rounded-2xl border border-brand-gold/10 hover:border-brand-gold transition-all duration-300 hover:-translate-y-2 overflow-hidden shadow-lg hover:shadow-glow"
                    data-aos="zoom-in" data-aos-delay="0">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-brand-gold/10 rounded-bl-full -mr-4 -mt-4 transition-all group-hover:bg-brand-gold/20">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-black rounded-full flex items-center justify-center border-2 border-brand-gold text-brand-gold mb-6 group-hover:scale-110 transition-transform shadow-[0_0_10px_rgba(212,175,55,0.2)]">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-heading font-bold text-white mb-3 uppercase">Online Coaching</h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            Full comprehensive plans tailored to your lifestyle. Training, nutrition, and weekly check-ins
                            to ensure rapid progress.
                        </p>
                        <a href="{{ route('protocol') }}"
                            class="inline-flex items-center text-brand-gold font-bold uppercase tracking-wide group-hover:translate-x-2 transition-transform">
                            Learn More <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group relative bg-brand-gray p-8 rounded-2xl border border-brand-gold/10 hover:border-brand-gold transition-all duration-300 hover:-translate-y-2 overflow-hidden shadow-lg hover:shadow-glow"
                    data-aos="zoom-in" data-aos-delay="100">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-brand-gold/10 rounded-bl-full -mr-4 -mt-4 transition-all group-hover:bg-brand-gold/20">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-black rounded-full flex items-center justify-center border-2 border-brand-gold text-brand-gold mb-6 group-hover:scale-110 transition-transform shadow-[0_0_10px_rgba(212,175,55,0.2)]">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-heading font-bold text-white mb-3 uppercase">Nutrition Plans</h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            Stop guessing. Get a calculated macronutrient strategy designed to fuel your workouts and burn
                            fat efficiently.
                        </p>
                        <a href="{{ route('protocol') }}"
                            class="inline-flex items-center text-brand-gold font-bold uppercase tracking-wide group-hover:translate-x-2 transition-transform">
                            Learn More <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group relative bg-brand-gray p-8 rounded-2xl border border-brand-gold/10 hover:border-brand-gold transition-all duration-300 hover:-translate-y-2 overflow-hidden shadow-lg hover:shadow-glow"
                    data-aos="zoom-in" data-aos-delay="200">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-brand-gold/10 rounded-bl-full -mr-4 -mt-4 transition-all group-hover:bg-brand-gold/20">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-black rounded-full flex items-center justify-center border-2 border-brand-gold text-brand-gold mb-6 group-hover:scale-110 transition-transform shadow-[0_0_10px_rgba(212,175,55,0.2)]">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-heading font-bold text-white mb-3 uppercase">Contest Prep</h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            Precision peaking for bodybuilders. We handle every variable so you step on stage with your best
                            package ever.
                        </p>
                        <a href="{{ route('protocol') }}"
                            class="inline-flex items-center text-brand-gold font-bold uppercase tracking-wide group-hover:translate-x-2 transition-transform">
                            Learn More <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Genius Nutrition Partner Section -->
    <section class="py-20 bg-[#0a0a0a] relative overflow-hidden border-y border-white/5" data-aos="fade-up">
        <div
            class="absolute inset-0 bg-[url('/images/ICONS/GeniusLogo.avif')] opacity-5 bg-center bg-no-repeat bg-contain blur-sm">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div
                class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-12 bg-gradient-to-r from-brand-gray/50 to-transparent p-6 md:p-10 rounded-3xl border border-white/5 backdrop-blur-sm">

                <!-- Logo & Title -->
                <div class="flex flex-col sm:flex-row items-center gap-6 md:gap-8 flex-shrink-0 text-center sm:text-left">
                    <div
                        class="w-32 h-32 md:w-40 md:h-40 bg-black/50 rounded-full flex items-center justify-center border-2 border-brand-gold/20 shadow-glow p-6 flex-shrink-0">
                        <img src="{{ asset('images/ICONS/GeniusLogo.avif') }}" alt="Genius Nutrition"
                            class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h3 class="text-brand-gold font-bold text-sm tracking-[0.2em] uppercase mb-2">Official Fuel Partner
                        </h3>
                        <h2 class="text-4xl md:text-5xl font-heading font-bold text-white italic uppercase leading-none">
                            Genius <br> <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-brand-gold to-yellow-500 pr-2">Nutrition</span>
                        </h2>
                    </div>
                </div>

                <!-- Dismiss/Action -->
                <div class="text-center lg:text-right w-full lg:w-auto max-w-2xl">
                    <p class="text-gray-400 text-lg mb-6 lg:ml-auto">
                        Fuel your ambition with premium supplements. Use my exclusive code for a discount on your order.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center gap-4 justify-center lg:justify-end w-full"
                        x-data="{ copied: false }">
                        <div class="group relative bg-black/80 border border-brand-gold rounded-xl px-6 py-4 flex items-center gap-4 cursor-pointer hover:bg-brand-gold/10 transition-all w-full sm:w-auto justify-between sm:justify-start"
                            @click="navigator.clipboard.writeText('TIBERIU12'); copied = true; setTimeout(() => copied = false, 2000)">
                            <div class="text-left flex-shrink-0">
                                <span class="block text-xs text-gray-500 uppercase tracking-wider">Discount Code</span>
                                <span
                                    class="block text-2xl font-mono font-bold text-brand-gold tracking-widest whitespace-nowrap">TIBERIU12</span>
                            </div>
                            <div class="h-10 w-px bg-white/10 mx-2 hidden sm:block"></div>
                            <div class="text-brand-gold flex-shrink-0">
                                <span x-show="!copied" class="font-bold text-base sm:text-xl whitespace-nowrap">12%
                                    OFF</span>
                                <span x-show="copied" class="text-sm font-bold text-green-500 whitespace-nowrap"
                                    x-transition>COPIED!</span>
                            </div>
                        </div>

                        <a href="https://geniusnutrition.ro" target="_blank"
                            class="bg-white text-black font-bold py-4 px-8 rounded-xl hover:bg-gray-200 transition-colors uppercase tracking-wide w-full sm:w-auto whitespace-nowrap">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet The Coach -->
    <section class="py-24 bg-black relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Image Side -->
                <div class="w-full lg:w-1/2 relative" data-aos="fade-right">
                    <div class="absolute -inset-4 bg-brand-gold/10 rounded-2xl transform -rotate-3 z-0"></div>
                    <div class="absolute -inset-4 bg-brand-gray/50 rounded-2xl transform rotate-3 z-0"></div>
                    <img src="/images/Gym/optimized/Dumbbell.jpeg" alt="Coach Tiberiu"
                        class="relative z-10 w-full rounded-2xl shadow-2xl grayscale hover:grayscale-0 transition-all duration-500 border border-white/10 object-cover object-[50%_25%]">
                </div>

                <!-- Text Side -->
                <div class="w-full lg:w-1/2" data-aos="fade-left">
                    <h2 class="text-brand-gold font-heading font-bold text-lg tracking-[0.2em] mb-2 uppercase">Head Coach
                    </h2>
                    <h3
                        class="text-5xl font-heading font-bold text-white uppercase italic mb-8 border-l-4 border-brand-gold pl-6">
                        Meet <span class="text-brand-gold">Tiberiu</span></h3>

                    <div class="space-y-6 text-gray-300 text-lg leading-relaxed">
                        <p>
                            My journey began at 14, in a small attic with nothing but a rusty barbell and a desire to feel
                            normal.
                            Today, that same drive fuels every plan I write. I don't just ask you to do it; I do it every
                            day.
                        </p>
                        <p>
                            My methodology combines old-school grit with modern exercise science. Whether your goal is to
                            step on stage or just dominate your life, the TNT Team system is built to push past your
                            perceived limits.
                        </p>
                    </div>

                    <div class="mt-10 grid grid-cols-2 gap-6">
                        <div class="border-l-4 border-brand-gold pl-4">
                            <span class="block text-white font-bold text-xl font-heading">NPC Competitor</span>
                            <span class="text-sm text-gray-500">Certified</span>
                        </div>
                        <div class="border-l-4 border-brand-gold pl-4">
                            <span class="block text-white font-bold text-xl font-heading">NUTRITION</span>
                            <span class="text-sm text-gray-500">Specialist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection