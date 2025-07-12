@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Page Header -->
    <section class="bg-gradient-to-r from-teal-500 to-blue-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Get in Touch</h1>
                <p class="text-xl">We'd love to hear from you! Reach out with any questions or feedback.</p>
            </div>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Send us a message</h2>
                    
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    First Name *
                                </label>
                                <input type="text" id="first_name" name="first_name" required
                                       class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 dark:bg-gray-700 dark:text-white">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Last Name *
                                </label>
                                <input type="text" id="last_name" name="last_name" required
                                       class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 dark:bg-gray-700 dark:text-white">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Email Address *
                            </label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 dark:bg-gray-700 dark:text-white">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Phone Number
                            </label>
                            <input type="tel" id="phone" name="phone"
                                   class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 dark:bg-gray-700 dark:text-white">
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Subject *
                            </label>
                            <select id="subject" name="subject" required
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 dark:bg-gray-700 dark:text-white">
                                <option value="">Select a topic</option>
                                <option value="reservation">Table Reservation</option>
                                <option value="event">Event Inquiry</option>
                                <option value="private_party">Private Party Booking</option>
                                <option value="feedback">Feedback</option>
                                <option value="general">General Question</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Message *
                            </label>
                            <textarea id="message" name="message" rows="5" required
                                      class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 dark:bg-gray-700 dark:text-white"
                                      placeholder="Tell us how we can help you..."></textarea>
                        </div>

                        <div>
                            <button type="submit" 
                                    class="w-full bg-teal-600 hover:bg-teal-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Visit us</h2>
                    
                    <div class="space-y-8">
                        <!-- Location -->
                        <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-3 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                Location
                            </h3>
                            <div class="text-gray-600 dark:text-gray-300">
                                <p>123 Game Street</p>
                                <p>Fun City, FC 12345</p>
                                <p class="mt-2">
                                    <a href="#" class="text-teal-600 hover:text-teal-500">Get Directions</a>
                                </p>
                            </div>
                        </div>

                        <!-- Hours -->
                        <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-3 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                                Hours
                            </h3>
                            <div class="text-gray-600 dark:text-gray-300 space-y-1">
                                <p>Monday - Thursday: 11:00 AM - 11:00 PM</p>
                                <p>Friday - Saturday: 11:00 AM - 1:00 AM</p>
                                <p>Sunday: 12:00 PM - 10:00 PM</p>
                            </div>
                        </div>

                        <!-- Contact Info -->
                        <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-3 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                                Contact
                            </h3>
                            <div class="text-gray-600 dark:text-gray-300 space-y-2">
                                <p>📞 (555) 123-GAME</p>
                                <p>📧 hello@gameandgrub.com</p>
                                <div class="flex space-x-4 mt-4">
                                    <a href="#" class="text-teal-600 hover:text-teal-500">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-teal-600 hover:text-teal-500">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.621 5.367 11.988 11.988 11.988s11.987-5.367 11.987-11.988C24.004 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.297C4.198 14.97 3.708 13.819 3.708 12.522s.49-2.448 1.297-3.323c.875-.807 2.026-1.297 3.323-1.297s2.448.49 3.323 1.297c.807.875 1.297 2.026 1.297 3.323s-.49 2.448-1.297 3.323c-.875.807-2.026 1.297-3.323 1.297z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="bg-gradient-to-r from-teal-500 to-blue-600 p-6 rounded-lg text-white">
                            <h3 class="text-xl font-semibold mb-4">Ready to play?</h3>
                            <p class="mb-4">Skip the form and book your table directly!</p>
                            <div class="space-y-3">
                                <a href="#" class="block w-full bg-white text-teal-600 text-center px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                    Book a Table
                                </a>
                                <a href="tel:5551234263" class="block w-full bg-yellow-500 text-black text-center px-4 py-2 rounded-lg font-semibold hover:bg-yellow-400 transition-colors">
                                    Call (555) 123-GAME
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Frequently Asked Questions
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Do I need a reservation?</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">
                        Reservations are recommended, especially on weekends and evenings. Walk-ins are welcome based on availability.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Is there a time limit for gaming?</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">
                        Tables are booked by the hour. Minimum booking is 2 hours, and you can extend as needed based on availability.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Can I bring my own games?</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">
                        Absolutely! While we have an extensive library, you're welcome to bring your own games to play.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Do you host private events?</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">
                        Yes! We offer private party packages for birthdays, corporate events, and special occasions. Contact us for details.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection