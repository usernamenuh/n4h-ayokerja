<section class="py-20 bg-black relative overflow-hidden">
    <!-- Enhanced Animated Background -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Gradient Overlay Base -->
        <div class="absolute inset-0 bg-gradient-to-br from-green-900/20 via-black to-blue-900/20"></div>
        
        <!-- Large Floating Orbs with Complex Animations -->
        <div class="floating-orb security-orb-1"></div>
        <div class="floating-orb security-orb-2"></div>
        <div class="floating-orb security-orb-3"></div>
        <div class="floating-orb security-orb-4"></div>
        <div class="floating-orb security-orb-5"></div>
        <div class="floating-orb security-orb-6"></div>
        
        <!-- Animated Grid Pattern -->
        <div class="absolute inset-0 opacity-8">
            <div class="security-grid-pattern"></div>
        </div>
        
        <!-- Flowing Particles -->
        <div class="security-particles-container">
            @for ($i = 0; $i < 35; $i++)
                <div class="security-flowing-particle" style="
                    left: {{ rand(0, 100) }}%; 
                    top: {{ rand(0, 100) }}%; 
                    animation-delay: {{ rand(0, 10000) }}ms;
                    animation-duration: {{ rand(8000, 15000) }}ms;
                "></div>
            @endfor
        </div>
        
        <!-- Security Themed Geometric Shapes -->
        <div class="security-geometric-shapes">
            <div class="security-shape shield-1"></div>
            <div class="security-shape shield-2"></div>
            <div class="security-shape lock-1"></div>
            <div class="security-shape lock-2"></div>
            <div class="security-shape key-1"></div>
            <div class="security-shape key-2"></div>
        </div>
        
        <!-- Enhanced Connecting Lines that Actually Connect Elements -->
        <div class="security-connection-lines">
            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 1200 800" fill="none">
                <!-- Main Network Lines connecting floating icons -->
                <path class="security-animated-path path-1" d="M144,200 L312,520 L360,360 L540,360 L744,200 L936,520" stroke="url(#securityGradient1)" stroke-width="1.5" fill="none" opacity="0.6"/>
                <path class="security-animated-path path-2" d="M144,200 L360,360 L744,200" stroke="url(#securityGradient2)" stroke-width="1.5" fill="none" opacity="0.5"/>
                <path class="security-animated-path path-3" d="M312,520 L540,360 L936,520" stroke="url(#securityGradient3)" stroke-width="1.5" fill="none" opacity="0.5"/>
                <path class="security-animated-path path-4" d="M360,360 L540,360" stroke="url(#securityGradient4)" stroke-width="2" fill="none" opacity="0.7"/>
                
                <!-- Secondary connecting lines -->
                <path class="security-animated-path path-5" d="M144,200 L540,360 L936,520" stroke="url(#securityGradient5)" stroke-width="1" fill="none" opacity="0.4"/>
                <path class="security-animated-path path-6" d="M312,520 L744,200" stroke="url(#securityGradient6)" stroke-width="1" fill="none" opacity="0.4"/>
                
                <!-- Curved network connections -->
                <path class="security-animated-path path-7" d="M144,200 Q300,100 540,360 Q700,500 936,520" stroke="url(#securityGradient7)" stroke-width="1.5" fill="none" opacity="0.5"/>
                <path class="security-animated-path path-8" d="M312,520 Q450,300 744,200" stroke="url(#securityGradient8)" stroke-width="1.5" fill="none" opacity="0.5"/>
                
                <!-- Connecting dots at intersections -->
                <circle cx="360" cy="360" r="3" fill="#10b981" opacity="0.8" class="connection-dot">
                    <animate attributeName="r" values="3;6;3" dur="2s" repeatCount="indefinite"/>
                    <animate attributeName="opacity" values="0.8;1;0.8" dur="2s" repeatCount="indefinite"/>
                </circle>
                <circle cx="540" cy="360" r="3" fill="#3b82f6" opacity="0.8" class="connection-dot">
                    <animate attributeName="r" values="3;6;3" dur="2s" repeatCount="indefinite" begin="0.5s"/>
                    <animate attributeName="opacity" values="0.8;1;0.8" dur="2s" repeatCount="indefinite" begin="0.5s"/>
                </circle>
                <circle cx="450" cy="280" r="2" fill="#8b5cf6" opacity="0.6" class="connection-dot">
                    <animate attributeName="r" values="2;5;2" dur="3s" repeatCount="indefinite" begin="1s"/>
                    <animate attributeName="opacity" values="0.6;1;0.6" dur="3s" repeatCount="indefinite" begin="1s"/>
                </circle>
                
                <!-- Flowing particles along paths -->
                <circle r="2" fill="#10b981" opacity="0.9">
                    <animateMotion dur="8s" repeatCount="indefinite">
                        <path d="M144,200 L312,520 L360,360 L540,360 L744,200 L936,520"/>
                    </animateMotion>
                    <animate attributeName="opacity" values="0;1;1;0" dur="8s" repeatCount="indefinite"/>
                </circle>
                <circle r="2" fill="#3b82f6" opacity="0.9">
                    <animateMotion dur="6s" repeatCount="indefinite" begin="2s">
                        <path d="M936,520 L744,200 L360,360 L144,200"/>
                    </animateMotion>
                    <animate attributeName="opacity" values="0;1;1;0" dur="6s" repeatCount="indefinite" begin="2s"/>
                </circle>
                <circle r="1.5" fill="#8b5cf6" opacity="0.8">
                    <animateMotion dur="10s" repeatCount="indefinite" begin="1s">
                        <path d="M144,200 Q300,100 540,360 Q700,500 936,520"/>
                    </animateMotion>
                    <animate attributeName="opacity" values="0;1;1;0" dur="10s" repeatCount="indefinite" begin="1s"/>
                </circle>
                
                <defs>
                    <linearGradient id="securityGradient1" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#10b981;stop-opacity:0" />
                        <stop offset="30%" style="stop-color:#10b981;stop-opacity:1" />
                        <stop offset="70%" style="stop-color:#3b82f6;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:0" />
                    </linearGradient>
                    <linearGradient id="securityGradient2" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:0" />
                        <stop offset="50%" style="stop-color:#3b82f6;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#10b981;stop-opacity:0" />
                    </linearGradient>
                    <linearGradient id="securityGradient3" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#8b5cf6;stop-opacity:0" />
                        <stop offset="50%" style="stop-color:#8b5cf6;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#10b981;stop-opacity:0" />
                    </linearGradient>
                    <linearGradient id="securityGradient4" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#10b981;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:1" />
                    </linearGradient>
                    <linearGradient id="securityGradient5" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#f59e0b;stop-opacity:0" />
                        <stop offset="50%" style="stop-color:#f59e0b;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:0" />
                    </linearGradient>
                    <linearGradient id="securityGradient6" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#ec4899;stop-opacity:0" />
                        <stop offset="50%" style="stop-color:#ec4899;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#10b981;stop-opacity:0" />
                    </linearGradient>
                    <linearGradient id="securityGradient7" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#10b981;stop-opacity:0" />
                        <stop offset="25%" style="stop-color:#10b981;stop-opacity:0.8" />
                        <stop offset="75%" style="stop-color:#3b82f6;stop-opacity:0.8" />
                        <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:0" />
                    </linearGradient>
                    <linearGradient id="securityGradient8" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#8b5cf6;stop-opacity:0" />
                        <stop offset="50%" style="stop-color:#8b5cf6;stop-opacity:0.8" />
                        <stop offset="100%" style="stop-color:#f59e0b;stop-opacity:0" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
        
        <!-- Floating Security Icons with Glow -->
        <div class="security-floating-icons">
            <div class="security-floating-icon icon-1">
                <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
            </div>
            <div class="security-floating-icon icon-2">
                <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
            </div>
            <div class="security-floating-icon icon-3">
                <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="security-floating-icon icon-4">
                <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                </svg>
            </div>
            <div class="security-floating-icon icon-5">
                <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                </svg>
            </div>
            <div class="security-floating-icon icon-6">
                <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
        </div>
        
        <!-- Pulsing Dots -->
        <div class="security-pulsing-dots">
            @for ($i = 0; $i < 20; $i++)
                <div class="security-pulsing-dot" style="
                    left: {{ rand(5, 95) }}%; 
                    top: {{ rand(5, 95) }}%; 
                    animation-delay: {{ rand(0, 5000) }}ms;
                "></div>
            @endfor
        </div>
        
        <!-- Radial Gradients -->
        <div class="security-radial-gradient radial-1"></div>
        <div class="security-radial-gradient radial-2"></div>
        <div class="security-radial-gradient radial-3"></div>
        <div class="security-radial-gradient radial-4"></div>
        
        <!-- Security Bubbles -->
        <div class="security-bubbles">
            <div class="security-bubble bubble-1">🔒</div>
            <div class="security-bubble bubble-2">🛡️</div>
            <div class="security-bubble bubble-3">🔐</div>
            <div class="security-bubble bubble-4">🔑</div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Enhanced Header -->
        <div class="text-center mb-16 fade-in-up">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-green-400 to-blue-400 rounded-full mb-6 animate-pulse-glow">
                <span class="text-3xl">🛡️</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-gradient-text">
                Keamanan & <span class="bg-gradient-to-r from-green-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">Perlindungan Data</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Keamanan data Anda adalah prioritas utama kami. Kami menggunakan teknologi keamanan terdepan untuk melindungi informasi pribadi Anda.
            </p>
        </div>

        <!-- Enhanced Security Features Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <!-- SSL Encryption -->
            <div class="security-card group" data-aos="fade-up" data-aos-delay="0">
                <div class="security-card-inner">
                    <div class="security-icon bg-gradient-to-r from-green-400 to-emerald-500">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 group-hover:text-green-300 transition-colors duration-300">SSL Encryption</h3>
                    <p class="text-gray-300 text-sm mb-3">Enkripsi 256-bit untuk semua data</p>
                    <div class="security-badge bg-green-500/20 border-green-400/30">
                        <span class="text-green-400 text-xs font-medium">Bank-level Security</span>
                    </div>
                    <div class="security-glow"></div>
                </div>
            </div>

            <!-- Escrow System -->
            <div class="security-card group" data-aos="fade-up" data-aos-delay="100">
                <div class="security-card-inner">
                    <div class="security-icon bg-gradient-to-r from-blue-400 to-cyan-500">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 group-hover:text-blue-300 transition-colors duration-300">Escrow System</h3>
                    <p class="text-gray-300 text-sm mb-3">Pembayaran aman dengan sistem escrow</p>
                    <div class="security-badge bg-blue-500/20 border-blue-400/30">
                        <span class="text-blue-400 text-xs font-medium">Protected Payments</span>
                    </div>
                    <div class="security-glow"></div>
                </div>
            </div>

            <!-- Verified Companies -->
            <div class="security-card group" data-aos="fade-up" data-aos-delay="200">
                <div class="security-card-inner">
                    <div class="security-icon bg-gradient-to-r from-purple-400 to-violet-500">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 group-hover:text-purple-300 transition-colors duration-300">Verified Companies</h3>
                    <p class="text-gray-300 text-sm mb-3">Semua perusahaan telah diverifikasi</p>
                    <div class="security-badge bg-purple-500/20 border-purple-400/30">
                        <span class="text-purple-400 text-xs font-medium">100% Legitimate</span>
                    </div>
                    <div class="security-glow"></div>
                </div>
            </div>

            <!-- 2FA Authentication -->
            <div class="security-card group" data-aos="fade-up" data-aos-delay="300">
                <div class="security-card-inner">
                    <div class="security-icon bg-gradient-to-r from-yellow-400 to-orange-500">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 group-hover:text-yellow-300 transition-colors duration-300">2FA Authentication</h3>
                    <p class="text-gray-300 text-sm mb-3">Autentikasi dua faktor untuk keamanan ekstra</p>
                    <div class="security-badge bg-yellow-500/20 border-yellow-400/30">
                        <span class="text-yellow-400 text-xs font-medium">Extra Secure</span>
                    </div>
                    <div class="security-glow"></div>
                </div>
            </div>
        </div>

        <!-- Enhanced Security Certifications -->
        <div class="certification-container" data-aos="fade-up" data-aos-delay="400">
            <div class="certification-inner">
                <h3 class="text-2xl md:text-3xl font-bold text-white text-center mb-8 bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
                    Sertifikasi & Compliance
                </h3>
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- ISO 27001 -->
                    <div class="certification-item group" data-aos="zoom-in" data-aos-delay="500">
                        <div class="certification-icon">
                            <span class="text-4xl animate-bounce-slow">🏆</span>
                        </div>
                        <h4 class="text-lg font-bold text-white mb-2 group-hover:text-blue-300 transition-colors duration-300">ISO 27001</h4>
                        <p class="text-gray-300 text-sm">Standar internasional untuk manajemen keamanan informasi</p>
                    </div>

                    <!-- GDPR -->
                    <div class="certification-item group" data-aos="zoom-in" data-aos-delay="600">
                        <div class="certification-icon">
                            <span class="text-4xl animate-bounce-slow animation-delay-1s">🇪🇺</span>
                        </div>
                        <h4 class="text-lg font-bold text-white mb-2 group-hover:text-green-300 transition-colors duration-300">GDPR Compliant</h4>
                        <p class="text-gray-300 text-sm">Mematuhi regulasi perlindungan data Eropa</p>
                    </div>

                    <!-- SOC 2 -->
                    <div class="certification-item group" data-aos="zoom-in" data-aos-delay="700">
                        <div class="certification-icon">
                            <span class="text-4xl animate-bounce-slow animation-delay-2s">🔐</span>
                        </div>
                        <h4 class="text-lg font-bold text-white mb-2 group-hover:text-purple-300 transition-colors duration-300">SOC 2 Type II</h4>
                        <p class="text-gray-300 text-sm">Audit keamanan dan ketersediaan sistem</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Security Stats -->
        <div class="grid md:grid-cols-4 gap-6 mb-16" data-aos="fade-up" data-aos-delay="800">
            <div class="stat-item group">
                <div class="stat-number text-green-400 counter" data-target="99.9">0</div>
                <div class="stat-label">% Uptime</div>
                <div class="stat-glow bg-green-400/20"></div>
            </div>
            <div class="stat-item group">
                <div class="stat-number text-blue-400 counter" data-target="0">0</div>
                <div class="stat-label">Data Breaches</div>
                <div class="stat-glow bg-blue-400/20"></div>
            </div>
            <div class="stat-item group">
                <div class="stat-number text-purple-400">24/7</div>
                <div class="stat-label">Monitoring</div>
                <div class="stat-glow bg-purple-400/20"></div>
            </div>
            <div class="stat-item group">
                <div class="stat-number text-yellow-400 counter" data-target="256">0</div>
                <div class="stat-label">-bit Encryption</div>
                <div class="stat-glow bg-yellow-400/20"></div>
            </div>
        </div>

        <!-- Enhanced Trust Indicators -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="1000">
            <div class="trust-indicators">
                <div class="trust-item group">
                    <svg class="w-5 h-5 text-green-400 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-white group-hover:text-green-300 transition-colors duration-300">ISO 27001 Certified</span>
                </div>
                <div class="trust-item group">
                    <svg class="w-5 h-5 text-green-400 animate-pulse animation-delay-1s" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-white group-hover:text-green-300 transition-colors duration-300">GDPR Compliant</span>
                </div>
                <div class="trust-item group">
                    <svg class="w-5 h-5 text-green-400 animate-pulse animation-delay-2s" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-white group-hover:text-green-300 transition-colors duration-300">Bank-level Security</span>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* ===== FLOATING ANIMATIONS ===== */
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            25% { transform: translateY(-20px) rotate(90deg); }
            50% { transform: translateY(-10px) rotate(180deg); }
            75% { transform: translateY(-30px) rotate(270deg); }
        }

        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.5); }
            50% { box-shadow: 0 0 40px rgba(59, 130, 246, 0.8), 0 0 60px rgba(59, 130, 246, 0.3); }
        }

        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-bounce-slow { animation: bounce-slow 3s ease-in-out infinite; }
        .animate-pulse-glow { animation: pulse-glow 2s ease-in-out infinite; }
        .animate-gradient-text {
            background: linear-gradient(-45deg, #ffffff, #60a5fa, #a78bfa, #ffffff);
            background-size: 400% 400%;
            animation: gradient-shift 3s ease infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .animation-delay-1s { animation-delay: 1s; }
        .animation-delay-2s { animation-delay: 2s; }
        .animation-delay-3s { animation-delay: 3s; }
        .animation-delay-4s { animation-delay: 4s; }

        /* ===== FLOATING PARTICLES ===== */
        .floating-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 3px;
            height: 3px;
            background: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            animation: float 8s ease-in-out infinite;
        }

        /* ===== FADE IN UP ANIMATION ===== */
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

        /* ===== SECURITY CARDS ===== */
        .security-card {
            opacity: 0;
            transform: translateY(50px) scale(0.9);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .security-card.aos-animate {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .security-card-inner {
            position: relative;
            height: 100%;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 2rem;
            text-center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
        }

        .security-card:hover .security-card-inner {
            transform: translateY(-8px) scale(1.02);
            border-color: rgba(139, 92, 246, 0.3);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(139, 92, 246, 0.2);
        }

        .security-icon {
            width: 64px;
            height: 64px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 10;
        }

        .security-card:hover .security-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 12px 40px rgba(139, 92, 246, 0.4);
        }

        .security-badge {
            border: 1px solid;
            border-radius: 12px;
            padding: 8px 12px;
            transition: all 0.3s ease;
        }

        .security-card:hover .security-badge {
            transform: scale(1.05);
        }

        .security-glow {
            position: absolute;
            inset: -2px;
            background: linear-gradient(45deg, transparent, rgba(139, 92, 246, 0.3), transparent);
            border-radius: 26px;
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }

        .security-card:hover .security-glow {
            opacity: 1;
            animation: rotate 2s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* ===== CERTIFICATION CONTAINER ===== */
        .certification-container {
            margin-bottom: 4rem;
        }

        .certification-inner {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 3rem 2rem;
            transition: all 0.4s ease;
        }

        .certification-inner:hover {
            border-color: rgba(139, 92, 246, 0.3);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .certification-item {
            text-align: center;
            transition: all 0.3s ease;
        }

        .certification-item:hover {
            transform: translateY(-5px);
        }

        .certification-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            transition: all 0.3s ease;
        }

        .certification-item:hover .certification-icon {
            background: rgba(255, 255, 255, 0.15);
            transform: scale(1.1);
        }

        /* ===== STATS ===== */
        .stat-item {
            text-align: center;
            position: relative;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .stat-item:hover {
            transform: translateY(-5px);
            border-color: rgba(139, 92, 246, 0.3);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
        }

        .stat-label {
            color: #d1d5db;
            font-size: 0.875rem;
        }

        .stat-glow {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 16px;
        }

        .stat-item:hover .stat-glow {
            opacity: 0.1;
        }

        /* ===== TRUST INDICATORS ===== */
        .trust-indicators {
            display: inline-flex;
            align-items: center;
            space-x: 1.5rem;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 1rem 2rem;
            gap: 1.5rem;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .trust-item:hover {
            transform: scale(1.05);
        }

        /* ===== SCROLL ANIMATIONS ===== */
        .aos-init[data-aos] {
            opacity: 0;
            transform: translateY(50px);
        }

        .aos-animate[data-aos] {
            opacity: 1;
            transform: translateY(0);
        }

        /* ===== SECURITY ENHANCED BACKGROUND STYLES ===== */

        /* ===== FLOATING ORBS ===== */
        .security-orb-1 {
            top: 5%;
            left: 5%;
            width: 320px;
            height: 320px;
            background: linear-gradient(45deg, #10b981, #3b82f6);
            opacity: 0.12;
            animation-delay: 0s;
        }

        .security-orb-2 {
            top: 70%;
            right: 10%;
            width: 280px;
            height: 280px;
            background: linear-gradient(45deg, #3b82f6, #8b5cf6);
            opacity: 0.1;
            animation-delay: -6s;
        }

        .security-orb-3 {
            bottom: 15%;
            left: 15%;
            width: 240px;
            height: 240px;
            background: linear-gradient(45deg, #8b5cf6, #10b981);
            opacity: 0.08;
            animation-delay: -12s;
        }

        .security-orb-4 {
            top: 40%;
            right: 35%;
            width: 200px;
            height: 200px;
            background: linear-gradient(45deg, #f59e0b, #10b981);
            opacity: 0.06;
            animation-delay: -9s;
        }

        .security-orb-5 {
            bottom: 50%;
            left: 50%;
            width: 260px;
            height: 260px;
            background: linear-gradient(45deg, #10b981, #3b82f6);
            opacity: 0.09;
            animation-delay: -15s;
        }

        .security-orb-6 {
            top: 20%;
            left: 70%;
            width: 180px;
            height: 180px;
            background: linear-gradient(45deg, #3b82f6, #10b981);
            opacity: 0.07;
            animation-delay: -3s;
        }

        @keyframes securityComplexFloat {
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

        .floating-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(50px);
            animation: securityComplexFloat 18s ease-in-out infinite;
        }

        /* ===== GRID PATTERN ===== */
        .security-grid-pattern {
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(255,255,255,0.08) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.08) 1px, transparent 1px);
            background-size: 60px 60px;
            animation: securityGridMove 25s linear infinite;
        }

        @keyframes securityGridMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(60px, 60px); }
        }

        /* ===== FLOWING PARTICLES ===== */
        .security-particles-container {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .security-flowing-particle {
            position: absolute;
            width: 5px;
            height: 5px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 50%;
            animation: securityFlowParticle 12s linear infinite;
        }

        @keyframes securityFlowParticle {
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

        /* ===== SECURITY THEMED SHAPES ===== */
        .security-geometric-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .security-shape {
            position: absolute;
            opacity: 0.12;
            animation: securityShapeFloat 15s ease-in-out infinite;
        }

        .shield-1 {
            top: 20%;
            left: 85%;
            width: 30px;
            height: 35px;
            background: #10b981;
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            animation-delay: -2s;
        }

        .shield-2 {
            bottom: 30%;
            right: 5%;
            width: 25px;
            height: 30px;
            background: #3b82f6;
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            animation-delay: -8s;
        }

        .lock-1 {
            top: 60%;
            left: 8%;
            width: 20px;
            height: 25px;
            background: #8b5cf6;
            border-radius: 5px 5px 0 0;
            animation-delay: -5s;
        }

        .lock-1:before {
            content: '';
            position: absolute;
            top: -8px;
            left: 3px;
            width: 14px;
            height: 14px;
            border: 3px solid #8b5cf6;
            border-radius: 50% 50% 0 0;
            border-bottom: none;
        }

        .lock-2 {
            top: 15%;
            right: 30%;
            width: 18px;
            height: 22px;
            background: #f59e0b;
            border-radius: 4px 4px 0 0;
            animation-delay: -10s;
        }

        .lock-2:before {
            content: '';
            position: absolute;
            top: -7px;
            left: 3px;
            width: 12px;
            height: 12px;
            border: 2px solid #f59e0b;
            border-radius: 50% 50% 0 0;
            border-bottom: none;
        }

        .key-1 {
            bottom: 20%;
            left: 45%;
            width: 30px;
            height: 8px;
            background: #10b981;
            border-radius: 4px 0 0 4px;
            animation-delay: -7s;
        }

        .key-1:before {
            content: '';
            position: absolute;
            left: -8px;
            top: -4px;
            width: 16px;
            height: 16px;
            background: #10b981;
            border-radius: 50%;
        }

        .key-1:after {
            content: '';
            position: absolute;
            right: -6px;
            top: -2px;
            width: 6px;
            height: 4px;
            background: #10b981;
        }

        .key-2 {
            top: 35%;
            right: 15%;
            width: 25px;
            height: 6px;
            background: #3b82f6;
            border-radius: 3px 0 0 3px;
            animation-delay: -12s;
        }

        .key-2:before {
            content: '';
            position: absolute;
            left: -6px;
            top: -3px;
            width: 12px;
            height: 12px;
            background: #3b82f6;
            border-radius: 50%;
        }

        .key-2:after {
            content: '';
            position: absolute;
            right: -4px;
            top: -1px;
            width: 4px;
            height: 3px;
            background: #3b82f6;
        }

        @keyframes securityShapeFloat {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            25% { transform: translateY(-40px) rotate(90deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
            75% { transform: translateY(-50px) rotate(270deg); }
        }

        /* ===== ENHANCED ANIMATED PATHS ===== */
        .security-animated-path {
            stroke-dasharray: 800;
            stroke-dashoffset: 800;
            animation: securityDrawPath 12s ease-in-out infinite;
        }

        .path-1 { animation-delay: 0s; }
        .path-2 { animation-delay: -1s; }
        .path-3 { animation-delay: -2s; }
        .path-4 { animation-delay: -3s; }
        .path-5 { animation-delay: -4s; }
        .path-6 { animation-delay: -5s; }
        .path-7 { animation-delay: -6s; }
        .path-8 { animation-delay: -7s; }

        @keyframes securityDrawPath {
            0% { 
                stroke-dashoffset: 800; 
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            50% { 
                stroke-dashoffset: 0; 
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% { 
                stroke-dashoffset: -800; 
                opacity: 0;
            }
        }

        /* ===== FLOATING ICONS ===== */
        .security-floating-icons {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .security-floating-icon {
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
            animation: securityIconFloat 10s ease-in-out infinite;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .icon-1 {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .icon-2 {
            top: 60%;
            left: 24%;
            animation-delay: -2s;
        }

        .icon-3 {
            top: 40%;
            left: 28%;
            animation-delay: -4s;
        }

        .icon-4 {
            top: 40%;
            left: 43%;
            animation-delay: -6s;
        }

        .icon-5 {
            top: 20%;
            right: 18%;
            animation-delay: -8s;
        }

        .icon-6 {
            top: 60%;
            right: 6%;
            animation-delay: -10s;
        }

        @keyframes securityIconFloat {
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
        .security-pulsing-dots {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .security-pulsing-dot {
            position: absolute;
            width: 8px;
            height: 8px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            animation: securityPulseDot 4s ease-in-out infinite;
        }

        @keyframes securityPulseDot {
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
        .security-radial-gradient {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            animation: securityRadialPulse 12s ease-in-out infinite;
        }

        .radial-1 {
            top: 15%;
            left: 25%;
            width: 450px;
            height: 450px;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.08) 0%, transparent 70%);
            animation-delay: 0s;
        }

        .radial-2 {
            bottom: 25%;
            right: 15%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.08) 0%, transparent 70%);
            animation-delay: -4s;
        }

        .radial-3 {
            top: 55%;
            left: 5%;
            width: 350px;
            height: 350px;
            background: radial-gradient(circle, rgba(139, 92, 246, 0.08) 0%, transparent 70%);
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

        @keyframes securityRadialPulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.08;
            }
            50% {
                transform: scale(1.3);
                opacity: 0.15;
            }
        }

        /* ===== SECURITY BUBBLES ===== */
        .security-bubbles {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .security-bubble {
            position: absolute;
            font-size: 3rem;
            opacity: 0.1;
            animation: securityBubbleFloat 8s ease-in-out infinite;
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

        @keyframes securityBubbleFloat {
            0%, 100% {
                transform: translateY(0px) scale(1);
                opacity: 0.1;
            }
            50% {
                transform: translateY(-30px) scale(1.1);
                opacity: 0.2;
            }
        }

        /* ===== CONNECTION DOTS ===== */
        .connection-dot {
            filter: drop-shadow(0 0 6px currentColor);
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Initialize scroll animations
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

            // Observe all elements with data-aos attribute
            document.querySelectorAll("[data-aos]").forEach((el) => {
                observer.observe(el)
            })

            // Counter animation
            function animateCounter(element) {
                const target = parseInt(element.getAttribute('data-target'))
                const duration = 2000
                const step = target / (duration / 16)
                let current = 0

                const timer = setInterval(() => {
                    current += step
                    if (current >= target) {
                        current = target
                        clearInterval(timer)
                    }
                    
                    if (target === 99.9) {
                        element.textContent = current.toFixed(1)
                    } else {
                        element.textContent = Math.floor(current)
                    }
                }, 16)
            }

            // Trigger counter animation when stats section is visible
            const statsObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const counters = entry.target.querySelectorAll('.counter')
                        counters.forEach(counter => {
                            animateCounter(counter)
                        })
                        statsObserver.unobserve(entry.target)
                    }
                })
            }, { threshold: 0.5 })

            const statsSection = document.querySelector('.grid.md\\:grid-cols-4')
            if (statsSection) {
                statsObserver.observe(statsSection)
            }
        })
    </script>
</section>
