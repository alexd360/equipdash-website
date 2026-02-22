import React from "react";
import { interpolate, useCurrentFrame } from "remotion";
import { COLORS, EASING } from "../theme";

interface DetailPanelProps {
  children: React.ReactNode;
  enterFrame: number;
  width?: number;
  enterDuration?: number;
  side?: "right" | "left";
}

export const DetailPanel: React.FC<DetailPanelProps> = ({
  children,
  enterFrame,
  width = 480,
  enterDuration = 20,
  side = "right",
}) => {
  const frame = useCurrentFrame();

  const offsetFrom = side === "right" ? 400 : -400;

  const translateX = interpolate(
    frame,
    [enterFrame, enterFrame + enterDuration],
    [offsetFrom, 0],
    {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
      easing: EASING.easeOut,
    }
  );

  const opacity = interpolate(
    frame,
    [enterFrame, enterFrame + Math.min(enterDuration, 12)],
    [0, 1],
    {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
    }
  );

  if (frame < enterFrame) return null;

  return (
    <div
      style={{
        position: "absolute",
        top: 0,
        [side]: 0,
        width,
        height: 1080,
        backgroundColor: COLORS.white,
        boxShadow:
          side === "right"
            ? "-8px 0 40px rgba(0,0,0,0.12)"
            : "8px 0 40px rgba(0,0,0,0.12)",
        transform: `translateX(${translateX}px)`,
        opacity,
        zIndex: 20,
        overflow: "hidden",
      }}
    >
      {children}
    </div>
  );
};
