@extends('layouts.app')

@section('title', 'Welcome to Game & Grub')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Welcome to Game & Grub
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                    Where board games meet delicious food! Enjoy hours of gaming with friends while savoring our amazing menu.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('games.index') }}" class="bg-yellow-500 hover:bg-yellow-600 text-black px-8 py-3 rounded-lg font-semibold text-lg transition-colors">
                        Browse Games
                    </a>
                    <a href="{{ route('menu.index') }}" class="bg-transparent border-2 border-white hover:bg-white hover:text-purple-600 px-8 py-3 rounded-lg font-semibold text-lg transition-colors">
                        View Menu
                    </a>
                    <a href="#" class="bg-purple-800 hover:bg-purple-900 px-8 py-3 rounded-lg font-semibold text-lg transition-colors">
                        Book a Table
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Games Section -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Featured Games
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300">
                    Discover our most popular board games perfect for your next gaming session
                </p>
            </div>

            @if($featuredGames->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($featuredGames as $game)
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                            <div class="h-48 bg-gradient-to-br from-purple-400 to-indigo-500 flex items-center justify-center">
                                @if($game->image)
                                    <img src="{{ $game->image }}" alt="{{ $game->name }}" class="w-full h-full object-cover">
                                @else
                                    <span class="text-white text-lg font-semibold">{{ $game->name }}</span>
                                @endif
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ $game->name }}</h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-4">{{ Str::limit($game->description, 100) }}</p>
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $game->min_players }}-{{ $game->max_players }} players</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $game->difficulty }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div class="text-sm">
                                        <span class="text-gray-900 dark:text-white font-semibold">${{ $game->rental_price }}</span>
                                        <span class="text-gray-500 dark:text-gray-400">/game</span>
                                    </div>
                                    <a href="{{ route('games.show', $game) }}" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <p class="text-gray-500 dark:text-gray-400 text-lg">No games available at the moment. Check back soon!</p>
                </div>
            @endif

            <div class="text-center mt-12">
                <a href="{{ route('games.index') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition-colors">
                    View All Games
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Menu Items Section -->
    <section class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Tasty Treats
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300">
                    Fuel your gaming sessions with our delicious food and drinks
                </p>
            </div>

            @if($featuredMenuItems->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    @foreach($featuredMenuItems as $item)
                        <div class="bg-white dark:bg-gray-700 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                            <div class="h-48 bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center">
                                @if($item->image)
                                    <img src="{{ $item->image }}" alt="{{ $item->name }}" class="w-full h-full object-cover">
                                @else
                                    <span class="text-white text-lg font-semibold">🍕</span>
                                @endif
                            </div>
                            <div class="p-6">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">{{ $item->name }}</h3>
                                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">{{ Str::limit($item->description, 80) }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-lg font-bold text-purple-600 dark:text-purple-400">${{ $item->price }}</span>
                                    <span class="text-xs text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-600 px-2 py-1 rounded">{{ $item->category }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <p class="text-gray-500 dark:text-gray-400 text-lg">Menu items coming soon!</p>
                </div>
            @endif

            <div class="text-center mt-12">
                <a href="{{ route('menu.index') }}" class="bg-yellow-500 hover:bg-yellow-600 text-black px-8 py-3 rounded-lg font-semibold text-lg transition-colors">
                    View Full Menu
                </a>
            </div>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Upcoming Events
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300">
                    Join us for exciting gaming events, tournaments, and special occasions
                </p>
            </div>

            @if($upcomingEvents->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($upcomingEvents as $event)
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                            <div class="h-32 bg-gradient-to-br from-teal-400 to-blue-500 flex items-center justify-center">
                                @if($event->image)
                                    <img src="{{ $event->image }}" alt="{{ $event->name }}" class="w-full h-full object-cover">
                                @else
                                    <span class="text-white text-2xl">🎲</span>
                                @endif
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $event->name }}</h3>
                                    <span class="text-xs text-teal-600 dark:text-teal-400 bg-teal-100 dark:bg-teal-900 px-2 py-1 rounded">{{ ucfirst($event->type) }}</span>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">{{ Str::limit($event->description, 100) }}</p>
                                <div class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                                    <div>📅 {{ $event->date->format('M j, Y') }}</div>
                                    <div>🕒 {{ $event->start_time->format('g:i A') }} - {{ $event->end_time->format('g:i A') }}</div>
                                    @if($event->price > 0)
                                        <div>💰 ${{ $event->price }}</div>
                                    @else
                                        <div>💰 Free</div>
                                    @endif
                                </div>
                                <a href="{{ route('events.show', $event) }}" class="block w-full text-center bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <p class="text-gray-500 dark:text-gray-400 text-lg">No upcoming events scheduled. Check back soon!</p>
                </div>
            @endif

            <div class="text-center mt-12">
                <a href="{{ route('events.index') }}" class="bg-teal-600 hover:bg-teal-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition-colors">
                    View All Events
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-16 bg-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Ready to Play?
            </h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">
                Book your table now and experience the perfect combination of gaming and great food. 
                Whether you're planning a date night, family outing, or gathering with friends, we've got you covered!
            </p>
            <a href="#" class="bg-yellow-500 hover:bg-yellow-600 text-black px-12 py-4 rounded-lg font-bold text-xl transition-colors">
                Book Your Table Now
            </a>
        </div>
    </section>
@endsection