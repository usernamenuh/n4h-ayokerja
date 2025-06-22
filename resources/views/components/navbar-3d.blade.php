<!-- Enhanced Static Navbar (Always visible at top) -->
<nav id="static-navbar" class="fixed top-0 left-0 right-0 z-40 transition-all duration-500">
    <div class="bg-black/20 backdrop-blur-sm border-b border-white/10 px-6 py-3 relative overflow-hidden">
        <!-- Animated Background Particles -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="navbar-particles">
                @for ($i = 0; $i < 15; $i++)
                    <div class="navbar-particle" style="
                        left: {{ rand(0, 100) }}%; 
                        animation-delay: {{ rand(0, 3000) }}ms;
                        animation-duration: {{ rand(3000, 6000) }}ms;
                    "></div>
                @endfor
            </div>
            
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-purple-500/5 via-transparent to-blue-500/5 animate-gradient-x"></div>
        </div>
        
        <div class="max-w-7xl mx-auto flex items-center justify-between relative z-10">
            <!-- Enhanced Logo -->
            <div class="flex items-center space-x-4 group">
                <div class="w-10 h-10 gradient-bg rounded-xl flex items-center justify-center neon-glow relative overflow-hidden group-hover:scale-110 transition-all duration-300">
                    <!-- Logo Background Animation -->
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 opacity-0 group-hover:opacity-20 transition-opacity duration-300 animate-spin-slow"></div>
                    <svg class="w-5 h-5 text-white relative z-10 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                    <!-- Pulse Ring -->
                    <div class="absolute inset-0 rounded-xl border-2 border-white/30 scale-100 group-hover:scale-150 opacity-100 group-hover:opacity-0 transition-all duration-500"></div>
                </div>
                <span class="text-xl font-bold gradient-text group-hover:scale-105 transition-transform duration-300">AyoKerja</span>
            </div>

            <!-- Enhanced Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#beranda" class="nav-link-enhanced text-white/80 hover:text-white transition-all duration-300 text-base font-medium relative group px-4 py-2">
                    <span class="relative z-10">Beranda</span>
                    <!-- Hover Background -->
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 ease-out"></div>
                    <!-- Bottom Line -->
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-purple-400 group-hover:w-full transition-all duration-300 ease-out"></div>
                    <!-- Floating Dots -->
                    <div class="absolute -top-1 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-blue-400 rounded-full opacity-0 group-hover:opacity-100 group-hover:-translate-y-2 transition-all duration-300"></div>
                    <!-- Side Glow -->
                    <div class="absolute inset-0 bg-blue-400/10 rounded-lg blur-xl scale-0 group-hover:scale-150 transition-all duration-500 opacity-0 group-hover:opacity-100"></div>
                </a>
                
                <a href="#fitur" class="nav-link-enhanced text-white/80 hover:text-white transition-all duration-300 text-base font-medium relative group px-4 py-2">
                    <span class="relative z-10">Fitur</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 ease-out"></div>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-purple-400 to-pink-400 group-hover:w-full transition-all duration-300 ease-out"></div>
                    <div class="absolute -top-1 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-purple-400 rounded-full opacity-0 group-hover:opacity-100 group-hover:-translate-y-2 transition-all duration-300"></div>
                    <div class="absolute inset-0 bg-purple-400/10 rounded-lg blur-xl scale-0 group-hover:scale-150 transition-all duration-500 opacity-0 group-hover:opacity-100"></div>
                </a>
                
                <a href="#cara-kerja" class="nav-link-enhanced text-white/80 hover:text-white transition-all duration-300 text-base font-medium relative group px-4 py-2">
                    <span class="relative z-10">Cara Kerja</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-green-500/20 to-blue-500/20 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 ease-out"></div>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-green-400 to-blue-400 group-hover:w-full transition-all duration-300 ease-out"></div>
                    <div class="absolute -top-1 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-green-400 rounded-full opacity-0 group-hover:opacity-100 group-hover:-translate-y-2 transition-all duration-300"></div>
                    <div class="absolute inset-0 bg-green-400/10 rounded-lg blur-xl scale-0 group-hover:scale-150 transition-all duration-500 opacity-0 group-hover:opacity-100"></div>
                </a>
                
                <a href="#testimoni" class="nav-link-enhanced text-white/80 hover:text-white transition-all duration-300 text-base font-medium relative group px-4 py-2">
                    <span class="relative z-10">Testimoni</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/20 to-orange-500/20 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 ease-out"></div>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-yellow-400 to-orange-400 group-hover:w-full transition-all duration-300 ease-out"></div>
                    <div class="absolute -top-1 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-yellow-400 rounded-full opacity-0 group-hover:opacity-100 group-hover:-translate-y-2 transition-all duration-300"></div>
                    <div class="absolute inset-0 bg-yellow-400/10 rounded-lg blur-xl scale-0 group-hover:scale-150 transition-all duration-500 opacity-0 group-hover:opacity-100"></div>
                </a>
            </div>

            <!-- Enhanced CTA Buttons -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="{{ route('login') }}" 
                   class="text-white/80 hover:text-white transition-all duration-300 px-4 py-2 rounded-xl hover:bg-white/10 text-base font-medium relative group overflow-hidden">
                    <span class="relative z-10">Masuk</span>
                    <!-- Ripple Effect -->
                    <div class="absolute inset-0 bg-white/5 scale-0 group-hover:scale-100 transition-transform duration-300 rounded-xl"></div>
                </a>
                <a href="{{ route('register') }}" 
                   class="gradient-bg text-white px-5 py-2 rounded-xl font-semibold hover:scale-105 transition-all duration-300 shadow-lg text-base relative group overflow-hidden">
                    <span class="relative z-10">Mulai Kerja</span>
                    <!-- Animated Background -->
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 via-blue-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300 animate-gradient-x"></div>
                    <!-- Shine Effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700 ease-in-out"></div>
                </a>
            </div>

            <!-- Enhanced Mobile menu button -->
            <div class="md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        class="text-white/80 hover:text-white transition-all duration-300 p-2 relative group">
                    <div class="w-6 h-6 relative">
                        <!-- Hamburger Lines with Animation -->
                        <span class="absolute top-0 left-0 w-full h-0.5 bg-current transform transition-all duration-300 group-hover:rotate-45 group-hover:top-2.5"></span>
                        <span class="absolute top-2.5 left-0 w-full h-0.5 bg-current transition-all duration-300 group-hover:opacity-0"></span>
                        <span class="absolute top-5 left-0 w-full h-0.5 bg-current transform transition-all duration-300 group-hover:-rotate-45 group-hover:top-2.5"></span>
                    </div>
                </button>
            </div>
        </div>

        <!-- Enhanced Mobile Menu -->
        <div x-show="mobileMenuOpen" 
             x-data="{ mobileMenuOpen: false }"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform -translate-y-4 scale-95"
             x-transition:enter-end="opacity-100 transform translate-y-0 scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 transform translate-y-0 scale-100"
             x-transition:leave-end="opacity-0 transform -translate-y-4 scale-95"
             class="md:hidden mt-4 pt-4 border-t border-white/20 relative">
            <!-- Mobile Menu Background -->
            <div class="absolute inset-0 bg-gradient-to-b from-white/5 to-transparent rounded-lg"></div>
            
            <div class="flex flex-col space-y-4 relative z-10">
                <a href="#beranda" class="text-white/80 hover:text-white transition-all duration-300 py-2 text-base relative group pl-4">
                    <span class="relative z-10">Beranda</span>
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-blue-400 to-purple-400 scale-y-0 group-hover:scale-y-100 transition-transform duration-300 origin-top"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded"></div>
                </a>
                <a href="#fitur" class="text-white/80 hover:text-white transition-all duration-300 py-2 text-base relative group pl-4">
                    <span class="relative z-10">Fitur</span>
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-purple-400 to-pink-400 scale-y-0 group-hover:scale-y-100 transition-transform duration-300 origin-top"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded"></div>
                </a>
                <a href="#cara-kerja" class="text-white/80 hover:text-white transition-all duration-300 py-2 text-base relative group pl-4">
                    <span class="relative z-10">Cara Kerja</span>
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-green-400 to-blue-400 scale-y-0 group-hover:scale-y-100 transition-transform duration-300 origin-top"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-green-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded"></div>
                </a>
                <a href="#testimoni" class="text-white/80 hover:text-white transition-all duration-300 py-2 text-base relative group pl-4">
                    <span class="relative z-10">Testimoni</span>
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-yellow-400 to-orange-400 scale-y-0 group-hover:scale-y-100 transition-transform duration-300 origin-top"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded"></div>
                </a>
                <div class="flex flex-col space-y-3 pt-6 border-t border-white/20">
                    <a href="{{ route('login') }}" class="text-white/80 hover:text-white transition-all duration-300 py-3 text-lg relative group">
                        <span class="relative z-10">Masuk</span>
                        <div class="absolute inset-0 bg-white/5 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded"></div>
                    </a>
                    <a href="{{ route('register') }}" class="gradient-bg text-white px-6 py-3 rounded-xl text-center font-semibold text-lg relative group overflow-hidden">
                        <span class="relative z-10">Mulai Kerja</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 via-blue-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300 animate-gradient-x"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Enhanced Floating Navbar (Appears on scroll) -->
