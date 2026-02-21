# Product Mockup Skill

Create an HTML/CSS product mockup for an EquipDash marketing page section. These mockups replace static screenshot images with styled HTML that looks like the real EquipDash app UI.

## When to use

When the user asks to create a product mockup, UI mockup, or replace a placeholder image with a styled product illustration on any marketing page.

## Design principles

1. **Layered cards** — Always use 2+ overlapping white cards. A background card shows a list/table/dashboard view, and a foreground card floats on top showing a detail popup or secondary view.
2. **Realistic data** — Use plausible names (Megan Allen, James Chen, Lauren Walker), product names from EquipDash (Stand Up Paddleboard, Tandem Kayak, Snorkel Set, Mountain Bike), realistic prices, booking numbers, and dates.
3. **Contained overflow** — The outer wrapper has `overflow: hidden` so cards can bleed off the bottom/edges for a cropped, natural feel.
4. **No images** — Everything is pure HTML/CSS. No `<img>` tags in the mockup. Use inline SVG for small icons (calendar, checkmarks, search).

## Colour palette

### Brand colours — USE THESE for visual impact

Don't be afraid to use bold brand colours for accents, stat values, avatars, active indicators, and highlights. Mockups should feel vibrant, not grey.

| Token | Value | Usage |
|---|---|---|
| Vivid Sky Blue | `#00A3FA` | **Design styling only**: active tab underlines, active badge backgrounds, decorative accents |
| Medium Jade Green | `#26AF51` | Avatars, success checkmark icons, positive indicator backgrounds |
| Bright Vermilion (Orange) | `#F7581F` | Promo codes, discount badges, CTA accents, alert highlights |
| Deep Navy | `#003264` | **All text/numbers that represent app data**: headings, stat values, bold names, checked checkboxes |

### Neutral colours

| Token | Value | Usage |
|---|---|---|
| Dark | `#1B2B4B` | Card titles, bold text |
| Body text | `#344054` | Table cell text, item names |
| Muted text | `#667085` | Dates, secondary info, inactive tabs |
| Light muted | `#98A2B3` | Labels, column headers, variants |
| Borders | `#F2F4F7` | Row dividers, section dividers |
| Light bg | `#F8F9FB` | Page/section background (parent card) |
| Card bg | `#ffffff` | All mockup cards |

### Key rule: data text vs design styling

**Text/numbers that would appear in the real app** (stat values, headings, names, booking numbers, prices) must use **navy `#003264`** — because that's what the EquipDash app actually uses.

**Design accents** (tab underlines, badge fills, avatar backgrounds, decorative elements) can use the vibrant brand colours (`#00A3FA`, `#26AF51`, `#F7581F`).

### Colour usage tips

- **Stat values** (12, $1,840, $153): Use `#003264` (navy) — matches the real app
- **Active tab underlines & badge fills**: Use `#00A3FA` (blue) — design accent, not data
- **Avatars**: Use `#26AF51` (green) — adds life to profile cards
- **Promo/discount elements**: Use `#F7581F` (orange) text on `#FFF4EE` background with `#FECDAB` border
- **Success/signed indicators**: Green checkmarks with `#26AF51`
- **Don't go overboard**: 1-2 brand colour accents per card is enough. White cards + navy text + brand pops = contrast

## Status badge colours

| Status | Background | Text | Border |
|---|---|---|---|
| Picked Up | `#FFF4E5` | `#B54708` | `#FECDAB` |
| Reserved | `#ECFDF3` | `#027A48` | `#A6F4C5` |
| Confirmed | `#EFF8FF` | `#175CD3` | `#B2DDFF` |
| Cancelled | `#FEF3F2` | `#B42318` | `#FECDCA` |
| Completed | `#F0FDF4` | `#166534` | `#86EFAC` |
| Late Pickup | `#FFF4E5` | `#B54708` | `#FECDAB` |

## CSS conventions

- All classes prefixed with `mockup-` to avoid collisions
- Wrapper class: `.mockup-{feature}` (e.g., `.mockup-bookings`, `.mockup-calendar`, `.mockup-inventory`)
- Cards: `.mockup-card` base class + specific class (`.mockup-list`, `.mockup-detail`, `.mockup-sidebar`)
- Font sizes: 9-10px for labels/uppercase, 11-12px for body, 13-15px for titles, 17px max for card headings
- Border radius: `12px` for cards, `10px` for badges, `3px` for checkboxes
- Shadows: background card `0 4px 24px rgba(0,0,0,0.08), 0 1px 3px rgba(0,0,0,0.04)`, foreground card `0 8px 32px rgba(0,0,0,0.12), 0 2px 6px rgba(0,0,0,0.06)`
- Card padding: `16px 18px`

