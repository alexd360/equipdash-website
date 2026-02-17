# EquipDash Marketing Website: WordPress → Laravel + Filament Migration Plan

## Overview
Migrate the EquipDash WordPress marketing website to a **separate** Laravel 11 + Filament 3 project. The goal is a pixel-perfect design replica with full Claude Code manageability — blog, directory, pages, SEO, and content all manageable via code and Filament admin.

---

## Technical Stack

| Component | Choice | Why |
|-----------|--------|-----|
| Framework | Laravel 11 | Matches main app, Claude Code friendly |
| Admin Panel | Filament 3 | GUI for content management |
| Frontend | Blade + Livewire 3 + Alpine.js | Static pages + dynamic search/forms |
| CSS | Tailwind CSS + custom component CSS | Pixel-perfect with maintainability |
| Carousel | Splide.js (replacing Slick) | No jQuery dependency, lightweight |
| Images | Spatie Media Library + Intervention Image | Auto WebP, responsive sizes, Filament integration |
| SEO | Custom trait + Blade component | Full control, no package overhead |
| Caching | Spatie ResponseCache + Redis | Full-page cache, Filament-aware invalidation |
| Docker | Laravel Sail | Matches main app setup |
| Forms | Livewire components | Validation, DB save, email notification |
| Landing Pages | Filament Builder blocks + custom Blade | Template-based AND one-off pages |

---

## Database Schema (13 tables)

### `pages`
id, slug, title, template (enum), content (json), parent_id (nullable), meta_title, meta_description, og_image, canonical_url, robots, structured_data (json), is_published, published_at, sort_order, timestamps

### `posts` (blog)
id, slug, title, excerpt, content (longtext HTML), featured_image_id, author_id, category_id, read_time_minutes, meta_title, meta_description, og_image, canonical_url, structured_data (json), is_featured, is_published, published_at, timestamps

### `categories`
id, slug, name, description, sort_order, meta_title, meta_description, timestamps

### `tags`
id, slug, name, timestamps

### `post_tag` (pivot)
post_id, tag_id

### `authors`
id, name, slug, bio, avatar, email, timestamps

### `directory_listings`
id, slug, title, description (longtext), address, website, logo, featured_image, addon_type (json array), meta_title, meta_description, og_image, structured_data (json), is_published, published_at, sort_order, timestamps

### `directory_taxonomies`
id, slug, name, type (enum: location, experience, rental), sort_order, timestamps

### `directory_listing_taxonomy` (pivot)
directory_listing_id, directory_taxonomy_id

### `landing_pages`
id, slug, title, template_type (enum: block_based, custom), blocks (json), custom_blade_view (nullable), utm_source, utm_medium, utm_campaign, meta_title, meta_description, og_image, canonical_url, structured_data (json), is_published, published_at, timestamps

### `form_submissions`
id, form_type (enum: demo_request, contact, newsletter), data (json), ip_address, user_agent, referrer_url, is_read (bool), timestamps

### `site_settings`
id, key (unique), value (json), group, timestamps

### `faqs`
id, question, answer, page_slug (nullable), sort_order, is_published, timestamps

### `redirects`
id, from_path, to_path, status_code (301/302), is_active, timestamps

### `menu_items`
id, menu_location (enum: primary, footer), parent_id (nullable), label, url, target, mega_menu_type (nullable enum), mega_menu_data (json), sort_order, is_active, timestamps

---

## Filament Admin Panel

### Resources (CRUD)
1. **PostResource** — Rich text editor (TipTap), featured image, category/tags, SEO meta fields, read time, publish scheduling
2. **CategoryResource** — Blog categories
3. **TagResource** — Blog tags
4. **AuthorResource** — Author profiles with avatar
5. **DirectoryListingResource** — Image upload, taxonomy checkboxes by type, SEO fields, **bulk CSV import action**
6. **DirectoryTaxonomyResource** — Location/experience/rental taxonomies
7. **PageResource** — Template selection, JSON content editor, parent page, SEO fields
8. **LandingPageResource** — Filament Builder with block types (Hero, Feature Cards, Image+Text, CTA, FAQ, Form, Custom HTML)
9. **FaqResource** — FAQ items with page assignment
10. **FormSubmissionResource** — Read-only viewer, filterable by type, mark-as-read
11. **RedirectResource** — URL redirect management

