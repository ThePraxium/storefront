@extends('layouts.app')

@section('title', 'Food & Drinks Menu')

@section('content')
    <!-- Page Header -->
    <section class="bg-gradient-to-r from-yellow-500 to-orange-500 text-black py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Food & Drinks Menu</h1>
                <p class="text-xl">Delicious food and refreshing drinks to fuel your gaming sessions</p>
            </div>
        </div>
    </section>

    <!-- Menu Items by Category -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($menuItems->count() > 0)
                @foreach($menuItems as $category => $items)
                    <div class="mb-16">
                        <!-- Category Header -->
                        <div class="text-center mb-12">
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                                {{ $category }}
                            </h2>
                            <div class="w-24 h-1 bg-yellow-500 mx-auto rounded"></div>
                        </div>

                        <!-- Category Items -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            @foreach($items as $item)
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                                    <!-- Food Image -->
                                    <div class="h-48 bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center">
                                        @if($item->image)
                                            <img src="{{ $item->image }}" alt="{{ $item->name }}" class="w-full h-full object-cover">
                                        @else
                                            <div class="text-center text-white">
                                                <span class="text-4xl mb-2 block">
                                                    @switch($category)
                                                        @case('Snacks')
                                                            🥨
                                                            @break
                                                        @case('Entrées')
                                                            🍔
                                                            @break
                                                        @case('Shareables')
                                                            🍕
                                                            @break
                                                        @case('Drinks')
                                                            🥤
                                                            @break
                                                        @case('Desserts')
                                                            🍰
                                                            @break
                                                        @default
                                                            🍽️
                                                    @endswitch
                                                </span>
                                                <span class="text-sm font-semibold">{{ $item->name }}</span>
                                            </div>
                                        @endif
                                        @if(!$item->available)
                                            <div class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded">
                                                Unavailable
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Food Info -->
                                    <div class="p-6">
                                        <div class="flex justify-between items-start mb-2">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $item->name }}</h3>
                                            <span class="text-xl font-bold text-yellow-600 dark:text-yellow-400">
                                                ${{ $item->price }}
                                            </span>
                                        </div>

                                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                                            {{ $item->description }}
                                        </p>

                                        <!-- Allergens -->
                                        @if($item->allergens && count($item->allergens) > 0)
                                            <div class="mb-4">
                                                <span class="text-xs text-gray-500 dark:text-gray-400 font-medium">Allergens:</span>
                                                <div class="flex flex-wrap gap-1 mt-1">
                                                    @foreach($item->allergens as $allergen)
                                                        <span class="text-xs bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200 px-2 py-1 rounded">
                                                            {{ ucfirst($allergen) }}
                                                        </span>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @else
                                            <div class="mb-4">
                                                <span class="text-xs text-green-600 dark:text-green-400 font-medium">✓ No common allergens</span>
                                            </div>
                                        @endif

                                        <!-- Actions -->
                                        <div class="flex gap-2">
                                            <a href="{{ route('menu.show', $item) }}" 
                                               class="flex-1 bg-gray-600 hover:bg-gray-700 text-white text-center px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                                View Details
                                            </a>
                                            @if($item->available)
                                                <button class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                                    Add to Pre-Order
                                                </button>
                                            @else
                                                <button disabled class="bg-gray-300 text-gray-500 px-4 py-2 rounded-lg text-sm font-medium cursor-not-allowed">
                                                    Unavailable
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center py-12">
                    <svg class="w-24 h-24 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13v5a2 2 0 002 2h8.5m0-16.5v2m0 14v2m2-16.5h2m-2 14h2"></path>
                    </svg>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Menu coming soon!</h3>
                    <p class="text-gray-500 dark:text-gray-400">We're working hard to bring you delicious food options.</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Special Offers Section -->
    <section class="py-16 bg-yellow-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-8">
                    Special Offers
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-yellow-600 dark:text-yellow-400 mb-4">
                            Game & Grub Combo
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Book a table for 3+ hours and get 20% off your food order!
                        </p>
                        <a href="#" class="bg-yellow-500 hover:bg-yellow-600 text-black px-6 py-3 rounded-lg font-semibold transition-colors">
                            Learn More
                        </a>
                    </div>
                    
                    <div class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-yellow-600 dark:text-yellow-400 mb-4">
                            Happy Hour
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Monday-Thursday 3-6 PM: 50% off drinks and appetizers!
                        </p>
                        <a href="#" class="bg-yellow-500 hover:bg-yellow-600 text-black px-6 py-3 rounded-lg font-semibold transition-colors">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection