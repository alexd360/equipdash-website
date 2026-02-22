import React from "react";
import { interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";
import { MockupSidebar } from "./MockupSidebar";

interface AppMockupProps {
  activeItem: string;
  pageTitle: string;
  headerRight?: React.ReactNode;
  children: React.ReactNode;
}

export const AppMockup: React.FC<AppMockupProps> = ({
  activeItem,
  pageTitle,
  headerRight,
  children,
}) => {
  const frame = useCurrentFrame();

  // Sidebar slides in from left (0-12 frames)
  const sidebarX = interpolate(frame, [0, 12], [-224, 0], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });
  const sidebarOpacity = interpolate(frame, [0, 8], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });

  // Header fades in (3-12 frames)
  const headerOpacity = interpolate(frame, [3, 12], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });
  const headerY = interpolate(frame, [3, 12], [-10, 0], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });

  // Content fades in (5-15 frames)
  const contentOpacity = interpolate(frame, [5, 15], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });
  const contentY = interpolate(frame, [5, 15], [12, 0], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });

  return (
    <div
      style={{
        width: 1920,
        height: 1080,
        display: "flex",
        backgroundColor: COLORS.gray50,
        overflow: "hidden",
      }}
    >
      {/* Sidebar */}
      <div
        style={{
          transform: `translateX(${sidebarX}px)`,
          opacity: sidebarOpacity,
          flexShrink: 0,
        }}
      >
        <MockupSidebar activeItem={activeItem} />
      </div>

      {/* Main content area */}
      <div
        style={{
          flex: 1,
          display: "flex",
          flexDirection: "column",
          overflow: "hidden",
        }}
      >
        {/* Top header bar */}
        <div
          style={{
            height: 64,
            backgroundColor: COLORS.white,
            borderBottom: `1px solid ${COLORS.gray200}`,
            display: "flex",
            alignItems: "center",
            justifyContent: "space-between",
            padding: "0 32px",
            flexShrink: 0,
            opacity: headerOpacity,
            transform: `translateY(${headerY}px)`,
          }}
        >
          <div
            style={{
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.bold,
              fontSize: 20,
              color: COLORS.navy,
            }}
          >
            {pageTitle}
          </div>
          {headerRight && <div>{headerRight}</div>}
        </div>

        {/* Page content */}
        <div
          style={{
            flex: 1,
            padding: 32,
            overflow: "hidden",
            opacity: contentOpacity,
            transform: `translateY(${contentY}px)`,
          }}
        >
          {children}
        </div>
      </div>
    </div>
  );
};
