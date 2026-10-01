<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FilmFolio - Lists</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- EXTERNAL SEPARATE CSS (Dapat kasunod ng Tailwind CDN) -->
    <link rel="stylesheet" href="{{ asset('css/lists.css') }}">
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
                <a href="/lists" class="text-white font-bold relative py-1">Lists <span class="absolute bottom-0 left-0 w-full h-[2.5px] bg-[#a855f7] rounded-full"> </span></a>
                <a href="{{ route('members.index') }}" class="hover:text-white transition-colors">Members</a>
                <a href="{{ route('journal.index') }}" class="hover:text-white transition-colors">Journal</a>
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
    <main class="flex-grow max-w-4xl w-full mx-auto px-4 py-10 flex flex-col items-center justify-center space-y-8">

        <!-- TITLE HEADER -->
        <div class="text-center space-y-1">
            <h1 class="text-5xl font-serif-title font-normal text-white tracking-wide">Teasers</h1>
            <p class="text-xs font-medium text-[#c4b5fd] tracking-wider uppercase">Upcoming Films</p>
        </div>

        <!-- MAIN HERO CARD -->
        <div class="hero-glass-card w-full p-8 relative flex flex-col justify-between min-h-[300px]">
            
            <!-- PLAY BUTTON CENTER -->
            <div class="flex-grow flex items-center justify-center my-8">
                <button class="w-16 h-16 rounded-full bg-[#a855f7] hover:bg-[#9333ea] text-white flex items-center justify-center shadow-lg shadow-purple-950/80 hover:scale-105 transition-all cursor-pointer">
                    <svg class="w-7 h-7 ml-1" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.333-5.89a1.5 1.5 0 000-2.538L6.3 2.841z" />
                    </svg>
                </button>
            </div>

            <!-- MOVIE DETAILS -->
            <div class="space-y-2">
                <div class="flex items-center gap-3">
                    <h2 class="text-2xl sm:text-3xl font-serif-title font-semibold text-white tracking-wider uppercase">
                        THE ECHO CHAMBER
                    </h2>
                    <span class="date-pill font-medium">JULY 12, 2024</span>
                </div>
                <p class="text-xs text-[#d8b4fe]/90 leading-relaxed">
                    Generic description of the mysterious film about forgotten echoes.<br>Watch the exclusive trailer now.
                </p>
            </div>
        </div>

        <!-- 5 SUB-CARDS IN BOXES -->
        <div class="w-full grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3">
            
            <!-- CARD 1 -->
            <div class="subcard-box flex flex-col justify-between space-y-3 cursor-pointer">
                <div class="poster-box"></div>
                <div class="space-y-2">
                    <p class="text-[11px] font-bold text-white uppercase tracking-tight leading-snug">VOIDWALKERS</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] text-[#c4b5fd]">AUG 20, 2024</span>
                        <div class="w-4 h-4 rounded-full bg-[#a855f7] text-white flex items-center justify-center text-[8px]">▶</div>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="subcard-box flex flex-col justify-between space-y-3 cursor-pointer">
                <div class="poster-box"></div>
                <div class="space-y-2">
                    <p class="text-[11px] font-bold text-white uppercase tracking-tight leading-snug">THE SILENT WATCH</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] text-[#c4b5fd]">AUG 20, 2024</span>
                        <div class="w-4 h-4 rounded-full bg-[#a855f7] text-white flex items-center justify-center text-[8px]">▶</div>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="subcard-box flex flex-col justify-between space-y-3 cursor-pointer">
                <div class="poster-box"></div>
                <div class="space-y-2">
                    <p class="text-[11px] font-bold text-white uppercase tracking-tight leading-snug">ECHOES OF TOMORROW</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] text-[#c4b5fd]">AUG 20, 2024</span>
                        <div class="w-4 h-4 rounded-full bg-[#a855f7] text-white flex items-center justify-center text-[8px]">▶</div>
                    </div>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="subcard-box flex flex-col justify-between space-y-3 cursor-pointer">
                <div class="poster-box"></div>
                <div class="space-y-2">
                    <p class="text-[11px] font-bold text-white uppercase tracking-tight leading-snug">STARGAZER'S PROMISE</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] text-[#c4b5fd]">AUG 20, 2024</span>
                        <div class="w-4 h-4 rounded-full bg-[#a855f7] text-white flex items-center justify-center text-[8px]">▶</div>
                    </div>
                </div>
            </div>

            <!-- CARD 5 -->
            <div class="subcard-box flex flex-col justify-between space-y-3 cursor-pointer">
                <div class="poster-box"></div>
                <div class="space-y-2">
                    <p class="text-[11px] font-bold text-white uppercase tracking-tight leading-snug">URBAN MYSTERIES</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] text-[#c4b5fd]">AUG 20, 2024</span>
                        <div class="w-4 h-4 rounded-full bg-[#a855f7] text-white flex items-center justify-center text-[8px]">▶</div>
                    </div>
                </div>
            </div>

        </div>

    </main>

</body>
</html>