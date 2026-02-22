import React from "react";
import { AbsoluteFill, interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";
import { AppMockup } from "../components/AppMockup";

/* ------------------------------------------------------------------ */
/*  Products & Experiences — "Create → Price → Season" cinematic       */
/*                                                                     */
/*  Duration: 250 frames                                               */
/*  Phase 1 (0-95):   Experience creation form with typing             */
/*  Phase 2 (95-150): Pricing rules builder with dynamic pricing       */
/*  Phase 3 (150-210): Season calendar with color blocks               */
/*  Phase 4 (210-250): Product preview card with polish shine          */
/* ------------------------------------------------------------------ */

const CLAMP = { extrapolateLeft: "clamp" as const, extrapolateRight: "clamp" as const };

/* ---- Helper: typewriter ---- */
const typedText = (text: string, frame: number, startFrame: number, speed = 0.5): string => {
  const elapsed = Math.max(0, frame - startFrame);
  return text.substring(0, Math.min(text.length, Math.floor(elapsed * speed)));
};

/* ---- Month data ---- */
const MONTHS = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
const SEASON_MAP: Record<string, string> = {
  Jan: "off", Feb: "off", Mar: "regular", Apr: "regular", May: "regular",
  Jun: "peak", Jul: "peak", Aug: "peak", Sep: "regular", Oct: "regular",
  Nov: "regular", Dec: "off",
};
const SEASON_COLORS: Record<string, string> = {
  peak: COLORS.primary,
  regular: COLORS.blue,
  off: COLORS.gray300,
};

/* ------------------------------------------------------------------ */
/*  Phase 1: Experience Creation Form                                  */
/* ------------------------------------------------------------------ */
const ExperienceForm: React.FC = () => {
  const frame = useCurrentFrame();

  /* Card entry */
  const formOpacity = interpolate(frame, [5, 15], [0, 1], CLAMP);
  const formY = interpolate(frame, [5, 15], [20, 0], { ...CLAMP, easing: EASING.easeOut });

  /* Image placeholder shimmer */
  const shimmerX = interpolate(frame, [10, 55], [-200, 400], { ...CLAMP });

  /* Field stagger */
  const fieldEntry = (i: number) => {
    const start = 10 + i * 5;
    const opacity = interpolate(frame, [start, start + 8], [0, 1], CLAMP);
    const y = interpolate(frame, [start, start + 8], [12, 0], { ...CLAMP, easing: EASING.easeOut });
    return { opacity, y };
  };

  /* Typing */
  const nameText = typedText("Sunset Kayak Tour", frame, 18, 0.6);

  /* Duration select */
  const durationSelected = frame >= 35;
  /* Capacity select */
  const capacitySelected = frame >= 42;

  /* Tags */
  const tagEntry = (i: number) => {
    const start = 48 + i * 4;
    return interpolate(frame, [start, start + 6], [0, 1], { ...CLAMP, easing: EASING.spring });
  };

  /* Exit */
  const exitOpacity = interpolate(frame, [88, 95], [1, 0], { ...CLAMP, easing: EASING.easeIn });
  const exitY = interpolate(frame, [88, 95], [0, -30], { ...CLAMP, easing: EASING.easeIn });

  const INPUT_STYLE: React.CSSProperties = {
    width: "100%",
    padding: "10px 14px",
    borderRadius: 8,
    border: `1px solid ${COLORS.gray200}`,
    backgroundColor: COLORS.white,
    fontFamily: FONT.regular,
    fontSize: 14,
    color: COLORS.gray900,
    marginTop: 6,
  };

  const LABEL_STYLE: React.CSSProperties = {
    fontFamily: FONT.regular,
    fontWeight: FONT.weights.medium,
    fontSize: 13,
    color: COLORS.gray700,
  };

  return (
    <div style={{ opacity: exitOpacity, transform: `translateY(${formY + exitY}px)` }}>
      <div
        style={{
          display: "flex",
          gap: 24,
          opacity: formOpacity,
        }}
      >
        {/* Image placeholder */}
        <div
          style={{
            width: 280,
            height: 200,
            borderRadius: 12,
            backgroundColor: COLORS.gray100,
            overflow: "hidden",
            position: "relative",
            flexShrink: 0,
            border: `2px dashed ${COLORS.gray300}`,
            display: "flex",
            alignItems: "center",
            justifyContent: "center",
          }}
        >
          {/* Shimmer */}
          <div
            style={{
              position: "absolute",
              top: 0,
              left: shimmerX,
              width: 100,
              height: "100%",
              background: `linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent)`,
            }}
          />
          <div style={{ textAlign: "center" }}>
            <svg width={32} height={32} viewBox="0 0 32 32" fill="none" style={{ margin: "0 auto 8px" }}>
              <rect x="4" y="4" width="24" height="24" rx="4" stroke={COLORS.gray300} strokeWidth="1.5" />
              <circle cx="12" cy="12" r="3" stroke={COLORS.gray300} strokeWidth="1.2" />
              <path d="M4 22l6-6 4 4 4-4 10 10" stroke={COLORS.gray300} strokeWidth="1.2" />
            </svg>
            <div style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray400 }}>
              Upload Photo
            </div>
          </div>
        </div>

        {/* Form fields */}
        <div style={{ flex: 1 }}>
          <div
            style={{
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.bold,
              fontSize: 20,
              color: COLORS.navy,
              marginBottom: 20,
            }}
          >
            Create Experience
          </div>

          {/* Name */}
          <div style={{ marginBottom: 16, opacity: fieldEntry(0).opacity, transform: `translateY(${fieldEntry(0).y}px)` }}>
            <div style={LABEL_STYLE}>Experience Name</div>
            <div style={INPUT_STYLE}>
              {nameText}
              {frame >= 18 && frame < 35 && (
                <span style={{ borderRight: `2px solid ${COLORS.primary}`, marginLeft: 1 }} />
              )}
            </div>
          </div>

          {/* Duration + Capacity row */}
          <div style={{ display: "flex", gap: 12, marginBottom: 16 }}>
            <div style={{ flex: 1, opacity: fieldEntry(1).opacity, transform: `translateY(${fieldEntry(1).y}px)` }}>
              <div style={LABEL_STYLE}>Duration</div>
              <div style={{ ...INPUT_STYLE, display: "flex", justifyContent: "space-between", alignItems: "center" }}>
                <span style={{ color: durationSelected ? COLORS.gray900 : COLORS.gray400 }}>
                  {durationSelected ? "2 hours" : "Select..."}
                </span>
                <svg width={10} height={10} viewBox="0 0 10 10" fill="none">
                  <path d="M2.5 4l2.5 2.5 2.5-2.5" stroke={COLORS.gray400} strokeWidth="1.2" strokeLinecap="round" />
                </svg>
              </div>
            </div>
            <div style={{ flex: 1, opacity: fieldEntry(2).opacity, transform: `translateY(${fieldEntry(2).y}px)` }}>
              <div style={LABEL_STYLE}>Capacity</div>
              <div style={{ ...INPUT_STYLE, display: "flex", justifyContent: "space-between", alignItems: "center" }}>
                <span style={{ color: capacitySelected ? COLORS.gray900 : COLORS.gray400 }}>
                  {capacitySelected ? "12 people" : "Select..."}
                </span>
                <svg width={10} height={10} viewBox="0 0 10 10" fill="none">
                  <path d="M2.5 4l2.5 2.5 2.5-2.5" stroke={COLORS.gray400} strokeWidth="1.2" strokeLinecap="round" />
                </svg>
              </div>
            </div>
          </div>

          {/* Tags */}
          <div style={{ display: "flex", gap: 8, flexWrap: "wrap" }}>
            {["Water Sports", "Outdoor", "Group Activity"].map((tag, i) => (
              <span
                key={tag}
                style={{
                  padding: "5px 12px",
                  borderRadius: 99,
                  fontSize: 12,
                  fontFamily: FONT.regular,
                  fontWeight: FONT.weights.medium,
                  backgroundColor: `${COLORS.blue}12`,
                  color: COLORS.blue,
                  transform: `scale(${tagEntry(i)})`,
                  opacity: tagEntry(i),
                }}
              >
                {tag}
              </span>
            ))}
          </div>
        </div>
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Phase 2: Dynamic Pricing                                           */
/* ------------------------------------------------------------------ */
const PricingRules: React.FC = () => {
  const frame = useCurrentFrame();

  /* Entry */
  const entryOpacity = interpolate(frame, [95, 105], [0, 1], CLAMP);
  const entryY = interpolate(frame, [95, 105], [25, 0], { ...CLAMP, easing: EASING.easeOut });

  /* Tab nav */
  const tabHighlight = interpolate(frame, [98, 102], [0, 1], CLAMP);

  /* Pricing tiers stagger */
  const tierEntry = (i: number) => {
    const start = 102 + i * 6;
    const opacity = interpolate(frame, [start, start + 8], [0, 1], CLAMP);
    const x = interpolate(frame, [start, start + 8], [20, 0], { ...CLAMP, easing: EASING.easeOut });
    return { opacity, x };
  };

  /* Price animate up */
  const peakPrice = interpolate(frame, [120, 135], [55, 75], { ...CLAMP, easing: EASING.easeOut });

  /* Percentage badge */
  const badgeScale = interpolate(frame, [135, 145], [0, 1], { ...CLAMP, easing: EASING.spring });

  /* Rule card */
  const ruleCardOpacity = interpolate(frame, [115, 125], [0, 1], CLAMP);
  const ruleCardY = interpolate(frame, [115, 125], [15, 0], { ...CLAMP, easing: EASING.easeOut });

  /* Exit */
  const exitOpacity = interpolate(frame, [145, 150], [1, 0], { ...CLAMP, easing: EASING.easeIn });

  const TIERS = [
    { label: "Adult", base: "$55", peak: peakPrice },
    { label: "Child (4-12)", base: "$35", peak: null },
    { label: "Senior (65+)", base: "$45", peak: null },
  ];

  return (
    <div
      style={{
        opacity: entryOpacity * exitOpacity,
        transform: `translateY(${entryY}px)`,
      }}
    >
      {/* Tab navigation */}
      <div style={{ display: "flex", gap: 0, marginBottom: 20, borderBottom: `1px solid ${COLORS.gray200}` }}>
        {["Details", "Pricing", "Schedule", "Add-ons"].map((tab, i) => (
          <div
            key={tab}
            style={{
              padding: "12px 20px",
              fontFamily: FONT.regular,
              fontWeight: i === 1 ? FONT.weights.semibold : FONT.weights.regular,
              fontSize: 14,
              color: i === 1 ? COLORS.primary : COLORS.gray400,
              borderBottom: i === 1 ? `2px solid ${COLORS.primary}` : "2px solid transparent",
              opacity: i === 1 ? tabHighlight : 0.6 + tabHighlight * 0.4,
            }}
          >
            {tab}
          </div>
        ))}
      </div>

      <div style={{ display: "flex", gap: 24 }}>
        {/* Left: Pricing tiers */}
        <div style={{ flex: 1 }}>
          <div
            style={{
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.semibold,
              fontSize: 16,
              color: COLORS.navy,
              marginBottom: 14,
            }}
          >
            Pricing Tiers
          </div>

          <div
            style={{
              backgroundColor: COLORS.white,
              borderRadius: 12,
              border: `1px solid ${COLORS.gray200}`,
              overflow: "hidden",
            }}
          >
            {TIERS.map((tier, i) => {
              const te = tierEntry(i);
              return (
                <div
                  key={tier.label}
                  style={{
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "space-between",
                    padding: "16px 20px",
                    borderBottom: i < TIERS.length - 1 ? `1px solid ${COLORS.gray100}` : "none",
                    opacity: te.opacity,
                    transform: `translateX(${te.x}px)`,
                  }}
                >
                  <div>
                    <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 14, color: COLORS.gray900 }}>
                      {tier.label}
                    </div>
                    <div style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray400, marginTop: 2 }}>
                      Base: {tier.base}/person
                    </div>
                  </div>
                  {i === 0 ? (
                    <div style={{ display: "flex", alignItems: "center", gap: 8 }}>
                      <span
                        style={{
                          fontFamily: FONT.regular,
                          fontWeight: FONT.weights.bold,
                          fontSize: 22,
                          color: COLORS.primary,
                        }}
                      >
                        ${Math.round(peakPrice)}
                      </span>
                      <span style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray400 }}>/person</span>
                      {badgeScale > 0 && (
                        <span
                          style={{
                            padding: "3px 8px",
                            borderRadius: 99,
                            fontSize: 11,
                            fontFamily: FONT.regular,
                            fontWeight: FONT.weights.bold,
                            backgroundColor: COLORS.greenLight,
                            color: COLORS.greenDark,
                            transform: `scale(${badgeScale})`,
                            display: "inline-block",
                          }}
                        >
                          +36%
                        </span>
                      )}
                    </div>
                  ) : (
                    <span
                      style={{
                        fontFamily: FONT.regular,
                        fontWeight: FONT.weights.bold,
                        fontSize: 18,
                        color: COLORS.navy,
                      }}
                    >
                      {tier.base}
                    </span>
                  )}
                </div>
              );
            })}
          </div>
        </div>

        {/* Right: Peak Season rule card */}
        <div
          style={{
            width: 300,
            opacity: ruleCardOpacity,
            transform: `translateY(${ruleCardY}px)`,
          }}
        >
          <div
            style={{
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.semibold,
              fontSize: 16,
              color: COLORS.navy,
              marginBottom: 14,
            }}
          >
            Pricing Rules
          </div>
          <div
            style={{
              backgroundColor: COLORS.white,
              borderRadius: 12,
              border: `2px solid ${COLORS.primary}30`,
              padding: 20,
            }}
          >
            <div style={{ display: "flex", alignItems: "center", gap: 8, marginBottom: 12 }}>
              <div
                style={{
                  width: 8,
                  height: 8,
                  borderRadius: 4,
                  backgroundColor: COLORS.primary,
                }}
              />
              <span
                style={{
                  fontFamily: FONT.regular,
                  fontWeight: FONT.weights.bold,
                  fontSize: 15,
                  color: COLORS.navy,
                }}
              >
                Peak Season
              </span>
            </div>
            <div style={{ fontFamily: FONT.regular, fontSize: 13, color: COLORS.gray500, marginBottom: 8 }}>
              Jun 1 — Aug 31
            </div>
            <div style={{ fontFamily: FONT.regular, fontSize: 13, color: COLORS.gray500 }}>
              Markup: <span style={{ color: COLORS.primary, fontWeight: FONT.weights.bold }}>+36%</span> on base price
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Phase 3: Season Calendar                                           */
/* ------------------------------------------------------------------ */
const SeasonCalendar: React.FC = () => {
  const frame = useCurrentFrame();

  /* Entry */
  const calOpacity = interpolate(frame, [150, 160], [0, 1], CLAMP);
  const calY = interpolate(frame, [150, 160], [25, 0], { ...CLAMP, easing: EASING.easeOut });

  /* Month block fill - cascade left to right */
  const monthFill = (i: number) => {
    const start = 158 + i * 3;
    return interpolate(frame, [start, start + 8], [0, 1], { ...CLAMP, easing: EASING.easeOut });
  };

  /* Legend entry */
  const legendOpacity = interpolate(frame, [188, 196], [0, 1], CLAMP);

  /* Date range drag */
  const dragProgress = interpolate(frame, [192, 205], [0, 1], { ...CLAMP, easing: EASING.easeInOut });

  /* Exit */
  const exitOpacity = interpolate(frame, [205, 210], [1, 0], { ...CLAMP, easing: EASING.easeIn });

  return (
    <div
      style={{
        opacity: calOpacity * exitOpacity,
        transform: `translateY(${calY}px)`,
      }}
    >
      <div
        style={{
          fontFamily: FONT.regular,
          fontWeight: FONT.weights.bold,
          fontSize: 18,
          color: COLORS.navy,
          marginBottom: 18,
        }}
      >
        Season Calendar — Sunset Kayak Tour
      </div>

      <div
        style={{
          backgroundColor: COLORS.white,
          borderRadius: 14,
          border: `1px solid ${COLORS.gray200}`,
          padding: 24,
        }}
      >
        {/* Month bars */}
        <div style={{ display: "flex", gap: 6, marginBottom: 20, position: "relative" }}>
          {MONTHS.map((month, i) => {
            const season = SEASON_MAP[month];
            const fill = monthFill(i);
            const color = SEASON_COLORS[season];
            const isOff = season === "off";
            return (
              <div
                key={month}
                style={{
                  flex: 1,
                  textAlign: "center",
                }}
              >
                <div
                  style={{
                    fontFamily: FONT.regular,
                    fontSize: 11,
                    fontWeight: FONT.weights.semibold,
                    color: COLORS.gray500,
                    marginBottom: 6,
                  }}
                >
                  {month}
                </div>
                <div
                  style={{
                    height: 48,
                    borderRadius: 6,
                    backgroundColor: isOff ? `${color}` : `${color}${Math.round(fill * 255).toString(16).padStart(2, "0")}`,
                    opacity: isOff ? fill * 0.3 : fill,
                    border: isOff ? `1px dashed ${COLORS.gray300}` : `1px solid ${color}40`,
                  }}
                />
              </div>
            );
          })}

          {/* Date range selector overlay (Dec-Feb highlight) */}
          {dragProgress > 0 && (
            <div
              style={{
                position: "absolute",
                bottom: 0,
                left: `${(11 / 12) * 100}%`,
                width: `${dragProgress * (3 / 12) * 100}%`,
                height: 48,
                border: `2px solid ${COLORS.navy}`,
                borderRadius: 6,
                backgroundColor: `${COLORS.navy}10`,
                pointerEvents: "none",
              }}
            />
          )}
        </div>

        {/* Legend */}
        <div
          style={{
            display: "flex",
            gap: 20,
            justifyContent: "center",
            opacity: legendOpacity,
          }}
        >
          {[
            { label: "Peak Season", color: COLORS.primary },
            { label: "Regular", color: COLORS.blue },
            { label: "Off Season", color: COLORS.gray300 },
          ].map((item) => (
            <div key={item.label} style={{ display: "flex", alignItems: "center", gap: 6 }}>
              <div
                style={{
                  width: 12,
                  height: 12,
                  borderRadius: 3,
                  backgroundColor: item.color,
                  opacity: item.color === COLORS.gray300 ? 0.4 : 1,
                }}
              />
              <span style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray500 }}>
                {item.label}
              </span>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Phase 4: Product Preview Card                                      */
/* ------------------------------------------------------------------ */
const ProductPreview: React.FC = () => {
  const frame = useCurrentFrame();

  /* Entry from bottom */
  const cardOpacity = interpolate(frame, [210, 222], [0, 1], CLAMP);
  const cardY = interpolate(frame, [210, 222], [60, 0], { ...CLAMP, easing: EASING.spring });

  /* Shine sweep across card */
  const shineX = interpolate(frame, [228, 248], [-100, 600], CLAMP);

  /* Badge pop */
  const availBadge = interpolate(frame, [225, 235], [0, 1], { ...CLAMP, easing: EASING.spring });

  return (
    <div
      style={{
        display: "flex",
        justifyContent: "center",
        alignItems: "center",
        height: "100%",
      }}
    >
      <div
        style={{
          width: 480,
          backgroundColor: COLORS.white,
          borderRadius: 16,
          border: `1px solid ${COLORS.gray200}`,
          overflow: "hidden",
          opacity: cardOpacity,
          transform: `translateY(${cardY}px)`,
          boxShadow: "0 12px 40px rgba(0,0,0,0.08)",
          position: "relative",
        }}
      >
        {/* Shine overlay */}
        <div
          style={{
            position: "absolute",
            top: 0,
            left: shineX,
            width: 80,
            height: "100%",
            background: "linear-gradient(90deg, transparent, rgba(255,255,255,0.6), transparent)",
            zIndex: 5,
            pointerEvents: "none",
          }}
        />

        {/* Image area */}
        <div
          style={{
            height: 160,
            background: `linear-gradient(135deg, ${COLORS.blue}30, ${COLORS.primary}20)`,
            display: "flex",
            alignItems: "center",
            justifyContent: "center",
            position: "relative",
          }}
        >
          <svg width={48} height={48} viewBox="0 0 48 48" fill="none">
            <circle cx="24" cy="24" r="20" stroke={COLORS.white} strokeWidth="2" opacity="0.5" />
            <path d="M18 28c0-3.3 2.7-6 6-6s6 2.7 6 6" stroke={COLORS.white} strokeWidth="2" strokeLinecap="round" />
            <circle cx="24" cy="18" r="4" stroke={COLORS.white} strokeWidth="2" />
          </svg>
          {/* Season indicator */}
          <div
            style={{
              position: "absolute",
              top: 12,
              right: 12,
              padding: "4px 10px",
              borderRadius: 99,
              backgroundColor: `${COLORS.primary}90`,
              color: COLORS.white,
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.semibold,
              fontSize: 11,
            }}
          >
            Peak Season
          </div>
        </div>

        {/* Content */}
        <div style={{ padding: "20px 24px" }}>
          <div
            style={{
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.bold,
              fontSize: 20,
              color: COLORS.navy,
              marginBottom: 8,
            }}
          >
            Sunset Kayak Tour
          </div>
          <div
            style={{
              fontFamily: FONT.regular,
              fontSize: 13,
              color: COLORS.gray500,
              marginBottom: 16,
            }}
          >
            2 hours &middot; 12 people max &middot; Water Sports
          </div>

          {/* Pricing tiers */}
          <div style={{ display: "flex", gap: 8, marginBottom: 16 }}>
            {[
              { label: "Adult", price: "$75" },
              { label: "Child", price: "$35" },
              { label: "Senior", price: "$45" },
            ].map((tier) => (
              <div
                key={tier.label}
                style={{
                  flex: 1,
                  padding: "10px 8px",
                  borderRadius: 8,
                  backgroundColor: COLORS.gray50,
                  textAlign: "center",
                }}
              >
                <div style={{ fontFamily: FONT.regular, fontSize: 10, color: COLORS.gray400, marginBottom: 2 }}>
                  {tier.label}
                </div>
                <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 16, color: COLORS.navy }}>
                  {tier.price}
                </div>
              </div>
            ))}
          </div>

          {/* Availability badge */}
          <div
            style={{
              display: "flex",
              alignItems: "center",
              justifyContent: "space-between",
            }}
          >
            <span
              style={{
                padding: "5px 12px",
                borderRadius: 99,
                fontSize: 12,
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.semibold,
                backgroundColor: COLORS.greenLight,
                color: COLORS.greenDark,
                transform: `scale(${availBadge})`,
                display: "inline-block",
              }}
            >
              Available Now
            </span>
            <span style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray400 }}>
              3 sessions today
            </span>
          </div>
        </div>
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Main                                                               */
/* ------------------------------------------------------------------ */
export const ProductsSetup: React.FC = () => {
  const frame = useCurrentFrame();

  const showPhase1 = frame < 95;
  const showPhase2 = frame >= 90 && frame < 150;
  const showPhase3 = frame >= 148 && frame < 210;
  const showPhase4 = frame >= 208;

  return (
    <AbsoluteFill style={{ backgroundColor: COLORS.gray50 }}>
      <AppMockup activeItem="Experiences" pageTitle="Products & Experiences">
        <div style={{ position: "relative", width: "100%", height: "100%" }}>
          {showPhase1 && (
            <div style={{ position: "absolute", inset: 0 }}>
              <ExperienceForm />
            </div>
          )}
          {showPhase2 && (
            <div style={{ position: "absolute", inset: 0 }}>
              <PricingRules />
            </div>
          )}
          {showPhase3 && (
            <div style={{ position: "absolute", inset: 0 }}>
              <SeasonCalendar />
            </div>
          )}
          {showPhase4 && (
            <div style={{ position: "absolute", inset: 0 }}>
              <ProductPreview />
            </div>
          )}
        </div>
      </AppMockup>
    </AbsoluteFill>
  );
};
