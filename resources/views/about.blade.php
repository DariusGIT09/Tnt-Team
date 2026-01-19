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
                                                        '/images/Gym/optimized/IMG_8704.webp', 
                                                        '/images/Gym/optimized/IMG_3608.webp', 
                                                        '/images/Gym/optimized/IMG_8718.webp'
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
                        My Story</h2>
                    <p class="text-gray-400 text-lg leading-relaxed mb-6">
                        My journey began at the age of 14. Not in a modern gym, not with expensive equipment, but in the
                        attic of my family home, in the countryside, using only a bench, a barbell, and a few dumbbells.
                    </p>
                    <p class="text-gray-400 text-lg leading-relaxed mb-6">
                        I started for one simple but deeply personal reason: I didn't feel comfortable in my own body. I was
                        extremely skinny, below any physical standard, and I wanted just one thing — to feel normal.
                    </p>
                    <p class="text-gray-400 text-lg leading-relaxed">
                        At that time, information was very limited. One athlete who motivated me deeply from the beginning
                        was Kai Greene — not only because of his physique, but because of his mindset.
                    </p>
                </div>
                <div class="w-full md:w-1/2 order-1 md:order-2" data-aos="fade-left">
                    <div x-data="{
                                                                activeCard: 0,
                                                                cards: [
                                                                    '/images/Gym/optimized/TiberiuInceput1.webp',
                                                                    '/images/Gym/optimized/TiberiuInceput2.webp',
                                                                    '/images/Gym/optimized/TiberiuInceput3.webp'
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
                                                                '/images/Gym/optimized/IMG_0050.webp',
                                                                '/images/Gym/optimized/IMG_0051.webp',
                                                                '/images/Gym/optimized/IMG_0176.webp'
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
                        Me as a Personal Trainer</h2>
                    <p class="text-gray-400 text-lg leading-relaxed mb-6 text-right">
                        My journey as a coach started naturally. Even before becoming certified, I was already helping
                        friends and people around me in the gym. Their results showed me that I could do this at a
                        professional level.
                        At 19, I earned my certification and have now been coaching for over 5 years.
                    </p>
                    <p class="text-gray-400 text-lg leading-relaxed text-right mb-6">
                        Working with more than 200 clients, including lifestyle clients (fat loss, muscle gain), performance
                        athletes, and beginners to advanced trainees.
                    </p>
                    <p class="text-gray-400 text-lg leading-relaxed text-right font-medium text-white">
                        One thing is certain: there has never been a client who achieved no results, even in short-term
                        collaborations. And those who stayed consistent long-term achieved truly impressive transformations.
                    </p>
                </div>
            </div>

            <!-- Row 3: The Stage (Text Left, Image Right) -->
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2 order-2 md:order-1" data-aos="fade-right">
                    <h2
                        class="text-3xl md:text-4xl font-heading font-bold text-white mb-6 uppercase border-l-4 border-brand-gold pl-4">
                        What Sets Me Apart</h2>
                    <ul class="text-gray-400 text-lg leading-relaxed mb-6 space-y-2">
                        <li class="flex items-center"><span class="text-brand-gold mr-3">✓</span> I tell people the truth,
                            even when it's uncomfortable</li>
                        <li class="flex items-center"><span class="text-brand-gold mr-3">✓</span> I don't sell lies or false
                            promises</li>
                        <li class="flex items-center"><span class="text-brand-gold mr-3">✓</span> I don't use cheap
                            marketing tricks</li>
                    </ul>
                    <p class="text-gray-400 text-lg leading-relaxed">
                        I promote real, sustainable, and healthy results, built on: structured nutrition plans, intelligent
                        personalized training, proper recovery, consistency, and respect for the process.
                    </p>
                    <p class="text-gray-400 text-lg leading-relaxed mt-4 italic">
                        I firmly believe that the most valuable results never come overnight, and the satisfaction is far
                        greater when you know you earned them.
                    </p>
                </div>
                <div class="w-full md:w-1/2 order-1 md:order-2" data-aos="fade-left">
                    <div x-data="{
                                                                activeCard: 0,
                                                                cards: [
                                                                    '/images/Gym/optimized/IMG_8705.webp',
                                                                    '/images/Gym/optimized/IMG_8703.webp',
                                                                    '/images/Gym/optimized/IMG_8706.webp'
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
                    <img src="/images/Gym/optimized/IMG_8706.webp" alt="Gym Life 1"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <!-- Image 2 -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="100">
                    <img src="/images/Gym/optimized/IMG_8711.webp" alt="Gym Life 2"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <!-- Image 3 -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="200">
                    <img src="/images/Gym/optimized/IMG_1077.webp" alt="Gym Life 3"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <!-- Image 4 -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="0">
                    <img src="/images/Gym/optimized/IMG_0318.webp" alt="Gym Life 4"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <!-- Image 5 -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="100">
                    <img src="/images/Gym/optimized/IMG_9842.webp" alt="Gym Life 5"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <!-- Image 6 -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="200">
                    <img src="/images/Gym/optimized/IMG_0045.webp" alt="Gym Life 6"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <!-- Image 7 (New) -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="0">
                    <img src="/images/Gym/optimized/IMG_8712.webp" alt="Gym Life 7"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <!-- Image 8 (New) -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="100">
                    <img src="/images/Gym/optimized/IMG_8713.webp" alt="Gym Life 8"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700 ease-in-out">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <!-- Image 9 (New) -->
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl border border-white/5 group" data-aos="zoom-in"
                    data-aos-delay="200">
                    <img src="/images/Gym/optimized/IMG_8714.webp" alt="Gym Life 9"
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
                    "Nothing is Impossible. Your mindset is the key. <br>
                    <span class="text-brand-gold">Results come when you truly want them.</span>"
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