   <style>
        /* ===== BACKGROUND ANIMATIONS ===== */
        .morphing-blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(40px);
            animation: blob 7s infinite;
        }

        .blob-1 {
            top: 10%;
            right: 10%;
            width: 300px;
            height: 300px;
            background: linear-gradient(45deg, #8b5cf6, #ec4899);
            opacity: 0.1;
            animation-delay: 0s;
        }

        .blob-2 {
            bottom: 10%;
            left: 10%;
            width: 400px;
            height: 400px;
            background: linear-gradient(45deg, #3b82f6, #8b5cf6);
            opacity: 0.08;
            animation-delay: -2s;
        }

        .blob-3 {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 250px;
            height: 250px;
            background: linear-gradient(45deg, #ec4899, #f59e0b);
            opacity: 0.06;
            animation-delay: -4s;
        }

        @keyframes blob {
            0% {
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
            100% {
                transform: translate(0px, 0px) scale(1) rotate(360deg);
            }
        }

        /* ===== FLOATING PARTICLES ===== */
        .floating-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
                opacity: 0.3;
            }
            50% {
                transform: translateY(-30px) rotate(180deg);
                opacity: 0.8;
            }
        }

        /* ===== TEXT ANIMATIONS ===== */
        .gradient-text {
            background: linear-gradient(45deg, #8b5cf6, #ec4899, #3b82f6, #10b981);
            background-size: 300% 300%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradient-shift 4s ease infinite;
        }

        .gradient-text-animated {
            background: linear-gradient(-45deg, #ffffff, #8b5cf6, #ec4899, #ffffff);
            background-size: 400% 400%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradient-wave 3s ease infinite;
        }

        @keyframes gradient-shift {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }

        @keyframes gradient-wave {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }

        /* ===== FADE IN ANIMATIONS ===== */
        .fade-in-element {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease-out 0.3s forwards;
        }

        .slide-up {
            opacity: 0;
            transform: translateY(20px);
            animation: slideUp 1s ease-out 0.6s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ===== FEATURE CARDS ===== */
        .feature-card {
            opacity: 0;
            transform: translateY(50px) scale(0.9);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .feature-card.aos-animate {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .feature-card-inner {
            position: relative;
            height: 100%;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 2rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
        }

        .feature-card-inner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(139, 92, 246, 0.1), rgba(236, 72, 153, 0.1));
            opacity: 0;
            transition: opacity 0.4s ease;
            border-radius: 24px;
        }

        .feature-card:hover .feature-card-inner {
            transform: translateY(-8px) scale(1.02);
            border-color: rgba(139, 92, 246, 0.3);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(139, 92, 246, 0.2), 0 0 50px rgba(139, 92, 246, 0.1);
        }

        .feature-card:hover .feature-card-inner::before {
            opacity: 1;
        }

        .feature-card:hover .feature-card-inner h3 {
            color: #c084fc;
            transform: translateX(5px);
        }

        .feature-card:hover .feature-card-inner p {
            color: rgba(255, 255, 255, 0.9);
        }

        /* ===== FEATURE ICONS ===== */
        .feature-icon {
            position: relative;
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, #8b5cf6, #ec4899);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 8px 32px rgba(139, 92, 246, 0.3);
            z-index: 10;
        }

        .feature-icon::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #a855f7, #f472b6);
            border-radius: 16px;
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 1;
        }

        .feature-icon::after {
            content: "";
            position: absolute;
            inset: -2px;
            background: linear-gradient(135deg, #8b5cf6, #ec4899, #3b82f6);
            border-radius: 18px;
            z-index: -1;
            opacity: 0;
            animation: rotate 3s linear infinite;
        }

        .feature-icon svg {
            position: relative;
            z-index: 20;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 12px 40px rgba(139, 92, 246, 0.4);
        }

        .feature-card:hover .feature-icon::before {
            opacity: 1;
        }

        .feature-card:hover .feature-icon::after {
            opacity: 1;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        /* ===== HOVER INDICATORS ===== */
        .hover-indicator {
            position: absolute;
            bottom: 1rem;
            right: 1rem;
            width: 8px;
            height: 8px;
            background: #8b5cf6;
            border-radius: 50%;
            opacity: 0;
            transform: scale(0);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .feature-card:hover .hover-indicator {
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

        /* ===== RESPONSIVE DESIGN ===== */
        @media (max-width: 768px) {
            .feature-card-inner {
                padding: 1.5rem;
            }

            .gradient-text-animated {
                font-size: 2.5rem !important;
            }

            .blob-1, .blob-2, .blob-3 {
                width: 200px;
                height: 200px;
            }
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

        /* ===== ADDITIONAL EFFECTS ===== */
        .glow-effect {
            position: relative;
        }

        .glow-effect::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #8b5cf6, #ec4899, #3b82f6, #10b981);
            border-radius: 26px;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .feature-card:hover .glow-effect::before {
            opacity: 0.7;
            animation: glow-rotate 2s linear infinite;
        }

        @keyframes glow-rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* ===== SMOOTH SCROLLING ===== */
        html {
            scroll-behavior: smooth;
        }

        /* ===== CUSTOM SCROLLBAR ===== */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #1a1a1a;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(45deg, #8b5cf6, #ec4899);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(45deg, #a855f7, #f472b6);
        }
    </style>
<section id="fitur" class="py-20 relative overflow-hidden bg-black">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="morphing-blob blob-1"></div>
        <div class="morphing-blob blob-2"></div>
        <div class="morphing-blob blob-3"></div>
        
        <!-- Floating particles -->
        <div class="floating-particles">
            @for ($i = 0; $i < 20; $i++)
                <div class="particle" style="
                    left: {{ rand(0, 100) }}%; 
                    top: {{ rand(0, 100) }}%; 
                    animation-delay: {{ rand(0, 5000) }}ms;
                    animation-duration: {{ rand(3000, 7000) }}ms;
                "></div>
            @endfor
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in-element">
            <h2 class="text-5xl font-bold text-white mb-6 gradient-text-animated">
                Mengapa Pilih <span class="gradient-text">AyoKerja</span> untuk Karir & Penghasilan?
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto slide-up">
                Platform dual-purpose yang menggabungkan pencarian kerja profesional dengan peluang earning dari tugas online
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                <div class="feature-card-inner">
                    <div class="feature-icon">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Pencarian Kerja & Tugas Cerdas</h3>
                    <p class="text-gray-300 leading-relaxed">
                        AI yang membantu menemukan pekerjaan full-time dan tugas part-time yang sesuai dengan keahlian dan preferensi Anda
                    </p>
                    <div class="hover-indicator"></div>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card-inner">
                    <div class="feature-icon">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Dual Income Stream</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Dapatkan gaji tetap dari pekerjaan full-time dan penghasilan tambahan dari tugas online yang fleksibel
                    </p>
                    <div class="hover-indicator"></div>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card-inner">
                    <div class="feature-icon">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Pembayaran Aman & Cepat</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Sistem escrow untuk tugas online dan direct transfer untuk gaji dengan keamanan tingkat bank
                    </p>
                    <div class="hover-indicator"></div>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card-inner">
                    <div class="feature-icon">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Komunitas Profesional</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Network dengan pekerja full-time, freelancer, dan task workers untuk berbagi peluang dan tips karir
                    </p>
                    <div class="hover-indicator"></div>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-card-inner">
                    <div class="feature-icon">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Career Analytics</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Pantau progress karir dan earnings dari berbagai sumber dengan dashboard analytics yang komprehensif
                    </p>
                    <div class="hover-indicator"></div>
                </div>
            </div>

            <!-- Feature 6 -->
            <div class="feature-card" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-card-inner">
                    <div class="feature-icon">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Verifikasi Perusahaan</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Semua employer dan task provider telah diverifikasi untuk memastikan keamanan dan kredibilitas
                    </p>
                    <div class="hover-indicator"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
// Simple AOS (Animate On Scroll) implementation
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

    // Add parallax effect to blobs
    window.addEventListener("scroll", () => {
        const scrolled = window.pageYOffset
        const parallaxElements = document.querySelectorAll(".morphing-blob")

        parallaxElements.forEach((element, index) => {
            const speed = 0.1 + index * 0.05
            const yPos = -(scrolled * speed)
            element.style.transform = `translateY(${yPos}px)`
        })
    })
})

</script>