### Custom Pages
1. **SiteSettings** — Global settings: logos, social links, footer text, CTA defaults, SEO defaults
2. **Dashboard** — Overview: total posts, directory listings, recent form submissions

---

## Artisan Commands (Claude Code Automation)

```
blog:create       — Create blog post (title, content, category, tags)
blog:publish      — Publish draft by slug
blog:list         — List posts with status/category filter
blog:update       — Update post content/metadata by slug
directory:import  — Bulk import from CSV
directory:create  — Create single listing
directory:list    — List all listings
page:seed         — Seed page from JSON definition
page:update       — Update page content by slug
seo:sitemap       — Generate XML sitemap
seo:audit         — Report missing SEO fields
cache:warm        — Warm full-page cache
landing:create    — Create landing page from block JSON
```

---

## Route Structure

```php
// Static pages
Route::get('/', [PageController::class, 'home']);
Route::get('/pricing', [PageController::class, 'pricing']);
Route::get('/book-a-demo', [PageController::class, 'bookADemo']);
Route::get('/contact-us', [PageController::class, 'contactUs']);
Route::get('/help-docs', [PageController::class, 'helpDocs']);
Route::get('/terms-of-use', [PageController::class, 'termsOfUse']);
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy']);

// Features
Route::get('/features/{slug}', [PageController::class, 'featureCategory']);
Route::get('/features/{category}/{slug}', [PageController::class, 'featureSingle']);

// Who We're For
Route::get('/{slug}', [PageController::class, 'whoWeAreFor']);
Route::get('/{parent}/{slug}', [PageController::class, 'whoWeAreForChild']);

// Blog
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'show']);
Route::get('/category/{slug}', [BlogController::class, 'category']);
Route::get('/author/{slug}', [BlogController::class, 'author']);

// Directory
Route::get('/directory', [DirectoryController::class, 'index']);
Route::get('/directory/{slug}', [DirectoryController::class, 'show']);

// Landing pages
Route::get('/l/{slug}', [LandingPageController::class, 'show']);

// SEO
Route::get('/sitemap.xml', [SitemapController::class, 'index']);

// Forms (POST)
Route::post('/forms/demo', [FormController::class, 'submitDemo']);
Route::post('/forms/contact', [FormController::class, 'submitContact']);
Route::post('/forms/newsletter', [FormController::class, 'submitNewsletter']);
```

---

## Pages to Build (full list)

