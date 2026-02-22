# EquipDash Overview Video — V2 Plan

## Summary
~90 second product overview video. Built with Remotion, rendered to MP4, embedded in homepage hero. New script focuses on audience identification, pain points, bold branding, then a feature-by-feature walkthrough of the real EquipDash app UI.

## Resolution & Timing
- 1920x1080, 30fps
- ~2700 frames total (90 seconds)
- Font: BR Candor (already in `video/public/fonts/`)

---

## Video Structure

### Scene 1: Audience / Montage (0–210 frames, ~7s)

**Frame 0–60 (~2s):** Bold text on navy background:
> "Adventure operators like you need an all-in-one platform"

Text uses large BR Candor Bold (64-72px), white on navy (#003264). Fast fade-in, no slow logo animation.

**Frame 60–210 (~5s):** Quick-cut montage of outdoor footage (1-2 seconds each). User will supply video clips — we render placeholder colored frames with activity labels for now:
1. Skiing / Snowboarding
2. Mountain biking
3. Hiking
4. Rafting / Kayaking
5. Ziplining
6. Scuba diving / Snorkeling

Each clip has a subtle text overlay at bottom: the activity name in caps.

**Implementation:** Use `<Video>` or `<Img>` from Remotion with `staticFile()`. For now, render colored gradient placeholders with text labels until real footage is provided.

---

### Scene 2: Pain Points (210–480 frames, ~9s)

Navy background. Four pain point cards animate in (2x2 grid), matching the pitch deck's gap analysis:

| Card | Title | Subtitle |
|------|-------|----------|
| 1 | No All-in-One Solution | Booking, equipment, rostering, HR — all in different tools |
| 2 | Complex & Outdated Interfaces | Clunky UIs that slow down your team |
| 3 | Limited Marketing | No digital campaigns, retention, or personalised engagement |
| 4 | Limited Depth in Features | No dynamic pricing, AI insights, or SMB analytics |

**Animation:**
- Cards slide up in staggered pairs (top row, then bottom row)
- After all 4 visible (~frame 360), a bold orange X sweeps across each card simultaneously
- Cards fade/blur slightly

**Frame 400–480:** Transition text:
> "There has to be a better way..."

Fades to white, preparing for the EquipDash reveal.

---

### Scene 3: EquipDash Reveal (480–660 frames, ~6s)

**Frame 480–540:** White flash transition → navy background. EquipDash logo animates in FAST (not the slow polygon-by-polygon — all polygons appear together with a quick scale-up punch).

**Frame 540–600:** Bold headline types in quickly:
> "Get more bookings. Simplify your operations."

Large (60px+), white, centered. This matches the homepage hero exactly.

**Frame 600–660:** Subtitle fades in:
> "End-to-end everything to run your business."

Orange subtext, medium weight. Then quick transition into features.

**Style note:** This should feel BOLD and punchy like the website hero. No gentle fades — use snap/punch animations with slight overshoot spring easing.

---

### Scene 4: Feature Walkthrough (660–2400 frames, ~58s)

Nine features, each gets ~190 frames (~6.3s). Each feature follows the same pattern:

1. **Feature label pill** (orange, uppercase) animates in at top
2. **Headline** text animates in below
3. **App mockup** slides up from bottom — this is the actual EquipDash UI, faithfully reproduced

The mockups MUST match the real app UI exactly. Reference screenshots captured from `local-equipdash.com`:

#### 4a. Products & Experiences Setup (660–850)
- **Label:** PRODUCTS & SERVICES
- **Headline:** "Set up products, experiences, variations & pricing"
- **Mockup:** Products list page matching real UI:
  - Sidebar (navy, GENERAL/OPERATIONS/SERVICES/MANAGEMENT sections)
  - Header: "Products" with `+ Add Product` button (navy)
  - "All products" subtitle
  - Search bar + Status/Category filter pills
  - Table: Product ID | Image | Product Name | SKU | Category | Status (green "Active" badge) | Price ("Flat $50.00 / Day — Applies year round") | Action icons (edit/duplicate/delete)
  - Real product names: Ski Set, Snorkel Set, Beach Umbrella & Chair Set, Camping Stove Kit, 4-Person Tent, Stand Up Paddleboard, Tandem Kayak, Single Kayak, E-Bike City Explorer, Beach Cruiser Classic, Mountain Bike - Trail Pro

#### 4b. Online Bookings & POS (850–1040)
- **Label:** ONLINE BOOKINGS
- **Headline:** "Get bookings 24/7 online or through your POS"
- **Mockup:** All Bookings page:
  - Tabs: All Bookings (underlined) | Rentals | Experiences | Store
  - `Filter by date` button top-right
  - Search bar + Status/Payment status/Tag filter pills
  - Table: Booking # | Booking date | Booking type | Customer | Status | Price | Payment status | Action (eye icon)
  - Status badges: Confirmed (green), Checked In (orange), Picked Up (green), Cancelled (red)
  - Payment badges: Paid (green), Unpaid (orange), Refunded (red), Partially Paid (yellow)
  - Header: `Action` dropdown + `+ New Booking` button (navy)

#### 4c. Manage Bookings (1040–1230)
- **Label:** MANAGE BOOKINGS
- **Headline:** "Pickups, returns, cancellations — all in one view"
- **Mockup:** Dashboard page focused on the pickup/return tables:
  - "Upcoming pick ups" with "Late pick ups (1)" red badge
  - "Next returns" with "Late returns (4)" red badge
  - Tables with Booking #, Customer, status badges (reserved/picked up), Pick up time / Return time
  - Performance snapshot cards above: Sales, Booking in period, Bookings received with change indicators

#### 4d. Customers, Waivers, Promotions (1230–1420)
- **Label:** CUSTOMERS
- **Headline:** "Manage customers, waivers, promotions & campaigns"
- **Mockup:** Split/layered view showing:
  - Background: Customers list (Customer ID, First name, Last name, Email, Customer since, Last booking)
  - Overlay card: Waivers & forms table (Equipment Rental Agreement — Published, General Liability Waiver — Published, showing # responses)
  - Small overlay: Promotions section hint

#### 4e. Surveys & Reviews (1420–1610)
- **Label:** SURVEYS & REVIEWS
- **Headline:** "Send surveys, collect feedback & get reviews"
- **Mockup:** Surveys page:
  - "All surveys" list
  - Table: ID, Date created, Survey name ("Post-Booking Feedback Survey"), Status (Published), Auto-send ("After booking completes"), Responses (8), Response rate (Manual), NPS (green circle), Latest response, Actions
  - `+ New survey` button (navy)
  - Status/Trigger filter pills

#### 4f. Staff Management (1610–1800)
- **Label:** STAFF
- **Headline:** "Onboarding, rostering & team management"
- **Mockup:** Staff page:
  - "All staff" table
  - Columns: Staff ID, Status (Active green badge), First name, Last name, Email, Hire date, Role
  - Header: Search staff, Status/Role filters, `Action` dropdown, `+ Add Staff` button (navy)
  - Real names: Rachel Thompson, David Kim, Anna Brooks, Carlos Ramirez, Lisa Chen, Mike Johnson

#### 4g. Workshop & Maintenance (1800–1990)
- **Label:** WORKSHOP
- **Headline:** "Equipment maintenance & asset tracking"
- **Mockup:** Workshop page:
  - Tabs: In Workshop (active) | Scheduled | Overdue | Left Workshop
  - `Filter by date` button
  - Search by product or identifier
  - Product dropdown filter
  - `Add Item` (navy) + `Return Item` (navy) buttons
  - Show a populated state (not empty) with sample maintenance items showing product name, identifier, status, scheduled date

#### 4h. Reports (1990–2180)
- **Label:** REPORTS
- **Headline:** "Analytics & insights to grow your business"
- **Mockup:** Reports page:
  - Tabs: Overview (active) | Rentals | Experiences | Customers | Store
  - Date filter: "Today" dropdown
  - Stats cards: Sales ($12,480), Booking in period (234), Bookings received (89)
  - "Sales - This year vs. last year" chart with Export button, Sales by value dropdown
  - Sub-tabs: All sales (active, navy pill) | Rentals | Experiences | Store
  - Line/bar chart with Y-axis ($1.5K - $3.5K) and data

#### 4i. Dash AI (2180–2400)
- **Label:** DASH AI
- **Headline:** "Your AI-powered co-pilot"
- **Mockup:** AI Assistant page matching real UI:
  - Header: AI icon + "AI Assistant" with `+ New Conversation` button (navy)
  - Chat area with "Dash" header (purple AI icon)
  - Welcome message bubble: "Welcome back, Sarah! I'm your AI assistant for EquipDash. I can help with managing bookings, customer service, inventory tracking, analytics & reporting, and staff scheduling. What would you like to do?"
  - Bullet list inside bubble
  - Right sidebar: Quick Actions (BOOKINGS section with "Create Booking", "Today's Bookings"), Recent Conversations with search, Usage This Month with progress bar (500K used / 2M limit)
  - Input field: "Ask Dash anything about your business or to perform actions" with send button
  - Disclaimer: "AI responses are generated and may contain inaccuracies."

**Transitions between features:** Quick slide-left (10 frames). No slow crossfades.

---

### Scene 5: CTA (2400–2700 frames, ~10s)

Navy background, bookend with intro.

**Frame 2400–2460:** EquipDash logo punches in (fast, same as Scene 3).

**Frame 2460–2520:** Headline:
> "Start your free 21-day trial"

Bold, 64px, white, word-by-word but FAST (3 frames per word).

**Frame 2520–2560:** Subtitle:
> "No credit card required. Plans from $29/mo."

White, 50% opacity, 22px.

**Frame 2560–2620:** Orange CTA button with glow pulse:
> "Start Your Free Trial"

**Frame 2620–2700:** URL fades in:
> "equipdash.com"

---

## Real App UI Reference (from Chrome screenshots)

### Sidebar Navigation (matches every feature mockup)
```
GENERAL
  Dashboard (grid icon, navy active state)
  AI Assistant (purple hexagon bolt icon)

OPERATIONS
  POS (clipboard icon)
  Calendar (calendar icon)
  Check Availability
  Scan a barcode
  Bookings > (All bookings, Rentals, Experiences, Store, Tags)

SERVICES
  Rentals > (Products, Bundles, Categories, Workshop)
  Experiences >
  Store >

MANAGEMENT
  Customers
  Staff >
  Waivers & Forms
  Promotions >
  Surveys
  Reports
  Settings

SUPPORT
  Help Center
```

### Common UI Patterns
- **Page header:** Title left, Action dropdown + primary button (navy `#003264`) right
- **Global search:** Top center with `Ctrl K` shortcut badge
- **Filter pills:** Rounded border, dropdown arrow, light gray border
- **Tables:** Light gray header row, alternating white rows, thin borders
- **Status badges:** Green "Active"/"Published"/"Paid"/"Picked Up", Orange "Confirmed"/"Unpaid"/"Checked In", Red "Cancelled"/"Refunded", Yellow "Partially Paid"
- **Sidebar:** Navy (#003264) background, white text, section labels in small gray caps, active item has light navy highlight with rounded corners
- **Primary action buttons:** Navy (#003264) background, white text, rounded
- **Tab underline:** Navy for active, gray for inactive
- **"+ New booking" button:** Always top-right, navy with plus icon

---

## Video Footage Placeholders

For Scene 1 montage, we need 6 short clips (1-2s each). Until provided, render:
- Colored gradient frames with large activity label text
- Each placeholder uses a different color from the brand palette
- File convention: `video/public/footage/skiing.mp4`, `rafting.mp4`, etc.

---

## File Changes Required

### New/Modified files in `video/src/`:
- `scenes/AudienceMontage.tsx` — NEW (replaces IntroScene)
- `scenes/PainPoints.tsx` — NEW (replaces ProblemScene)
- `scenes/EquipDashReveal.tsx` — NEW (bold logo + tagline punch)
- `scenes/FeatureWalkthrough.tsx` — NEW (orchestrator for 9 sub-scenes)
- `scenes/CtaScene.tsx` — MODIFIED (faster, bolder animations)
- `showcase/ProductsSetup.tsx` — NEW
- `showcase/OnlineBookings.tsx` — REWRITE (match real bookings UI)
- `showcase/ManageBookings.tsx` — NEW (dashboard pickup/return view)
- `showcase/CustomersWaivers.tsx` — NEW
- `showcase/SurveysReviews.tsx` — NEW
- `showcase/StaffManagement.tsx` — NEW
- `showcase/WorkshopMaintenance.tsx` — NEW
- `showcase/ReportsAnalytics.tsx` — NEW
- `showcase/DashAI.tsx` — REWRITE (match real AI assistant UI)
- `components/MockupSidebar.tsx` — UPDATE (add Check Availability, Scan a barcode, Workshop, Promotions, Surveys, Reports, Settings, Help Center)
- `Video.tsx` — UPDATE frame ranges for new 5-scene structure

### Delete:
- `scenes/IntroScene.tsx`
- `scenes/ProblemScene.tsx`
- `scenes/ProductShowcase.tsx`
- `showcase/DashboardOverview.tsx`
- `showcase/CalendarScheduling.tsx`
- `showcase/InventoryPOS.tsx`
- `showcase/CustomerManagement.tsx`

---

## Implementation Order

1. Update `MockupSidebar.tsx` to match real app sidebar exactly
2. Build Scene 1: AudienceMontage (placeholder footage)
3. Build Scene 2: PainPoints (4 cards + X sweep)
4. Build Scene 3: EquipDashReveal (bold punch animation)
5. Build 9 feature sub-scenes in order, each matching real app UI pixel-for-pixel
6. Update CtaScene for bolder animations
7. Wire up Video.tsx with new frame ranges
8. Delete old unused files
9. Render MP4/WebM

## Key Principles
- **BOLD, not gentle.** Quick snappy animations. Spring easing with overshoot.
- **Match the real UI.** Every mockup must look like the actual app screenshots.
- **Navy sidebar in every feature mockup.** Same structure, same icons.
- **Keep consistent layout:** Feature label pill → headline → full-width app mockup
- **Fast transitions.** 10-frame slide-lefts between features. No lingering.
