@extends('layouts.app')

@section('title', 'Browse Games')

@section('content')
    <!-- Page Header -->
    <section class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Game Catalog</h1>
                <p class="text-xl">Discover our amazing collection of board games perfect for every occasion</p>
            </div>
        </div>
    </section>

    <!-- Games Grid -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Filters (Placeholder for future enhancement) -->
            <div class="mb-12">
                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Filter Games</h3>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Genre</label>
                            <select class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                                <option>All Genres</option>
                                <option>Strategy</option>
                                <option>Adventure</option>
                                <option>Abstract</option>
                                <option>Engine Building</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Players</label>
                            <select class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                                <option>Any Number</option>
                                <option>2 Players</option>
                                <option>3-4 Players</option>
                                <option>5+ Players</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Difficulty</label>
                            <select class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                                <option>All Levels</option>
                                <option>Easy</option>
                                <option>Medium</option>
                                <option>Hard</option>
                                <option>Expert</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Age Range</label>
                            <select class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                                <option>All Ages</option>
                                <option>8+</option>
                                <option>10+</option>
                                <option>14+</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            @if($games->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    @foreach($games as $game)
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                            <!-- Game Image -->
                            <div class="h-48 bg-gradient-to-br from-purple-400 to-indigo-500 flex items-center justify-center">
                                @if($game->image)
                                    <img src="{{ $game->image }}" alt="{{ $game->name }}" class="w-full h-full object-cover">
                                @else
                                    <div class="text-center text-white">
                                        <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                                        </svg>
                                        <span class="text-sm font-semibold">{{ $game->name }}</span>
                                    </div>
                                @endif
                                @if($game->stock_quantity <= 2)
                                    <div class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded">
                                        Only {{ $game->stock_quantity }} left!
                                    </div>
                                @endif
                            </div>

                            <!-- Game Info -->
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $game->name }}</h3>
                                    <span class="text-xs text-purple-600 dark:text-purple-400 bg-purple-100 dark:bg-purple-900 px-2 py-1 rounded">
                                        {{ $game->genre }}
                                    </span>
                                </div>

                                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                                    {{ Str::limit($game->description, 100) }}
                                </p>

                                <!-- Game Details -->
                                <div class="grid grid-cols-2 gap-2 text-xs text-gray-500 dark:text-gray-400 mb-4">
                                    <div>👥 {{ $game->min_players }}-{{ $game->max_players }} players</div>
                                    <div>🎯 {{ $game->difficulty }}</div>
                                    <div>🎂 {{ $game->age_range }}</div>
                                    <div class="text-green-600 dark:text-green-400">
                                        @if($game->stock_quantity > 0)
                                            ✓ Available
                                        @else
                                            ❌ Out of Stock
                                        @endif
                                    </div>
                                </div>

                                <!-- Pricing -->
                                <div class="flex justify-between items-center mb-4">
                                    <div>
                                        <div class="text-lg font-bold text-purple-600 dark:text-purple-400">
                                            ${{ $game->rental_price }}<span class="text-sm font-normal text-gray-500">/rental</span>
                                        </div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">
                                            Buy: ${{ $game->purchase_price }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Actions -->
                                <div class="flex gap-2">
                                    <a href="{{ route('games.show', $game) }}" 
                                       class="flex-1 bg-purple-600 hover:bg-purple-700 text-white text-center px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                        View Details
                                    </a>
                                    @if($game->stock_quantity > 0)
                                        <button class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                            Add to Booking
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-12">
                    {{ $games->links() }}
                </div>
            @else
                <div class="text-center py-12">
                    <svg class="w-24 h-24 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.29-1.009-5.674-2.6C5.014 11.223 4 9.723 4 8c0-2.209 1.79-4 4-4h8c2.209 0 4 1.791 4 4 0 1.723-1.014 3.223-2.326 4.4A7.962 7.962 0 0112 15z"></path>
                    </svg>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">No games found</h3>
                    <p class="text-gray-500 dark:text-gray-400">Try adjusting your filters or check back later for new additions!</p>
                </div>
            @endif
        </div>
    </section>
@endsection