# Harrowing – Simple Harrow Deck Website

<div align="center">

[![Laravel](https://img.shields.io/badge/Laravel-11.x-red?logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-blue?logo=php&logoColor=white)](https://php.net)
![License](https://img.shields.io/github/license/PursDios/harrowing?style=flat-square)

**A clean, straightforward web app for drawing and reading from the Pathfinder Harrow Deck.**

</div>

## What is this?

This is a simple web-based **Harrow Deck** tool inspired by the fortune-telling cards from Paizo's Pathfinder RPG (Age of Lost Omens setting).

Use it to:
- Draw random cards
- Perform basic Harrowings (past/present/future spreads, alignment matches, etc.)
- View card meanings, suits (Hammers, Keys, Shields, Books, Stars, Crowns), and interpretations

Perfect for Pathfinder GMs/players during sessions (especially Curse of the Crimson Throne), solo divination fun, or just messing around with digital tarot-like mechanics.

## Features

- 🎴 Full 54-card Harrow Deck simulation
- Random card draw with animation/effects (if implemented)
- Card details: name, image (if added), alignment, ability association, meaning
- Basic spread layouts (e.g. 3-card reading, full Tapestry spread)
- Responsive design (Blade + Tailwind / Bootstrap?)
- Easy local setup with Laravel Sail / Valet / Herd / Docker

## Quick Start

### Prerequisites
- PHP ≥ 8.2
- Composer
- Node.js + npm (for assets)
- MySQL / SQLite / PostgreSQL (if using DB features)

### Installation

1. Clone the repo
   ```bash
   git clone https://github.com/PursDios/harrowing.git
   cd harrowing
   ```

2. Install dependencies
```bash
composer install
npm install
```
3. Copy env file & configure
```bash
cp .env.example .env
# Edit .env → set DB_CONNECTION, APP_URL, etc.
```
4. Generate key & run migrations (if needed)
```php
php artisan key:generate
php artisan migrate --seed   # If you have card data seeding
```
5. Compile assets
```bash
npm run dev
# or npm run build for production
```
6. Start the server
```php
php artisan serve
# Visit http://127.0.0.1:8000
```

Windows users: Try the included batch file:
Make Shit Work.bat 😄
### Usage
Go to the homepage → click "Draw Card" or "Start Harrowing" → enjoy your divination!
