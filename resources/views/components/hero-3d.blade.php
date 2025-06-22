<section id="beranda" class="hero-3d min-h-screen flex items-center justify-center relative">
    <!-- Top Announcement Banner -->
    <div class="absolute top-20 left-0 right-0 z-30 pointer-events-none">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="inline-flex items-center space-x-2 bg-gradient-to-r from-purple-600/20 to-blue-600/20 backdrop-blur-xl border border-white/20 rounded-full px-6 py-3 text-white/80 text-sm font-medium animate-pulse">
                    <div class="w-2 h-2 bg-green-400 rounded-full animate-ping"></div>
                    <span>🔥 Lebih dari 1000+ lowongan baru minggu ini!</span>
                    <div class="w-2 h-2 bg-blue-400 rounded-full animate-ping"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- 3D Canvas Background -->
    <canvas id="three-canvas"></canvas>
    
    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 opacity-5 pointer-events-none">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>

    <!-- Floating Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Additional Top Decorative Elements -->
        <div class="absolute top-32 left-1/4 w-16 h-16 bg-yellow-500 opacity-20 rounded-full animate-bounce" style="animation-delay: -1s;"></div>
        <div class="absolute top-40 right-1/3 w-12 h-12 bg-green-500 opacity-15 rounded-full animate-bounce" style="animation-delay: -2s;"></div>
        <div class="absolute top-28 right-1/4 w-8 h-8 bg-pink-500 opacity-25 rounded-full animate-bounce" style="animation-delay: -0.5s;"></div>

        <!-- Floating Icons in Top Area -->
        <div class="absolute top-36 left-1/6 floating-card opacity-40">
            <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center backdrop-blur-sm border border-white/20">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                </svg>
            </div>
        </div>

        <div class="absolute top-44 right-1/6 floating-card opacity-40" style="animation-delay: -1s;">
            <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center backdrop-blur-sm border border-white/20">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                </svg>
            </div>
        </div>

        <div class="absolute top-32 left-1/2 floating-card opacity-40" style="animation-delay: -2s;">
            <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center backdrop-blur-sm border border-white/20">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
        </div>

        <!-- Geometric Wireframe Elements -->
        <div class="absolute top-36 left-1/3 opacity-20">
            <div class="w-20 h-20 border border-white/30 rounded-lg transform rotate-12 animate-spin" style="animation-duration: 20s;"></div>
        </div>

        <div class="absolute top-28 right-1/5 opacity-15">
            <div class="w-16 h-16 border-2 border-purple-400/50 rounded-full animate-pulse"></div>
        </div>

        <!-- Floating Text Elements -->
        <div class="absolute top-40 left-1/5 floating-card opacity-60">
            <div class="text-white/60 text-xs font-medium bg-white/5 px-3 py-1 rounded-full backdrop-blur-sm border border-white/10">
                💼 Remote Work
            </div>
        </div>

        <div class="absolute top-48 right-1/4 floating-card opacity-60" style="animation-delay: -1.5s;">
            <div class="text-white/60 text-xs font-medium bg-white/5 px-3 py-1 rounded-full backdrop-blur-sm border border-white/10">
                💰 High Salary
            </div>
        </div>

        <div class="absolute top-34 right-1/2 floating-card opacity-60" style="animation-delay: -0.8s;">
            <div class="text-white/60 text-xs font-medium bg-white/5 px-3 py-1 rounded-full backdrop-blur-sm border border-white/10">
                ⚡ Fast Hiring
            </div>
        </div>
        <div class="absolute top-20 left-10 w-64 h-64 gradient-bg opacity-20 rounded-full morphing-blob parallax-element" data-speed="0.3"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-600 opacity-10 rounded-full morphing-blob parallax-element" data-speed="0.5" style="animation-delay: -3s;"></div>
        <div class="absolute top-1/2 left-1/4 w-32 h-32 bg-blue-500 opacity-15 rounded-full morphing-blob parallax-element" data-speed="0.7" style="animation-delay: -6s;"></div>
    </div>

    <div class="hero-content max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left Content -->
            <div class="text-center lg:text-left fade-in">
                <h1 class="text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                    <span class="text-white text-glow">Cari Kerja &</span>
                    <br>
                    <span class="typing-text typing-cursor gradient-text">Kerjakan Tugas</span>
                    <br>
                    <span class="gradient-text neon-glow">Online</span>
                </h1>
                
                <p class="text-xl text-white/80 mb-8 leading-relaxed max-w-2xl">
                    Platform terlengkap untuk mencari pekerjaan impian dan mengerjakan tugas online. 
                    Dapatkan gaji tetap plus penghasilan tambahan hingga jutaan rupiah setiap bulannya.
                </p>
                
                <!-- Dual Search Bar -->
                <div class="bg-white/10 backdrop-blur-xl rounded-3xl p-6 mb-8 border border-white/20">
                    <div class="flex flex-col lg:flex-row gap-4 mb-4">
                        <div class="flex-1">
                            <label class="block text-white/80 text-sm mb-2">🔍 Cari Pekerjaan Full-time</label>
                            <input type="text" placeholder="Posisi, perusahaan, atau skill..." 
                                   class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl text-white placeholder-white/60 focus:ring-2 focus:ring-purple-500 focus:border-transparent backdrop-blur-sm">
                        </div>
                        <div class="flex-1">
                            <label class="block text-white/80 text-sm mb-2">💰 Cari Tugas Online</label>
                            <input type="text" placeholder="Data entry, design, writing..." 
                                   class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl text-white placeholder-white/60 focus:ring-2 focus:ring-purple-500 focus:border-transparent backdrop-blur-sm">
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <button class="flex-1 gradient-bg text-white px-6 py-3 rounded-xl font-semibold hover:scale-105 transition-all duration-300 neon-glow">
                            🚀 Cari Pekerjaan
                        </button>
                        <button class="flex-1 bg-white/20 text-white px-6 py-3 rounded-xl font-semibold hover:bg-white/30 transition-all duration-300 border border-white/30">
                            💼 Cari Tugas
                        </button>
                    </div>
                </div>

                <!-- Stats Preview -->
                <div class="grid grid-cols-3 gap-6 mb-8 scale-in">
                    <div class="text-center">
                        <div class="text-3xl font-bold gradient-text">100K+</div>
                        <div class="text-white/60 text-sm">Lowongan Kerja</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold gradient-text">50K+</div>
                        <div class="text-white/60 text-sm">Tugas Tersedia</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold gradient-text">200K+</div>
                        <div class="text-white/60 text-sm">Pengguna Aktif</div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start slide-left">
                    <a href="{{ route('register') }}" 
                       class="gradient-bg text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:scale-105 transition-all duration-300 neon-glow shadow-2xl">
                        🚀 Mulai Cari Kerja & Tugas
                    </a>
                    <a href="#cara-kerja" 
                       class="glass-effect text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:scale-105 transition-all duration-300 border border-white/20">
                        📖 Pelajari Cara Kerja
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="mt-12 flex items-center justify-center lg:justify-start space-x-6 text-white/60 fade-in">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Perusahaan Verified</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Pembayaran Aman</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Dual Income</span>
                    </div>
                </div>
            </div>

            <!-- Right Content - Enhanced 3D Elements & Floating Cards -->
