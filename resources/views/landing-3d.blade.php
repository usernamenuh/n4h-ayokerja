<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AyoKerja - Platform Pencari Kerja & Tugas Online</title>
    <meta name="description" content="Cari kerja impian atau kerjakan tugas online untuk mendapatkan uang. Platform terlengkap untuk karir dan penghasilan tambahan di Indonesia.">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    
    <!-- GSAP for animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    
    <!-- Custom Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .glass-dark {
            background: rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        #static-navbar {
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .floating-navbar {
            transform: translateY(-120px);
            opacity: 0;
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .floating-navbar.show {
            transform: translateY(0);
            opacity: 1;
        }
        
        .hero-3d {
            position: relative;
            overflow: hidden;
        }
        
        #three-canvas {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }
        
        .hero-content {
            position: relative;
            z-index: 10;
        }
        
        .floating-card {
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-card:nth-child(2) {
            animation-delay: -2s;
        }
        
        .floating-card:nth-child(3) {
            animation-delay: -4s;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            33% {
                transform: translateY(-20px) rotate(1deg);
            }
            66% {
                transform: translateY(-10px) rotate(-1deg);
            }
        }
        
        .morphing-blob {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: morph 8s ease-in-out infinite;
        }
        
        @keyframes morph {
            0%, 100% {
                border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            }
            25% {
                border-radius: 58% 42% 75% 25% / 76% 46% 54% 24%;
            }
            50% {
                border-radius: 50% 50% 33% 67% / 55% 27% 73% 45%;
            }
            75% {
                border-radius: 33% 67% 58% 42% / 63% 68% 32% 37%;
            }
        }
        
        .neon-glow {
            box-shadow: 0 0 20px rgba(102, 126, 234, 0.5),
                        0 0 40px rgba(102, 126, 234, 0.3),
                        0 0 60px rgba(102, 126, 234, 0.1);
        }
        
        .text-glow {
            text-shadow: 0 0 20px rgba(102, 126, 234, 0.5);
        }
        
        .card-3d {
            transform-style: preserve-3d;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-3d:hover {
            transform: rotateY(10deg) rotateX(10deg) translateZ(20px);
        }
        
        .parallax-element {
            will-change: transform;
        }
        
        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            transform-origin: left;
            transform: scaleX(0);
            z-index: 1000;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1);
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 4px;
        }
        
        .typing-cursor::after {
            content: '|';
            animation: blink 1s infinite;
        }
        
        @keyframes blink {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0; }
        }
    </style>
</head>
<body class="bg-black text-white overflow-x-hidden">
    <!-- Scroll Progress Indicator -->
    <div class="scroll-indicator" id="scrollIndicator"></div>
    
    <!-- Floating Navbar -->
    @include('components.navbar-3d')
    
    <!-- Hero Section with 3D -->
    @include('components.hero-3d')
    
    <!-- Features Section -->
    @include('components.features-3d')
    
    <!-- How It Works -->
    @include('components.how-it-works-3d')

    <!-- Mobile App Section -->
    {{-- @include('components.mobile-app-section') --}}
    
    <!-- Stats Section -->
    @include('components.stats-3d')
    
    <!-- Testimonials -->
    @include('components.testimonials-3d')

    <!-- Security Section -->
    @include('components.security-section')

    <!-- FAQ Section -->
    @include('components.faq-section')
    
    <!-- CTA Section -->
    @include('components.cta-3d')
    
    <!-- Footer -->
    @include('components.footer-3d')

    <script>
        
        // Initialize GSAP ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);
        
        // Initialize all animations
        document.addEventListener('DOMContentLoaded', () => {
            initNavbarAnimation();
            initScrollIndicator();
            init3DScene();
            initScrollAnimations();
            initParallaxEffects();
            initTypingAnimation();
        });
        
        // Navbar floating animation
        function initNavbarAnimation() {
            const staticNavbar = document.getElementById('static-navbar');
            const floatingNavbar = document.getElementById('floating-navbar');
            let lastScrollY = window.scrollY;
            
            window.addEventListener('scroll', () => {
                const currentScrollY = window.scrollY;
                
                if (currentScrollY > 150) {
                    // Hide static navbar and show floating navbar
                    staticNavbar.style.transform = 'translateY(-100%)';
                    staticNavbar.style.opacity = '0';
                    
                    if (currentScrollY < lastScrollY) {
                        // Scrolling up - show floating navbar
                        floatingNavbar.classList.add('show');
                    } else {
                        // Scrolling down - hide floating navbar
                        floatingNavbar.classList.remove('show');
                    }
                } else {
                    // Show static navbar and hide floating navbar
                    staticNavbar.style.transform = 'translateY(0)';
                    staticNavbar.style.opacity = '1';
                    floatingNavbar.classList.remove('show');
                }
                
                lastScrollY = currentScrollY;
            });
        }
        
        // Scroll progress indicator
        function initScrollIndicator() {
            const indicator = document.getElementById('scrollIndicator');
            
            window.addEventListener('scroll', () => {
                const scrollTop = window.pageYOffset;
                const docHeight = document.body.offsetHeight - window.innerHeight;
                const scrollPercent = scrollTop / docHeight;
                
                indicator.style.transform = `scaleX(${scrollPercent})`;
            });
        }
        
        // 3D Scene initialization
        function init3DScene() {
            const canvas = document.getElementById('three-canvas');
            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
            const renderer = new THREE.WebGLRenderer({ canvas, alpha: true });
            
            renderer.setSize(window.innerWidth, window.innerHeight);
            renderer.setClearColor(0x000000, 0);
            
            // Create floating geometric shapes
            const geometries = [
                new THREE.BoxGeometry(1, 1, 1),
                new THREE.SphereGeometry(0.7, 32, 32),
                new THREE.ConeGeometry(0.7, 1.5, 8),
                new THREE.TorusGeometry(0.7, 0.3, 16, 100)
            ];
            
            const materials = [
                new THREE.MeshBasicMaterial({ 
                    color: 0x667eea, 
                    wireframe: true,
                    transparent: true,
                    opacity: 0.6
                }),
                new THREE.MeshBasicMaterial({ 
                    color: 0x764ba2, 
                    wireframe: true,
                    transparent: true,
                    opacity: 0.4
                })
            ];
            
            const meshes = [];
            
            for (let i = 0; i < 15; i++) {
                const geometry = geometries[Math.floor(Math.random() * geometries.length)];
                const material = materials[Math.floor(Math.random() * materials.length)];
                const mesh = new THREE.Mesh(geometry, material);
                
                mesh.position.x = (Math.random() - 0.5) * 20;
                mesh.position.y = (Math.random() - 0.5) * 20;
                mesh.position.z = (Math.random() - 0.5) * 20;
                
                mesh.rotation.x = Math.random() * Math.PI;
                mesh.rotation.y = Math.random() * Math.PI;
                
                scene.add(mesh);
                meshes.push(mesh);
            }
            
            camera.position.z = 10;
            
            // Animation loop
            function animate() {
                requestAnimationFrame(animate);
                
                meshes.forEach((mesh, index) => {
                    mesh.rotation.x += 0.005 + index * 0.001;
                    mesh.rotation.y += 0.005 + index * 0.001;
                    
                    // Floating movement
                    mesh.position.y += Math.sin(Date.now() * 0.001 + index) * 0.01;
                });
                
                renderer.render(scene, camera);
            }
            
            animate();
            
            // Handle resize
            window.addEventListener('resize', () => {
                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(window.innerWidth, window.innerHeight);
            });
            
            // Mouse interaction
            let mouseX = 0, mouseY = 0;
            
            document.addEventListener('mousemove', (event) => {
                mouseX = (event.clientX / window.innerWidth) * 2 - 1;
                mouseY = -(event.clientY / window.innerHeight) * 2 + 1;
                
                camera.position.x = mouseX * 2;
                camera.position.y = mouseY * 2;
                camera.lookAt(scene.position);
            });
        }
        
        // GSAP Scroll Animations
        function initScrollAnimations() {
            // Fade in animations
            gsap.utils.toArray('.fade-in').forEach((element) => {
                gsap.fromTo(element, 
                    { opacity: 0, y: 50 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 1,
                        scrollTrigger: {
                            trigger: element,
                            start: 'top 80%',
                            end: 'bottom 20%',
                            toggleActions: 'play none none reverse'
                        }
                    }
                );
            });
            
            // Scale animations
            gsap.utils.toArray('.scale-in').forEach((element) => {
                gsap.fromTo(element,
                    { scale: 0.8, opacity: 0 },
                    {
                        scale: 1,
                        opacity: 1,
                        duration: 0.8,
                        scrollTrigger: {
                            trigger: element,
                            start: 'top 80%',
                            toggleActions: 'play none none reverse'
                        }
                    }
                );
            });
            
            // Slide animations
            gsap.utils.toArray('.slide-left').forEach((element) => {
                gsap.fromTo(element,
                    { x: -100, opacity: 0 },
                    {
                        x: 0,
                        opacity: 1,
                        duration: 1,
                        scrollTrigger: {
                            trigger: element,
                            start: 'top 80%',
                            toggleActions: 'play none none reverse'
                        }
                    }
                );
            });
            
            gsap.utils.toArray('.slide-right').forEach((element) => {
                gsap.fromTo(element,
                    { x: 100, opacity: 0 },
                    {
                        x: 0,
                        opacity: 1,
                        duration: 1,
                        scrollTrigger: {
                            trigger: element,
                            start: 'top 80%',
                            toggleActions: 'play none none reverse'
                        }
                    }
                );
            });
        }
        
        // Parallax effects
        function initParallaxEffects() {
            gsap.utils.toArray('.parallax-element').forEach((element) => {
                const speed = element.dataset.speed || 0.5;
                
                gsap.to(element, {
                    yPercent: -50 * speed,
                    ease: "none",
                    scrollTrigger: {
                        trigger: element,
                        start: "top bottom",
                        end: "bottom top",
                        scrub: true
                    }
                });
            });
        }
        
        // Typing animation
        function initTypingAnimation() {
            const typingElement = document.querySelector('.typing-text');
            if (!typingElement) return;
            
            const texts = [
                'Kerjakan Tugas',
                'Dapatkan Uang',
                'Raih Kesuksesan',
                'Wujudkan Impian'
            ];
            
            let textIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            
            function typeText() {
                const currentText = texts[textIndex];
                
                if (isDeleting) {
                    typingElement.textContent = currentText.substring(0, charIndex - 1);
                    charIndex--;
                } else {
                    typingElement.textContent = currentText.substring(0, charIndex + 1);
                    charIndex++;
                }
                
                let typeSpeed = isDeleting ? 50 : 100;
                
                if (!isDeleting && charIndex === currentText.length) {
                    typeSpeed = 2000;
                    isDeleting = true;
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    textIndex = (textIndex + 1) % texts.length;
                    typeSpeed = 500;
                }
                
                setTimeout(typeText, typeSpeed);
            }
            
            typeText();
        }
    </script>
</body>
</html>
