import React from "react";
import { interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";

interface FeatureLabelProps {
  label: string;
  startFrame?: number;
}

export const FeatureLabel: React.FC<FeatureLabelProps> = ({
  label,
  startFrame = 0,
}) => {
  const frame = useCurrentFrame();
  const opacity = interpolate(frame, [startFrame, startFrame + 12], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });
  const y = interpolate(frame, [startFrame, startFrame + 12], [-10, 0], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });

  return (
    <div
      style={{
        opacity,
        transform: `translateY(${y}px)`,
        display: "inline-flex",
        alignItems: "center",
        padding: "8px 20px",
        borderRadius: 99,
        backgroundColor: COLORS.primary,
        color: COLORS.white,
        fontSize: 14,
        fontFamily: FONT.regular,
        fontWeight: FONT.weights.semibold,
        letterSpacing: 1.5,
        textTransform: "uppercase",
      }}
    >
      {label}
    </div>
  );
};
