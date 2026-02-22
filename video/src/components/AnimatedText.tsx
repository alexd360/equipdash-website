import React from "react";
import { interpolate, useCurrentFrame } from "remotion";
import { FONT, EASING } from "../theme";

interface AnimatedTextProps {
  text: string;
  startFrame: number;
  frameDuration?: number;
  style?: React.CSSProperties;
  fontSize?: number;
  color?: string;
  fontWeight?: number;
}

export const AnimatedText: React.FC<AnimatedTextProps> = ({
  text,
  startFrame,
  frameDuration = 30,
  style,
  fontSize = 48,
  color = "#FFFFFF",
  fontWeight = FONT.weights.bold,
}) => {
  const frame = useCurrentFrame();
  const words = text.split(" ");
  const framesPerWord = frameDuration / words.length;

  return (
    <div
      style={{
        display: "flex",
        flexWrap: "wrap",
        justifyContent: "center",
        gap: "0 16px",
        fontFamily: FONT.regular,
        fontSize,
        fontWeight,
        color,
        lineHeight: 1.3,
        ...style,
      }}
    >
      {words.map((word, i) => {
        const wordStart = startFrame + i * framesPerWord;
        const opacity = interpolate(frame, [wordStart, wordStart + 8], [0, 1], {
          extrapolateLeft: "clamp",
          extrapolateRight: "clamp",
        });
        const y = interpolate(frame, [wordStart, wordStart + 8], [20, 0], {
          extrapolateLeft: "clamp",
          extrapolateRight: "clamp",
          easing: EASING.easeOut,
        });
        return (
          <span
            key={i}
            style={{
              opacity,
              transform: `translateY(${y}px)`,
              display: "inline-block",
            }}
          >
            {word}
          </span>
        );
      })}
    </div>
  );
};
