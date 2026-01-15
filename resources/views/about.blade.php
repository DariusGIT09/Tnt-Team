@extends('layouts.app')

@section('content')

    @include('partials.navbar')

    <!-- Hero Section -->
    <section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
        <!-- Background Image with Dark Overlay -->
        <!-- Background Image Slider -->
        <div x-data="{ 
                                        activeSlide: 0, 
                                        slides: [
                                            '/images/Gym/optimized/IMG_8704.jpeg', 
                                            '/images/Gym/optimized/IMG_3608.jpeg', 
                                            '/images/Gym/optimized/IMG_8718.jpeg'
                                        ],
                                        timer: null
                                    }"
            x-init="timer = setInterval(() => { activeSlide = activeSlide === slides.length - 1 ? 0 : activeSlide + 1 }, 5000)"
            class="absolute inset-0 z-0">

            <template x-for="(slide, index) in slides" :key="index">
                <div x-show="activeSlide === index" x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="opacity-0 transform scale-105"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-1000"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-105" class="absolute inset-0">
                    <img :src="slide" alt="Hero Background" class="w-full h-full object-cover object-[50%_25%]">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/60 to-brand-dark"></div>
                </div>
            </template>
        </div>

        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto mt-10">
            <h1 class="text-5xl md:text-7xl font-heading font-bold text-white uppercase leading-none tracking-tighter mb-4 drop-shadow-lg"
                data-aos="fade-down">
                Built, Not <span class="text-brand-gold">Born.</span>
            </h1>
            <p class="text-gray-300 text-xl font-medium tracking-wide" data-aos="fade-up" data-aos-delay="200">
                The story behind Tiberiu Tomoroga and TNT Team.
            </p>
        </div>
    </section>

    <!-- The Journey (Zig-Zag) -->
    <section class="py-24 bg-brand-dark overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24">

            <!-- Row 1: The Beginning (Text Left, Image Right) -->
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2 order-2 md:order-1" data-aos="fade-right">
                    <h2
                        class="text-3xl md:text-4xl font-heading font-bold text-white mb-6 uppercase border-l-4 border-brand-gold pl-4">
                        The Beginning</h2>
                    <p class="text-gray-400 text-lg leading-relaxed mb-6">
                        Every legacy starts with a decision. My journey into the world of fitness wasn't accidental; it was
                        forged through early mornings, late nights, and an unyielding desire to change.
                    </p>
                    <p class="text-gray-400 text-lg leading-relaxed">
                        It started in a small gym with basic equipment but unlimited ambition. I learned that iron doesn't
                        lie—you get out exactly what you put in.
                    </p>
                </div>
                <div class="w-full md:w-1/2 order-1 md:order-2" data-aos="fade-left">
                    <div x-data="{
                                                    activeCard: 0,
                                                    cards: [
                                                        '/images/Gym/optimized/IMG_0041.jpeg',
                                                        '/images/Gym/optimized/IMG_0047.jpeg',
                                                        '/images/Gym/optimized/IMG_0049.jpeg'
                                                    ],
                                                    next() {
                                                        this.activeCard = this.activeCard === this.cards.length - 1 ? 0 : this.activeCard + 1;
                                                    }
                                                }" x-init="setInterval(() => next(), 3000)"
                        class="relative h-[450px] w-full max-w-md mx-auto group cursor-pointer" @click="next()">

                        <template x-for="(card, index) in cards" :key="index">
                            <div x-show="true" class="absolute inset-0 transition-all duration-700 ease-out" :class="{
                                                            'z-30 opacity-100 translate-x-0 translate-y-0 scale-100': activeCard === index,
                                                            'z-20 opacity-40 translate-x-4 translate-y-4 scale-95 rotate-3': activeCard !== index && (index === (activeCard + 1) % cards.length),
                                                            'z-10 opacity-0 translate-x-8 translate-y-8 scale-90 rotate-6': activeCard !== index && (index !== (activeCard + 1) % cards.length)
                                                         }">
                                <div class="absolute -inset-2 bg-brand-gold/20 rounded-2xl blur-lg transition-all duration-300"
                                    :class="activeCard === index ? 'opacity-100' : 'opacity-0'"></div>
                                <img :src="card" alt="The Beginning"
                                    class="relative rounded-2xl w-full h-full shadow-[0_0_15px_rgba(212,175,55,0.3)] border border-brand-gold/20 grayscale transition-all duration-500 transform object-cover object-[50%_15%]"
                                    :class="activeCard === index ? 'grayscale-0' : 'grayscale'">
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <!-- Row 2: The Grind (Image Left, Text Right) -->
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2 order-1" data-aos="fade-right">
                    <div x-data="{
                                                activeCard: 0,
                                                cards: [
                                                    '/images/Gym/optimized/IMG_0050.jpeg',
                                                    '/images/Gym/optimized/IMG_0051.jpeg',
                                                    '/images/Gym/optimized/IMG_0176.jpeg'
                                                ],
                                                next() {
                                                    this.activeCard = this.activeCard === this.cards.length - 1 ? 0 : this.activeCard + 1;
                                                }
                                            }" x-init="setInterval(() => next(), 3500)"
                        class="relative h-[450px] w-full max-w-md mx-auto group cursor-pointer" @click="next()">

                        <template x-for="(card, index) in cards" :key="index">
                            <div x-show="true" class="absolute inset-0 transition-all duration-700 ease-out" :class="{
                                                        'z-30 opacity-100 translate-x-0 translate-y-0 scale-100': activeCard === index,
                                                        'z-20 opacity-40 -translate-x-4 translate-y-4 scale-95 -rotate-3': activeCard !== index && (index === (activeCard + 1) % cards.length),
                                                        'z-10 opacity-0 -translate-x-8 translate-y-8 scale-90 -rotate-6': activeCard !== index && (index !== (activeCard + 1) % cards.length)
                                                     }">
                                <div class="absolute -inset-2 bg-brand-gold/20 rounded-2xl blur-lg transition-all duration-300"
                                    :class="activeCard === index ? 'opacity-100' : 'opacity-0'"></div>
                                <img :src="card" alt="The Grind"
                                    class="relative rounded-2xl w-full h-full shadow-[0_0_15px_rgba(212,175,55,0.3)] border border-brand-gold/20 grayscale transition-all duration-500 transform object-cover object-[50%_25%]"
                                    :class="activeCard === index ? 'grayscale-0' : 'grayscale'">
                            </div>
                        </template>
                    </div>
                </div>
                <div class="w-full md:w-1/2 order-2" data-aos="fade-left">
                    <h2
                        class="text-3xl md:text-4xl font-heading font-bold text-white mb-6 uppercase border-r-4 border-brand-gold pr-4 text-right">
                        The Grind</h2>
                    <p class="text-gray-400 text-lg leading-relaxed mb-6 text-right">
                        Talent is cheap. Discipline is expensive. The grind isn't about the highlight reel; it's about the
                        meals eaten when you're not hungry, the sets done when you're exhausted, and the sacrifices made
                        when no one is watching.
                    </p>
                    <p class="text-gray-400 text-lg leading-relaxed text-right">
                        Years of dialing in nutrition and training methodology have taught me one thing: consistency trumps
                        intensity, every single time.
                    </p>
                </div>
            </div>

            <!-- Row 3: The Stage (Text Left, Image Right) -->
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2 order-2 md:order-1" data-aos="fade-right">
                    <h2
                        class="text-3xl md:text-4xl font-heading font-bold text-white mb-6 uppercase border-l-4 border-brand-gold pl-4">
                        The Stage</h2>
                    <p class="text-gray-400 text-lg leading-relaxed mb-6">
                        Stepping on stage is the culmination of thousands of hours of work. It’s the ultimate test of
                        willpower and physical mastery.
                    </p>
                    <p class="text-gray-400 text-lg leading-relaxed">
                        I bring this same level of competitive excellence to my coaching. I know what it takes to peak, to
                        shred, and to win—and I apply these elite standards to every client I work with.
                    </p>
                </div>
                <div class="w-full md:w-1/2 order-1 md:order-2" data-aos="fade-left">
                    <div x-data="{
                                                    activeCard: 0,
                                                    cards: [
                                                        '/images/Gym/optimized/IMG_8705.jpeg',
                                                        '/images/Gym/optimized/IMG_8703.jpeg',
                                                        '/images/Gym/optimized/IMG_8706.jpeg'
                                                    ],
                                                    next() {
                                                        this.activeCard = this.activeCard === this.cards.length - 1 ? 0 : this.activeCard + 1;
                                                    }
                                                }" x-init="setInterval(() => next(), 4000)"
                        class="relative h-[450px] w-full max-w-md mx-auto group cursor-pointer" @click="next()">

                        <template x-for="(card, index) in cards" :key="index">
                            <div x-show="true" class="absolute inset-0 transition-all duration-700 ease-out" :class="{
                                                            'z-30 opacity-100 translate-x-0 translate-y-0 scale-100': activeCard === index,
                                                            'z-20 opacity-40 translate-x-4 translate-y-4 scale-95 rotate-3': activeCard !== index && (index === (activeCard + 1) % cards.length),
                                                            'z-10 opacity-0 translate-x-8 translate-y-8 scale-90 rotate-6': activeCard !== index && (index !== (activeCard + 1) % cards.length)
                                                         }">
                                <div class="absolute -inset-2 bg-brand-gold/20 rounded-2xl blur-lg transition-all duration-300"
                                    :class="activeCard === index ? 'opacity-100' : 'opacity-0'"></div>
                                <img :src="card" alt="The Stage"
                                    class="relative rounded-2xl w-full h-full shadow-[0_0_15px_rgba(212,175,55,0.3)] border border-brand-gold/20 grayscale transition-all duration-500 transform object-cover object-[50%_25%]"
                                    :class="activeCard === index ? 'grayscale-0' : 'grayscale'">
                            </div>
                        </template>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Life in Iron - Photo Gallery -->
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-5xl font-heading font-bold text-center text-white mb-16 uppercase">
                Passion in <span class="text-brand-gold">Frames</span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Image 1 -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="0">
                    <img src="/images/Gym/optimized/IMG_8706.jpeg" alt="Gym Life 1"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <!-- Image 2 -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="100">
                    <img src="/images/Gym/optimized/IMG_8711.jpeg" alt="Gym Life 2"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <!-- Image 3 -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="200">
                    <img src="/images/Gym/optimized/IMG_1077.jpeg" alt="Gym Life 3"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <!-- Image 4 -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="0">
                    <img src="/images/Gym/optimized/IMG_0318.jpeg" alt="Gym Life 4"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <!-- Image 5 -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="100">
                    <img src="/images/Gym/optimized/IMG_9842.jpeg" alt="Gym Life 5"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <!-- Image 6 -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="200">
                    <img src="/images/Gym/optimized/IMG_0045.jpeg" alt="Gym Life 6"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <!-- Image 7 (New) -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="0">
                    <img src="/images/Gym/optimized/IMG_8712.jpeg" alt="Gym Life 7"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <!-- Image 8 (New) -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="100">
                    <img src="/images/Gym/optimized/IMG_8713.jpeg" alt="Gym Life 8"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <!-- Image 9 (New) -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="200">
                    <img src="/images/Gym/optimized/IMG_8714.jpeg" alt="Gym Life 9"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Coach Philosophy -->
    <section class="py-24 bg-brand-dark/50 flex items-center justify-center relative">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/dark-matter.png')] opacity-50">
        </div>
        <div class="max-w-4xl mx-auto px-6 relative z-10" data-aos="zoom-in">
            <div class="border-l-4 border-brand-gold pl-8 md:pl-12 py-4">
                <h3 class="text-3xl md:text-5xl font-heading font-bold text-white italic leading-tight mb-6">
                    "I don't just ask you to do it. I've been there. I do it <span class="text-brand-gold">every
                        day.</span>"
                </h3>
                <p class="text-gray-400 text-lg uppercase tracking-widest font-bold">
                    - Tiberiu Tomoroga
                </p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-brand-gold relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h2 class="text-4xl md:text-6xl font-heading font-bold text-black uppercase mb-8 leading-none">
                Ready to write<br>your own story?
            </h2>
            <a href="#"
                class="inline-block bg-black hover:bg-gray-900 text-brand-gold font-bold py-4 px-12 rounded-full text-xl shadow-2xl transition-transform hover:scale-105 border-2 border-transparent hover:border-black">
                JOIN THE TEAM
            </a>
        </div>
    </section>

    @include('partials.footer')
@endsection