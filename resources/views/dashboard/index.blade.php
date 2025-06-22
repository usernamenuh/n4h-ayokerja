<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - AyoKerja</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        /* ===== DASHBOARD ANIMATIONS ===== */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes pulse-glow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(139, 92, 246, 0.3);
            }
            50% {
                box-shadow: 0 0 30px rgba(139, 92, 246, 0.6);
            }
        }
        
        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        .animate-slideInLeft {
            animation: slideInLeft 0.6s ease-out forwards;
        }
        
        .animate-slideInRight {
            animation: slideInRight 0.6s ease-out forwards;
        }
        
        .animate-pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }
        
        .animate-gradient-shift {
            background-size: 200% 200%;
            animation: gradient-shift 3s ease infinite;
        }
        
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        
        .animate-spin-slow {
            animation: spin-slow 3s linear infinite;
        }

        /* ===== GLASSMORPHISM ===== */
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 
                0 8px 32px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }
        
        .glass-sidebar {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* ===== GRADIENT BACKGROUNDS ===== */
        .gradient-bg-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .gradient-bg-success {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }
        
        .gradient-bg-warning {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }
        
        .gradient-bg-info {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        /* ===== HOVER EFFECTS ===== */
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        /* ===== CUSTOM SCROLLBAR ===== */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 3px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 3px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #764ba2, #f093fb);
        }

        /* ===== NOTIFICATION BADGE ===== */
        .notification-badge {
            position: relative;
        }
        
        .notification-badge::after {
            content: '';
            position: absolute;
            top: -2px;
            right: -2px;
            width: 8px;
            height: 8px;
            background: #ef4444;
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        /* ===== CHART CONTAINER ===== */
        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .glass-sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            
            .glass-sidebar.open {
                transform: translateX(0);
            }
        }
    </style>
</head>

<body class="bg-black text-white min-h-screen overflow-x-hidden" x-data="dashboardData()">
    <!-- Background Effects -->
    <div class="fixed inset-0 pointer-events-none">
        <!-- Animated Background Orbs -->
        <div class="absolute top-10 right-10 w-72 h-72 bg-gradient-to-r from-purple-400 to-pink-400 opacity-10 rounded-full animate-float"></div>
        <div class="absolute bottom-10 left-10 w-96 h-96 bg-gradient-to-r from-blue-400 to-purple-600 opacity-5 rounded-full animate-float" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-r from-pink-400 to-purple-400 opacity-5 rounded-full animate-float" style="animation-delay: 2s;"></div>
        
        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 30px 30px;"></div>
        </div>
    </div>

    <div class="flex min-h-screen relative z-10">
        <!-- Enhanced Sidebar -->
        <aside class="glass-sidebar w-64 fixed left-0 top-0 h-full z-30 custom-scrollbar overflow-y-auto" 
               :class="{ 'open': sidebarOpen }" 
               x-show="sidebarOpen || window.innerWidth >= 768">
            
            <!-- Logo Section -->
            <div class="p-6 border-b border-white/10">
                <div class="flex items-center space-x-3 group">
                    <div class="w-10 h-10 gradient-bg-primary rounded-xl flex items-center justify-center animate-pulse-glow">
                        <svg class="w-5 h-5 text-white group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">AyoKerja</h1>
                        <p class="text-xs text-white/60">Dashboard</p>
                    </div>
                </div>
            </div>

            <!-- Navigation Menu -->
            <nav class="p-4 space-y-2">
                <a href="#" @click="activeTab = 'overview'" 
                   :class="activeTab === 'overview' ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5'"
                   class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6H8V5z"></path>
                    </svg>
                    <span>Overview</span>
                </a>

                <a href="#" @click="activeTab = 'jobs'" 
                   :class="activeTab === 'jobs' ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5'"
                   class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                    </svg>
                    <span>Job Applications</span>
                    <span class="notification-badge"></span>
                </a>

                <a href="#" @click="activeTab = 'tasks'" 
                   :class="activeTab === 'tasks' ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5'"
                   class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                    <span>Active Tasks</span>
                </a>

                <a href="#" @click="activeTab = 'earnings'" 
                   :class="activeTab === 'earnings' ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5'"
                   class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                    <span>Earnings</span>
                </a>

                <a href="#" @click="activeTab = 'analytics'" 
                   :class="activeTab === 'analytics' ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5'"
                   class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    <span>Analytics</span>
                </a>

                <a href="#" @click="activeTab = 'profile'" 
                   :class="activeTab === 'profile' ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5'"
                   class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span>Profile</span>
                </a>

                <a href="#" @click="activeTab = 'settings'" 
                   :class="activeTab === 'settings' ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5'"
                   class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Settings</span>
                </a>
            </nav>

            <!-- User Profile Section -->
            <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-white/10">
                <div class="flex items-center space-x-3 group cursor-pointer hover:bg-white/5 p-3 rounded-xl transition-all duration-300">
                    <img src="/placeholder.svg?height=40&width=40" alt="Profile" class="w-10 h-10 rounded-full border-2 border-white/20 group-hover:border-purple-400/50 transition-all duration-300">
                    <div class="flex-1">
                        <p class="font-semibold text-white group-hover:text-purple-300 transition-colors duration-300">Sarah Wijaya</p>
                        <p class="text-xs text-white/60">Premium Member</p>
                    </div>
                    <svg class="w-4 h-4 text-white/60 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 ml-0 md:ml-64 min-h-screen">
            <!-- Top Header -->
            <header class="glass-card border-b border-white/10 p-4 md:p-6 sticky top-0 z-20">
                <div class="flex items-center justify-between">
                    <!-- Mobile Menu Button -->
                    <button @click="sidebarOpen = !sidebarOpen" class="md:hidden text-white/80 hover:text-white transition-colors p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>

                    <!-- Page Title -->
                    <div class="flex-1 md:flex-none">
                        <h1 class="text-2xl md:text-3xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent animate-gradient-shift" x-text="getPageTitle()"></h1>
                        <p class="text-white/60 text-sm mt-1">Welcome back! Here's your dashboard overview</p>
                    </div>

                    <!-- Header Actions -->
                    <div class="flex items-center space-x-4">
                        <!-- Notifications -->
                        <button class="relative p-2 text-white/80 hover:text-white transition-colors hover:bg-white/10 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM10.5 3.75a6 6 0 0 1 6 6v2.25l2.25 2.25v.75H2.25v-.75L4.5 12V9.75a6 6 0 0 1 6-6z"></path>
                            </svg>
                            <span class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full animate-pulse"></span>
                        </button>

                        <!-- Quick Actions -->
                        <button class="gradient-bg-primary text-white px-4 py-2 rounded-xl font-semibold hover:scale-105 transition-all duration-300 animate-pulse-glow hidden md:block">
                            Quick Apply
                        </button>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <div class="p-4 md:p-6 space-y-6">
                <!-- Overview Tab -->
                <div x-show="activeTab === 'overview'" class="space-y-6">
                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Total Earnings -->
                        <div class="glass-card rounded-2xl p-6 hover-lift animate-fadeInUp">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 gradient-bg-success rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                    </svg>
                                </div>
                                <span class="text-green-400 text-sm font-semibold">+12.5%</span>
                            </div>
                            <h3 class="text-white/60 text-sm mb-1">Total Earnings</h3>
                            <p class="text-2xl font-bold text-white">Rp 15,750,000</p>
                            <p class="text-white/40 text-xs mt-2">This month</p>
                        </div>

                        <!-- Active Jobs -->
                        <div class="glass-card rounded-2xl p-6 hover-lift animate-fadeInUp" style="animation-delay: 0.1s;">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 gradient-bg-primary rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                                    </svg>
                                </div>
                                <span class="text-blue-400 text-sm font-semibold">3 New</span>
                            </div>
                            <h3 class="text-white/60 text-sm mb-1">Active Applications</h3>
                            <p class="text-2xl font-bold text-white">12</p>
                            <p class="text-white/40 text-xs mt-2">5 interviews scheduled</p>
                        </div>

                        <!-- Completed Tasks -->
                        <div class="glass-card rounded-2xl p-6 hover-lift animate-fadeInUp" style="animation-delay: 0.2s;">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 gradient-bg-warning rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                    </svg>
                                </div>
                                <span class="text-orange-400 text-sm font-semibold">+8 Today</span>
                            </div>
                            <h3 class="text-white/60 text-sm mb-1">Completed Tasks</h3>
                            <p class="text-2xl font-bold text-white">47</p>
                            <p class="text-white/40 text-xs mt-2">This month</p>
                        </div>

                        <!-- Success Rate -->
                        <div class="glass-card rounded-2xl p-6 hover-lift animate-fadeInUp" style="animation-delay: 0.3s;">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 gradient-bg-info rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                </div>
                                <span class="text-cyan-400 text-sm font-semibold">Excellent</span>
                            </div>
                            <h3 class="text-white/60 text-sm mb-1">Success Rate</h3>
                            <p class="text-2xl font-bold text-white">94.2%</p>
                            <p class="text-white/40 text-xs mt-2">Above average</p>
                        </div>
                    </div>

                    <!-- Charts Section -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Earnings Chart -->
                        <div class="glass-card rounded-2xl p-6 animate-slideInLeft">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-xl font-semibold text-white">Earnings Overview</h3>
                                <select class="bg-white/10 border border-white/20 rounded-lg px-3 py-1 text-white text-sm">
                                    <option>Last 7 days</option>
                                    <option>Last 30 days</option>
                                    <option>Last 3 months</option>
                                </select>
                            </div>
                            <div class="chart-container">
                                <canvas id="earningsChart"></canvas>
                            </div>
                        </div>

                        <!-- Activity Chart -->
                        <div class="glass-card rounded-2xl p-6 animate-slideInRight">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-xl font-semibold text-white">Activity Distribution</h3>
                                <div class="flex space-x-2">
                                    <span class="w-3 h-3 bg-purple-400 rounded-full"></span>
                                    <span class="text-white/60 text-sm">Jobs</span>
                                    <span class="w-3 h-3 bg-pink-400 rounded-full ml-4"></span>
                                    <span class="text-white/60 text-sm">Tasks</span>
                                </div>
                            </div>
                            <div class="chart-container">
                                <canvas id="activityChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="glass-card rounded-2xl p-6 animate-fadeInUp">
                        <h3 class="text-xl font-semibold text-white mb-6">Recent Activity</h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4 p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-colors duration-300">
                                <div class="w-10 h-10 gradient-bg-success rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-white font-medium">Task Completed: Website Design</p>
                                    <p class="text-white/60 text-sm">Earned Rp 2,500,000 • 2 hours ago</p>
                                </div>
                                <span class="text-green-400 font-semibold">+Rp 2.5M</span>
                            </div>

                            <div class="flex items-center space-x-4 p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-colors duration-300">
                                <div class="w-10 h-10 gradient-bg-primary rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-white font-medium">Interview Scheduled: Tech Startup</p>
                                    <p class="text-white/60 text-sm">Tomorrow at 2:00 PM • 5 hours ago</p>
                                </div>
                                <span class="text-blue-400 font-semibold">Interview</span>
                            </div>

                            <div class="flex items-center space-x-4 p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-colors duration-300">
                                <div class="w-10 h-10 gradient-bg-warning rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-white font-medium">New Task Available: Content Writing</p>
                                    <p class="text-white/60 text-sm">Deadline: 3 days • 1 day ago</p>
                                </div>
                                <span class="text-orange-400 font-semibold">Pending</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jobs Tab -->
                <div x-show="activeTab === 'jobs'" class="space-y-6">
                    <div class="glass-card rounded-2xl p-6">
                        <h3 class="text-xl font-semibold text-white mb-6">Job Applications</h3>
                        <!-- Job applications content here -->
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-white/40 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                            </svg>
                            <p class="text-white/60">Job applications content will be displayed here</p>
                        </div>
                    </div>
                </div>

                <!-- Tasks Tab -->
                <div x-show="activeTab === 'tasks'" class="space-y-6">
                    <div class="glass-card rounded-2xl p-6">
                        <h3 class="text-xl font-semibold text-white mb-6">Active Tasks</h3>
                        <!-- Tasks content here -->
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-white/40 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                            <p class="text-white/60">Active tasks content will be displayed here</p>
                        </div>
                    </div>
                </div>

                <!-- Other tabs content... -->
                <div x-show="activeTab === 'earnings'" class="space-y-6">
                    <div class="glass-card rounded-2xl p-6">
                        <h3 class="text-xl font-semibold text-white mb-6">Earnings Details</h3>
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-white/40 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                            <p class="text-white/60">Earnings details will be displayed here</p>
                        </div>
                    </div>
                </div>

                <div x-show="activeTab === 'analytics'" class="space-y-6">
                    <div class="glass-card rounded-2xl p-6">
                        <h3 class="text-xl font-semibold text-white mb-6">Analytics Dashboard</h3>
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-white/40 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            <p class="text-white/60">Analytics content will be displayed here</p>
                        </div>
                    </div>
                </div>

                <div x-show="activeTab === 'profile'" class="space-y-6">
                    <div class="glass-card rounded-2xl p-6">
                        <h3 class="text-xl font-semibold text-white mb-6">Profile Settings</h3>
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-white/40 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <p class="text-white/60">Profile settings will be displayed here</p>
                        </div>
                    </div>
                </div>

                <div x-show="activeTab === 'settings'" class="space-y-6">
                    <div class="glass-card rounded-2xl p-6">
                        <h3 class="text-xl font-semibold text-white mb-6">Application Settings</h3>
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-white/40 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <p class="text-white/60">Settings content will be displayed here</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Mobile Sidebar Overlay -->
    <div x-show="sidebarOpen" 
         x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="sidebarOpen = false"
         class="fixed inset-0 bg-black/50 z-20 md:hidden"></div>

    <script>
        function dashboardData() {
            return {
                activeTab: 'overview',
                sidebarOpen: false,
                
                getPageTitle() {
                    const titles = {
                        'overview': 'Dashboard Overview',
                        'jobs': 'Job Applications',
                        'tasks': 'Active Tasks',
                        'earnings': 'Earnings',
                        'analytics': 'Analytics',
                        'profile': 'Profile',
                        'settings': 'Settings'
                    };
                    return titles[this.activeTab] || 'Dashboard';
                },

                init() {
                    // Initialize charts after DOM is loaded
                    this.$nextTick(() => {
                        this.initCharts();
                    });

                    // Handle window resize
                    window.addEventListener('resize', () => {
                        if (window.innerWidth >= 768) {
                            this.sidebarOpen = false;
                        }
                    });
                },

                initCharts() {
                    // Earnings Chart
                    const earningsCtx = document.getElementById('earningsChart');
                    if (earningsCtx) {
                        new Chart(earningsCtx, {
                            type: 'line',
                            data: {
                                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                                datasets: [{
                                    label: 'Earnings',
                                    data: [1200000, 1900000, 3000000, 5000000, 2000000, 3000000, 4500000],
                                    borderColor: 'rgb(139, 92, 246)',
                                    backgroundColor: 'rgba(139, 92, 246, 0.1)',
                                    tension: 0.4,
                                    fill: true
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                },
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        grid: {
                                            color: 'rgba(255, 255, 255, 0.1)'
                                        },
                                        ticks: {
                                            color: 'rgba(255, 255, 255, 0.6)',
                                            callback: function(value) {
                                                return 'Rp ' + (value / 1000000).toFixed(1) + 'M';
                                            }
                                        }
                                    },
                                    x: {
                                        grid: {
                                            color: 'rgba(255, 255, 255, 0.1)'
                                        },
                                        ticks: {
                                            color: 'rgba(255, 255, 255, 0.6)'
                                        }
                                    }
                                }
                            }
                        });
                    }

                    // Activity Chart
                    const activityCtx = document.getElementById('activityChart');
                    if (activityCtx) {
                        new Chart(activityCtx, {
                            type: 'doughnut',
                            data: {
                                labels: ['Job Applications', 'Completed Tasks', 'Pending Tasks'],
                                datasets: [{
                                    data: [12, 47, 8],
                                    backgroundColor: [
                                        'rgb(139, 92, 246)',
                                        'rgb(236, 72, 153)',
                                        'rgb(245, 158, 11)'
                                    ],
                                    borderWidth: 0
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                }
                            }
                        });
                    }
                }
            }
        }
    </script>
</body>
</html>
