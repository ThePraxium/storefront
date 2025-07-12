<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Game & Grub') }} - @yield('title', 'Board Games & Food Arcade')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700|inter:400,500,600" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Poppins', sans-serif; }
        
        .nav-link {
            @apply text-gray-500 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors;
        }
        .nav-link.active {
            @apply text-purple-600 dark:text-purple-400 font-semibold;
        }
        .mobile-nav-link {
            @apply text-gray-500 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium transition-colors;
        }
        .mobile-nav-link.active {
            @apply text-purple-600 dark:text-purple-400 font-semibold;
        }
    </style>
</head>
<body class="h-full bg-gray-50 dark:bg-gray-900">
    <div id="app" class="min-h-full">
        <!-- Navigation -->
        <nav class="bg-white dark:bg-gray-800 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <!-- Logo -->
                        <div class="flex-shrink-0 flex items-center">
                            <a href="{{ route('home') }}" class="text-2xl font-bold text-purple-600 dark:text-purple-400">
                                Game & Grub
                            </a>
                        </div>

                        <!-- Navigation Links -->
                        <div class="hidden md:ml-8 md:flex md:space-x-8">
                            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                                Home
                            </a>
                            <a href="{{ route('games.index') }}" class="nav-link {{ request()->routeIs('games.*') ? 'active' : '' }}">
                                Games
                            </a>
                            <a href="{{ route('menu.index') }}" class="nav-link {{ request()->routeIs('menu.*') ? 'active' : '' }}">
                                Menu
                            </a>
                            <a href="{{ route('events.index') }}" class="nav-link {{ request()->routeIs('events.*') ? 'active' : '' }}">
                                Events
                            </a>
                            <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                                About
                            </a>
                            <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                                Contact
                            </a>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="flex items-center space-x-4">
                        <!-- Book a Table Button -->
                        <a href="#" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                            Book a Table
                        </a>

                        <!-- Mobile menu button -->
                        <div class="md:hidden">
                            <button type="button" class="mobile-menu-button text-gray-500 hover:text-gray-600 dark:text-gray-400 dark:hover:text-gray-300">
                                <span class="sr-only">Open main menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu -->
                <div class="mobile-menu hidden md:hidden">
                    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 border-t border-gray-200 dark:border-gray-700">
                        <a href="{{ route('home') }}" class="mobile-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('games.index') }}" class="mobile-nav-link {{ request()->routeIs('games.*') ? 'active' : '' }}">Games</a>
                        <a href="{{ route('menu.index') }}" class="mobile-nav-link {{ request()->routeIs('menu.*') ? 'active' : '' }}">Menu</a>
                        <a href="{{ route('events.index') }}" class="mobile-nav-link {{ request()->routeIs('events.*') ? 'active' : '' }}">Events</a>
                        <a href="{{ route('about') }}" class="mobile-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                        <a href="{{ route('contact') }}" class="mobile-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="col-span-1 md:col-span-2">
                        <h3 class="text-2xl font-bold text-purple-400 mb-4">Game & Grub</h3>
                        <p class="text-gray-300 mb-4">
                            The perfect combination of board games and delicious food. Come for the games, stay for the grub!
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.621 5.367 11.988 11.988 11.988s11.987-5.367 11.987-11.988C24.004 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.297C4.198 14.97 3.708 13.819 3.708 12.522s.49-2.448 1.297-3.323c.875-.807 2.026-1.297 3.323-1.297s2.448.49 3.323 1.297c.807.875 1.297 2.026 1.297 3.323s-.49 2.448-1.297 3.323c-.875.807-2.026 1.297-3.323 1.297z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                        <ul class="space-y-2">
                            <li><a href="{{ route('games.index') }}" class="text-gray-300 hover:text-white">Browse Games</a></li>
                            <li><a href="{{ route('menu.index') }}" class="text-gray-300 hover:text-white">View Menu</a></li>
                            <li><a href="{{ route('events.index') }}" class="text-gray-300 hover:text-white">Upcoming Events</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Book a Table</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                        <ul class="space-y-2 text-gray-300">
                            <li>📍 123 Game Street, Fun City, FC 12345</li>
                            <li>📞 (555) 123-GAME</li>
                            <li>📧 hello@gameandgrub.com</li>
                            <li>🕒 Mon-Thu: 11AM-11PM<br>Fri-Sat: 11AM-1AM<br>Sun: 12PM-10PM</li>
                        </ul>
                    </div>
                </div>
                
                <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-300">
                    <p>&copy; {{ date('Y') }} Game & Grub. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>