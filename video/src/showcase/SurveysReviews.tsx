import React from "react";
import { AbsoluteFill, interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";
import { AppMockup } from "../components/AppMockup";

/* ------------------------------------------------------------------ */
/*  Waivers, Surveys & Reviews — multi-step customer journey           */
/*                                                                     */
/*  Duration: 310 frames                                               */
/*  Phase 1 (0-80):    Waiver builder with form fields staggering in   */
/*  Phase 2 (80-100):  Transition to customer-facing tablet view       */
/*  Phase 3 (100-175): Customer signature + submit + confirmed         */
/*  Phase 4 (170-230): Timeline steps lighting up in sequence          */
/*  Phase 5 (230-310): Analytics dashboard: NPS, stars, review cards   */
/* ------------------------------------------------------------------ */

const CLAMP = { extrapolateLeft: "clamp" as const, extrapolateRight: "clamp" as const };

/* ------------------------------------------------------------------ */
/*  Phase 1: Waiver Builder                                            */
/* ------------------------------------------------------------------ */

/* SVG icon components for form element palette */
const PaletteIcon: React.FC<{ type: string; color: string; size?: number }> = ({ type, color, size = 14 }) => {
  switch (type) {
    case "heading":
      return (
        <svg width={size} height={size} viewBox="0 0 16 16" fill="none">
          <path d="M3 3v10M13 3v10M3 8h10" stroke={color} strokeWidth="1.6" strokeLinecap="round" />
        </svg>
      );
    case "fullname":
      return (
        <svg width={size} height={size} viewBox="0 0 16 16" fill="none">
          <circle cx="8" cy="5.5" r="2.8" stroke={color} strokeWidth="1.3" />
          <path d="M3 14c0-2.5 2.2-4 5-4s5 1.5 5 4" stroke={color} strokeWidth="1.3" strokeLinecap="round" />
        </svg>
      );
    case "email":
      return (
        <svg width={size} height={size} viewBox="0 0 16 16" fill="none">
          <rect x="1.5" y="3.5" width="13" height="9" rx="1.5" stroke={color} strokeWidth="1.3" />
          <path d="M1.5 5l6.5 4 6.5-4" stroke={color} strokeWidth="1.3" strokeLinecap="round" />
        </svg>
      );
    case "phone":
      return (
        <svg width={size} height={size} viewBox="0 0 16 16" fill="none">
          <path d="M3 3.5c0-1 .8-1.5 1.5-1.5h1L7 5l-1.2 1c.6 1.8 2.2 3.4 4 4l1-1.2L14 10.3v1c0 .7-.5 1.5-1.5 1.5C6.5 12.8 3.2 9.5 3 3.5z" stroke={color} strokeWidth="1.2" strokeLinecap="round" />
        </svg>
      );
    case "signature":
      return (
        <svg width={size} height={size} viewBox="0 0 16 16" fill="none">
          <path d="M2.5 13l1.2-4.5L11 1.5l3 3-7.2 7L2.5 13z" stroke={color} strokeWidth="1.2" strokeLinecap="round" strokeLinejoin="round" />
          <path d="M9.5 3.5l3 3" stroke={color} strokeWidth="1.2" />
        </svg>
      );
    case "text":
      return (
        <svg width={size} height={size} viewBox="0 0 16 16" fill="none">
          <rect x="2" y="3" width="12" height="10" rx="1.5" stroke={color} strokeWidth="1.2" />
          <path d="M4.5 6.5h7M4.5 9.5h4" stroke={color} strokeWidth="1" strokeLinecap="round" />
        </svg>
      );
    case "address":
      return (
        <svg width={size} height={size} viewBox="0 0 16 16" fill="none">
          <path d="M8 1.5C5.5 1.5 3.5 3.5 3.5 6c0 3.5 4.5 8.5 4.5 8.5s4.5-5 4.5-8.5c0-2.5-2-4.5-4.5-4.5z" stroke={color} strokeWidth="1.2" />
          <circle cx="8" cy="6" r="1.5" stroke={color} strokeWidth="1.1" />
        </svg>
      );
    case "radio":
      return (
        <svg width={size} height={size} viewBox="0 0 16 16" fill="none">
          <circle cx="8" cy="8" r="5.5" stroke={color} strokeWidth="1.3" />
          <circle cx="8" cy="8" r="2.5" fill={color} />
        </svg>
      );
    case "checkbox":
      return (
        <svg width={size} height={size} viewBox="0 0 16 16" fill="none">
          <rect x="2.5" y="2.5" width="11" height="11" rx="2" stroke={color} strokeWidth="1.3" />
          <path d="M5 8l2 2 4-4" stroke={color} strokeWidth="1.4" strokeLinecap="round" strokeLinejoin="round" />
        </svg>
      );
    case "datepicker":
      return (
        <svg width={size} height={size} viewBox="0 0 16 16" fill="none">
          <rect x="2" y="3" width="12" height="11" rx="1.5" stroke={color} strokeWidth="1.2" />
          <path d="M2 6.5h12" stroke={color} strokeWidth="1" />
          <path d="M5.5 1.5v2.5M10.5 1.5v2.5" stroke={color} strokeWidth="1.3" strokeLinecap="round" />
          <circle cx="5.5" cy="10" r="0.8" fill={color} />
          <circle cx="8" cy="10" r="0.8" fill={color} />
          <circle cx="10.5" cy="10" r="0.8" fill={color} />
        </svg>
      );
    case "shorttext":
      return (
        <svg width={size} height={size} viewBox="0 0 16 16" fill="none">
          <path d="M3 4h10v1.5H8.5V12h-1V5.5H3V4z" fill={color} />
        </svg>
      );
    case "rating":
      return (
        <svg width={size} height={size} viewBox="0 0 16 16" fill="none">
          <path d="M8 2l1.8 3.6 4 .6-2.9 2.8.7 4L8 11.2 4.4 13l.7-4L2.2 6.2l4-.6L8 2z" stroke={color} strokeWidth="1.1" strokeLinejoin="round" />
        </svg>
      );
    default:
      return null;
  }
};

const WaiverBuilder: React.FC = () => {
  const frame = useCurrentFrame();

  /* ---- Left panel "Form elements" list items ---- */
  const PALETTE_ITEMS = [
    { label: "Heading", icon: "heading" },
    { label: "Full Name", icon: "fullname" },
    { label: "Email", icon: "email" },
    { label: "Phone", icon: "phone" },
    { label: "Signature", icon: "signature" },
    { label: "Text Input", icon: "text" },
    { label: "Address", icon: "address" },
    { label: "Single Choice", icon: "radio" },
    { label: "Multiple Choice", icon: "checkbox" },
    { label: "Date Picker", icon: "datepicker" },
    { label: "Short Text", icon: "shorttext" },
  ];

  /* ---- Right panel canvas form fields (waiver-relevant) ---- */
  const CANVAS_FIELDS = [
    { label: "Full Name", type: "text", placeholder: "Enter full name" },
    { label: "Date of Birth", type: "datepicker", placeholder: "mm/dd/yyyy" },
    { label: "Emergency Contact", type: "text", placeholder: "+1 (555) 000-0000" },
    { label: "Medical Conditions", type: "text", placeholder: "List any medical conditions or allergies" },
  ];

  /* ---- ANIMATIONS ---- */

  /* Left panel stagger: items fade in sequentially (frames 0-15) */
  const leftPanelOpacity = interpolate(frame, [2, 8], [0, 1], CLAMP);
  const paletteItemEntry = (i: number) => {
    const start = 3 + i * 1;
    const opacity = interpolate(frame, [start, start + 5], [0, 1], CLAMP);
    const x = interpolate(frame, [start, start + 5], [-12, 0], { ...CLAMP, easing: EASING.easeOut });
    return { opacity, x };
  };

  /* Right panel: "Add Your Logo" + title appear (frames 8-20) */
  const logoAreaOpacity = interpolate(frame, [8, 14], [0, 1], CLAMP);
  const logoAreaY = interpolate(frame, [8, 14], [10, 0], { ...CLAMP, easing: EASING.easeOut });
  const titleOpacity = interpolate(frame, [12, 18], [0, 1], CLAMP);
  const titleY = interpolate(frame, [12, 18], [8, 0], { ...CLAMP, easing: EASING.easeOut });

  /* Canvas fields appear one by one (frames 15-50) */
  const canvasFieldEntry = (i: number) => {
    const start = 18 + i * 8;
    const opacity = interpolate(frame, [start, start + 7], [0, 1], CLAMP);
    const y = interpolate(frame, [start, start + 7], [24, 0], { ...CLAMP, easing: EASING.easeOut });
    return { opacity, y };
  };

  /* ---- DRAG AND DROP ANIMATION (frames 42-65) ---- */
  /* Phase A: Signature item in left panel highlights (42-48) */
  const sigHighlight = interpolate(frame, [42, 46], [0, 1], { ...CLAMP, easing: EASING.easeOut });
  const sigHighlightPulse = frame >= 46 && frame < 50
    ? 0.85 + 0.15 * Math.sin((frame - 46) * 1.2)
    : frame >= 42 ? sigHighlight : 0;

  /* Phase B: Ghost card appears and moves diagonally (48-60) */
  const ghostOpacity = interpolate(frame, [48, 50], [0, 0.95], CLAMP);
  const ghostFadeOut = interpolate(frame, [59, 62], [1, 0], CLAMP);
  /* Ghost starts near the Signature item in left panel, ends between fields on canvas */
  /* Start position: roughly where Signature sits in the left panel */
  const ghostStartX = 40;
  const ghostStartY = 160;
  /* End position: on the canvas, below all form fields */
  const ghostEndX = 520;
  const ghostEndY = 580;
  const dragProgress = interpolate(frame, [48, 59], [0, 1], { ...CLAMP, easing: EASING.easeInOut });
  /* Cubic bezier-style path: arcs upward then swoops down */
  const controlY = ghostStartY - 100; /* arc up above */
  const t = dragProgress;
  const ghostX = (1 - t) * (1 - t) * ghostStartX + 2 * (1 - t) * t * ((ghostStartX + ghostEndX) / 2) + t * t * ghostEndX;
  const ghostY = (1 - t) * (1 - t) * ghostStartY + 2 * (1 - t) * t * controlY + t * t * ghostEndY;
  /* Ghost rotation tilts during flight */
  const ghostRotate = interpolate(frame, [48, 54, 59], [0, -4, 0], CLAMP);
  /* Ghost scale: slightly larger during flight */
  const ghostScale = interpolate(frame, [48, 53, 59], [0.9, 1.08, 1.0], { ...CLAMP, easing: EASING.easeOut });
  /* Ghost shadow intensifies during flight */
  const ghostShadow = interpolate(frame, [48, 54, 59], [0, 1, 0.3], CLAMP);

  /* Phase C: Dropped field materializes with spring bounce (60-68) */
  const droppedOpacity = interpolate(frame, [60, 63], [0, 1], CLAMP);
  const droppedScale = interpolate(frame, [60, 65], [0.85, 1], { ...CLAMP, easing: EASING.spring });
  const droppedGlow = interpolate(frame, [60, 68], [1, 0], { ...CLAMP, easing: EASING.easeOut });

  /* Exit fade (frames 70-80) */
  const exitOpacity = interpolate(frame, [74, 80], [1, 0], { ...CLAMP, easing: EASING.easeIn });

  /* ---- "Assigned to" card ---- */
  const assignedOpacity = interpolate(frame, [5, 10], [0, 1], CLAMP);

  /* Blue color for palette icons */
  const paletteBlue = "#3B82F6";

  return (
    <div style={{ opacity: exitOpacity, display: "flex", gap: 20, height: "100%", position: "relative" }}>
      {/* ---- LEFT COLUMN: Form Elements Palette ---- */}
      <div style={{ width: 240, flexShrink: 0, opacity: leftPanelOpacity, display: "flex", flexDirection: "column", gap: 12 }}>
        {/* "Assigned to" card */}
        <div
          style={{
            backgroundColor: COLORS.white,
            borderRadius: 10,
            border: `1px solid ${COLORS.gray200}`,
            padding: "12px 14px",
            opacity: assignedOpacity,
          }}
        >
          <div style={{ fontFamily: FONT.regular, fontSize: 11, color: COLORS.gray400, fontWeight: FONT.weights.medium, marginBottom: 6 }}>
            Assigned to
          </div>
          <div
            style={{
              fontFamily: FONT.regular,
              fontSize: 12,
              color: COLORS.gray400,
              fontStyle: "italic",
            }}
          >
            No assignments
          </div>
        </div>

        {/* "Form elements" section */}
        <div
          style={{
            backgroundColor: COLORS.white,
            borderRadius: 10,
            border: `1px solid ${COLORS.gray200}`,
            padding: "12px 0",
          }}
        >
          <div
            style={{
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.semibold,
              fontSize: 12,
              color: COLORS.gray500,
              textTransform: "uppercase",
              letterSpacing: 0.6,
              padding: "0 14px",
              marginBottom: 8,
            }}
          >
            Form elements
          </div>

          {PALETTE_ITEMS.map((item, i) => {
            const entry = paletteItemEntry(i);
            const isSignature = item.icon === "signature";
            /* Signature highlight during drag phase */
            const isHighlighted = isSignature && sigHighlightPulse > 0;
            /* Signature item fades out slightly when ghost is flying */
            const sigItemFade = isSignature
              ? interpolate(frame, [49, 52], [1, 0.35], CLAMP)
              : 1;

            return (
              <div
                key={item.label}
                style={{
                  display: "flex",
                  alignItems: "center",
                  gap: 10,
                  padding: "7px 14px",
                  marginBottom: 1,
                  opacity: entry.opacity * sigItemFade,
                  transform: `translateX(${entry.x}px)`,
                  backgroundColor: isHighlighted ? `${COLORS.primary}08` : "transparent",
                  borderLeft: isHighlighted ? `2px solid ${COLORS.primary}` : "2px solid transparent",
                  borderRight: isHighlighted ? `2px solid transparent` : "2px solid transparent",
                  boxShadow: isHighlighted ? `inset 0 0 0 1px ${COLORS.primary}20` : "none",
                  cursor: "default",
                }}
              >
                <div
                  style={{
                    width: 26,
                    height: 26,
                    borderRadius: 6,
                    backgroundColor: isHighlighted ? `${COLORS.primary}15` : `${paletteBlue}10`,
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "center",
                    flexShrink: 0,
                  }}
                >
                  <PaletteIcon type={item.icon} color={isHighlighted ? COLORS.primary : paletteBlue} size={14} />
                </div>
                <span
                  style={{
                    fontFamily: FONT.regular,
                    fontSize: 12,
                    color: isHighlighted ? COLORS.primary : COLORS.gray700,
                    fontWeight: isHighlighted ? FONT.weights.medium : FONT.weights.regular,
                  }}
                >
                  {item.label}
                </span>
              </div>
            );
          })}
        </div>
      </div>

      {/* ---- RIGHT COLUMN: Form Canvas/Preview ---- */}
      <div style={{ flex: 1, overflow: "hidden" }}>
        {/* "+ Add Your Logo" button */}
        <div
          style={{
            opacity: logoAreaOpacity,
            transform: `translateY(${logoAreaY}px)`,
            marginBottom: 16,
          }}
        >
          <div
            style={{
              border: `2px dashed ${COLORS.gray300}`,
              borderRadius: 10,
              padding: "14px 0",
              display: "flex",
              alignItems: "center",
              justifyContent: "center",
              gap: 6,
              backgroundColor: COLORS.white,
            }}
          >
            <svg width={14} height={14} viewBox="0 0 14 14" fill="none">
              <path d="M7 2v10M2 7h10" stroke={COLORS.gray400} strokeWidth="1.5" strokeLinecap="round" />
            </svg>
            <span
              style={{
                fontFamily: FONT.regular,
                fontSize: 13,
                color: COLORS.gray400,
                fontWeight: FONT.weights.medium,
              }}
            >
              Add Your Logo
            </span>
          </div>
        </div>

        {/* Form title card: "Liability Release" */}
        <div
          style={{
            opacity: titleOpacity,
            transform: `translateY(${titleY}px)`,
            marginBottom: 14,
          }}
        >
          <div
            style={{
              backgroundColor: COLORS.white,
              borderRadius: 10,
              border: `1px solid ${COLORS.gray200}`,
              padding: "20px 22px",
            }}
          >
            <div
              style={{
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.bold,
                fontSize: 22,
                color: COLORS.navy,
              }}
            >
              Liability Release
            </div>
            <div
              style={{
                fontFamily: FONT.regular,
                fontSize: 12,
                color: COLORS.gray400,
                marginTop: 4,
              }}
            >
              Please complete all required fields below
            </div>
          </div>
        </div>

        {/* Form field cards on canvas */}
        {CANVAS_FIELDS.map((field, i) => {
          const fe = canvasFieldEntry(i);
          return (
            <div
              key={field.label}
              style={{
                opacity: fe.opacity,
                transform: `translateY(${fe.y}px)`,
                marginBottom: 10,
              }}
            >
              <div
                style={{
                  backgroundColor: COLORS.white,
                  borderRadius: 10,
                  border: `1px solid ${COLORS.gray200}`,
                  padding: "14px 18px",
                }}
              >
                <div
                  style={{
                    fontFamily: FONT.regular,
                    fontWeight: FONT.weights.medium,
                    fontSize: 13,
                    color: COLORS.gray700,
                    marginBottom: 8,
                  }}
                >
                  {field.label}
                  <span style={{ color: COLORS.red, marginLeft: 2 }}>*</span>
                </div>

                {/* Field-specific content */}
                {field.type === "datepicker" && (
                  <div
                    style={{
                      display: "flex",
                      alignItems: "center",
                      gap: 8,
                      padding: "8px 12px",
                      borderRadius: 6,
                      border: `1px solid ${COLORS.gray200}`,
                      backgroundColor: COLORS.gray50,
                    }}
                  >
                    <svg width={14} height={14} viewBox="0 0 16 16" fill="none">
                      <rect x="2" y="3" width="12" height="11" rx="1.5" stroke={COLORS.gray400} strokeWidth="1.2" />
                      <path d="M2 6.5h12" stroke={COLORS.gray400} strokeWidth="1" />
                      <path d="M5.5 1.5v2.5M10.5 1.5v2.5" stroke={COLORS.gray400} strokeWidth="1.2" strokeLinecap="round" />
                    </svg>
                    <span style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray400 }}>
                      {field.placeholder}
                    </span>
                  </div>
                )}

                {field.type === "text" && (
                  <div
                    style={{
                      padding: "8px 12px",
                      borderRadius: 6,
                      border: `1px solid ${COLORS.gray200}`,
                      backgroundColor: COLORS.gray50,
                    }}
                  >
                    <span style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray400 }}>
                      {field.placeholder}
                    </span>
                  </div>
                )}
              </div>
            </div>
          );
        })}

        {/* ---- DROPPED SIGNATURE FIELD (materializes after drag, below all form fields) ---- */}
        {droppedOpacity > 0 && (
          <div
            style={{
              position: "absolute",
              /* Position below all 4 canvas fields */
              left: 272,
              top: 580,
              right: 32,
              opacity: droppedOpacity,
              transform: `scale(${droppedScale})`,
              transformOrigin: "top center",
              zIndex: 5,
            }}
          >
            <div
              style={{
                backgroundColor: COLORS.white,
                borderRadius: 10,
                border: `2px solid ${droppedGlow > 0.2 ? COLORS.primary : COLORS.gray200}`,
                padding: "14px 18px",
                boxShadow: droppedGlow > 0
                  ? `0 0 ${20 * droppedGlow}px ${COLORS.primary}25, 0 4px 12px rgba(0,0,0,0.06)`
                  : "0 1px 4px rgba(0,0,0,0.04)",
              }}
            >
              <div
                style={{
                  fontFamily: FONT.regular,
                  fontWeight: FONT.weights.medium,
                  fontSize: 13,
                  color: COLORS.gray700,
                  marginBottom: 8,
                }}
              >
                Signature
                <span style={{ color: COLORS.red, marginLeft: 2 }}>*</span>
              </div>
              <div
                style={{
                  height: 48,
                  borderRadius: 6,
                  border: `1px dashed ${COLORS.gray300}`,
                  backgroundColor: COLORS.gray50,
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "center",
                  gap: 6,
                }}
              >
                <svg width={14} height={14} viewBox="0 0 16 16" fill="none">
                  <path d="M2.5 13l1.2-4.5L11 1.5l3 3-7.2 7L2.5 13z" stroke={COLORS.gray400} strokeWidth="1.2" strokeLinecap="round" strokeLinejoin="round" />
                </svg>
                <span style={{ fontFamily: FONT.regular, fontSize: 11, color: COLORS.gray400 }}>
                  Click or tap to sign
                </span>
              </div>
            </div>
          </div>
        )}
      </div>

      {/* ---- DRAG GHOST (floating card that moves from left panel to canvas) ---- */}
      {ghostOpacity > 0 && ghostFadeOut > 0 && (
        <div
          style={{
            position: "absolute",
            left: ghostX,
            top: ghostY,
            width: 220,
            opacity: ghostOpacity * ghostFadeOut,
            transform: `rotate(${ghostRotate}deg) scale(${ghostScale})`,
            zIndex: 20,
            pointerEvents: "none",
          }}
        >
          <div
            style={{
              backgroundColor: COLORS.white,
              borderRadius: 10,
              border: `2px solid ${COLORS.primary}`,
              padding: "12px 16px",
              boxShadow: `0 ${8 + 12 * ghostShadow}px ${20 + 20 * ghostShadow}px rgba(247, 88, 31, ${0.15 + 0.15 * ghostShadow}), 0 0 ${30 * ghostShadow}px ${COLORS.primary}15`,
              display: "flex",
              alignItems: "center",
              gap: 10,
            }}
          >
            <div
              style={{
                width: 28,
                height: 28,
                borderRadius: 7,
                backgroundColor: `${COLORS.primary}12`,
                display: "flex",
                alignItems: "center",
                justifyContent: "center",
                flexShrink: 0,
              }}
            >
              <PaletteIcon type="signature" color={COLORS.primary} size={15} />
            </div>
            <span
              style={{
                fontFamily: FONT.regular,
                fontSize: 13,
                color: COLORS.primary,
                fontWeight: FONT.weights.semibold,
              }}
            >
              Signature
            </span>
          </div>

          {/* Cursor icon trailing the ghost */}
          <svg
            width={20}
            height={20}
            viewBox="0 0 20 20"
            fill="none"
            style={{
              position: "absolute",
              bottom: -8,
              right: -4,
              filter: "drop-shadow(0 1px 2px rgba(0,0,0,0.3))",
            }}
          >
            <path d="M4 2l2 14 3.5-5L15 9 4 2z" fill={COLORS.white} stroke={COLORS.gray900} strokeWidth="1" strokeLinejoin="round" />
          </svg>
        </div>
      )}

      {/* ---- Drop zone indicator line (appears just before drop) ---- */}
      {frame >= 56 && frame < 64 && (
        <div
          style={{
            position: "absolute",
            left: 280,
            right: 40,
            top: 575,
            height: 3,
            borderRadius: 2,
            backgroundColor: COLORS.primary,
            opacity: interpolate(frame, [56, 58, 62, 64], [0, 0.8, 0.8, 0], CLAMP),
            boxShadow: `0 0 8px ${COLORS.primary}40`,
            zIndex: 10,
          }}
        />
      )}
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Phase 2+3: Customer Tablet View with Signature                     */
/* ------------------------------------------------------------------ */
const CustomerSignature: React.FC = () => {
  const frame = useCurrentFrame();

  /* Tablet frame entry */
  const tabletScale = interpolate(frame, [80, 95], [0.7, 1], { ...CLAMP, easing: EASING.spring });
  const tabletOpacity = interpolate(frame, [80, 90], [0, 1], CLAMP);

  /* Form fields pre-filled */
  const formOpacity = interpolate(frame, [92, 100], [0, 1], CLAMP);

  /* Signature drawing — stroke animation */
  const sigProgress = interpolate(frame, [125, 155], [0, 1], { ...CLAMP, easing: EASING.easeInOut });

  /* Submit button glow */
  const submitGlow = interpolate(frame, [156, 162], [0, 1], { ...CLAMP, easing: EASING.easeOut });

  /* Green confirmed overlay */
  const confirmedScale = interpolate(frame, [163, 170], [0.5, 1], { ...CLAMP, easing: EASING.spring });
  const confirmedOpacity = interpolate(frame, [163, 168], [0, 1], CLAMP);

  /* Exit entire tablet */
  const exitOpacity = interpolate(frame, [168, 175], [1, 0], { ...CLAMP, easing: EASING.easeIn });
  const exitScale = interpolate(frame, [168, 175], [1, 0.9], { ...CLAMP, easing: EASING.easeIn });

  /* Signature SVG path — simplified "Emma Scott" cursive */
  const sigPath = "M 20,50 C 25,20 35,20 40,40 C 45,60 50,30 60,35 C 70,40 65,55 75,45 C 85,35 80,25 90,35 C 100,45 95,55 110,40 C 120,30 130,45 140,35 C 150,25 155,50 165,40 C 175,30 180,45 195,35 C 205,25 215,40 220,45 C 225,50 235,35 245,40";
  const totalLen = 400;
  const dashOffset = totalLen * (1 - sigProgress);

  return (
    <div
      style={{
        display: "flex",
        justifyContent: "center",
        alignItems: "center",
        height: "100%",
        opacity: exitOpacity,
      }}
    >
      {/* Tablet frame */}
      <div
        style={{
          width: 520,
          backgroundColor: COLORS.white,
          borderRadius: 24,
          border: `3px solid ${COLORS.gray300}`,
          overflow: "hidden",
          opacity: tabletOpacity,
          transform: `scale(${tabletScale * exitScale})`,
          boxShadow: "0 16px 48px rgba(0,0,0,0.12)",
          position: "relative",
        }}
      >
        {/* Tablet header */}
        <div
          style={{
            padding: "16px 24px",
            borderBottom: `1px solid ${COLORS.gray100}`,
            display: "flex",
            alignItems: "center",
            justifyContent: "center",
          }}
        >
          <div
            style={{
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.bold,
              fontSize: 18,
              color: COLORS.navy,
            }}
          >
            Liability Waiver
          </div>
        </div>

        {/* Form content */}
        <div style={{ padding: "20px 28px", opacity: formOpacity }}>
          {/* Pre-filled fields */}
          {[
            { label: "Full Name", value: "Emma Scott" },
            { label: "Emergency Contact", value: "+1 (555) 234-5678" },
          ].map((field) => (
            <div key={field.label} style={{ marginBottom: 14 }}>
              <div style={{ fontFamily: FONT.regular, fontSize: 11, color: COLORS.gray400, marginBottom: 4 }}>
                {field.label}
              </div>
              <div
                style={{
                  padding: "8px 12px",
                  borderRadius: 6,
                  border: `1px solid ${COLORS.gray200}`,
                  fontFamily: FONT.regular,
                  fontSize: 14,
                  color: COLORS.gray900,
                }}
              >
                {field.value}
              </div>
            </div>
          ))}

          {/* Terms checkbox */}
          <div style={{ display: "flex", alignItems: "center", gap: 8, marginBottom: 18 }}>
            <div
              style={{
                width: 18,
                height: 18,
                borderRadius: 4,
                backgroundColor: COLORS.primary,
                display: "flex",
                alignItems: "center",
                justifyContent: "center",
              }}
            >
              <svg width={10} height={10} viewBox="0 0 10 10" fill="none">
                <path d="M2 5l2.5 2.5L8 3" stroke={COLORS.white} strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
              </svg>
            </div>
            <span style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray700 }}>
              I agree to the terms and conditions
            </span>
          </div>

          {/* Signature area */}
          <div style={{ marginBottom: 16 }}>
            <div style={{ fontFamily: FONT.regular, fontSize: 11, color: COLORS.gray400, marginBottom: 4 }}>
              Signature
            </div>
            <div
              style={{
                height: 80,
                borderRadius: 8,
                border: `1px solid ${sigProgress > 0 ? COLORS.primary : COLORS.gray200}`,
                backgroundColor: COLORS.gray50,
                position: "relative",
                overflow: "hidden",
              }}
            >
              <svg
                width="100%"
                height="100%"
                viewBox="0 0 260 70"
                preserveAspectRatio="xMidYMid meet"
                style={{ position: "absolute", inset: 0 }}
              >
                <path
                  d={sigPath}
                  fill="none"
                  stroke={COLORS.navy}
                  strokeWidth="2"
                  strokeLinecap="round"
                  strokeDasharray={totalLen}
                  strokeDashoffset={dashOffset}
                />
              </svg>
            </div>
          </div>

          {/* Submit button */}
          <div
            style={{
              padding: "12px 0",
              borderRadius: 10,
              backgroundColor: COLORS.primary,
              color: COLORS.white,
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.bold,
              fontSize: 15,
              textAlign: "center",
              boxShadow: submitGlow > 0 ? `0 0 ${20 * submitGlow}px rgba(247, 88, 31, ${0.4 * submitGlow})` : "none",
              transform: `scale(${1 + submitGlow * 0.02})`,
            }}
          >
            Sign & Submit
          </div>
        </div>

        {/* Green confirmed overlay */}
        {confirmedOpacity > 0 && (
          <div
            style={{
              position: "absolute",
              inset: 0,
              backgroundColor: `rgba(236, 253, 243, ${confirmedOpacity * 0.95})`,
              display: "flex",
              flexDirection: "column",
              alignItems: "center",
              justifyContent: "center",
              transform: `scale(${confirmedScale})`,
            }}
          >
            <div
              style={{
                width: 56,
                height: 56,
                borderRadius: 28,
                backgroundColor: COLORS.green,
                display: "flex",
                alignItems: "center",
                justifyContent: "center",
                marginBottom: 12,
              }}
            >
              <svg width={28} height={28} viewBox="0 0 28 28" fill="none">
                <path d="M8 14l4 4 8-8" stroke={COLORS.white} strokeWidth="3" strokeLinecap="round" strokeLinejoin="round" />
              </svg>
            </div>
            <div
              style={{
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.bold,
                fontSize: 20,
                color: COLORS.greenDark,
              }}
            >
              Waiver Signed!
            </div>
          </div>
        )}
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Phase 4: Timeline Steps                                            */
/* ------------------------------------------------------------------ */
const TimelineSteps: React.FC = () => {
  const frame = useCurrentFrame();

  /* Container entry */
  const containerOpacity = interpolate(frame, [170, 178], [0, 1], CLAMP);

  const STEPS = [
    { label: "Booking Complete", icon: "calendar", color: COLORS.blue },
    { label: "Waiver Signed", icon: "check", color: COLORS.green },
    { label: "Survey Sent", icon: "mail", color: COLORS.primary },
    { label: "Review Posted", icon: "star", color: "#F79009" },
  ];

  /* Step light-up */
  const stepActive = (i: number) => {
    const start = 178 + i * 15;
    return interpolate(frame, [start, start + 8], [0, 1], { ...CLAMP, easing: EASING.spring });
  };

  /* Connector line progress */
  const connectorProgress = (i: number) => {
    const start = 182 + i * 15;
    return interpolate(frame, [start, start + 8], [0, 1], { ...CLAMP, easing: EASING.easeOut });
  };

  /* Exit */
  const exitOpacity = interpolate(frame, [224, 230], [1, 0], { ...CLAMP, easing: EASING.easeIn });

  return (
    <div
      style={{
        display: "flex",
        justifyContent: "center",
        alignItems: "center",
        height: "100%",
        opacity: containerOpacity * exitOpacity,
      }}
    >
      <div style={{ display: "flex", alignItems: "center", gap: 0 }}>
        {STEPS.map((step, i) => {
          const active = stepActive(i);
          return (
            <React.Fragment key={step.label}>
              {/* Step circle + label */}
              <div
                style={{
                  display: "flex",
                  flexDirection: "column",
                  alignItems: "center",
                  gap: 10,
                  width: 140,
                }}
              >
                <div
                  style={{
                    width: 52,
                    height: 52,
                    borderRadius: 26,
                    backgroundColor: active > 0.5 ? step.color : COLORS.gray200,
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "center",
                    transform: `scale(${0.8 + active * 0.2})`,
                    boxShadow: active > 0.5 ? `0 4px 16px ${step.color}40` : "none",
                    transition: "none",
                  }}
                >
                  {step.icon === "calendar" && (
                    <svg width={22} height={22} viewBox="0 0 22 22" fill="none">
                      <rect x="3" y="4" width="16" height="15" rx="2" stroke={active > 0.5 ? COLORS.white : COLORS.gray400} strokeWidth="1.5" />
                      <path d="M3 9h16" stroke={active > 0.5 ? COLORS.white : COLORS.gray400} strokeWidth="1" />
                      <path d="M7 2v3M15 2v3" stroke={active > 0.5 ? COLORS.white : COLORS.gray400} strokeWidth="1.5" strokeLinecap="round" />
                    </svg>
                  )}
                  {step.icon === "check" && (
                    <svg width={22} height={22} viewBox="0 0 22 22" fill="none">
                      <path d="M6 11l3 3 7-7" stroke={active > 0.5 ? COLORS.white : COLORS.gray400} strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" />
                    </svg>
                  )}
                  {step.icon === "mail" && (
                    <svg width={22} height={22} viewBox="0 0 22 22" fill="none">
                      <rect x="2" y="5" width="18" height="12" rx="2" stroke={active > 0.5 ? COLORS.white : COLORS.gray400} strokeWidth="1.5" />
                      <path d="M2 7l9 5 9-5" stroke={active > 0.5 ? COLORS.white : COLORS.gray400} strokeWidth="1.5" />
                    </svg>
                  )}
                  {step.icon === "star" && (
                    <svg width={22} height={22} viewBox="0 0 22 22" fill="none">
                      <path d="M11 3l2.5 5 5.5.8-4 3.9 1 5.5L11 15.5 5.9 18.2l1-5.5-4-3.9L8.5 8z" fill={active > 0.5 ? COLORS.white : "none"} stroke={active > 0.5 ? COLORS.white : COLORS.gray400} strokeWidth="1.3" />
                    </svg>
                  )}
                </div>
                <span
                  style={{
                    fontFamily: FONT.regular,
                    fontWeight: active > 0.5 ? FONT.weights.semibold : FONT.weights.regular,
                    fontSize: 13,
                    color: active > 0.5 ? COLORS.navy : COLORS.gray400,
                    textAlign: "center",
                  }}
                >
                  {step.label}
                </span>
              </div>

              {/* Connector line */}
              {i < STEPS.length - 1 && (
                <div
                  style={{
                    width: 60,
                    height: 3,
                    backgroundColor: COLORS.gray200,
                    borderRadius: 2,
                    overflow: "hidden",
                    marginBottom: 30,
                  }}
                >
                  <div
                    style={{
                      width: `${connectorProgress(i) * 100}%`,
                      height: "100%",
                      backgroundColor: STEPS[i].color,
                      borderRadius: 2,
                    }}
                  />
                </div>
              )}
            </React.Fragment>
          );
        })}
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Phase 5: Analytics Dashboard                                       */
/* ------------------------------------------------------------------ */
const AnalyticsDashboard: React.FC = () => {
  const frame = useCurrentFrame();

  /* Entry */
  const dashOpacity = interpolate(frame, [230, 240], [0, 1], CLAMP);
  const dashY = interpolate(frame, [230, 240], [25, 0], { ...CLAMP, easing: EASING.easeOut });

  /* NPS arc */
  const npsProgress = interpolate(frame, [240, 270], [0, 72 / 100], { ...CLAMP, easing: EASING.easeOut });
  const npsCircumference = 2 * Math.PI * 50;
  const npsDashOffset = npsCircumference * (1 - npsProgress);

  /* Star fill */
  const starCount = interpolate(frame, [250, 275], [0, 4.8], { ...CLAMP, easing: EASING.easeOut });

  /* Response rate */
  const responseRate = interpolate(frame, [255, 280], [0, 89], { ...CLAMP, easing: EASING.easeOut });

  /* Review cards stagger */
  const reviewEntry = (i: number) => {
    const start = 275 + i * 6;
    const opacity = interpolate(frame, [start, start + 8], [0, 1], CLAMP);
    const y = interpolate(frame, [start, start + 8], [20, 0], { ...CLAMP, easing: EASING.easeOut });
    return { opacity, y };
  };

  const REVIEWS = [
    { name: "Jake T.", stars: 5, text: "Amazing kayak tour! Guide was fantastic." },
    { name: "Sofia R.", stars: 5, text: "Best rental experience we've ever had." },
    { name: "Noah W.", stars: 4, text: "Great service, equipment was in top shape." },
  ];

  return (
    <div
      style={{
        opacity: dashOpacity,
        transform: `translateY(${dashY}px)`,
      }}
    >
      {/* Top stats row */}
      <div style={{ display: "flex", gap: 16, marginBottom: 20 }}>
        {/* NPS Score */}
        <div
          style={{
            flex: 1,
            backgroundColor: COLORS.white,
            borderRadius: 14,
            border: `1px solid ${COLORS.gray200}`,
            padding: 20,
            display: "flex",
            alignItems: "center",
            gap: 20,
          }}
        >
          <div style={{ width: 80, height: 80, position: "relative" }}>
            <svg width={80} height={80} viewBox="0 0 110 110">
              <circle cx="55" cy="55" r="50" fill="none" stroke={COLORS.gray100} strokeWidth="8" />
              <circle
                cx="55"
                cy="55"
                r="50"
                fill="none"
                stroke={COLORS.green}
                strokeWidth="8"
                strokeDasharray={npsCircumference}
                strokeDashoffset={npsDashOffset}
                strokeLinecap="round"
                transform="rotate(-90 55 55)"
              />
            </svg>
            <div
              style={{
                position: "absolute",
                inset: 0,
                display: "flex",
                alignItems: "center",
                justifyContent: "center",
              }}
            >
              <span
                style={{
                  fontFamily: FONT.regular,
                  fontWeight: FONT.weights.bold,
                  fontSize: 22,
                  color: COLORS.green,
                }}
              >
                {Math.round(npsProgress * 100)}
              </span>
            </div>
          </div>
          <div>
            <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 16, color: COLORS.navy }}>
              NPS Score
            </div>
            <div style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray400, marginTop: 2 }}>
              Net Promoter Score
            </div>
          </div>
        </div>

        {/* Star Rating */}
        <div
          style={{
            flex: 1,
            backgroundColor: COLORS.white,
            borderRadius: 14,
            border: `1px solid ${COLORS.gray200}`,
            padding: 20,
          }}
        >
          <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 16, color: COLORS.navy, marginBottom: 8 }}>
            Average Rating
          </div>
          <div style={{ display: "flex", alignItems: "center", gap: 6 }}>
            {[1, 2, 3, 4, 5].map((star) => {
              const fill = Math.min(1, Math.max(0, starCount - (star - 1)));
              return (
                <svg key={star} width={22} height={22} viewBox="0 0 22 22">
                  <path
                    d="M11 3l2.5 5 5.5.8-4 3.9 1 5.5L11 15.5 5.9 18.2l1-5.5-4-3.9L8.5 8z"
                    fill={fill > 0 ? "#F79009" : COLORS.gray200}
                    opacity={fill > 0 ? fill : 1}
                  />
                </svg>
              );
            })}
            <span
              style={{
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.bold,
                fontSize: 18,
                color: COLORS.navy,
                marginLeft: 6,
              }}
            >
              {starCount.toFixed(1)}
            </span>
          </div>
        </div>

        {/* Response Rate */}
        <div
          style={{
            flex: 1,
            backgroundColor: COLORS.white,
            borderRadius: 14,
            border: `1px solid ${COLORS.gray200}`,
            padding: 20,
          }}
        >
          <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 16, color: COLORS.navy, marginBottom: 8 }}>
            Response Rate
          </div>
          <div
            style={{
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.bold,
              fontSize: 32,
              color: COLORS.primary,
              marginBottom: 6,
            }}
          >
            {Math.round(responseRate)}%
          </div>
          <div style={{ width: "100%", height: 6, borderRadius: 3, backgroundColor: COLORS.gray100 }}>
            <div
              style={{
                width: `${responseRate}%`,
                height: "100%",
                borderRadius: 3,
                backgroundColor: COLORS.primary,
              }}
            />
          </div>
        </div>
      </div>

      {/* Review cards */}
      <div
        style={{
          fontFamily: FONT.regular,
          fontWeight: FONT.weights.semibold,
          fontSize: 16,
          color: COLORS.navy,
          marginBottom: 12,
        }}
      >
        Recent Reviews
      </div>
      <div style={{ display: "flex", gap: 12 }}>
        {REVIEWS.map((review, i) => {
          const re = reviewEntry(i);
          return (
            <div
              key={review.name}
              style={{
                flex: 1,
                backgroundColor: COLORS.white,
                borderRadius: 12,
                border: `1px solid ${COLORS.gray200}`,
                padding: "16px 18px",
                opacity: re.opacity,
                transform: `translateY(${re.y}px)`,
              }}
            >
              <div style={{ display: "flex", alignItems: "center", gap: 8, marginBottom: 8 }}>
                <div
                  style={{
                    width: 28,
                    height: 28,
                    borderRadius: 14,
                    backgroundColor: COLORS.gray100,
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "center",
                    fontFamily: FONT.regular,
                    fontWeight: FONT.weights.semibold,
                    fontSize: 11,
                    color: COLORS.gray500,
                  }}
                >
                  {review.name[0]}
                </div>
                <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 13, color: COLORS.gray900 }}>
                  {review.name}
                </span>
              </div>
              <div style={{ display: "flex", gap: 2, marginBottom: 6 }}>
                {Array.from({ length: review.stars }).map((_, s) => (
                  <svg key={s} width={12} height={12} viewBox="0 0 12 12">
                    <path d="M6 1l1.5 3 3.3.5-2.4 2.3.6 3.3L6 8.4 3 10.1l.6-3.3L1.2 4.5l3.3-.5z" fill="#F79009" />
                  </svg>
                ))}
              </div>
              <div style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray500, lineHeight: 1.4 }}>
                {review.text}
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
export const SurveysReviews: React.FC = () => {
  const frame = useCurrentFrame();

  const showPhase1 = frame < 80;
  const showPhase23 = frame >= 78 && frame < 175;
  const showPhase4 = frame >= 168 && frame < 230;
  const showPhase5 = frame >= 228;

  return (
    <AbsoluteFill style={{ backgroundColor: COLORS.gray50 }}>
      {/* Phase 1 uses AppMockup */}
      {showPhase1 && (
        <AppMockup
          activeItem="Waivers & Forms"
          pageTitle="General Liability Waiver"
          headerRight={
            <div style={{ display: "flex", gap: 8, alignItems: "center" }}>
              <div
                style={{
                  padding: "6px 16px",
                  borderRadius: 6,
                  border: `1px solid ${COLORS.gray300}`,
                  fontFamily: FONT.regular,
                  fontSize: 12,
                  fontWeight: FONT.weights.medium,
                  color: COLORS.gray700,
                  backgroundColor: COLORS.white,
                }}
              >
                Preview form
              </div>
              <div
                style={{
                  padding: "6px 16px",
                  borderRadius: 6,
                  fontFamily: FONT.regular,
                  fontSize: 12,
                  fontWeight: FONT.weights.medium,
                  color: COLORS.white,
                  backgroundColor: COLORS.green,
                  display: "flex",
                  alignItems: "center",
                  gap: 5,
                }}
              >
                <svg width={10} height={10} viewBox="0 0 10 10" fill="none">
                  <circle cx="5" cy="5" r="3" fill={COLORS.white} />
                </svg>
                Published
              </div>
              <div
                style={{
                  padding: "6px 20px",
                  borderRadius: 6,
                  fontFamily: FONT.regular,
                  fontSize: 12,
                  fontWeight: FONT.weights.semibold,
                  color: COLORS.white,
                  backgroundColor: COLORS.primary,
                }}
              >
                Save
              </div>
            </div>
          }
        >
          <div style={{ position: "relative", width: "100%", height: "100%" }}>
            <div style={{ position: "absolute", inset: 0 }}>
              <WaiverBuilder />
            </div>
          </div>
        </AppMockup>
      )}

      {/* Phase 2+3: Tablet view (no AppMockup — customer-facing) */}
      {showPhase23 && (
        <AbsoluteFill style={{ backgroundColor: COLORS.gray50 }}>
          <CustomerSignature />
        </AbsoluteFill>
      )}

      {/* Phase 4: Timeline steps (standalone, no AppMockup) */}
      {showPhase4 && (
        <AbsoluteFill style={{ backgroundColor: COLORS.white }}>
          <TimelineSteps />
        </AbsoluteFill>
      )}

      {/* Phase 5: Analytics in AppMockup */}
      {showPhase5 && (
        <AppMockup activeItem="Surveys" pageTitle="Surveys & Reviews">
          <div style={{ position: "relative", width: "100%", height: "100%" }}>
            <div style={{ position: "absolute", inset: 0 }}>
              <AnalyticsDashboard />
            </div>
          </div>
        </AppMockup>
      )}
    </AbsoluteFill>
  );
};