## HTML structure pattern

```html
<div class="mockup-{feature}">
    {{-- Background card: list/table/dashboard --}}
    <div class="mockup-card mockup-list">
        <div class="mockup-list-header">...</div>
        <div class="mockup-tabs">...</div>
        <div class="mockup-table">
            <div class="mockup-row mockup-row-head">...</div>
            <div class="mockup-row">...</div>
        </div>
    </div>

    {{-- Foreground card: detail/popup --}}
    <div class="mockup-card mockup-detail">
        <div class="mockup-detail-header">...</div>
        <div class="mockup-detail-section">...</div>
    </div>
</div>
```

## CSS structure pattern

```css
.mockup-{feature} {
    position: relative;
    padding: 20px 25px 0;
    height: 320px;        /* adjust per container */
    overflow: hidden;
}

/* Background card */
.mockup-{name} {
    position: relative;
    z-index: 1;
}

/* Foreground floating card */
.mockup-{name} {
    position: absolute;
    right: 20px;
    top: 110px;           /* position to overlap background card */
    width: 260px;
    z-index: 2;
}
```

## Responsive notes

- At `991px` breakpoint, reduce heights, padding, font sizes slightly
- At `767px`, scale down the floating card width and reposition
- The mockup should remain readable but can be smaller on mobile

## Reusable elements

These base classes are already defined in `resources/css/app.css` (lines 1308-1574) and can be reused across mockups:

- `.mockup-card` — white card with rounded corners and shadow
- `.mockup-tabs` / `.mockup-tab` / `.mockup-tab.active` — tab bar with underline indicator
- `.mockup-badge` — pill count badge in tabs
- `.mockup-table` / `.mockup-row` / `.mockup-row-head` / `.mockup-col` — table layout
- `.mockup-checkbox` / `.mockup-checkbox.checked` — checkbox with checkmark
- `.mockup-status` + `.picked-up` / `.reserved` — status badge pills
- `.mockup-detail-header` / `.mockup-detail-section` / `.mockup-detail-label` / `.mockup-detail-value` / `.mockup-detail-sub` — detail card sections
- `.mockup-detail-item` / `.mockup-item-name` / `.mockup-item-variant` / `.mockup-item-price` — line item row
- `.mockup-detail-total` / `.mockup-total-amount` — total row
- `.mockup-avatar` — circular avatar with initials (green bg)
- `.mockup-profile-header` / `.mockup-profile-name` — profile card header with avatar
- `.mockup-profile-stats` / `.mockup-stat` / `.mockup-stat-value` / `.mockup-stat-label` — stat grid (blue values)
- `.mockup-waiver-row` / `.mockup-waiver-name` / `.mockup-waiver-date` — waiver signed row with green checkmark
- `.mockup-promo-row` / `.mockup-promo-code` / `.mockup-promo-discount` — promo code display (orange accent)
- `.mockup-search-pill` — compact search input indicator
- `.mockup-row-highlight` — highlighted table row

## EquipDash app features to reference for data

When creating mockups, use data that matches real EquipDash features:

