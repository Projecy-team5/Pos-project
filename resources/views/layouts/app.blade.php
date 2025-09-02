<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        sidebar: {
                            50: '#fafafa',
                            100: '#f5f5f5',
                            900: '#0f0f0f'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 4px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #e5e7eb;
            border-radius: 2px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #d1d5db;
        }

        /* Backdrop blur fallback */
        .backdrop-blur-glass {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-slate-100 font-inter antialiased">

    <!-- Top Navigation Bar -->
    <nav class="fixed top-0 left-0 right-0 z-30 bg-white/90 backdrop-blur-glass border-b border-slate-200/60 shadow-sm">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Left side - Logo and mobile menu -->
                <div class="flex items-center">
                    <!-- Mobile menu button -->
                    <button id="mobile-menu-button" class="lg:hidden p-2 rounded-lg hover:bg-slate-100 transition-colors mr-2">
                        <svg class="w-5 h-5 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>

                    <!-- Logo -->
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-gradient-to-br from-slate-800 to-slate-600 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h1 class="text-xl font-bold bg-gradient-to-r from-slate-900 to-slate-700 bg-clip-text text-transparent">
                            My App
                        </h1>
                    </div>
                </div>

                <!-- Right side - Search and user actions -->
                <div class="flex items-center space-x-4">
                    <!-- Search bar -->
                    <div class="hidden md:flex items-center relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 w-64 text-sm border border-slate-200 rounded-lg bg-white/50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-slate-300 focus:border-transparent transition-all duration-200">
                    </div>

                    <!-- Notifications -->
                    <button class="relative p-2 rounded-lg hover:bg-slate-100 transition-colors">
                        <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM3 12V7a4 4 0 118 0v5l-4 4-4-4z"/>
                        </svg>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>

                    <!-- User menu -->
                    <div class="relative">
                        <button class="flex items-center space-x-2 p-1 rounded-lg hover:bg-slate-100 transition-colors">
                            <div class="w-8 h-8 bg-gradient-to-br from-slate-400 to-slate-600 rounded-full flex items-center justify-center">
                                <span class="text-xs font-medium text-white">JD</span>
                            </div>
                            <div class="hidden md:block text-left">
                                <p class="text-sm font-medium text-slate-900">John Doe</p>
                            </div>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile overlay -->
    <div id="mobile-overlay" class="fixed inset-0 bg-black/20 backdrop-blur-sm z-40 lg:hidden hidden"></div>

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed left-0 top-16 bottom-0 z-50 w-64 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out">
        <!-- Sidebar backdrop -->
        <div class="absolute inset-0 bg-white/90 backdrop-blur-glass border-r border-slate-200/60"></div>

        <!-- Sidebar content -->
        <div class="relative h-full flex flex-col">
            <!-- Close button for mobile -->
            <div class="lg:hidden flex justify-end p-4">
                <button id="close-sidebar" class="p-1 rounded-md hover:bg-slate-100 transition-colors">
                    <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 px-4 py-4 space-y-2 overflow-y-auto">
                <div class="mb-6">
                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-3">Main Menu</p>

                    <a href="#" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-xl transition-all duration-200 bg-slate-100 text-slate-900 shadow-sm">
                        <div class="w-5 h-5 mr-3 text-slate-700">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </div>
                        <span>Dashboard</span>
                        <div class="ml-auto w-2 h-2 bg-slate-700 rounded-full"></div>
                    </a>

                    <a href="#" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-xl transition-all duration-200 text-slate-600 hover:text-slate-900 hover:bg-slate-50">
                        <div class="w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-600">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <span>Analytics</span>
                    </a>

                    <a href="#" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-xl transition-all duration-200 text-slate-600 hover:text-slate-900 hover:bg-slate-50">
                        <div class="w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-600">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                            </svg>
                        </div>
                        <span>Projects</span>
                        <span class="ml-auto bg-slate-200 text-slate-700 text-xs px-2 py-1 rounded-full">24</span>
                    </a>

                    <a href="#" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-xl transition-all duration-200 text-slate-600 hover:text-slate-900 hover:bg-slate-50">
                        <div class="w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-600">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 4h6m-6-4a2 2 0 00-2 2v6a2 2 0 002 2h6a2 2 0 002-2V9a2 2 0 00-2-2H8z"/>
                            </svg>
                        </div>
                        <span>Tasks</span>
                    </a>

                    <a href="#" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-xl transition-all duration-200 text-slate-600 hover:text-slate-900 hover:bg-slate-50">
                        <div class="w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-600">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                            </svg>
                        </div>
                        <span>Messages</span>
                        <span class="ml-auto bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full">3</span>
                    </a>
                </div>

                <div>
                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-3">Tools</p>

                    <a href="#" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-xl transition-all duration-200 text-slate-600 hover:text-slate-900 hover:bg-slate-50">
                        <div class="w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-600">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                            </svg>
                        </div>
                        <span>Team</span>
                    </a>

                    <a href="#" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-xl transition-all duration-200 text-slate-600 hover:text-slate-900 hover:bg-slate-50">
                        <div class="w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-600">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <span>Settings</span>
                    </a>

                    <a href="#" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-xl transition-all duration-200 text-slate-600 hover:text-slate-900 hover:bg-slate-50">
                        <div class="w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-600">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span>Help & Support</span>
                    </a>
                </div>
            </nav>

            <!-- Upgrade card -->
            <div class="p-4 mx-4 mb-4 bg-gradient-to-br from-slate-800 to-slate-700 rounded-xl text-white">
                <div class="mb-3">
                    <h4 class="font-semibold text-sm mb-1">Upgrade to Pro</h4>
                    <p class="text-xs text-slate-300">Get advanced features and unlimited access</p>
                </div>
                <button class="w-full bg-white/20 hover:bg-white/30 text-white text-xs font-medium py-2 px-3 rounded-lg transition-colors">
                    Upgrade Now
                </button>
            </div>
        </div>
    </aside>

    <!-- Main content -->
    <main class="pt-16 lg:ml-64 min-h-screen">
        <div class="p-6 lg:p-8">
            <!-- Page header -->
            <header class="mb-8">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                    <div class="mb-4 sm:mb-0">
                        <h2 class="text-2xl font-bold text-slate-900">@yield('title', 'Dashboard')</h2>
                        <p class="text-sm text-slate-600 mt-1">Welcome back, here's what's happening with your projects today.</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <button class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors">
                            Export
                        </button>
                        <button class="px-4 py-2 text-sm font-medium text-white bg-slate-800 rounded-lg hover:bg-slate-700 transition-colors">
                            Create New
                        </button>
                    </div>
                </div>
            </header>

            <!-- Content area -->
            <div class="bg-white/70 backdrop-blur-glass rounded-2xl shadow-sm border border-slate-200/60 p-6 lg:p-8 min-h-[600px]">
                @yield('content')

                <!-- Demo content -->

            </div>
        </div>
    </main>

    <script>
        // Mobile menu functionality
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeSidebarButton = document.getElementById('close-sidebar');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('mobile-overlay');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }

        mobileMenuButton.addEventListener('click', openSidebar);
        closeSidebarButton.addEventListener('click', closeSidebar);
        overlay.addEventListener('click', closeSidebar);

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth < 1024) {
                if (!sidebar.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                    closeSidebar();
                }
            }
        });

        // Handle window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                closeSidebar();
            }
        });
    </script>
</body>
</html>
