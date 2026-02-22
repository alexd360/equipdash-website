import React from "react";
import { AbsoluteFill, interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";
import { AppMockup } from "../components/AppMockup";
import { StatusBadge } from "../components/StatusBadge";

/* ------------------------------------------------------------------ */
/*  Workshop Maintenance — "Scan → Check → Workshop → Kanban"          */
/*                                                                     */
/*  Duration: 290 frames                                               */
/*  Phase 1 (0-80):    Full-screen barcode scanner (no AppMockup)      */
/*  Phase 2 (80-140):  Check Availability timeline view                */
/*  Phase 3 (140-198): Maintenance form modal                          */
/*  Phase 4 (195-290): Workshop Kanban board                           */
/* ------------------------------------------------------------------ */

const CLAMP = { extrapolateLeft: "clamp" as const, extrapolateRight: "clamp" as const };

/* ---- Helper: type-out text ---- */
const typedText = (text: string, frame: number, startFrame: number, charsPerFrame: number = 0.6): string => {
  const elapsed = Math.max(0, frame - startFrame);
  const charCount = Math.min(text.length, Math.floor(elapsed * charsPerFrame));
  return text.substring(0, charCount);
};

/* ---- Realistic Code 128 barcode bar pattern ---- */
const BARCODE_BARS: Array<{ x: number; w: number }> = (() => {
  // Realistic Code 128 style pattern: alternating thick(4px) and thin(2px) bars
  // with varying gaps, spanning ~200px width
  const pattern = [
    // Start code
    { x: 0, w: 4 }, { x: 6, w: 2 }, { x: 10, w: 2 }, { x: 14, w: 4 },
    // Data bars
    { x: 22, w: 2 }, { x: 26, w: 4 }, { x: 32, w: 2 }, { x: 36, w: 2 },
    { x: 40, w: 4 }, { x: 46, w: 2 }, { x: 50, w: 2 }, { x: 54, w: 4 },
    { x: 60, w: 2 }, { x: 64, w: 2 }, { x: 68, w: 4 }, { x: 74, w: 2 },
    { x: 78, w: 4 }, { x: 84, w: 2 }, { x: 88, w: 2 }, { x: 92, w: 4 },
    { x: 98, w: 2 }, { x: 102, w: 2 }, { x: 106, w: 4 }, { x: 112, w: 2 },
    { x: 116, w: 4 }, { x: 122, w: 2 }, { x: 126, w: 2 }, { x: 130, w: 4 },
    { x: 136, w: 2 }, { x: 140, w: 2 }, { x: 144, w: 4 }, { x: 150, w: 2 },
    { x: 154, w: 4 }, { x: 160, w: 2 }, { x: 164, w: 2 }, { x: 168, w: 4 },
    { x: 174, w: 2 }, { x: 178, w: 2 }, { x: 182, w: 4 },
    // Stop code
    { x: 190, w: 4 }, { x: 196, w: 2 }, { x: 200, w: 4 },
  ];
  return pattern;
})();

/* ------------------------------------------------------------------ */
/*  Phase 1: Barcode Scanner (Full-screen, no AppMockup)               */
/* ------------------------------------------------------------------ */
const BarcodeScanner: React.FC = () => {
  const frame = useCurrentFrame();

  /* Viewfinder border animation */
  const borderOpacity = interpolate(frame, [0, 8], [0, 1], CLAMP);
  const borderScale = interpolate(frame, [0, 10], [1.05, 1], { ...CLAMP, easing: EASING.easeOut });

  /* Scan line: sweeps slowly over barcode area, 2 full sweeps before scan complete
     Sweep 1: frames 5-30 (25 frames per sweep)
     Sweep 2: frames 30-55 (25 frames per sweep)
     Scan completes at frame 60 */
  const showScanLine = frame >= 5 && frame < 58;
  const sweepDuration = 26;
  const sweepFrame = frame >= 5 ? (frame - 5) % sweepDuration : 0;
  const scanPercent = sweepFrame / sweepDuration;

  /* Barcode visibility: stays visible until scan complete */
  const barcodeOpacity = frame < 60 ? 0.85 : interpolate(frame, [60, 65], [0.85, 0], CLAMP);

  /* Red glow around barcode as scan line passes */
  const glowIntensity = showScanLine ? interpolate(
    scanPercent,
    [0.1, 0.3, 0.5, 0.7, 0.9],
    [0, 0.3, 0.5, 0.3, 0],
    CLAMP
  ) : 0;

  /* Flash at frame 60 */
  const flashOpacity = interpolate(frame, [60, 63, 66], [0, 0.85, 0], CLAMP);

  /* Item identification card slides up */
  const cardY = interpolate(frame, [63, 75], [300, 0], { ...CLAMP, easing: EASING.spring });
  const cardOpacity = interpolate(frame, [63, 70], [0, 1], CLAMP);

  /* Exit: scale down — starts earlier to overlap with availability */
  const exitScale = interpolate(frame, [68, 76], [1, 0.85], { ...CLAMP, easing: EASING.easeIn });
  const exitOpacity = interpolate(frame, [68, 76], [1, 0], { ...CLAMP, easing: EASING.easeIn });

  /* Barcode area dimensions (for scan line constraint) */
  const barcodeAreaTop = 120; /* relative to viewfinder */
  const barcodeAreaHeight = 140;

  return (
    <AbsoluteFill
      style={{
        backgroundColor: "#0a0a0a",
        display: "flex",
        alignItems: "center",
        justifyContent: "center",
        transform: `scale(${exitScale})`,
        opacity: exitOpacity,
      }}
    >
      {/* Viewfinder frame */}
      <div
        style={{
          width: 600,
          height: 400,
          borderRadius: 16,
          border: `2px solid rgba(255,255,255,${borderOpacity * 0.8})`,
          position: "relative",
          overflow: "hidden",
          transform: `scale(${borderScale})`,
        }}
      >
        {/* Simulated camera feed (gray tint) */}
        <div
          style={{
            position: "absolute",
            inset: 0,
            backgroundColor: "rgba(255,255,255,0.03)",
            borderRadius: 14,
          }}
        />

        {/* Corner brackets */}
        {[
          { top: -1, left: -1 },
          { top: -1, right: -1 },
          { bottom: -1, left: -1 },
          { bottom: -1, right: -1 },
        ].map((pos, i) => (
          <div
            key={i}
            style={{
              position: "absolute",
              ...pos,
              width: 40,
              height: 40,
              borderColor: COLORS.white,
              borderWidth: 0,
              ...(i === 0 ? { borderTopWidth: 3, borderLeftWidth: 3, borderTopLeftRadius: 16 } : {}),
              ...(i === 1 ? { borderTopWidth: 3, borderRightWidth: 3, borderTopRightRadius: 16 } : {}),
              ...(i === 2 ? { borderBottomWidth: 3, borderLeftWidth: 3, borderBottomLeftRadius: 16 } : {}),
              ...(i === 3 ? { borderBottomWidth: 3, borderRightWidth: 3, borderBottomRightRadius: 16 } : {}),
              borderStyle: "solid",
              opacity: borderOpacity,
            }}
          />
        ))}

        {/* Realistic barcode in center */}
        <div
          style={{
            position: "absolute",
            top: "50%",
            left: "50%",
            transform: "translate(-50%, -50%)",
            display: "flex",
            flexDirection: "column",
            alignItems: "center",
            gap: 8,
            opacity: barcodeOpacity,
          }}
        >
          {/* Red glow behind barcode during scanning */}
          {glowIntensity > 0 && (
            <div
              style={{
                position: "absolute",
                top: -12,
                left: -16,
                right: -16,
                bottom: -8,
                borderRadius: 8,
                backgroundColor: `rgba(255, 51, 51, ${glowIntensity * 0.12})`,
                border: `1px solid rgba(255, 51, 51, ${glowIntensity * 0.3})`,
                boxShadow: `0 0 20px rgba(255, 51, 51, ${glowIntensity * 0.2}), inset 0 0 15px rgba(255, 51, 51, ${glowIntensity * 0.08})`,
                pointerEvents: "none",
              }}
            />
          )}
          <svg width={200} height={100} viewBox="0 0 204 100" fill="none">
            {/* Barcode bars — realistic Code 128 pattern */}
            {BARCODE_BARS.map((bar, i) => (
              <rect
                key={i}
                x={bar.x}
                y={4}
                width={bar.w}
                height={76}
                fill="rgba(255,255,255,0.9)"
                rx={0}
              />
            ))}
            {/* Number below barcode */}
            <text
              x="102"
              y="96"
              textAnchor="middle"
              fill="rgba(255,255,255,0.7)"
              fontSize="14"
              fontFamily="'Courier New', Courier, monospace"
              fontWeight="bold"
              letterSpacing="2"
            >
              EQG7180-325
            </text>
          </svg>
        </div>

        {/* Red laser scan line — sweeps over barcode area only */}
        {showScanLine && (
          <div
            style={{
              position: "absolute",
              left: 140,
              right: 140,
              top: barcodeAreaTop + scanPercent * barcodeAreaHeight,
              height: 2,
              backgroundColor: "#FF3333",
              boxShadow: "0 0 12px 4px rgba(255,51,51,0.5), 0 0 30px 8px rgba(255,51,51,0.2)",
              borderRadius: 1,
            }}
          />
        )}

        {/* Scan stopped indicator (after frame 60) */}
        {frame >= 60 && frame < 75 && (
          <div
            style={{
              position: "absolute",
              top: "50%",
              left: "50%",
              transform: "translate(-50%, -50%)",
              width: 60,
              height: 60,
              borderRadius: 30,
              backgroundColor: "rgba(38,175,81,0.15)",
              display: "flex",
              alignItems: "center",
              justifyContent: "center",
              opacity: interpolate(frame, [61, 65], [0, 1], CLAMP),
            }}
          >
            <svg width={30} height={30} viewBox="0 0 30 30" fill="none">
              <path d="M8 15l5 5L22 10" stroke={COLORS.green} strokeWidth="3" strokeLinecap="round" strokeLinejoin="round" />
            </svg>
          </div>
        )}
      </div>

      {/* White flash */}
      {flashOpacity > 0 && (
        <AbsoluteFill
          style={{
            backgroundColor: COLORS.white,
            opacity: flashOpacity,
            pointerEvents: "none",
          }}
        />
      )}

      {/* Item identification card */}
      {frame >= 63 && (
        <div
          style={{
            position: "absolute",
            bottom: 80,
            left: "50%",
            transform: `translateX(-50%) translateY(${cardY}px)`,
            opacity: cardOpacity,
            width: 500,
            backgroundColor: COLORS.white,
            borderRadius: 16,
            padding: "24px 28px",
            boxShadow: "0 16px 48px rgba(0,0,0,0.4)",
          }}
        >
          <div style={{ display: "flex", alignItems: "flex-start", justifyContent: "space-between" }}>
            <div>
              <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 20, color: COLORS.navy }}>
                Mountain Bike #325
              </div>
              <div style={{ fontFamily: FONT.regular, fontSize: 14, color: COLORS.gray400, marginTop: 4 }}>
                Trail Pro &bull; SKU: EQG7180
              </div>
              <div style={{ fontFamily: FONT.regular, fontSize: 13, color: COLORS.gray400, marginTop: 6 }}>
                <svg width={12} height={12} viewBox="0 0 12 12" fill="none" style={{ verticalAlign: "middle", marginRight: 5 }}>
                  <path d="M6 1C3.8 1 2 2.8 2 5c0 3 4 6 4 6s4-3 4-6c0-2.2-1.8-4-4-4z" stroke={COLORS.gray400} strokeWidth="1" fill="none" />
                  <circle cx="6" cy="5" r="1.2" fill={COLORS.gray400} />
                </svg>
                Location: Store A -- Rack 12
              </div>
            </div>
            <StatusBadge status="active" label="Good" fontSize={12} />
          </div>
        </div>
      )}

      {/* "Scanning..." text at top */}
      {frame < 60 && (
        <div
          style={{
            position: "absolute",
            top: 120,
            fontFamily: FONT.regular,
            fontWeight: FONT.weights.medium,
            fontSize: 16,
            color: "rgba(255,255,255,0.5)",
            letterSpacing: 1,
          }}
        >
          Scanning...
        </div>
      )}
      {frame >= 60 && frame < 75 && (
        <div
          style={{
            position: "absolute",
            top: 120,
            fontFamily: FONT.regular,
            fontWeight: FONT.weights.semibold,
            fontSize: 16,
            color: COLORS.green,
            letterSpacing: 0.5,
            opacity: interpolate(frame, [60, 65], [0, 1], CLAMP),
          }}
        >
          Item Identified
        </div>
      )}
    </AbsoluteFill>
  );
};

