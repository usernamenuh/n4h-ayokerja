<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - AyoKerja Admin</title>
    
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

        /* ===== SIDEBAR COLLAPSE STYLES ===== */
        .sidebar-collapsed {
            width: 80px !important;
        }

        .sidebar-collapsed .sidebar-text {
            opacity: 0;
            transform: translateX(-10px);
            pointer-events: none;
        }

        .sidebar-collapsed .sidebar-logo-text {
            opacity: 0;
            transform: translateX(-10px);
        }

        .sidebar-collapsed .user-profile-text {
            opacity: 0;
            transform: translateX(-10px);
        }

        .sidebar-transition {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .text-transition {
            transition: opacity 0.2s ease, transform 0.2s ease;
        }

        /* Tooltip for collapsed sidebar */
        .sidebar-tooltip {
            position: absolute;
            left: 100%;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 14px;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.2s ease;
            z-index: 1000;
            margin-left: 10px;
        }

        .sidebar-collapsed .nav-item:hover .sidebar-tooltip {
            opacity: 1;
        }

        /* Adjust main content margin when sidebar is collapsed */
        .main-content-collapsed {
            margin-left: 80px;
        }

        @media (max-width: 768px) {
            .main-content-collapsed {
                margin-left: 0;
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
        <!-- Enhanced Sidebar with Collapse -->
        <aside class="glass-sidebar fixed left-0 top-0 h-full z-30 custom-scrollbar overflow-y-auto sidebar-transition" 
               :class="{ 
                   'open': sidebarOpen || window.innerWidth >= 768,
                   'sidebar-collapsed': sidebarCollapsed,
                   'w-64': !sidebarCollapsed,
                   'w-20': sidebarCollapsed
               }">
            
            <!-- Logo Section with Collapse Button -->
            <div class="p-6 border-b border-white/10 relative">
                <div class="flex items-center space-x-3 group">
                    <div class="w-10 h-10 gradient-bg-primary rounded-xl flex items-center justify-center animate-pulse-glow flex-shrink-0">
                        <svg class="w-5 h-5 text-white group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6M8 6V4a2 2 0 012-2h4a2 2 0 012 2v2m-8 0V6a2 2 0 00-2 2v6"></path>
                        </svg>
                    </div>
                    <div class="sidebar-logo-text text-transition" :class="{ 'opacity-0': sidebarCollapsed }">
                        <h1 class="text-xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">AyoKerja</h1>
                        <p class="text-xs text-white/60">Admin Dashboard</p>
                    </div>
                </div>
                
                <!-- Collapse Toggle Button -->
                <button @click="toggleSidebar()" 
                        class="absolute -right-3 top-1/2 transform -translate-y-1/2 w-6 h-6 bg-purple-600 hover:bg-purple-700 rounded-full flex items-center justify-center text-white shadow-lg transition-all duration-300 hover:scale-110 hidden md:flex">
                    <svg class="w-3 h-3 transition-transform duration-300" :class="{ 'rotate-180': sidebarCollapsed }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
            </div>

            <!-- Navigation Menu with Tooltips -->
            <nav class="p-4 space-y-2">
                <a href="#" @click="activeTab = 'overview'" 
                   :class="activeTab === 'overview' ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5'"
                   class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group nav-item relative">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6H8V5z"></path>
                    </svg>
                    <span class="sidebar-text text-transition">Overview</span>
                    <div class="sidebar-tooltip">Overview</div>
                </a>

                <a href="#" @click="activeTab = 'users'" 
                   :class="activeTab === 'users' ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5'"
                   class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group nav-item relative">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                    <span class="sidebar-text text-transition">User Management</span>
                    <div class="sidebar-tooltip">User Management</div>
                </a>

                <a href="#" @click="activeTab = 'jobs'" 
                   :class="activeTab === 'jobs' ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5'"
                   class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group nav-item relative">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                    </svg>
                    <span class="sidebar-text text-transition">Job Management</span>
                    <span class="notification-badge sidebar-text text-transition"></span>
                    <div class="sidebar-tooltip">Job Management</div>
                </a>

                <a href="#" @click="activeTab = 'tasks'" 
                   :class="activeTab === 'tasks' ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5'"
                   class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group nav-item relative">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                    <span class="sidebar-text text-transition">Task Management</span>
                    <div class="sidebar-tooltip">Task Management</div>
                </a>

                <a href="#" @click="activeTab = 'training'" 
                   :class="activeTab === 'training' ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5'"
                   class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group nav-item relative">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    </svg>
                    <span class="sidebar-text text-transition">Training Management</span>
                    <div class="sidebar-tooltip">Training Management</div>
                </a>

                <a href="#" @click="activeTab = 'analytics'" 
                   :class="activeTab === 'analytics' ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5'"
                   class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group nav-item relative">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    <span class="sidebar-text text-transition">Analytics</span>
                    <div class="sidebar-tooltip">Analytics</div>
                </a>

                <a href="#" @click="activeTab = 'settings'" 
                   :class="activeTab === 'settings' ? 'bg-white/10 text-white' : 'text-white/70 hover:text-white hover:bg-white/5'"
                   class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group nav-item relative">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="sidebar-text text-transition">Settings</span>
                    <div class="sidebar-tooltip">Settings</div>
                </a>
            </nav>

            <!-- User Profile Section -->
            
        </aside>

        <!-- Main Content -->
        <main class="flex-1 min-h-screen transition-all duration-300" 
              :class="{ 
                  'ml-64': !sidebarCollapsed && window.innerWidth >= 768,
                  'ml-20': sidebarCollapsed && window.innerWidth >= 768,
                  'ml-0': window.innerWidth < 768
              }">
            <!-- Top Header -->
            <header class="glass-card border-b border-white/10 p-4 md:p-6 sticky top-0 z-20">
                <div class="flex items-center justify-between">
                    <!-- Mobile Menu Button -->
                    <button @click="sidebarOpen = !sidebarOpen" class="md:hidden text-white/80 hover:text-white transition-colors p-2 rounded-lg hover:bg-white/10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>

                    <!-- Page Title -->
                    <div class="flex-1 md:flex-none">
                        <h1 class="text-2xl md:text-3xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent animate-gradient-shift" x-text="getPageTitle()"></h1>
                        <p class="text-white/60 text-sm mt-1">Welcome back! Here's your platform overview</p>
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

    <!-- Profile Dropdown -->
    <div class="relative" x-data="{ profileOpen: false }">
        <button @click="profileOpen = !profileOpen" 
                class="flex items-center space-x-3 p-2 rounded-xl hover:bg-white/10 transition-all duration-300 group">
            <img src="{{ auth()->user()->avatar ?? '/placeholder.svg?height=40&width=40' }}" 
                 alt="Profile" 
                 class="w-8 h-8 rounded-full border-2 border-white/20 group-hover:border-purple-400/50 transition-all duration-300">
            <div class="hidden md:block text-left">
                <p class="font-semibold text-white text-sm group-hover:text-purple-300 transition-colors duration-300">{{ auth()->user()->name ?? 'Admin User' }}</p>
                <p class="text-xs text-white/60">Super Admin</p>
            </div>
            <svg class="w-4 h-4 text-white/60 group-hover:text-white transition-all duration-300 hidden md:block" 
                 :class="{ 'rotate-180': profileOpen }" 
                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>

        <!-- Dropdown Menu -->
        <div x-show="profileOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             @click.away="profileOpen = false"
             class="absolute right-0 top-full mt-2 w-56 glass-card rounded-xl shadow-lg z-50">
            
            <!-- User Info -->
            <div class="px-4 py-3 border-b border-white/10">
                <div class="flex items-center space-x-3">
                    <img src="{{ auth()->user()->avatar ?? '/placeholder.svg?height=40&width=40' }}" 
                         alt="Profile" 
                         class="w-10 h-10 rounded-full border-2 border-white/20">
                    <div>
                        <p class="font-semibold text-white">{{ auth()->user()->name ?? 'Admin User' }}</p>
                        <p class="text-xs text-white/60">{{ auth()->user()->email ?? 'admin@ayokerja.com' }}</p>
                        <span class="inline-block px-2 py-1 text-xs bg-purple-600/20 text-purple-300 rounded-full mt-1">Super Admin</span>
                    </div>
                </div>
            </div>

            <!-- Menu Items -->
            <div class="py-2">
                <a href="#" class="flex items-center space-x-3 px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span>My Profile</span>
                </a>
                
                <a href="#" class="flex items-center space-x-3 px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Account Settings</span>
                </a>
                
                <a href="#" class="flex items-center space-x-3 px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    <span>Activity Log</span>
                </a>
                
                <a href="#" class="flex items-center space-x-3 px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Help & Support</span>
                </a>
                
                <div class="border-t border-white/10 mt-2 pt-2">
                    <a href="#" class="flex items-center space-x-3 px-4 py-2 text-red-400 hover:text-red-300 hover:bg-red-500/10 transition-colors duration-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        <span>Sign Out</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <div class="p-4 md:p-6 space-y-6">
                <!-- Overview Tab -->
                <div x-show="activeTab === 'overview'" class="space-y-6">
                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Total Employers -->
                        <div class="glass-card rounded-2xl p-6 hover-lift animate-fadeInUp">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 gradient-bg-primary rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <span class="text-blue-400 text-sm font-semibold">+15.2%</span>
                            </div>
                            <h3 class="text-white/60 text-sm mb-1">Total Employers</h3>
                            <p class="text-2xl font-bold text-white">{{ number_format($stats['employers'] ?? 2847) }}</p>
                            <p class="text-white/40 text-xs mt-2">Registered companies</p>
                        </div>

                        <!-- Job Seekers -->
                        <div class="glass-card rounded-2xl p-6 hover-lift animate-fadeInUp" style="animation-delay: 0.1s;">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 gradient-bg-success rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <span class="text-green-400 text-sm font-semibold">+8.7%</span>
                            </div>
                            <h3 class="text-white/60 text-sm mb-1">Job Seekers</h3>
                            <p class="text-2xl font-bold text-white">{{ number_format($stats['job_seekers'] ?? 18432) }}</p>
                            <p class="text-white/40 text-xs mt-2">Active users</p>
                        </div>

                        <!-- Active Jobs -->
                        <div class="glass-card rounded-2xl p-6 hover-lift animate-fadeInUp" style="animation-delay: 0.2s;">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 gradient-bg-warning rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                                    </svg>
                                </div>
                                <span class="text-orange-400 text-sm font-semibold">{{ $stats['active_jobs'] ?? 1247 }} Active</span>
                            </div>
                            <h3 class="text-white/60 text-sm mb-1">Job Postings</h3>
                            <p class="text-2xl font-bold text-white">{{ number_format($stats['active_jobs'] ?? 1247) }}</p>
                            <div class="flex gap-2 mt-2">
                                <span class="text-xs bg-blue-900/50 text-blue-300 px-2 py-1 rounded">Full-time: {{ $stats['fulltime_jobs'] ?? 892 }}</span>
                                <span class="text-xs bg-orange-900/50 text-orange-300 px-2 py-1 rounded">Part-time: {{ $stats['parttime_jobs'] ?? 355 }}</span>
                            </div>
                        </div>

                        <!-- Total Tasks -->
                        <div class="glass-card rounded-2xl p-6 hover-lift animate-fadeInUp" style="animation-delay: 0.3s;">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 gradient-bg-info rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                    </svg>
                                </div>
                                <span class="text-cyan-400 text-sm font-semibold">{{ $stats['completed_tasks'] ?? 4521 }} Done</span>
                            </div>
                            <h3 class="text-white/60 text-sm mb-1">Total Tasks</h3>
                            <p class="text-2xl font-bold text-white">{{ number_format($stats['total_tasks'] ?? 5683) }}</p>
                            <p class="text-white/40 text-xs mt-2">All time tasks</p>
                        </div>
                    </div>

                    <!-- Additional Stats Row -->
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
                            <h3 class="text-white/60 text-sm mb-1">Platform Revenue</h3>
                            <p class="text-2xl font-bold text-white">Rp {{ number_format($stats['total_earnings'] ?? 15750000) }}</p>
                            <p class="text-white/40 text-xs mt-2">This month</p>
                        </div>

                        <!-- Active Applications -->
                        <div class="glass-card rounded-2xl p-6 hover-lift animate-fadeInUp" style="animation-delay: 0.1s;">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 gradient-bg-primary rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <span class="text-blue-400 text-sm font-semibold">3 New</span>
                            </div>
                            <h3 class="text-white/60 text-sm mb-1">Active Applications</h3>
                            <p class="text-2xl font-bold text-white">{{ $stats['active_applications'] ?? 12 }}</p>
                            <p class="text-white/40 text-xs mt-2">Pending review</p>
                        </div>

                        <!-- Success Rate -->
                        <div class="glass-card rounded-2xl p-6 hover-lift animate-fadeInUp" style="animation-delay: 0.2s;">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 gradient-bg-info rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                </div>
                                <span class="text-cyan-400 text-sm font-semibold">Excellent</span>
                            </div>
                            <h3 class="text-white/60 text-sm mb-1">Success Rate</h3>
                            <p class="text-2xl font-bold text-white">{{ $stats['success_rate'] ?? '94.2' }}%</p>
                            <p class="text-white/40 text-xs mt-2">Above average</p>
                        </div>

                        <!-- Training Programs -->
                        <div class="glass-card rounded-2xl p-6 hover-lift animate-fadeInUp" style="animation-delay: 0.3s;">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 gradient-bg-warning rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                    </svg>
                                </div>
                                <span class="text-orange-400 text-sm font-semibold">{{ $stats['total_trainings'] ?? 89 }} Active</span>
                            </div>
                            <h3 class="text-white/60 text-sm mb-1">Training Programs</h3>
                            <p class="text-2xl font-bold text-white">{{ $stats['total_trainings'] ?? 89 }}</p>
                            <p class="text-white/40 text-xs mt-2">Available courses</p>
                        </div>
                    </div>

                    <!-- Charts Section -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Platform Growth Chart -->
                        <div class="glass-card rounded-2xl p-6 animate-slideInLeft">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-xl font-semibold text-white">Platform Growth</h3>
                                <select class="bg-white/10 border border-white/20 rounded-lg px-3 py-1 text-white text-sm">
                                    <option>Last 7 days</option>
                                    <option>Last 30 days</option>
                                    <option>Last 3 months</option>
                                </select>
                            </div>
                            <div class="chart-container">
                                <canvas id="growthChart"></canvas>
                            </div>
                        </div>

                        <!-- Activity Distribution -->
                        <div class="glass-card rounded-2xl p-6 animate-slideInRight">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-xl font-semibold text-white">Activity Distribution</h3>
                                <div class="flex space-x-4">
                                    <div class="flex items-center space-x-2">
                                        <span class="w-3 h-3 bg-purple-400 rounded-full"></span>
                                        <span class="text-white/60 text-sm">Jobs</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <span class="w-3 h-3 bg-pink-400 rounded-full"></span>
                                        <span class="text-white/60 text-sm">Tasks</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <span class="w-3 h-3 bg-cyan-400 rounded-full"></span>
                                        <span class="text-white/60 text-sm">Training</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-container">
                                <canvas id="activityChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="glass-card rounded-2xl p-6 animate-fadeInUp">
                        <h3 class="text-xl font-semibold text-white mb-6">Recent Platform Activity</h3>
                        <div class="space-y-4">
                            @foreach($recent_activities ?? [] as $activity)
                            <div class="flex items-center space-x-4 p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-colors duration-300">
                                <div class="w-10 h-10 {{ $activity['bg_color'] ?? 'gradient-bg-success' }} rounded-full flex items-center justify-center">
                                    {!! $activity['icon'] ?? '<svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>' !!}
                                </div>
                                <div class="flex-1">
                                    <p class="text-white font-medium">{{ $activity['title'] }}</p>
                                    <p class="text-white/60 text-sm">{{ $activity['description'] }} • {{ $activity['time'] }}</p>
                                </div>
                                <span class="text-{{ $activity['badge_color'] ?? 'green' }}-400 font-semibold">{{ $activity['badge'] ?? '' }}</span>
                            </div>
                            @endforeach

                            @if(empty($recent_activities))
                            <div class="flex items-center space-x-4 p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-colors duration-300">
                                <div class="w-10 h-10 gradient-bg-success rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-white font-medium">New Job Posted: Senior Developer</p>
                                    <p class="text-white/60 text-sm">PT Tech Indonesia posted a new position • 2 hours ago</p>
                                </div>
                                <span class="text-green-400 font-semibold">New</span>
                            </div>

                            <div class="flex items-center space-x-4 p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-colors duration-300">
                                <div class="w-10 h-10 gradient-bg-primary rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-white font-medium">New User Registration</p>
                                    <p class="text-white/60 text-sm">john.doe@email.com joined as job seeker • 5 hours ago</p>
                                </div>
                                <span class="text-blue-400 font-semibold">User</span>
                            </div>

                            <div class="flex items-center space-x-4 p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-colors duration-300">
                                <div class="w-10 h-10 gradient-bg-warning rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-white font-medium">Task Completed: Website Design</p>
                                    <p class="text-white/60 text-sm">Freelancer completed project successfully • 1 day ago</p>
                                </div>
                                <span class="text-orange-400 font-semibold">Completed</span>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Quick Management Actions -->
                    <div class="glass-card rounded-2xl p-6 animate-fadeInUp">
                        <h3 class="text-xl font-semibold text-white mb-6">Quick Management Actions</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <button onclick="openAddJobModal()" class="h-20 flex flex-col items-center justify-center gap-2 bg-blue-600/20 hover:bg-blue-600/30 border border-blue-500/30 text-white rounded-xl transition-all duration-300 hover:scale-105">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6M8 6V4a2 2 0 012-2h4a2 2 0 012 2v2m-8 0V6a2 2 0 00-2 2v6"></path>
                                </svg>
                                <span>Add Job Posting</span>
                            </button>

                            <button onclick="openAddTaskModal()" class="h-20 flex flex-col items-center justify-center gap-2 bg-green-600/20 hover:bg-green-600/30 border border-green-500/30 text-white rounded-xl transition-all duration-300 hover:scale-105">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                                <span>Create Task</span>
                            </button>

                            <button onclick="openAddTrainingModal()" class="h-20 flex flex-col items-center justify-center gap-2 bg-purple-600/20 hover:bg-purple-600/30 border border-purple-500/30 text-white rounded-xl transition-all duration-300 hover:scale-105">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                </svg>
                                <span>Add Training</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- User Management Tab -->
                <div x-show="activeTab === 'users'" class="space-y-6">
                    <div class="glass-card rounded-2xl p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-semibold text-white">User Management</h3>
                            <button class="gradient-bg-primary text-white px-4 py-2 rounded-xl font-semibold hover:scale-105 transition-all duration-300">
                                Add New User
                            </button>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div class="glass-card rounded-xl p-4">
                                <h4 class="text-lg font-semibold text-white mb-2">Employers</h4>
                                <p class="text-3xl font-bold text-blue-400">{{ number_format($stats['employers'] ?? 2847) }}</p>
                                <p class="text-white/60 text-sm">Total registered companies</p>
                            </div>
                            <div class="glass-card rounded-xl p-4">
                                <h4 class="text-lg font-semibold text-white mb-2">Job Seekers</h4>
                                <p class="text-3xl font-bold text-green-400">{{ number_format($stats['job_seekers'] ?? 18432) }}</p>
                                <p class="text-white/60 text-sm">Active job seekers</p>
                            </div>
                        </div>

                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-white/40 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                            <p class="text-white/60">User management interface will be implemented here</p>
                        </div>
                    </div>
                </div>

                <!-- Job Management Tab -->
                <div x-show="activeTab === 'jobs'" class="space-y-6">
                    <div class="glass-card rounded-2xl p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-semibold text-white">Job Management</h3>
                            <button onclick="openAddJobModal()" class="gradient-bg-primary text-white px-4 py-2 rounded-xl font-semibold hover:scale-105 transition-all duration-300">
                                Add New Job
                            </button>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                            <div class="glass-card rounded-xl p-4">
                                <h4 class="text-lg font-semibold text-white mb-2">Full-time Jobs</h4>
                                <p class="text-3xl font-bold text-blue-400">{{ $stats['fulltime_jobs'] ?? 892 }}</p>
                                <p class="text-white/60 text-sm">Active full-time positions</p>
                            </div>
                            <div class="glass-card rounded-xl p-4">
                                <h4 class="text-lg font-semibold text-white mb-2">Part-time Jobs</h4>
                                <p class="text-3xl font-bold text-orange-400">{{ $stats['parttime_jobs'] ?? 355 }}</p>
                                <p class="text-white/60 text-sm">Active part-time positions</p>
                            </div>
                            <div class="glass-card rounded-xl p-4">
                                <h4 class="text-lg font-semibold text-white mb-2">Total Active</h4>
                                <p class="text-3xl font-bold text-green-400">{{ $stats['active_jobs'] ?? 1247 }}</p>
                                <p class="text-white/60 text-sm">All active job postings</p>
                            </div>
                        </div>

                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-white/40 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                            </svg>
                            <p class="text-white/60">Job management interface will be implemented here</p>
                        </div>
                    </div>
                </div>

                <!-- Task Management Tab -->
                <div x-show="activeTab === 'tasks'" class="space-y-6">
                    <div class="glass-card rounded-2xl p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-semibold text-white">Task Management</h3>
                            <button onclick="openAddTaskModal()" class="gradient-bg-primary text-white px-4 py-2 rounded-xl font-semibold hover:scale-105 transition-all duration-300">
                                Create New Task
                            </button>
                        </div>
                        
                        <div class="glass-card rounded-xl p-4 mb-6">
                            <h4 class="text-lg font-semibold text-white mb-2">Total Tasks</h4>
                            <p class="text-4xl font-bold text-purple-400">{{ number_format($stats['total_tasks'] ?? 5683) }}</p>
                            <p class="text-white/60 text-sm">All platform tasks</p>
                        </div>

                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-white/40 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                            <p class="text-white/60">Task management interface will be implemented here</p>
                        </div>
                    </div>
                </div>

                <!-- Training Management Tab -->
                <div x-show="activeTab === 'training'" class="space-y-6">
                    <div class="glass-card rounded-2xl p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-semibold text-white">Training Management</h3>
                            <button onclick="openAddTrainingModal()" class="gradient-bg-primary text-white px-4 py-2 rounded-xl font-semibold hover:scale-105 transition-all duration-300">
                                Add New Training
                            </button>
                        </div>
                        
                        <div class="glass-card rounded-xl p-4 mb-6">
                            <h4 class="text-lg font-semibold text-white mb-2">Training Programs</h4>
                            <p class="text-4xl font-bold text-orange-400">{{ $stats['total_trainings'] ?? 89 }}</p>
                            <p class="text-white/60 text-sm">Available training courses</p>
                        </div>

                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-white/40 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            </svg>
                            <p class="text-white/60">Training management interface will be implemented here</p>
                        </div>
                    </div>
                </div>

                <!-- Analytics Tab -->
                <div x-show="activeTab === 'analytics'" class="space-y-6">
                    <div class="glass-card rounded-2xl p-6">
                        <h3 class="text-xl font-semibold text-white mb-6">Analytics Dashboard</h3>
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-white/40 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            <p class="text-white/60">Advanced analytics will be displayed here</p>
                        </div>
                    </div>
                </div>

                <!-- Settings Tab -->
                <div x-show="activeTab === 'settings'" class="space-y-6">
                    <div class="glass-card rounded-2xl p-6">
                        <h3 class="text-xl font-semibold text-white mb-6">System Settings</h3>
                        <div class="text-center py-12">
                            <svg class="w-16 h-16 text-white/40 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <p class="text-white/60">System settings will be displayed here</p>
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
                sidebarCollapsed: false,
                
                getPageTitle() {
                    const titles = {
                        'overview': 'Dashboard Overview',
                        'users': 'User Management',
                        'jobs': 'Job Management',
                        'tasks': 'Task Management',
                        'training': 'Training Management',
                        'analytics': 'Analytics Dashboard',
                        'settings': 'System Settings'
                    };
                    return titles[this.activeTab] || 'Dashboard';
                },

                toggleSidebar() {
                    this.sidebarCollapsed = !this.sidebarCollapsed;
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
                    // Platform Growth Chart
                    const growthCtx = document.getElementById('growthChart');
                    if (growthCtx) {
                        new Chart(growthCtx, {
                            type: 'line',
                            data: {
                                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                                datasets: [
                                    {
                                        label: 'Job Seekers',
                                        data: [1200, 1900, 3000, 5000, 2000, 3000, 4500],
                                        borderColor: 'rgb(139, 92, 246)',
                                        backgroundColor: 'rgba(139, 92, 246, 0.1)',
                                        tension: 0.4,
                                        fill: true
                                    },
                                    {
                                        label: 'Employers',
                                        data: [400, 600, 800, 1200, 800, 1000, 1400],
                                        borderColor: 'rgb(236, 72, 153)',
                                        backgroundColor: 'rgba(236, 72, 153, 0.1)',
                                        tension: 0.4,
                                        fill: true
                                    }
                                ]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: true,
                                        labels: {
                                            color: 'rgba(255, 255, 255, 0.8)'
                                        }
                                    }
                                },
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        grid: {
                                            color: 'rgba(255, 255, 255, 0.1)'
                                        },
                                        ticks: {
                                            color: 'rgba(255, 255, 255, 0.6)'
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

                    // Activity Distribution Chart
                    const activityCtx = document.getElementById('activityChart');
                    if (activityCtx) {
                        new Chart(activityCtx, {
                            type: 'doughnut',
                            data: {
                                labels: ['Job Applications', 'Completed Tasks', 'Training Enrollments'],
                                datasets: [{
                                    data: [1247, 5683, 89],
                                    backgroundColor: [
                                        'rgb(139, 92, 246)',
                                        'rgb(236, 72, 153)',
                                        'rgb(6, 182, 212)'
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

        // Modal functions
        function openAddJobModal() {
            alert('Add Job Modal - To be implemented');
        }

        function openAddTaskModal() {
            alert('Add Task Modal - To be implemented');
        }

        function openAddTrainingModal() {
            alert('Add Training Modal - To be implemented');
        }
    </script>
</body>
</html>
