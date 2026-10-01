<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FilmFolio - Members</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Public CSS -->
    <link rel="stylesheet" href="{{ asset('css/members.css') }}">
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
                <a href="/members" class="text-white font-bold relative py-1">Members <span class="absolute bottom-0 left-0 w-full h-[2.5px] bg-[#a855f7] rounded-full"> </span></a>
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
    <main class="flex-grow max-w-6xl w-full mx-auto px-6 py-10 space-y-12">

        <!-- TITLE & SEARCH HEADER -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6">
            <h1 class="text-5xl font-serif-title font-normal text-white tracking-wide">Members</h1>
            <div class="relative w-full sm:w-72">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-[#a855f7]">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </span>
                <input type="text" placeholder="Search for users..." class="search-input w-full pl-9 pr-4 py-2 text-xs rounded-full border placeholder-[#9382b3] focus:outline-none">
            </div>
        </div>

        <!-- SECTION 1: MOST ACTIVE REVIEWERS -->
        <section class="space-y-4">
            <h2 class="text-xl font-serif-title font-normal text-white tracking-wide">Most Active Reviewers</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                
                <!-- CARD 1 -->
                <div class="member-card flex items-start gap-3">
                    <div class="avatar-box flex items-center justify-center text-white/40">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="flex-grow space-y-1 overflow-hidden">
                        <h3 class="text-sm font-bold text-white truncate">@filmfan92</h3>
                        <p class="text-[10px] text-[#c4b5fd]/80 truncate">128 Reviews · 42 Lists · 1.2k Followers</p>
                        <button class="btn-follow text-[10px] px-4 py-0.5 rounded-full mt-2">Follow</button>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="member-card flex items-start gap-3">
                    <div class="avatar-box flex items-center justify-center text-white/40">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="flex-grow space-y-1 overflow-hidden">
                        <h3 class="text-sm font-bold text-white truncate">@filmfan93</h3>
                        <p class="text-[10px] text-[#c4b5fd]/80 truncate">128 Reviews · 42 Lists · 1.2k Followers</p>
                        <button class="btn-follow text-[10px] px-4 py-0.5 rounded-full mt-2">Follow</button>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="member-card flex items-start gap-3">
                    <div class="avatar-box flex items-center justify-center text-white/40">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="flex-grow space-y-1 overflow-hidden">
                        <h3 class="text-sm font-bold text-white truncate">@filmfan94</h3>
                        <p class="text-[10px] text-[#c4b5fd]/80 truncate">128 Reviews · 42 Lists · 1.2k Followers</p>
                        <button class="btn-follow text-[10px] px-4 py-0.5 rounded-full mt-2">Follow</button>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="member-card flex items-start gap-3">
                    <div class="avatar-box flex items-center justify-center text-white/40">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="flex-grow space-y-1 overflow-hidden">
                        <h3 class="text-sm font-bold text-white truncate">@filmfan95</h3>
                        <p class="text-[10px] text-[#c4b5fd]/80 truncate">128 Reviews · 42 Lists · 1.2k Followers</p>
                        <button class="btn-follow text-[10px] px-4 py-0.5 rounded-full mt-2">Follow</button>
                    </div>
                </div>

            </div>
        </section>

        <!-- SECTION 2: FEATURED MEMBERS -->
        <section class="space-y-4">
            <h2 class="text-xl font-serif-title font-normal text-white tracking-wide">Featured Members</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                
                <div class="member-card flex items-start gap-3">
                    <div class="avatar-box flex items-center justify-center text-white/40">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="flex-grow space-y-1 overflow-hidden">
                        <h3 class="text-sm font-bold text-white truncate">@filmfan92</h3>
                        <p class="text-[10px] text-[#c4b5fd]/80 truncate">128 Reviews · 42 Lists · 1.2k Followers</p>
                        <button class="btn-follow text-[10px] px-4 py-0.5 rounded-full mt-2">Follow</button>
                    </div>
                </div>

                <div class="member-card flex items-start gap-3">
                    <div class="avatar-box flex items-center justify-center text-white/40">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="flex-grow space-y-1 overflow-hidden">
                        <h3 class="text-sm font-bold text-white truncate">@filmfan92</h3>
                        <p class="text-[10px] text-[#c4b5fd]/80 truncate">128 Reviews · 42 Lists · 1.2k Followers</p>
                        <button class="btn-follow text-[10px] px-4 py-0.5 rounded-full mt-2">Follow</button>
                    </div>
                </div>

                <div class="member-card flex items-start gap-3">
                    <div class="avatar-box flex items-center justify-center text-white/40">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="flex-grow space-y-1 overflow-hidden">
                        <h3 class="text-sm font-bold text-white truncate">@filmfan93</h3>
                        <p class="text-[10px] text-[#c4b5fd]/80 truncate">128 Reviews · 42 Lists · 1.2k Followers</p>
                        <button class="btn-follow text-[10px] px-4 py-0.5 rounded-full mt-2">Follow</button>
                    </div>
                </div>

            </div>
        </section>

        <!-- SECTION 3: POPULAR MEMBERS -->
        <section class="space-y-4">
            <h2 class="text-xl font-serif-title font-normal text-white tracking-wide">Popular Members</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                
                <div class="member-card flex items-start gap-3">
                    <div class="avatar-box flex items-center justify-center text-white/40">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="flex-grow space-y-1 overflow-hidden">
                        <h3 class="text-sm font-bold text-white truncate">@filmfan92</h3>
                        <p class="text-[10px] text-[#c4b5fd]/80 truncate">128 Reviews · 42 Lists · 1.2k Followers</p>
                    </div>
                </div>

                <div class="member-card flex items-start gap-3">
                    <div class="avatar-box flex items-center justify-center text-white/40">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="flex-grow space-y-1 overflow-hidden">
                        <h3 class="text-sm font-bold text-white truncate">@filmfan93</h3>
                        <p class="text-[10px] text-[#c4b5fd]/80 truncate">128 Reviews · 42 Lists · 1.2k Followers</p>
                    </div>
                </div>

                <div class="member-card flex items-start gap-3">
                    <div class="avatar-box flex items-center justify-center text-white/40">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="flex-grow space-y-1 overflow-hidden">
                        <h3 class="text-sm font-bold text-white truncate">@filmfan97</h3>
                        <p class="text-[10px] text-[#c4b5fd]/80 truncate">128 Reviews · 42 Lists · 1.2k Followers</p>
                    </div>
                </div>

            </div>
        </section>

    </main>

</body>
</html>