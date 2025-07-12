# Game & Grub

A modern static website for **Game & Grub**, a hybrid board-game store and food arcade.

## Project Overview

Game & Grub combines the best of "Dave & Buster's" and a local game shop, showcasing:
- Board game catalog and information
- Food and drinks menu
- Event listings and information
- Contact and location details

## Tech Stack

- **Frontend**: Static HTML with Tailwind CSS
- **Build Tool**: Vite for asset compilation
- **Deployment**: GitHub Pages
- **Styling**: Tailwind CSS with custom components

## Features

### Static Pages
1. **Home/Landing** - Hero banner with featured games and menu items
2. **Game Catalog** - Showcase of popular board games
3. **Food & Drinks Menu** - Categorized menu with images and prices
4. **Events** - Gaming events and special occasions
5. **About** - Information about Game & Grub
6. **Contact** - Location and contact information

### Design Features
- Responsive design optimized for all devices
- Modern UI with Tailwind CSS
- Interactive navigation
- Attractive game and menu showcases

## Installation & Development

### Prerequisites
- Node.js (version 20 or later)
- npm

### Setup

1. Clone the repository:
```bash
git clone https://github.com/ThePraxium/storefront.git
cd storefront
```

2. Install dependencies:
```bash
npm install
```

3. Build assets for development:
```bash
npm run build
```

4. Start a local development server:
```bash
# Using Python (if available)
cd public && python3 -m http.server 8000

# Or using Node.js http-server (install globally first)
npx http-server public -p 8000
```

The site will be available at `http://localhost:8000`

### Development Workflow

- Edit HTML files directly in the `public/` directory
- Modify styles in `resources/css/` and JavaScript in `resources/js/`
- Run `npm run build` to compile assets after making changes
- Use `npm run dev` for development with hot reload

## Deployment

The repository is configured to automatically deploy to GitHub Pages using GitHub Actions. The static site is automatically deployed when changes are pushed to the main branch.

**Live Site:** https://thepraxium.github.io/storefront/

The deployment process:
1. Installs Node.js dependencies
2. Builds CSS and JavaScript assets with Vite
3. Copies all public files to the deployment directory
4. Deploys to GitHub Pages

## File Structure

```
storefront/
├── public/                 # Static HTML files and assets
│   ├── index.html         # Homepage
│   ├── games.html         # Games catalog
│   ├── menu.html          # Food & drinks menu
│   ├── events.html        # Events listing
│   ├── about.html         # About page
│   ├── contact.html       # Contact information
│   └── assets/            # Built CSS and JS files
├── resources/             # Source files for building
│   ├── css/              # Tailwind CSS source
│   └── js/               # JavaScript source
├── .github/workflows/     # GitHub Actions for deployment
└── package.json          # Node.js dependencies and scripts
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
