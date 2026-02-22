import React from "react";
import { AbsoluteFill, interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";
import { AppMockup } from "../components/AppMockup";

/* ------------------------------------------------------------------ */
/*  Staff Management — "Onboard → Schedule → Roster" cinematic         */
/*                                                                     */
/*  Duration: 240 frames                                               */
/*  Phase 1 (0-95):   Staff onboarding form with typing + dropdowns    */
/*  Phase 2 (95-150): Calendar shift view with block creation          */
/*  Phase 3 (150-240): Full weekly roster + coverage stats             */
/* ------------------------------------------------------------------ */

const CLAMP = { extrapolateLeft: "clamp" as const, extrapolateRight: "clamp" as const };

/* ---- Role colors ---- */
const ROLE_COLORS: Record<string, string> = {
  Guide: "#2563EB",
  Manager: "#7C3AED",
  "Front Desk": "#26AF51",
  Warehouse: "#F7581F",
};

/* ---- Staff roster data ---- */
const ROSTER_STAFF = [
  { name: "Carlos Ramirez", role: "Guide", initials: "CR" },
  { name: "Sarah Williams", role: "Manager", initials: "SW" },
  { name: "Jake Chen", role: "Front Desk", initials: "JC" },
  { name: "Mike Torres", role: "Warehouse", initials: "MT" },
  { name: "Lisa Park", role: "Guide", initials: "LP" },
];

const DAYS = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
const TIME_LABELS = ["7am", "9am", "11am", "1pm", "3pm", "5pm", "7pm"];

/* Shift blocks: [staffIndex, dayIndex, startRow, endRow, label] */
const SHIFT_BLOCKS: Array<[number, number, number, number, string]> = [
  // Carlos Ramirez (Guide)
  [0, 1, 1, 4, "9-5"], [0, 3, 1, 4, "9-5"], [0, 4, 0, 3, "7-3"], [0, 5, 2, 5, "11-7"],
  // Sarah Williams (Manager)
  [1, 0, 0, 3, "7-3"], [1, 1, 0, 3, "7-3"], [1, 2, 0, 3, "7-3"], [1, 3, 0, 3, "7-3"], [1, 4, 0, 3, "7-3"],
  // Jake Chen (Front Desk)
  [2, 0, 1, 4, "9-5"], [2, 2, 1, 4, "9-5"], [2, 4, 1, 4, "9-5"], [2, 5, 1, 4, "9-5"],
  // Mike Torres (Warehouse)
  [3, 0, 2, 5, "11-7"], [3, 1, 2, 5, "11-7"], [3, 3, 2, 5, "11-7"],
  // Lisa Park (Guide)
  [4, 2, 0, 3, "7-3"], [4, 4, 2, 5, "11-7"], [4, 5, 0, 3, "7-3"], [4, 6, 1, 4, "9-5"],
];

/* ------------------------------------------------------------------ */
/*  Helper: type-out text                                              */
/* ------------------------------------------------------------------ */
const typedText = (text: string, frame: number, startFrame: number, charsPerFrame: number = 0.5): string => {
  const elapsed = Math.max(0, frame - startFrame);
  const charCount = Math.min(text.length, Math.floor(elapsed * charsPerFrame));
  return text.substring(0, charCount);
};

/* ------------------------------------------------------------------ */
/*  Phase 1: Onboarding Form                                           */
/* ------------------------------------------------------------------ */
const OnboardingForm: React.FC = () => {
  const frame = useCurrentFrame();

  /* Form card entry */
  const formOpacity = interpolate(frame, [5, 15], [0, 1], CLAMP);
  const formY = interpolate(frame, [5, 15], [20, 0], { ...CLAMP, easing: EASING.easeOut });

  /* Field stagger */
  const fieldEntry = (index: number) => {
    const start = 10 + index * 6;
    const opacity = interpolate(frame, [start, start + 8], [0, 1], CLAMP);
    const y = interpolate(frame, [start, start + 8], [12, 0], { ...CLAMP, easing: EASING.easeOut });
    return { opacity, y };
  };

  /* Typing animations */
  const nameText = typedText("Carlos Ramirez", frame, 18, 0.7);
  const emailText = typedText("carlos@equipdash.com", frame, 28, 0.7);

  /* Role dropdown */
  const dropdownOpen = interpolate(frame, [36, 40], [0, 1], { ...CLAMP, easing: EASING.easeOut });
  const dropdownHeight = dropdownOpen * 140;
  const roleOptions = ["Admin", "Manager", "Guide", "Front Desk", "Warehouse"];
  const guideHighlight = interpolate(frame, [41, 43], [0, 1], CLAMP);
  const dropdownClose = interpolate(frame, [44, 46], [1, 0], { ...CLAMP, easing: EASING.easeIn });
  const showDropdown = frame >= 36 && frame <= 46;
  const roleSelected = frame >= 44;

  /* Location field */
  const locationSelected = frame >= 47;

  /* Permission toggles */
  const toggleEntry = (index: number) => {
    const start = 48 + index * 3;
    const opacity = interpolate(frame, [start, start + 5], [0, 1], CLAMP);
    return { opacity };
  };

  const toggle1Slide = interpolate(frame, [49, 53], [0, 1], { ...CLAMP, easing: EASING.spring });
  const toggle2Slide = interpolate(frame, [52, 56], [0, 0.5], { ...CLAMP, easing: EASING.easeOut });

  /* Exit animation */
  const exitOpacity = interpolate(frame, [90, 95], [1, 0], { ...CLAMP, easing: EASING.easeIn });
  const exitY = interpolate(frame, [90, 95], [0, -40], { ...CLAMP, easing: EASING.easeIn });

  const INPUT_STYLE: React.CSSProperties = {
    width: "100%",
    padding: "10px 14px",
    borderRadius: 8,
    border: `1px solid ${COLORS.gray200}`,
    backgroundColor: COLORS.white,
    fontFamily: FONT.regular,
    fontSize: 14,
    color: COLORS.gray900,
    marginTop: 6,
  };

  const LABEL_STYLE: React.CSSProperties = {
    fontFamily: FONT.regular,
    fontWeight: FONT.weights.medium,
    fontSize: 13,
    color: COLORS.gray700,
  };

  return (
    <div
      style={{
        opacity: exitOpacity,
        transform: `translateY(${formY + exitY}px)`,
      }}
    >
      <div
        style={{
          backgroundColor: COLORS.white,
          borderRadius: 14,
          border: `1px solid ${COLORS.gray200}`,
          padding: "28px 32px 32px",
          maxWidth: 580,
          opacity: formOpacity,
          boxShadow: "0 1px 3px rgba(0,0,0,0.04)",
        }}
      >
        {/* Header */}
        <div
          style={{
            fontFamily: FONT.regular,
            fontWeight: FONT.weights.bold,
            fontSize: 22,
            color: COLORS.navy,
            marginBottom: 24,
          }}
        >
          Add Team Member
        </div>

        {/* Full Name */}
        <div style={{ marginBottom: 18, ...fieldEntry(0), transform: `translateY(${fieldEntry(0).y}px)` }}>
          <div style={LABEL_STYLE}>Full Name</div>
          <div style={INPUT_STYLE}>
            {nameText}
            {frame >= 18 && frame < 32 && (
              <span style={{ borderRight: `2px solid ${COLORS.primary}`, marginLeft: 1, animation: "none" }} />
            )}
          </div>
        </div>

        {/* Email */}
        <div style={{ marginBottom: 18, opacity: fieldEntry(1).opacity, transform: `translateY(${fieldEntry(1).y}px)` }}>
          <div style={LABEL_STYLE}>Email</div>
          <div style={INPUT_STYLE}>
            {emailText}
            {frame >= 28 && frame < 40 && (
              <span style={{ borderRight: `2px solid ${COLORS.primary}`, marginLeft: 1 }} />
            )}
          </div>
        </div>

        {/* Role dropdown */}
        <div style={{ marginBottom: 18, opacity: fieldEntry(2).opacity, transform: `translateY(${fieldEntry(2).y}px)`, position: "relative" }}>
          <div style={LABEL_STYLE}>Role</div>
          <div
            style={{
              ...INPUT_STYLE,
              display: "flex",
              justifyContent: "space-between",
              alignItems: "center",
              cursor: "pointer",
              borderColor: showDropdown ? COLORS.primary : COLORS.gray200,
            }}
          >
            <span style={{ color: roleSelected ? COLORS.gray900 : COLORS.gray400 }}>
              {roleSelected ? "Guide" : "Select role..."}
            </span>
            <svg width={12} height={12} viewBox="0 0 12 12" fill="none">
              <path d="M3 5l3 3 3-3" stroke={COLORS.gray400} strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
            </svg>
          </div>
          {/* Dropdown options */}
          {showDropdown && (
            <div
              style={{
                position: "absolute",
                top: "100%",
                left: 0,
                right: 0,
                marginTop: 4,
                backgroundColor: COLORS.white,
                borderRadius: 10,
                border: `1px solid ${COLORS.gray200}`,
                boxShadow: "0 8px 24px rgba(0,0,0,0.12)",
                overflow: "hidden",
                maxHeight: dropdownClose < 1 ? dropdownHeight * dropdownClose : dropdownHeight,
                opacity: dropdownClose,
                zIndex: 10,
              }}
            >
              {roleOptions.map((opt, i) => {
                const isGuide = opt === "Guide";
                const highlightBg = isGuide ? interpolate(guideHighlight, [0, 1], [0, 1], CLAMP) : 0;
                return (
                  <div
                    key={opt}
                    style={{
                      padding: "9px 14px",
                      fontFamily: FONT.regular,
                      fontSize: 13,
                      color: isGuide && guideHighlight > 0.5 ? COLORS.white : COLORS.gray700,
                      backgroundColor: isGuide ? `rgba(247, 88, 31, ${highlightBg})` : "transparent",
                      fontWeight: isGuide && guideHighlight > 0.5 ? FONT.weights.semibold : FONT.weights.regular,
                    }}
                  >
                    {opt}
                  </div>
                );
              })}
            </div>
          )}
        </div>

        {/* Location */}
        <div style={{ marginBottom: 24, opacity: fieldEntry(3).opacity, transform: `translateY(${fieldEntry(3).y}px)` }}>
          <div style={LABEL_STYLE}>Location</div>
          <div
            style={{
              ...INPUT_STYLE,
              display: "flex",
              justifyContent: "space-between",
              alignItems: "center",
            }}
          >
            <span style={{ color: locationSelected ? COLORS.gray900 : COLORS.gray400 }}>
              {locationSelected ? "Marina Branch" : "Select location..."}
            </span>
            <svg width={12} height={12} viewBox="0 0 12 12" fill="none">
              <path d="M3 5l3 3 3-3" stroke={COLORS.gray400} strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
            </svg>
          </div>
        </div>

        {/* Permissions */}
        <div style={{ borderTop: `1px solid ${COLORS.gray100}`, paddingTop: 18 }}>
          <div
            style={{
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.semibold,
              fontSize: 14,
              color: COLORS.navy,
              marginBottom: 14,
            }}
          >
            Permissions
          </div>

          {/* Toggle rows */}
          {[
            { label: "Bookings", access: "Full Access", state: toggle1Slide, color: COLORS.green },
            { label: "Reports", access: "View Only", state: toggle2Slide, color: COLORS.gray400 },
            { label: "Settings", access: "No Access", state: 0, color: COLORS.red },
          ].map((perm, i) => {
            const te = toggleEntry(i);
            const slideVal = typeof perm.state === "number" ? perm.state : 0;
            return (
              <div
                key={perm.label}
                style={{
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "space-between",
                  padding: "10px 0",
                  borderBottom: i < 2 ? `1px solid ${COLORS.gray100}` : "none",
                  opacity: te.opacity,
                }}
              >
                <div style={{ display: "flex", alignItems: "center", gap: 10 }}>
                  <span style={{ fontFamily: FONT.regular, fontSize: 14, fontWeight: FONT.weights.medium, color: COLORS.gray900 }}>
                    {perm.label}:
                  </span>
                  <span style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray500 }}>
                    {perm.access}
                  </span>
                </div>
                {/* Toggle switch */}
                <div
                  style={{
                    width: 40,
                    height: 22,
                    borderRadius: 11,
                    backgroundColor: slideVal > 0.8 ? COLORS.green : slideVal > 0.3 ? COLORS.gray300 : "#FEE2E2",
                    padding: 2,
                    position: "relative",
                  }}
                >
                  <div
                    style={{
                      width: 18,
                      height: 18,
                      borderRadius: 9,
                      backgroundColor: COLORS.white,
                      boxShadow: "0 1px 3px rgba(0,0,0,0.15)",
                      position: "absolute",
                      top: 2,
                      left: 2 + slideVal * 18,
                    }}
                  />
                </div>
              </div>
            );
          })}
        </div>
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Phase 2: Calendar Shift View                                       */
/* ------------------------------------------------------------------ */
const CalendarShiftView: React.FC = () => {
  const frame = useCurrentFrame();

  /* Entry from below */
  const viewOpacity = interpolate(frame, [95, 105], [0, 1], CLAMP);
  const viewY = interpolate(frame, [95, 105], [30, 0], { ...CLAMP, easing: EASING.easeOut });

  /* Grid lines fade */
  const gridOpacity = interpolate(frame, [98, 108], [0, 1], CLAMP);

  /* Block 1: Tuesday 9-5 */
  const block1Height = interpolate(frame, [110, 125], [0, 1], { ...CLAMP, easing: EASING.spring });
  /* Block 2: Thursday 9-5 */
  const block2Height = interpolate(frame, [122, 137], [0, 1], { ...CLAMP, easing: EASING.spring });

  /* Exit */
  const exitOpacity = interpolate(frame, [145, 150], [1, 0], { ...CLAMP, easing: EASING.easeIn });
  const exitY = interpolate(frame, [145, 150], [0, -30], { ...CLAMP, easing: EASING.easeIn });

  const COL_WIDTH = 190;
  const ROW_HEIGHT = 55;
  const TIME_COL = 70;
  const times = ["7am", "8am", "9am", "10am", "11am", "12pm", "1pm", "2pm", "3pm", "4pm", "5pm", "6pm", "7pm"];

  return (
    <div
      style={{
        opacity: viewOpacity * exitOpacity,
        transform: `translateY(${viewY + exitY}px)`,
      }}
    >
      {/* Header */}
      <div
        style={{
          display: "flex",
          justifyContent: "space-between",
          alignItems: "center",
          marginBottom: 16,
        }}
      >
        <div
          style={{
            fontFamily: FONT.regular,
            fontWeight: FONT.weights.semibold,
            fontSize: 18,
            color: COLORS.navy,
          }}
        >
          Add Shift for Carlos Ramirez
        </div>
        <div
          style={{
            padding: "6px 14px",
            borderRadius: 8,
            border: `1px solid ${COLORS.gray200}`,
            backgroundColor: COLORS.white,
            fontFamily: FONT.regular,
            fontSize: 13,
            color: COLORS.gray500,
          }}
        >
          This Week: Dec 2 - 8
        </div>
      </div>

      {/* Calendar grid */}
      <div
        style={{
          backgroundColor: COLORS.white,
          borderRadius: 12,
          border: `1px solid ${COLORS.gray200}`,
          overflow: "hidden",
        }}
      >
        {/* Day headers */}
        <div
          style={{
            display: "flex",
            borderBottom: `1px solid ${COLORS.gray100}`,
          }}
        >
          <div style={{ width: TIME_COL, flexShrink: 0 }} />
          {DAYS.map((day) => (
            <div
              key={day}
              style={{
                width: COL_WIDTH,
                textAlign: "center",
                padding: "12px 0",
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.semibold,
                fontSize: 13,
                color: COLORS.gray500,
                borderLeft: `1px solid ${COLORS.gray100}`,
                opacity: gridOpacity,
              }}
            >
              {day}
            </div>
          ))}
        </div>

        {/* Time rows */}
        <div style={{ position: "relative", height: ROW_HEIGHT * 6, overflow: "hidden" }}>
          {/* Grid lines */}
          {[0, 1, 2, 3, 4, 5].map((i) => (
            <div
              key={i}
              style={{
                position: "absolute",
                top: i * ROW_HEIGHT,
                left: 0,
                right: 0,
                height: ROW_HEIGHT,
                display: "flex",
                borderBottom: `1px solid ${COLORS.gray100}`,
                opacity: gridOpacity,
              }}
            >
              {/* Time label */}
              <div
                style={{
                  width: TIME_COL,
                  flexShrink: 0,
                  display: "flex",
                  alignItems: "flex-start",
                  justifyContent: "flex-end",
                  paddingRight: 10,
                  paddingTop: 4,
                  fontFamily: FONT.regular,
                  fontSize: 11,
                  color: COLORS.gray400,
                }}
              >
                {["7am", "9am", "11am", "1pm", "3pm", "5pm"][i]}
              </div>
              {/* Day columns */}
              {DAYS.map((day) => (
                <div
                  key={day}
                  style={{
                    width: COL_WIDTH,
                    borderLeft: `1px solid ${COLORS.gray100}`,
                  }}
                />
              ))}
            </div>
          ))}

          {/* Block 1: Tuesday (index 1), rows 1-4 (9am-5pm) */}
          <div
            style={{
              position: "absolute",
              left: TIME_COL + 1 * COL_WIDTH + 6,
              top: 1 * ROW_HEIGHT + 4,
              width: COL_WIDTH - 12,
              height: (3 * ROW_HEIGHT - 8) * block1Height,
              backgroundColor: `${ROLE_COLORS.Guide}15`,
              border: `2px solid ${ROLE_COLORS.Guide}60`,
              borderRadius: 8,
              overflow: "hidden",
              display: "flex",
              flexDirection: "column",
              alignItems: "center",
              justifyContent: "center",
              opacity: block1Height > 0.01 ? 1 : 0,
            }}
          >
            {block1Height > 0.5 && (
              <>
                <div
                  style={{
                    fontFamily: FONT.regular,
                    fontWeight: FONT.weights.semibold,
                    fontSize: 13,
                    color: ROLE_COLORS.Guide,
                  }}
                >
                  Carlos R.
                </div>
                <div
                  style={{
                    fontFamily: FONT.regular,
                    fontSize: 11,
                    color: ROLE_COLORS.Guide,
                    opacity: 0.7,
                    marginTop: 2,
                  }}
                >
                  9:00 - 5:00
                </div>
              </>
            )}
          </div>

          {/* Block 2: Thursday (index 3), rows 1-4 (9am-5pm) */}
          <div
            style={{
              position: "absolute",
              left: TIME_COL + 3 * COL_WIDTH + 6,
              top: 1 * ROW_HEIGHT + 4,
              width: COL_WIDTH - 12,
              height: (3 * ROW_HEIGHT - 8) * block2Height,
              backgroundColor: `${ROLE_COLORS.Guide}15`,
              border: `2px solid ${ROLE_COLORS.Guide}60`,
              borderRadius: 8,
              overflow: "hidden",
              display: "flex",
              flexDirection: "column",
              alignItems: "center",
              justifyContent: "center",
              opacity: block2Height > 0.01 ? 1 : 0,
            }}
          >
            {block2Height > 0.5 && (
              <>
                <div
                  style={{
                    fontFamily: FONT.regular,
                    fontWeight: FONT.weights.semibold,
                    fontSize: 13,
                    color: ROLE_COLORS.Guide,
                  }}
                >
                  Carlos R.
                </div>
                <div
                  style={{
                    fontFamily: FONT.regular,
                    fontSize: 11,
                    color: ROLE_COLORS.Guide,
                    opacity: 0.7,
                    marginTop: 2,
                  }}
                >
                  9:00 - 5:00
                </div>
              </>
            )}
          </div>
        </div>
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Phase 3: Full Weekly Roster                                        */
/* ------------------------------------------------------------------ */
const WeeklyRoster: React.FC = () => {
  const frame = useCurrentFrame();

  /* Entry */
  const rosterOpacity = interpolate(frame, [150, 160], [0, 1], CLAMP);
  const rosterY = interpolate(frame, [150, 160], [25, 0], { ...CLAMP, easing: EASING.easeOut });

  /* Staff name stagger (left column) */
  const staffEntry = (i: number) => {
    const start = 155 + i * 4;
    const opacity = interpolate(frame, [start, start + 8], [0, 1], CLAMP);
    const x = interpolate(frame, [start, start + 8], [-20, 0], { ...CLAMP, easing: EASING.easeOut });
    return { opacity, x };
  };

  /* Shift block wave: diagonal cascade from top-left */
  const blockEntry = (blockIdx: number) => {
    const [staffIdx, dayIdx] = SHIFT_BLOCKS[blockIdx];
    const diag = staffIdx + dayIdx;
    const start = 165 + diag * 3;
    const opacity = interpolate(frame, [start, start + 8], [0, 1], CLAMP);
    const scale = interpolate(frame, [start, start + 8], [0.4, 1], { ...CLAMP, easing: EASING.spring });
    return { opacity, scale };
  };

  /* Coverage bar */
  const coveragePercent = interpolate(frame, [200, 230], [0, 92], { ...CLAMP, easing: EASING.easeOut });
  const coverageOpacity = interpolate(frame, [195, 205], [0, 1], CLAMP);

  /* Hours counter */
  const hoursCount = interpolate(frame, [200, 230], [0, 187], { ...CLAMP, easing: EASING.easeOut });

  /* Alert badge */
  const alertX = interpolate(frame, [225, 238], [100, 0], { ...CLAMP, easing: EASING.spring });
  const alertOpacity = interpolate(frame, [225, 235], [0, 1], CLAMP);

  const CELL_H = 48;
  const GRID_GAP = 3;

  /* Build shift block lookup */
  const shiftLookup = new Map<string, { label: string; blockIdx: number }>();
  SHIFT_BLOCKS.forEach(([si, di, , , label], idx) => {
    shiftLookup.set(`${si}-${di}`, { label, blockIdx: idx });
  });

  return (
    <div
      style={{
        opacity: rosterOpacity,
        transform: `translateY(${rosterY}px)`,
        display: "flex",
        flexDirection: "column",
        gap: 14,
      }}
    >
      {/* Header */}
      <div
        style={{
          display: "flex",
          justifyContent: "space-between",
          alignItems: "center",
        }}
      >
        <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.semibold, fontSize: 18, color: COLORS.navy }}>
          Weekly Roster
        </div>
        <div style={{ display: "flex", gap: 8, alignItems: "center" }}>
          {Object.entries(ROLE_COLORS).map(([role, color]) => (
            <div key={role} style={{ display: "flex", alignItems: "center", gap: 4 }}>
              <div style={{ width: 8, height: 8, borderRadius: 4, backgroundColor: color }} />
              <span style={{ fontFamily: FONT.regular, fontSize: 10, color: COLORS.gray500 }}>{role}</span>
            </div>
          ))}
        </div>
      </div>

      {/* Roster grid */}
      <div
        style={{
          backgroundColor: COLORS.white,
          borderRadius: 12,
          border: `1px solid ${COLORS.gray200}`,
          overflow: "hidden",
        }}
      >
        {/* Day headers */}
        <div
          style={{
            display: "grid",
            gridTemplateColumns: "180px repeat(7, 1fr)",
            gap: GRID_GAP,
            padding: "12px 14px 8px",
            borderBottom: `1px solid ${COLORS.gray100}`,
          }}
        >
          <div
            style={{
              fontFamily: FONT.regular,
              fontSize: 10,
              fontWeight: FONT.weights.semibold,
              color: COLORS.gray400,
              letterSpacing: 0.5,
              textTransform: "uppercase",
            }}
          >
            Team Member
          </div>
          {DAYS.map((day) => (
            <div
              key={day}
              style={{
                textAlign: "center",
                fontFamily: FONT.regular,
                fontSize: 11,
                fontWeight: FONT.weights.semibold,
                color: COLORS.gray500,
              }}
            >
              {day}
            </div>
          ))}
        </div>

        {/* Staff rows */}
        {ROSTER_STAFF.map((staff, staffIdx) => {
          const se = staffEntry(staffIdx);
          const roleColor = ROLE_COLORS[staff.role] || COLORS.gray400;
          return (
            <div
              key={staff.name}
              style={{
                display: "grid",
                gridTemplateColumns: "180px repeat(7, 1fr)",
                gap: GRID_GAP,
                padding: "5px 14px",
                borderBottom: staffIdx < ROSTER_STAFF.length - 1 ? `1px solid ${COLORS.gray100}` : "none",
                alignItems: "center",
                minHeight: CELL_H + 10,
              }}
            >
              {/* Staff name */}
              <div
                style={{
                  display: "flex",
                  alignItems: "center",
                  gap: 10,
                  opacity: se.opacity,
                  transform: `translateX(${se.x}px)`,
                }}
              >
                <div
                  style={{
                    width: 8,
                    height: 8,
                    borderRadius: 4,
                    backgroundColor: roleColor,
                    flexShrink: 0,
                  }}
                />
                <div>
                  <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 13, color: COLORS.gray900, lineHeight: 1.2 }}>
                    {staff.name}
                  </div>
                  <div style={{ fontFamily: FONT.regular, fontSize: 10, color: COLORS.gray400, marginTop: 1 }}>
                    {staff.role}
                  </div>
                </div>
              </div>

              {/* Day cells */}
              {DAYS.map((_, dayIdx) => {
                const shift = shiftLookup.get(`${staffIdx}-${dayIdx}`);
                if (!shift) {
                  return (
                    <div
                      key={dayIdx}
                      style={{
                        height: CELL_H,
                        borderRadius: 6,
                        backgroundColor: COLORS.gray50,
                        border: `1px dashed ${COLORS.gray200}`,
                      }}
                    />
                  );
                }
                const be = blockEntry(shift.blockIdx);
                return (
                  <div
                    key={dayIdx}
                    style={{
                      height: CELL_H,
                      borderRadius: 6,
                      backgroundColor: `${roleColor}12`,
                      border: `1.5px solid ${roleColor}40`,
                      display: "flex",
                      alignItems: "center",
                      justifyContent: "center",
                      opacity: be.opacity,
                      transform: `scale(${be.scale})`,
                    }}
                  >
                    <span
                      style={{
                        fontFamily: FONT.regular,
                        fontWeight: FONT.weights.semibold,
                        fontSize: 11,
                        color: roleColor,
                      }}
                    >
                      {shift.label}
                    </span>
                  </div>
                );
              })}
            </div>
          );
        })}
      </div>

      {/* Coverage stats row */}
      <div
        style={{
          display: "flex",
          gap: 16,
          alignItems: "stretch",
          opacity: coverageOpacity,
        }}
      >
        {/* Coverage progress bar */}
        <div
          style={{
            flex: 1,
            backgroundColor: COLORS.white,
            borderRadius: 10,
            border: `1px solid ${COLORS.gray200}`,
            padding: "14px 18px",
          }}
        >
          <div style={{ display: "flex", justifyContent: "space-between", marginBottom: 8 }}>
            <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 13, color: COLORS.gray700 }}>
              Weekly Coverage
            </span>
            <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 13, color: COLORS.green }}>
              {Math.round(coveragePercent)}%
            </span>
          </div>
          <div style={{ width: "100%", height: 10, borderRadius: 5, backgroundColor: COLORS.gray100, overflow: "hidden" }}>
            <div
              style={{
                width: `${coveragePercent}%`,
                height: "100%",
                borderRadius: 5,
                backgroundColor: COLORS.green,
              }}
            />
          </div>
        </div>

        {/* Hours counter */}
        <div
          style={{
            backgroundColor: COLORS.white,
            borderRadius: 10,
            border: `1px solid ${COLORS.gray200}`,
            padding: "14px 22px",
            display: "flex",
            alignItems: "center",
            gap: 8,
          }}
        >
          <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 22, color: COLORS.navy }}>
            {Math.round(hoursCount)}
          </span>
          <span style={{ fontFamily: FONT.regular, fontSize: 13, color: COLORS.gray400 }}>
            / 200 hrs
          </span>
        </div>

        {/* Alert badge */}
        <div
          style={{
            backgroundColor: "#FFF7ED",
            borderRadius: 10,
            border: `1px solid ${COLORS.primary}30`,
            padding: "14px 18px",
            display: "flex",
            alignItems: "center",
            gap: 10,
            opacity: alertOpacity,
            transform: `translateX(${alertX}px)`,
          }}
        >
          <div
            style={{
              width: 8,
              height: 8,
              borderRadius: 4,
              backgroundColor: COLORS.primary,
              flexShrink: 0,
            }}
          />
          <span style={{ fontFamily: FONT.regular, fontSize: 13, fontWeight: FONT.weights.medium, color: COLORS.primary, whiteSpace: "nowrap" }}>
            Gap: Saturday afternoon
          </span>
        </div>
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Main                                                               */
/* ------------------------------------------------------------------ */
export const StaffManagement: React.FC = () => {
  const frame = useCurrentFrame();

  /* Determine which phase is visible */
  const showPhase1 = frame < 95;
  const showPhase2 = frame >= 90 && frame < 150;
  const showPhase3 = frame >= 148;

  return (
    <AbsoluteFill style={{ backgroundColor: COLORS.gray50 }}>
      <AppMockup activeItem="Staff" pageTitle="Staff Management">
        <div style={{ position: "relative", width: "100%", height: "100%" }}>
          {/* Phase 1: Onboarding Form */}
          {showPhase1 && (
            <div style={{ position: "absolute", inset: 0 }}>
              <OnboardingForm />
            </div>
          )}

          {/* Phase 2: Calendar Shift View */}
          {showPhase2 && (
            <div style={{ position: "absolute", inset: 0 }}>
              <CalendarShiftView />
            </div>
          )}

          {/* Phase 3: Full Roster */}
          {showPhase3 && (
            <div style={{ position: "absolute", inset: 0 }}>
              <WeeklyRoster />
            </div>
          )}
        </div>
      </AppMockup>
    </AbsoluteFill>
  );
};
