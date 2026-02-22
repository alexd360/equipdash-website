import React from "react";
import { AbsoluteFill, interpolate, useCurrentFrame } from "remotion";
import { EASING } from "../theme";

interface SceneTransitionProps {
  children: React.ReactNode;
  direction?: "left" | "right" | "up" | "down";
  durationInFrames: number;
  transitionFrames?: number;
}

export const SceneTransition: React.FC<SceneTransitionProps> = ({
  children,
  direction = "left",
  durationInFrames,
  transitionFrames = 15,
}) => {
  const frame = useCurrentFrame();

  // Enter animation
  const enterProgress = interpolate(frame, [0, transitionFrames], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });

  // Exit animation
  const exitStart = durationInFrames - transitionFrames;
  const exitProgress = interpolate(
    frame,
    [exitStart, durationInFrames],
    [0, 1],
    {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
      easing: EASING.easeIn,
    }
  );

  const getTranslate = () => {
    const enterOffset = (1 - enterProgress) * 100;
    const exitOffset = exitProgress * -100;

    switch (direction) {
      case "left":
        return `translateX(${frame < transitionFrames ? enterOffset : exitOffset}%)`;
      case "right":
        return `translateX(${frame < transitionFrames ? -enterOffset : -exitOffset}%)`;
      case "up":
        return `translateY(${frame < transitionFrames ? enterOffset : exitOffset}%)`;
      case "down":
        return `translateY(${frame < transitionFrames ? -enterOffset : -exitOffset}%)`;
    }
  };

  const opacity =
    frame < transitionFrames
      ? enterProgress
      : frame > exitStart
        ? 1 - exitProgress
        : 1;

  return (
    <AbsoluteFill
      style={{
        transform: getTranslate(),
        opacity,
      }}
    >
      {children}
    </AbsoluteFill>
  );
};
