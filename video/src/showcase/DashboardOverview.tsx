import React from "react";
import { AbsoluteFill, interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";
import { MockupSidebar } from "../components/MockupSidebar";
import { AnimatedCursor, CursorKeyframe } from "../components/AnimatedCursor";

/* ------------------------------------------------------------------ */
/*  Animated number counter                                            */
/* ------------------------------------------------------------------ */
const AnimatedCounter: React.FC<{
  value: number;
  prefix?: string;
  startFrame: number;
  duration?: number;
}> = ({ value, prefix = "", startFrame, duration = 15 }) => {
  const frame = useCurrentFrame();
  const progress = interpolate(
    frame,
    [startFrame, startFrame + duration],
    [0, 1],
    { extrapolateLeft: "clamp", extrapolateRight: "clamp", easing: EASING.easeOut }
  );
  const display = Math.round(value * progress).toLocaleString();
  return (
    <>
      {prefix}
      {display}
    </>
  );
};

/* ------------------------------------------------------------------ */
/*  Table data                                                         */
/* ------------------------------------------------------------------ */
const PICKUPS = [
  { id: "123", customer: "Lauren Walker", count: 2, status: "reserved", time: "07:00 PM", date: "Feb-17-26" },
  { id: "120", customer: "Andrew Clark", count: 2, status: "reserved", time: "07:00 PM", date: "Feb-22-26" },
  { id: "121", customer: "Nicole Lewis", count: 1, status: "reserved", time: "07:00 PM", date: "Feb-26-26" },
  { id: "122", customer: "Kevin Robinson", count: 2, status: "reserved", time: "07:00 PM", date: "Mar-05-26" },
  { id: "124", customer: "Brian Hall", count: 1, status: "reserved", time: "07:00 PM", date: "Mar-05-26" },
];

const RETURNS = [
  { id: "116", customer: "Daniel Thomas", count: 1, status: "picked up", time: "07:00 PM", date: "Feb-17-26" },
  { id: "119", customer: "Stephanie Harris", count: 1, status: "picked up", time: "07:00 PM", date: "Feb-16-26" },
  { id: "117", customer: "Ashley Jackson", count: 1, status: "picked up", time: "07:00 PM", date: "Feb-19-26" },
  { id: "118", customer: "Matthew White", count: 1, status: "picked up", time: "07:00 PM", date: "Feb-16-26" },
  { id: "125", customer: "Megan Allen", count: 1, status: "picked up", time: "07:00 PM", date: "Mar-04-26" },
];

/* ------------------------------------------------------------------ */
/*  Booking detail items                                               */
/* ------------------------------------------------------------------ */
const BOOKING_ITEMS = [
  { name: "Stand Up Paddleboard", price: "$147.00" },
  { name: "Tandem Kayak", price: "$147.00" },
];

/* ------------------------------------------------------------------ */
/*  Status badge component                                             */
/* ------------------------------------------------------------------ */
const StatusBadge: React.FC<{ status: string; count: number }> = ({ status, count }) => {
  const isReserved = status === "reserved";
  return (
    <span
      style={{
        display: "inline-block",
        padding: "3px 10px",
        borderRadius: 6,
        fontSize: 11,
        fontWeight: FONT.weights.medium,
        fontFamily: FONT.regular,
        backgroundColor: isReserved ? "#FFFAEB" : "#ECFDF3",
        color: isReserved ? "#B54708" : "#027A48",
        whiteSpace: "nowrap",
      }}
    >
      {count} {isReserved ? "reserved" : "picked up"}
    </span>
  );
};

/* ------------------------------------------------------------------ */
/*  Cursor keyframes                                                   */
/* ------------------------------------------------------------------ */
// The pickups table first row (Lauren Walker) is roughly at:
// Sidebar=224, main padding=32, table card starts ~466px from top of content
// After scroll back up, the row Y in viewport is approximately 510
// X for the row center: 224 + 32 + 350 = ~606
const CURSOR_KEYFRAMES: CursorKeyframe[] = [
  { frame: 90, x: 900, y: 800 },    // appear from bottom area
  { frame: 110, x: 560, y: 510 },   // move to Lauren Walker row
  { frame: 120, x: 560, y: 510, click: true }, // click the row
];

/* ------------------------------------------------------------------ */
/*  Main component — 225 frames (7.5s @ 30fps)                        */
/* ------------------------------------------------------------------ */
export const DashboardOverview: React.FC = () => {
  const frame = useCurrentFrame();

  /* ================================================================ */
  /*  PHASE CALCULATIONS                                               */
  /* ================================================================ */

  // Phase 1: Dashboard loads (0-30) — elements animate in
  const contentOpacity = interpolate(frame, [0, 12], [0, 1], {
    extrapolateLeft: "clamp", extrapolateRight: "clamp",
  });

  // Header animation
  const headerOpacity = interpolate(frame, [5, 15], [0, 1], {
    extrapolateLeft: "clamp", extrapolateRight: "clamp",
  });
  const headerY = interpolate(frame, [5, 15], [-15, 0], {
    extrapolateLeft: "clamp", extrapolateRight: "clamp", easing: EASING.easeOut,
  });

  // Tabs animation
  const tabsOpacity = interpolate(frame, [8, 16], [0, 1], {
    extrapolateLeft: "clamp", extrapolateRight: "clamp",
  });

  // Stat cards stagger
  const cardOpacity = (i: number) =>
    interpolate(frame, [12 + i * 4, 22 + i * 4], [0, 1], {
      extrapolateLeft: "clamp", extrapolateRight: "clamp",
    });
  const cardY = (i: number) =>
    interpolate(frame, [12 + i * 4, 22 + i * 4], [25, 0], {
      extrapolateLeft: "clamp", extrapolateRight: "clamp", easing: EASING.easeOut,
    });

  // Table rows stagger
  const rowOpacity = (tableStart: number, i: number) =>
    interpolate(frame, [tableStart + i * 3, tableStart + i * 3 + 8], [0, 1], {
      extrapolateLeft: "clamp", extrapolateRight: "clamp",
    });
  const rowY = (tableStart: number, i: number) =>
    interpolate(frame, [tableStart + i * 3, tableStart + i * 3 + 8], [18, 0], {
      extrapolateLeft: "clamp", extrapolateRight: "clamp", easing: EASING.easeOut,
    });

  // Phase 2: Scroll down (30-65) — reveal product availability section
  // Total content height is ~1320px, viewport ~1016px (1080-64 header)
  // Need to scroll about 400px to reveal the bottom section
  const scrollDown = interpolate(frame, [30, 60], [0, -400], {
    extrapolateLeft: "clamp", extrapolateRight: "clamp", easing: EASING.easeInOut,
  });

  // Phase 3: Scroll back up (65-90)
  const scrollUp = interpolate(frame, [65, 87], [-400, 0], {
    extrapolateLeft: "clamp", extrapolateRight: "clamp", easing: EASING.easeInOut,
  });

  // Combined scroll
  let scrollY = 0;
  if (frame < 30) {
    scrollY = 0;
  } else if (frame < 65) {
    scrollY = scrollDown;
  } else if (frame < 90) {
    scrollY = scrollUp;
  } else {
    scrollY = 0;
  }

  // Phase 4: Cursor interaction (90-130)
  // Row hover highlight for first pickup row
  const isHoveringRow = frame >= 105 && frame <= 180;

  // Phase 5: Detail panel slides in (130-180)
  const panelX = interpolate(frame, [130, 155], [400, 0], {
    extrapolateLeft: "clamp", extrapolateRight: "clamp", easing: EASING.easeOut,
  });
  const panelOpacity = interpolate(frame, [130, 145], [0, 1], {
    extrapolateLeft: "clamp", extrapolateRight: "clamp",
  });
  const showPanel = frame >= 130;

  // Overlay dimming behind panel
  const overlayOpacity = interpolate(frame, [130, 150], [0, 0.15], {
    extrapolateLeft: "clamp", extrapolateRight: "clamp",
  });

  /* ================================================================ */
  /*  GRID CONFIGS                                                     */
  /* ================================================================ */
  const pickupGridCols = "70px 1fr 110px 180px";
  const returnGridCols = "70px 1fr 110px 180px";

  /* ================================================================ */
  /*  RENDER                                                           */
  /* ================================================================ */
  return (
    <AbsoluteFill style={{ backgroundColor: COLORS.gray50 }}>
      <div style={{ display: "flex", width: 1920, height: 1080 }}>
        {/* ============================================================ */}
        {/*  SIDEBAR (shared component)                                   */}
        {/* ============================================================ */}
        <MockupSidebar activeItem="Dashboard" width={224} />

        {/* ============================================================ */}
        {/*  MAIN CONTENT AREA                                            */}
        {/* ============================================================ */}
        <div
          style={{
            flex: 1,
            backgroundColor: COLORS.white,
            display: "flex",
            flexDirection: "column",
            overflow: "hidden",
            position: "relative",
          }}
        >
          {/* ---- Top header bar (fixed) ---- */}
          <div
            style={{
              display: "flex",
              justifyContent: "space-between",
              alignItems: "center",
              padding: "18px 32px",
              borderBottom: `1px solid ${COLORS.gray200}`,
              opacity: headerOpacity,
              transform: `translateY(${headerY}px)`,
              flexShrink: 0,
              zIndex: 10,
              backgroundColor: COLORS.white,
            }}
          >
            <div
              style={{
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.bold,
                fontSize: 24,
                color: COLORS.dark,
              }}
            >
              Dashboard
            </div>
            <div
              style={{
                display: "flex",
                alignItems: "center",
                gap: 8,
                backgroundColor: COLORS.primary,
                color: COLORS.white,
                padding: "10px 20px",
                borderRadius: 8,
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.semibold,
                fontSize: 14,
              }}
            >
              <svg width={14} height={14} viewBox="0 0 14 14" fill="none">
                <path d="M7 1v12M1 7h12" stroke="#fff" strokeWidth="2" strokeLinecap="round" />
              </svg>
              New Booking
            </div>
          </div>

          {/* ---- Scrollable content wrapper ---- */}
          <div
            style={{
              flex: 1,
              overflow: "hidden",
              position: "relative",
            }}
          >
            <div
              style={{
                transform: `translateY(${scrollY}px)`,
                padding: "24px 32px 60px",
                opacity: contentOpacity,
              }}
            >
              {/* ---- Tabs: Rentals | Experiences ---- */}
              <div
                style={{
                  display: "flex",
                  gap: 0,
                  borderBottom: `1px solid ${COLORS.gray200}`,
                  marginBottom: 24,
                  opacity: tabsOpacity,
                }}
              >
                {[
                  { label: "Rentals", count: 34, active: true },
                  { label: "Experiences", count: 234, active: false },
                ].map((tab) => (
                  <div
                    key={tab.label}
                    style={{
                      display: "flex",
                      alignItems: "center",
                      gap: 8,
                      padding: "0 24px 12px 0",
                      marginRight: 8,
                      borderBottom: tab.active
                        ? `2px solid ${COLORS.blue}`
                        : "2px solid transparent",
                    }}
                  >
                    <span
                      style={{
                        fontFamily: FONT.regular,
                        fontSize: 15,
                        fontWeight: tab.active ? FONT.weights.semibold : FONT.weights.regular,
                        color: tab.active ? COLORS.dark : COLORS.gray400,
                      }}
                    >
                      {tab.label}
                    </span>
                    <span
                      style={{
                        fontFamily: FONT.regular,
                        fontSize: 12,
                        fontWeight: FONT.weights.medium,
                        color: tab.active ? COLORS.blue : COLORS.gray400,
                        backgroundColor: tab.active ? "rgba(0,163,250,0.08)" : COLORS.gray100,
                        padding: "2px 8px",
                        borderRadius: 10,
                      }}
                    >
                      {tab.count}
                    </span>
                  </div>
                ))}
              </div>

              {/* ---- Performance snapshot header ---- */}
              <div
                style={{
                  display: "flex",
                  justifyContent: "space-between",
                  alignItems: "flex-end",
                  marginBottom: 16,
                  opacity: headerOpacity,
                }}
              >
                <div>
                  <div
                    style={{
                      fontFamily: FONT.regular,
                      fontWeight: FONT.weights.semibold,
                      fontSize: 18,
                      color: COLORS.dark,
                      marginBottom: 4,
                    }}
                  >
                    Performance snapshot
                  </div>
                  <div
                    style={{
                      fontFamily: FONT.regular,
                      fontSize: 13,
                      color: COLORS.gray400,
                    }}
                  >
                    Showing performance for today
                  </div>
                </div>
                <div
                  style={{
                    display: "flex",
                    alignItems: "center",
                    gap: 6,
                    padding: "8px 16px",
                    borderRadius: 8,
                    border: `1px solid ${COLORS.gray200}`,
                    backgroundColor: COLORS.white,
                    fontFamily: FONT.regular,
                    fontSize: 13,
                    fontWeight: FONT.weights.medium,
                    color: COLORS.gray700,
                  }}
                >
                  Today
                  <svg width={12} height={12} viewBox="0 0 12 12" fill="none">
                    <path d="M3 5l3 3 3-3" stroke={COLORS.gray400} strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
                  </svg>
                </div>
              </div>

              {/* ---- Stat cards ---- */}
              <div
                style={{
                  display: "grid",
                  gridTemplateColumns: "1fr 1fr 1fr",
                  gap: 20,
                  marginBottom: 28,
                }}
              >
                {[
                  {
                    label: "Sales",
                    value: 12390,
                    prefix: "$",
                    change: "+3.5%",
                    changeColor: COLORS.green,
                    changeIcon: "up" as const,
                  },
                  {
                    label: "Bookings in Period",
                    value: 434,
                    prefix: "",
                    change: "-9.5%",
                    changeColor: COLORS.red,
                    changeIcon: "down" as const,
                  },
                  {
                    label: "Bookings Received",
                    value: 13,
                    prefix: "",
                    change: "0.0%",
                    changeColor: COLORS.gray400,
                    changeIcon: "neutral" as const,
                  },
                ].map((stat, i) => (
                  <div
                    key={stat.label}
                    style={{
                      backgroundColor: COLORS.white,
                      borderRadius: 12,
                      padding: "20px 24px",
                      border: `1px solid ${COLORS.gray200}`,
                      opacity: cardOpacity(i),
                      transform: `translateY(${cardY(i)}px)`,
                    }}
                  >
                    <div
                      style={{
                        fontFamily: FONT.regular,
                        fontSize: 13,
                        color: COLORS.gray500,
                        marginBottom: 8,
                        fontWeight: FONT.weights.regular,
                      }}
                    >
                      {stat.label}
                    </div>
                    <div
                      style={{
                        display: "flex",
                        alignItems: "baseline",
                        gap: 10,
                      }}
                    >
                      <div
                        style={{
                          fontFamily: FONT.regular,
                          fontWeight: FONT.weights.bold,
                          fontSize: 28,
                          color: COLORS.dark,
                          lineHeight: 1,
                        }}
                      >
                        <AnimatedCounter
                          value={stat.value}
                          prefix={stat.prefix}
                          startFrame={12 + i * 4}
                        />
                      </div>
                      <div
                        style={{
                          display: "flex",
                          alignItems: "center",
                          gap: 3,
                          fontFamily: FONT.regular,
                          fontSize: 13,
                          fontWeight: FONT.weights.medium,
                          color: stat.changeColor,
                        }}
                      >
                        {stat.changeIcon === "up" && (
                          <svg width={12} height={12} viewBox="0 0 12 12" fill="none">
                            <path d="M6 2l4 5H2l4-5z" fill={COLORS.green} />
                          </svg>
                        )}
                        {stat.changeIcon === "down" && (
                          <svg width={12} height={12} viewBox="0 0 12 12" fill="none">
                            <path d="M6 10l4-5H2l4 5z" fill={COLORS.red} />
                          </svg>
                        )}
                        {stat.changeIcon === "neutral" && (
                          <span style={{ fontSize: 13, marginRight: 2 }}>--</span>
                        )}
                        {stat.changeIcon !== "neutral" ? stat.change : "0.0%"}
                      </div>
                    </div>
                  </div>
                ))}
              </div>

              {/* ---- Tables: Upcoming Pickups & Next Returns ---- */}
              <div
                style={{
                  display: "grid",
                  gridTemplateColumns: "1fr 1fr",
                  gap: 20,
                  marginBottom: 32,
                }}
              >
                {/* ====== UPCOMING PICKUPS ====== */}
                <div
                  style={{
                    backgroundColor: COLORS.white,
                    borderRadius: 12,
                    padding: "20px",
                    border: `1px solid ${COLORS.gray200}`,
                  }}
                >
                  {/* Table header row */}
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
                        fontSize: 16,
                        color: COLORS.dark,
                      }}
                    >
                      Upcoming Pickups
                    </div>
                    <div
                      style={{
                        padding: "4px 10px",
                        borderRadius: 6,
                        backgroundColor: "#FFF4ED",
                        fontFamily: FONT.regular,
                        fontSize: 12,
                        fontWeight: FONT.weights.medium,
                        color: COLORS.primary,
                      }}
                    >
                      Late pick ups (1)
                    </div>
                  </div>

                  {/* Column headers */}
                  <div
                    style={{
                      display: "grid",
                      gridTemplateColumns: pickupGridCols,
                      padding: "10px 8px",
                      borderBottom: `1px solid ${COLORS.gray100}`,
                      fontFamily: FONT.regular,
                      fontSize: 12,
                      fontWeight: FONT.weights.medium,
                      color: COLORS.gray400,
                    }}
                  >
                    <div>Booking #</div>
                    <div>Customer</div>
                    <div />
                    <div>Pick up time</div>
                  </div>

                  {/* Rows */}
                  {PICKUPS.map((row, i) => {
                    const isFirstRow = i === 0;
                    const rowHighlight = isFirstRow && isHoveringRow;
                    return (
                      <div
                        key={row.id}
                        style={{
                          display: "grid",
                          gridTemplateColumns: pickupGridCols,
                          padding: "12px 8px",
                          borderBottom: i < PICKUPS.length - 1 ? `1px solid ${COLORS.gray100}` : "none",
                          fontFamily: FONT.regular,
                          fontSize: 13,
                          alignItems: "center",
                          opacity: rowOpacity(20, i),
                          transform: `translateY(${rowY(20, i)}px)`,
                          backgroundColor: rowHighlight ? "rgba(0,163,250,0.04)" : "transparent",
                          borderRadius: rowHighlight ? 6 : 0,
                          transition: "background-color 0.15s ease",
                        }}
                      >
                        <div style={{ color: COLORS.blue, fontWeight: FONT.weights.semibold }}>
                          {row.id}
                        </div>
                        <div style={{ color: COLORS.gray700 }}>{row.customer}</div>
                        <div>
                          <StatusBadge status={row.status} count={row.count} />
                        </div>
                        <div style={{ color: COLORS.gray500, fontSize: 12 }}>
                          {row.time} {row.date}
                        </div>
                      </div>
                    );
                  })}

                  {/* View all link */}
                  <div
                    style={{
                      paddingTop: 12,
                      fontFamily: FONT.regular,
                      fontSize: 13,
                      fontWeight: FONT.weights.medium,
                      color: COLORS.blue,
                    }}
                  >
                    {"View all upcoming pickups (5) >"}
                  </div>
                </div>

                {/* ====== NEXT RETURNS ====== */}
                <div
                  style={{
                    backgroundColor: COLORS.white,
                    borderRadius: 12,
                    padding: "20px",
                    border: `1px solid ${COLORS.gray200}`,
                  }}
                >
                  {/* Table header row */}
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
                        fontSize: 16,
                        color: COLORS.dark,
                      }}
                    >
                      Next Returns
                    </div>
                    <div
                      style={{
                        padding: "4px 10px",
                        borderRadius: 6,
                        backgroundColor: "#FEF3F2",
                        fontFamily: FONT.regular,
                        fontSize: 12,
                        fontWeight: FONT.weights.medium,
                        color: "#B42318",
                      }}
                    >
                      Late returns (4)
                    </div>
                  </div>

                  {/* Column headers */}
                  <div
                    style={{
                      display: "grid",
                      gridTemplateColumns: returnGridCols,
                      padding: "10px 8px",
                      borderBottom: `1px solid ${COLORS.gray100}`,
                      fontFamily: FONT.regular,
                      fontSize: 12,
                      fontWeight: FONT.weights.medium,
                      color: COLORS.gray400,
                    }}
                  >
                    <div>Booking #</div>
                    <div>Customer</div>
                    <div />
                    <div>Return time</div>
                  </div>

                  {/* Rows */}
                  {RETURNS.map((row, i) => (
                    <div
                      key={row.id}
                      style={{
                        display: "grid",
                        gridTemplateColumns: returnGridCols,
                        padding: "12px 8px",
                        borderBottom: i < RETURNS.length - 1 ? `1px solid ${COLORS.gray100}` : "none",
                        fontFamily: FONT.regular,
                        fontSize: 13,
                        alignItems: "center",
                        opacity: rowOpacity(24, i),
                        transform: `translateY(${rowY(24, i)}px)`,
                      }}
                    >
                      <div style={{ color: COLORS.blue, fontWeight: FONT.weights.semibold }}>
                        {row.id}
                      </div>
                      <div style={{ color: COLORS.gray700 }}>{row.customer}</div>
                      <div>
                        <StatusBadge status={row.status} count={row.count} />
                      </div>
                      <div style={{ color: COLORS.gray500, fontSize: 12 }}>
                        {row.time} {row.date}
                      </div>
                    </div>
                  ))}

                  {/* View all link */}
                  <div
                    style={{
                      paddingTop: 12,
                      fontFamily: FONT.regular,
                      fontSize: 13,
                      fontWeight: FONT.weights.medium,
                      color: COLORS.blue,
                    }}
                  >
                    {"View all upcoming returns (5) >"}
                  </div>
                </div>
              </div>

              {/* ---- Product availability section (below fold) ---- */}
              <div
                style={{
                  backgroundColor: COLORS.white,
                  borderRadius: 12,
                  padding: "24px",
                  border: `1px solid ${COLORS.gray200}`,
                }}
              >
                {/* Section header */}
                <div
                  style={{
                    display: "flex",
                    justifyContent: "space-between",
                    alignItems: "center",
                    marginBottom: 20,
                  }}
                >
                  <div
                    style={{
                      fontFamily: FONT.regular,
                      fontWeight: FONT.weights.semibold,
                      fontSize: 16,
                      color: COLORS.dark,
                    }}
                  >
                    Product availability
                  </div>
                  <div
                    style={{
                      display: "flex",
                      alignItems: "center",
                      gap: 6,
                      padding: "8px 16px",
                      borderRadius: 8,
                      border: `1px solid ${COLORS.gray200}`,
                      backgroundColor: COLORS.white,
                      fontFamily: FONT.regular,
                      fontSize: 13,
                      fontWeight: FONT.weights.medium,
                      color: COLORS.blue,
                    }}
                  >
                    View rental calendar
                    <svg width={12} height={12} viewBox="0 0 12 12" fill="none">
                      <path d="M4 2l5 4-5 4" stroke={COLORS.blue} strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
                    </svg>
                  </div>
                </div>

                {/* Timeline header */}
                <div
                  style={{
                    display: "flex",
                    borderBottom: `1px solid ${COLORS.gray200}`,
                    marginBottom: 16,
                    paddingBottom: 8,
                  }}
                >
                  {["09:00 AM", "10:00 AM", "11:00 AM", "12:00 PM"].map((time) => (
                    <div
                      key={time}
                      style={{
                        flex: 1,
                        fontFamily: FONT.regular,
                        fontSize: 12,
                        color: COLORS.gray400,
                        fontWeight: FONT.weights.medium,
                      }}
                    >
                      {time}
                    </div>
                  ))}
                </div>

                {/* Product row */}
                <div
                  style={{
                    display: "flex",
                    alignItems: "center",
                    gap: 16,
                    marginBottom: 16,
                  }}
                >
                  {/* Product label */}
                  <div style={{ width: 200, flexShrink: 0 }}>
                    <div
                      style={{
                        fontFamily: FONT.regular,
                        fontSize: 13,
                        fontWeight: FONT.weights.semibold,
                        color: COLORS.dark,
                        marginBottom: 2,
                      }}
                    >
                      Ski Set (#325)
                    </div>
                    <div
                      style={{
                        fontFamily: FONT.regular,
                        fontSize: 11,
                        color: COLORS.gray400,
                      }}
                    >
                      Available: 3/3
                    </div>
                  </div>

                  {/* Timeline bar */}
                  <div
                    style={{
                      flex: 1,
                      height: 32,
                      backgroundColor: COLORS.gray100,
                      borderRadius: 6,
                      position: "relative",
                      overflow: "hidden",
                    }}
                  >
                    <div
                      style={{
                        position: "absolute",
                        left: "5%",
                        width: "60%",
                        top: 4,
                        bottom: 4,
                        backgroundColor: "#ECFDF3",
                        border: `1px solid ${COLORS.green}`,
                        borderRadius: 4,
                        display: "flex",
                        alignItems: "center",
                        paddingLeft: 8,
                        fontFamily: FONT.regular,
                        fontSize: 11,
                        fontWeight: FONT.weights.medium,
                        color: "#027A48",
                      }}
                    >
                      Available
                    </div>
                  </div>
                </div>

                {/* Footer */}
                <div
                  style={{
                    fontFamily: FONT.regular,
                    fontSize: 12,
                    color: COLORS.gray400,
                    paddingTop: 8,
                    borderTop: `1px solid ${COLORS.gray100}`,
                  }}
                >
                  Showing 1 of 1 products
                </div>
              </div>
            </div>

            {/* ---- Overlay dimming when panel is open ---- */}
            {showPanel && (
              <div
                style={{
                  position: "absolute",
                  top: 0,
                  left: 0,
                  right: 0,
                  bottom: 0,
                  backgroundColor: `rgba(0,0,0,${overlayOpacity})`,
                  zIndex: 50,
                  pointerEvents: "none",
                }}
              />
            )}

            {/* ---- Booking detail panel (slides in from right) ---- */}
            {showPanel && (
              <div
                style={{
                  position: "absolute",
                  top: 0,
                  right: 0,
                  width: 380,
                  height: "100%",
                  backgroundColor: COLORS.white,
                  boxShadow: "-8px 0 32px rgba(0,0,0,0.12)",
                  zIndex: 100,
                  transform: `translateX(${panelX}px)`,
                  opacity: panelOpacity,
                  display: "flex",
                  flexDirection: "column",
                  overflow: "hidden",
                }}
              >
                {/* Panel header */}
                <div
                  style={{
                    padding: "20px 24px",
                    borderBottom: `1px solid ${COLORS.gray200}`,
                    display: "flex",
                    justifyContent: "space-between",
                    alignItems: "center",
                  }}
                >
                  <div
                    style={{
                      fontFamily: FONT.regular,
                      fontWeight: FONT.weights.bold,
                      fontSize: 18,
                      color: COLORS.dark,
                    }}
                  >
                    Booking detail - #123
                  </div>
                  <div
                    style={{
                      padding: "4px 12px",
                      borderRadius: 6,
                      backgroundColor: "#FFFAEB",
                      fontFamily: FONT.regular,
                      fontSize: 12,
                      fontWeight: FONT.weights.medium,
                      color: "#B54708",
                    }}
                  >
                    Reserved
                  </div>
                </div>

                {/* Panel body */}
                <div style={{ flex: 1, padding: "24px", overflowY: "auto" }}>
                  {/* CUSTOMER section */}
                  <div style={{ marginBottom: 28 }}>
                    <div
                      style={{
                        fontFamily: FONT.regular,
                        fontSize: 11,
                        fontWeight: FONT.weights.semibold,
                        color: COLORS.gray400,
                        letterSpacing: 0.8,
                        textTransform: "uppercase",
                        marginBottom: 14,
                      }}
                    >
                      Customer
                    </div>
                    <div style={{ display: "flex", alignItems: "center", gap: 12 }}>
                      {/* Avatar */}
                      <div
                        style={{
                          width: 42,
                          height: 42,
                          borderRadius: "50%",
                          backgroundColor: COLORS.green,
                          display: "flex",
                          alignItems: "center",
                          justifyContent: "center",
                          fontFamily: FONT.regular,
                          fontWeight: FONT.weights.bold,
                          fontSize: 15,
                          color: COLORS.white,
                          flexShrink: 0,
                        }}
                      >
                        LW
                      </div>
                      <div>
                        <div
                          style={{
                            fontFamily: FONT.regular,
                            fontWeight: FONT.weights.semibold,
                            fontSize: 15,
                            color: COLORS.dark,
                            marginBottom: 2,
                          }}
                        >
                          Lauren Walker
                        </div>
                        <div
                          style={{
                            fontFamily: FONT.regular,
                            fontSize: 12,
                            color: COLORS.gray400,
                          }}
                        >
                          lauren.walker@example.com
                        </div>
                      </div>
                    </div>
                  </div>

                  {/* BOOKING INFORMATION section */}
                  <div style={{ marginBottom: 28 }}>
                    <div
                      style={{
                        fontFamily: FONT.regular,
                        fontSize: 11,
                        fontWeight: FONT.weights.semibold,
                        color: COLORS.gray400,
                        letterSpacing: 0.8,
                        textTransform: "uppercase",
                        marginBottom: 14,
                      }}
                    >
                      Booking information
                    </div>
                    <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: "12px 16px" }}>
                      {[
                        { label: "Booking type", value: "Rental" },
                        { label: "Payment", value: "$294.00" },
                        { label: "Start date", value: "Feb 17, 2026" },
                        { label: "End date", value: "Feb 19, 2026" },
                      ].map((field) => (
                        <div key={field.label}>
                          <div
                            style={{
                              fontFamily: FONT.regular,
                              fontSize: 12,
                              color: COLORS.gray400,
                              marginBottom: 4,
                            }}
                          >
                            {field.label}
                          </div>
                          <div
                            style={{
                              fontFamily: FONT.regular,
                              fontSize: 14,
                              fontWeight: FONT.weights.medium,
                              color: COLORS.dark,
                            }}
                          >
                            {field.value}
                          </div>
                        </div>
                      ))}
                    </div>
                  </div>

                  {/* ITEMS section */}
                  <div>
                    <div
                      style={{
                        fontFamily: FONT.regular,
                        fontSize: 11,
                        fontWeight: FONT.weights.semibold,
                        color: COLORS.gray400,
                        letterSpacing: 0.8,
                        textTransform: "uppercase",
                        marginBottom: 14,
                      }}
                    >
                      Items
                    </div>
                    {BOOKING_ITEMS.map((item, i) => (
                      <div
                        key={item.name}
                        style={{
                          display: "flex",
                          justifyContent: "space-between",
                          alignItems: "center",
                          padding: "12px 0",
                          borderBottom: i < BOOKING_ITEMS.length - 1 ? `1px solid ${COLORS.gray100}` : "none",
                        }}
                      >
                        <div
                          style={{
                            fontFamily: FONT.regular,
                            fontSize: 14,
                            color: COLORS.dark,
                          }}
                        >
                          {item.name}
                        </div>
                        <div
                          style={{
                            fontFamily: FONT.regular,
                            fontSize: 14,
                            fontWeight: FONT.weights.medium,
                            color: COLORS.gray700,
                          }}
                        >
                          {item.price}
                        </div>
                      </div>
                    ))}

                    {/* Total */}
                    <div
                      style={{
                        display: "flex",
                        justifyContent: "space-between",
                        alignItems: "center",
                        paddingTop: 14,
                        marginTop: 4,
                        borderTop: `2px solid ${COLORS.gray200}`,
                      }}
                    >
                      <div
                        style={{
                          fontFamily: FONT.regular,
                          fontSize: 15,
                          fontWeight: FONT.weights.bold,
                          color: COLORS.dark,
                        }}
                      >
                        Total
                      </div>
                      <div
                        style={{
                          fontFamily: FONT.regular,
                          fontSize: 15,
                          fontWeight: FONT.weights.bold,
                          color: COLORS.dark,
                        }}
                      >
                        $294.00
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            )}
          </div>

          {/* ---- Animated cursor ---- */}
          <AnimatedCursor
            keyframes={CURSOR_KEYFRAMES}
            lingerFrames={105}
          />
        </div>
      </div>
    </AbsoluteFill>
  );
};