/* ------------------------------------------------------------------ */
/*  Phase 2: Check Availability                                        */
/* ------------------------------------------------------------------ */
const CheckAvailability: React.FC = () => {
  const frame = useCurrentFrame();

  /* Entry — shifted earlier to overlap with scanner exit */
  const viewOpacity = interpolate(frame, [70, 80], [0, 1], CLAMP);
  const viewY = interpolate(frame, [70, 80], [20, 0], { ...CLAMP, easing: EASING.easeOut });

  /* Header entry */
  const headerOpacity = interpolate(frame, [72, 80], [0, 1], CLAMP);

  /* Calendar strip entry */
  const stripOpacity = interpolate(frame, [76, 84], [0, 1], CLAMP);

  /* Booked blocks fade in */
  const bookedBlock1Opacity = interpolate(frame, [85, 92], [0, 1], CLAMP);
  const bookedBlock2Opacity = interpolate(frame, [90, 97], [0, 1], CLAMP);

  /* Available badge */
  const availBadgeScale = interpolate(frame, [95, 103], [0, 1], { ...CLAMP, easing: EASING.spring });

  /* Info row */
  const infoOpacity = interpolate(frame, [100, 108], [0, 1], CLAMP);

  /* Button appears */
  const buttonOpacity = interpolate(frame, [108, 118], [0, 1], CLAMP);
  const buttonScale = interpolate(frame, [118, 123], [1, 0.92], { ...CLAMP, easing: EASING.easeIn });
  const buttonScaleBack = interpolate(frame, [123, 126], [0.92, 1], { ...CLAMP, easing: EASING.easeOut });
  const finalButtonScale = frame < 123 ? 1 : frame < 126 ? buttonScale : buttonScaleBack;

  const days = Array.from({ length: 14 }, (_, i) => i + 1);
  const bookedDays1 = [2, 3, 4];
  const bookedDays2 = [8, 9, 10];

  return (
    <div
      style={{
        opacity: viewOpacity,
        transform: `translateY(${viewY}px)`,
        display: "flex",
        flexDirection: "column",
        gap: 20,
      }}
    >
      {/* Header */}
      <div style={{ opacity: headerOpacity }}>
        <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 20, color: COLORS.navy }}>
          Mountain Bike #325 -- Availability
        </div>
        <div style={{ fontFamily: FONT.regular, fontSize: 13, color: COLORS.gray400, marginTop: 4 }}>
          Trail Pro &bull; SKU: EQG7180
        </div>
      </div>

      {/* 14-day calendar strip */}
      <div
        style={{
          backgroundColor: COLORS.white,
          borderRadius: 12,
          border: `1px solid ${COLORS.gray200}`,
          padding: "18px 20px",
          opacity: stripOpacity,
        }}
      >
        <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.semibold, fontSize: 14, color: COLORS.navy, marginBottom: 14 }}>
          Next 14 Days
        </div>
        <div style={{ display: "flex", gap: 6 }}>
          {days.map((day) => {
            const isBooked1 = bookedDays1.includes(day);
            const isBooked2 = bookedDays2.includes(day);
            const isToday = day === 1;
            const bookedOpacity = isBooked1 ? bookedBlock1Opacity : isBooked2 ? bookedBlock2Opacity : 0;
            const isBooked = isBooked1 || isBooked2;

            return (
              <div
                key={day}
                style={{
                  width: 80,
                  height: 52,
                  borderRadius: 8,
                  backgroundColor: isBooked ? `rgba(37, 99, 235, ${bookedOpacity * 0.12})` : COLORS.gray50,
                  border: isToday
                    ? `2px solid ${COLORS.primary}`
                    : isBooked
                      ? `1.5px solid rgba(37, 99, 235, ${bookedOpacity * 0.4})`
                      : `1px solid ${COLORS.gray200}`,
                  display: "flex",
                  flexDirection: "column",
                  alignItems: "center",
                  justifyContent: "center",
                }}
              >
                <div
                  style={{
                    fontFamily: FONT.regular,
                    fontWeight: FONT.weights.semibold,
                    fontSize: 15,
                    color: isBooked ? COLORS.confirmed : COLORS.gray700,
                  }}
                >
                  {day}
                </div>
                {isBooked && bookedOpacity > 0.5 && (
                  <div style={{ fontFamily: FONT.regular, fontSize: 8, color: COLORS.confirmed, marginTop: 1 }}>
                    Booked
                  </div>
                )}
                {isToday && (
                  <div style={{ fontFamily: FONT.regular, fontSize: 8, color: COLORS.primary, marginTop: 1 }}>
                    Today
                  </div>
                )}
              </div>
            );
          })}
        </div>
      </div>

      {/* Available Now badge */}
      <div style={{ display: "flex", alignItems: "center", gap: 16 }}>
        <div
          style={{
            display: "inline-flex",
            alignItems: "center",
            gap: 8,
            padding: "12px 24px",
            borderRadius: 10,
            backgroundColor: COLORS.greenLight,
            border: `1.5px solid ${COLORS.greenBorder}`,
            transform: `scale(${availBadgeScale})`,
          }}
        >
          <svg width={18} height={18} viewBox="0 0 18 18" fill="none">
            <circle cx="9" cy="9" r="8" stroke={COLORS.green} strokeWidth="1.5" />
            <path d="M5.5 9l2.5 2.5L12.5 6" stroke={COLORS.green} strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
          </svg>
          <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 16, color: COLORS.greenDark }}>
            Available Now
          </span>
        </div>
      </div>

      {/* Info row */}
      <div
        style={{
          display: "flex",
          gap: 24,
          alignItems: "center",
          opacity: infoOpacity,
        }}
      >
        {[
          { icon: "chart", label: "47 Total Rentals" },
          { icon: "wrench", label: "Last Service: Nov 28" },
          { icon: "check", label: "Condition: Good" },
        ].map((item) => (
          <div key={item.label} style={{ display: "flex", alignItems: "center", gap: 6 }}>
            <svg width={14} height={14} viewBox="0 0 14 14" fill="none">
              {item.icon === "chart" && (
                <>
                  <rect x="1" y="8" width="3" height="5" rx=".5" fill={COLORS.gray400} />
                  <rect x="5.5" y="5" width="3" height="8" rx=".5" fill={COLORS.gray400} />
                  <rect x="10" y="2" width="3" height="11" rx=".5" fill={COLORS.gray400} />
                </>
              )}
              {item.icon === "wrench" && (
                <path d="M2 12l4-4 2 2-4 4-2-2zM8.5 5.5L10 4l3 1-1-3-1.5 1.5" stroke={COLORS.gray400} strokeWidth="1" strokeLinecap="round" strokeLinejoin="round" />
              )}
              {item.icon === "check" && (
                <>
                  <circle cx="7" cy="7" r="6" stroke={COLORS.gray400} strokeWidth="1" />
                  <path d="M4 7l2 2 4-4" stroke={COLORS.gray400} strokeWidth="1" strokeLinecap="round" strokeLinejoin="round" />
                </>
              )}
            </svg>
            <span style={{ fontFamily: FONT.regular, fontSize: 13, color: COLORS.gray500 }}>
              {item.label}
            </span>
          </div>
        ))}
      </div>

      {/* Send to Workshop button */}
      <div
        style={{
          display: "inline-flex",
          opacity: buttonOpacity,
        }}
      >
        <div
          style={{
            padding: "12px 28px",
            borderRadius: 10,
            backgroundColor: COLORS.primary,
            fontFamily: FONT.regular,
            fontWeight: FONT.weights.semibold,
            fontSize: 15,
            color: COLORS.white,
            cursor: "pointer",
            transform: `scale(${finalButtonScale})`,
            boxShadow: "0 2px 8px rgba(247,88,31,0.3)",
          }}
        >
          Send to Workshop
        </div>
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Phase 3: Maintenance Form Modal                                    */
/* ------------------------------------------------------------------ */
const MaintenanceModal: React.FC = () => {
  const frame = useCurrentFrame();

  /* Backdrop dim */
  const dimOpacity = interpolate(frame, [140, 148], [0, 0.5], CLAMP);
  /* Modal entry */
  const modalScale = interpolate(frame, [142, 152], [0.9, 1], { ...CLAMP, easing: EASING.spring });
  const modalOpacity = interpolate(frame, [142, 150], [0, 1], CLAMP);
  /* Modal exit */
  const modalExitOpacity = interpolate(frame, [188, 195], [1, 0], { ...CLAMP, easing: EASING.easeIn });
  const modalExitScale = interpolate(frame, [188, 195], [1, 0.95], { ...CLAMP, easing: EASING.easeIn });

  /* Field stagger */
  const fieldEntry = (index: number) => {
    const start = 150 + index * 5;
    const opacity = interpolate(frame, [start, start + 7], [0, 1], CLAMP);
    const y = interpolate(frame, [start, start + 7], [10, 0], { ...CLAMP, easing: EASING.easeOut });
    return { opacity, y };
  };

  /* Notes typing */
  const notesText = typedText("Front brake squeaking on descents", frame, 178, 0.8);

  /* Create Job button */
  const btnOpacity = interpolate(frame, [183, 188], [0, 1], CLAMP);

  const LABEL_STYLE: React.CSSProperties = {
    fontFamily: FONT.regular,
    fontWeight: FONT.weights.medium,
    fontSize: 13,
    color: COLORS.gray700,
    marginBottom: 6,
  };

  const VALUE_STYLE: React.CSSProperties = {
    padding: "10px 14px",
    borderRadius: 8,
    border: `1px solid ${COLORS.gray200}`,
    backgroundColor: COLORS.white,
    fontFamily: FONT.regular,
    fontSize: 14,
    color: COLORS.gray900,
  };

  const isVisible = frame >= 140 && frame <= 198;
  if (!isVisible) return null;

  return (
    <AbsoluteFill>
      {/* Backdrop */}
      <AbsoluteFill
        style={{
          backgroundColor: `rgba(0,0,0,${dimOpacity})`,
          opacity: modalExitOpacity,
        }}
      />
      {/* Modal card */}
      <div
        style={{
          position: "absolute",
          top: "50%",
          left: "50%",
          transform: `translate(-50%, -50%) scale(${modalScale * modalExitScale})`,
          width: 600,
          backgroundColor: COLORS.white,
          borderRadius: 16,
          padding: "28px 32px 32px",
          boxShadow: "0 24px 64px rgba(0,0,0,0.2)",
          opacity: modalOpacity * modalExitOpacity,
        }}
      >
        {/* Modal header */}
        <div
          style={{
            display: "flex",
            justifyContent: "space-between",
            alignItems: "center",
            marginBottom: 24,
            paddingBottom: 16,
            borderBottom: `1px solid ${COLORS.gray100}`,
          }}
        >
          <div>
            <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 20, color: COLORS.navy }}>
              Create Workshop Job
            </div>
            <div style={{ fontFamily: FONT.regular, fontSize: 13, color: COLORS.gray400, marginTop: 3 }}>
              Mountain Bike #325
            </div>
          </div>
          <svg width={20} height={20} viewBox="0 0 20 20" fill="none" style={{ cursor: "pointer" }}>
            <path d="M6 6l8 8M14 6l-8 8" stroke={COLORS.gray400} strokeWidth="1.5" strokeLinecap="round" />
          </svg>
        </div>

        {/* Service Required */}
        <div style={{ marginBottom: 16, opacity: fieldEntry(0).opacity, transform: `translateY(${fieldEntry(0).y}px)` }}>
          <div style={LABEL_STYLE}>Service Required</div>
          <div style={{ ...VALUE_STYLE, display: "flex", justifyContent: "space-between", alignItems: "center" }}>
            <span>Brake Adjustment</span>
            <svg width={12} height={12} viewBox="0 0 12 12" fill="none">
              <path d="M3 5l3 3 3-3" stroke={COLORS.gray400} strokeWidth="1.5" strokeLinecap="round" />
            </svg>
          </div>
        </div>

        {/* Priority */}
        <div style={{ marginBottom: 16, opacity: fieldEntry(1).opacity, transform: `translateY(${fieldEntry(1).y}px)` }}>
          <div style={LABEL_STYLE}>Priority</div>
          <div style={{ ...VALUE_STYLE, display: "flex", alignItems: "center", gap: 10 }}>
            <span>Medium</span>
            <StatusBadge status="reserved" label="Medium" fontSize={11} />
          </div>
        </div>

        {/* Assigned To */}
        <div style={{ marginBottom: 16, opacity: fieldEntry(2).opacity, transform: `translateY(${fieldEntry(2).y}px)` }}>
          <div style={LABEL_STYLE}>Assigned To</div>
          <div style={{ ...VALUE_STYLE, display: "flex", alignItems: "center", gap: 10 }}>
            <div
              style={{
                width: 26,
                height: 26,
                borderRadius: 13,
                backgroundColor: COLORS.primary,
                display: "flex",
                alignItems: "center",
                justifyContent: "center",
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.bold,
                fontSize: 10,
                color: COLORS.white,
              }}
            >
              MT
            </div>
            <span>Mike Torres</span>
          </div>
        </div>

        {/* Estimated Time */}
        <div style={{ marginBottom: 16, opacity: fieldEntry(3).opacity, transform: `translateY(${fieldEntry(3).y}px)` }}>
          <div style={LABEL_STYLE}>Estimated Time</div>
          <div style={VALUE_STYLE}>2 hours</div>
        </div>

        {/* Notes */}
        <div style={{ marginBottom: 24, opacity: fieldEntry(4).opacity, transform: `translateY(${fieldEntry(4).y}px)` }}>
          <div style={LABEL_STYLE}>Notes</div>
          <div
            style={{
              ...VALUE_STYLE,
              minHeight: 50,
              display: "flex",
              alignItems: "flex-start",
            }}
          >
            {notesText}
            {frame >= 178 && frame < 195 && (
              <span style={{ borderRight: `2px solid ${COLORS.primary}`, marginLeft: 1 }} />
            )}
          </div>
        </div>

        {/* Create Job button */}
        <div
          style={{
            padding: "13px 0",
            borderRadius: 10,
            backgroundColor: COLORS.primary,
            textAlign: "center",
            fontFamily: FONT.regular,
            fontWeight: FONT.weights.semibold,
            fontSize: 15,
            color: COLORS.white,
            opacity: btnOpacity,
            boxShadow: "0 2px 8px rgba(247,88,31,0.3)",
          }}
        >
          Create Job
        </div>
      </div>
    </AbsoluteFill>
  );
};

