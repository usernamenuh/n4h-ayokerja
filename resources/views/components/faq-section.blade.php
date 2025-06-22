<section class="relative py-20 overflow-hidden bg-gradient-to-br from-gray-900 via-slate-800 to-gray-900" x-data="{ openFaq: null }">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Floating Geometric Shapes -->
        <div class="absolute top-20 left-10 w-32 h-32 bg-blue-500/20 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute top-40 right-20 w-24 h-24 bg-purple-500/20 rounded-full blur-lg animate-bounce" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-20 left-1/4 w-40 h-40 bg-indigo-500/10 rounded-full blur-2xl animate-pulse" style="animation-delay: 2s;"></div>
        
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%236366f1" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
        
        <!-- Animated Lines -->
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-blue-400/50 to-transparent animate-pulse"></div>
        <div class="absolute bottom-0 right-0 w-full h-1 bg-gradient-to-l from-transparent via-purple-400/50 to-transparent animate-pulse" style="animation-delay: 1s;"></div>
        
        <!-- Tech Pattern Background -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-1/4 left-1/4 text-6xl text-blue-400">⚡</div>
            <div class="absolute top-1/3 right-1/4 text-4xl text-purple-400">🚀</div>
            <div class="absolute bottom-1/4 left-1/3 text-5xl text-indigo-400">💼</div>
            <div class="absolute bottom-1/3 right-1/3 text-4xl text-cyan-400">🎯</div>
        </div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header with Animation -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20 mb-6">
                <div class="w-2 h-2 bg-blue-400 rounded-full animate-pulse"></div>
                <span class="text-blue-300 font-medium text-sm">Frequently Asked Questions</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-white via-blue-200 to-purple-200 bg-clip-text text-transparent mb-4">
                Pertanyaan yang Sering Ditanyakan
            </h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">Temukan jawaban untuk pertanyaan umum tentang AyoKerja</p>
        </div>

        <!-- FAQ Items with Stagger Animation -->
        <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
            <!-- FAQ 1 -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute inset-0 bg-gradient-to-r from-green-400/20 to-emerald-400/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 shadow-lg hover:shadow-2xl hover:bg-white/15 transition-all duration-500 hover:scale-[1.02] overflow-hidden">
                    <button @click="openFaq = openFaq === 1 ? null : 1" 
                            class="w-full px-8 py-6 text-left flex items-center justify-between group/button">
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-emerald-500 rounded-xl flex items-center justify-center shadow-lg group-hover/button:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                    </svg>
                                </div>
                                <div class="absolute -top-1 -right-1 w-4 h-4 bg-green-400 rounded-full animate-ping opacity-75"></div>
                            </div>
                            <h3 class="text-xl font-bold text-white group-hover/button:text-green-300 transition-colors">
                                Apakah benar-benar gratis mendaftar?
                            </h3>
                        </div>
                        <div class="relative">
                            <svg class="w-6 h-6 text-gray-300 transition-all duration-300 group-hover/button:text-green-300" 
                                 :class="{ 'rotate-180 text-green-300': openFaq === 1 }" 
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                    
                    <div x-show="openFaq === 1" 
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0 max-h-0"
                         x-transition:enter-end="opacity-100 max-h-96"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 max-h-96"
                         x-transition:leave-end="opacity-0 max-h-0"
                         class="overflow-hidden">
                        <div class="px-8 pb-6">
                            <div class="bg-gradient-to-r from-green-900/50 to-emerald-900/50 rounded-xl p-6 border-l-4 border-green-400 relative overflow-hidden backdrop-blur-sm">
                                <div class="absolute top-0 right-0 w-20 h-20 bg-green-400/20 rounded-full blur-xl"></div>
                                <p class="text-gray-200 leading-relaxed relative z-10">
                                    <strong class="text-green-300">Ya, 100% gratis!</strong> Tidak ada biaya pendaftaran, biaya bulanan, atau biaya tersembunyi. 
                                    Kami hanya mengambil komisi kecil 5% dari gaji yang berhasil Anda dapatkan melalui platform kami, 
                                    dan itu pun hanya setelah Anda benar-benar bekerja.
                                </p>
                                <div class="mt-4 flex items-center space-x-4">
                                    <div class="flex items-center space-x-2 text-green-300 text-sm font-medium">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>200K+ pengguna dipercaya</span>
                                    </div>
                                    <div class="flex items-center space-x-2 text-green-300 text-sm font-medium">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Tanpa biaya tersembunyi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="400">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-400/20 to-pink-400/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 shadow-lg hover:shadow-2xl hover:bg-white/15 transition-all duration-500 hover:scale-[1.02] overflow-hidden">
                    <button @click="openFaq = openFaq === 2 ? null : 2" 
                            class="w-full px-8 py-6 text-left flex items-center justify-between group/button">
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-pink-500 rounded-xl flex items-center justify-center shadow-lg group-hover/button:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="absolute -top-1 -right-1 w-4 h-4 bg-purple-400 rounded-full animate-ping opacity-75"></div>
                            </div>
                            <h3 class="text-xl font-bold text-white group-hover/button:text-purple-300 transition-colors">
                                Berapa lama proses verifikasi akun?
                            </h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-300 transition-all duration-300 group-hover/button:text-purple-300" 
                             :class="{ 'rotate-180 text-purple-300': openFaq === 2 }" 
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openFaq === 2" 
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0 max-h-0"
                         x-transition:enter-end="opacity-100 max-h-96"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 max-h-96"
                         x-transition:leave-end="opacity-0 max-h-0"
                         class="overflow-hidden">
                        <div class="px-8 pb-6">
                            <div class="bg-gradient-to-r from-purple-900/50 to-pink-900/50 rounded-xl p-6 border-l-4 border-purple-400 relative overflow-hidden backdrop-blur-sm">
                                <div class="absolute top-0 right-0 w-20 h-20 bg-purple-400/20 rounded-full blur-xl"></div>
                                <p class="text-gray-200 leading-relaxed relative z-10 mb-4">
                                    <strong class="text-purple-300">Proses verifikasi otomatis hanya membutuhkan 1-2 jam.</strong> 
                                    Untuk verifikasi manual (jika diperlukan), maksimal 24 jam di hari kerja. 
                                    Kami menggunakan AI untuk mempercepat proses verifikasi dokumen Anda.
                                </p>
                                <div class="grid grid-cols-2 gap-4 text-sm">
                                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-center border border-purple-300/30">
                                        <div class="text-purple-300 font-bold text-lg">1-2 Jam</div>
                                        <div class="text-gray-300">Verifikasi Otomatis</div>
                                    </div>
                                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-center border border-purple-300/30">
                                        <div class="text-purple-300 font-bold text-lg">AI-Powered</div>
                                        <div class="text-gray-300">Smart Verification</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="500">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-400/20 to-cyan-400/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 shadow-lg hover:shadow-2xl hover:bg-white/15 transition-all duration-500 hover:scale-[1.02] overflow-hidden">
                    <button @click="openFaq = openFaq === 3 ? null : 3" 
                            class="w-full px-8 py-6 text-left flex items-center justify-between group/button">
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-cyan-500 rounded-xl flex items-center justify-center shadow-lg group-hover/button:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <div class="absolute -top-1 -right-1 w-4 h-4 bg-blue-400 rounded-full animate-ping opacity-75"></div>
                            </div>
                            <h3 class="text-xl font-bold text-white group-hover/button:text-blue-300 transition-colors">
                                Bagaimana sistem pembayaran bekerja?
                            </h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-300 transition-all duration-300 group-hover/button:text-blue-300" 
                             :class="{ 'rotate-180 text-blue-300': openFaq === 3 }" 
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openFaq === 3" 
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0 max-h-0"
                         x-transition:enter-end="opacity-100 max-h-96"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 max-h-96"
                         x-transition:leave-end="opacity-0 max-h-0"
                         class="overflow-hidden">
                        <div class="px-8 pb-6">
                            <div class="bg-gradient-to-r from-blue-900/50 to-cyan-900/50 rounded-xl p-6 border-l-4 border-blue-400 relative overflow-hidden backdrop-blur-sm">
                                <div class="absolute top-0 right-0 w-20 h-20 bg-blue-400/20 rounded-full blur-xl"></div>
                                <p class="text-gray-200 leading-relaxed relative z-10 mb-4">
                                    <strong class="text-blue-300">Kami menggunakan sistem escrow yang aman.</strong> 
                                    Gaji dari perusahaan akan langsung ditransfer ke rekening Anda sesuai jadwal yang disepakati. 
                                    Tidak ada potongan atau biaya tersembunyi.
                                </p>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-3 text-sm">
                                    <div class="bg-gradient-to-br from-blue-800/60 to-blue-700/60 rounded-lg p-4 text-center relative overflow-hidden backdrop-blur-sm border border-blue-400/30">
                                        <div class="absolute inset-0 bg-white/5"></div>
                                        <div class="relative z-10">
                                            <div class="text-blue-300 font-bold text-lg">Step 1</div>
                                            <div class="text-gray-300">Dapat Kerja</div>
                                        </div>
                                    </div>
                                    <div class="bg-gradient-to-br from-blue-700/60 to-cyan-700/60 rounded-lg p-4 text-center relative overflow-hidden backdrop-blur-sm border border-blue-400/30">
                                        <div class="absolute inset-0 bg-white/5"></div>
                                        <div class="relative z-10">
                                            <div class="text-cyan-300 font-bold text-lg">Step 2</div>
                                            <div class="text-gray-300">Mulai Bekerja</div>
                                        </div>
                                    </div>
                                    <div class="bg-gradient-to-br from-cyan-700/60 to-blue-600/60 rounded-lg p-4 text-center relative overflow-hidden backdrop-blur-sm border border-cyan-400/30">
                                        <div class="absolute inset-0 bg-white/5"></div>
                                        <div class="relative z-10">
                                            <div class="text-cyan-200 font-bold text-lg">Step 3</div>
                                            <div class="text-gray-300">Terima Gaji</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="600">
                <div class="absolute inset-0 bg-gradient-to-r from-red-400/20 to-orange-400/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 shadow-lg hover:shadow-2xl hover:bg-white/15 transition-all duration-500 hover:scale-[1.02] overflow-hidden">
                    <button @click="openFaq = openFaq === 4 ? null : 4" 
                            class="w-full px-8 py-6 text-left flex items-center justify-between group/button">
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <div class="w-12 h-12 bg-gradient-to-br from-red-400 to-orange-500 rounded-xl flex items-center justify-center shadow-lg group-hover/button:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <div class="absolute -top-1 -right-1 w-4 h-4 bg-red-400 rounded-full animate-ping opacity-75"></div>
                            </div>
                            <h3 class="text-xl font-bold text-white group-hover/button:text-red-300 transition-colors">
                                Apakah data pribadi saya aman?
                            </h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-300 transition-all duration-300 group-hover/button:text-red-300" 
                             :class="{ 'rotate-180 text-red-300': openFaq === 4 }" 
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openFaq === 4" 
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0 max-h-0"
                         x-transition:enter-end="opacity-100 max-h-96"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 max-h-96"
                         x-transition:leave-end="opacity-0 max-h-0"
                         class="overflow-hidden">
                        <div class="px-8 pb-6">
                            <div class="bg-gradient-to-r from-red-900/50 to-orange-900/50 rounded-xl p-6 border-l-4 border-red-400 relative overflow-hidden backdrop-blur-sm">
                                <div class="absolute top-0 right-0 w-20 h-20 bg-red-400/20 rounded-full blur-xl"></div>
                                <p class="text-gray-200 leading-relaxed relative z-10 mb-4">
                                    <strong class="text-red-300">Sangat aman!</strong> Kami menggunakan enkripsi SSL 256-bit, 
                                    sertifikat ISO 27001, dan tidak pernah membagikan data pribadi Anda kepada pihak ketiga tanpa izin.
                                </p>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 text-xs">
                                    <div class="bg-gradient-to-br from-red-800/60 to-red-700/60 rounded-lg p-3 text-center backdrop-blur-sm border border-red-400/30">
                                        <div class="text-red-300 font-bold">SSL 256-bit</div>
                                        <div class="text-gray-300">Encryption</div>
                                    </div>
                                    <div class="bg-gradient-to-br from-orange-800/60 to-orange-700/60 rounded-lg p-3 text-center backdrop-blur-sm border border-orange-400/30">
                                        <div class="text-orange-300 font-bold">ISO 27001</div>
                                        <div class="text-gray-300">Certified</div>
                                    </div>
                                    <div class="bg-gradient-to-br from-red-800/60 to-orange-800/60 rounded-lg p-3 text-center backdrop-blur-sm border border-red-400/30">
                                        <div class="text-red-300 font-bold">GDPR</div>
                                        <div class="text-gray-300">Compliant</div>
                                    </div>
                                    <div class="bg-gradient-to-br from-orange-800/60 to-red-800/60 rounded-lg p-3 text-center backdrop-blur-sm border border-orange-400/30">
                                        <div class="text-orange-300 font-bold">2FA</div>
                                        <div class="text-gray-300">Security</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="700">
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/20 to-amber-400/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 shadow-lg hover:shadow-2xl hover:bg-white/15 transition-all duration-500 hover:scale-[1.02] overflow-hidden">
                    <button @click="openFaq = openFaq === 5 ? null : 5" 
                            class="w-full px-8 py-6 text-left flex items-center justify-between group/button">
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-xl flex items-center justify-center shadow-lg group-hover/button:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="absolute -top-1 -right-1 w-4 h-4 bg-yellow-400 rounded-full animate-ping opacity-75"></div>
                            </div>
                            <h3 class="text-xl font-bold text-white group-hover/button:text-yellow-300 transition-colors">
                                Apakah ada aplikasi mobile?
                            </h3>
                        </div>
                        <svg class="w-6 h-6 text-gray-300 transition-all duration-300 group-hover/button:text-yellow-300" 
                             :class="{ 'rotate-180 text-yellow-300': openFaq === 5 }" 
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div x-show="openFaq === 5" 
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0 max-h-0"
                         x-transition:enter-end="opacity-100 max-h-96"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 max-h-96"
                         x-transition:leave-end="opacity-0 max-h-0"
                         class="overflow-hidden">
                        <div class="px-8 pb-6">
                            <div class="bg-gradient-to-r from-yellow-900/50 to-amber-900/50 rounded-xl p-6 border-l-4 border-yellow-400 relative overflow-hidden backdrop-blur-sm">
                                <div class="absolute top-0 right-0 w-20 h-20 bg-yellow-400/20 rounded-full blur-xl"></div>
                                <p class="text-gray-200 leading-relaxed relative z-10 mb-4">
                                    <strong class="text-yellow-300">Ya!</strong> Aplikasi AyoKerja tersedia di Google Play Store dan App Store. 
                                    Anda bisa mengakses semua fitur dengan mudah dari smartphone, termasuk notifikasi real-time untuk lowongan baru.
                                </p>
                                <div class="flex items-center justify-center space-x-6 mt-4">
                                    <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-lg px-4 py-2 border border-yellow-300/30">
                                        <div class="flex text-yellow-400">
                                            <span>⭐⭐⭐⭐⭐</span>
                                        </div>
                                        <span class="text-yellow-300 font-medium text-sm">4.9/5 rating</span>
                                    </div>
                                    <div class="bg-white/10 backdrop-blur-sm rounded-lg px-4 py-2 border border-yellow-300/30">
                                        <span class="text-yellow-300 font-medium text-sm">100K+ downloads</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced CTA -->
        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="800">
            <div class="relative inline-block">
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-400/30 to-purple-400/30 rounded-full blur-xl animate-pulse"></div>
                <div class="relative bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 shadow-xl">
                    <p class="text-gray-200 mb-6 text-lg">Masih ada pertanyaan lain?</p>
                    <a href="#" class="inline-flex items-center space-x-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-8 py-4 rounded-full font-semibold hover:from-indigo-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-2xl hover:scale-105 group">
                        <svg class="w-5 h-5 group-hover:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        <span>Hubungi Customer Support</span>
                        <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
