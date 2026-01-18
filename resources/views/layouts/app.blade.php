<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="overflow-x-hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Online Coaching & Fitness' }} | Tiberiu Tomoroga</title>
    <meta name="description"
        content="{{ $description ?? 'Transformă-ți corpul cu Tiberiu Tomoroga. Planuri de antrenament și nutriție 100% personalizate. Intră în echipa TNT.' }}">
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:site_name" content="TNT Team" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $title ?? 'Online Coaching & Fitness' }} | Tiberiu Tomoroga" />
    <meta property="og:description"
        content="{{ $description ?? 'Transformă-ți corpul cu Tiberiu Tomoroga. Planuri de antrenament și nutriție 100% personalizate. Intră în echipa TNT.' }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('images/Gym/optimized/IMG_3606.jpeg') }}" />
    <meta property="og:locale" content="ro_RO" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $title ?? 'Online Coaching & Fitness' }} | Tiberiu Tomoroga" />
    <meta name="twitter:description"
        content="{{ $description ?? 'Transformă-ți corpul cu Tiberiu Tomoroga. Planuri de antrenament și nutriție 100% personalizate. Intră în echipa TNT.' }}" />
    <meta name="twitter:image" content="{{ asset('images/Gym/optimized/IMG_3606.jpeg') }}" />

    <!-- JSON-LD Schema Graph -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@graph": [
            {
                "@@type": "Person",
                "@@id": "{{ url('/') }}#tiberiu",
                "name": "Tiberiu Tomoroga",
                "jobTitle": "Fitness Coach & Competitive Bodybuilder",
                "url": "{{ url('/') }}",
                "sameAs": [
                    "https://www.instagram.com/tiberiutomoroga", 
                    "https://www.facebook.com/tiberiu.tomoroga.1", 
                    "https://www.youtube.com/@TiberiuTomoroga",
                    "https://www.tiktok.com/@tomorogatiberiu",
                    "https://www.threads.net/@tomorogatiberiu"
                ],
                "worksFor": { "@@id": "{{ url('/') }}#organization" }
            },
            {
                "@@type": "SportsClub",
                "@@id": "{{ url('/') }}#organization",
                "name": "TNT Team",
                "url": "{{ url('/') }}",
                "logo": "{{ asset('images/ICONS/GeniusLogo.avif') }}",
                "areaServed": "Romania"
            },
            {
                "@@type": "WebSite",
                "@@id": "{{ url('/') }}#website",
                "name": "Tiberiu Tomoroga - TNT Team",
                "url": "{{ url('/') }}",
                "publisher": { "@@id": "{{ url('/') }}#tiberiu" }
            }
        ]
    }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;700&family=Oswald:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark: '#111111',
                            gray: '#1f1f1f',
                            gold: '#D4AF37', // Old School Metallic Gold
                            'gold-hover': '#C5A028',
                        }
                    },
                    fontFamily: {
                        sans: ['Barlow', 'sans-serif'],
                        heading: ['Oswald', 'sans-serif'],
                    },
                    boxShadow: {
                        'glow': '0 0 15px rgba(250, 204, 21, 0.3)',
                    },
                    animation: {
                        'slide-bg': 'slide-bg 15s linear infinite',
                    },
                    keyframes: {
                        'slide-bg': {
                            '0%': { backgroundPosition: '0 0' },
                            '100%': { backgroundPosition: '100% 0' },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        body {
            font-family: 'Barlow', sans-serif;
            background-color: #111111;
            color: #ffffff;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Oswald', sans-serif;
        }
    </style>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/FAVICONS/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/FAVICONS/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/FAVICONS/favicon-16x16.png">
    <link rel="manifest" href="/images/FAVICONS/site.webmanifest">
    <meta name="theme-color" content="#111111">
</head>

<body class="antialiased bg-[#111111] text-white overflow-x-hidden">
    @yield('content')

    <script>
        AOS.init({
            once: true,
            offset: 100,
            duration: 800,
            easing: 'ease-out-cubic',
        });
    </script>
</body>

</html>