import React from "react";
import {
  AbsoluteFill,
  Sequence,
  interpolate,
  useCurrentFrame,
  OffthreadVideo,
  staticFile,
} from "remotion";
import { COLORS, FONT, EASING } from "../theme";

const VIDEOS = [
  { file: "skiing.mp4" },
  { file: "snowboarding.mp4" },
  { file: "mountain-biking.mp4" },
  { file: "hiking.mp4" },
  { file: "jetskiing.mp4" },
  { file: "scuba-diving.mp4" },
  { file: "water-sports.mp4" },
  { file: "sightseeing.mp4" },
];

// Grid layout: 4 columns × 2 rows
const COLS = 4;
const ROWS = 2;
const GAP = 8;
const CELL_W = (1920 - (COLS - 1) * GAP) / COLS;
const CELL_H = (1080 - (ROWS - 1) * GAP) / ROWS;

const getGridPosition = (index: number) => ({
  x: (index % COLS) * (CELL_W + GAP),
  y: Math.floor(index / COLS) * (CELL_H + GAP),
});

const CELL0_CENTER = { x: CELL_W / 2, y: CELL_H / 2 };
const VIEW_CENTER = { x: 960, y: 540 };
const START_SCALE = 1920 / CELL_W;

/* ------------------------------------------------------------------ */
/*  Opening text on dark background                                    */
/* ------------------------------------------------------------------ */
const OpeningText: React.FC = () => {
  const frame = useCurrentFrame();

  const textOpacity = interpolate(frame, [5, 15], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });
  const textScale = interpolate(frame, [5, 15], [0.85, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.spring,
  });
  const textExitOpacity = interpolate(frame, [72, 85], [1, 0], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });

  return (
    <AbsoluteFill
      style={{
        backgroundColor: COLORS.navy,
        display: "flex",
        alignItems: "center",
        justifyContent: "center",
        opacity: textOpacity * textExitOpacity,
        transform: `scale(${textScale})`,
      }}
    >
      <div
        style={{
          fontFamily: FONT.regular,
          fontWeight: FONT.weights.bold,
          fontSize: 68,
          color: COLORS.white,
          textAlign: "center",
          maxWidth: 1200,
          lineHeight: 1.2,
          padding: "0 100px",
        }}
      >
        Whether you rent gear
        <br />
        or run tours —{" "}
        <span style={{ color: COLORS.primary }}>EquipDash is for you</span>
      </div>
    </AbsoluteFill>
  );
};

/* ------------------------------------------------------------------ */
/*  Video grid with zoom-out                                           */
/* ------------------------------------------------------------------ */
const VideoMontage: React.FC = () => {
  const frame = useCurrentFrame();

  // Zoom out from ski (cell 0) to full grid
  const ZOOM_END = 120;

  const scale = interpolate(frame, [0, ZOOM_END], [START_SCALE, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });

  const translateX = interpolate(
    frame,
    [0, ZOOM_END],
    [VIEW_CENTER.x - CELL0_CENTER.x, 0],
    { extrapolateLeft: "clamp", extrapolateRight: "clamp", easing: EASING.easeOut }
  );
  const translateY = interpolate(
    frame,
    [0, ZOOM_END],
    [VIEW_CENTER.y - CELL0_CENTER.y, 0],
    { extrapolateLeft: "clamp", extrapolateRight: "clamp", easing: EASING.easeOut }
  );

  const borderRadius = interpolate(frame, [0, ZOOM_END], [0, 12], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });

  // Per-video opacity: ski always visible, others fade in based on distance
  const getVideoOpacity = (index: number) => {
    if (index === 0) return 1;
    const pos = getGridPosition(index);
    const dist = Math.sqrt(pos.x ** 2 + pos.y ** 2);
    const maxDist = Math.sqrt(
      ((COLS - 1) * (CELL_W + GAP)) ** 2 + ((ROWS - 1) * (CELL_H + GAP)) ** 2
    );
    const normalizedDist = dist / maxDist;
    const appearStart = 15 + normalizedDist * 70;
    return interpolate(frame, [appearStart, appearStart + 25], [0, 1], {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
    });
  };

  return (
    <AbsoluteFill style={{ backgroundColor: "#0a0a0a", overflow: "hidden" }}>
      <div
        style={{
          position: "absolute",
          width: 1920,
          height: 1080,
          transformOrigin: `${CELL0_CENTER.x}px ${CELL0_CENTER.y}px`,
          transform: `translate(${translateX}px, ${translateY}px) scale(${scale})`,
        }}
      >
        {VIDEOS.map((video, i) => {
          const pos = getGridPosition(i);
          const opacity = getVideoOpacity(i);
          return (
            <div
              key={video.file}
              style={{
                position: "absolute",
                left: pos.x,
                top: pos.y,
                width: CELL_W,
                height: CELL_H,
                borderRadius,
                overflow: "hidden",
                opacity,
              }}
            >
              <OffthreadVideo
                src={staticFile(`footage/${video.file}`)}
                style={{
                  width: "100%",
                  height: "100%",
                  objectFit: "cover",
                }}
                muted
              />
            </div>
          );
        })}
      </div>
    </AbsoluteFill>
  );
};

/* ------------------------------------------------------------------ */
/*  Main component                                                     */
/* ------------------------------------------------------------------ */
export const AudienceMontage: React.FC = () => {
  return (
    <AbsoluteFill>
      {/* Phase 1: Text on dark navy background (0-90 frames) */}
      <Sequence from={0} durationInFrames={90} name="Opening Text">
        <OpeningText />
      </Sequence>

      {/* Phase 2: Video grid with zoom-out (85-240 frames) */}
      <Sequence from={85} durationInFrames={155} name="Video Montage">
        <VideoMontage />
      </Sequence>
    </AbsoluteFill>
  );
};
