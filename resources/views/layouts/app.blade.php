<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TNT Team | Tiberiu Tomoroga</title>

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
</head>

<body class="antialiased bg-brand-dark text-white overflow-x-hidden">
    @yield('content')
</body>

</html>