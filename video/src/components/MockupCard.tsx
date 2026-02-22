import React from "react";
import { COLORS } from "../theme";

interface MockupCardProps {
  children: React.ReactNode;
  style?: React.CSSProperties;
  padding?: number;
  borderRadius?: number;
}

export const MockupCard: React.FC<MockupCardProps> = ({
  children,
  style,
  padding = 20,
  borderRadius = 12,
}) => {
  return (
    <div
      style={{
        backgroundColor: COLORS.white,
        borderRadius,
        padding,
        boxShadow: "0 4px 24px rgba(0,0,0,0.08), 0 1px 4px rgba(0,0,0,0.04)",
        ...style,
      }}
    >
      {children}
    </div>
  );
};
