<nav x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 'bg-black/90 backdrop-blur-xl !border-brand-gold/20 shadow-glow': scrolled, 'bg-transparent': !scrolled }"
    class="fixed top-0 left-0 w-full z-50 border-b border-transparent transition-all duration-300 ease-in-out">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="block transform transition-transform duration-300"
                    :class="{ 'scale-90': scrolled }">
                    <img src="{{ asset('images/ICONS/TNTTeamLOGO.png') }}" alt="TNT Team Logo" class="h-10 w-auto">
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}"
                    class="text-white hover:text-brand-gold transition-colors font-medium uppercase tracking-wide text-sm {{ request()->routeIs('home') ? 'text-brand-gold border-b-2 border-brand-gold' : '' }}">Home</a>
                <a href="{{ route('about') }}"
                    class="text-white hover:text-brand-gold transition-colors font-medium uppercase tracking-wide text-sm {{ request()->routeIs('about') ? 'text-brand-gold border-b-2 border-brand-gold' : '' }}">About</a>
                <a href="{{ route('transformations') }}"
                    class="text-white hover:text-brand-gold transition-colors font-medium uppercase tracking-wide text-sm {{ request()->routeIs('transformations') ? 'text-brand-gold border-b-2 border-brand-gold' : '' }}">Real
                    Results</a>
                <a href="{{ route('protocol') }}"
                    class="text-white hover:text-brand-gold transition-colors font-medium uppercase tracking-wide text-sm {{ request()->routeIs('protocol') ? 'text-brand-gold border-b-2 border-brand-gold' : '' }}">Training</a>
                <a href="{{ route('david') }}"
                    class="text-white hover:text-brand-gold transition-colors font-medium uppercase tracking-wide text-sm {{ request()->routeIs('david') ? 'text-brand-gold border-b-2 border-brand-gold' : '' }}">Stories</a>
                <a href="{{ route('contact') }}"
                    class="bg-brand-gold hover:bg-brand-gold-hover text-black font-bold py-2 px-6 rounded-full transition-all transform hover:scale-105 shadow-glow"
                    :class="{ 'py-1 px-5': scrolled }">
                    START NOW
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button @click="open = !open" class="text-white focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden bg-brand-dark/95 backdrop-blur-md absolute w-full left-0 shadow-xl">
        <div class="px-4 pt-2 pb-6 space-y-4">
            <a href="{{ route('home') }}"
                class="block text-white hover:text-brand-gold font-bold text-lg border-l-2 border-transparent hover:border-brand-gold pl-2 transition-all">HOME</a>
            <a href="{{ route('about') }}"
                class="block text-white hover:text-brand-gold font-bold text-lg border-l-2 border-transparent hover:border-brand-gold pl-2 transition-all">ABOUT</a>
            <a href="{{ route('transformations') }}"
                class="block text-white hover:text-brand-gold font-bold text-lg border-l-2 border-transparent hover:border-brand-gold pl-2 transition-all">REAL
                RESULTS</a>
            <a href="{{ route('protocol') }}"
                class="block text-white hover:text-brand-gold font-bold text-lg border-l-2 border-transparent hover:border-brand-gold pl-2 transition-all">TRAINING</a>
            <a href="{{ route('david') }}"
                class="block text-white hover:text-brand-gold font-bold text-lg border-l-2 border-transparent hover:border-brand-gold pl-2 transition-all">STORIES</a>
            <a href="{{ route('contact') }}"
                class="block w-full text-center bg-brand-gold hover:bg-brand-gold-hover text-black font-bold py-3 rounded-xl mt-4 shadow-lg transition-all">START
                NOW</a>
        </div>
    </div>
</nav>