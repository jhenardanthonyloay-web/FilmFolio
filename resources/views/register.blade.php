<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - FilmFolio</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0b0711;
        }
        .font-serif {
            font-family: 'Playfair Display', serif;
        }
        /* BACKGROUND WITH SLIGHT BLUR */
        .cinema-bg {
            background-image: linear-gradient(to bottom, rgba(11, 7, 17, 0.65), rgba(11, 7, 17, 0.85)), url("{{ asset('images/cinema-bg.jpg') }}");
            background-size: cover;
            background-position: center;
            filter: blur(8px);
            transform: scale(1.05);
        }
    </style>
</head>
<body class="text-white min-h-screen flex items-center justify-center relative p-4 overflow-hidden">

    <!-- BLURRED BACKGROUND OVERLAY -->
    <div class="fixed inset-0 cinema-bg pointer-events-none z-0"></div>

    <!-- CLOSE BUTTON (X) Upper Right -->
    <a href="/" class="fixed top-5 right-6 text-white text-2xl font-light opacity-80 hover:opacity-100 transition-opacity z-30" title="Close">&#10005;</a>

    <!-- REGISTER CARD -->
    <div class="relative z-20 w-full max-w-[410px] bg-[#16121e] border border-[#231b30] rounded-2xl p-6 sm:p-8 shadow-2xl space-y-4">
        
        <!-- LOGO & HEADER -->
        <div class="text-center space-y-1">
            <div class="flex items-center justify-center gap-3 mb-2">
                <div class="w-10 h-10 rounded-xl bg-[#8b5cf6] flex items-center justify-center text-white shadow-lg shrink-0">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:24px; height:24px;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h18M3 16h18M4 4h16a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V5a1 1 0 011-1z"></path>
                    </svg>
                </div>
                <span class="font-serif text-2xl font-bold tracking-tight text-white">FilmFolio</span>
            </div>

            <h1 class="font-serif text-2xl font-normal text-white tracking-wide">
                Create Account
            </h1>
            <p class="text-xs text-[#8f82a3]">
                Join the FilmFolio community
            </p>
        </div>

        <!-- DISPLAY VALIDATION ERRORS HERE -->
        @if ($errors->any())
            <div class="bg-red-500/10 border border-red-500/50 text-red-300 text-xs rounded-xl p-3 space-y-1">
                @foreach ($errors->all() as $error)
                    <p>• {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- FORM -->
        <form action="{{ route('register') }}" method="POST" class="space-y-3">
            @csrf

            <!-- FULL NAME -->
            <div class="space-y-1">
                <label for="name" class="block text-xs font-medium text-[#c0b5d0]">
                    Full Name
                </label>
                <div class="relative flex items-center">
                    <svg class="absolute left-3.5 w-4 h-4 text-[#a89bb9] pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:16px; height:16px;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        value="{{ old('name') }}"
                        placeholder="Enter your name" 
                        required
                        class="w-full bg-[#1c1626] text-xs text-white placeholder-[#6a5d7c] rounded-xl py-2.5 pl-10 pr-4 border border-[#2d233c] focus:outline-none focus:border-[#8b5cf6] focus:ring-1 focus:ring-[#8b5cf6] transition-all"
                    >
                </div>
            </div>

            <!-- USERNAME -->
            <div class="space-y-1">
                <label for="username" class="block text-xs font-medium text-[#c0b5d0]">
                    Username
                </label>
                <div class="relative flex items-center">
                    <svg class="absolute left-3.5 w-4 h-4 text-[#a89bb9] pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:16px; height:16px;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        value="{{ old('username') }}"
                        placeholder="Enter your username" 
                        required
                        class="w-full bg-[#1c1626] text-xs text-white placeholder-[#6a5d7c] rounded-xl py-2.5 pl-10 pr-4 border border-[#2d233c] focus:outline-none focus:border-[#8b5cf6] focus:ring-1 focus:ring-[#8b5cf6] transition-all"
                    >
                </div>
            </div>

            <!-- PASSWORD -->
            <div class="space-y-1">
                <label for="password" class="block text-xs font-medium text-[#c0b5d0]">
                    Password
                </label>
                <div class="relative flex items-center">
                    <svg class="absolute left-3.5 w-4 h-4 text-[#a89bb9] pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:16px; height:16px;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Enter your password" 
                        required
                        class="w-full bg-[#1c1626] text-xs text-white placeholder-[#6a5d7c] rounded-xl py-2.5 pl-10 pr-16 border border-[#2d233c] focus:outline-none focus:border-[#8b5cf6] focus:ring-1 focus:ring-[#8b5cf6] transition-all"
                    >
                    <button 
                        type="button" 
                        onclick="toggleField('password', this)"
                        class="absolute right-3.5 text-xs text-[#8b5cf6] hover:text-[#a78bfa] font-medium transition-colors"
                    >
                        Show
                    </button>
                </div>
            </div>

            <!-- CONFIRM PASSWORD -->
            <div class="space-y-1">
                <label for="password_confirmation" class="block text-xs font-medium text-[#c0b5d0]">
                    Confirm Password
                </label>
                <div class="relative flex items-center">
                    <svg class="absolute left-3.5 w-4 h-4 text-[#a89bb9] pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:16px; height:16px;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        placeholder="Confirm your password" 
                        required
                        class="w-full bg-[#1c1626] text-xs text-white placeholder-[#6a5d7c] rounded-xl py-2.5 pl-10 pr-16 border border-[#2d233c] focus:outline-none focus:border-[#8b5cf6] focus:ring-1 focus:ring-[#8b5cf6] transition-all"
                    >
                    <button 
                        type="button" 
                        onclick="toggleField('password_confirmation', this)"
                        class="absolute right-3.5 text-xs text-[#8b5cf6] hover:text-[#a78bfa] font-medium transition-colors"
                    >
                        Show
                    </button>
                </div>
            </div>

            <!-- SUBMIT BUTTON -->
            <div class="pt-2">
                <button 
                    type="submit" 
                    class="w-full bg-[#8b5cf6] hover:bg-[#7c3aed] text-white font-semibold text-xs py-3 rounded-xl transition duration-200 shadow-md shadow-purple-950/40 tracking-wider uppercase"
                >
                    REGISTER
                </button>
            </div>
        </form>

        <!-- FOOTER LINK -->
        <div class="text-center pt-1">
            <p class="text-xs text-[#8f82a3]">
                Already have an account? 
                <a href="{{ route('login') }}" class="text-[#a78bfa] hover:underline font-semibold ml-1">
                    Login
                </a>
            </p>
        </div>

    </div>

    <!-- TOGGLE PASSWORD SCRIPT -->
    <script>
        function toggleField(inputId, btn) {
            const input = document.getElementById(inputId);
            if (input.type === 'password') {
                input.type = 'text';
                btn.innerText = 'Hide';
            } else {
                input.type = 'password';
                btn.innerText = 'Show';
            }
        }
    </script>

</body>
</html>