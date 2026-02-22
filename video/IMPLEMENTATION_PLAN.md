# Video Showcase Redesign v2 — Cinematic Apple-Style

## Problem
Current showcases scatter small FloatingCards on white backgrounds. Needs Apple product video quality: full-screen app views with cinematic zoom transitions showing workflow step-by-step.

## Status Tracker

| Task | Status |
|------|--------|
| Fix montage loop bug | PENDING |
| Create AppMockup.tsx | PENDING |
| Create CinematicZoom.tsx | PENDING |
| Create DetailPanel.tsx | PENDING |
| Rewrite ManageBookings.tsx (proof of concept) | PENDING |
| Rewrite ProductsSetup.tsx | PENDING |
| Rewrite OnlineBookings.tsx | PENDING |
| Rewrite CustomersWaivers.tsx | PENDING |
| Rewrite SurveysReviews.tsx | PENDING |
| Rewrite StaffManagement.tsx | PENDING |
| Rewrite WorkshopMaintenance.tsx | PENDING |
| Rewrite ReportsAnalytics.tsx | PENDING |
| Rewrite DashAI.tsx | PENDING |
| Update STYLE_GUIDE.md | PENDING |
| Render final video | PENDING |

---

## New Approach: 3-Step Cinematic Pattern

Every showcase follows this within its 140-frame budget:

| Phase | Frames | What Happens |
|-------|--------|-------------|
| **Step 1: Full App** | 0–45 | Full app mockup (sidebar + page content) loads in with staggered animations |
| **Step 2: Zoom** | 45–70 | Cinematic zoom into a specific element (row, card, chart). Vignette dims surroundings |
| **Step 3: Detail** | 70–140 | Detail panel slides in / morphs from zoomed element. Key data shown large and clear |

---

## New Shared Components

### 1. `AppMockup.tsx` — Full app shell (`video/src/components/AppMockup.tsx`)
- Reuses existing `MockupSidebar` (224px navy sidebar, already built)
- Props: `activeItem`, `pageTitle`, `headerRight`, `children`
- Layout: Sidebar 224px | Main area 1696px (Header 64px + Content 1016px)
- Sidebar slides in (0-12 frames), header fades (3-12), content fades (5-15)
- Every showcase shows the same sidebar with different active item = visual consistency

### 2. `CinematicZoom.tsx` — Apple zoom effect (`video/src/components/CinematicZoom.tsx`)
- Props: `children`, `zoomTarget: {x, y, width, height}`, `zoomStartFrame`, `zoomDuration` (default 25)
- Applies `transform: scale() translate()` to make target area fill viewport
- Scale = `min(viewportWidth / target.width, viewportHeight / target.height)`
- TranslateX = `(viewportCenterX - target.x) * scale`
- Adds vignette/dim overlay during zoom (radial gradient, opacity 0→0.3)
- Uses `EASING.easeInOut` for smooth cinematic feel

### 3. `DetailPanel.tsx` — Slide-in detail view (`video/src/components/DetailPanel.tsx`)
- Props: `children`, `enterFrame`, `direction` (right/bottom/scale), `width` (default 480)
- Slides from right (translateX 400→0, 20 frames, easeOut)
- Reusable across all showcases for the "zoomed detail" step

---

## 9 Showcase Redesigns

### 1. ProductsSetup.tsx
**Step 1 (0-45):** Products table page. `activeItem="Rentals"`, `pageTitle="Products"`. Search + "+ Add Product" button. 6 product rows (Mountain Bike, Tandem Kayak, E-Bike, SUP Board, Ski Set, Beach Cruiser). Columns: ID, Image placeholder, Name, SKU, Category, Status (Active), Price. Staggered row entry.
**Step 2 (45-70):** Zoom to Mountain Bike row. Scale ~4x.
**Step 3 (70-140):** Detail panel from right. Product image area, "Mountain Bike - Trail Pro", SKU. Variations (S/M/L, M selected). Dynamic Pricing grid (Standard $45, Weekend $55, Peak $65). Animated price transition.

