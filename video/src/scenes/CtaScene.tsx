import React from "react";
import { AbsoluteFill, interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";
import { EquipDashLogo } from "../components/EquipDashLogo";

export const CtaScene: React.FC = () => {
  const frame = useCurrentFrame();

  // Logo punch in
  const logoOpacity = interpolate(frame, [5, 15], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });
  const logoScale = interpolate(frame, [5, 18], [0.5, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.spring,
  });
  const logoY = interpolate(frame, [5, 30], [0, -30], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });

  // Headline word-by-word
  const headlineWords = "Start your free 21-day trial".split(" ");
  const getWordOpacity = (i: number) => {
    const start = 30 + i * 3;
    return interpolate(frame, [start, start + 5], [0, 1], {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
    });
  };
  const getWordY = (i: number) => {
    const start = 30 + i * 3;
    return interpolate(frame, [start, start + 5], [15, 0], {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
      easing: EASING.easeOut,
    });
  };

  // "Plans from" text appears
  const priceAppear = interpolate(frame, [70, 85], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });
  const priceY = interpolate(frame, [70, 85], [20, 0], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });

  // Slash animation on $29/mo
  const slashFrame = 110;
  const slashProgress = interpolate(frame, [slashFrame, slashFrame + 12], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });

  // $29 dims after slash
  const oldPriceDim = interpolate(frame, [slashFrame + 5, slashFrame + 15], [1, 0.3], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });

  // New price $14.50 appears
  const newPriceOpacity = interpolate(frame, [slashFrame + 15, slashFrame + 25], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });
  const newPriceScale = interpolate(frame, [slashFrame + 15, slashFrame + 28], [0.7, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.spring,
  });

  // "50% off first 3 months" badge
  const badgeScale = interpolate(frame, [slashFrame + 25, slashFrame + 40], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.spring,
  });

  // URL
  const urlOpacity = interpolate(frame, [200, 220], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });

  return (
    <AbsoluteFill
      style={{
        backgroundColor: COLORS.white,
        display: "flex",
        flexDirection: "column",
        alignItems: "center",
        justifyContent: "center",
        gap: 28,
      }}
    >
      {/* Subtle radial gradient */}
      <div
        style={{
          position: "absolute",
          inset: 0,
          background: "radial-gradient(ellipse at center, rgba(247,88,31,0.04) 0%, transparent 60%)",
        }}
      />

      {/* Logo */}
      <div
        style={{
          opacity: logoOpacity,
          transform: `translateY(${logoY}px) scale(${logoScale})`,
        }}
      >
        <EquipDashLogo scale={1} animateIn={false} darkMode={false} />
      </div>

      {/* Headline */}
      <div
        style={{
          display: "flex",
          flexWrap: "wrap",
          justifyContent: "center",
          gap: "0 14px",
          fontFamily: FONT.regular,
          fontSize: 64,
          fontWeight: FONT.weights.bold,
          color: COLORS.navy,
          lineHeight: 1.2,
        }}
      >
        {headlineWords.map((word, i) => (
          <span
            key={i}
            style={{
              opacity: getWordOpacity(i),
              transform: `translateY(${getWordY(i)}px)`,
              display: "inline-block",
            }}
          >
            {word}
          </span>
        ))}
      </div>

      {/* Pricing section */}
      <div
        style={{
          display: "flex",
          flexDirection: "column",
          alignItems: "center",
          gap: 16,
          opacity: priceAppear,
          transform: `translateY(${priceY}px)`,
        }}
      >
        {/* "Plans from $29/mo" with slash */}
        <div style={{ display: "flex", alignItems: "baseline", gap: 10 }}>
          <span
            style={{
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.medium,
              fontSize: 28,
              color: COLORS.gray500,
            }}
          >
            Plans from
          </span>
          <div style={{ position: "relative", display: "inline-block" }}>
            <span
              style={{
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.bold,
                fontSize: 52,
                color: COLORS.navy,
                opacity: oldPriceDim,
              }}
            >
              $29
            </span>
            <span
              style={{
                fontFamily: FONT.regular,
                fontSize: 22,
                color: COLORS.gray400,
                opacity: oldPriceDim,
              }}
            >
              /mo
            </span>

            {/* Slash line */}
            {slashProgress > 0 && (
              <div
                style={{
                  position: "absolute",
                  top: "50%",
                  left: -6,
                  width: `${slashProgress * 115}%`,
                  height: 4,
                  backgroundColor: COLORS.primary,
                  transform: "rotate(-12deg)",
                  transformOrigin: "left center",
                  borderRadius: 2,
                }}
              />
            )}
          </div>
        </div>

        {/* New price */}
        {frame >= slashFrame + 15 && (
          <div
            style={{
              opacity: newPriceOpacity,
              transform: `scale(${newPriceScale})`,
              display: "flex",
              alignItems: "baseline",
              gap: 8,
            }}
          >
            <span
              style={{
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.bold,
                fontSize: 72,
                color: COLORS.primary,
              }}
            >
              $14.50
            </span>
            <span
              style={{
                fontFamily: FONT.regular,
                fontSize: 24,
                color: COLORS.gray400,
              }}
            >
              /mo
            </span>
          </div>
        )}
      </div>

      {/* "50% off first 3 months" badge */}
      {frame >= slashFrame + 25 && (
        <div
          style={{
            transform: `scale(${badgeScale})`,
            padding: "12px 32px",
            borderRadius: 99,
            backgroundColor: COLORS.primary,
            display: "flex",
            alignItems: "center",
            gap: 8,
          }}
        >
          <span
            style={{
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.bold,
              fontSize: 22,
              color: COLORS.white,
            }}
          >
            50% off your first 3 months!
          </span>
        </div>
      )}

      {/* URL + no credit card */}
      <div
        style={{
          display: "flex",
          flexDirection: "column",
          alignItems: "center",
          gap: 6,
          opacity: urlOpacity,
        }}
      >
        <span
          style={{
            fontFamily: FONT.regular,
            fontSize: 16,
            color: COLORS.gray400,
          }}
        >
          No credit card required
        </span>
        <span
          style={{
            fontFamily: FONT.regular,
            fontSize: 20,
            color: COLORS.gray500,
            letterSpacing: 1,
          }}
        >
          equipdash.com
        </span>
      </div>
    </AbsoluteFill>
  );
};
