@extends('layouts.app')

@section('title', 'Events & Promotions')

@section('content')
    <!-- Page Header -->
    <section class="bg-gradient-to-r from-teal-500 to-blue-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Events & Promotions</h1>
                <p class="text-xl">Join us for exciting gaming events, tournaments, and special occasions</p>
            </div>
        </div>
    </section>

    <!-- Events Grid -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Event Filters -->
            <div class="mb-12">
                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Filter Events</h3>
                    <div class="flex flex-wrap gap-4">
                        <button class="bg-teal-600 text-white px-4 py-2 rounded-lg text-sm font-medium">All Events</button>
                        <button class="bg-gray-200 dark:bg-gray-600 text-gray-700 dark:text-gray-300 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-500">Tournaments</button>
                        <button class="bg-gray-200 dark:bg-gray-600 text-gray-700 dark:text-gray-300 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-500">Trivia</button>
                        <button class="bg-gray-200 dark:bg-gray-600 text-gray-700 dark:text-gray-300 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-500">Leagues</button>
                        <button class="bg-gray-200 dark:bg-gray-600 text-gray-700 dark:text-gray-300 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-500">Workshops</button>
                        <button class="bg-gray-200 dark:bg-gray-600 text-gray-700 dark:text-gray-300 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-500">Special Dinners</button>
                    </div>
                </div>
            </div>

            @if($events->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($events as $event)
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                            <!-- Event Image -->
                            <div class="h-48 bg-gradient-to-br from-teal-400 to-blue-500 flex items-center justify-center relative">
                                @if($event->image)
                                    <img src="{{ $event->image }}" alt="{{ $event->name }}" class="w-full h-full object-cover">
                                @else
                                    <div class="text-center text-white">
                                        <span class="text-4xl mb-2 block">
                                            @switch($event->type)
                                                @case('tournament')
                                                    🏆
                                                    @break
                                                @case('trivia')
                                                    🧠
                                                    @break
                                                @case('league')
                                                    ⚔️
                                                    @break
                                                @case('workshop')
                                                    📚
                                                    @break
                                                @case('themed_dinner')
                                                    🍽️
                                                    @break
                                                @default
                                                    🎲
                                            @endswitch
                                        </span>
                                        <span class="text-sm font-semibold">{{ $event->name }}</span>
                                    </div>
                                @endif
                                
                                <!-- Event Type Badge -->
                                <div class="absolute top-2 right-2 bg-teal-600 text-white text-xs px-2 py-1 rounded">
                                    {{ ucfirst(str_replace('_', ' ', $event->type)) }}
                                </div>
                                
                                <!-- Date Badge -->
                                <div class="absolute top-2 left-2 bg-white text-gray-900 text-xs px-2 py-1 rounded font-semibold">
                                    {{ $event->date->format('M j') }}
                                </div>
                            </div>

                            <!-- Event Info -->
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ $event->name }}</h3>
                                
                                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                                    {{ Str::limit($event->description, 120) }}
                                </p>

                                <!-- Event Details -->
                                <div class="space-y-2 text-sm text-gray-500 dark:text-gray-400 mb-6">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                        </svg>
                                        {{ $event->date->format('l, F j, Y') }}
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                        </svg>
                                        {{ $event->start_time->format('g:i A') }} - {{ $event->end_time->format('g:i A') }}
                                    </div>
                                    
                                    @if($event->max_participants)
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                                            </svg>
                                            Max {{ $event->max_participants }} participants
                                        </div>
                                    @endif
                                    
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                        </svg>
                                        @if($event->price > 0)
                                            ${{ $event->price }}
                                        @else
                                            Free
                                        @endif
                                    </div>
                                </div>

                                <!-- Actions -->
                                <div class="flex gap-2">
                                    <a href="{{ route('events.show', $event) }}" 
                                       class="flex-1 bg-gray-600 hover:bg-gray-700 text-white text-center px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                        Learn More
                                    </a>
                                    @if($event->price > 0)
                                        <button class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                            Buy Ticket
                                        </button>
                                    @else
                                        <button class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                            RSVP
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-12">
                    {{ $events->links() }}
                </div>
            @else
                <div class="text-center py-12">
                    <svg class="w-24 h-24 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">No upcoming events</h3>
                    <p class="text-gray-500 dark:text-gray-400">Check back soon for exciting new events and tournaments!</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Event Newsletter Signup -->
    <section class="py-16 bg-teal-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Never Miss an Event
                </h2>
                <p class="text-xl mb-8 max-w-3xl mx-auto">
                    Subscribe to our newsletter and be the first to know about new tournaments, 
                    special events, and exclusive gaming experiences.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4 max-w-md mx-auto">
                    <input type="email" placeholder="Enter your email" 
                           class="flex-1 px-4 py-3 rounded-lg text-gray-900 placeholder-gray-500">
                    <button class="bg-yellow-500 hover:bg-yellow-600 text-black px-8 py-3 rounded-lg font-semibold transition-colors">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection