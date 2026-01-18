@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <div class="min-h-screen pt-32 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16" data-aos="fade-down">
                <h1 class="text-5xl md:text-7xl font-heading font-bold text-white uppercase tracking-tighter mb-4">
                    Get In <span class="text-brand-gold">Touch</span>
                </h1>
                <p class="text-gray-400 text-xl font-medium tracking-wide max-w-2xl mx-auto">
                    Ready to start your transformation? Contact us today!
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24">
                <!-- Left Column: Contact Info -->
                <div class="space-y-12" data-aos="fade-right">
                    <div>
                        <h2 class="text-3xl font-heading font-bold text-white uppercase tracking-wide mb-6">Contact Info:
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
                        <h2 class="text-3xl font-heading font-bold text-white uppercase tracking-wide mb-6">Follow Us:</h2>
                        <div class="flex space-x-4">
                            <a href="https://www.youtube.com/@tomorogatiberiu" target="_blank"
                                class="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center text-white hover:bg-brand-gold hover:text-black hover:border-brand-gold transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                                </svg>
                            </a>
                            <a href="https://wa.me/40740790936" target="_blank"
                                class="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center text-white hover:bg-brand-gold hover:text-black hover:border-brand-gold transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/tomorogatiberiu?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                class="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center text-white hover:bg-brand-gold hover:text-black hover:border-brand-gold transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                            <a href="https://www.facebook.com/tiberiu.tomoroga.1" target="_blank"
                                class="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center text-white hover:bg-brand-gold hover:text-black hover:border-brand-gold transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <a href="https://www.tiktok.com/@tomorogatiberiu" target="_blank"
                                class="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center text-white hover:bg-brand-gold hover:text-black hover:border-brand-gold transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.49-3.35-3.98-5.6-1.11-5.09 2.78-9.87 7.74-9.3 1.95.22 3.65 1.25 4.82 2.94.34.49.58 1.07.72 1.66.12.52.23 1.06.23 1.61h-4.24c-.23-.66-.75-1.2-1.35-1.47-1.21-.55-2.72-.25-3.52.88-.69.97-.67 2.37.05 3.32.74 1.01 2.2 1.16 3.15.33.6-.52 1.03-1.22 1.25-1.99.16-.55.21-1.13.21-1.7V.02l-.03.01z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Interactive Map -->
                    <div class="mt-8 rounded-2xl overflow-hidden border border-white/10 h-64 relative group">
                        <div class="absolute inset-0 pointer-events-none z-10 mix-blend-overlay bg-brand-gold/10"></div>
                        <div class="absolute inset-0 pointer-events-none z-10 bg-black/30"></div>
                        <iframe
                            src="https://maps.google.com/maps?q=Revo+Fitness+Manastur+Cluj&t=&z=15&ie=UTF8&iwloc=&output=embed"
                            class="w-full h-full grayscale-[100%] invert-[90%] contrast-[85%] hover:grayscale-0 hover:invert-0 hover:contrast-100 transition-all duration-500"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <!-- Right Column: Contact Form -->
                <div class="bg-brand-gray p-8 md:p-10 rounded-2xl border border-white/5 shadow-2xl" data-aos="fade-left">
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