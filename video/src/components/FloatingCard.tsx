import React from "react";
import { interpolate, useCurrentFrame } from "remotion";
import { EASING } from "../theme";

type Direction = "left" | "right" | "bottom" | "center" | "top";

interface FloatingCardProps {
  children: React.ReactNode;
  delay?: number;
  fromDirection?: Direction;
  width?: number | string;
  rotation?: number;
  shadow?: string;
  style?: React.CSSProperties;
  /** Duration of enter animation in frames */
  enterDuration?: number;
  /** Whether to apply gentle floating bob after enter */
  float?: boolean;
  /** Z-index for layering */
  zIndex?: number;
}

const getDirectionOffset = (dir: Direction): { x: number; y: number } => {
  switch (dir) {
    case "left":
      return { x: -120, y: 0 };
    case "right":
      return { x: 120, y: 0 };
    case "bottom":
      return { x: 0, y: 100 };
    case "top":
      return { x: 0, y: -100 };
    case "center":
      return { x: 0, y: 40 };
  }
};

export const FloatingCard: React.FC<FloatingCardProps> = ({
  children,
  delay = 0,
  fromDirection = "bottom",
  width,
  rotation = 0,
  shadow = "0 20px 60px rgba(0,0,0,0.12)",
  style,
  enterDuration = 20,
  float = true,
  zIndex = 1,
}) => {
  const frame = useCurrentFrame();
  const offset = getDirectionOffset(fromDirection);

  // Enter animation: slide + fade + scale
  const progress = interpolate(frame, [delay, delay + enterDuration], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.spring,
  });

  const opacity = interpolate(frame, [delay, delay + Math.min(enterDuration, 12)], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });

  const translateX = offset.x * (1 - progress);
  const translateY = offset.y * (1 - progress);
  const scale = interpolate(progress, [0, 1], [0.92, 1]);

  // Gentle floating bob after entry
  const floatY = float && frame > delay + enterDuration
    ? Math.sin((frame - delay - enterDuration) * 0.08) * 2
    : 0;

  return (
    <div
      style={{
        position: "absolute",
        width,
        opacity,
        transform: `translate(${translateX}px, ${translateY + floatY}px) scale(${scale}) ${rotation ? `rotate(${rotation}deg)` : ""}`,
        borderRadius: 16,
        boxShadow: shadow,
        backgroundColor: "#FFFFFF",
        zIndex,
        overflow: "hidden",
        ...style,
      }}
    >
      {children}
    </div>
  );
};
