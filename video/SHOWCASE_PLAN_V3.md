# Video Showcase Redesign v3 — Cinematic Flow-Based

## Problem
Current showcases are flat — light animations over static app screenshots. Need cinematic FLOW animations showing real product workflows with grand transitions between views. Each showcase should tell a story, not just display a screen.

## Key Changes from v2
1. **Variable durations** — Each showcase gets its own frame budget (no more uniform 190)
2. **Flow-based** — Each showcase shows a multi-step workflow, not a single view
3. **Reordered features** — New order and updated pills/titles per user spec
4. **DashAI is the star** — Huge cinematic animation, not just a chat UI

## Architecture Change: Variable Duration Orchestrator

### `FeatureWalkthrough.tsx` — New structure
```tsx
const FEATURES = [
  { label: "ONLINE BOOKINGS", headline: "...", Component: OnlineBookings, uiDuration: 210 },
  { label: "MANAGE BOOKINGS", headline: "...", Component: ManageBookings, uiDuration: 190 },
  // ... each feature has its own uiDuration
];

const TITLE_DURATION = 50;
const OVERLAP = 15;

// Calculate cumulative offsets
// totalDuration per feature = TITLE_DURATION + uiDuration - OVERLAP
// from = sum of all previous totalDurations
```

### Frame Budget Per Showcase (UI portion only, title adds 35 net frames)

| # | Pill | Title | UI Frames | Total | Rationale |
|---|------|-------|-----------|-------|-----------|
| 1 | ONLINE BOOKINGS | Get bookings 24/7, online or in-store | 210 | 245 | 2 views + transition |
| 2 | MANAGE BOOKINGS | Pickups, returns & cancellations at a glance | 190 | 225 | 2 views |
| 3 | WAIVERS, SURVEYS & REVIEWS | Connect with customers before, during & after | 270 | 305 | 4-step flow |
| 4 | CUSTOMER CRM | Track every customer, offer promotions | 200 | 235 | 3 views |
| 5 | PRODUCTS & EXPERIENCES | Set up every variation, pricing rule & season | 220 | 255 | 3 sub-views |
| 6 | STAFF | Onboard, roster & manage your team | 200 | 235 | 3 views |
| 7 | INVENTORY | Know where every item is, when maintenance is due | 220 | 255 | 4-step flow |
| 8 | REPORTS | Analytics & insights to grow your business | 160 | 195 | Single view |
| 9 | DASH AI | Your AI-powered co-pilot | 300 | 335 | KEY feature |

**Total walkthrough: 2285 frames (~76s)**
**Total video: 620 + 2285 + 330 = 3235 frames (~107.8s / 1:48)**

---

## 9 Showcase Designs

### 1. Online Bookings (210 frames UI)
**Flow**: Customer booking on storefront → cinematic transition → POS booking confirmation

- **0-70**: Online storefront mockup (browser chrome wrapper). Calendar date picker animates, "Mountain Bike" product selected, "Add to Cart" button click → cart counter bounces. Show availability grid filling in.
- **70-100**: Cinematic page transition — storefront scales down + blurs, rotates slightly, new view sweeps in from right with motion blur
- **100-160**: POS terminal view (AppMockup with sidebar, "POS" active). Booking form shows customer "Emma Scott", dates auto-fill, security deposit line appears, total counts up
- **160-210**: "Booking Confirmed!" success overlay rises from bottom. Confetti particles. Green checkmark pulses. Confirmation number types in.

### 2. Manage Bookings (190 frames UI)
**Flow**: Bookings dashboard → today's pickups → mark picked up → flag late returns