| Page | WP Template | Route |
|------|-------------|-------|
| Homepage | `templates/home.php` | `/` |
| Pricing | `templates/pricing.php` | `/pricing` |
| Book a Demo | `templates/book-a-demo.php` | `/book-a-demo` |
| Contact Us | — | `/contact-us` |
| Help Docs | — | `/help-docs` |
| Terms of Use | — | `/terms-of-use` |
| Privacy Policy | — | `/privacy-policy` |
| **WHO WE'RE FOR** | | |
| Equipment Rental Providers | `templates/who-we-are-for.php` | `/equipment-rental-providers` |
| — Ski & Snowboard | `templates/who-we-are-for-child.php` | `/equipment-rental-providers/ski-snowboard` |
| — Bikes | `templates/who-we-are-for-child.php` | `/equipment-rental-providers/bikes` |
| — Water Sports | `templates/who-we-are-for-child.php` | `/equipment-rental-providers/water-sports` |
| — Boats | `templates/who-we-are-for-child.php` | `/equipment-rental-providers/boats` |
| — Camping & Hiking | `templates/who-we-are-for-child.php` | `/equipment-rental-providers/camping-hiking` |
| Experience & Tour Operators | `templates/who-we-are-for.php` | `/experience-tour-operators` |
| — Tours | `templates/who-we-are-for-child.php` | `/experience-tour-operators/tours` |
| — Activities & Adventure | `templates/who-we-are-for-child.php` | `/experience-tour-operators/activities-adventure` |
| — Attractions | `templates/who-we-are-for-child.php` | `/experience-tour-operators/attractions` |
| — Charters | `templates/who-we-are-for-child.php` | `/experience-tour-operators/charters` |
| **FEATURES** | | |
| All Features (overview) | `templates/features.php` | `/features` |
| Bookings | `templates/features-cateogry.php` | `/features/bookings` |
| — Online Booking | `templates/features-single.php` | `/features/bookings/online-booking` |
| — POS | `templates/features-single.php` | `/features/bookings/pos` |
| — Bookings Management | `templates/features-single.php` | `/features/bookings/bookings-management` |
| — Booking, Refund & Cancellation Policies | `templates/features-single.php` | `/features/bookings/refund-cancellation-policies` |
| — Workflow Automation | `templates/features-single.php` | `/features/bookings/workflow-automation` |
| — Waitlist | `templates/features-single.php` | `/features/bookings/waitlist` |
| — Payments | `templates/features-single.php` | `/features/bookings/payments` |
| Customer Experience | `templates/features-cateogry.php` | `/features/customer-experience` |
| — CRM | `templates/features-single.php` | `/features/customer-experience/crm` |
| — Digital Waivers | `templates/features-single.php` | `/features/customer-experience/digital-waivers` |
| — Custom Forms | `templates/features-single.php` | `/features/customer-experience/custom-forms` |
| — Loyalty | `templates/features-single.php` | `/features/customer-experience/loyalty` |
| — Gift Cards & Vouchers | `templates/features-single.php` | `/features/customer-experience/gift-cards-vouchers` |
| — Promotions & Campaigns | `templates/features-single.php` | `/features/customer-experience/promotions-campaigns` |
| — Reviews & Surveys | `templates/features-single.php` | `/features/customer-experience/reviews-surveys` |
| Resource Management | `templates/features-cateogry.php` | `/features/resource-management` |
| — Inventory Management | `templates/features-single.php` | `/features/resource-management/inventory-management` |
| — Guide Management | `templates/features-single.php` | `/features/resource-management/guide-management` |
| — Product Catalogue | `templates/features-single.php` | `/features/resource-management/product-catalogue` |
| — Experience Catalogue | `templates/features-single.php` | `/features/resource-management/experience-catalogue` |
| — Season & Schedule Management | `templates/features-single.php` | `/features/resource-management/season-schedule-management` |
| Planning | `templates/features-cateogry.php` | `/features/planning` |
| — Guestlist & Manifest | `templates/features-single.php` | `/features/planning/guestlist-manifest` |
| — Staff Rostering | `templates/features-single.php` | `/features/planning/staff-rostering` |
| Operations | `templates/features-cateogry.php` | `/features/operations` |
| — Staff Management (HR) | `templates/features-single.php` | `/features/operations/staff-management` |
| — Asset & Equipment Maintenance | `templates/features-single.php` | `/features/operations/asset-equipment-maintenance` |
| — Reports & Insights | `templates/features-single.php` | `/features/operations/reports-insights` |
| — API & Integrations | `templates/features-single.php` | `/features/operations/api-integrations` |
| **AI & AUTOMATIONS** | | |
| AI & Automations | `templates/features-cateogry.php` | `/features/ai-automations` |
| **INTEGRATIONS** | | |
| Integrations | `templates/integrations.php` | `/features/integrations` |
| Blog Index | `templates/blog.php` | `/blog` |
| Blog Post | `single.php` | `/blog/{slug}` |
| Blog Category | `archive.php` | `/category/{slug}` |
| Blog Author | `author.php` | `/author/{slug}` |
| Directory Index | `templates/directory.php` | `/directory` |
| Directory Listing | `single-directory.php` | `/directory/{slug}` |
| 404 | `404.php` | — |

---

## Phased Implementation

### Phase 1: Project Foundation
**Goal: Booted Laravel + Filament with Docker, database, and asset pipeline**

1. Create Laravel 11 project in `equipdash-website/`
2. Install Laravel Sail — docker-compose with MySQL + Redis + Mailpit
   - APP_PORT=8080, FORWARD_DB_PORT=3307 (avoid conflicts with main app)
3. Install packages:
   - `filament/filament:^3.0`
   - `livewire/livewire:^3.0`
   - `spatie/laravel-medialibrary:^11.0`
   - `spatie/laravel-responsecache`
   - `intervention/image:^3.0`
   - `spatie/laravel-sluggable`
