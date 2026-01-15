@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <div class="min-h-screen pt-32 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16">
                <h1 class="text-5xl md:text-7xl font-heading font-bold text-white uppercase tracking-tighter mb-4">
                    Get In <span class="text-brand-gold">Touch</span>
                </h1>
                <p class="text-gray-400 text-xl font-medium tracking-wide max-w-2xl mx-auto">
                    Ready to start your transformation? Contact us today.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24">
                <!-- Left Column: Contact Info -->
                <div class="space-y-12">
                    <div>
                        <h2 class="text-3xl font-heading font-bold text-white uppercase tracking-wide mb-6">Contact Info
                        </h2>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="bg-brand-gold/10 p-3 rounded-full text-brand-gold">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm uppercase tracking-wider">Email</p>
                                    <a href="mailto:contact@tnt-team.com"
                                        class="text-xl text-white font-bold hover:text-brand-gold transition-colors">tiberiu.tomoroga@yahoo.com</a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="bg-brand-gold/10 p-3 rounded-full text-brand-gold">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm uppercase tracking-wider">Phone</p>
                                    <a href="tel:+40700000000"
                                        class="text-xl text-white font-bold hover:text-brand-gold transition-colors">+40 740
                                        790 936</a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="bg-brand-gold/10 p-3 rounded-full text-brand-gold">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm uppercase tracking-wider">Location</p>
                                    <p class="text-xl text-white font-bold">Cluj-Napoca, Romania</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-3xl font-heading font-bold text-white uppercase tracking-wide mb-6">Follow Us</h2>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center text-white hover:bg-brand-gold hover:text-black hover:border-brand-gold transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/tomorogatiberiu?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                class="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center text-white hover:bg-brand-gold hover:text-black hover:border-brand-gold transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Contact Form -->
                <div class="bg-brand-gray p-8 md:p-10 rounded-2xl border border-white/5 shadow-2xl">
                    @if(session('success'))
                        <div class="bg-green-500/10 border border-green-500 text-green-500 px-4 py-3 rounded relative mb-6"
                            role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <form class="space-y-6" action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div>
                            <label for="name"
                                class="block text-sm font-medium text-gray-400 mb-2 uppercase tracking-wide">Full
                                Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full bg-gray-800 border-0 text-white p-4 rounded-lg focus:ring-2 focus:ring-brand-gold transition-all placeholder-gray-600"
                                placeholder="Your Name">
                        </div>
                        <div>
                            <label for="email"
                                class="block text-sm font-medium text-gray-400 mb-2 uppercase tracking-wide">Email
                                Address</label>
                            <input type="email" id="email" name="email" required
                                class="w-full bg-gray-800 border-0 text-white p-4 rounded-lg focus:ring-2 focus:ring-brand-gold transition-all placeholder-gray-600"
                                placeholder="youradress@email.com">
                        </div>
                        <div>
                            <label for="goal"
                                class="block text-sm font-medium text-gray-400 mb-2 uppercase tracking-wide">Primary
                                Goal</label>
                            <div class="relative">
                                <select id="goal" name="goal" required
                                    class="w-full bg-gray-800 border-0 text-white p-4 rounded-lg focus:ring-2 focus:ring-brand-gold transition-all appearance-none cursor-pointer">
                                    <option value="Weight Loss">Weight Loss</option>
                                    <option value="Muscle Gain">Muscle Gain</option>
                                    <option value="Contest Prep">Contest Prep</option>
                                    <option value="General Fitness">General Fitness</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-brand-gold">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="message"
                                class="block text-sm font-medium text-gray-400 mb-2 uppercase tracking-wide">Message</label>
                            <textarea id="message" name="message" rows="4" required
                                class="w-full bg-gray-800 border-0 text-white p-4 rounded-lg focus:ring-2 focus:ring-brand-gold transition-all placeholder-gray-600"
                                placeholder="Tell us about yourself..."></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-brand-gold hover:bg-brand-gold-hover text-black font-bold py-4 rounded-lg uppercase tracking-widest text-lg transition-all transform hover:scale-[1.02] shadow-glow">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection