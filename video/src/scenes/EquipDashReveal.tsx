import React from "react";
import { AbsoluteFill, interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";
import { EquipDashLogo } from "../components/EquipDashLogo";

export const EquipDashReveal: React.FC = () => {
  const frame = useCurrentFrame();

  // Logo punch in (frames 5-25) — fast scale with overshoot
  const logoScale = interpolate(frame, [5, 18], [0.3, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.spring,
  });
  const logoOpacity = interpolate(frame, [5, 12], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });

  // Logo moves up to make room for text (frames 25-40)
  const logoY = interpolate(frame, [25, 40], [0, -50], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });

  // Headline: "Get more bookings." (frames 40-55)
  const h1Opacity = interpolate(frame, [40, 50], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });
  const h1Scale = interpolate(frame, [40, 55], [0.85, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.spring,
  });

  // Headline 2: "Simplify your operations." (frames 55-70)
  const h2Opacity = interpolate(frame, [55, 65], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });
  const h2Scale = interpolate(frame, [55, 70], [0.85, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.spring,
  });

  return (
    <AbsoluteFill style={{ backgroundColor: COLORS.white }}>
      {/* Subtle radial glow behind logo */}
      <div
        style={{
          position: "absolute",
          top: "40%",
          left: "50%",
          width: 600,
          height: 600,
          transform: "translate(-50%, -50%)",
          background: `radial-gradient(circle, rgba(247,88,31,0.06) 0%, transparent 70%)`,
        }}
      />

      {/* Logo — use navy wordmark on white bg */}
      <div
        style={{
          position: "absolute",
          top: "50%",
          left: "50%",
          transform: `translate(-50%, -50%) translateY(${logoY}px) scale(${logoScale})`,
          opacity: logoOpacity,
        }}
      >
        <EquipDashLogo scale={1.5} animateIn={false} darkMode={false} />
      </div>

      {/* Headlines */}
      <div
        style={{
          position: "absolute",
          top: "58%",
          left: 0,
          right: 0,
          display: "flex",
          flexDirection: "column",
          alignItems: "center",
          gap: 4,
        }}
      >
        <div
          style={{
            fontFamily: FONT.regular,
            fontWeight: FONT.weights.bold,
            fontSize: 72,
            color: COLORS.navy,
            opacity: h1Opacity,
            transform: `scale(${h1Scale})`,
            textAlign: "center",
          }}
        >
          Get more bookings.
        </div>
        <div
          style={{
            fontFamily: FONT.regular,
            fontWeight: FONT.weights.bold,
            fontSize: 72,
            color: COLORS.primary,
            opacity: h2Opacity,
            transform: `scale(${h2Scale})`,
            textAlign: "center",
          }}
        >
          Simplify your operations.
        </div>

      </div>
    </AbsoluteFill>
  );
};
