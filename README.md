# Game & Grub

A modern Laravel-based web application for **Game & Grub**, a hybrid board-game store and food arcade.

## Project Overview

Game & Grub combines the best of "Dave & Buster's" and a local game shop, offering customers the ability to:
- Browse and purchase board games
- View and pre-order food from our arcade menu
- Reserve game tables for groups
- Book events and participate in gaming leagues

## Tech Stack

- **Framework**: Laravel 11 (PHP 8.3)
- **Frontend**: Blade templates with Tailwind CSS
- **Authentication**: Laravel Breeze
- **Database**: SQLite (development) / MySQL (production)
- **Payments**: Stripe integration
- **Testing**: PHPUnit + Pest

## Features

### Core Pages
1. **Home/Landing** - Hero banner with rotating images and CTAs
2. **Game Catalog** - Filterable game inventory with rental/purchase options
3. **Food & Drinks Menu** - Categorized menu with pre-order functionality
4. **Table Reservations** - Calendar-based booking system
5. **Events & Promotions** - Gaming leagues and special events
6. **Admin Dashboard** - CRUD operations and analytics

### User Features
- User registration and authentication
- Game browsing with filters (genre, player count, age, difficulty)
- Food menu with allergen information
- Table booking with game and food bundling
- Event RSVP and ticket purchasing

### Admin Features
- Game inventory management
- Menu item management
- Booking administration
- Event management
- Sales analytics

## Installation

### For Development (Laravel)

1. Clone the repository:
```bash
git clone https://github.com/ThePraxium/storefront.git
cd storefront
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Set up environment:
```bash
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
```

4. Run migrations and seeders:
```bash
php artisan migrate
php artisan db:seed
```

5. Build assets:
```bash
npm run build
```

6. Start the development server:
```bash
php artisan serve
```

### For GitHub Pages (Static Site)

The repository is configured to automatically deploy to GitHub Pages using GitHub Actions. The static version of the site includes:

- Pre-built HTML pages for all main sections
- Compiled CSS and JavaScript assets
- Responsive design with Tailwind CSS
- Sample content showcasing the Game & Grub concept

**Live Site:** The static version is automatically deployed to GitHub Pages when changes are pushed to the main branch.

## Development Timeline

- **Week 1**: Laravel skeleton, auth scaffolding, base layout ✅
- **Week 2**: Game & Menu models, migrations, CRUD in dashboard
- **Week 3**: Public catalog + menu pages, Tailwind styling
- **Week 4**: Booking flow (tables, cart, Stripe checkout)
- **Week 5**: Events module, basic analytics, polish & testing
- **Week 6**: Deployment pipeline, QA, hand-off

## Testing

Run the test suite:
```bash
php artisan test
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
