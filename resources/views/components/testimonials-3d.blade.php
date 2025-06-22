<section id="testimoni" class="py-24 relative bg-black" style="overflow: visible !important;">
    <!-- Enhanced Animated Background -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Gradient Overlay Base -->
        <div class="absolute inset-0 bg-gradient-to-br from-pink-900/20 via-black to-purple-900/20"></div>
        
        <!-- Large Floating Orbs with Complex Animations -->
        <div class="floating-orb testimonial-orb-1"></div>
        <div class="floating-orb testimonial-orb-2"></div>
        <div class="floating-orb testimonial-orb-3"></div>
        <div class="floating-orb testimonial-orb-4"></div>
        <div class="floating-orb testimonial-orb-5"></div>
        <div class="floating-orb testimonial-orb-6"></div>
        
        <!-- Animated Grid Pattern -->
        <div class="absolute inset-0 opacity-8">
            <div class="testimonial-grid-pattern"></div>
        </div>
        
        <!-- Flowing Particles -->
        <div class="testimonial-particles-container">
            @for ($i = 0; $i < 35; $i++)
                <div class="testimonial-flowing-particle" style="
                    left: {{ rand(0, 100) }}%; 
                    top: {{ rand(0, 100) }}%; 
                    animation-delay: {{ rand(0, 10000) }}ms;
                    animation-duration: {{ rand(8000, 15000) }}ms;
                "></div>
            @endfor
        </div>
        
        <!-- Testimonial Themed Geometric Shapes -->
        <div class="testimonial-geometric-shapes">
            <div class="testimonial-shape star-1"></div>
            <div class="testimonial-shape star-2"></div>
            <div class="testimonial-shape heart-1"></div>
            <div class="testimonial-shape heart-2"></div>
            <div class="testimonial-shape quote-1"></div>
            <div class="testimonial-shape quote-2"></div>
        </div>
        
        <!-- Connecting Lines with Flow Animation -->
        <div class="testimonial-connection-lines">
            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 1200 800" fill="none">
                <path class="testimonial-animated-path path-1" d="M50,300 Q300,100 550,300 T1050,300" stroke="url(#testimonialGradient1)" stroke-width="2" fill="none" opacity="0.4"/>
                <path class="testimonial-animated-path path-2" d="M150,500 Q400,200 650,400 T1100,200" stroke="url(#testimonialGradient2)" stroke-width="2" fill="none" opacity="0.4"/>
                <path class="testimonial-animated-path path-3" d="M0,400 Q350,600 700,400 T1200,600" stroke="url(#testimonialGradient3)" stroke-width="2" fill="none" opacity="0.4"/>
                <path class="testimonial-animated-path path-4" d="M100,150 Q400,450 700,150 T1100,450" stroke="url(#testimonialGradient4)" stroke-width="2" fill="none" opacity="0.3"/>
                
                <defs>
                    <linearGradient id="testimonialGradient1" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#ec4899;stop-opacity:0" />
                        <stop offset="50%" style="stop-color:#f59e0b;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#10b981;stop-opacity:0" />
                    </linearGradient>
                    <linearGradient id="testimonialGradient2" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#8b5cf6;stop-opacity:0" />
                        <stop offset="50%" style="stop-color:#ec4899;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#f59e0b;stop-opacity:0" />
                    </linearGradient>
                    <linearGradient id="testimonialGradient3" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#10b981;stop-opacity:0" />
                        <stop offset="50%" style="stop-color:#3b82f6;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:0" />
                    </linearGradient>
                    <linearGradient id="testimonialGradient4" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#f59e0b;stop-opacity:0" />
                        <stop offset="50%" style="stop-color:#ec4899;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:0" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
        
        <!-- Floating Testimonial Icons with Glow -->
        <div class="testimonial-floating-icons">
            <div class="testimonial-floating-icon icon-1">
                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                </svg>
            </div>
            <div class="testimonial-floating-icon icon-2">
                <svg class="w-6 h-6 text-pink-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                </svg>
            </div>
            <div class="testimonial-floating-icon icon-3">
                <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="testimonial-floating-icon icon-4">
                <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                </svg>
            </div>
            <div class="testimonial-floating-icon icon-5">
                <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                </svg>
            </div>
            <div class="testimonial-floating-icon icon-6">
                <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
        </div>
        
        <!-- Pulsing Dots -->
        <div class="testimonial-pulsing-dots">
            @for ($i = 0; $i < 20; $i++)
                <div class="testimonial-pulsing-dot" style="
                    left: {{ rand(5, 95) }}%; 
                    top: {{ rand(5, 95) }}%; 
                    animation-delay: {{ rand(0, 5000) }}ms;
                "></div>
            @endfor
        </div>
        
        <!-- Radial Gradients -->
        <div class="testimonial-radial-gradient radial-1"></div>
        <div class="testimonial-radial-gradient radial-2"></div>
        <div class="testimonial-radial-gradient radial-3"></div>
        <div class="testimonial-radial-gradient radial-4"></div>
        
        <!-- Quote Bubbles -->
        <div class="quote-bubbles">
            <div class="quote-bubble bubble-1">"</div>
            <div class="quote-bubble bubble-2">"</div>
            <div class="quote-bubble bubble-3">"</div>
            <div class="quote-bubble bubble-4">"</div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10" style="overflow: visible !important;">
        <!-- Enhanced Section Header -->
        <div class="text-center mb-16 fade-in-up">
            <div class="inline-flex items-center space-x-2 bg-gradient-to-r from-pink-600/20 to-purple-600/20 backdrop-blur-xl border border-white/20 rounded-full px-6 py-3 text-white/80 text-sm font-medium mb-6">
                <div class="w-2 h-2 bg-yellow-400 rounded-full animate-ping"></div>
                <span>⭐ Testimoni Real dari User Aktif</span>
            </div>
            
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-gradient-text">
                Apa Kata <span class="bg-gradient-to-r from-yellow-400 via-pink-400 to-purple-400 bg-clip-text text-transparent">Freelancer Kami</span>?
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Ribuan freelancer telah merasakan kemudahan dan keuntungan bekerja dengan AyoKerja. 
                <span class="bg-gradient-to-r from-green-400 to-blue-400 bg-clip-text text-transparent font-semibold">Success rate 95%!</span>
            </p>
        </div>

        <!-- Enhanced Testimonials Grid dengan Extra Space -->
        <div class="grid md:grid-cols-3 gap-8 mb-24 px-4 py-8" style="overflow: visible !important;">
            <!-- Sarah - Marketing Manager -->
            <div class="testimonial-card group" data-aos="fade-up" data-aos-delay="0">
                <div class="testimonial-card-inner">
                    <div class="flex items-center mb-6">
                        <div class="relative">
                            <img src="/placeholder.svg?height=64&width=64" alt="Sarah" class="w-16 h-16 rounded-full border-2 border-white/20 group-hover:border-pink-400/50 transition-all duration-300">
                            <div class="absolute -top-1 -right-1 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-white text-lg group-hover:text-pink-300 transition-colors duration-300">Sarah Wijaya</h4>
                            <p class="text-white/60 group-hover:text-white/80 transition-colors duration-300">Full-time Marketing Manager</p>
                            <div class="flex text-yellow-400 mt-1">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 fill-current animate-pulse" style="animation-delay: {{ $i * 0.1 }}s" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <svg class="absolute -top-2 -left-2 w-8 h-8 text-pink-400/30" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                        <p class="text-white/80 italic leading-relaxed mb-4 pl-6 group-hover:text-white transition-colors duration-300">
                            "Dapat kerja impian dengan gaji Rp 12 juta, plus earning Rp 3 juta dari tugas online! Platform ini benar-benar mengubah hidup saya."
                        </p>
                    </div>
                    
                    <div class="bg-gradient-to-r from-green-500/20 to-blue-500/20 rounded-xl p-4 mb-4 border border-green-400/30">
                        <div class="flex items-center justify-between">
                            <span class="text-green-400 font-semibold">💰 Total Income:</span>
                            <span class="text-white font-bold text-lg">Rp 15 Juta/bulan</span>
                        </div>
                    </div>
                    
                    <!-- Achievement Badges -->
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-500/20 text-blue-400 px-3 py-1 rounded-full text-xs border border-blue-400/30 hover:bg-blue-500/30 transition-colors duration-300">Top Performer</span>
                        <span class="bg-green-500/20 text-green-400 px-3 py-1 rounded-full text-xs border border-green-400/30 hover:bg-green-500/30 transition-colors duration-300">Verified</span>
                    </div>
                    
                    <div class="testimonial-hover-indicator"></div>
                </div>
            </div>

            <!-- Budi - Developer -->
            <div class="testimonial-card group" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-card-inner">
                    <div class="flex items-center mb-6">
                        <div class="relative">
                            <img src="/placeholder.svg?height=64&width=64" alt="Budi" class="w-16 h-16 rounded-full border-2 border-white/20 group-hover:border-purple-400/50 transition-all duration-300">
                            <div class="absolute -top-1 -right-1 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-white text-lg group-hover:text-purple-300 transition-colors duration-300">Budi Santoso</h4>
                            <p class="text-white/60 group-hover:text-white/80 transition-colors duration-300">Freelance Developer & Task Worker</p>
                            <div class="flex text-yellow-400 mt-1">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 fill-current animate-pulse" style="animation-delay: {{ $i * 0.1 }}s" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <svg class="absolute -top-2 -left-2 w-8 h-8 text-purple-400/30" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                        <p class="text-white/80 italic leading-relaxed mb-4 pl-6 group-hover:text-white transition-colors duration-300">
                            "Kombinasi project development dan micro tasks bisa menghasilkan Rp 15 juta per bulan! Fleksibilitas waktu yang luar biasa."
                        </p>
                    </div>
                    
                    <div class="bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-xl p-4 mb-4 border border-purple-400/30">
                        <div class="flex items-center justify-between">
                            <span class="text-purple-400 font-semibold">💰 Total Income:</span>
                            <span class="text-white font-bold text-lg">Rp 15 Juta/bulan</span>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-purple-500/20 text-purple-400 px-3 py-1 rounded-full text-xs border border-purple-400/30 hover:bg-purple-500/30 transition-colors duration-300">Expert Level</span>
                        <span class="bg-orange-500/20 text-orange-400 px-3 py-1 rounded-full text-xs border border-orange-400/30 hover:bg-orange-500/30 transition-colors duration-300">Fast Delivery</span>
                    </div>
                    
                    <div class="testimonial-hover-indicator"></div>
                </div>
            </div>

            <!-- Maya - Content Writer -->
            <div class="testimonial-card group" data-aos="fade-up" data-aos-delay="400">
                <div class="testimonial-card-inner">
                    <div class="flex items-center mb-6">
                        <div class="relative">
                            <img src="/placeholder.svg?height=64&width=64" alt="Maya" class="w-16 h-16 rounded-full border-2 border-white/20 group-hover:border-green-400/50 transition-all duration-300">
                            <div class="absolute -top-1 -right-1 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-white text-lg group-hover:text-green-300 transition-colors duration-300">Maya Sari</h4>
                            <p class="text-white/60 group-hover:text-white/80 transition-colors duration-300">Content Writer & Online Tutor</p>
                            <div class="flex text-yellow-400 mt-1">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 fill-current animate-pulse" style="animation-delay: {{ $i * 0.1 }}s" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <svg class="absolute -top-2 -left-2 w-8 h-8 text-green-400/30" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                        <p class="text-white/80 italic leading-relaxed mb-4 pl-6 group-hover:text-white transition-colors duration-300">
                            "Kerja full-time sebagai writer, sambil ngajar online. Total income Rp 10 juta! Work-life balance yang sempurna."
                        </p>
                    </div>
                    
                    <div class="bg-gradient-to-r from-green-500/20 to-cyan-500/20 rounded-xl p-4 mb-4 border border-green-400/30">
                        <div class="flex items-center justify-between">
                            <span class="text-green-400 font-semibold">💰 Total Income:</span>
                            <span class="text-white font-bold text-lg">Rp 10 Juta/bulan</span>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-pink-500/20 text-pink-400 px-3 py-1 rounded-full text-xs border border-pink-400/30 hover:bg-pink-500/30 transition-colors duration-300">Creative</span>
                        <span class="bg-cyan-500/20 text-cyan-400 px-3 py-1 rounded-full text-xs border border-cyan-400/30 hover:bg-cyan-500/30 transition-colors duration-300">Mentor</span>
                    </div>
                    
                    <div class="testimonial-hover-indicator"></div>
                </div>
            </div>
        </div>

        <!-- Additional Testimonials Carousel dengan Extra Space -->
        <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="600">
            <div class="inline-flex items-center space-x-2 bg-gradient-to-r from-green-600/20 to-blue-600/20 backdrop-blur-xl border border-white/20 rounded-full px-6 py-3 text-white/80 text-sm font-medium mb-8">
                <div class="w-2 h-2 bg-green-400 rounded-full animate-ping"></div>
                <span>📈 Lebih Banyak Success Stories</span>
            </div>
            
            <!-- Quick testimonials dengan Extra Space -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 px-8 py-8" style="overflow: visible !important;">
                <div class="mini-testimonial-card group" data-aos="zoom-in" data-aos-delay="700">
                    <div class="mini-testimonial-inner">
                        <div class="text-3xl mb-3 group-hover:scale-110 transition-transform duration-300">👨‍💻</div>
                        <div class="text-white font-semibold group-hover:text-blue-300 transition-colors duration-300">Andi</div>
                        <div class="text-white/60 text-sm group-hover:text-white/80 transition-colors duration-300">UI/UX Designer</div>
                        <div class="text-green-400 text-sm font-semibold mt-2 group-hover:text-green-300 transition-colors duration-300">+Rp 8 juta/bulan</div>
                    </div>
                </div>
                
                <div class="mini-testimonial-card group" data-aos="zoom-in" data-aos-delay="800">
                    <div class="mini-testimonial-inner">
                        <div class="text-3xl mb-3 group-hover:scale-110 transition-transform duration-300">👩‍🎨</div>
                        <div class="text-white font-semibold group-hover:text-pink-300 transition-colors duration-300">Sari</div>
                        <div class="text-white/60 text-sm group-hover:text-white/80 transition-colors duration-300">Graphic Designer</div>
                        <div class="text-green-400 text-sm font-semibold mt-2 group-hover:text-green-300 transition-colors duration-300">+Rp 6 juta/bulan</div>
                    </div>
                </div>
                
                <div class="mini-testimonial-card group" data-aos="zoom-in" data-aos-delay="900">
                    <div class="mini-testimonial-inner">
                        <div class="text-3xl mb-3 group-hover:scale-110 transition-transform duration-300">👨‍💼</div>
                        <div class="text-white font-semibold group-hover:text-purple-300 transition-colors duration-300">Rudi</div>
                        <div class="text-white/60 text-sm group-hover:text-white/80 transition-colors duration-300">Data Analyst</div>
                        <div class="text-green-400 text-sm font-semibold mt-2 group-hover:text-green-300 transition-colors duration-300">+Rp 12 juta/bulan</div>
                    </div>
                </div>
                
                <div class="mini-testimonial-card group" data-aos="zoom-in" data-aos-delay="1000">
                    <div class="mini-testimonial-inner">
                        <div class="text-3xl mb-3 group-hover:scale-110 transition-transform duration-300">👩‍🏫</div>
                        <div class="text-white font-semibold group-hover:text-orange-300 transition-colors duration-300">Nina</div>
                        <div class="text-white/60 text-sm group-hover:text-white/80 transition-colors duration-300">Online Teacher</div>
                        <div class="text-green-400 text-sm font-semibold mt-2 group-hover:text-green-300 transition-colors duration-300">+Rp 7 juta/bulan</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Company Logos -->
        <div class="mt-20" data-aos="fade-up" data-aos-delay="1200">
            <div class="text-center mb-8">
                <div class="inline-flex items-center space-x-2 bg-gradient-to-r from-blue-600/20 to-purple-600/20 backdrop-blur-xl border border-white/20 rounded-full px-6 py-3 text-white/80 text-sm font-medium mb-4">
                    <div class="w-2 h-2 bg-blue-400 rounded-full animate-ping"></div>
                    <span>🏢 Klien dari perusahaan terkemuka</span>
                </div>
            </div>
            
            <div class="company-logos-container">
                <div class="company-logo-item">
                    <svg class="company-logo" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                    <span>Google</span>
                </div>
                
                <div class="company-logo-item">
                    <svg class="company-logo" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M23.15 2.587L18.21.21a1.494 1.494 0 0 0-1.705.29l-9.46 8.63-4.12-3.128a.999.999 0 0 0-1.276.057L.327 7.261A1 1 0 0 0 .326 8.74L3.899 12 .326 15.26a1 1 0 0 0 .001 1.479L1.65 17.94a.999.999 0 0 0 1.276.057l4.12-3.128 9.46 8.63a1.492 1.492 0 0 0 1.704.29l4.942-2.377A1.5 1.5 0 0 0 24 20.06V3.939a1.5 1.5 0 0 0-.85-1.352z"/>
                    </svg>
                    <span>Microsoft</span>
                </div>
                
                <div class="company-logo-item">
                    <svg class="company-logo" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M13.162 18.994c.609 0 .858-.406.858-.859V5.863c0-.453-.249-.859-.858-.859-.609 0-.858.406-.858.859v12.272c0 .453.249.859.858.859zM5.25 18.994c.609 0 .858-.406.858-.859V9.266c0-.453-.249-.859-.858-.859-.609 0-.858.406-.858.859v8.869c0 .453.249.859.858.859zM9.206 18.994c.609 0 .858-.406.858-.859V1.859c0-.453-.249-.859-.858-.859-.609 0-.858.406-.858.859v16.276c0 .453.249.859.858.859zM17.118 18.994c.609 0 .858-.406.858-.859V13.266c0-.453-.249-.859-.858-.859-.609 0-.858.406-.858.859v4.869c0 .453.249.859.858.859zM21.074 18.994c.609 0 .858-.406.858-.859V9.266c0-.453-.249-.859-.858-.859-.609 0-.858.406-.858.859v8.869c0 .453.249.859.858.859zM1.294 18.994c.609 0 .858-.406.858-.859V13.266c0-.453-.249-.859-.858-.859-.609 0-.858.406-.858.859v4.869c0 .453.249.859.858.859z"/>
                    </svg>
                    <span>Amazon</span>
                </div>
                
                <div class="company-logo-item">
                    <svg class="company-logo" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    <span>Facebook</span>
                </div>
                
                <div class="company-logo-item">
                    <svg class="company-logo" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M5.398 0v.006c3.028 8.556 5.37 15.175 8.348 23.596 2.344.058 4.85.398 4.854.398-2.8-7.924-5.923-16.747-8.487-24zm8.489 0v9.63L18.6 22.951c-.043-7.86-.004-15.913.002-22.95zM5.398 1.05V24c1.873-.225 2.81-.312 4.715-.398v-9.22z"/>
                    </svg>
                    <span>Netflix</span>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* ===== FORCE OVERFLOW VISIBLE ===== */
        #testimoni,
        #testimoni *,
        .max-w-7xl,
        .testimonial-card,
        .mini-testimonial-card,
        .testimonial-card-inner,
        .mini-testimonial-inner {
            overflow: visible !important;
        }

        /* ===== FLOATING ORBS ===== */
        .floating-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(50px);
            animation: testimonialComplexFloat 18s ease-in-out infinite;
        }

        .testimonial-orb-1 {
            top: 5%;
            left: 5%;
            width: 320px;
            height: 320px;
            background: linear-gradient(45deg, #ec4899, #f59e0b);
            opacity: 0.12;
            animation-delay: 0s;
        }

        .testimonial-orb-2 {
            top: 70%;
            right: 10%;
            width: 280px;
            height: 280px;
            background: linear-gradient(45deg, #8b5cf6, #ec4899);
            opacity: 0.1;
            animation-delay: -6s;
        }

        .testimonial-orb-3 {
            bottom: 15%;
            left: 15%;
            width: 240px;
            height: 240px;
            background: linear-gradient(45deg, #10b981, #3b82f6);
            opacity: 0.08;
            animation-delay: -12s;
        }

        .testimonial-orb-4 {
            top: 40%;
            right: 35%;
            width: 200px;
            height: 200px;
            background: linear-gradient(45deg, #f59e0b, #10b981);
            opacity: 0.06;
            animation-delay: -9s;
        }

        .testimonial-orb-5 {
            bottom: 50%;
            left: 50%;
            width: 260px;
            height: 260px;
            background: linear-gradient(45deg, #3b82f6, #8b5cf6);
            opacity: 0.09;
            animation-delay: -15s;
        }

        .testimonial-orb-6 {
            top: 20%;
            left: 70%;
            width: 180px;
            height: 180px;
            background: linear-gradient(45deg, #ec4899, #10b981);
            opacity: 0.07;
            animation-delay: -3s;
        }

        @keyframes testimonialComplexFloat {
            0%, 100% {
                transform: translate(0px, 0px) scale(1) rotate(0deg);
            }
            20% {
                transform: translate(40px, -60px) scale(1.1) rotate(72deg);
            }
            40% {
                transform: translate(-30px, 30px) scale(0.9) rotate(144deg);
            }
            60% {
                transform: translate(60px, 15px) scale(1.05) rotate(216deg);
            }
            80% {
                transform: translate(-20px, -40px) scale(0.95) rotate(288deg);
            }
        }

        /* ===== GRID PATTERN ===== */
        .testimonial-grid-pattern {
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(255,255,255,0.08) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.08) 1px, transparent 1px);
            background-size: 60px 60px;
            animation: testimonialGridMove 25s linear infinite;
        }

        @keyframes testimonialGridMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(60px, 60px); }
        }

        /* ===== FLOWING PARTICLES ===== */
        .testimonial-particles-container {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .testimonial-flowing-particle {
            position: absolute;
            width: 5px;
            height: 5px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 50%;
            animation: testimonialFlowParticle 12s linear infinite;
        }

        @keyframes testimonialFlowParticle {
            0% {
                transform: translateY(100vh) translateX(0) scale(0) rotate(0deg);
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
                transform: translateY(-100vh) translateX(150px) scale(0) rotate(360deg);
                opacity: 0;
            }
        }

        /* ===== TESTIMONIAL THEMED SHAPES ===== */
        .testimonial-geometric-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .testimonial-shape {
            position: absolute;
            opacity: 0.12;
            animation: testimonialShapeFloat 15s ease-in-out infinite;
        }

        .star-1 {
            top: 20%;
            left: 85%;
            width: 30px;
            height: 30px;
            background: #f59e0b;
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
            animation-delay: -2s;
        }

        .star-2 {
            bottom: 30%;
            right: 5%;
            width: 25px;
            height: 25px;
            background: #ec4899;
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
            animation-delay: -8s;
        }

        .heart-1 {
            top: 60%;
            left: 8%;
            width: 35px;
            height: 35px;
            background: #ec4899;
            transform: rotate(-45deg);
            animation-delay: -5s;
        }

        .heart-1:before,
        .heart-1:after {
            content: '';
            width: 35px;
            height: 35px;
            position: absolute;
            left: 17.5px;
            top: 0;
            background: #ec4899;
            border-radius: 17.5px;
            transform: rotate(-45deg);
            transform-origin: 0 100%;
        }

        .heart-1:after {
            left: 0;
            transform: rotate(45deg);
            transform-origin: 100% 100%;
        }

        .heart-2 {
            top: 15%;
            right: 30%;
            width: 25px;
            height: 25px;
            background: #10b981;
            transform: rotate(-45deg);
            animation-delay: -10s;
        }

        .heart-2:before,
        .heart-2:after {
            content: '';
            width: 25px;
            height: 25px;
            position: absolute;
            left: 12.5px;
            top: 0;
            background: #10b981;
            border-radius: 12.5px;
            transform: rotate(-45deg);
            transform-origin: 0 100%;
        }

        .heart-2:after {
            left: 0;
            transform: rotate(45deg);
            transform-origin: 100% 100%;
        }

        .quote-1 {
            bottom: 20%;
            left: 45%;
            width: 40px;
            height: 40px;
            background: #8b5cf6;
            border-radius: 50% 50% 50% 0;
            animation-delay: -7s;
        }

        .quote-2 {
            top: 35%;
            right: 15%;
            width: 30px;
            height: 30px;
            background: #3b82f6;
            border-radius: 50% 50% 50% 0;
            animation-delay: -12s;
        }

        @keyframes testimonialShapeFloat {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            25% { transform: translateY(-40px) rotate(90deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
            75% { transform: translateY(-50px) rotate(270deg); }
        }

        /* ===== ANIMATED PATHS ===== */
        .testimonial-animated-path {
            stroke-dasharray: 1200;
            stroke-dashoffset: 1200;
            animation: testimonialDrawPath 10s ease-in-out infinite;
        }

        .path-1 { animation-delay: 0s; }
        .path-2 { animation-delay: -2.5s; }
        .path-3 { animation-delay: -5s; }
        .path-4 { animation-delay: -7.5s; }

        @keyframes testimonialDrawPath {
            0%, 100% { stroke-dashoffset: 1200; }
            50% { stroke-dashoffset: 0; }
        }

        /* ===== FLOATING ICONS ===== */
        .testimonial-floating-icons {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .testimonial-floating-icon {
            position: absolute;
            width: 56px;
            height: 56px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: testimonialIconFloat 10s ease-in-out infinite;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .icon-1 {
            top: 25%;
            left: 12%;
            animation-delay: 0s;
        }

        .icon-2 {
            top: 65%;
            right: 25%;
            animation-delay: -2s;
        }

        .icon-3 {
            bottom: 35%;
            left: 30%;
            animation-delay: -4s;
        }

        .icon-4 {
            top: 45%;
            right: 45%;
            animation-delay: -6s;
        }

        .icon-5 {
            bottom: 25%;
            right: 12%;
            animation-delay: -8s;
        }

        .icon-6 {
            top: 10%;
            left: 60%;
            animation-delay: -10s;
        }

        @keyframes testimonialIconFloat {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
                box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            }
            50% {
                transform: translateY(-25px) rotate(180deg);
                box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            }
        }

        /* ===== PULSING DOTS ===== */
        .testimonial-pulsing-dots {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .testimonial-pulsing-dot {
            position: absolute;
            width: 8px;
            height: 8px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            animation: testimonialPulseDot 4s ease-in-out infinite;
        }

        @keyframes testimonialPulseDot {
            0%, 100% {
                transform: scale(1);
                opacity: 0.5;
            }
            50% {
                transform: scale(2.5);
                opacity: 1;
            }
        }

        /* ===== RADIAL GRADIENTS ===== */
        .testimonial-radial-gradient {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            animation: testimonialRadialPulse 12s ease-in-out infinite;
        }

        .radial-1 {
            top: 15%;
            left: 25%;
            width: 450px;
            height: 450px;
            background: radial-gradient(circle, rgba(236, 72, 153, 0.08) 0%, transparent 70%);
            animation-delay: 0s;
        }

        .radial-2 {
            bottom: 25%;
            right: 15%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(139, 92, 246, 0.08) 0%, transparent 70%);
            animation-delay: -4s;
        }

        .radial-3 {
            top: 55%;
            left: 5%;
            width: 350px;
            height: 350px;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.08) 0%, transparent 70%);
            animation-delay: -8s;
        }

        .radial-4 {
            top: 5%;
            right: 35%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(245, 158, 11, 0.08) 0%, transparent 70%);
            animation-delay: -6s;
        }

        @keyframes testimonialRadialPulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.08;
            }
            50% {
                transform: scale(1.3);
                opacity: 0.15;
            }
        }

        /* ===== QUOTE BUBBLES ===== */
        .quote-bubbles {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .quote-bubble {
            position: absolute;
            font-size: 4rem;
            color: rgba(255, 255, 255, 0.1);
            font-family: serif;
            animation: quoteBubbleFloat 8s ease-in-out infinite;
        }

        .bubble-1 {
            top: 10%;
            left: 20%;
            animation-delay: 0s;
        }

        .bubble-2 {
            top: 70%;
            right: 20%;
            animation-delay: -2s;
        }

        .bubble-3 {
            bottom: 30%;
            left: 10%;
            animation-delay: -4s;
        }

        .bubble-4 {
            top: 40%;
            right: 10%;
            animation-delay: -6s;
        }

        @keyframes quoteBubbleFloat {
            0%, 100% {
                transform: translateY(0px) scale(1);
                opacity: 0.1;
            }
            50% {
                transform: translateY(-30px) scale(1.1);
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
            background: linear-gradient(-45deg, #ffffff, #f59e0b, #ec4899, #8b5cf6, #ffffff);
            background-size: 400% 400%;
            animation: gradientShift 4s ease infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        /* ===== TESTIMONIAL CARDS - SIMPLE HOVER EFFECT ===== */
        .testimonial-card {
            opacity: 0;
            transform: translateY(50px) scale(0.9);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .testimonial-card.aos-animate {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .testimonial-card-inner {
            position: relative;
            height: 100%;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 2rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .testimonial-card:hover .testimonial-card-inner {
            transform: translateY(-5px);
            border-color: rgba(236, 72, 153, 0.4);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(236, 72, 153, 0.3);
        }

        .testimonial-hover-indicator {
            position: absolute;
            bottom: 1rem;
            right: 1rem;
            width: 10px;
            height: 10px;
            background: #ec4899;
            border-radius: 50%;
            opacity: 0;
            transform: scale(0);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .testimonial-card:hover .testimonial-hover-indicator {
            opacity: 1;
            transform: scale(1);
            animation: ping 2s cubic-bezier(0, 0, 0.2, 1) infinite;
        }

        @keyframes ping {
            75%, 100% {
                transform: scale(2);
                opacity: 0;
            }
        }

        /* ===== MINI TESTIMONIAL CARDS ===== */
        .mini-testimonial-card {
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .mini-testimonial-card.aos-animate {
            opacity: 1;
            transform: scale(1);
        }

        .mini-testimonial-inner {
            position: relative;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 1.5rem;
            text-center;
            transition: all 0.3s ease;
        }

        .mini-testimonial-card:hover .mini-testimonial-inner {
            transform: translateY(-3px);
            border-color: rgba(139, 92, 246, 0.4);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        /* ===== COMPANY LOGOS ===== */
        .company-logos-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 3rem;
            opacity: 0.4;
            transition: opacity 0.3s ease;
        }

        .company-logos-container:hover {
            opacity: 0.7;
        }

        .company-logo-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .company-logo-item:hover {
            transform: translateY(-5px) scale(1.1);
        }

        .company-logo {
            width: 48px;
            height: 48px;
            color: rgba(255, 255, 255, 0.6);
            transition: all 0.3s ease;
        }

        .company-logo-item:hover .company-logo {
            color: rgba(255, 255, 255, 0.9);
        }

        .company-logo-item span {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.875rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .company-logo-item:hover span {
            color: rgba(255, 255, 255, 0.8);
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
            
            .testimonial-floating-icon {
                width: 40px;
                height: 40px;
            }
            
            .testimonial-floating-icon svg {
                width: 20px;
                height: 20px;
            }
            
            .quote-bubble {
                font-size: 2.5rem;
            }
            
            .company-logos-container {
                gap: 1.5rem;
            }
            
            .company-logo {
                width: 36px;
                height: 36px;
            }
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
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

            // Add mouse move effect for testimonial cards
            document.querySelectorAll('.testimonial-card').forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect()
                    const x = e.clientX - rect.left
                    const y = e.clientY - rect.top
                    
                    const centerX = rect.width / 2
                    const centerY = rect.height / 2
                    
                    const rotateX = (y - centerY) / 20
                    const rotateY = (centerX - x) / 20
                    
                    const cardInner = card.querySelector('.testimonial-card-inner')
                    cardInner.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-5px)`
                })
                
                card.addEventListener('mouseleave', () => {
                    const cardInner = card.querySelector('.testimonial-card-inner')
                    cardInner.style.transform = ''
                })
            })

            // Add click ripple effect for testimonial cards
            document.querySelectorAll('.testimonial-card, .mini-testimonial-card').forEach(card => {
                card.addEventListener('click', function(e) {
                    const ripple = document.createElement('div')
                    const rect = this.getBoundingClientRect()
                    const size = Math.max(rect.width, rect.height)
                    const x = e.clientX - rect.left - size / 2
                    const y = e.clientY - rect.top - size / 2
                    
                    ripple.style.cssText = `
                        position: absolute;
                        width: ${size}px;
                        height: ${size}px;
                        left: ${x}px;
                        top: ${y}px;
                        background: radial-gradient(circle, rgba(236, 72, 153, 0.3) 0%, transparent 70%);
                        border-radius: 50%;
                        transform: scale(0);
                        animation: testimonialRipple 0.6s ease-out;
                        pointer-events: none;
                        z-index: 1000;
                    `
                    
                    this.appendChild(ripple)
                    
                    setTimeout(() => {
                        ripple.remove()
                    }, 600)
                })
            })

            // Add CSS for ripple animation
            const style = document.createElement('style')
            style.textContent = `
                @keyframes testimonialRipple {
                    to {
                        transform: scale(2);
                        opacity: 0;
                    }
                }
            `
            document.head.appendChild(style)

            // Performance optimization: Reduce animations on mobile
            const isMobile = window.innerWidth <= 768
            if (isMobile) {
                document.querySelectorAll('.testimonial-flowing-particle').forEach((particle, index) => {
                    if (index > 15) {
                        particle.style.display = 'none'
                    }
                })
            }

            // Add parallax effect to background elements
            let ticking = false
            
            function updateTestimonialParallax() {
                const scrolled = window.pageYOffset
                const parallaxElements = document.querySelectorAll('.floating-orb, .testimonial-floating-icon')

                parallaxElements.forEach((element, index) => {
                    const speed = 0.05 + index * 0.02
                    const yPos = -(scrolled * speed)
                    element.style.transform = `translateY(${yPos}px)`
                })
                
                ticking = false
            }

            function requestTestimonialTick() {
                if (!ticking) {
                    requestAnimationFrame(updateTestimonialParallax)
                    ticking = true
                }
            }

            window.addEventListener("scroll", requestTestimonialTick)
        });
    </script>
</section>