<div class="relative slide-right">
    <div class="relative z-10">
        <!-- Enhanced 3D Work Elements -->
        <div class="w-full max-w-xl mx-auto relative">
            <!-- Main 3D Laptop/Work Scene -->
            <div class="relative bg-gradient-to-br from-purple-600/20 to-blue-600/20 rounded-3xl p-8 backdrop-blur-xl border border-white/20 shadow-2xl">
                <!-- 3D Laptop -->
                <div class="relative mb-6">
                    <div class="w-72 h-44 bg-gray-800 rounded-2xl mx-auto relative overflow-hidden shadow-2xl">
                        <!-- Screen -->
                        <div class="w-full h-36 bg-gradient-to-br from-blue-500 to-purple-600 rounded-t-xl flex items-center justify-center relative overflow-hidden">
                            <!-- Animated Background -->
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent animate-pulse"></div>
                            <div class="text-white text-center relative z-10">
                                <div class="text-2xl font-bold mb-2">AyoKerja</div>
                                <div class="text-sm opacity-90">Live Dashboard</div>
                                <!-- Mini Chart Animation -->
                                <div class="flex justify-center mt-2 space-x-1">
                                    <div class="w-1 h-3 bg-white/60 rounded animate-bounce"></div>
                                    <div class="w-1 h-4 bg-white/80 rounded animate-bounce" style="animation-delay: 0.1s;"></div>
                                    <div class="w-1 h-2 bg-white/60 rounded animate-bounce" style="animation-delay: 0.2s;"></div>
                                    <div class="w-1 h-4 bg-white/70 rounded animate-bounce" style="animation-delay: 0.3s;"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Keyboard -->
                        <div class="w-full h-8 bg-gray-700 rounded-b-xl flex items-center justify-center">
                            <div class="flex space-x-1">
                                <div class="w-1 h-1 bg-gray-500 rounded-full animate-pulse"></div>
                                <div class="w-1 h-1 bg-gray-500 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
                                <div class="w-1 h-1 bg-gray-500 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Organized Floating Cards -->
            <!-- Top Left Card -->
            <div class="absolute -top-4 -left-4 glass-effect rounded-xl p-4 floating-card card-3d shadow-xl z-20">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 gradient-bg rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="text-white font-semibold text-sm">Gaji: Rp 8 Juta</div>
                        <div class="text-white/60 text-xs">Per Bulan</div>
                    </div>
                </div>
            </div>

            <!-- Top Right Card -->
            <div class="absolute -top-4 -right-4 glass-effect rounded-xl p-4 floating-card card-3d shadow-xl z-20">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="text-white font-semibold text-sm">5 Job Offers</div>
                        <div class="text-white/60 text-xs">Menunggu respon</div>
                    </div>
                </div>
            </div>

            <!-- Bottom Left Card -->
            <div class="absolute -bottom-4 -left-4 glass-effect rounded-xl p-4 floating-card card-3d shadow-xl z-20">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="text-white font-semibold text-sm">Top Performer</div>
                        <div class="text-white/60 text-xs">Rating 4.9/5</div>
                    </div>
                </div>
            </div>

            <!-- Bottom Right Card -->
            <div class="absolute -bottom-4 -right-4 glass-effect rounded-xl p-4 floating-card card-3d shadow-xl z-20">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="text-white font-semibold text-sm">25 Tugas</div>
                        <div class="text-white/60 text-xs">Selesai Hari Ini</div>
                    </div>
                </div>
            </div>

            <!-- Center Right Card -->
            <div class="absolute top-1/2 -right-8 transform -translate-y-1/2 glass-effect rounded-xl p-4 floating-card card-3d shadow-xl z-20">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="text-white font-semibold text-sm">Rp 2.5 Juta</div>
                        <div class="text-white/60 text-xs">Total Earning</div>
                    </div>
                </div>
            </div>

            <!-- Decorative 3D Elements -->
            <div class="absolute top-1/4 -left-8 floating-card opacity-60">
                <div class="w-12 h-12 bg-cyan-500 rounded-full flex items-center justify-center shadow-xl">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                    </svg>
                </div>
            </div>

            <div class="absolute bottom-1/4 -right-12 floating-card opacity-60">
                <div class="w-12 h-12 bg-indigo-500 rounded-full flex items-center justify-center shadow-xl">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
            </div>

            <!-- Success Indicator -->
            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-2">
                <div class="flex space-x-1">
                    <div class="w-2 h-2 bg-green-400 rounded-full animate-ping"></div>
                    <div class="w-2 h-2 bg-blue-400 rounded-full animate-ping" style="animation-delay: 0.5s;"></div>
                    <div class="w-2 h-2 bg-purple-400 rounded-full animate-ping" style="animation-delay: 1s;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 fade-in">
        <div class="flex flex-col items-center space-y-2 text-white/60">
            <span class="text-sm">Scroll untuk melihat lebih</span>
            <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white/60 rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>
</section>
