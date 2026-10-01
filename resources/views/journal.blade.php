<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FilmFolio - Journal</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Public CSS -->
    <link rel="stylesheet" href="{{ asset('css/journal.css') }}">
</head>
<body class="min-h-screen flex flex-col justify-between antialiased">

    <!-- HEADER / NAVIGATION -->
    <header class="bg-[#0b0512]/90 border-b border-[#241338] px-8 py-4 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            
            <!-- LOGO -->
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-[#a855f7] to-[#ec4899] flex items-center justify-center text-white font-bold text-lg shadow-md shadow-purple-900/40">
                    F
                </div>
                <span class="font-serif-title text-2xl font-bold text-white tracking-tight">FilmFolio</span>
            </a>

            <!-- NAV LINKS -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-[#b0a1ca]">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
                <a href="{{ route('films.index') }}" class="hover:text-white transition-colors">Films</a>
                <a href="{{ route('lists.index') }}" class="hover:text-white transition-colors">Lists</a>
                <a href="{{ route('members.index') }}" class="hover:text-white transition-colors">Members</a>
                <a href="/journal" class="text-white font-bold relative py-1">Journal <span class="absolute bottom-0 left-0 w-full h-[2.5px] bg-[#a855f7] rounded-full"> </span></a>
            </nav>

            <!-- RIGHT ACTIONS -->
            <div class="flex items-center gap-6">
                <button class="text-[#b0a1ca] hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
                <a href="{{ route('login') }}" class="text-sm font-medium text-[#b0a1ca] hover:text-white transition-colors">Login</a>
                <a href="{{ route('register') }}" class="text-sm font-semibold bg-[#a855f7] hover:bg-[#9333ea] text-white px-6 py-2 rounded-full transition-all shadow-lg shadow-purple-900/40">Register</a>
            </div>

        </div>
    </header>

    <!-- MAIN CONTENT AREA -->
    <main class="flex-grow max-w-5xl w-full mx-auto px-6 py-10 space-y-10">

        <!-- TITLE & LOG FILM BUTTON -->
        <div class="flex items-center justify-between">
            <h1 class="text-5xl font-serif-title font-normal text-white tracking-wide">Journal</h1>
            <button class="btn-log-film flex items-center gap-2 px-5 py-2.5 rounded-full text-xs font-semibold shadow-lg">
                <span class="text-base leading-none">+</span> Log a Film
            </button>
        </div>

        <!-- TIMELINE CONTAINER -->
        <div class="space-y-10">

            <!-- MONTH GROUP 1: NOVEMBER 2026 -->
            <div class="timeline-container space-y-4">
                <div class="relative">
                    <span class="timeline-dot"></span>
                    <h2 class="text-xl font-serif-title font-normal text-white tracking-wide">November 2026</h2>
                </div>

                <div class="space-y-3">
                    <!-- ROW 1 -->
                    <div class="journal-row-card grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3">
                            <div class="poster-thumb"></div>
                            <div class="space-y-1 overflow-hidden">
                                <div class="flex items-center gap-2">
                                    <h3 class="text-xs font-bold text-white truncate">Generic Movie Title A (2026)</h3>
                                    <span class="text-[10px] text-[#c4b5fd]/70 shrink-0">15 Nov</span>
                                    <span class="star-rating shrink-0">★★★★☆</span>
                                </div>
                                <p class="text-[11px] text-[#c4b5fd]/80 line-clamp-1">It was an emotional resonance and visual spectacle. Truly unique.</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="poster-thumb"></div>
                            <div class="space-y-1 overflow-hidden">
                                <div class="flex items-center gap-2">
                                    <h3 class="text-xs font-bold text-white truncate">Generic Movie Title B (2026)</h3>
                                    <span class="text-[10px] text-[#c4b5fd]/70 shrink-0">15 Nov</span>
                                    <span class="star-rating shrink-0">★★★★☆</span>
                                </div>
                                <p class="text-[11px] text-[#c4b5fd]/80 line-clamp-1">It was an emotional resonance and visual spectacle.</p>
                            </div>
                        </div>
                    </div>

                    <!-- ROW 2 -->
                    <div class="journal-row-card grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3">
                            <div class="poster-thumb"></div>
                            <div class="space-y-1 overflow-hidden">
                                <div class="flex items-center gap-2">
                                    <h3 class="text-xs font-bold text-white truncate">Generic Movie Title B (2026)</h3>
                                    <span class="text-[10px] text-[#c4b5fd]/70 shrink-0">14 Nov</span>
                                    <span class="star-rating shrink-0">★★★★☆</span>
                                </div>
                                <p class="text-[11px] text-[#c4b5fd]/80 line-clamp-1">It was an emotional resonance and visual spectacle. Truly unique.</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="poster-thumb"></div>
                            <div class="space-y-1 overflow-hidden">
                                <div class="flex items-center gap-2">
                                    <h3 class="text-xs font-bold text-white truncate">Generic Movie Title C (2026)</h3>
                                    <span class="text-[10px] text-[#c4b5fd]/70 shrink-0">14 Nov</span>
                                    <span class="star-rating shrink-0">★★★★☆</span>
                                </div>
                                <p class="text-[11px] text-[#c4b5fd]/80 line-clamp-1">It was an emotional resonance and visual spectacle.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MONTH GROUP 2: OCTOBER 2026 -->
            <div class="timeline-container space-y-4">
                <div class="relative">
                    <span class="timeline-dot"></span>
                    <h2 class="text-xl font-serif-title font-normal text-white tracking-wide">October 2026</h2>
                </div>

                <div class="space-y-3">
                    <!-- ROW 1 -->
                    <div class="journal-row-card grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3">
                            <div class="poster-thumb"></div>
                            <div class="space-y-1 overflow-hidden">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-xs font-bold text-white truncate">Generic Movie Title A (2026)</h3>
                                    <span class="star-rating">★★★★★</span>
                                </div>
                                <span class="text-[10px] text-[#c4b5fd]/70 block">13 Nov</span>
                                <p class="text-[11px] text-[#c4b5fd]/80 line-clamp-1">It was an emotional resonance and visual spectacle. Truly unique.</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="poster-thumb"></div>
                            <div class="space-y-1 overflow-hidden">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-xs font-bold text-white truncate">Generic Movie Title A (2026)</h3>
                                    <span class="star-rating">★★★★★</span>
                                </div>
                                <span class="text-[10px] text-[#c4b5fd]/70 block">15 Nov</span>
                                <p class="text-[11px] text-[#c4b5fd]/80 line-clamp-1">It was an emotional resonance and visual spectacle.</p>
                            </div>
                        </div>
                    </div>

                    <!-- ROW 2 -->
                    <div class="journal-row-card grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3">
                            <div class="poster-thumb"></div>
                            <div class="space-y-1 overflow-hidden">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-xs font-bold text-white truncate">Generic Movie Title B (2026)</h3>
                                    <span class="star-rating">★★★★★</span>
                                </div>
                                <span class="text-[10px] text-[#c4b5fd]/70 block">17 Nov</span>
                                <p class="text-[11px] text-[#c4b5fd]/80 line-clamp-1">It was an emotional resonance and visual spectacle.</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="poster-thumb"></div>
                            <div class="space-y-1 overflow-hidden">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-xs font-bold text-white truncate">Generic Movie Title B (2026)</h3>
                                    <span class="star-rating">★★★★★</span>
                                </div>
                                <span class="text-[10px] text-[#c4b5fd]/70 block">15 Nov</span>
                                <p class="text-[11px] text-[#c4b5fd]/80 line-clamp-1">It was an emotional resonance and visual spectacle. Truly unique.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>

</body>
</html> 