<nav id="floating-navbar" class="floating-navbar fixed top-4 left-4 right-4 z-50 transform -translate-y-20 opacity-0 transition-all duration-500">
    <div class="glass-effect rounded-2xl px-6 py-3 mx-auto max-w-7xl shadow-2xl border border-white/20 relative overflow-hidden">
        <!-- Floating Navbar Background Effects -->
        <div class="absolute inset-0 pointer-events-none">
            <!-- Animated Border -->
            <div class="absolute inset-0 rounded-2xl border border-transparent bg-gradient-to-r from-blue-500/20 via-purple-500/20 to-pink-500/20 animate-border-flow"></div>
            
            <!-- Floating Particles -->
            <div class="floating-navbar-particles">
                @for ($i = 0; $i < 10; $i++)
                    <div class="floating-navbar-particle" style="
                        left: {{ rand(0, 100) }}%; 
                        animation-delay: {{ rand(0, 2000) }}ms;
                        animation-duration: {{ rand(4000, 8000) }}ms;
                    "></div>
                @endfor
            </div>
            
            <!-- Shimmer Effect -->
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/5 to-transparent -translate-x-full animate-shimmer"></div>
        </div>
        
        <div class="flex items-center justify-between relative z-10">
            <!-- Enhanced Floating Logo -->
            <div class="flex items-center space-x-4 group">
                <div class="w-10 h-10 gradient-bg rounded-xl flex items-center justify-center neon-glow relative overflow-hidden group-hover:scale-110 transition-all duration-300">
                    <!-- Rotating Ring -->
                    <div class="absolute inset-0 border-2 border-white/20 rounded-xl animate-spin-slow opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <svg class="w-5 h-5 text-white relative z-10 group-hover:rotate-180 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                    <!-- Pulse Effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-400 rounded-xl opacity-0 group-hover:opacity-20 animate-pulse"></div>
                </div>
                <span class="text-xl font-bold gradient-text group-hover:scale-105 transition-transform duration-300">AyoKerja</span>
            </div>

            <!-- Enhanced Floating Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#beranda" class="nav-link-floating text-white/80 hover:text-white transition-all duration-300 text-base font-medium relative group px-4 py-2">
                    <span class="relative z-10">Beranda</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/30 to-purple-500/30 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 ease-out"></div>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-purple-400 group-hover:w-full transition-all duration-300 ease-out"></div>
                    <!-- Floating Icon -->
                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 group-hover:-translate-y-1 transition-all duration-300">
                        <div class="w-2 h-2 bg-blue-400 rounded-full animate-bounce"></div>
                    </div>
                </a>
                
                <a href="#fitur" class="nav-link-floating text-white/80 hover:text-white transition-all duration-300 text-base font-medium relative group px-4 py-2">
                    <span class="relative z-10">Fitur</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/30 to-pink-500/30 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 ease-out"></div>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-purple-400 to-pink-400 group-hover:w-full transition-all duration-300 ease-out"></div>
                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 group-hover:-translate-y-1 transition-all duration-300">
                        <div class="w-2 h-2 bg-purple-400 rounded-full animate-bounce"></div>
                    </div>
                </a>
                
                <a href="#cara-kerja" class="nav-link-floating text-white/80 hover:text-white transition-all duration-300 text-base font-medium relative group px-4 py-2">
                    <span class="relative z-10">Cara Kerja</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-green-500/30 to-blue-500/30 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 ease-out"></div>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-green-400 to-blue-400 group-hover:w-full transition-all duration-300 ease-out"></div>
                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 group-hover:-translate-y-1 transition-all duration-300">
                        <div class="w-2 h-2 bg-green-400 rounded-full animate-bounce"></div>
                    </div>
                </a>
                
                <a href="#testimoni" class="nav-link-floating text-white/80 hover:text-white transition-all duration-300 text-base font-medium relative group px-4 py-2">
                    <span class="relative z-10">Testimoni</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/30 to-orange-500/30 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 ease-out"></div>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-yellow-400 to-orange-400 group-hover:w-full transition-all duration-300 ease-out"></div>
                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 group-hover:-translate-y-1 transition-all duration-300">
                        <div class="w-2 h-2 bg-yellow-400 rounded-full animate-bounce"></div>
                    </div>
                </a>
            </div>

            <!-- Enhanced Floating CTA Buttons -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="{{ route('login') }}" 
                   class="text-white/80 hover:text-white transition-all duration-300 px-4 py-2 rounded-xl hover:bg-white/10 text-base font-medium relative group overflow-hidden">
                    <span class="relative z-10">Masuk</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-white/5 to-white/10 scale-0 group-hover:scale-100 transition-transform duration-300 rounded-xl"></div>
                </a>
                <a href="{{ route('register') }}" 
                   class="gradient-bg text-white px-5 py-2 rounded-xl font-semibold hover:scale-105 transition-all duration-300 neon-glow text-base relative group overflow-hidden">
                    <span class="relative z-10">Mulai Kerja</span>
                    <!-- Animated Gradient Background -->
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 via-blue-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300 animate-gradient-x"></div>
                    <!-- Sparkle Effect -->
                    <div class="absolute top-1 right-1 w-1 h-1 bg-white rounded-full opacity-0 group-hover:opacity-100 animate-ping"></div>
                    <div class="absolute bottom-1 left-1 w-1 h-1 bg-white rounded-full opacity-0 group-hover:opacity-100 animate-ping" style="animation-delay: 0.5s;"></div>
                </a>
            </div>

            <!-- Enhanced Floating Mobile menu button -->
            <div class="md:hidden">
                <button @click="floatingMobileMenuOpen = !floatingMobileMenuOpen" 
                        class="text-white/80 hover:text-white transition-all duration-300 p-2 relative group">
                    <div class="w-6 h-6 relative">
                        <span class="absolute top-0 left-0 w-full h-0.5 bg-current transform transition-all duration-300 group-hover:rotate-45 group-hover:top-2.5"></span>
                        <span class="absolute top-2.5 left-0 w-full h-0.5 bg-current transition-all duration-300 group-hover:opacity-0"></span>
                        <span class="absolute top-5 left-0 w-full h-0.5 bg-current transform transition-all duration-300 group-hover:-rotate-45 group-hover:top-2.5"></span>
                    </div>
                    <!-- Button Glow -->
                    <div class="absolute inset-0 bg-white/10 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300"></div>
                </button>
            </div>
        </div>

        <!-- Enhanced Floating Mobile Menu -->
        <div x-show="floatingMobileMenuOpen" 
             x-data="{ floatingMobileMenuOpen: false }"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform -translate-y-4 scale-95"
             x-transition:enter-end="opacity-100 transform translate-y-0 scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 transform translate-y-0 scale-100"
             x-transition:leave-end="opacity-0 transform -translate-y-4 scale-95"
             class="md:hidden mt-4 pt-4 border-t border-white/20 relative">
            <div class="absolute inset-0 bg-gradient-to-b from-white/10 to-transparent rounded-lg"></div>
            
            <div class="flex flex-col space-y-4 relative z-10">
                <a href="#beranda" class="text-white/80 hover:text-white transition-all duration-300 py-2 text-base relative group pl-4">
                    <span class="relative z-10">Beranda</span>
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-blue-400 to-purple-400 scale-y-0 group-hover:scale-y-100 transition-transform duration-300 origin-top"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded"></div>
                </a>
                <a href="#fitur" class="text-white/80 hover:text-white transition-all duration-300 py-2 text-base relative group pl-4">
                    <span class="relative z-10">Fitur</span>
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-purple-400 to-pink-400 scale-y-0 group-hover:scale-y-100 transition-transform duration-300 origin-top"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded"></div>
                </a>
                <a href="#cara-kerja" class="text-white/80 hover:text-white transition-all duration-300 py-2 text-base relative group pl-4">
                    <span class="relative z-10">Cara Kerja</span>
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-green-400 to-blue-400 scale-y-0 group-hover:scale-y-100 transition-transform duration-300 origin-top"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-green-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded"></div>
                </a>
                <a href="#testimoni" class="text-white/80 hover:text-white transition-all duration-300 py-2 text-base relative group pl-4">
                    <span class="relative z-10">Testimoni</span>
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-yellow-400 to-orange-400 scale-y-0 group-hover:scale-y-100 transition-transform duration-300 origin-top"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded"></div>
                </a>
                <div class="flex flex-col space-y-3 pt-6 border-t border-white/20">
                    <a href="{{ route('login') }}" class="text-white/80 hover:text-white transition-all duration-300 py-3 text-lg relative group">
                        <span class="relative z-10">Masuk</span>
                        <div class="absolute inset-0 bg-white/10 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded"></div>
                    </a>
                    <a href="{{ route('register') }}" class="gradient-bg text-white px-6 py-3 rounded-xl text-center font-semibold text-lg relative group overflow-hidden">
                        <span class="relative z-10">Mulai Kerja</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 via-blue-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300 animate-gradient-x"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
    /* ===== ENHANCED NAVBAR ANIMATIONS ===== */
    
    /* Gradient Animations */
    @keyframes gradient-x {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    
    @keyframes border-flow {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    
    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }
    
    @keyframes spin-slow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    .animate-gradient-x {
        background-size: 200% 200%;
        animation: gradient-x 3s ease infinite;
    }
    
    .animate-border-flow {
        background-size: 200% 200%;
        animation: border-flow 4s ease infinite;
    }
    
    .animate-shimmer {
        animation: shimmer 3s ease-in-out infinite;
    }
    
    .animate-spin-slow {
        animation: spin-slow 3s linear infinite;
    }

    /* ===== NAVBAR PARTICLES ===== */
    .navbar-particles {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    
    .navbar-particle {
        position: absolute;
        width: 2px;
        height: 2px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        animation: navbar-particle-float 4s ease-in-out infinite;
    }
    
    @keyframes navbar-particle-float {
        0%, 100% {
            transform: translateY(0px) translateX(0px);
            opacity: 0.3;
        }
        50% {
            transform: translateY(-10px) translateX(10px);
            opacity: 0.8;
        }
    }

    /* ===== FLOATING NAVBAR PARTICLES ===== */
    .floating-navbar-particles {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    
    .floating-navbar-particle {
        position: absolute;
        width: 3px;
        height: 3px;
        background: rgba(255, 255, 255, 0.4);
        border-radius: 50%;
        animation: floating-particle-move 6s ease-in-out infinite;
    }
    
    @keyframes floating-particle-move {
        0%, 100% {
            transform: translateY(0px) translateX(0px) scale(1);
            opacity: 0.4;
        }
        25% {
            transform: translateY(-8px) translateX(8px) scale(1.2);
            opacity: 0.8;
        }
        50% {
            transform: translateY(-4px) translateX(-4px) scale(0.8);
            opacity: 0.6;
        }
        75% {
            transform: translateY(-12px) translateX(12px) scale(1.1);
            opacity: 0.9;
        }
    }

    /* ===== ENHANCED GLASSMORPHISM ===== */
    .glass-effect {
        background: rgba(0, 0, 0, 0.25);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 
            0 8px 32px rgba(0, 0, 0, 0.3),
            inset 0 1px 0 rgba(255, 255, 255, 0.1),
            inset 0 -1px 0 rgba(255, 255, 255, 0.05);
    }

    /* ===== ENHANCED GRADIENT BACKGROUNDS ===== */
    .gradient-bg {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        position: relative;
        overflow: hidden;
    }
    
    .gradient-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .gradient-bg:hover::before {
        opacity: 1;
    }

    /* ===== ENHANCED GRADIENT TEXT ===== */
    .gradient-text {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
        background-size: 200% 200%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: gradient-x 3s ease infinite;
    }

    /* ===== ENHANCED NEON GLOW ===== */
    .neon-glow {
        box-shadow: 
            0 0 5px rgba(102, 126, 234, 0.5),
            0 0 10px rgba(102, 126, 234, 0.3),
            0 0 15px rgba(102, 126, 234, 0.2),
            0 0 20px rgba(102, 126, 234, 0.1);
        transition: all 0.3s ease;
    }
    
    .neon-glow:hover {
        box-shadow: 
            0 0 10px rgba(102, 126, 234, 0.8),
            0 0 20px rgba(102, 126, 234, 0.6),
            0 0 30px rgba(102, 126, 234, 0.4),
            0 0 40px rgba(102, 126, 234, 0.2);
    }

    /* ===== FLOATING NAVBAR SHOW/HIDE ===== */
    .floating-navbar.show {
        transform: translateY(0);
        opacity: 1;
    }
    
    .floating-navbar.hide {
        transform: translateY(-100%);
        opacity: 0;
    }

    /* ===== ACTIVE NAVIGATION STATES ===== */
    .nav-link-enhanced.active {
        color: white;
    }
    
    .nav-link-enhanced.active::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, #667eea, #764ba2);
        border-radius: 1px;
    }
    
    .nav-link-floating.active {
        color: white;
    }
    
    .nav-link-floating.active::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, #667eea, #764ba2);
        border-radius: 1px;
    }

    /* ===== RESPONSIVE ENHANCEMENTS ===== */
    @media (max-width: 768px) {
        .navbar-particle,
        .floating-navbar-particle {
            display: none;
        }
        
        .glass-effect {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
    }

    /* ===== SMOOTH SCROLL ===== */
    html {
        scroll-behavior: smooth;
    }
    
    /* ===== CUSTOM SCROLLBAR ===== */
    ::-webkit-scrollbar {
        width: 8px;
    }
    
    ::-webkit-scrollbar-track {
        background: rgba(0, 0, 0, 0.1);
    }
    
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, #667eea, #764ba2);
        border-radius: 4px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(135deg, #764ba2, #f093fb);
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ===== FLOATING NAVBAR SCROLL BEHAVIOR =====
    const staticNavbar = document.getElementById('static-navbar');
    const floatingNavbar = document.getElementById('floating-navbar');
    let lastScrollTop = 0;
    let scrollTimeout;

    function handleScroll() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const scrollDirection = scrollTop > lastScrollTop ? 'down' : 'up';
        
        // Show floating navbar when scrolling down past 100px
        if (scrollTop > 100) {
            floatingNavbar.classList.add('show');
            floatingNavbar.classList.remove('hide');
            
            // Hide static navbar when floating is visible
            staticNavbar.style.transform = 'translateY(-100%)';
        } else {
            floatingNavbar.classList.remove('show');
            floatingNavbar.classList.add('hide');
            
            // Show static navbar when at top
            staticNavbar.style.transform = 'translateY(0)';
        }
        
        // Auto-hide floating navbar when scrolling down
        if (scrollDirection === 'down' && scrollTop > 200) {
            floatingNavbar.style.transform = 'translateY(-100%)';
        } else if (scrollDirection === 'up' && scrollTop > 100) {
            floatingNavbar.style.transform = 'translateY(0)';
        }
        
        lastScrollTop = scrollTop;
        
        // Clear timeout and set new one
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
            if (scrollTop > 100) {
                floatingNavbar.style.transform = 'translateY(0)';
            }
        }, 150);
    }

    // Throttled scroll event
    let ticking = false;
    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(handleScroll);
            ticking = true;
            setTimeout(() => { ticking = false; }, 16);
        }
    }
    
    window.addEventListener('scroll', requestTick);

    // ===== ACTIVE NAVIGATION HIGHLIGHTING =====
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link-enhanced, .nav-link-floating');

    function highlightActiveSection() {
        const scrollPos = window.scrollY + 100;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            
            if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }

    window.addEventListener('scroll', highlightActiveSection);

    // ===== SMOOTH SCROLL FOR NAVIGATION LINKS =====
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            
            if (targetSection) {
                const offsetTop = targetSection.offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ===== MOBILE MENU CLOSE ON LINK CLICK =====
    const mobileLinks = document.querySelectorAll('.md\\:hidden a[href^="#"]');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            // Close mobile menus
            const mobileMenus = document.querySelectorAll('[x-data*="mobileMenuOpen"]');
            mobileMenus.forEach(menu => {
                menu.__x.$data.mobileMenuOpen = false;
            });
            
            const floatingMobileMenus = document.querySelectorAll('[x-data*="floatingMobileMenuOpen"]');
            floatingMobileMenus.forEach(menu => {
                menu.__x.$data.floatingMobileMenuOpen = false;
            });
        });
    });

    // ===== NAVBAR BACKGROUND BLUR ON SCROLL =====
    function updateNavbarBlur() {
        const scrollPercent = Math.min(window.scrollY / 200, 1);
        const blurAmount = scrollPercent * 20;
        
        staticNavbar.style.backdropFilter = `blur(${blurAmount}px)`;
        staticNavbar.style.webkitBackdropFilter = `blur(${blurAmount}px)`;
        
        const bgOpacity = 0.2 + (scrollPercent * 0.3);
        staticNavbar.querySelector('div').style.backgroundColor = `rgba(0, 0, 0, ${bgOpacity})`;
    }

    window.addEventListener('scroll', updateNavbarBlur);

    // ===== INITIALIZE =====
    highlightActiveSection();
    updateNavbarBlur();
});
</script>
