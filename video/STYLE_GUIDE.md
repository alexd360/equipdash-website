# EquipDash Video Style Guide

Technical reference for the Remotion-based product overview video.

## Video Specs

| Property | Value |
|----------|-------|
| Resolution | 1920 x 1080 |
| Frame rate | 30 fps |
| Total frames | 2700 (90 seconds) |
| Format | MP4 (H.264), optional WebM |
| Font | BR Candor (woff2, loaded via `fonts.ts`) |

## Scene Structure

| # | Scene | Frames | Duration | Component |
|---|-------|--------|----------|-----------|
| 1 | Audience Montage | 0–210 | 7s | `AudienceMontage` |
| 2 | Pain Points | 210–480 | 9s | `PainPoints` |
| 3 | EquipDash Reveal | 480–660 | 6s | `EquipDashReveal` |
| 4 | Feature Walkthrough | 660–2370 | 57s | `FeatureWalkthrough` |
| 5 | CTA | 2370–2700 | 11s | `CtaScene` |

## Feature Walkthrough (Scene 4)

9 features, each **190 frames** (~6.3s), totaling 1710 frames.

### Features in order

1. **PRODUCTS & SERVICES** — ProductsSetup
2. **ONLINE BOOKINGS** — OnlineBookings
3. **MANAGE BOOKINGS** — ManageBookings
4. **CUSTOMERS** — CustomersWaivers
5. **SURVEYS & REVIEWS** — SurveysReviews
6. **STAFF** — StaffManagement
7. **WORKSHOP** — WorkshopMaintenance
8. **REPORTS** — ReportsAnalytics
9. **DASH AI** — DashAI

### Per-Feature Frame Budget

| Phase | Frames | Description |
|-------|--------|-------------|
| Title phase | 0–50 | Orange pill badge + headline words (one-by-one) |
| Overlap/morph | 35–50 | Title scales down/fades; UI begins entering underneath |
| UI phase | 35–190 | Showcase component renders with FloatingCard animations |
| Exit | 182–190 | Entire segment fades to 0 (handled by `FeatureSegment`) |

**Usable showcase frames:** ~140 (the title occupies 0–50, exit 182–190).

### Title Phase Details

- **Pill enters:** frames 3–10, translateY 25→0, opacity 0→1
- **Headline words:** staggered from frame 8, each word 5 frames apart
- **Pill style:** `fontSize: 28`, `padding: "14px 44px"`, `borderRadius: 99`, `backgroundColor: primary`, `letterSpacing: 3`, uppercase, bold
- **Headline style:** `fontSize: 74`, `fontWeight: bold`, `color: navy`, `lineHeight: 1.15`
- **Morph out** (frames 35–50): scale 1→0.85, opacity 1→0, translateY 0→-60px

## Color Tokens

```
primary:        #F7581F   (orange)
navy:           #003264
dark:           #1B2B4B
white:          #FFFFFF
offWhite:       #F9FAFB
gray50–gray900: Standard gray scale
green:          #26AF51
greenLight:     #ECFDF3
greenDark:      #027A48
red:            #F04438
blue:           #00A3FA
reserved:       #F79009   (amber/orange)
confirmed:      #2563EB   (blue)
aiGradientStart:#2563EB → aiGradientMid: #7C3AED → aiGradientEnd: #9333EA
```

All colors are exported from `theme.ts` as `COLORS`.

## Typography

Font: **BR Candor** — loaded from `/video/public/fonts/` (woff2).

| Weight | Token | Typical Use |
|--------|-------|-------------|
| 300 | `light` | Secondary text |
| 400 | `regular` | Body text |
| 500 | `medium` | Labels, badges |
| 600 | `semibold` | Card headers, emphasis |
| 700 | `bold` | Headlines, pill badges |

Common font sizes in showcases: 9–13px (card details), 14–16px (card headers), 18–24px (section titles), 28px (pill badge), 74px (headline).

## Easing Functions

All exported from `theme.ts` as `EASING`:

- **`easeOut`** — Cubic deceleration. General-purpose entry.
- **`easeIn`** — Cubic acceleration. Exit animations.
- **`easeInOut`** — Cubic S-curve. Morphs and transitions.
- **`spring`** — Damped oscillation (`2*PI/3` period). Primary entry easing for FloatingCard.

## FloatingCard Component

`components/FloatingCard.tsx` — The core building block for all showcases.

### Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `children` | ReactNode | — | Card content |
| `delay` | number | 0 | Frame to start entering |
| `fromDirection` | `"left" \| "right" \| "bottom" \| "center" \| "top"` | `"bottom"` | Entry direction |
| `width` | number \| string | — | Card width |
| `rotation` | number | 0 | Static rotation in degrees |
| `shadow` | string | `"0 20px 60px rgba(0,0,0,0.12)"` | Box shadow |
| `style` | CSSProperties | — | Position overrides (top, left, right, bottom) |
| `enterDuration` | number | 20 | Animation duration in frames |
| `float` | boolean | true | Gentle bob after entry |
| `zIndex` | number | 1 | Layering order |