### 2. OnlineBookings.tsx
**Step 1 (0-45):** `activeItem="Bookings"`, `pageTitle="Online Store"`. Browser chrome mockup with product grid (Mountain Bike $45/day, Safety Helmet $12/day, Trail Guide $89/session). Calendar widget showing March 2026 on right.
**Step 2 (45-70):** Zoom to calendar widget. Shows date availability (green/amber).
**Step 3 (70-140):** Calendar morphs into booking confirmation. "Booking Confirmed!" + green checkmark. Confirmation #ED-2026-1847. Summary: 2 items, March 12-14, $57.00. Small confetti burst.

### 3. ManageBookings.tsx (BUILD FIRST — proof of concept)
**Step 1 (0-45):** `activeItem="Dashboard"`, `pageTitle="Dashboard"`. Tab nav (Rentals active). 3 stat cards (Sales $12,390, Bookings in Period 434, Bookings Received 13). Two side-by-side tables: "Upcoming Pickups" (with "Late pick ups (1)" red badge) and "Next Returns" (with "Late returns (4)" red badge). 4-5 rows each.
**Step 2 (45-70):** Zoom to Sarah Mitchell's row in Pickups table. Row gets blue highlight. Scale ~3x.
**Step 3 (70-140):** Detail panel slides from right (400px). "Booking #1024" + "Reserved" badge. Customer: Avatar (SM) + Sarah Mitchell + email. Dates: Mar 12 → Mar 14. Items: Mountain Bike $45, Safety Helmet $12. Total: $114.00 bold. "Mark as Picked Up" green button fades in last.

### 4. CustomersWaivers.tsx
**Step 1 (0-45):** `activeItem="Customers"`, `pageTitle="Customers"`. Table: ID, First Name, Last Name, Email, Customer Since, Last Booking, Actions. 6 rows.
**Step 2 (45-70):** Zoom to Emma Scott row. Orange tint highlight. Scale ~3.5x.
**Step 3 (70-140):** Profile card: Avatar (ES navy), "Emma Scott" + email. Stats: 12 Bookings | $2,400 Lifetime | 4.8★. Waivers: Equipment Rental (Signed ✓), Liability (Signed ✓) with animated stroke checkmarks. "VIP Customer - 15% discount" badge with orange glow.

### 5. SurveysReviews.tsx
**Step 1 (0-45):** `activeItem="Surveys"`, `pageTitle="Surveys"`. Table: ID, Date, Name, Status, Auto-send, Responses, Rate, NPS. 3-4 rows. "+ New Survey" button.
**Step 2 (45-70):** Zoom to "Post-Booking Feedback Survey" row (42 responses, 84% rate).
**Step 3 (70-140):** Response Analytics detail. Counter 0→42. Progress bar 0→84% (green). NPS arc animation to 72 (green), "Great". 5-star average: stars fill gold left to right, "4.8 avg".

### 6. StaffManagement.tsx
**Step 1 (0-45):** `activeItem="Staff"`, `pageTitle="Staff"`. Table: ID, Status, Avatar, Name, Email, Role, Hire Date. 4-6 rows. "+ Add Staff" button.
**Step 2 (45-70):** Zoom to Carlos Ramirez row. Scale ~3.5x.
**Step 3 (70-140):** Split view. Left: Role card ("Adventure Guide", permission checkboxes). Right: Weekly schedule grid (Mon-Sun, shift blocks). Clock-in toast slides from top: "Carlos clocked in - 8:02 AM ✓".

### 7. WorkshopMaintenance.tsx
**Step 1 (0-45):** `activeItem="Rentals"` (Workshop submenu), `pageTitle="Workshop"`. Tabs: In Workshop (3) | Completed | Scheduled. Queue: Mountain Bike #325 (In Progress), E-Bike #142 (Queued), Kayak #067 (Queued).
**Step 2 (45-70):** Zoom to Mountain Bike #325. Scale ~3x.
**Step 3 (70-140):** Checklist: Brake check ✓, Chain lube ✓, Tire replacement (animates to ✓). Progress 67%→100% (amber→green). Badge morphs "In Progress"→"Complete". "Return to Fleet" button activates. "Available" badge springs in.

