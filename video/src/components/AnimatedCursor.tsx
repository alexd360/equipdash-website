import React from "react";
import { interpolate, useCurrentFrame } from "remotion";
import { EASING } from "../theme";

export interface CursorKeyframe {
  frame: number;
  x: number;
  y: number;
  click?: boolean;
}

interface AnimatedCursorProps {
  keyframes: CursorKeyframe[];
  /** Frames after last keyframe before cursor disappears */
  lingerFrames?: number;
}

export const AnimatedCursor: React.FC<AnimatedCursorProps> = ({
  keyframes,
  lingerFrames = 60,
}) => {
  const frame = useCurrentFrame();

  if (keyframes.length === 0) return null;

  const firstFrame = keyframes[0].frame;
  const lastKf = keyframes[keyframes.length - 1];

  // Before first keyframe — invisible
  if (frame < firstFrame) return null;
  // After linger — invisible
  if (frame > lastKf.frame + lingerFrames) return null;

  // --- Compute cursor position ---
  let x = keyframes[0].x;
  let y = keyframes[0].y;

  if (frame >= lastKf.frame) {
    x = lastKf.x;
    y = lastKf.y;
  } else {
    for (let i = 0; i < keyframes.length - 1; i++) {
      const curr = keyframes[i];
      const next = keyframes[i + 1];
      if (frame >= curr.frame && frame <= next.frame) {
        x = interpolate(frame, [curr.frame, next.frame], [curr.x, next.x], {
          extrapolateLeft: "clamp",
          extrapolateRight: "clamp",
          easing: EASING.easeOut,
        });
        y = interpolate(frame, [curr.frame, next.frame], [curr.y, next.y], {
          extrapolateLeft: "clamp",
          extrapolateRight: "clamp",
          easing: EASING.easeOut,
        });
        break;
      }
    }
  }

  // Fade in cursor
  const cursorOpacity = interpolate(frame, [firstFrame, firstFrame + 8], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });

  // --- Click ripple ---
  const clickKf = keyframes.find(
    (kf) => kf.click && frame >= kf.frame && frame < kf.frame + 18
  );

  return (
    <>
      {/* Cursor pointer */}
      <div
        style={{
          position: "absolute",
          left: x,
          top: y,
          zIndex: 9999,
          pointerEvents: "none",
          opacity: cursorOpacity,
          filter: "drop-shadow(0 2px 4px rgba(0,0,0,0.25))",
          transition: "none",
        }}
      >
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
          <path
            d="M5.5 3.21V20.8c0 .45.54.67.85.35l4.86-4.86a.5.5 0 01.35-.15h6.87c.45 0 .67-.54.35-.85L5.85 2.35c-.31-.31-.85-.09-.85.86z"
            fill="#222"
            stroke="#fff"
            strokeWidth="1.8"
          />
        </svg>
      </div>

      {/* Click ripple effect */}
      {clickKf && (
        <div
          style={{
            position: "absolute",
            left: clickKf.x + 5,
            top: clickKf.y + 5,
            zIndex: 9998,
            pointerEvents: "none",
          }}
        >
          <div
            style={{
              width: 36,
              height: 36,
              borderRadius: "50%",
              border: "2px solid rgba(247, 88, 31, 0.5)",
              transform: `translate(-50%, -50%) scale(${interpolate(
                frame,
                [clickKf.frame, clickKf.frame + 18],
                [0.2, 1.8],
                { extrapolateLeft: "clamp", extrapolateRight: "clamp" }
              )})`,
              opacity: interpolate(
                frame,
                [clickKf.frame, clickKf.frame + 18],
                [0.7, 0],
                { extrapolateLeft: "clamp", extrapolateRight: "clamp" }
              ),
            }}
          />
        </div>
      )}
    </>
  );
};
