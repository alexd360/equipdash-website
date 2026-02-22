import React from "react";
import { interpolate, useCurrentFrame } from "remotion";
import { COLORS, EASING } from "../theme";

interface LogoProps {
  scale?: number;
  showWordmark?: boolean;
  animateIn?: boolean;
  startFrame?: number;
  darkMode?: boolean; // false = navy text on white bg
}

export const EquipDashLogo: React.FC<LogoProps> = ({
  scale = 1,
  showWordmark = true,
  animateIn = true,
  startFrame = 0,
  darkMode = true,
}) => {
  const frame = useCurrentFrame();

  const getPolygonStyle = (index: number): React.CSSProperties => {
    if (!animateIn) return { opacity: 1 };
    const delay = startFrame + index * 8;
    const opacity = interpolate(frame, [delay, delay + 15], [0, 1], {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
    });
    const s = interpolate(frame, [delay, delay + 15], [0.6, 1], {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
      easing: EASING.easeOut,
    });
    return {
      opacity,
      transform: `scale(${s})`,
      transformOrigin: "center",
    };
  };

  const wordmarkOpacity = animateIn
    ? interpolate(frame, [startFrame + 50, startFrame + 70], [0, 1], {
        extrapolateLeft: "clamp",
        extrapolateRight: "clamp",
      })
    : 1;

  return (
    <div
      style={{
        display: "flex",
        alignItems: "center",
        gap: 24 * scale,
        transform: `scale(${scale})`,
      }}
    >
      <svg
        width={120}
        height={120}
        viewBox="0 0 571.05 565.2"
        fill="none"
      >
        {/* Green polygon */}
        <polygon
          style={getPolygonStyle(0)}
          fill={COLORS.logoGreen}
          points="489.47 0 326.32 0 244.74 141.3 244.74 141.3 407.89 141.3 489.47 282.6 571.05 141.3 489.47 0"
        />
        {/* Blue polygon */}
        <polygon
          style={getPolygonStyle(1)}
          fill={COLORS.logoBlue}
          points="244.74 141.3 81.58 141.3 0 282.6 81.58 423.9 244.74 423.9 163.16 282.6 244.74 141.3"
        />
        {/* Orange polygon */}
        <polygon
          style={getPolygonStyle(2)}
          fill={COLORS.logoOrange}
          points="489.47 282.6 407.89 423.9 244.74 423.9 326.32 565.2 489.47 565.2 571.05 423.9 489.47 282.6"
        />
        {/* Navy polygon */}
        <polygon
          style={getPolygonStyle(3)}
          fill={COLORS.logoNavy}
          points="407.89 141.3 244.73 141.3 163.16 282.6 244.73 423.9 407.89 423.89 489.46 282.6 407.89 141.3"
        />
        {/* White inner shape */}
        <path
          style={getPolygonStyle(4)}
          fill={COLORS.white}
          d="m163.16,282.6c100.96,0,194.26,53.86,244.74,141.3h0s0-282.6,0-282.6l-244.74,141.3Z"
        />
      </svg>
      {showWordmark && (
        <span
          style={{
            fontFamily: "BR Candor",
            fontWeight: 700,
            fontSize: 52,
            color: darkMode ? COLORS.white : COLORS.navy,
            letterSpacing: -1,
            opacity: wordmarkOpacity,
          }}
        >
          EquipDash
        </span>
      )}
    </div>
  );
};