/* ------------------------------------------------------------------ */
/*  Phase 4: Workshop Kanban Board                                     */
/* ------------------------------------------------------------------ */
const KANBAN_COLUMNS = [
  {
    title: "Queued",
    color: COLORS.gray400,
    items: [
      { id: "bike325", name: "Mountain Bike #325", service: "Brake Adjustment", assignee: "MT", priority: "Medium" },
      { id: "kayak67", name: "Kayak #067", service: "Hull Repair", assignee: "JC", priority: "Low" },
    ],
  },
  {
    title: "In Progress",
    color: COLORS.confirmed,
    items: [
      { id: "ebike142", name: "E-Bike #142", service: "Battery Check", assignee: "SW", priority: "High" },
    ],
  },
  {
    title: "Completed",
    color: COLORS.green,
    items: [
      { id: "surf201", name: "Surfboard #201", service: "Fin Replacement", assignee: "MT", priority: "Medium" },
      { id: "ski045", name: "Ski Set #045", service: "Edge Sharpening", assignee: "JC", priority: "Low" },
      { id: "tent112", name: "Tent #112", service: "Zipper Repair", assignee: "SW", priority: "Low" },
    ],
  },
];

const CHECKLIST_ITEMS = ["Inspect pads", "Replace pads", "Test brakes"];

