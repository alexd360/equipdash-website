import React from "react";
import { AbsoluteFill, interpolate, useCurrentFrame } from "remotion";
import { EASING } from "../theme";

interface ZoomTarget {
  x: number;
  y: number;
  width: number;
  height: number;
}

interface CinematicZoomProps {
  children: React.ReactNode;
  zoomTarget: ZoomTarget;
  zoomStartFrame: number;
  zoomDuration?: number;
}

export const CinematicZoom: React.FC<CinematicZoomProps> = ({
  children,
  zoomTarget,
  zoomStartFrame,
  zoomDuration = 25,
}) => {
  const frame = useCurrentFrame();

  // Calculate scale to fill viewport with target area
  const scaleX = 1920 / zoomTarget.width;
  const scaleY = 1080 / zoomTarget.height;
  const targetScale = Math.min(scaleX, scaleY) * 0.85; // 85% to leave some padding

  // Center of zoom target
  const targetCenterX = zoomTarget.x + zoomTarget.width / 2;
  const targetCenterY = zoomTarget.y + zoomTarget.height / 2;

  // Translation to center the target
  const targetTranslateX = 960 - targetCenterX * targetScale;
  const targetTranslateY = 540 - targetCenterY * targetScale;

  // Animate scale and translation
  const scale = interpolate(
    frame,
    [zoomStartFrame, zoomStartFrame + zoomDuration],
    [1, targetScale],
    {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
      easing: EASING.easeInOut,
    }
  );

  const translateX = interpolate(
    frame,
    [zoomStartFrame, zoomStartFrame + zoomDuration],
    [0, targetTranslateX],
    {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
      easing: EASING.easeInOut,
    }
  );

  const translateY = interpolate(
    frame,
    [zoomStartFrame, zoomStartFrame + zoomDuration],
    [0, targetTranslateY],
    {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
      easing: EASING.easeInOut,
    }
  );

  // Vignette/dim overlay during zoom
  const vignetteOpacity = interpolate(
    frame,
    [zoomStartFrame, zoomStartFrame + zoomDuration],
    [0, 0.3],
    {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
      easing: EASING.easeInOut,
    }
  );

  return (
    <AbsoluteFill>
      {/* Zooming content layer */}
      <div
        style={{
          position: "absolute",
          width: 1920,
          height: 1080,
          transformOrigin: "0 0",
          transform: `translate(${translateX}px, ${translateY}px) scale(${scale})`,
        }}
      >
        {children}
      </div>

      {/* Vignette overlay — radial gradient dims edges */}
      {frame >= zoomStartFrame && (
        <div
          style={{
            position: "absolute",
            inset: 0,
            background:
              "radial-gradient(ellipse at center, transparent 30%, rgba(0,0,0,0.6) 100%)",
            opacity: vignetteOpacity,
            pointerEvents: "none",
          }}
        />
      )}
    </AbsoluteFill>
  );
};
