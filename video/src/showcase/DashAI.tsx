import React from "react";
import { AbsoluteFill, interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";

/* ------------------------------------------------------------------ */
/*  Dash AI — Full cinematic showcase (290 frames)                     */
/*                                                                     */
/*  NOT a web UI screenshot. Apple keynote-level production.           */
/*                                                                     */
/*  Phase 1 (0-80):    Dark background, floating particles,            */
/*                      word-by-word "What if your software could       */
/*                      think?" + pulsing diamond logo                  */
/*  Phase 2 (80-120):  Chat interface materializes, user types message */
/*  Phase 3 (120-175): AI thinking (typing dots, neural network viz),  */
/*                      AI response streams in                         */
/*  Phase 4 (175-250): AI insight cards materialize from response      */
/*  Phase 5: REMOVED                                                   */
/*  Phase 6 (250-290): Final cinematic — "Your operations, on autopilot" */
/* ------------------------------------------------------------------ */

const DARK_BG = "#001832";
const CARD_BG = "#0a1628";

const CLAMP = { extrapolateLeft: "clamp" as const, extrapolateRight: "clamp" as const };

/* ------------------------------------------------------------------ */
/*  Floating Particles                                                 */
/* ------------------------------------------------------------------ */
const PARTICLES = Array.from({ length: 25 }, (_, i) => ({
  x: ((i * 79 + 31) % 1920),
  y: ((i * 137 + 53) % 1080),
  size: 3 + (i % 3),
  speed: 0.3 + (i % 5) * 0.12,
  phase: i * 0.7,
  opacity: 0.15 + (i % 4) * 0.08,
}));

const FloatingParticles: React.FC<{ globalOpacity?: number }> = ({
  globalOpacity = 1,
}) => {
  const frame = useCurrentFrame();
  return (
    <>
      {PARTICLES.map((p, i) => {
        const yOffset = Math.sin(frame * 0.03 * p.speed + p.phase) * 20;
        const xOffset = Math.sin(frame * 0.02 * p.speed + p.phase * 1.3) * 12;
        const floatY = p.y - frame * p.speed * 0.8;
        const wrappedY = ((floatY % 1120) + 1120) % 1120 - 40;
        return (
          <div
            key={i}
            style={{
              position: "absolute",
              left: p.x + xOffset,
              top: wrappedY + yOffset,
              width: p.size,
              height: p.size,
              borderRadius: "50%",
              backgroundColor: COLORS.white,
              opacity: p.opacity * globalOpacity,
              pointerEvents: "none",
            }}
          />
        );
      })}
    </>
  );
};

/* ------------------------------------------------------------------ */
/*  Pulsing AI Diamond Logo                                            */
/* ------------------------------------------------------------------ */
const AIDiamond: React.FC<{ size?: number; frame: number }> = ({
  size = 30,
  frame,
}) => {
  const pulse = 1 + 0.05 * Math.sin(frame * 0.15);
  const gradientRotation = (frame * 3) % 360;
  const id = `aiDiamond_${size}`;
  return (
    <div
      style={{
        transform: `scale(${pulse})`,
        display: "inline-flex",
        alignItems: "center",
        justifyContent: "center",
      }}
    >
      <svg width={size} height={size} viewBox="0 0 120 120" fill="none">
        <defs>
          <linearGradient
            id={id}
            x1="18"
            y1="6"
            x2="102"
            y2="114"
            gradientUnits="userSpaceOnUse"
            gradientTransform={`rotate(${gradientRotation} 60 60)`}
          >
            <stop stopColor={COLORS.aiGradientStart} />
            <stop offset="0.5" stopColor={COLORS.aiGradientMid} />
            <stop offset="1" stopColor={COLORS.aiGradientEnd} />
          </linearGradient>
        </defs>
        <path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill={`url(#${id})`} />
        <path
          d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z"
          fill="white"
        />
        <circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white" />
      </svg>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Typing Dots (bouncing)                                             */
/* ------------------------------------------------------------------ */
const TypingDots: React.FC = () => {
  const frame = useCurrentFrame();
  return (
    <div
      style={{
        display: "flex",
        gap: 8,
        padding: "16px 24px",
        borderRadius: "4px 18px 18px 18px",
        backgroundColor: "rgba(124, 58, 237, 0.15)",
      }}
    >
      {[0, 1, 2].map((i) => {
        const bounce = Math.sin((frame + i * 9) * 0.35);
        return (
          <div
            key={i}
            style={{
              width: 10,
              height: 10,
              borderRadius: "50%",
              backgroundColor: COLORS.aiGradientMid,
              opacity: 0.3 + 0.7 * Math.max(0, bounce),
              transform: `translateY(${-3 * Math.max(0, bounce)}px)`,
            }}
          />
        );
      })}
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Neural Network Visualization                                       */
/* ------------------------------------------------------------------ */
const NEURAL_NODES = [
  { x: 200, y: 140 },
  { x: 350, y: 80 },
  { x: 500, y: 160 },
  { x: 300, y: 240 },
  { x: 450, y: 260 },
  { x: 180, y: 300 },
  { x: 520, y: 320 },
  { x: 380, y: 180 },
  { x: 260, y: 160 },
  { x: 440, y: 120 },
];
const NEURAL_EDGES = [
  [0, 1], [1, 2], [0, 3], [3, 4], [2, 4],
  [5, 3], [4, 6], [7, 8], [7, 9], [1, 7],
  [8, 0], [9, 2], [5, 8], [6, 9], [3, 7],
];

const NeuralNetwork: React.FC<{ opacity: number; localFrame: number }> = ({
  opacity,
  localFrame,
}) => {
  return (
    <svg
      width={700}
      height={400}
      viewBox="0 0 700 400"
      style={{ opacity, position: "absolute", top: 80, left: 100 }}
    >
      {NEURAL_EDGES.map(([a, b], i) => {
        const na = NEURAL_NODES[a];
        const nb = NEURAL_NODES[b];
        const t = ((localFrame * 0.06 + i * 0.15) % 1);
        const dotX = na.x + (nb.x - na.x) * t;
        const dotY = na.y + (nb.y - na.y) * t;
        return (
          <React.Fragment key={i}>
            <line
              x1={na.x}
              y1={na.y}
              x2={nb.x}
              y2={nb.y}
              stroke={COLORS.aiGradientMid}
              strokeWidth="1"
              opacity="0.25"
            />
            <circle
              cx={dotX}
              cy={dotY}
              r="3"
              fill={COLORS.aiGradientEnd}
              opacity="0.8"
            />
          </React.Fragment>
        );
      })}
      {NEURAL_NODES.map((n, i) => {
        const pulse = 1 + 0.2 * Math.sin(localFrame * 0.2 + i);
        return (
          <circle
            key={i}
            cx={n.x}
            cy={n.y}
            r={5 * pulse}
            fill={
              i % 3 === 0
                ? COLORS.aiGradientStart
                : i % 3 === 1
                  ? COLORS.aiGradientMid
                  : COLORS.aiGradientEnd
            }
            opacity="0.7"
          />
        );
      })}
    </svg>
  );
};

/* ------------------------------------------------------------------ */
/*  Main export                                                        */
/* ------------------------------------------------------------------ */
export const DashAI: React.FC = () => {
  const frame = useCurrentFrame();

  /* ================================================================ */
  /*  Phase 1: Opening text + particles (0-80)                         */
  /*  Slower word appearance: ~7 frames per word                       */
  /* ================================================================ */
  const line1Words = ["What", "if", "your", "software"];
  const line2Words = ["could", "think?"];

  const wordOpacity = (wordIndex: number): number =>
    interpolate(frame, [14 + wordIndex * 7, 21 + wordIndex * 7], [0, 1], CLAMP);
  const wordY = (wordIndex: number): number =>
    interpolate(frame, [14 + wordIndex * 7, 22 + wordIndex * 7], [15, 0], {
      ...CLAMP,
      easing: EASING.easeOut,
    });

  // Opening text fade out (shifted to allow more reading time)
  const openingFadeOut = interpolate(frame, [72, 80], [1, 0], {
    ...CLAMP,
    easing: EASING.easeIn,
  });

  // Diamond logo for opening
  const diamondOpacity = interpolate(frame, [50, 58], [0, 1], CLAMP);

  /* ================================================================ */
  /*  Phase 2: Chat interface materializes (80-120)                    */
  /* ================================================================ */
  const chatScale = interpolate(frame, [82, 98], [0.3, 1], {
    ...CLAMP,
    easing: EASING.spring,
  });
  const chatOpacity = interpolate(frame, [82, 92], [0, 1], CLAMP);

  // User message typing
  const USER_MSG = "Show me this week's revenue forecast";
  const userTypingStart = 98;
  const charsPerFrame = 2;
  const userCharCount = Math.round(
    interpolate(
      frame,
      [userTypingStart, userTypingStart + Math.ceil(USER_MSG.length / charsPerFrame)],
      [0, USER_MSG.length],
      CLAMP
    )
  );
  const userDisplayText = USER_MSG.substring(0, userCharCount);
  const userMsgOpacity = interpolate(frame, [96, 100], [0, 1], CLAMP);
  const userCursorBlink = frame % 30 < 15 ? 1 : 0;

  /* ================================================================ */
  /*  Phase 3: AI thinking + response (120-175)                        */
  /* ================================================================ */
  const typingDotsOpacity = interpolate(frame, [120, 124], [0, 1], CLAMP);
  const typingDotsFade = interpolate(frame, [132, 135], [1, 0], CLAMP);

  // Neural network
  const neuralOpacity = interpolate(
    frame,
    [124, 128, 139, 143],
    [0, 0.6, 0.6, 0],
    CLAMP
  );
  const neuralLocalFrame = frame - 124;

  // AI response lines
  const AI_LINES = [
    { text: "Here's your revenue forecast:", bold: false, large: false, green: false },
    { text: "Monday:    $3,240  \u2197 +12%", bold: false, large: false, green: true },
    { text: "Tuesday:   $2,890  \u2197 +5%", bold: false, large: false, green: true },
    { text: "Wednesday: $4,120  \u2197 +18%", bold: false, large: false, green: true },
    { text: "Projected Weekly: $24,500", bold: true, large: true, green: false },
  ];
  const aiResponseOpacity = interpolate(frame, [138, 143], [0, 1], CLAMP);
  const aiLineOpacity = (lineIndex: number): number =>
    interpolate(frame, [143 + lineIndex * 4, 147 + lineIndex * 4], [0, 1], CLAMP);
  const aiLineY = (lineIndex: number): number =>
    interpolate(frame, [143 + lineIndex * 4, 149 + lineIndex * 4], [8, 0], {
      ...CLAMP,
      easing: EASING.easeOut,
    });

  /* ================================================================ */
  /*  Phase 4: AI Insight Cards from Response (175-250)                */
  /*  Chat fades out, 3 insight cards materialize in center            */
  /* ================================================================ */
  const chatFadeOut = interpolate(frame, [175, 190], [1, 0], {
    ...CLAMP,
    easing: EASING.easeIn,
  });

  const INSIGHTS = [
    { label: "Create Booking", value: "Done", detail: "Mountain Bike rental for Emma Scott, Dec 15-18", icon: "calendar", color: COLORS.aiGradientStart },
    { label: "Late Pickup Reminders", value: "23 Sent", detail: "Automated SMS & email to all overdue customers", icon: "bell", color: COLORS.aiGradientMid },
    { label: "Promo Campaign", value: "312 Sent", detail: "Holiday 20% off promo emailed to all past customers", icon: "mail", color: COLORS.aiGradientEnd },
  ];

  const insightEntry = (i: number) => {
    const start = 188 + i * 10;
    const opacity = interpolate(frame, [start, start + 10], [0, 1], CLAMP);
    const y = interpolate(frame, [start, start + 12], [40, 0], { ...CLAMP, easing: EASING.spring });
    const scale = interpolate(frame, [start, start + 12], [0.8, 1], { ...CLAMP, easing: EASING.spring });
    return { opacity, y, scale };
  };

  // Insight cards fade out for Phase 6
  const insightsFadeOut = interpolate(frame, [242, 250], [1, 0], {
    ...CLAMP,
    easing: EASING.easeIn,
  });

  /* ================================================================ */
  /*  Phase 6: Final cinematic (250-290)                               */
  /* ================================================================ */
  const finalLine1Words = ["Your", "operations,"];
  const finalLine2Words = ["on", "autopilot."];

  const finalWordOpacity = (wordIndex: number): number =>
    interpolate(frame, [255 + wordIndex * 4, 260 + wordIndex * 4], [0, 1], CLAMP);
  const finalWordY = (wordIndex: number): number =>
    interpolate(frame, [255 + wordIndex * 4, 262 + wordIndex * 4], [15, 0], {
      ...CLAMP,
      easing: EASING.easeOut,
    });

  // Underline draw
  const underlineWidth = interpolate(frame, [272, 286], [0, 100], {
    ...CLAMP,
    easing: EASING.easeOut,
  });

  // Final diamond
  const finalDiamondScale = interpolate(frame, [278, 288], [0.8, 1], {
    ...CLAMP,
    easing: EASING.spring,
  });
  const finalDiamondOpacity = interpolate(frame, [276, 282], [0, 1], CLAMP);

  return (
    <AbsoluteFill style={{ backgroundColor: DARK_BG }}>
      {/* Floating particles — always present */}
      <FloatingParticles />

      {/* ============================================================= */}
      {/*  Phase 1: Opening text (0-80)                                  */}
      {/* ============================================================= */}
      {frame < 82 && (
        <div
          style={{
            position: "absolute",
            inset: 0,
            display: "flex",
            flexDirection: "column",
            alignItems: "center",
            justifyContent: "center",
            opacity: openingFadeOut,
            zIndex: 10,
          }}
        >
          {/* Line 1: "What if your software" */}
          <div style={{ display: "flex", gap: 18, marginBottom: 8 }}>
            {line1Words.map((word, i) => (
              <span
                key={i}
                style={{
                  fontFamily: FONT.regular,
                  fontWeight: FONT.weights.bold,
                  fontSize: 64,
                  color: COLORS.white,
                  opacity: wordOpacity(i),
                  transform: `translateY(${wordY(i)}px)`,
                  display: "inline-block",
                }}
              >
                {word}
              </span>
            ))}
          </div>
          {/* Line 2: "could think?" */}
          <div style={{ display: "flex", gap: 18, marginBottom: 40 }}>
            {line2Words.map((word, i) => {
              const globalIdx = line1Words.length + i;
              return (
                <span
                  key={i}
                  style={{
                    fontFamily: FONT.regular,
                    fontWeight: FONT.weights.bold,
                    fontSize: 64,
                    color: COLORS.white,
                    opacity: wordOpacity(globalIdx),
                    transform: `translateY(${wordY(globalIdx)}px)`,
                    display: "inline-block",
                  }}
                >
                  {word}
                </span>
              );
            })}
          </div>
          {/* Pulsing diamond */}
          <div style={{ opacity: diamondOpacity }}>
            <AIDiamond size={30} frame={frame} />
          </div>
        </div>
      )}

      {/* ============================================================= */}
      {/*  Phase 2-3: Chat interface (80-175)                            */}
      {/* ============================================================= */}
      {frame >= 80 && frame < 250 && (
        <div
          style={{
            position: "absolute",
            inset: 0,
            display: "flex",
            alignItems: "center",
            justifyContent: "center",
            opacity: chatFadeOut,
            zIndex: 5,
          }}
        >
          <div
            style={{
              transform: `scale(${chatScale})`,
              opacity: chatOpacity,
            }}
          >
            {/* Chat card */}
            <div
              style={{
                width: 1200,
                height: 700,
                borderRadius: 20,
                backgroundColor: COLORS.navy,
                position: "relative",
                overflow: "hidden",
                boxShadow: "0 20px 80px rgba(0,0,0,0.4)",
              }}
            >
              {/* Glowing border effect */}
              <div
                style={{
                  position: "absolute",
                  inset: 0,
                  borderRadius: 20,
                  border: "1px solid transparent",
                  background: `linear-gradient(${COLORS.navy}, ${COLORS.navy}) padding-box, linear-gradient(135deg, ${COLORS.aiGradientStart}, ${COLORS.aiGradientMid}, ${COLORS.aiGradientEnd}) border-box`,
                  pointerEvents: "none",
                  zIndex: 1,
                }}
              />

              {/* Neural network visualization */}
              {frame >= 124 && frame < 144 && (
                <NeuralNetwork
                  opacity={neuralOpacity}
                  localFrame={neuralLocalFrame}
                />
              )}

              {/* Chat content */}
              <div
                style={{
                  position: "relative",
                  zIndex: 2,
                  padding: "32px 40px",
                  height: "100%",
                  display: "flex",
                  flexDirection: "column",
                }}
              >
                {/* Header */}
                <div
                  style={{
                    display: "flex",
                    alignItems: "center",
                    gap: 12,
                    marginBottom: 24,
                    paddingBottom: 20,
                    borderBottom: "1px solid rgba(255,255,255,0.1)",
                  }}
                >
                  <AIDiamond size={32} frame={frame} />
                  <span
                    style={{
                      fontFamily: FONT.regular,
                      fontWeight: FONT.weights.bold,
                      fontSize: 24,
                      color: COLORS.white,
                    }}
                  >
                    Dash AI
                  </span>
                  <div style={{ flex: 1 }} />
                  <div
                    style={{
                      width: 10,
                      height: 10,
                      borderRadius: "50%",
                      backgroundColor: COLORS.green,
                    }}
                  />
                  <span
                    style={{
                      fontFamily: FONT.regular,
                      fontSize: 14,
                      color: "rgba(255,255,255,0.5)",
                    }}
                  >
                    Online
                  </span>
                </div>

                {/* Messages area */}
                <div
                  style={{
                    flex: 1,
                    display: "flex",
                    flexDirection: "column",
                    gap: 18,
                    overflow: "hidden",
                  }}
                >
                  {/* User message bubble */}
                  {frame >= 96 && (
                    <div
                      style={{
                        display: "flex",
                        justifyContent: "flex-end",
                        opacity: userMsgOpacity,
                      }}
                    >
                      <div
                        style={{
                          padding: "18px 28px",
                          borderRadius: "18px 18px 4px 18px",
                          backgroundColor: "rgba(247, 88, 31, 0.15)",
                          border: "1px solid rgba(247, 88, 31, 0.25)",
                          maxWidth: 500,
                          fontFamily: FONT.regular,
                          fontSize: 20,
                          color: COLORS.white,
                          lineHeight: 1.5,
                        }}
                      >
                        {userDisplayText}
                        {userCharCount < USER_MSG.length && (
                          <span
                            style={{
                              display: "inline-block",
                              width: 2,
                              height: 18,
                              backgroundColor: COLORS.primary,
                              marginLeft: 2,
                              verticalAlign: "text-bottom",
                              opacity: userCursorBlink,
                            }}
                          />
                        )}
                      </div>
                    </div>
                  )}

                  {/* Typing dots */}
                  {frame >= 120 && frame < 138 && (
                    <div
                      style={{
                        display: "flex",
                        justifyContent: "flex-start",
                        opacity: typingDotsOpacity * typingDotsFade,
                      }}
                    >
                      <TypingDots />
                    </div>
                  )}

                  {/* AI response */}
                  {frame >= 138 && (
                    <div
                      style={{
                        display: "flex",
                        justifyContent: "flex-start",
                        opacity: aiResponseOpacity,
                      }}
                    >
                      <div
                        style={{
                          padding: "22px 30px",
                          borderRadius: "4px 18px 18px 18px",
                          backgroundColor: "rgba(124, 58, 237, 0.12)",
                          border: "1px solid rgba(124, 58, 237, 0.2)",
                          maxWidth: 560,
                          fontFamily: FONT.regular,
                          fontSize: 19,
                          color: COLORS.white,
                          lineHeight: 1.8,
                        }}
                      >
                        {AI_LINES.map((line, i) => (
                          <div
                            key={i}
                            style={{
                              opacity: aiLineOpacity(i),
                              transform: `translateY(${aiLineY(i)}px)`,
                              fontWeight: line.bold
                                ? FONT.weights.bold
                                : FONT.weights.regular,
                              fontSize: line.large ? 22 : 19,
                              marginTop: i === 4 ? 8 : 0,
                              fontFamily: FONT.regular,
                            }}
                          >
                            {line.green ? (
                              <>
                                <span style={{ color: "rgba(255,255,255,0.8)" }}>
                                  {line.text.split("\u2197")[0]}
                                </span>
                                {line.text.includes("\u2197") && (
                                  <span style={{ color: COLORS.green }}>
                                    {"\u2197"}{line.text.split("\u2197")[1]}
                                  </span>
                                )}
                              </>
                            ) : (
                              <span style={{ color: line.bold ? COLORS.white : "rgba(255,255,255,0.85)" }}>
                                {line.text}
                              </span>
                            )}
                          </div>
                        ))}
                      </div>
                    </div>
                  )}
                </div>
              </div>
            </div>
          </div>
        </div>
      )}

      {/* ============================================================= */}
      {/*  Phase 4: AI Insight Cards (175-250)                           */}
      {/* ============================================================= */}
      {frame >= 185 && frame < 250 && (
        <div
          style={{
            position: "absolute",
            inset: 0,
            display: "flex",
            alignItems: "center",
            justifyContent: "center",
            zIndex: 6,
            opacity: insightsFadeOut,
          }}
        >
          <div
            style={{
              display: "flex",
              flexDirection: "column",
              alignItems: "center",
              gap: 24,
            }}
          >
            {/* Title */}
            <div
              style={{
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.bold,
                fontSize: 28,
                color: COLORS.white,
                opacity: interpolate(frame, [185, 192], [0, 1], CLAMP),
                transform: `translateY(${interpolate(frame, [185, 192], [15, 0], { ...CLAMP, easing: EASING.easeOut })}px)`,
                marginBottom: 16,
                display: "flex",
                alignItems: "center",
                gap: 12,
              }}
            >
              <AIDiamond size={24} frame={frame} />
              AI-Powered Actions
            </div>

            {/* 3 Insight cards */}
            <div style={{ display: "flex", gap: 24 }}>
              {INSIGHTS.map((insight, i) => {
                const ie = insightEntry(i);
                return (
                  <div
                    key={insight.label}
                    style={{
                      width: 320,
                      backgroundColor: CARD_BG,
                      borderRadius: 16,
                      border: `1px solid ${insight.color}30`,
                      padding: "28px 24px",
                      opacity: ie.opacity,
                      transform: `translateY(${ie.y}px) scale(${ie.scale})`,
                      boxShadow: `0 8px 32px rgba(0,0,0,0.3), 0 0 20px ${insight.color}10`,
                      position: "relative",
                      overflow: "hidden",
                    }}
                  >
                    {/* Gradient top accent */}
                    <div
                      style={{
                        position: "absolute",
                        top: 0,
                        left: 0,
                        right: 0,
                        height: 3,
                        backgroundColor: insight.color,
                        opacity: 0.6,
                      }}
                    />

                    {/* Icon */}
                    <div
                      style={{
                        width: 44,
                        height: 44,
                        borderRadius: 12,
                        backgroundColor: `${insight.color}18`,
                        display: "flex",
                        alignItems: "center",
                        justifyContent: "center",
                        marginBottom: 16,
                      }}
                    >
                      {insight.icon === "calendar" && (
                        <svg width={22} height={22} viewBox="0 0 22 22" fill="none">
                          <rect x="3" y="4" width="16" height="15" rx="2" stroke={insight.color} strokeWidth="1.5" />
                          <path d="M3 9h16" stroke={insight.color} strokeWidth="1" />
                          <path d="M7 2v3M15 2v3" stroke={insight.color} strokeWidth="1.5" strokeLinecap="round" />
                        </svg>
                      )}
                      {insight.icon === "bell" && (
                        <svg width={22} height={22} viewBox="0 0 22 22" fill="none">
                          <path d="M11 2a1.5 1.5 0 011.5 1.5v.34A5.5 5.5 0 0116.5 9v3l1.5 2H4l1.5-2V9a5.5 5.5 0 014-5.16V3.5A1.5 1.5 0 0111 2z" stroke={insight.color} strokeWidth="1.5" strokeLinejoin="round" />
                          <path d="M9 16a2 2 0 004 0" stroke={insight.color} strokeWidth="1.5" strokeLinecap="round" />
                          <circle cx="16" cy="4" r="2.5" fill={insight.color} />
                        </svg>
                      )}
                      {insight.icon === "mail" && (
                        <svg width={22} height={22} viewBox="0 0 22 22" fill="none">
                          <rect x="2" y="5" width="18" height="13" rx="2" stroke={insight.color} strokeWidth="1.5" />
                          <path d="M2 7l9 5.5L20 7" stroke={insight.color} strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
                        </svg>
                      )}
                    </div>

                    {/* Label */}
                    <div
                      style={{
                        fontFamily: FONT.regular,
                        fontSize: 13,
                        color: COLORS.gray400,
                        textTransform: "uppercase",
                        letterSpacing: 1,
                        marginBottom: 8,
                      }}
                    >
                      {insight.label}
                    </div>

                    {/* Value */}
                    <div
                      style={{
                        fontFamily: FONT.regular,
                        fontWeight: FONT.weights.bold,
                        fontSize: 36,
                        color: COLORS.white,
                        marginBottom: 8,
                      }}
                    >
                      {insight.value}
                    </div>

                    {/* Detail */}
                    <div
                      style={{
                        fontFamily: FONT.regular,
                        fontSize: 14,
                        color: COLORS.gray400,
                        lineHeight: 1.4,
                      }}
                    >
                      {insight.detail}
                    </div>
                  </div>
                );
              })}
            </div>
          </div>
        </div>
      )}

      {/* ============================================================= */}
      {/*  Phase 6: Final cinematic (250-290)                            */}
      {/* ============================================================= */}
      {frame >= 250 && (
        <div
          style={{
            position: "absolute",
            inset: 0,
            display: "flex",
            flexDirection: "column",
            alignItems: "center",
            justifyContent: "center",
            zIndex: 20,
          }}
        >
          {/* Line 1: "Your operations," */}
          <div style={{ display: "flex", gap: 18, marginBottom: 8 }}>
            {finalLine1Words.map((word, i) => (
              <span
                key={i}
                style={{
                  fontFamily: FONT.regular,
                  fontWeight: FONT.weights.bold,
                  fontSize: 68,
                  color: COLORS.white,
                  opacity: finalWordOpacity(i),
                  transform: `translateY(${finalWordY(i)}px)`,
                  display: "inline-block",
                }}
              >
                {word}
              </span>
            ))}
          </div>
          {/* Line 2: "on autopilot." */}
          <div style={{ position: "relative", display: "flex", gap: 18, marginBottom: 50 }}>
            {finalLine2Words.map((word, i) => {
              const globalIdx = finalLine1Words.length + i;
              return (
                <span
                  key={i}
                  style={{
                    fontFamily: FONT.regular,
                    fontWeight: FONT.weights.bold,
                    fontSize: 68,
                    color: COLORS.primary,
                    opacity: finalWordOpacity(globalIdx),
                    transform: `translateY(${finalWordY(globalIdx)}px)`,
                    display: "inline-block",
                  }}
                >
                  {word}
                </span>
              );
            })}
            {/* Orange underline */}
            <div
              style={{
                position: "absolute",
                bottom: -8,
                left: 0,
                width: `${underlineWidth}%`,
                height: 4,
                backgroundColor: COLORS.primary,
                borderRadius: 2,
                boxShadow: `0 0 12px rgba(247, 88, 31, 0.5)`,
              }}
            />
          </div>
          {/* Final diamond pulse */}
          <div
            style={{
              opacity: finalDiamondOpacity,
              transform: `scale(${finalDiamondScale})`,
            }}
          >
            <AIDiamond size={36} frame={frame} />
          </div>
        </div>
      )}
    </AbsoluteFill>
  );
};
