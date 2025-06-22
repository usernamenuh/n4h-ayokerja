<!-- Static Navbar (Always visible at top) -->
<nav id="static-navbar" class="fixed top-0 left-0 right-0 transition-all duration-500">
    <div class="glass-dark backdrop-blur-sm border-b border-white/10 px-6 py-3">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 gradient-bg rounded-xl flex items-center justify-center neon-glow">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                </div>
                <span class="text-xl font-bold gradient-text">AyoKerja</span>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#beranda" class="text-white/80 hover:text-white transition-all duration-300 text-base font-medium relative group">
                    <span class="relative z-10">Beranda</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 ease-out"></div>
                </a>
                <a href="#fitur" class="text-white/80 hover:text-white transition-all duration-300 text-base font-medium relative group">
                    <span class="relative z-10">Fitur</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 ease-out"></div>
                </a>
                <a href="#cara-kerja" class="text-white/80 hover:text-white transition-all duration-300 text-base font-medium relative group">
                    <span class="relative z-10">Cara Kerja</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-green-500/20 to-blue-500/20 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 ease-out"></div>
                </a>
                <a href="#testimoni" class="text-white/80 hover:text-white transition-all duration-300 text-base font-medium relative group">
                    <span class="relative z-10">Testimoni</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/20 to-orange-500/20 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 ease-out"></div>
                </a>
            </div>

            <!-- CTA Buttons -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="{{ route('login') }}" 
                   class="text-white/80 hover:text-white transition-all duration-300 px-4 py-2 rounded-xl hover:bg-white/10 text-base font-medium">
                    Masuk
                </a>
                <a href="{{ route('register') }}" 
                   class="gradient-bg text-white px-5 py-2 rounded-xl font-semibold hover:scale-105 transition-all duration-300 shadow-lg text-base">
                    Mulai Kerja
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        class="text-white/80 hover:text-white transition-colors p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Floating Navbar (Appears on scroll) -->
<nav id="floating-navbar" class="floating-navbar fixed top-4 left-4 right-4">
    <div class="glass-effect rounded-2xl px-6 py-3 mx-auto max-w-7xl shadow-2xl border border-white/20">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 gradient-bg rounded-xl flex items-center justify-center neon-glow">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                </div>
                <span class="text-xl font-bold gradient-text">AyoKerja</span>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#beranda" class="text-white/80 hover:text-white transition-all duration-300 text-base font-medium">Beranda</a>
                <a href="#fitur" class="text-white/80 hover:text-white transition-all duration-300 text-base font-medium">Fitur</a>
                <a href="#cara-kerja" class="text-white/80 hover:text-white transition-all duration-300 text-base font-medium">Cara Kerja</a>
                <a href="#testimoni" class="text-white/80 hover:text-white transition-all duration-300 text-base font-medium">Testimoni</a>
            </div>

            <!-- CTA Buttons -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="{{ route('login') }}" 
                   class="text-white/80 hover:text-white transition-all duration-300 px-4 py-2 rounded-xl hover:bg-white/10 text-base font-medium">
                    Masuk
                </a>
                <a href="{{ route('register') }}" 
                   class="gradient-bg text-white px-5 py-2 rounded-xl font-semibold hover:scale-105 transition-all duration-300 neon-glow text-base">
                    Mulai Kerja
                </a>
            </div>
        </div>
    </div>
</nav>