- **Bookings**: booking numbers (#123-#200), rental periods, pickup/return dates, booking types (Rental/Experience/Store)
- **POS**: product cards with names, availability status, pricing per day
- **Calendar**: date grid, booking blocks colour-coded by status
- **Inventory**: product names, SKUs (UNK0693, VYY1287), stock counts, location names
- **Customers/CRM**: realistic names, emails, phone numbers
- **Waivers**: waiver titles, signed/unsigned status, signature dates
- **Staff**: staff names, roles (Guide, Manager), shift times

Check the EquipDash help centre docs at `../equipdash-help-centre/docs/` for feature details if needed.

## Browsing the EquipDash app for reference

Before building a mockup, browse the actual EquipDash app at `http://local-equipdash.com/` using Chrome browser tools to see real UI patterns:

- `/customers` — Customer list table, click edit icon for edit panel, click name for detail page (stats, waivers, booking history)
- `/waivers-forms` — Waiver list, click edit icon for form builder (drag-drop elements), click name for responses
- `/promotions/promo-codes` — Promo codes table with codes, types, discounts, status badges
- `/bookings` — Booking list with tabs, click for booking detail
- `/calendar` — Calendar view with booking blocks

Get into the detail/edit/create views — don't just screenshot list pages.

## Reference implementations

1. **Bookings mockup** (homepage) — list + detail popup pattern:
   - **HTML**: `resources/views/pages/home.blade.php` — search for `mockup-bookings`
   - **CSS**: `resources/css/app.css` — search for `Bookings Product Mockup`

2. **Customer Experience mockup** (homepage) — list + profile card pattern:
   - **HTML**: `resources/views/pages/home.blade.php` — search for `mockup-customers`
   - **CSS**: `resources/css/app.css` — search for `Customer Experience Product Mockup`

3. **Operations mockup** (homepage) — dashboard with stat cards + bar chart + floating inventory card:
   - **HTML**: `resources/views/pages/home.blade.php` — search for `mockup-operations`
   - **CSS**: `resources/css/app.css` — search for `Operations Dashboard Product Mockup`

4. **Dash AI mockup** (homepage) — chat conversation + floating automations card:
   - **HTML**: `resources/views/pages/home.blade.php` — search for `mockup-dashai`
   - **CSS**: `resources/css/app.css` — search for `Dash AI Chat Product Mockup`

## Industry Page Photo Mockups

A variant of the product mockup pattern used on industry/vertical pages (ski, boats, bikes, camping, etc.). Instead of a pure HTML background card, these use a **background photo** with **green decorative shapes** and **floating UI cards** on top.

### When to use

- On "Who We Are For" industry pages (e.g., ski-snowboard, boats, bikes, water-sports)
- When you have a relevant background photo for the vertical
- When the feature thumb needs to feel aspirational (outdoor/action imagery) rather than purely product-focused

### Key differences from standard mockups

| Aspect | Standard Mockup | Industry Photo Mockup |
|---|---|---|
| Background | White card with list/table | Photo with `object-fit: cover` |
| Wrapper | `.mockup-{feature}` | `.mockup-ind-wrap` |
| Class prefix | `mockup-` | `mockup-ind-` |
| Images | No `<img>` tags | Background photo `<img>` required |
| Shapes | None | Green angular shapes (`#26AF51`, `#00CE69`) |
| Cards | 2+ overlapping cards | 1 main + 1 secondary floating over photo |

### CSS class prefix: `mockup-ind-`

All industry mockup classes use the `mockup-ind-` prefix. Base classes are in `resources/css/app.css` — search for "Industry Page Photo-Based Mockups".

### Structure

```html
<div class="mockup-ind-wrap">
    {{-- Background photo --}}
    <div class="mockup-ind-photo radius-left">
        <img src="..." alt="...">
    </div>
    {{-- Green decorative shapes --}}
    <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
    <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
    {{-- Main floating card --}}
    <div class="mockup-card mockup-ind-card-main pos-bottom-left">
        ...table/list content using mockup-ind-table classes...
    </div>
    {{-- Secondary floating card --}}
    <div class="mockup-card mockup-ind-card-secondary pos-top-right">
        ...stat/detail content...
    </div>
</div>
```

### Border-radius pattern

- **Odd items** (image on right in layout): `radius-left` — big radius on left side (40px 8px 8px 40px)
- **Even items** (image on left in layout): `radius-right` — big radius on right side (8px 40px 40px 8px)

### Green shape placement

- **Odd items**: shapes on left edge of photo → use `.mockup-ind-shape-left-1` and `.mockup-ind-shape-left-2`
- **Even items**: shapes on right edge of photo → use `.mockup-ind-shape-right-1` and `.mockup-ind-shape-right-2`

### Card positioning

- **Odd items**: main card `pos-bottom-left`, secondary card `pos-top-right`
- **Even items**: main card `pos-bottom-right`, secondary card `pos-top-left`

### Industry-specific table classes

- `.mockup-ind-table` / `.mockup-ind-row` / `.mockup-ind-row-head` / `.mockup-ind-col` — compact table (smaller than standard mockup tables)
- `.mockup-ind-col-narrow` — fixed 55px column for SKUs, status badges
- `.mockup-ind-col-price` — right-aligned price column with navy bold
- `.mockup-ind-stat-row` / `.mockup-ind-stat-label` / `.mockup-ind-stat-value` — key-value stat rows for secondary cards
- `.mockup-ind-schedule-grid` — CSS grid for staff schedule view

### Adapting per industry

1. Choose 3 background photos relevant to the vertical (save to `public/images/{industry}/`)
2. Pick 3 EquipDash features that matter most for that industry
3. Populate cards with industry-appropriate data (e.g., "Ski Boots" for ski, "Kayak" for water sports)
4. Keep the same card structure — just swap data content and photos

### Reference implementation

- **Ski & Snowboard page**: `resources/views/pages/who-we-are-for/ski-snowboard.blade.php`
- **CSS**: `resources/css/app.css` — search for "Industry Page Photo-Based Mockups"

$ARGUMENTS
