<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FilmFolio - Films</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- EXTERNAL SEPARATE CSS (Dapat kasunod ng Tailwind CDN) -->
    <link rel="stylesheet" href="{{ asset('css/films.css') }}">
</head>
<body class="bg-[#0b0512] min-h-screen flex flex-col justify-between antialiased">

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
                <a href="{{ route('films.index') }}" class="text-white font-bold relative py-1">Films <span class="absolute bottom-0 left-0 w-full h-[2.5px] bg-[#a855f7] rounded-full"></span></a>
                <a href="/lists" class="hover:text-white transition-colors">Lists</a>
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

    <!-- MAIN CONTENT CONTAINER -->
    <main class="flex-grow max-w-7xl w-full mx-auto px-6 py-8 space-y-8">

        <!-- HEADER SECTION -->
        <div class="flex items-center justify-between border-b border-[#241338] pb-6">
            <h1 class="text-3xl font-bold font-serif-title text-white">Films</h1>

            <button class="flex items-center gap-2 bg-[#a855f7] hover:bg-[#9333ea] text-white text-sm font-semibold px-5 py-2.5 rounded-full transition-all shadow-lg shadow-purple-900/40">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                </svg>
                Write a Review
            </button>
        </div>

        <!-- SEARCH AND FILTERS BAR -->
        <div class="flex flex-col sm:flex-row items-center gap-3">
            <!-- Search Input -->
            <div class="relative flex-grow w-full">
                <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-[#b0a1ca]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <input 
                    type="text" 
                    placeholder="Search films, actors, directors..." 
                    class="w-full bg-[#120820] border border-[#241338] text-sm text-white placeholder-[#7e6e9b] rounded-xl py-2.5 pl-10 pr-4 focus:outline-none focus:border-[#a855f7]"
                >
            </div>

            <!-- Genre Dropdown -->
            <div class="relative w-full sm:w-48">
                <select class="w-full bg-[#120820] border border-[#241338] text-sm text-[#b0a1ca] rounded-xl py-2.5 px-3 appearance-none focus:outline-none focus:border-[#a855f7] cursor-pointer">
                    <option value="">All Genres</option>
                    <option value="action">Action</option>
                    <option value="drama">Drama</option>
                    <option value="comedy">Comedy</option>
                    <option value="sci-fi">Sci-Fi</option>
                    <option value="horror">Horror</option>
                </select>
                <div class="absolute right-3.5 top-1/2 -translate-y-1/2 pointer-events-none text-[#b0a1ca] text-xs">▼</div>
            </div>

            <!-- Decade Dropdown -->
            <div class="relative w-full sm:w-48">
                <select class="w-full bg-[#120820] border border-[#241338] text-sm text-[#b0a1ca] rounded-xl py-2.5 px-3 appearance-none focus:outline-none focus:border-[#a855f7] cursor-pointer">
                    <option value="">All Decades</option>
                    <option value="2020s">2020s</option>
                    <option value="2010s">2010s</option>
                    <option value="2000s">2000s</option>
                    <option value="1990s">1990s</option>
                </select>
                <div class="absolute right-3.5 top-1/2 -translate-y-1/2 pointer-events-none text-[#b0a1ca] text-xs">▼</div>
            </div>
        </div>

        <!-- MOVIE GRID -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-5 pt-2">
            @for ($i = 1; $i <= 12; $i++)
                <div class="group cursor-pointer space-y-2">
                    <!-- Dark Poster Card -->
                    <div class="movie-card aspect-[2/3] w-full bg-[#120820] border border-[#241338] group-hover:border-[#a855f7] rounded-2xl flex flex-col items-center justify-center relative overflow-hidden p-3 transition-all">
                        <div class="w-9 h-9 rounded-full bg-[#241338] flex items-center justify-center">
                            <svg class="w-4 h-4 text-[#a855f7]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.333-5.89a1.5 1.5 0 000-2.538L6.3 2.841z" />
                            </svg>
                        </div>
                        <span class="text-[10px] uppercase tracking-widest text-[#7e6e9b] font-semibold mt-2">Poster</span>
                    </div>

                    <!-- Movie Title & Year -->
                    <div class="text-center space-y-0.5">
                        <p class="text-xs font-medium text-[#c4b5fd] group-hover:text-white transition-colors truncate">
                            Movie Title {{ $i }}
                        </p>
                        <p class="text-[11px] text-[#7e6e9b]">2024</p>
                    </div>
                </div>
            @endfor
        </div>

    </main>

</body>
</html>