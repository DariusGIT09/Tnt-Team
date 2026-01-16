@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <div class="min-h-screen pt-32 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-20" data-aos="fade-down">
                <h1 class="text-5xl md:text-8xl font-heading font-bold text-white uppercase tracking-tighter mb-4">
                    How We <span class="text-brand-gold">Win</span>.
                </h1>
                <p class="text-gray-400 text-xl font-medium tracking-wide max-w-2xl mx-auto">
                    The TNT Method. Built on science, executed with precision.
                </p>
            </div>

            <!-- The Process (Timeline) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-32 relative">
                <!-- Connecting Line (Desktop) -->
                <div
                    class="hidden lg:block absolute top-12 left-0 w-full h-0.5 bg-gradient-to-r from-transparent via-brand-gold/30 to-transparent z-0">
                </div>

                <!-- Step 1 -->
                <div class="relative z-10 text-center group" data-aos="fade-up" data-aos-delay="0">
                    <div
                        class="w-24 h-24 mx-auto bg-brand-dark border-2 border-brand-gold rounded-full flex items-center justify-center text-3xl font-bold text-brand-gold mb-6 shadow-[0_0_20px_rgba(250,204,21,0.2)] group-hover:scale-110 transition-transform duration-300">
                        1
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white uppercase mb-2">Assessment</h3>
                    <p class="text-gray-400">Deep dive into your lifestyle, history, and goals. We leave nothing to chance.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="relative z-10 text-center group" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-24 h-24 mx-auto bg-brand-dark border-2 border-brand-gold rounded-full flex items-center justify-center text-3xl font-bold text-brand-gold mb-6 shadow-[0_0_20px_rgba(250,204,21,0.2)] group-hover:scale-110 transition-transform duration-300">
                        2
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white uppercase mb-2">The Plan</h3>
                    <p class="text-gray-400">Custom nutrition & training protocols tailored specifically to your physiology.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="relative z-10 text-center group" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-24 h-24 mx-auto bg-brand-dark border-2 border-brand-gold rounded-full flex items-center justify-center text-3xl font-bold text-brand-gold mb-6 shadow-[0_0_20px_rgba(250,204,21,0.2)] group-hover:scale-110 transition-transform duration-300">
                        3
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white uppercase mb-2">Check-ins</h3>
                    <p class="text-gray-400">Weekly adjustments. We monitor data and tweak variables for constant progress.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="relative z-10 text-center group" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-24 h-24 mx-auto bg-brand-dark border-2 border-brand-gold rounded-full flex items-center justify-center text-3xl font-bold text-brand-gold mb-6 shadow-[0_0_20px_rgba(250,204,21,0.2)] group-hover:scale-110 transition-transform duration-300">
                        4
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white uppercase mb-2">Execution</h3>
                    <p class="text-gray-400">24/7 Support. You do the work, we provide the roadmap. Pure results.</p>
                </div>
            </div>

            <!-- Pricing / Packages -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch">

                <!-- Group 12 -->
                <div class="bg-brand-gray/50 border border-white/5 rounded-2xl p-6 hover:border-brand-gold/30 transition-all h-full flex flex-col hover:-translate-y-2 duration-300"
                    data-aos="fade-up" data-aos-delay="0">
                    <h3 class="text-xl font-heading font-bold text-gray-300 uppercase mb-2">Group Training</h3>
                    <div class="text-sm text-brand-gold uppercase tracking-wider mb-4 font-bold">12 Sessions</div>
                    <div class="text-4xl font-bold text-white mb-6">450 <span
                            class="text-lg text-gray-500 font-normal">LEI</span></div>

                    <ul class="space-y-3 mb-8 text-gray-400 text-sm flex-grow">
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Constant Monitoring</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> WhatsApp Group Access</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> 12 Group Sessions</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Custom Nutrition Plan</li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="block w-full text-center bg-white/10 hover:bg-white/20 text-white font-bold py-3 rounded-lg transition-all uppercase tracking-wider">Select
                        Plan</a>
                </div>

                <!-- Group 16 -->
                <div class="bg-brand-gray/50 border border-white/5 rounded-2xl p-6 hover:border-brand-gold/30 transition-all h-full flex flex-col hover:-translate-y-2 duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-heading font-bold text-gray-300 uppercase mb-2">Group Training</h3>
                    <div class="text-sm text-brand-gold uppercase tracking-wider mb-4 font-bold">16 Sessions</div>
                    <div class="text-4xl font-bold text-white mb-6">550 <span
                            class="text-lg text-gray-500 font-normal">LEI</span></div>

                    <ul class="space-y-3 mb-8 text-gray-400 text-sm flex-grow">
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Constant Monitoring</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> WhatsApp Group Access</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> 16 Group Sessions</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Custom Nutrition Plan</li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="block w-full text-center bg-white/10 hover:bg-white/20 text-white font-bold py-3 rounded-lg transition-all uppercase tracking-wider">Select
                        Plan</a>
                </div>

                <!-- Online Coaching -->
                <div class="bg-brand-gray/50 border border-white/5 rounded-2xl p-6 hover:border-brand-gold/30 transition-all h-full flex flex-col hover:-translate-y-2 duration-300 relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-xl font-heading font-bold text-white uppercase mb-2">Online Coaching</h3>
                    <div class="text-sm text-brand-gold uppercase tracking-wider mb-4 font-bold">Monthly Plan</div>
                    <div class="text-4xl font-bold text-white mb-6">400 <span
                            class="text-lg text-gray-500 font-normal">LEI</span></div>

                    <ul class="space-y-3 mb-8 text-gray-400 text-sm flex-grow">
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Constant Monitoring</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> WhatsApp Group Access</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Custom Nutrition Plan</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Custom Training Plan</li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="block w-full text-center bg-brand-gold hover:bg-brand-gold-hover text-black font-bold py-3 rounded-lg transition-all uppercase tracking-wider shadow-glow">Start
                        Now</a>
                </div>

                <!-- 1 on 1 -->
                <div class="bg-gradient-to-b from-brand-gray to-black border-2 border-brand-gold rounded-2xl p-6 transform shadow-[0_0_30px_rgba(250,204,21,0.15)] relative overflow-hidden h-full flex flex-col hover:-translate-y-2 duration-300"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="absolute top-0 right-0 bg-brand-gold text-black text-[10px] font-bold px-3 py-1 uppercase tracking-widest">
                        Premium</div>
                    <h3 class="text-2xl font-heading font-bold text-brand-gold uppercase mb-2">1 on 1</h3>
                    <div class="text-sm text-white uppercase tracking-wider mb-4 font-bold">VIP Coaching</div>
                    <div class="text-4xl font-bold text-white mb-6">1159 <span
                            class="text-lg text-gray-500 font-normal">LEI</span></div>

                    <ul class="space-y-3 mb-8 text-white font-medium text-sm flex-grow">
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Constant Monitoring</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> WhatsApp Group Access</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Fully Personalized Plan</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Direct Coach Access</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Supplementation Guide</li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="block w-full text-center bg-brand-gold hover:bg-brand-gold-hover text-black font-bold py-4 rounded-lg transition-all uppercase tracking-wider shadow-glow">Apply
                        Now</a>
                </div>

                <!-- Training Plan (New) -->
                <div class="bg-brand-gray/50 border border-white/5 rounded-2xl p-6 hover:border-brand-gold/30 transition-all h-full flex flex-col hover:-translate-y-2 duration-300"
                    data-aos="fade-up" data-aos-delay="400">
                    <h3 class="text-xl font-heading font-bold text-gray-300 uppercase mb-2">Training Plan</h3>
                    <div class="text-sm text-brand-gold uppercase tracking-wider mb-4 font-bold">Individual Variant</div>
                    <div class="text-4xl font-bold text-white mb-6">250 <span
                            class="text-lg text-gray-500 font-normal">LEI</span></div>

                    <ul class="space-y-3 mb-8 text-gray-400 text-sm flex-grow">
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Custom Individual Plan</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Tailored to Goals</li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="block w-full text-center bg-white/10 hover:bg-white/20 text-white font-bold py-3 rounded-lg transition-all uppercase tracking-wider">Select
                        Plan</a>
                </div>

                <!-- Nutrition Plan (New) -->
                <div class="bg-brand-gray/50 border border-white/5 rounded-2xl p-6 hover:border-brand-gold/30 transition-all h-full flex flex-col hover:-translate-y-2 duration-300"
                    data-aos="fade-up" data-aos-delay="500">
                    <h3 class="text-xl font-heading font-bold text-gray-300 uppercase mb-2">Nutrition Plan</h3>
                    <div class="text-sm text-brand-gold uppercase tracking-wider mb-4 font-bold">Individual Variant</div>
                    <div class="text-4xl font-bold text-white mb-6">250 <span
                            class="text-lg text-gray-500 font-normal">LEI</span></div>

                    <ul class="space-y-3 mb-8 text-gray-400 text-sm flex-grow">
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Custom Macros & Meal Plan</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Tailored for Metabolism</li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="block w-full text-center bg-white/10 hover:bg-white/20 text-white font-bold py-3 rounded-lg transition-all uppercase tracking-wider">Select
                        Plan</a>
                </div>

                <!-- Posing Session (New) -->
                <div class="bg-brand-gray/50 border border-white/5 rounded-2xl p-6 hover:border-brand-gold/30 transition-all h-full flex flex-col hover:-translate-y-2 duration-300"
                    data-aos="fade-up" data-aos-delay="600">
                    <h3 class="text-xl font-heading font-bold text-gray-300 uppercase mb-2">Posing Session</h3>
                    <div class="text-sm text-brand-gold uppercase tracking-wider mb-4 font-bold">Stage Coaching</div>
                    <div class="text-4xl font-bold text-white mb-6">150 <span
                            class="text-lg text-gray-500 font-normal">LEI</span></div>

                    <ul class="space-y-3 mb-8 text-gray-400 text-sm flex-grow">
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Compulsory Poses</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-brand-gold mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Classic Physique / Bodybuilding / Men's Physique</li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="block w-full text-center bg-white/10 hover:bg-white/20 text-white font-bold py-3 rounded-lg transition-all uppercase tracking-wider">Select
                        Plan</a>
                </div>

            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection