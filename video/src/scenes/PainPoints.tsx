import React from "react";
import { AbsoluteFill, interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";

const PAIN_POINTS = [
  "Juggling clunky software, spreadsheets, and sticky notes",
  "Double bookings, missed pickups, and no-shows",
  "Paying for five tools that don't talk to each other",
  "Legacy systems with outdated interfaces",
  "Spending hours on tasks AI could handle in seconds",
];

export const PainPoints: React.FC = () => {
  const frame = useCurrentFrame();

  return (
    <AbsoluteFill style={{ backgroundColor: COLORS.white }}>
      {/* Centered content */}
      <div
        style={{
          position: "absolute",
          top: "50%",
          left: "50%",
          transform: "translate(-50%, -55%)",
          display: "flex",
          flexDirection: "column",
          gap: 48,
          width: 1200,
        }}
      >
        {/* Heading */}
        {(() => {
          const headOpacity = interpolate(frame, [5, 20], [0, 1], {
            extrapolateLeft: "clamp",
            extrapolateRight: "clamp",
          });
          const headY = interpolate(frame, [5, 20], [30, 0], {
            extrapolateLeft: "clamp",
            extrapolateRight: "clamp",
            easing: EASING.easeOut,
          });
          return (
            <div
              style={{
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.bold,
                fontSize: 56,
                color: COLORS.navy,
                textAlign: "center",
                opacity: headOpacity,
                transform: `translateY(${headY}px)`,
              }}
            >
              Sound familiar?
            </div>
          );
        })()}

        {/* Pain point lines */}
        <div style={{ display: "flex", flexDirection: "column", gap: 32 }}>
          {PAIN_POINTS.map((text, i) => {
            const lineDelay = 25 + i * 28;
            const lineOpacity = interpolate(
              frame,
              [lineDelay, lineDelay + 15],
              [0, 1],
              { extrapolateLeft: "clamp", extrapolateRight: "clamp" }
            );
            const lineY = interpolate(
              frame,
              [lineDelay, lineDelay + 15],
              [20, 0],
              {
                extrapolateLeft: "clamp",
                extrapolateRight: "clamp",
                easing: EASING.easeOut,
              }
            );

            // Orange strikeout animation (sweeps across after all lines are shown)
            const strikeDelay = 152 + i * 10;
            const strikeWidth = interpolate(
              frame,
              [strikeDelay, strikeDelay + 18],
              [0, 105],
              { extrapolateLeft: "clamp", extrapolateRight: "clamp", easing: EASING.easeOut }
            );

            // Dim text after strike
            const textDim = interpolate(
              frame,
              [strikeDelay + 10, strikeDelay + 20],
              [1, 0.35],
              { extrapolateLeft: "clamp", extrapolateRight: "clamp" }
            );

            return (
              <div
                key={i}
                style={{
                  position: "relative",
                  opacity: lineOpacity,
                  transform: `translateY(${lineY}px)`,
                  display: "flex",
                  alignItems: "center",
                  gap: 24,
                  paddingLeft: 60,
                }}
              >
                {/* Orange X icon */}
                <svg
                  width={36}
                  height={36}
                  viewBox="0 0 36 36"
                  style={{
                    flexShrink: 0,
                    opacity: textDim,
                  }}
                >
                  <circle cx="18" cy="18" r="18" fill="#FFF0EB" />
                  <line
                    x1="12"
                    y1="12"
                    x2="24"
                    y2="24"
                    stroke={COLORS.primary}
                    strokeWidth="3"
                    strokeLinecap="round"
                  />
                  <line
                    x1="24"
                    y1="12"
                    x2="12"
                    y2="24"
                    stroke={COLORS.primary}
                    strokeWidth="3"
                    strokeLinecap="round"
                  />
                </svg>

                {/* Text with strikeout */}
                <div style={{ position: "relative", display: "inline-block" }}>
                  <span
                    style={{
                      fontFamily: FONT.regular,
                      fontWeight: FONT.weights.medium,
                      fontSize: 34,
                      color: COLORS.navy,
                      opacity: textDim,
                      lineHeight: 1.4,
                    }}
                  >
                    {text}
                  </span>

                  {/* Orange strikeout line */}
                  {strikeWidth > 0 && (
                    <div
                      style={{
                        position: "absolute",
                        top: "52%",
                        left: -8,
                        width: `${strikeWidth}%`,
                        height: 4,
                        backgroundColor: COLORS.primary,
                        borderRadius: 2,
                        transformOrigin: "left center",
                      }}
                    />
                  )}
                </div>
              </div>
            );
          })}
        </div>
      </div>

      {/* "There's a better way" text appears after strikes */}
      {(() => {
        const betterOpacity = interpolate(frame, [205, 220], [0, 1], {
          extrapolateLeft: "clamp",
          extrapolateRight: "clamp",
        });
        const betterScale = interpolate(frame, [205, 220], [0.9, 1], {
          extrapolateLeft: "clamp",
          extrapolateRight: "clamp",
          easing: EASING.spring,
        });

        return (
          <div
            style={{
              position: "absolute",
              bottom: 100,
              left: 0,
              right: 0,
              textAlign: "center",
              opacity: betterOpacity,
              transform: `scale(${betterScale})`,
            }}
          >
            <span
              style={{
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.bold,
                fontSize: 48,
                color: COLORS.primary,
              }}
            >
              There's a better way.
            </span>
          </div>
        );
      })()}

      {/* Scene fade out */}
      {(() => {
        const fadeOut = interpolate(frame, [235, 255], [0, 1], {
          extrapolateLeft: "clamp",
          extrapolateRight: "clamp",
        });
        return (
          <AbsoluteFill
            style={{
              backgroundColor: COLORS.white,
              opacity: fadeOut,
            }}
          />
        );
      })()}
    </AbsoluteFill>
  );
};