- **0-50**: AppMockup (sidebar active: "Bookings"). Dashboard loads — KPI cards count up (Today's Pickups: 8, Returns Due: 5, Active: 47). Calendar strip shows today highlighted.
- **50-90**: Smooth scroll/zoom to "Today's Pickups" table section. Rows stagger in. First row highlights with cursor click animation.
- **90-130**: Status badge on first row morphs from "Reserved" → "Picked Up" (green). Row briefly glows green.
- **130-190**: "Late Returns" section highlights red. Alert badge pulses on 2 overdue items. Status badges show "Late" in red. Warning icon animates.

### 3. Waivers, Surveys & Reviews (270 frames UI)
**Flow**: Waiver builder → customer signature → survey sent → analytics

- **0-60**: AppMockup (sidebar: "Waivers"). Waiver page builder — form fields animate in one by one (Name, Signature, Terms checkbox, Emergency Contact). Drag-and-drop visual of adding a field.
- **60-100**: Cinematic transition — screen transforms to customer-facing view (phone/tablet frame).
- **100-150**: Customer view: waiver form filled, signature area — animated handwriting "Emma Scott" appears stroke by stroke. "Sign & Submit" button clicks. Green confirmed overlay.
- **150-200**: Timeline/step animation: "Booking Complete" → "Survey Sent" → "Review Posted". Each step lights up in sequence.
- **200-270**: Analytics dashboard fades in — NPS arc draws (score: 72), star rating fills to 4.8, response rate counter climbs to 89%. Three review cards slide in staggered.

### 4. Customer CRM (200 frames UI)
**Flow**: Customer list → customer detail → add promotion/coupon

- **0-55**: AppMockup (sidebar: "Customers"). Customer table loads — rows stagger in with name, email, bookings count, lifetime value, VIP badge on top customer.
- **55-100**: Cursor clicks "Emma Scott" row → page transition (slide left/right). Customer profile loads: avatar, stats cards (32 bookings, $4,280 spent, VIP tier), booking history list.
- **100-150**: "Promotions" tab highlighted. Add coupon form slides in — "LOYAL20" discount code types in, "20% off next rental" appears, date range populates.
- **150-200**: "Coupon Created" success toast slides in from top-right. Coupon card appears in customer profile with orange accent. Email preview notification pops.

### 5. Products & Experiences (220 frames UI)
**Flow**: Create experience → set pricing rules → manage seasons

- **0-65**: AppMockup (sidebar: "Experiences"). Experience creation form — "Sunset Kayak Tour" name types in, duration "2 hours" selects, capacity "12" sets. Product image placeholder shimmers.
- **65-120**: Cinematic transition to Pricing tab. Dynamic pricing rule builder: "Peak Season" rule card animates in, "$75/person" price animates up from "$55", percentage badge "+36%" appears in green.
- **120-180**: Season calendar view — color blocks fill in across months (blue=regular, orange=peak, gray=off-season). Legend items fade in. Date range selector drags across "Dec-Feb".
- **180-220**: Final product preview card rises — shows Sunset Kayak Tour with all pricing tiers, season indicator, availability badge. Polish shine animation across card.

### 6. Staff (200 frames UI)
**Flow**: Onboard new staff → add shift → view roster

- **0-55**: AppMockup (sidebar: "Staff"). Staff onboarding form — "Carlos Ramirez" name types in, "Senior Guide" role selects from dropdown, photo placeholder shimmers, permissions toggles flip on.
- **55-110**: Transition to Calendar view. Shift creation — time block drags onto Tuesday 9am-5pm slot. Block snaps into place with spring bounce. Color codes by role.
- **110-200**: Full weekly roster view populates — 5 staff rows, shift blocks fly into grid cells in a wave pattern (left→right, top→bottom). Coverage indicator bar fills to 92%. Total hours counter animates.

### 7. Inventory (220 frames UI)
**Flow**: Scan barcode → check availability → add to workshop → workshop status

- **0-50**: Full-screen barcode scanner simulation — scanning line sweeps, "BEEP" visual flash. Item identified: "Mountain Bike #325 - Trail Pro". Card slides up with item details.
- **50-100**: Transition to availability timeline. Horizontal calendar bar shows booked periods (blue blocks), available gaps (white). Current location pin: "Store A". Availability status: "Available Now" in green.
- **100-155**: Transition to workshop. "Add to Workshop" button clicks → maintenance form appears. Issue: "Brake adjustment needed". Priority: "Medium" selects. Assigned to: "Mike" populates.
- **155-220**: Workshop board view — 3 columns (Queued → In Progress → Complete). Item card animates from Queued → In Progress. Checklist items check off one by one. Progress bar fills. Status morphs to "Complete" with green celebration.

### 8. Reports (160 frames UI)
**Flow**: Analytics dashboard with rich chart animations

- **0-35**: AppMockup (sidebar: "Reports"). Dashboard header + date range selector. KPI cards count up: Revenue $48,250, Bookings 342, Avg Value $141.
- **35-80**: Revenue chart — bars grow one by one with spring easing (12 months). Each bar has a subtle glow as it reaches full height. Peak month (July) gets a highlight callout.
- **80-120**: Overlay comparison — "Last Year" semi-transparent bars appear behind current bars. Growth percentage "+23%" badge springs in. Legend fades in.
- **120-160**: Right-side panel slides in: Top Products list, Customer Acquisition pie chart draws, Export button pulses with download icon.

### 9. DashAI — KEY DIFFERENTIATOR (300 frames UI)
**Flow**: Not a web UI screenshot. Full cinematic showing AI power.

- **0-40**: Dark navy/gradient background. Centered text: "What if your software could think?" fades in large, cinematic. EquipDash AI logo (gradient purple/blue) pulses.
- **40-80**: Chat interface materializes from particles/dots converging. User types: "Show me this week's revenue forecast". Typing animation with blinking cursor.
- **80-130**: AI processing — neural network visualization (dots connected by lines, pulsing along paths). Data streams flowing. Brief but impressive. Then AI response streams in character by character: forecast data with specific numbers.
- **130-180**: The response "comes alive" — a revenue chart literally grows out of the chat bubble, expanding to fill the right side. Forecast line extends with a dotted prediction line. Confidence band shading animates.
- **180-230**: Quick-fire AI capability montage — 4 cards fly in from corners simultaneously:
  - "Smart Scheduling" — calendar icon + auto-filled shifts
  - "Demand Forecasting" — trending up chart
  - "Automated Comms" — email icon + "Reminder sent to 23 customers"
  - "Revenue Optimization" — dollar icon + "+18% suggested pricing"
  Each card has a subtle glow/pulse animation.
- **230-300**: Cards consolidate into a dashboard view. Final headline fades in large: "Your operations, on autopilot." Orange accent underline draws beneath it. Subtle particle background continues.

---

## Existing Components to Reuse
- `video/src/components/MockupSidebar.tsx` — Navy sidebar with nav items
- `video/src/components/AppMockup.tsx` — App shell (sidebar + header + content)
- `video/src/components/StatusBadge.tsx` — 14 status types with colored badges
- `video/src/components/AnimatedCursor.tsx` — Cursor with click ripple effect
- `video/src/theme.ts` — Colors, fonts, easing functions

## Files to Modify

### Orchestrator
- `video/src/scenes/FeatureWalkthrough.tsx` — Variable duration system, new feature order + titles

### Timeline
- `video/src/Video.tsx` — Update walkthrough duration (1710 → 2285), recalculate CTA start
- `video/src/theme.ts` — Update TOTAL_FRAMES (2660 → 3235)

### 9 Showcases (Full Rewrites)
1. `video/src/showcase/OnlineBookings.tsx`
2. `video/src/showcase/ManageBookings.tsx`
3. `video/src/showcase/SurveysReviews.tsx`
4. `video/src/showcase/CustomersWaivers.tsx`
5. `video/src/showcase/ProductsSetup.tsx`
6. `video/src/showcase/StaffManagement.tsx`
7. `video/src/showcase/WorkshopMaintenance.tsx`
8. `video/src/showcase/ReportsAnalytics.tsx`
9. `video/src/showcase/DashAI.tsx`

## Implementation Status

All 9 showcases, orchestrator, timeline, and theme have been implemented. TypeScript compiles clean.

---

## Showcase Style Guide — Coding Conventions

### Architecture Pattern
Every showcase is a **single React functional component** exported from its file. Complex showcases extract sub-components (e.g. `KPICards`, `PickupsTable`, `LateReturnsSection`) but keep them in the same file. No external state — all animation is derived from `useCurrentFrame()` and `interpolate()`.

### Imports (standard for all showcases)
```tsx
import React from "react";
import { AbsoluteFill, interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";
import { AppMockup } from "../components/AppMockup";    // for app UI showcases
import { StatusBadge } from "../components/StatusBadge"; // when status badges needed
```

### CLAMP Constant
Every file that uses `interpolate()` should define this at module level:
```tsx
const CLAMP = { extrapolateLeft: "clamp" as const, extrapolateRight: "clamp" as const };
```
Usage: `interpolate(frame, [start, end], [0, 1], CLAMP)` or `{ ...CLAMP, easing: EASING.easeOut }`

### Phase-Based Animation Pattern
Each showcase is divided into **phases** (2-6 per showcase). Phases are documented in a header comment block:
```tsx
/* ------------------------------------------------------------------ */
/*  ComponentName — "Short description"                                */
/*                                                                     */
/*  Duration: XXX frames                                               */
/*  Phase 1 (0-N):     Description                                     */
/*  Phase 2 (N-M):     Description                                     */
/*  ...                                                                */
/* ------------------------------------------------------------------ */
```

Phase transitions use opacity/transform interpolations. Elements from later phases use `if (frame < X) return null;` guards for performance.

### Animation Timing Conventions
- **Entry animations** use `EASING.easeOut` (fast start, slow end)
- **Exit animations** use `EASING.easeIn` (slow start, fast end)
- **Transitions** use `EASING.easeInOut`
- **Pop/bounce effects** use `EASING.spring`
- **Stagger delays**: 3-5 frames between items in a list
- **Fade durations**: 8-12 frames for opacity transitions
- **Slide durations**: 8-12 frames for position transitions
- **Count-up durations**: 15-20 frames
- **Status morph durations**: 12-16 frames

### AppMockup Usage
Most showcases (7 of 9) use `AppMockup` as the outer shell:
```tsx
<AbsoluteFill style={{ backgroundColor: COLORS.gray50 }}>
  <AppMockup activeItem="Bookings" pageTitle="Bookings">
    {/* Content components here */}
  </AppMockup>
</AbsoluteFill>
```
AppMockup handles sidebar slide-in (0-12 frames) and header fade-in (3-12 frames) automatically.

**Exceptions**:
- `OnlineBookings` — Phase 1 uses standalone browser chrome (no AppMockup), Phase 3+ uses AppMockup with `activeItem="POS"`
- `DashAI` — Fully standalone cinematic, no AppMockup at all

### Sidebar Active Items
Map showcases to sidebar items:
| Showcase | `activeItem` |
|----------|-------------|
| OnlineBookings | `"POS"` |
| ManageBookings | `"Bookings"` |
| SurveysReviews | `"Waivers"` |
| CustomersWaivers | `"Customers"` |
| ProductsSetup | `"Experiences"` |
| StaffManagement | `"Staff"` |
| WorkshopMaintenance | `"Rentals"` |
| ReportsAnalytics | `"Reports"` |
| DashAI | N/A (no AppMockup) |

### Animated Counter Component
Reusable count-up pattern used in KPI cards:
```tsx
const AnimatedCounter: React.FC<{
  value: number;
  prefix?: string;
  startFrame: number;
  duration?: number;
}> = ({ value, prefix = "", startFrame, duration = 18 }) => {
  const frame = useCurrentFrame();
  const progress = interpolate(frame, [startFrame, startFrame + duration], [0, 1], {
    ...CLAMP, easing: EASING.easeOut,
  });
  return <>{prefix}{Math.round(value * progress).toLocaleString()}</>;
};
```

### Typewriter Text Pattern
Used for typing animations (customer names, search queries):
```tsx
const typedText = (text: string, frame: number, startFrame: number, speed = 0.5): string => {
  const elapsed = Math.max(0, frame - startFrame);
  return text.substring(0, Math.min(text.length, Math.floor(elapsed * speed)));
};
```
Pair with a blinking cursor: `<span style={{ borderRight: "2px solid ...", marginLeft: 1 }} />`

### Color Conventions
- **Card backgrounds**: `COLORS.white` with `border: 1px solid ${COLORS.gray200}`
- **Icon backgrounds**: Use 12% opacity of accent color: `` `${COLORS.confirmed}12` ``
- **Highlight/selection**: `` `rgba(37, 99, 235, 0.06)` `` (blue tint) or `` `rgba(38, 175, 81, 0.08)` `` (green tint)
- **Red alerts**: `#FEF3F2` background, `#B42318` text, `#FECDCA` border
- **Success**: `COLORS.greenLight` background, `COLORS.greenBorder` border, `COLORS.green` icon

### Avatar Circles
Consistent pattern for user avatars:
```tsx
<div style={{
  width: 28, height: 28, borderRadius: 14,
  backgroundColor: `${accentColor}15`,
  display: "flex", alignItems: "center", justifyContent: "center",
  fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 10,
  color: accentColor,
}}>
  {name.split(" ").map(n => n[0]).join("")}
</div>
```

### Table Patterns
Tables use CSS Grid (not `<table>`):
```tsx
<div style={{ display: "grid", gridTemplateColumns: "80px 1fr 1fr 100px 100px", ... }}>
```
- Column headers: `fontSize: 11`, `textTransform: "uppercase"`, `letterSpacing: 0.5`, `color: COLORS.gray400`
- Rows: `fontSize: 13`, stagger entry with 3-4 frame delay per row
- Separator: `borderBottom: 1px solid ${COLORS.gray100}`

### Cinematic Transitions Between Views
When transitioning between two different views within a showcase:
1. **Exit animation** on current view: scale down (0.85), rotate slightly (-2deg), opacity to 0
2. **Enter animation** on new view: slide from right (translateX 200→0), opacity 0→1
3. **Overlap**: 5-10 frames where both views are partially visible
4. Optional dim overlay: `rgba(0, 20, 50, 0.4)` between views

### Success Overlays
Pattern for "Confirmed!" / "Created!" overlays:
- Card rises from bottom (`translateY(300→0)`)
- Green gradient top accent bar (`height: 5px`)
- Green checkmark circle with `EASING.spring` scale-in
- Confetti particles (20 small colored dots/squares with rotation + drift)
- Details in `COLORS.gray50` rounded box with 2-column grid

### Cursor Animations
Animated cursor for click interactions:
```tsx
<svg width={24} height={24} viewBox="0 0 24 24" fill="none">
  <path d="M5 3l14 8-6 2-4 6L5 3z" fill={COLORS.dark} stroke={COLORS.white} strokeWidth="1.5" strokeLinejoin="round" />
</svg>
```
- Cursor moves with `easeOut` to target position
- Click effect: brief scale down (0.85) then back to 1 with `spring`
- Fades out after action completes

### DashAI Special Patterns
DashAI is the only showcase that doesn't use AppMockup. It uses:
- Dark gradient backgrounds (`navy → darker navy`)
- Particle systems (dots with sin/cos motion)
- Neural network visualization (nodes + pulsing connections)
- Large cinematic text (36px+, centered, BR Candor bold)
- Purple/blue AI gradient accents
- Chat bubble interface that transforms into data visualizations

### File Naming
All showcase files live in `video/src/showcase/`:
```
OnlineBookings.tsx    — 210 frames
ManageBookings.tsx    — 190 frames
SurveysReviews.tsx    — 270 frames
CustomersWaivers.tsx  — 200 frames
ProductsSetup.tsx     — 220 frames
StaffManagement.tsx   — 200 frames
WorkshopMaintenance.tsx — 220 frames
ReportsAnalytics.tsx  — 160 frames
DashAI.tsx            — 300 frames
```

### Verification
```bash
cd video && npx tsc --noEmit --project tsconfig.json  # must pass clean
cd video && npx remotion studio                         # preview all scenes
```

## Product Research Notes (from website feature pages)

### Key Real-App UI Patterns
- **Sidebar nav sections**: GENERAL (Dashboard, AI), OPERATIONS (POS, Calendar, Bookings), SERVICES (Rentals, Experiences, Store), MANAGEMENT (Customers, Staff, Waivers, Promotions, Surveys, Reports, Settings)
- **Status badges**: Confirmed (blue), Picked Up (green), Reserved (orange), Cancelled (red), Late (red), Overdue (red)
- **Payment badges**: Paid (green), Partially Paid (orange), Unpaid (red)
- **Common UI elements**: Search bars, filter dropdowns, date range pickers, export buttons (CSV/PDF), tab navigation

### Feature-Specific Real UI Details

**Online Bookings**: Browser-embedded booking widget → product grid with thumbnails, availability indicators, date picker, cart summary, checkout flow. Also POS terminal for walk-ins. OTA channels: Viator, Expedia, GetYourGuide.

**Manage Bookings**: Tab navigation (All/Rentals/Experiences/Store), booking table with Booking #, Date, Customer, Status, Price, Payment Status. Summary KPI cards showing Confirmed/Picked Up/Completed/Cancelled counts. Floating detail cards for editing.

**Waivers**: Waiver types: Liability, Photo Release, Medical Declaration, Health Questionnaire. Assignment to All Bookings or specific experiences. Auto-send on booking confirmation. Signature canvas. Check-in view with green/red signed status.

**Surveys & Reviews**: Post-trip feedback auto-sent 24hr after completion. NPS breakdown (Promoters/Passives/Detractors). Star rating overview (4.8/5). Survey types: Post-Trip, Rental Satisfaction, Guide Rating, Equipment Quality. Detractor alerts with follow-up. Google review prompt for high scores.

**Customer CRM**: Customer list with name/email/phone/booking count. Detail: avatar, stats (Total Bookings, Total Spent, Avg Value with trending), tabs (Bookings/Notes/Waivers/Surveys). Staff notes with author attribution. Segment builder (Tag, Last booking, Total spent). Mailchimp export.

**Products & Experiences**: Products: table with SKU/Category/Status, variants with individual pricing, stock per variant, multi-image upload. Experiences: session schedule (Daily 7am, etc.), capacity per session (16/20), pricing tiers (Adult/Child/Senior), add-ons (Photo Package +$25), guide requirements. OTA distribution sync.

**Staff**: Team list with Role/Location/Status. Roles: Admin, Manager, Guide, Front Desk, Warehouse. Permissions matrix per section (Full Access/View Only/No Access). Activity log timeline. Email invite workflow.

**Workshop**: Tabs: Due Soon, In Workshop, All Items, History. Status: Due Soon (orange), Overdue (red), In Workshop (blue), Good (green), Damaged (red). Service intervals (50 rental cycles, 90 days). Workshop queue: In Progress, Waiting Parts, Ready. Service history per item with technician, cost, date.

**Reports**: Tabs: Revenue, Bookings, Utilisation, Customers. KPI cards: Revenue, Bookings, Utilisation %, Avg Order with % change. Weekly bar chart. Revenue breakdown pie: Website 57%, Walk-in 30%, OTA 13%. Scheduled reports toggle.

**DashAI**: Chat interface with multi-turn conversation. 80+ operations. Example queries: "Show revenue", "Look up customer", "Find low-stock items", "Check waiver status". Smart Insights: revenue trends, top products, week-over-week. Operational Automation: booking confirmations, waiver sending, reminder sending, refund processing. Quick actions: Create Booking, Today's Bookings, Send Reminders. Today's Automations timeline.
