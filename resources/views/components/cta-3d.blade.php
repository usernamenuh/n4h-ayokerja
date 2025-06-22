<section class="py-20 relative overflow-hidden bg-black">
    <!-- Dark Background with Subtle Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Dark gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-black to-gray-900"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-purple-900/5 via-transparent to-blue-900/5"></div>
        
        <!-- Subtle morphing elements -->
        <div class="absolute top-10 left-10 w-40 h-40 bg-white/3 rounded-full morphing-blob"></div>
        <div class="absolute bottom-10 right-10 w-60 h-60 bg-purple-500/5 rounded-full morphing-blob" style="animation-delay: -2s;"></div>
        <div class="absolute top-1/2 left-1/3 w-32 h-32 bg-blue-500/5 rounded-full morphing-blob" style="animation-delay: -4s;"></div>
    </div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="fade-in">
            <h2 class="text-5xl lg:text-6xl font-bold text-white mb-8 text-glow">
                Siap Memulai Karir & Earning Online?
            </h2>
            <p class="text-2xl text-white/70 mb-12 max-w-3xl mx-auto leading-relaxed">
                Bergabunglah dengan ribuan profesional yang telah menemukan pekerjaan impian dan menghasilkan uang tambahan dari tugas online
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12 scale-in">
                <a href="{{ route('register') }}" 
                   class="gradient-bg text-white px-10 py-5 rounded-2xl text-xl font-semibold hover:scale-110 transition-all duration-300 neon-glow shadow-2xl border border-white/20">
                    🚀 Mulai Sekarang - Gratis
                </a>
                <a href="#fitur" 
                   class="glass-effect text-white px-10 py-5 rounded-2xl text-xl font-semibold hover:scale-105 transition-all duration-300 border border-white/30 hover:border-white/60">
                    📖 Pelajari Lebih Lanjut
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-white slide-left">
                <div class="glass-effect rounded-2xl p-6 card-3d hover:neon-glow transition-all duration-300 border border-white/10">
                    <div class="text-3xl font-bold mb-2 gradient-text">✓ Akses Gratis ke Semua Fitur</div>
                    <p class="text-white/60">Tidak ada biaya pendaftaran atau biaya tersembunyi</p>
                </div>
                <div class="glass-effect rounded-2xl p-6 card-3d hover:neon-glow transition-all duration-300 border border-white/10" style="animation-delay: 0.1s;">
                    <div class="text-3xl font-bold mb-2 gradient-text">⚡ Dual Income Opportunity</div>
                    <p class="text-white/60">Terima pembayaran langsung setelah tugas selesai</p>
                </div>
                <div class="glass-effect rounded-2xl p-6 card-3d hover:neon-glow transition-all duration-300 border border-white/10" style="animation-delay: 0.2s;">
                    <div class="text-3xl font-bold mb-2 gradient-text">🛡️ Verified Jobs & Tasks</div>
                    <p class="text-white/60">Sistem escrow melindungi setiap transaksi Anda</p>
                </div>
            </div>
        </div>
    </div>
</section>
