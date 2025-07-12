@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Page Header -->
    <section class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">About Game & Grub</h1>
                <p class="text-xl">Where gaming meets great food</p>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Our Story</h2>
                    <div class="prose prose-lg text-gray-600 dark:text-gray-300">
                        <p class="mb-4">
                            Game & Grub was born from a simple idea: what if you could combine the joy of playing board games 
                            with amazing food in one incredible space? Founded in 2024, we've created a unique destination 
                            that brings together gaming enthusiasts and food lovers alike.
                        </p>
                        <p class="mb-4">
                            Our carefully curated collection of over 200 board games ranges from classic family favorites 
                            to the latest strategy masterpieces. Whether you're a casual player or a serious gamer, 
                            you'll find something perfect for your group.
                        </p>
                        <p>
                            Combined with our chef-crafted menu featuring everything from shareables perfect for gaming 
                            sessions to full entrées that satisfy any appetite, Game & Grub offers an experience unlike anywhere else.
                        </p>
                    </div>
                </div>
                <div class="lg:order-first">
                    <div class="bg-gradient-to-br from-purple-400 to-indigo-500 rounded-lg h-96 flex items-center justify-center">
                        <div class="text-center text-white">
                            <svg class="w-24 h-24 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-lg font-semibold">Your Gaming Haven</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    What Makes Us Special
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-purple-100 dark:bg-purple-900 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">200+ Games</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        From party games to complex strategy games, we have something for every group and skill level.
                    </p>
                </div>

                <div class="text-center">
                    <div class="bg-yellow-100 dark:bg-yellow-900 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-yellow-600 dark:text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13v5a2 2 0 002 2h8.5m0-16.5v2m0 14v2m2-16.5h2m-2 14h2"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Chef-Crafted Menu</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Delicious food and drinks designed to complement your gaming experience perfectly.
                    </p>
                </div>

                <div class="text-center">
                    <div class="bg-teal-100 dark:bg-teal-900 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-teal-600 dark:text-teal-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Community Events</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Regular tournaments, trivia nights, and special events bring our gaming community together.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Meet Our Team
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300">
                    Passionate gamers and food enthusiasts dedicated to your experience
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-gradient-to-br from-purple-400 to-indigo-500 w-32 h-32 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-3xl">👨‍🍳</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Alex Chen</h3>
                    <p class="text-purple-600 dark:text-purple-400 mb-2">Owner & Head Chef</p>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">
                        Former chef at Michelin-starred restaurants, lifelong board game enthusiast
                    </p>
                </div>

                <div class="text-center">
                    <div class="bg-gradient-to-br from-yellow-400 to-orange-500 w-32 h-32 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-3xl">🎯</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Maria Rodriguez</h3>
                    <p class="text-yellow-600 dark:text-yellow-400 mb-2">Game Master & Events Coordinator</p>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">
                        Expert in over 500 board games, tournament organizer extraordinaire
                    </p>
                </div>

                <div class="text-center">
                    <div class="bg-gradient-to-br from-teal-400 to-blue-500 w-32 h-32 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white text-3xl">🎲</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Sam Taylor</h3>
                    <p class="text-teal-600 dark:text-teal-400 mb-2">Game Curator & Community Manager</p>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">
                        Board game industry veteran, always discovering the next great game
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Info -->
    <section class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-8">
                    Visit Us
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Location</h3>
                        <div class="space-y-2 text-gray-600 dark:text-gray-300">
                            <p>📍 123 Game Street</p>
                            <p>Fun City, FC 12345</p>
                            <p>📞 (555) 123-GAME</p>
                            <p>📧 hello@gameandgrub.com</p>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Hours</h3>
                        <div class="space-y-2 text-gray-600 dark:text-gray-300">
                            <p>Monday - Thursday: 11:00 AM - 11:00 PM</p>
                            <p>Friday - Saturday: 11:00 AM - 1:00 AM</p>
                            <p>Sunday: 12:00 PM - 10:00 PM</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="{{ route('contact') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition-colors">
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection