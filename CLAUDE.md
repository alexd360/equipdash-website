# EquipDash Marketing Website

## Overview
Marketing website for EquipDash, migrated from WordPress to Laravel 11 + Filament 3. This is a **separate project** from the main EquipDash app.

## Tech Stack
- **Framework**: Laravel 11
- **Admin Panel**: Filament 3 (at `/admin`)
- **Frontend**: Blade + Livewire 3 + Alpine.js
- **CSS**: Tailwind CSS with custom design tokens
- **Font**: BR Candor (custom, in `resources/fonts/`)
- **Carousel**: Splide.js (replacing WP's Slick)
- **Images**: Spatie Media Library + Intervention Image
- **SEO**: Custom `HasSeo` trait + `<x-seo />` Blade component
- **Docker**: Laravel Sail (MySQL + Redis + Mailpit)

## Design Tokens
- Primary: `#F7581F` (orange)
- Navy: `#003264`
- Dark: `#1B2B4B`
- Font: BR Candor family (100-900 weights)
- Max container width: 1320px

## Common Commands
```bash
# Start Docker
./vendor/bin/sail up -d

# Run migrations
./vendor/bin/sail artisan migrate

# Seed admin user (admin@equipdash.com / password)
./vendor/bin/sail artisan db:seed

# Build assets
npm run dev          # Development with HMR
npm run build        # Production build

# Artisan commands (Phase 4+)
./vendor/bin/sail artisan blog:create
./vendor/bin/sail artisan blog:list
./vendor/bin/sail artisan directory:import
./vendor/bin/sail artisan seo:audit
./vendor/bin/sail artisan seo:sitemap
```

## Project Structure
```
app/
  Http/Controllers/     # PageController, BlogController, DirectoryController, etc.
  Models/              # Page, Post, Author, Category, Tag, DirectoryListing, etc.
  Traits/HasSeo.php    # SEO trait for models with meta fields
  Filament/            # Admin panel resources (Phase 2+)
  Livewire/            # Livewire components for search, forms, etc. (Phase 3+)
database/
  migrations/          # 15 migration files for all tables
  seeders/             # AdminUserSeeder, content seeders
resources/
  css/app.css          # Tailwind + BR Candor font faces + component classes
  fonts/               # BR Candor woff/woff2 files
  views/
    layouts/app.blade.php              # Main layout
    layouts/partials/header.blade.php  # Header with mega menus (Alpine.js)
    layouts/partials/footer.blade.php  # 4-column footer
    components/seo.blade.php           # SEO meta tag component
    pages/                             # Static page templates
    blog/                              # Blog templates
    directory/                         # Directory templates
    landing/                           # Landing page templates
```

## Database Schema (13 tables + 2 pivots)
pages, posts, categories, tags, post_tag, authors, directory_listings, directory_taxonomies, directory_listing_taxonomy, landing_pages, form_submissions, site_settings, faqs, redirects, menu_items

## Ports
- App: `localhost:8080` (APP_PORT=8080)
- MySQL: forwarded to `3307` (FORWARD_DB_PORT=3307)
- Mailpit: `localhost:8025` (default)
- Redis: `6379` (default)

## Admin Panel
- URL: `localhost:8080/admin`
- Default login: `admin@equipdash.com` / `password`
- Brand color matches primary orange (#F7581F)

## WP Theme Reference
The original WordPress theme is at `../equipdash-wp/app/public/wp-content/themes/equipdash/`
- Template files: `templates/` directory
- CSS: `assets/css/custom.css` (66KB), `assets/css/directory.css` (14KB)
- Images: `assets/images/` (166 files)
- JS: `assets/js/main.js` (5.9KB)

## Phase Status
- [x] Phase 1: Project Foundation (Laravel, Filament, DB, assets)
- [ ] Phase 2: Layout Shell & Navigation (mega menus, responsive)
- [ ] Phase 3: Homepage & Static Marketing Pages
- [ ] Phase 4: Blog System
- [ ] Phase 5: Directory System
- [ ] Phase 6: Landing Pages & Forms
- [ ] Phase 7: SEO, Performance & Caching
- [ ] Phase 8: Redirect System & Final QA
