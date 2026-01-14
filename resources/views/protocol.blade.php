@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <div class="min-h-screen pt-32 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-20">
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
                <div class="relative z-10 text-center group">
                    <div
                        class="w-24 h-24 mx-auto bg-brand-dark border-2 border-brand-gold rounded-full flex items-center justify-center text-3xl font-bold text-brand-gold mb-6 shadow-[0_0_20px_rgba(250,204,21,0.2)] group-hover:scale-110 transition-transform duration-300">
                        1
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white uppercase mb-2">Assessment</h3>
                    <p class="text-gray-400">Deep dive into your lifestyle, history, and goals. We leave nothing to chance.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="relative z-10 text-center group">
                    <div
                        class="w-24 h-24 mx-auto bg-brand-dark border-2 border-brand-gold rounded-full flex items-center justify-center text-3xl font-bold text-brand-gold mb-6 shadow-[0_0_20px_rgba(250,204,21,0.2)] group-hover:scale-110 transition-transform duration-300">
                        2
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white uppercase mb-2">The Plan</h3>
                    <p class="text-gray-400">Custom nutrition & training protocols tailored specifically to your physiology.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="relative z-10 text-center group">
                    <div
                        class="w-24 h-24 mx-auto bg-brand-dark border-2 border-brand-gold rounded-full flex items-center justify-center text-3xl font-bold text-brand-gold mb-6 shadow-[0_0_20px_rgba(250,204,21,0.2)] group-hover:scale-110 transition-transform duration-300">
                        3
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white uppercase mb-2">Check-ins</h3>
                    <p class="text-gray-400">Weekly adjustments. We monitor data and tweak variables for constant progress.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="relative z-10 text-center group">
                    <div
                        class="w-24 h-24 mx-auto bg-brand-dark border-2 border-brand-gold rounded-full flex items-center justify-center text-3xl font-bold text-brand-gold mb-6 shadow-[0_0_20px_rgba(250,204,21,0.2)] group-hover:scale-110 transition-transform duration-300">
                        4
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white uppercase mb-2">Execution</h3>
                    <p class="text-gray-400">24/7 Support. You do the work, we provide the roadmap. Pure results.</p>
                </div>
            </div>

            <!-- Pricing / Packages -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">

                <!-- Silver -->
                <div class="bg-brand-gray/50 border border-white/5 rounded-2xl p-8 hover:border-white/20 transition-all">
                    <h3 class="text-2xl font-heading font-bold text-gray-300 uppercase mb-4">Silver</h3>
                    <div class="text-4xl font-bold text-white mb-6">€150<span
                            class="text-lg text-gray-500 font-normal">/mo</span></div>
                    <ul class="space-y-4 mb-8 text-gray-400">
                        <li class="flex items-center"><svg class="w-5 h-5 text-brand-gold mr-2" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Customized Training Plan</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-brand-gold mr-2" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Customized Meal Plan</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-brand-gold mr-2" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Bi-Weekly Check-ins</li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="block w-full text-center bg-white/10 hover:bg-white/20 text-white font-bold py-3 rounded-lg transition-all uppercase tracking-wider">Select
                        Plan</a>
                </div>

                <!-- Gold (Highlighted) -->
                <div
                    class="bg-gradient-to-b from-brand-gray to-black border-2 border-brand-gold rounded-2xl p-10 transform md:-translate-y-4 shadow-[0_0_30px_rgba(250,204,21,0.15)] relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 bg-brand-gold text-black text-xs font-bold px-3 py-1 uppercase tracking-widest">
                        Most Popular</div>
                    <h3 class="text-3xl font-heading font-bold text-brand-gold uppercase mb-4">Gold</h3>
                    <div class="text-5xl font-bold text-white mb-6">€250<span
                            class="text-xl text-gray-500 font-normal">/mo</span></div>
                    <ul class="space-y-4 mb-8 text-white font-medium">
                        <li class="flex items-center"><svg class="w-5 h-5 text-brand-gold mr-2" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Everything in Silver</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-brand-gold mr-2" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Weekly Check-ins</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-brand-gold mr-2" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Supplementation Protocol</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-brand-gold mr-2" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> 24/7 WhatsApp Support</li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="block w-full text-center bg-brand-gold hover:bg-brand-gold-hover text-black font-bold py-4 rounded-lg transition-all uppercase tracking-wider text-xl shadow-glow">Start
                        Transformation</a>
                </div>

                <!-- Competition -->
                <div class="bg-brand-gray/50 border border-white/5 rounded-2xl p-8 hover:border-white/20 transition-all">
                    <h3 class="text-2xl font-heading font-bold text-gray-300 uppercase mb-4">Prep</h3>
                    <div class="text-4xl font-bold text-white mb-6">€400<span
                            class="text-lg text-gray-500 font-normal">/mo</span></div>
                    <ul class="space-y-4 mb-8 text-gray-400">
                        <li class="flex items-center"><svg class="w-5 h-5 text-brand-gold mr-2" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Full Contest Prep</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-brand-gold mr-2" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Daily Check-ins (Peak Week)</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-brand-gold mr-2" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Posing Coaching</li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="block w-full text-center bg-white/10 hover:bg-white/20 text-white font-bold py-3 rounded-lg transition-all uppercase tracking-wider">Apply
                        Now</a>
                </div>

            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection