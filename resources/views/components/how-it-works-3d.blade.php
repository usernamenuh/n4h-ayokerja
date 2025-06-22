<section id="cara-kerja" class="py-20 relative overflow-hidden bg-black">
    <!-- Enhanced Animated Background -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Gradient Overlay Base -->
        <div class="absolute inset-0 bg-gradient-to-br from-purple-900/20 via-black to-blue-900/20"></div>
        
        <!-- Large Floating Orbs with Complex Animations -->
        <div class="floating-orb orb-1"></div>
        <div class="floating-orb orb-2"></div>
        <div class="floating-orb orb-3"></div>
        <div class="floating-orb orb-4"></div>
        <div class="floating-orb orb-5"></div>
        
        <!-- Animated Grid Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="grid-pattern"></div>
        </div>
        
        <!-- Flowing Particles -->
        <div class="particles-container">
            @for ($i = 0; $i < 30; $i++)
                <div class="flowing-particle" style="
                    left: {{ rand(0, 100) }}%; 
                    top: {{ rand(0, 100) }}%; 
                    animation-delay: {{ rand(0, 8000) }}ms;
                    animation-duration: {{ rand(6000, 12000) }}ms;
                "></div>
            @endfor
        </div>
        
        <!-- Geometric Shapes -->
        <div class="geometric-shapes">
            <div class="shape triangle-1"></div>
            <div class="shape triangle-2"></div>
            <div class="shape circle-1"></div>
            <div class="shape circle-2"></div>
            <div class="shape hexagon-1"></div>
        </div>
        
        <!-- Connecting Lines with Flow Animation -->
        <div class="connection-lines">
            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 1200 800" fill="none">
                <path class="animated-path path-1" d="M100,400 Q300,200 500,400 T900,400" stroke="url(#gradient1)" stroke-width="2" fill="none" opacity="0.3"/>
                <path class="animated-path path-2" d="M200,600 Q400,300 600,500 T1000,300" stroke="url(#gradient2)" stroke-width="2" fill="none" opacity="0.3"/>
                <path class="animated-path path-3" d="M50,200 Q350,500 650,200 T1150,500" stroke="url(#gradient3)" stroke-width="2" fill="none" opacity="0.3"/>
                
                <defs>
                    <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:0" />
                        <stop offset="50%" style="stop-color:#8b5cf6;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#ec4899;stop-opacity:0" />
                    </linearGradient>
                    <linearGradient id="gradient2" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#10b981;stop-opacity:0" />
                        <stop offset="50%" style="stop-color:#3b82f6;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:0" />
                    </linearGradient>
                    <linearGradient id="gradient3" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#f59e0b;stop-opacity:0" />
                        <stop offset="50%" style="stop-color:#ec4899;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#10b981;stop-opacity:0" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
        
        <!-- Floating Icons with Glow -->
        <div class="floating-icons">
            <div class="floating-icon icon-1">
                <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="floating-icon icon-2">
                <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
            <div class="floating-icon icon-3">
                <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2"></path>
                </svg>
            </div>
            <div class="floating-icon icon-4">
                <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </div>
            <div class="floating-icon icon-5">
                <svg class="w-6 h-6 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
        </div>
        
        <!-- Pulsing Dots -->
        <div class="pulsing-dots">
            @for ($i = 0; $i < 15; $i++)
                <div class="pulsing-dot" style="
                    left: {{ rand(5, 95) }}%; 
                    top: {{ rand(5, 95) }}%; 
                    animation-delay: {{ rand(0, 4000) }}ms;
                "></div>
            @endfor
        </div>
        
        <!-- Radial Gradients -->
        <div class="radial-gradient radial-1"></div>
        <div class="radial-gradient radial-2"></div>
        <div class="radial-gradient radial-3"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Enhanced Section Header -->
        <div class="text-center mb-20 fade-in-up">
            <div class="inline-flex items-center space-x-2 bg-gradient-to-r from-purple-600/20 to-blue-600/20 backdrop-blur-xl border border-white/20 rounded-full px-6 py-3 text-white/80 text-sm font-medium mb-6">
                <div class="w-2 h-2 bg-green-400 rounded-full animate-ping"></div>
                <span>🚀 Proses Super Mudah dalam 3 Langkah</span>
            </div>
            
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-gradient-text">
                Cara Kerja <span class="bg-gradient-to-r from-green-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">AyoKerja</span> - Dual Platform
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed mb-8">
                Mulai karir profesional dan earning online dalam 3 langkah sederhana. 
                <span class="bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent font-semibold">Ratusan ribu orang sudah membuktikannya!</span>
            </p>
            
            <!-- Success Stats -->
            <div class="flex flex-wrap justify-center items-center gap-6 text-white/60 text-sm">
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-white">95% Success Rate</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-white">Rata-rata 7 hari dapat kerja</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-white">Earning pertama dalam 24 jam</span>
                </div>
            </div>
        </div>

        <!-- Enhanced Steps with Progress Indicator -->
        <div class="relative mb-16">
            <!-- Progress Bar -->
            <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-1 transform -translate-y-1/2 z-0">
                <div class="w-full h-full bg-white/10 rounded-full">
                    <div class="h-full bg-gradient-to-r from-blue-500 via-purple-500 to-green-500 rounded-full progress-bar" style="width: 0%;"></div>
                </div>
            </div>
            
            <div class="grid lg:grid-cols-3 gap-12 relative z-10">
                <!-- Enhanced Step 1 -->
                <div class="text-center relative group" data-aos="fade-up" data-aos-delay="0">
                    <!-- Step Number with Animation -->
                    <div class="w-24 h-24 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-8 relative z-10 shadow-lg shadow-blue-500/50 group-hover:scale-110 transition-all duration-300">
                        <span class="text-3xl font-bold text-white">1</span>
                        <div class="absolute inset-0 rounded-full bg-gradient-to-r from-blue-400 to-purple-400 opacity-0 group-hover:opacity-30 transition-opacity duration-300 animate-ping"></div>
                    </div>
                    
                    <!-- Enhanced Card -->
                    <div class="bg-white/5 backdrop-blur-lg rounded-3xl p-8 border border-white/10 hover:border-purple-400/30 transition-all duration-500 group-hover:scale-105 hover:shadow-2xl hover:shadow-purple-500/20">
                        <div class="w-16 h-16 bg-blue-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-500/30 transition-colors duration-300">
                            <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Daftar & Pilih Mode</h3>
                        <p class="text-white/70 leading-relaxed mb-6">
                            Buat profil profesional dan pilih sebagai job seeker, task worker, atau keduanya untuk memaksimalkan peluang
                        </p>
                        
                        <!-- Time Indicator -->
                        <div class="flex items-center justify-center space-x-2 text-green-400 text-sm font-medium mb-4">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>⏱️ Hanya 5 menit</span>
                        </div>
                        
                        <!-- Features List -->
                        <div class="space-y-2 text-white/60 text-sm">
                            <div class="flex items-center space-x-2">
                                <svg class="w-3 h-3 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Verifikasi otomatis</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-3 h-3 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>CV builder gratis</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-3 h-3 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Skill assessment</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Step 2 -->
                <div class="text-center relative group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-24 h-24 bg-gradient-to-r from-purple-500 to-green-500 rounded-full flex items-center justify-center mx-auto mb-8 relative z-10 shadow-lg shadow-purple-500/50 group-hover:scale-110 transition-all duration-300">
                        <span class="text-3xl font-bold text-white">2</span>
                        <div class="absolute inset-0 rounded-full bg-gradient-to-r from-purple-400 to-green-400 opacity-0 group-hover:opacity-30 transition-opacity duration-300 animate-ping"></div>
                    </div>
                    
                    <div class="bg-white/5 backdrop-blur-lg rounded-3xl p-8 border border-white/10 hover:border-green-400/30 transition-all duration-500 group-hover:scale-105 hover:shadow-2xl hover:shadow-green-500/20">
                        <div class="w-16 h-16 bg-green-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-green-500/30 transition-colors duration-300">
                            <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Cari Kerja & Tugas</h3>
                        <p class="text-white/70 leading-relaxed mb-6">
                            Browse lowongan kerja full-time dan tugas online part-time. Apply untuk posisi impian dan ambil tugas sesuai waktu luang
                        </p>
                        
                        <div class="flex items-center justify-center space-x-2 text-blue-400 text-sm font-medium mb-4">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span>⚡ AI matching system</span>
                        </div>
                        
                        <div class="space-y-2 text-white/60 text-sm">
                            <div class="flex items-center space-x-2">
                                <svg class="w-3 h-3 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>100K+ lowongan aktif</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-3 h-3 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Filter cerdas</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-3 h-3 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>One-click apply</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Step 3 -->
                <div class="text-center relative group" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-24 h-24 bg-gradient-to-r from-green-500 to-yellow-500 rounded-full flex items-center justify-center mx-auto mb-8 relative z-10 shadow-lg shadow-green-500/50 group-hover:scale-110 transition-all duration-300">
                        <span class="text-3xl font-bold text-white">3</span>
                        <div class="absolute inset-0 rounded-full bg-gradient-to-r from-green-400 to-yellow-400 opacity-0 group-hover:opacity-30 transition-opacity duration-300 animate-ping"></div>
                    </div>
                    
                    <div class="bg-white/5 backdrop-blur-lg rounded-3xl p-8 border border-white/10 hover:border-yellow-400/30 transition-all duration-500 group-hover:scale-105 hover:shadow-2xl hover:shadow-yellow-500/20">
                        <div class="w-16 h-16 bg-purple-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-purple-500/30 transition-colors duration-300">
                            <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Dapatkan Gaji & Earnings</h3>
                        <p class="text-white/70 leading-relaxed mb-6">
                            Terima gaji bulanan dari pekerjaan dan pembayaran per tugas yang diselesaikan langsung ke rekening Anda
                        </p>
                        
                        <div class="flex items-center justify-center space-x-2 text-yellow-400 text-sm font-medium mb-4">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <span>💰 Pembayaran aman & cepat</span>
                        </div>
                        
                        <div class="space-y-2 text-white/60 text-sm">
                            <div class="flex items-center space-x-2">
                                <svg class="w-3 h-3 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Transfer dalam 24 jam</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-3 h-3 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Sistem escrow</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-3 h-3 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Multi payment method</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Dual Mode Benefits -->
        <div class="grid md:grid-cols-2 gap-8 mb-16" data-aos="fade-up" data-aos-delay="600">
            <!-- Job Seeker Mode -->
            <div class="bg-white/5 backdrop-blur-lg rounded-3xl p-8 text-center border border-white/10 hover:border-blue-400/30 transition-all duration-500 group hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/20">
                <div class="w-20 h-20 bg-blue-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-blue-500/50">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                    </svg>
                </div>
                <h4 class="text-2xl font-bold text-white mb-4">Mode Job Seeker</h4>
                <p class="text-white/70 mb-6">Cari pekerjaan full-time dengan gaji tetap, benefit, dan jenjang karir yang jelas</p>
                
                <!-- Benefits -->
                <div class="space-y-3 text-left">
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 bg-blue-500/20 rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="text-white/80">Gaji Rp 5-50 juta/bulan</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 bg-blue-500/20 rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="text-white/80">BPJS & Asuransi</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 bg-blue-500/20 rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="text-white/80">Career development</span>
                    </div>
                </div>
            </div>

            <!-- Task Worker Mode -->
            <div class="bg-white/5 backdrop-blur-lg rounded-3xl p-8 text-center border border-white/10 hover:border-purple-400/30 transition-all duration-500 group hover:scale-105 hover:shadow-2xl hover:shadow-purple-500/20">
                <div class="w-20 h-20 bg-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-purple-500/50">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h4 class="text-2xl font-bold text-white mb-4">Mode Task Worker</h4>
                <p class="text-white/70 mb-6">Kerjakan tugas online fleksibel untuk penghasilan tambahan di waktu luang</p>
                
                <div class="space-y-3 text-left">
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 bg-purple-500/20 rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="text-white/80">Earning Rp 50k-5 juta/bulan</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 bg-purple-500/20 rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="text-white/80">Waktu fleksibel</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 bg-purple-500/20 rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="text-white/80">Skill building</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* ===== FLOATING ORBS ===== */
        .floating-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(40px);
            animation: complexFloat 15s ease-in-out infinite;
        }

        .orb-1 {
            top: 10%;
            left: 10%;
            width: 300px;
            height: 300px;
            background: linear-gradient(45deg, #3b82f6, #8b5cf6);
            opacity: 0.15;
            animation-delay: 0s;
        }

        .orb-2 {
            top: 60%;
            right: 15%;
            width: 250px;
            height: 250px;
            background: linear-gradient(45deg, #10b981, #3b82f6);
            opacity: 0.12;
            animation-delay: -5s;
        }

        .orb-3 {
            bottom: 20%;
            left: 20%;
            width: 200px;
            height: 200px;
            background: linear-gradient(45deg, #ec4899, #f59e0b);
            opacity: 0.1;
            animation-delay: -10s;
        }

        .orb-4 {
            top: 30%;
            right: 40%;
            width: 180px;
            height: 180px;
            background: linear-gradient(45deg, #8b5cf6, #ec4899);
            opacity: 0.08;
            animation-delay: -7s;
        }

        .orb-5 {
            bottom: 40%;
            left: 60%;
            width: 220px;
            height: 220px;
            background: linear-gradient(45deg, #f59e0b, #10b981);
            opacity: 0.1;
            animation-delay: -12s;
        }

        @keyframes complexFloat {
            0%, 100% {
                transform: translate(0px, 0px) scale(1) rotate(0deg);
            }
            25% {
                transform: translate(30px, -50px) scale(1.1) rotate(90deg);
            }
            50% {
                transform: translate(-20px, 20px) scale(0.9) rotate(180deg);
            }
            75% {
                transform: translate(50px, 10px) scale(1.05) rotate(270deg);
            }
        }

        /* ===== GRID PATTERN ===== */
        .grid-pattern {
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: gridMove 20s linear infinite;
        }

        @keyframes gridMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        /* ===== FLOWING PARTICLES ===== */
        .particles-container {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .flowing-particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            animation: flowParticle 10s linear infinite;
        }

        @keyframes flowParticle {
            0% {
                transform: translateY(100vh) translateX(0) scale(0);
                opacity: 0;
            }
            10% {
                opacity: 1;
                transform: scale(1);
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) translateX(100px) scale(0);
                opacity: 0;
            }
        }

        /* ===== GEOMETRIC SHAPES ===== */
        .geometric-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .shape {
            position: absolute;
            opacity: 0.1;
            animation: shapeFloat 12s ease-in-out infinite;
        }

        .triangle-1 {
            top: 15%;
            left: 80%;
            width: 0;
            height: 0;
            border-left: 25px solid transparent;
            border-right: 25px solid transparent;
            border-bottom: 43px solid #3b82f6;
            animation-delay: -2s;
        }

        .triangle-2 {
            bottom: 25%;
            right: 10%;
            width: 0;
            height: 0;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-bottom: 35px solid #ec4899;
            animation-delay: -6s;
        }

        .circle-1 {
            top: 70%;
            left: 5%;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #10b981;
            animation-delay: -4s;
        }

        .circle-2 {
            top: 25%;
            right: 25%;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #f59e0b;
            animation-delay: -8s;
        }

        .hexagon-1 {
            bottom: 15%;
            left: 40%;
            width: 30px;
            height: 17px;
            background: #8b5cf6;
            position: relative;
            animation-delay: -10s;
        }

        .hexagon-1:before,
        .hexagon-1:after {
            content: "";
            position: absolute;
            width: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
        }

        .hexagon-1:before {
            bottom: 100%;
            border-bottom: 8.5px solid #8b5cf6;
        }

        .hexagon-1:after {
            top: 100%;
            border-top: 8.5px solid #8b5cf6;
        }

        @keyframes shapeFloat {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(180deg); }
        }

        /* ===== ANIMATED PATHS ===== */
        .animated-path {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: drawPath 8s ease-in-out infinite;
        }

        .path-1 { animation-delay: 0s; }
        .path-2 { animation-delay: -2s; }
        .path-3 { animation-delay: -4s; }

        @keyframes drawPath {
            0%, 100% { stroke-dashoffset: 1000; }
            50% { stroke-dashoffset: 0; }
        }

        /* ===== FLOATING ICONS ===== */
        .floating-icons {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .floating-icon {
            position: absolute;
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: iconFloat 8s ease-in-out infinite;
        }

        .icon-1 {
            top: 20%;
            left: 15%;
            animation-delay: 0s;
        }

        .icon-2 {
            top: 60%;
            right: 20%;
            animation-delay: -2s;
        }

        .icon-3 {
            bottom: 30%;
            left: 25%;
            animation-delay: -4s;
        }

        .icon-4 {
            top: 40%;
            right: 40%;
            animation-delay: -6s;
        }

        .icon-5 {
            bottom: 20%;
            right: 15%;
            animation-delay: -8s;
        }

        @keyframes iconFloat {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }
            50% {
                transform: translateY(-20px) rotate(180deg);
                box-shadow: 0 15px 30px rgba(0,0,0,0.2);
            }
        }

        /* ===== PULSING DOTS ===== */
        .pulsing-dots {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .pulsing-dot {
            position: absolute;
            width: 6px;
            height: 6px;
            background: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            animation: pulseDot 3s ease-in-out infinite;
        }

        @keyframes pulseDot {
            0%, 100% {
                transform: scale(1);
                opacity: 0.4;
            }
            50% {
                transform: scale(2);
                opacity: 1;
            }
        }

        /* ===== RADIAL GRADIENTS ===== */
        .radial-gradient {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            animation: radialPulse 10s ease-in-out infinite;
        }

        .radial-1 {
            top: 20%;
            left: 30%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, transparent 70%);
            animation-delay: 0s;
        }

        .radial-2 {
            bottom: 30%;
            right: 20%;
            width: 350px;
            height: 350px;
            background: radial-gradient(circle, rgba(139, 92, 246, 0.1) 0%, transparent 70%);
            animation-delay: -3s;
        }

        .radial-3 {
            top: 60%;
            left: 10%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.1) 0%, transparent 70%);
            animation-delay: -6s;
        }

        @keyframes radialPulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.1;
            }
            50% {
                transform: scale(1.2);
                opacity: 0.2;
            }
        }

        /* ===== FADE IN UP ===== */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease-out 0.3s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ===== GRADIENT TEXT ===== */
        .animate-gradient-text {
            background: linear-gradient(-45deg, #ffffff, #60a5fa, #a78bfa, #ffffff);
            background-size: 400% 400%;
            animation: gradientShift 3s ease infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        /* ===== PROGRESS BAR ===== */
        .progress-bar {
            transition: width 2s ease-in-out;
        }

        /* ===== AOS ANIMATIONS ===== */
        .aos-init[data-aos] {
            opacity: 0;
            transform: translateY(50px);
        }

        .aos-animate[data-aos] {
            opacity: 1;
            transform: translateY(0);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .floating-orb {
                width: 150px !important;
                height: 150px !important;
            }
            
            .floating-icon {
                width: 32px;
                height: 32px;
            }
            
            .floating-icon svg {
                width: 16px;
                height: 16px;
            }
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Progress bar animation
            function initProgressBar() {
                const progressBar = document.querySelector('.progress-bar');
                if (!progressBar) return;
                
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            setTimeout(() => {
                                progressBar.style.width = '100%';
                            }, 500);
                        }
                    });
                });
                
                observer.observe(progressBar.parentElement);
            }

            // AOS Animation
            const observerOptions = {
                threshold: 0.1,
                rootMargin: "0px 0px -50px 0px",
            }

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const delay = entry.target.getAttribute("data-aos-delay") || 0
                        setTimeout(() => {
                            entry.target.classList.add("aos-animate")
                        }, delay)
                    }
                })
            }, observerOptions)

            document.querySelectorAll("[data-aos]").forEach((el) => {
                observer.observe(el)
            })

            // Initialize
            initProgressBar();
        });
    </script>
</section>
