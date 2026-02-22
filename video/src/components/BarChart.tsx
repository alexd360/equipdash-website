import React from "react";
import { interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";

interface BarChartProps {
  data: { label: string; value: number; highlight?: boolean }[];
  startFrame?: number;
  height?: number;
  barColor?: string;
  highlightColor?: string;
}

export const BarChart: React.FC<BarChartProps> = ({
  data,
  startFrame = 0,
  height = 120,
  barColor = COLORS.primary,
  highlightColor = COLORS.primary,
}) => {
  const frame = useCurrentFrame();
  const maxVal = Math.max(...data.map((d) => d.value));

  return (
    <div
      style={{
        display: "flex",
        alignItems: "flex-end",
        gap: 8,
        height,
        padding: "0 4px",
      }}
    >
      {data.map((d, i) => {
        const barDelay = startFrame + i * 4;
        const barHeight = interpolate(
          frame,
          [barDelay, barDelay + 15],
          [0, (d.value / maxVal) * (height - 24)],
          {
            extrapolateLeft: "clamp",
            extrapolateRight: "clamp",
            easing: EASING.easeOut,
          }
        );

        return (
          <div
            key={i}
            style={{
              display: "flex",
              flexDirection: "column",
              alignItems: "center",
              flex: 1,
              gap: 4,
            }}
          >
            <div
              style={{
                width: "100%",
                height: barHeight,
                backgroundColor: d.highlight ? highlightColor : barColor,
                borderRadius: "4px 4px 0 0",
                opacity: d.highlight ? 1 : 0.6,
              }}
            />
            <span
              style={{
                fontSize: 10,
                color: COLORS.gray400,
                fontFamily: FONT.regular,
              }}
            >
              {d.label}
            </span>
          </div>
        );
      })}
    </div>
  );
};