### Behavior

1. **Enter:** Slides from offset (120px horizontal, 100px vertical, 40px center), scales 0.92→1.0, fades 0→1 over `min(enterDuration, 12)` frames. Uses `EASING.spring`.
2. **Settle:** Gentle sinusoidal bob (2px amplitude, 0.08 frequency) when `float=true`.
3. **Default styling:** `borderRadius: 16`, `backgroundColor: "#FFFFFF"`, `overflow: "hidden"`.

### Usage Pattern

```tsx
<AbsoluteFill style={{ backgroundColor: COLORS.white }}>
  <FloatingCard delay={0} fromDirection="left" width={500} style={{ top: 120, left: 100 }}>
    {/* Card content */}
  </FloatingCard>
  <FloatingCard delay={25} fromDirection="right" width={400} style={{ top: 150, right: 120 }}>
    {/* Second card */}
  </FloatingCard>
</AbsoluteFill>
```

## StatusBadge Component

`components/StatusBadge.tsx` — Colored pill badges for status indicators.

### Available Statuses

| Status | Background | Text Color | Label |
|--------|-----------|------------|-------|
| `picked-up` | #ECFDF3 | greenDark | Picked Up |
| `reserved` | #FFFAEB | #B54708 | Reserved |
| `confirmed` | #EFF8FF | #175CD3 | Confirmed |
| `active` | #ECFDF3 | greenDark | Active |
| `completed` | #ECFDF3 | greenDark | Completed |
| `cancelled` | #FEF3F2 | #B42318 | Cancelled |
| `published` | #ECFDF3 | greenDark | Published |
| `late` | #FEF3F2 | #B42318 | Late |
| `draft` | #F2F4F7 | #344054 | Draft |

Default `fontSize: 11`, `padding: "3px 10px"`, `borderRadius: 99`.

## Animation Conventions

### Card Entry Stagger
Space FloatingCard `delay` values 20–30 frames apart for sequential reveals.

### Table Row Stagger
Rows fade in with `delay + rowIndex * 3–5` frames, `translateY(12–18px → 0)`, `easeOut`.

### Animated Counters
Use `interpolate(frame, [start, end], [0, target])` with `Math.round()` for whole numbers or `.toFixed(2)` for decimals.

### Progress Bars
Animate width as percentage via `interpolate()`.

### SVG Stroke Animations
Use `strokeDasharray` + `strokeDashoffset` for draw-on effects (checkmarks, arcs, circles).

### State Transitions
Change card appearance at specific frame thresholds (e.g., badge changes from "In Progress" to "Complete" at frame 70).

### Spring Scaling
Pop-in elements: `EASING.spring`, scale 0.6–0.92 → 1.0.

### Settle Pulse
Subtle scale 1.0 → 1.005 → 1.0 in final frames to signal completion.

### Exit
Handled by `FeatureSegment` in `FeatureWalkthrough.tsx` (frames 182–190, fade to 0). Showcases do NOT handle their own exit.

## Showcase Architecture Rules

1. **White background** — `COLORS.white`, never gray/navy
2. **No sidebar, no cursor** — Cards animate themselves
3. **2–5 FloatingCards** per showcase, entering from mixed directions
4. **All styling inline** — React CSSProperties, no CSS files
5. **Data as constants** — Arrays/objects defined at top of file
6. **Rich inline SVGs** — Icons drawn directly in JSX, not imported images
7. **No external image assets** — Everything built with CSS gradients, SVG, styled divs
8. **Tell a workflow story** — 3–4 step narrative (e.g., "add product → set pricing → go live")

## File Structure

```
video/
  src/
    Video.tsx                    # Root composition (5 scenes)
    theme.ts                     # Colors, fonts, easing, dimensions
    fonts.ts                     # BR Candor font loader
    root.tsx                     # Remotion registerRoot
    scenes/
      AudienceMontage.tsx        # Scene 1
      PainPoints.tsx             # Scene 2
      EquipDashReveal.tsx        # Scene 3
      FeatureWalkthrough.tsx     # Scene 4 (orchestrator)
      CtaScene.tsx               # Scene 5
    showcase/                    # Feature showcase components
      ProductsSetup.tsx
      OnlineBookings.tsx
      ManageBookings.tsx
      CustomersWaivers.tsx
      SurveysReviews.tsx
      StaffManagement.tsx
      WorkshopMaintenance.tsx
      ReportsAnalytics.tsx
      DashAI.tsx
      DashboardOverview.tsx      # OLD style (deprecated, not in walkthrough)
    components/
      FloatingCard.tsx           # Shared floating card wrapper
      StatusBadge.tsx            # Shared status pill badge
      MockupSidebar.tsx          # OLD style (deprecated)
      AnimatedCursor.tsx         # OLD style (deprecated)
```

## Commands

```bash
# Development preview
cd video && npx remotion studio

# Render MP4
npx remotion render Video equipdash-overview.mp4

# Render WebM
npx remotion render Video equipdash-overview.webm
```
