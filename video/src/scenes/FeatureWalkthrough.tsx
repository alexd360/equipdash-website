import React from "react";
import { AbsoluteFill, Sequence, interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";
import { OnlineBookings } from "../showcase/OnlineBookings";
import { ManageBookings } from "../showcase/ManageBookings";
import { SurveysReviews } from "../showcase/SurveysReviews";
import { CustomersWaivers } from "../showcase/CustomersWaivers";
import { ProductsSetup } from "../showcase/ProductsSetup";
import { StaffManagement } from "../showcase/StaffManagement";
import { WorkshopMaintenance } from "../showcase/WorkshopMaintenance";
import { ReportsAnalytics } from "../showcase/ReportsAnalytics";
import { DashAI } from "../showcase/DashAI";

// V3: Variable durations per feature — each showcase gets the time it needs
const FEATURES: {
  label: string;
  headline: string;
  Component: React.FC;
  uiDuration: number;
}[] = [
  { label: "ONLINE BOOKINGS", headline: "Get bookings 24/7, online or in-store", Component: OnlineBookings, uiDuration: 240 },
  { label: "MANAGE BOOKINGS", headline: "Pickups, returns & cancellations at a glance", Component: ManageBookings, uiDuration: 190 },
  { label: "WAIVERS, SURVEYS & REVIEWS", headline: "Connect with customers before, during & after", Component: SurveysReviews, uiDuration: 310 },
  { label: "CUSTOMER CRM", headline: "Track every customer, offer promotions", Component: CustomersWaivers, uiDuration: 185 },
  { label: "PRODUCTS & EXPERIENCES", headline: "Set up every variation, pricing rule & season", Component: ProductsSetup, uiDuration: 250 },
  { label: "STAFF", headline: "Onboard, roster & manage your team", Component: StaffManagement, uiDuration: 240 },
  { label: "INVENTORY", headline: "Know where every item is, when maintenance is due", Component: WorkshopMaintenance, uiDuration: 290 },
  { label: "REPORTS", headline: "Analytics & insights to grow your business", Component: ReportsAnalytics, uiDuration: 160 },
  { label: "DASH AI", headline: "Your AI-powered co-pilot", Component: DashAI, uiDuration: 290 },
];

const TITLE_DURATION = 50;
const OVERLAP = 15; // title→UI transition overlap

// Compute per-feature total duration and cumulative start offsets
const featureLayout = FEATURES.map((f) => {
  const totalDuration = TITLE_DURATION + f.uiDuration - OVERLAP;
  return { ...f, totalDuration };
});

// Calculate cumulative offsets
const featureOffsets: number[] = [];
let cumulative = 0;
for (const f of featureLayout) {
  featureOffsets.push(cumulative);
  cumulative += f.totalDuration;
}

// Total walkthrough duration (exported for Video.tsx)
export const WALKTHROUGH_DURATION = cumulative; // 2625

/* ------------------------------------------------------------------ */
/*  FeatureSegment — handles both title and UI with seamless morph     */
/* ------------------------------------------------------------------ */
const FeatureSegment: React.FC<{
  label: string;
  headline: string;
  Component: React.FC;
  totalDuration: number;
}> = ({ label, headline, Component, totalDuration }) => {
  const frame = useCurrentFrame();

  // --- Title phase (frames 0 to TITLE_DURATION) ---
  const titleVisible = frame < TITLE_DURATION;

  // Orange pill enters
  const pillOpacity = interpolate(frame, [3, 10], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });
  const pillY = interpolate(frame, [3, 10], [25, 0], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });

  // Headline words appear one by one
  const words = headline.split(" ");
  const getWordOpacity = (i: number) => {
    const start = 8 + i * 2;
    return interpolate(frame, [start, start + 5], [0, 1], {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
    });
  };
  const getWordY = (i: number) => {
    const start = 8 + i * 2;
    return interpolate(frame, [start, start + 5], [20, 0], {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
      easing: EASING.easeOut,
    });
  };

  // Title morph out — scale down + fade as UI emerges
  const morphStart = TITLE_DURATION - OVERLAP;
  const titleScale = interpolate(frame, [morphStart, TITLE_DURATION], [1, 0.85], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeIn,
  });
  const titleOpacity = interpolate(frame, [morphStart, TITLE_DURATION], [1, 0], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });
  const titleTranslateY = interpolate(frame, [morphStart, TITLE_DURATION], [0, -60], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeIn,
  });

  // --- UI phase starts during overlap, fully visible after TITLE_DURATION ---
  const uiEnterStart = morphStart;
  const uiOpacity = interpolate(frame, [uiEnterStart, TITLE_DURATION], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });
  const uiScale = interpolate(frame, [uiEnterStart, TITLE_DURATION + 5], [1.03, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });

  // Exit fade for the whole segment (uses totalDuration instead of fixed constant)
  const exitStart = totalDuration - 8;
  const exitOpacity = interpolate(frame, [exitStart, totalDuration], [1, 0], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });

  return (
    <AbsoluteFill style={{ backgroundColor: COLORS.white }}>
      {/* UI layer — behind title during overlap, then full */}
      {frame >= uiEnterStart && (
        <AbsoluteFill
          style={{
            opacity: uiOpacity * exitOpacity,
            transform: `scale(${uiScale})`,
          }}
        >
          <Component />
        </AbsoluteFill>
      )}

      {/* Title layer — on top during its phase */}
      {titleVisible && (
        <AbsoluteFill
          style={{
            backgroundColor: COLORS.white,
            display: "flex",
            alignItems: "center",
            justifyContent: "center",
            opacity: titleOpacity,
            transform: `scale(${titleScale}) translateY(${titleTranslateY}px)`,
            zIndex: 10,
          }}
        >
          <div
            style={{
              display: "flex",
              flexDirection: "column",
              alignItems: "center",
              gap: 24,
            }}
          >
            {/* Orange pill */}
            <div
              style={{
                opacity: pillOpacity,
                transform: `translateY(${pillY}px)`,
                padding: "14px 44px",
                borderRadius: 99,
                backgroundColor: COLORS.primary,
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.bold,
                fontSize: 28,
                color: COLORS.white,
                letterSpacing: 3,
                textTransform: "uppercase",
              }}
            >
              {label}
            </div>

            {/* Headline */}
            <div
              style={{
                display: "flex",
                flexWrap: "wrap",
                justifyContent: "center",
                gap: "0 18px",
                maxWidth: 1200,
              }}
            >
              {words.map((word, i) => (
                <span
                  key={i}
                  style={{
                    fontFamily: FONT.regular,
                    fontWeight: FONT.weights.bold,
                    fontSize: 74,
                    color: COLORS.navy,
                    lineHeight: 1.15,
                    opacity: getWordOpacity(i),
                    transform: `translateY(${getWordY(i)}px)`,
                    display: "inline-block",
                  }}
                >
                  {word}
                </span>
              ))}
            </div>
          </div>
        </AbsoluteFill>
      )}
    </AbsoluteFill>
  );
};

/* ------------------------------------------------------------------ */
/*  Main walkthrough — variable durations, total = 2625 frames        */
/* ------------------------------------------------------------------ */
export const FeatureWalkthrough: React.FC = () => {
  return (
    <AbsoluteFill>
      {featureLayout.map((feature, i) => (
        <Sequence
          key={feature.label}
          from={featureOffsets[i]}
          durationInFrames={feature.totalDuration}
          name={feature.label}
        >
          <FeatureSegment
            label={feature.label}
            headline={feature.headline}
            Component={feature.Component}
            totalDuration={feature.totalDuration}
          />
        </Sequence>
      ))}
    </AbsoluteFill>
  );
};
