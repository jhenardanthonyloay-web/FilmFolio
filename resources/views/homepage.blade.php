<!DOCTYPE html>
<html lang="en" class="bg-[#121318]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FilmFolio - Track films you've watched</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}?v={{ time() }}">
</head>
<body class="bg-[#121318] text-white min-h-screen flex flex-col font-sans">

    <!-- TOP NAVIGATION BAR -->
    <header class="border-b border-[#241338] bg-[#0b0512]/90 px-8 py-4 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            
            <!-- TEMPORARY LOGO (Pareho sa Films at Lists page) -->
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-[#a855f7] to-[#ec4899] flex items-center justify-center text-white font-bold text-lg shadow-md shadow-purple-900/40">
                    F
                </div>
                <span class="font-serif-title text-2xl font-bold text-white tracking-tight">FilmFolio</span>
            </a>

            <!-- Nav Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-[#b0a1ca]">
                <a href="/home" class="text-white font-bold relative py-1">Home <span class="absolute bottom-0 left-0 w-full h-[2.5px] bg-[#a855f7] rounded-full"></span></a>
                <a href="/films" class="hover:text-white transition-colors">Films</a>
                <a href="/lists" class="hover:text-white transition-colors">Lists</a>
                <a href="/members" class="hover:text-white transition-colors">Members</a>
                <a href="/journal" class="hover:text-white transition-colors">Journal</a>
            </nav>  

            <!-- Search & Auth Buttons -->
            <div class="flex items-center gap-6">
                <div class="relative hidden sm:block">
                    <input type="text" placeholder="Search..." class="w-40 lg:w-48 bg-[#120820] text-xs text-white rounded-full py-1.5 pl-8 pr-3 focus:outline-none border border-[#241338]">
                    <svg class="w-3.5 h-3.5 text-[#b0a1ca] absolute left-2.5 top-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>

                <a href="{{ route('login') }}" class="text-sm font-medium text-[#b0a1ca] hover:text-white transition-colors">Login</a>
                <a href="{{ route('register') }}" class="text-sm font-semibold bg-[#a855f7] hover:bg-[#9333ea] text-white px-6 py-2 rounded-full transition-all shadow-lg shadow-purple-900/40">Register</a>
            </div>
        </div>
    </header>

    <!-- HERO SECTION WITH SMOOTH FADE -->
    <section 
        class="py-24 px-4 text-center bg-cover bg-center bg-no-repeat relative"
        style="background-image: linear-gradient(to bottom, rgba(18, 19, 24, 0.4) 0%, rgba(18, 19, 24, 0.8) 70%, #121318 100%), url('/images/cinema-bg.jpg');"
    >
        <div class="max-w-3xl mx-auto space-y-6 relative z-10">
            <h1 class="text-3xl md:text-5xl font-serif leading-tight text-white font-bold drop-shadow-md">
                Track films you’ve watched.<br>
                Save those you want to see.<br>
                Tell your friends what’s good.
            </h1>

            <div class="pt-10">
                <a href="#" class="inline-block bg-[#00a2ed] hover:bg-[#008ccb] text-white font-bold px-6 py-3 rounded text-sm transition shadow-md font-sans">
                    Get Started - it’s free!
                </a>
            </div>

            <p class="text-xs md:text-sm text-gray-300 pt-2 font-sans">
                The social network for film lovers. Also available on iOS and Android.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT CONTAINER -->
    <main class="max-w-6xl mx-auto px-4 py-10 space-y-12 flex-grow w-full bg-[#121318]">

        <!-- JUST REVIEWED SECTION -->
        <section class="space-y-4">
            <div class="border-b border-gray-700 pb-2">
                <h2 class="text-xs font-mono tracking-widest text-gray-300 uppercase font-bold">
                    JUST REVIEWED...
                </h2>
            </div>

            <!-- Movie Grid (5 Poster Cards) -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="bg-[#2a133d] border border-[#482264] rounded-lg overflow-hidden flex flex-col group cursor-pointer shadow-md">
                        <div class="aspect-[2/3] bg-[#1e0a2e] flex items-center justify-center text-purple-950">
                            <svg class="w-10 h-10 opacity-30 fill-current text-purple-400" viewBox="0 0 24 24">
                                <path d="M19.82 2H4.18C2.97 2 2 2.97 2 4.18v15.64C2 21.03 2.97 22 4.18 22h15.64c1.21 0 2.18-.97 2.18-2.18V4.18C22 2.97 21.03 2 19.82 2zM7 19H5v-2h2v2zm0-4H5v-2h2v2zm0-4H5V9h2v2zm0-4H5V5h2v2zm12 12h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V9h2v2zm0-4h-2V5h2v2z"/>
                            </svg>
                        </div>
                        <div class="p-3 text-center bg-[#3a1b54]">
                            <p class="font-mono text-xs font-bold text-white truncate">Movie Title</p>
                            <p class="font-mono text-[11px] text-gray-300">(YEAR)</p>
                        </div>
                    </div>
                @endfor
            </div>
        </section>

        <!-- POPULAR REVIEWS THIS WEEK SECTION -->
        <section class="space-y-4">
            <div class="border-b border-gray-700 pb-2">
                <h2 class="text-xs font-mono tracking-widest text-gray-300 uppercase font-bold">
                    POPULAR REVIEWS THIS WEEK
                </h2>
            </div>

            <!-- Review Cards Grid (2 Columns) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <!-- Review Card 1 -->
                <div class="flex gap-4 p-2">
                    <div class="w-28 sm:w-32 aspect-[2/3] shrink-0 bg-[#2a133d] border border-[#482264] rounded-lg flex items-center justify-center">
                        <svg class="w-8 h-8 text-purple-400 opacity-30" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 4l2 4h-3l-2-4h-2l2 4h-3l-2-4H8l2 4H7L5 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V4h-4z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col justify-between py-1">
                        <div class="space-y-2">
                            <h3 class="text-lg font-serif font-bold text-white">
                                Movie Title <span class="text-xs font-mono font-normal text-gray-400">(YEAR)</span>
                            </h3>
                            <p class="text-sm italic text-gray-200 font-serif leading-relaxed">
                                "This happened to my close and personal friend Kurt once."
                            </p>
                        </div>

                        <div class="space-y-1 pt-3">
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-mono text-gray-300 font-bold">-Eslira</span>
                                <div class="flex text-purple-400 text-xs">
                                    ★★★★★
                                </div>
                            </div>
                            <div class="flex items-center gap-1.5 text-xs text-purple-400 font-sans pt-1">
                                <span>♥</span>
                                <span>218,452 likes</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review Card 2 -->
                <div class="flex gap-4 p-2">
                    <div class="w-28 sm:w-32 aspect-[2/3] shrink-0 bg-[#2a133d] border border-[#482264] rounded-lg flex items-center justify-center">
                        <svg class="w-8 h-8 text-purple-400 opacity-30" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 4l2 4h-3l-2-4h-2l2 4h-3l-2-4H8l2 4H7L5 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V4h-4z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col justify-between py-1">
                        <div class="space-y-2">
                            <h3 class="text-lg font-serif font-bold text-white">
                                Movie Title <span class="text-xs font-mono font-normal text-gray-400">(YEAR)</span>
                            </h3>
                            <p class="text-sm italic text-gray-200 font-serif leading-relaxed">
                                "This happened to my close and personal friend Kurt once."
                            </p>
                        </div>

                        <div class="space-y-1 pt-3">
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-mono text-gray-300 font-bold">-Josh</span>
                                <div class="flex text-purple-400 text-xs">
                                    ★★★★<span class="text-gray-600">★</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-1.5 text-xs text-purple-400 font-sans pt-1">
                                <span>♥</span>
                                <span>128,562 likes</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="border-t border-[#2d2140] py-6 bg-[#16101f] text-center text-xs text-gray-400 font-mono">
        <p>&copy; {{ date('Y') }} FilmFolio. Made for movie lovers.</p>
    </footer>

</body>
</html>