const KanbanBoard: React.FC = () => {
  const frame = useCurrentFrame();

  /* Board entry */
  const boardOpacity = interpolate(frame, [195, 205], [0, 1], CLAMP);
  const boardY = interpolate(frame, [195, 205], [20, 0], { ...CLAMP, easing: EASING.easeOut });

  /* Column stagger */
  const colEntry = (i: number) => {
    const start = 198 + i * 4;
    const opacity = interpolate(frame, [start, start + 8], [0, 1], CLAMP);
    const y = interpolate(frame, [start, start + 8], [15, 0], { ...CLAMP, easing: EASING.easeOut });
    return { opacity, y };
  };

  /* Card stagger within columns */
  const cardEntry = (colIdx: number, cardIdx: number) => {
    const start = 202 + colIdx * 4 + cardIdx * 3;
    const opacity = interpolate(frame, [start, start + 6], [0, 1], CLAMP);
    const scale = interpolate(frame, [start, start + 6], [0.92, 1], { ...CLAMP, easing: EASING.spring });
    return { opacity, scale };
  };

  /* Bike #325 card movement: Queued → In Progress */
  const bikeCardSlide = interpolate(frame, [218, 245], [0, 1], { ...CLAMP, easing: EASING.spring });
  const isBikeMoving = frame >= 218;

  /* Card highlight before moving */
  const bikeHighlight = interpolate(frame, [213, 218], [0, 1], CLAMP);

  /* Checklist items */
  const checkItem = (i: number) => {
    const start = 248 + i * 4;
    const opacity = interpolate(frame, [start, start + 5], [0, 1], CLAMP);
    const scale = interpolate(frame, [start, start + 5], [0.5, 1], { ...CLAMP, easing: EASING.spring });
    return { opacity, scale };
  };

  /* Progress bar in card */
  const progressPercent = interpolate(frame, [248, 254, 260, 270], [0, 33, 66, 100], CLAMP);

  /* Status morph */
  const statusMorph = interpolate(frame, [270, 278], [0, 1], { ...CLAMP, easing: EASING.spring });
  const isComplete = statusMorph > 0.5;

  /* Green flash on card */
  const greenFlash = interpolate(frame, [272, 276, 280], [0, 0.15, 0], CLAMP);

  return (
    <div
      style={{
        opacity: boardOpacity,
        transform: `translateY(${boardY}px)`,
        display: "flex",
        flexDirection: "column",
        gap: 16,
      }}
    >
      {/* Board header */}
      <div style={{ display: "flex", justifyContent: "space-between", alignItems: "center" }}>
        <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.semibold, fontSize: 18, color: COLORS.navy }}>
          Workshop Board
        </div>
        <div style={{ display: "flex", gap: 10 }}>
          {KANBAN_COLUMNS.map((col) => (
            <div key={col.title} style={{ display: "flex", alignItems: "center", gap: 5 }}>
              <div style={{ width: 8, height: 8, borderRadius: 4, backgroundColor: col.color }} />
              <span style={{ fontFamily: FONT.regular, fontSize: 11, color: COLORS.gray500 }}>
                {col.title} ({col.items.length})
              </span>
            </div>
          ))}
        </div>
      </div>

      {/* Kanban columns */}
      <div style={{ display: "flex", gap: 20 }}>
        {KANBAN_COLUMNS.map((col, colIdx) => {
          const ce = colEntry(colIdx);
          return (
            <div
              key={col.title}
              style={{
                flex: 1,
                opacity: ce.opacity,
                transform: `translateY(${ce.y}px)`,
              }}
            >
              {/* Column header */}
              <div
                style={{
                  display: "flex",
                  alignItems: "center",
                  gap: 8,
                  marginBottom: 12,
                  padding: "8px 12px",
                  borderRadius: 8,
                  backgroundColor: `${col.color}10`,
                  border: `1px solid ${col.color}25`,
                }}
              >
                <div style={{ width: 8, height: 8, borderRadius: 4, backgroundColor: col.color }} />
                <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.semibold, fontSize: 14, color: col.color }}>
                  {col.title}
                </span>
                <span style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray400, marginLeft: "auto" }}>
                  {col.items.length}
                </span>
              </div>

              {/* Cards */}
              <div style={{ display: "flex", flexDirection: "column", gap: 10, position: "relative" }}>
                {col.items.map((item, cardIdx) => {
                  const ce2 = cardEntry(colIdx, cardIdx);
                  const isBikeCard = item.id === "bike325";

                  // If bike is moving and transition is past 20%, hide it from Queued
                  if (isBikeCard && isBikeMoving && bikeCardSlide > 0.2) {
                    return null;
                  }

                  /* Highlight glow */
                  const glowShadow = isBikeCard && bikeHighlight > 0
                    ? `0 0 ${8 + bikeHighlight * 12}px rgba(247,88,31,${bikeHighlight * 0.3})`
                    : "0 1px 3px rgba(0,0,0,0.04)";

                  return (
                    <div
                      key={item.id}
                      style={{
                        backgroundColor: COLORS.white,
                        borderRadius: 10,
                        border: `1px solid ${isBikeCard && bikeHighlight > 0 ? `rgba(247,88,31,${bikeHighlight * 0.5})` : COLORS.gray200}`,
                        padding: "14px 16px",
                        opacity: isBikeCard && isBikeMoving ? interpolate(bikeCardSlide, [0, 0.2], [1, 0], CLAMP) : ce2.opacity,
                        transform: `scale(${ce2.scale})`,
                        boxShadow: glowShadow,
                        position: "relative",
                        zIndex: isBikeCard ? 10 : 1,
                      }}
                    >
                      <div style={{ display: "flex", justifyContent: "space-between", alignItems: "flex-start" }}>
                        <div>
                          <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.semibold, fontSize: 14, color: COLORS.navy }}>
                            {item.name}
                          </div>
                          <div style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray400, marginTop: 2 }}>
                            {item.service}
                          </div>
                        </div>
                        {/* Status badge */}
                        {colIdx === 2 ? (
                          <StatusBadge status="completed" label="Complete" fontSize={10} />
                        ) : colIdx === 1 ? (
                          <StatusBadge status="confirmed" label="In Progress" fontSize={10} />
                        ) : (
                          <StatusBadge status="draft" label="Queued" fontSize={10} />
                        )}
                      </div>

                      {/* Assignee row */}
                      <div style={{ display: "flex", alignItems: "center", gap: 6, marginTop: 8 }}>
                        <div
                          style={{
                            width: 20,
                            height: 20,
                            borderRadius: 10,
                            backgroundColor: COLORS.gray200,
                            display: "flex",
                            alignItems: "center",
                            justifyContent: "center",
                            fontFamily: FONT.regular,
                            fontWeight: FONT.weights.bold,
                            fontSize: 8,
                            color: COLORS.gray500,
                          }}
                        >
                          {item.assignee}
                        </div>
                        <span style={{ fontFamily: FONT.regular, fontSize: 11, color: COLORS.gray400 }}>
                          {item.priority}
                        </span>
                      </div>
                    </div>
                  );
                })}

                {/* Bike card appearing in In Progress column */}
                {colIdx === 1 && isBikeMoving && bikeCardSlide > 0.2 && (
                  <div
                    style={{
                      backgroundColor: COLORS.white,
                      borderRadius: 10,
                      border: `1px solid ${COLORS.gray200}`,
                      padding: "14px 16px",
                      opacity: interpolate(bikeCardSlide, [0.2, 0.5], [0, 1], CLAMP),
                      transform: `scale(${interpolate(bikeCardSlide, [0.2, 0.5], [0.8, 1], { ...CLAMP, easing: EASING.spring })})`,
                      boxShadow: "0 1px 3px rgba(0,0,0,0.04)",
                      position: "relative",
                      zIndex: 10,
                    }}
                  >
                    {/* Green flash overlay */}
                    {greenFlash > 0 && (
                      <div
                        style={{
                          position: "absolute",
                          inset: 0,
                          backgroundColor: COLORS.green,
                          opacity: greenFlash,
                          borderRadius: 10,
                          pointerEvents: "none",
                        }}
                      />
                    )}

                    <div style={{ display: "flex", justifyContent: "space-between", alignItems: "flex-start" }}>
                      <div>
                        <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.semibold, fontSize: 14, color: COLORS.navy }}>
                          Mountain Bike #325
                        </div>
                        <div style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray400, marginTop: 2 }}>
                          Brake Adjustment
                        </div>
                      </div>
                      {/* Status badge */}
                      <div
                        style={{
                          transform: `scale(${interpolate(statusMorph, [0, 0.3, 0.5, 0.7, 1], [1, 0.85, 0.85, 1.1, 1], CLAMP)})`,
                        }}
                      >
                        {isComplete ? (
                          <StatusBadge status="completed" label="Complete" fontSize={10} />
                        ) : (
                          <StatusBadge status="confirmed" label="In Progress" fontSize={10} />
                        )}
                      </div>
                    </div>

                    {/* Assignee */}
                    <div style={{ display: "flex", alignItems: "center", gap: 6, marginTop: 8 }}>
                      <div
                        style={{
                          width: 20,
                          height: 20,
                          borderRadius: 10,
                          backgroundColor: COLORS.gray200,
                          display: "flex",
                          alignItems: "center",
                          justifyContent: "center",
                          fontFamily: FONT.regular,
                          fontWeight: FONT.weights.bold,
                          fontSize: 8,
                          color: COLORS.gray500,
                        }}
                      >
                        MT
                      </div>
                      <span style={{ fontFamily: FONT.regular, fontSize: 11, color: COLORS.gray400 }}>Medium</span>
                    </div>

                    {/* Checklist + Progress (shown once bike card is fully in place) */}
                    {bikeCardSlide >= 0.95 && (
                      <div style={{ marginTop: 12, borderTop: `1px solid ${COLORS.gray100}`, paddingTop: 10 }}>
                        {/* Mini checklist */}
                        {CHECKLIST_ITEMS.map((label, i) => {
                          const ci = checkItem(i);
                          const isChecked = ci.opacity > 0.8;
                          return (
                            <div
                              key={label}
                              style={{
                                display: "flex",
                                alignItems: "center",
                                gap: 8,
                                padding: "5px 0",
                                opacity: ci.opacity,
                              }}
                            >
                              <div
                                style={{
                                  width: 18,
                                  height: 18,
                                  borderRadius: 4,
                                  backgroundColor: isChecked ? COLORS.green : COLORS.white,
                                  border: `1.5px solid ${isChecked ? COLORS.green : COLORS.gray300}`,
                                  display: "flex",
                                  alignItems: "center",
                                  justifyContent: "center",
                                  transform: `scale(${ci.scale})`,
                                  flexShrink: 0,
                                }}
                              >
                                {isChecked && (
                                  <svg width={11} height={11} viewBox="0 0 14 14" fill="none">
                                    <path d="M3 7l3 3L11 4" stroke={COLORS.white} strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" />
                                  </svg>
                                )}
                              </div>
                              <span style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray700 }}>
                                {label}
                              </span>
                            </div>
                          );
                        })}

                        {/* Progress bar */}
                        <div style={{ marginTop: 8 }}>
                          <div style={{ display: "flex", justifyContent: "space-between", marginBottom: 4 }}>
                            <span style={{ fontFamily: FONT.regular, fontSize: 10, color: COLORS.gray500 }}>Progress</span>
                            <span
                              style={{
                                fontFamily: FONT.regular,
                                fontWeight: FONT.weights.semibold,
                                fontSize: 10,
                                color: progressPercent >= 100 ? COLORS.green : COLORS.confirmed,
                              }}
                            >
                              {Math.round(progressPercent)}%
                            </span>
                          </div>
                          <div style={{ width: "100%", height: 6, borderRadius: 3, backgroundColor: COLORS.gray100, overflow: "hidden" }}>
                            <div
                              style={{
                                width: `${progressPercent}%`,
                                height: "100%",
                                borderRadius: 3,
                                backgroundColor: progressPercent >= 100 ? COLORS.green : COLORS.confirmed,
                              }}
                            />
                          </div>
                        </div>
                      </div>
                    )}
                  </div>
                )}
              </div>
            </div>
          );
        })}
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Main                                                               */
/* ------------------------------------------------------------------ */
export const WorkshopMaintenance: React.FC = () => {
  const frame = useCurrentFrame();

  /* Phase visibility — scanner and availability overlap for smooth transition */
  const showScanner = frame < 78;
  const showAvailability = frame >= 68 && frame < 143;
  const showKanban = frame >= 193;

  return (
    <AbsoluteFill style={{ backgroundColor: COLORS.gray50 }}>
      {/* Phase 1: Full-screen scanner (no AppMockup) */}
      {showScanner && <BarcodeScanner />}

      {/* Phase 2: Check Availability (with AppMockup) */}
      {showAvailability && (
        <div
          style={{
            position: "absolute",
            inset: 0,
            opacity: interpolate(frame, [68, 78], [0, 1], CLAMP),
          }}
        >
          <AppMockup activeItem="Check Availability" pageTitle="Check Availability">
            <CheckAvailability />
          </AppMockup>
        </div>
      )}

      {/* Phase 3: Modal overlay (renders on top of Phase 2) */}
      <MaintenanceModal />

      {/* Phase 4: Workshop Kanban */}
      {showKanban && (
        <div
          style={{
            position: "absolute",
            inset: 0,
            opacity: interpolate(frame, [193, 200], [0, 1], CLAMP),
          }}
        >
          <AppMockup activeItem="Settings" pageTitle="Workshop">
            <KanbanBoard />
          </AppMockup>
        </div>
      )}
    </AbsoluteFill>
  );
};