4. Configure Tailwind with EquipDash design tokens:
   - Colors: primary `#F7581F`, navy `#003264`, dark `#1B2B4B`
   - Font: BR Candor (copy woff/woff2 from WP theme)
   - Custom border-radius, spacing values
5. Run all database migrations (13 tables)
6. Create all 13 Eloquent models with relationships
7. Install Filament panel, create admin user seeder
8. Create CLAUDE.md

**Deliverable: Running app at localhost:8080, Filament admin at /admin, empty schema ready**

---

### Phase 2: Layout Shell & Navigation
**Goal: Pixel-perfect header, footer, mega menus, base layout**

1. Create `layouts/app.blade.php` porting WP header.php + footer.php structure
2. Build header with logo, nav items, Login/CTA buttons
3. Build 3 mega menu components (Alpine.js hover/click):
   - Who We're For (3-column: description | 2 audience cards | 5 niche icons)
   - Features (3-column: description + links | 6 category cards | 7 feature icons)
   - Resources (3-column: description | 3 icon links | recent blog card)
4. Build footer (4-column, social icons, bottom bar)
5. Build reusable section components: CTA, FAQ accordion, subscribe form, breadcrumb
6. Port CSS — font declarations, button styles, card styles, mega menu styles
7. Set up all routes returning placeholder views
8. Mobile responsive hamburger menu

**Deliverable: Navigable shell with pixel-perfect chrome on all routes**

---

### Phase 3: Homepage & Static Marketing Pages
**Goal: All marketing pages with pixel-perfect design**

1. Homepage — hero, dashboard preview, audience cards, carousel (Splide), features overview, integrations grid, blog preview, FAQ, CTA
2. Pricing — monthly/annual toggle (Alpine.js), 3 tier cards, feature comparison table
3. Who We're For — 2 parent pages (use case template), 9 niche child pages (industry template: 5 rental + 4 experience)
4. All Features overview page
5. Feature category pages — 7 pages (Bookings, Customer Experience, Resource Management, Planning, Operations, AI & Automations, Integrations)
6. Individual feature pages — 25 pages (all use same template: hero, 3 benefits, FAQs, CTA)
7. Book a Demo — Livewire form component + video demo
8. Contact Us — Livewire form component
9. Help Docs, Terms, Privacy — simple content pages
10. 404 page
11. Seed ALL content from Website.pdf spec into pages table (every hero, benefit, FAQ, CTA)
12. Copy and optimize all images from WP theme

**Deliverable: All static pages rendered pixel-perfect**

---

### Phase 4: Blog System
**Goal: Full blog with Filament CRUD, Livewire listing, artisan commands**

1. Filament: PostResource, CategoryResource, TagResource, AuthorResource
2. Blog index — featured post + sidebar layout, category tabs, Livewire `BlogListing` component with AJAX pagination
3. Single post — TOC auto-generation, related posts, sidebar, CTA
4. Category archive, author page, search results
5. Artisan commands: `blog:create`, `blog:publish`, `blog:list`, `blog:update`
6. Sample content seeder

**Deliverable: Full blog matching WP design, manageable via Filament + CLI**

---

### Phase 5: Directory System
**Goal: Searchable/filterable directory with bulk import**

1. Filament: DirectoryListingResource (with CSV import action), DirectoryTaxonomyResource
2. Directory index — Livewire `DirectorySearch` component with search, location filter, experience/rental filters, 4-column grid, pagination, URL query sync
3. Single listing page — hero, details, tags, CTA
4. Artisan commands: `directory:import`, `directory:create`, `directory:list`
5. Sample data seeder

**Deliverable: Full directory matching WP design, bulk importable**

---

### Phase 6: Landing Pages & Forms
**Goal: Block-based landing page builder + form system**

1. Filament LandingPageResource with Builder blocks (Hero, Features, Image+Text, CTA, FAQ, Form, Custom HTML)
2. Landing page renderer with optional minimal layout (for Google Ads)
3. Form submission system — all 3 forms save to DB + email notification
4. Filament FormSubmissionResource (read-only viewer)

**Deliverable: Landing page creation via Filament, working forms**

---

### Phase 7: SEO, Performance & Caching
**Goal: Full SEO layer, image optimization, page caching**

