<section class="py-20 relative overflow-hidden bg-black">
    <!-- Dark Background with Subtle Gradients -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Subtle gradient overlays -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-black to-gray-900"></div>
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-purple-900/10 via-transparent to-blue-900/10"></div>
        
        <!-- Morphing background elements with darker tones -->
        <div class="absolute top-10 left-10 w-32 h-32 bg-white/5 rounded-full morphing-blob"></div>
        <div class="absolute bottom-10 right-10 w-48 h-48 bg-purple-500/10 rounded-full morphing-blob" style="animation-delay: -3s;"></div>
        <div class="absolute top-1/2 left-1/4 w-24 h-24 bg-blue-500/10 rounded-full morphing-blob" style="animation-delay: -6s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-5xl font-bold text-white mb-6">
                Dipercaya oleh Ribuan <span class="gradient-text">Pekerja & Task Workers</span>
            </h2>
            <p class="text-xl text-white/70">
                Bergabunglah dengan komunitas freelancer terbesar di Indonesia
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center glass-effect rounded-3xl p-8 card-3d hover:neon-glow transition-all duration-500 scale-in border border-white/10">
                <div class="text-6xl font-bold text-white mb-2 text-glow" data-counter="200000">0</div>
                <div class="text-white/70 text-lg">Pengguna Aktif</div>
            </div>
            <div class="text-center glass-effect rounded-3xl p-8 card-3d hover:neon-glow transition-all duration-500 scale-in border border-white/10" style="animation-delay: 0.1s;">
                <div class="text-6xl font-bold text-white mb-2 text-glow" data-counter="100000">0</div>
                <div class="text-white/70 text-lg">Lowongan Kerja</div>
            </div>
            <div class="text-center glass-effect rounded-3xl p-8 card-3d hover:neon-glow transition-all duration-500 scale-in border border-white/10" style="animation-delay: 0.2s;">
                <div class="text-6xl font-bold text-white mb-2 text-glow" data-counter="50000">0</div>
                <div class="text-white/70 text-lg">Tugas Tersedia</div>
            </div>
            <div class="text-center glass-effect rounded-3xl p-8 card-3d hover:neon-glow transition-all duration-500 scale-in border border-white/10" style="animation-delay: 0.3s;">
                <div class="text-6xl font-bold text-white mb-2 text-glow" data-counter="98">0</div>
                <div class="text-white/70 text-lg">Tingkat Kepuasan</div>
            </div>
        </div>

        <!-- Additional Trust Indicators -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 fade-in">
            <div class="text-center">
                <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-4 neon-glow">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Keamanan Terjamin</h3>
                <p class="text-white/60">Sistem escrow dan verifikasi berlapis</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-4 neon-glow">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Pembayaran Cepat</h3>
                <p class="text-white/60">Transfer langsung dalam 24 jam</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-4 neon-glow">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 109.75 9.75A9.75 9.75 0 0012 2.25z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Support 24/7</h3>
                <p class="text-white/60">Tim customer service siap membantu</p>
            </div>
        </div>
    </div>
</section>

<script>
// Counter Animation
function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-counter'));
    const duration = 2000;
    const step = target / (duration / 16);
    let current = 0;
    
    const timer = setInterval(() => {
        current += step;
        if (current >= target) {
            current = target;
            clearInterval(timer);
        }
        
        if (target >= 1000) {
            element.textContent = Math.floor(current / 1000) + 'K+';
        } else {
            element.textContent = Math.floor(current) + '%';
        }
    }, 16);
}

// Intersection Observer for counter animation
const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counter = entry.target;
            if (!counter.classList.contains('animated')) {
                counter.classList.add('animated');
                animateCounter(counter);
            }
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('[data-counter]');
    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
});
</script>