### 8. ReportsAnalytics.tsx
**Step 1 (0-45):** `activeItem="Reports"`, `pageTitle="Reports"`. Tabs: Overview | Rentals | Experiences | Customers. 3 stat cards (Sales $12,480, Bookings 234, Rev/Booking $53.33). Bar chart below: "Sales - This Year" with 8 months.
**Step 2 (45-70):** Zoom to bar chart area. Previous year bars fade in behind. "vs. Last Year" label.
**Step 3 (70-140):** Export panel slides from right. Download icon, "sales_report.csv". Mini CSV preview table (5 rows). Green "Export Report" button.

### 9. DashAI.tsx
**Step 1 (0-45):** `activeItem="AI Assistant"`, `pageTitle="AI Assistant"`. Chat interface with purple gradient accent. AI welcome message. Right sidebar: Quick Actions, Recent Conversations.
**Step 2 (45-70):** User message appears: "What were my top products last month?" Zoom to chat area. Scale ~2x.
**Step 3 (70-140):** AI response streams character-by-character: "Your top 3 products last month were: 1. Mountain Bike — $4,200..." Insight cards pop in from sides: "Revenue Trend ↑12%", "Top Product: Mountain Bike $4,200". Quick action pills: "Create Booking" (orange glow), "View Report", "Email Customer".

---

## Montage Fix

**File:** `video/src/scenes/AudienceMontage.tsx`
**Bug:** Line 171 — `<Loop durationInFrames={30}>` wrapping `<OffthreadVideo>` causes 1-second loop restarts.
**Fix:** Remove `<Loop>` wrapper. Let videos play naturally for the 5.2s montage duration. All video files are long enough.

```tsx
// BEFORE:
<Loop durationInFrames={VIDEO_LOOP_FRAMES}>
  <OffthreadVideo src={staticFile(`footage/${video.file}`)} ... muted />
</Loop>

// AFTER:
<OffthreadVideo src={staticFile(`footage/${video.file}`)} startFrom={0} ... muted />
```

---

## Files to Create
- `video/src/components/AppMockup.tsx`
- `video/src/components/CinematicZoom.tsx`
- `video/src/components/DetailPanel.tsx`

## Files to Rewrite (all 9 showcases)
- All files in `video/src/showcase/` except `DashboardOverview.tsx` (deprecated reference)

## Files to Fix
- `video/src/scenes/AudienceMontage.tsx` — remove Loop wrapper

## Files Unchanged
- `video/src/scenes/FeatureWalkthrough.tsx` — orchestrator stays same
- `video/src/components/MockupSidebar.tsx` — reused as-is (224px sidebar with all nav items)
- `video/src/components/StatusBadge.tsx` — reused as-is

## Key Reference Files
- `video/src/showcase/DashboardOverview.tsx` — OLD full-app pattern (1155 lines), borrow layout patterns
- `video/src/components/MockupSidebar.tsx` — 330 lines, complete sidebar with all icons
- `video/src/theme.ts` — COLORS, FONT, EASING functions

## Implementation Order
1. Fix montage (quick win)
2. Create 3 shared components (AppMockup, CinematicZoom, DetailPanel)
3. Rewrite ManageBookings first (proof of concept)
4. Preview in Remotion Studio, tune timing
5. Rewrite remaining 8 showcases (parallel agents where possible)
6. Update STYLE_GUIDE.md
7. Render final video

## Verification
- `cd video && npx remotion studio` on port 3333
- Preview each showcase — verify 3-step pattern within 140 frames
- Verify sidebar shows correct active item per feature
- Verify zoom is smooth (easeInOut, ~25 frames)
- Verify montage plays all 8 videos without stuttering
- Render: `npx remotion render Video out.mp4`