1. `HasSeo` trait — meta_title, meta_description, og_image, canonical, structured_data
2. `<x-seo />` component — renders all meta/OG/Twitter/JSON-LD tags
3. SEO fields on all Filament resources
4. XML sitemap generator command
5. Media Library conversions (thumbnail, medium, large, og — all WebP)
6. `<x-responsive-image />` component with srcset + lazy loading
7. Spatie ResponseCache for full-page caching with Redis
8. Cache invalidation on Filament model save
9. `seo:audit` command for missing fields

**Deliverable: 90+ Lighthouse score, full SEO, optimized images**

---

### Phase 8: Redirect System & Final QA
**Goal: WP URL redirects, testing, documentation**

1. Redirect middleware checking `redirects` table
2. WP URL mapping seeder (old patterns → new routes)
3. Filament RedirectResource
4. Feature tests for all routes
5. Livewire component tests
6. Visual comparison with WP site
7. Mobile responsiveness testing
8. Performance benchmarking

**Deliverable: Production-ready site with all WP URLs redirected**

---

## Key Source Files to Port From

| WP File | Purpose | Maps To |
|---------|---------|---------|
| `themes/equipdash/templates/home.php` | Homepage sections | `views/pages/home.blade.php` |
| `themes/equipdash/templates/directory.php` | Directory page | `Livewire/DirectorySearch.php` |
| `themes/equipdash/templates/blog.php` | Blog index | `Livewire/BlogListing.php` |
| `themes/equipdash/templates/pricing.php` | Pricing page | `views/pages/pricing.blade.php` |
| `themes/equipdash/functions.php` | Mega menu walker, AJAX handlers | Header component + Livewire |
| `themes/equipdash/assets/css/custom.css` (66KB) | All page styles | Tailwind config + component CSS |
| `themes/equipdash/assets/css/main.css` | Base styles | Tailwind config + app.css |
| `themes/equipdash/assets/css/directory.css` (14KB) | Directory styles | Tailwind + directory component CSS |
| `themes/equipdash/assets/fonts/stylesheet.css` | BR Candor font faces | `resources/css/fonts.css` |
| `themes/equipdash/assets/js/main.js` | UI interactions | Alpine.js directives in components |
| `themes/equipdash/single-directory.php` | Directory single | `views/directory/show.blade.php` |
| `themes/equipdash/single.php` | Blog single post | `views/blog/show.blade.php` |

---

## File Structure

```
equipdash-website/
  app/
    Console/Commands/         # 13 artisan commands
    Filament/
      Resources/              # 11 Filament resources
      Pages/                  # SiteSettings, Dashboard
    Http/
      Controllers/            # Page, Blog, Directory, Landing, Form, Sitemap
      Middleware/              # RedirectOldUrls, CacheResponse
    Livewire/                 # BlogListing, DirectorySearch, 3 form components
    Models/                   # 13 Eloquent models
    Traits/                   # HasSeo
    View/Components/          # Seo, ResponsiveImage
  resources/
    views/
      layouts/                # app.blade.php, landing.blade.php
      components/             # header, footer, mega-menu/, cta, faq, blog-card, directory-card, landing-blocks/
      pages/                  # home, pricing, features/, who-we-are-for/, legal pages
      blog/                   # index, show, category, author, search
      directory/              # index, show
      landing/                # show
      livewire/               # component views
      errors/                 # 404
    css/                      # app.css, fonts.css, components/
    js/                       # app.js (Alpine + Splide init)
  public/
    fonts/                    # BR Candor woff/woff2
    images/                   # Static site images
  database/
    migrations/               # 13 migrations
    seeders/                  # Page, Settings, Menu, FAQ, sample content seeders
```

---

## Verification Plan

1. **Visual**: Side-by-side browser comparison of every page (WP at :10003 vs Laravel at :8080)
2. **Functional**: All forms submit, blog pagination works, directory filtering works
3. **Performance**: Lighthouse audit targeting 90+ on all pages
4. **SEO**: Validate structured data via Google Rich Results Test, check sitemap
5. **Responsive**: Test at 320px, 768px, 1024px, 1440px breakpoints
6. **Claude Code workflow**: Test artisan commands for blog/directory/landing page creation
7. **Filament**: Create/edit/delete content through admin panel
