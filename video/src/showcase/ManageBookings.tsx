import React from "react";
import { AbsoluteFill, interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";
import { AppMockup } from "../components/AppMockup";
import { StatusBadge } from "../components/StatusBadge";

/* ------------------------------------------------------------------ */
/*  ManageBookings v3 — "Bookings Command Center"                      */
/*                                                                     */
/*  Duration: 190 frames                                               */
/*  Phase 1 (0-50):    Dashboard loads, KPI cards count up,            */
/*                      calendar strip with today highlighted           */
/*  Phase 2 (50-90):   "Today's Pickups" table, rows stagger in,      */
/*                      first row highlights with cursor click          */
/*  Phase 3 (90-130):  Status badge morphs Reserved → Picked Up,      */
/*                      row glows green briefly                         */
/*  Phase 4 (130-190): "Late Returns" section, red alerts pulse,       */
/*                      warning icons animate, 2 overdue items          */
/* ------------------------------------------------------------------ */

const CLAMP = { extrapolateLeft: "clamp" as const, extrapolateRight: "clamp" as const };

/* ------------------------------------------------------------------ */
/*  Animated counter                                                    */
/* ------------------------------------------------------------------ */
const AnimatedCounter: React.FC<{
  value: number;
  prefix?: string;
  startFrame: number;
  duration?: number;
}> = ({ value, prefix = "", startFrame, duration = 18 }) => {
  const frame = useCurrentFrame();
  const progress = interpolate(
    frame,
    [startFrame, startFrame + duration],
    [0, 1],
    { ...CLAMP, easing: EASING.easeOut }
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
/*  Data                                                                */
/* ------------------------------------------------------------------ */
const PICKUP_ROWS = [
  { id: "#2041", customer: "Emma Scott", item: "Mountain Bike x2", time: "9:00 AM", status: "reserved" as const },
  { id: "#2042", customer: "Andrew Clark", item: "E-Bike City", time: "10:30 AM", status: "reserved" as const },
  { id: "#2043", customer: "Nicole Lewis", item: "Kayak Double", time: "11:00 AM", status: "reserved" as const },
  { id: "#2044", customer: "Kevin Robinson", item: "SUP Board", time: "1:00 PM", status: "reserved" as const },
  { id: "#2045", customer: "Megan Allen", item: "Trail Bike Pro", time: "2:30 PM", status: "confirmed" as const },
];

const LATE_RETURNS = [
  { id: "#2018", customer: "Daniel Thomas", item: "Surfboard Longboard", due: "Yesterday 5:00 PM", hours: "16h late" },
  { id: "#2023", customer: "Stephanie Harris", item: "Mountain Bike x1", due: "Today 8:00 AM", hours: "3h late" },
];

const CALENDAR_DAYS = [
  { label: "Mon", day: 16, bookings: 5 },
  { label: "Tue", day: 17, bookings: 8 },
  { label: "Wed", day: 18, bookings: 6, today: true },
  { label: "Thu", day: 19, bookings: 4 },
  { label: "Fri", day: 20, bookings: 9 },
  { label: "Sat", day: 21, bookings: 12 },
  { label: "Sun", day: 22, bookings: 7 },
];

/* ------------------------------------------------------------------ */
/*  KPI stat cards                                                     */
/* ------------------------------------------------------------------ */
const KPICards: React.FC = () => {
  const frame = useCurrentFrame();

  const stats = [
    { label: "Today's Pickups", value: 8, icon: "pickup", color: COLORS.confirmed },
    { label: "Returns Due", value: 5, icon: "return", color: "#F79009" },
    { label: "Active Rentals", value: 47, icon: "active", color: COLORS.green },
  ];

  return (
    <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr 1fr", gap: 20, marginBottom: 24 }}>
      {stats.map((stat, i) => {
        const start = 18 + i * 5;
        const cardOpacity = interpolate(frame, [start, start + 10], [0, 1], CLAMP);
        const cardY = interpolate(frame, [start, start + 10], [24, 0], { ...CLAMP, easing: EASING.easeOut });
        const iconScale = interpolate(frame, [start + 6, start + 14], [0, 1], { ...CLAMP, easing: EASING.spring });

        return (
          <div
            key={stat.label}
            style={{
              backgroundColor: COLORS.white,
              borderRadius: 14,
              padding: "22px 24px",
              border: `1px solid ${COLORS.gray200}`,
              opacity: cardOpacity,
              transform: `translateY(${cardY}px)`,
              display: "flex",
              alignItems: "center",
              gap: 16,
            }}
          >
            {/* Icon circle */}
            <div
              style={{
                width: 48,
                height: 48,
                borderRadius: 12,
                backgroundColor: `${stat.color}12`,
                display: "flex",
                alignItems: "center",
                justifyContent: "center",
                flexShrink: 0,
                transform: `scale(${iconScale})`,
              }}
            >
              {stat.icon === "pickup" && (
                <svg width={22} height={22} viewBox="0 0 22 22" fill="none">
                  <path d="M11 3v12M7 11l4 4 4-4" stroke={stat.color} strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" />
                  <path d="M4 19h14" stroke={stat.color} strokeWidth="2" strokeLinecap="round" />
                </svg>
              )}
              {stat.icon === "return" && (
                <svg width={22} height={22} viewBox="0 0 22 22" fill="none">
                  <path d="M11 19V7M7 11l4-4 4 4" stroke={stat.color} strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" />
                  <path d="M4 3h14" stroke={stat.color} strokeWidth="2" strokeLinecap="round" />
                </svg>
              )}
              {stat.icon === "active" && (
                <svg width={22} height={22} viewBox="0 0 22 22" fill="none">
                  <circle cx="11" cy="11" r="7" stroke={stat.color} strokeWidth="2" />
                  <circle cx="11" cy="11" r="3" fill={stat.color} />
                </svg>
              )}
            </div>

            <div>
              <div
                style={{
                  fontFamily: FONT.regular,
                  fontSize: 13,
                  color: COLORS.gray500,
                  marginBottom: 4,
                }}
              >
                {stat.label}
              </div>
              <div
                style={{
                  fontFamily: FONT.regular,
                  fontWeight: FONT.weights.bold,
                  fontSize: 32,
                  color: COLORS.dark,
                  lineHeight: 1,
                }}
              >
                <AnimatedCounter value={stat.value} startFrame={start} />
              </div>
            </div>
          </div>
        );
      })}
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Calendar strip                                                     */
/* ------------------------------------------------------------------ */
const CalendarStrip: React.FC = () => {
  const frame = useCurrentFrame();

  const stripOpacity = interpolate(frame, [36, 44], [0, 1], CLAMP);
  const stripY = interpolate(frame, [36, 44], [12, 0], { ...CLAMP, easing: EASING.easeOut });

  return (
    <div
      style={{
        display: "flex",
        gap: 8,
        marginBottom: 24,
        opacity: stripOpacity,
        transform: `translateY(${stripY}px)`,
      }}
    >
      {CALENDAR_DAYS.map((day, i) => {
        const dayOpacity = interpolate(frame, [38 + i * 2, 44 + i * 2], [0, 1], CLAMP);
        const todayPulse = day.today && frame >= 44
          ? interpolate(frame, [44, 50, 56], [0.9, 1.04, 1], { ...CLAMP, easing: EASING.spring })
          : 1;

        return (
          <div
            key={day.label}
            style={{
              flex: 1,
              padding: "12px 8px",
              borderRadius: 12,
              backgroundColor: day.today ? COLORS.navy : COLORS.white,
              border: day.today ? "none" : `1px solid ${COLORS.gray200}`,
              textAlign: "center",
              opacity: dayOpacity,
              transform: `scale(${todayPulse})`,
            }}
          >
            <div
              style={{
                fontFamily: FONT.regular,
                fontSize: 11,
                color: day.today ? "rgba(255,255,255,0.7)" : COLORS.gray400,
                marginBottom: 4,
              }}
            >
              {day.label}
            </div>
            <div
              style={{
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.bold,
                fontSize: 20,
                color: day.today ? COLORS.white : COLORS.dark,
                marginBottom: 4,
              }}
            >
              {day.day}
            </div>
            <div
              style={{
                fontFamily: FONT.regular,
                fontSize: 10,
                color: day.today ? COLORS.primary : COLORS.gray400,
                fontWeight: FONT.weights.medium,
              }}
            >
              {day.bookings} bookings
            </div>
          </div>
        );
      })}
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Today's Pickups table (Phase 2)                                    */
/* ------------------------------------------------------------------ */
const PickupsTable: React.FC = () => {
  const frame = useCurrentFrame();

  /* Table container */
  const tableOpacity = interpolate(frame, [48, 56], [0, 1], CLAMP);
  const tableY = interpolate(frame, [48, 56], [18, 0], { ...CLAMP, easing: EASING.easeOut });

  /* Row stagger */
  const rowEntry = (i: number) => {
    const start = 54 + i * 4;
    const opacity = interpolate(frame, [start, start + 8], [0, 1], CLAMP);
    const x = interpolate(frame, [start, start + 8], [-20, 0], { ...CLAMP, easing: EASING.easeOut });
    return { opacity, x };
  };

  /* First row highlight (click animation) */
  const highlightOpacity = interpolate(frame, [78, 86], [0, 1], CLAMP);
  const highlightGlow = interpolate(frame, [78, 88, 95, 100], [0, 8, 8, 3], CLAMP);

  /* Cursor animation */
  const cursorOpacity = interpolate(frame, [72, 78], [0, 1], CLAMP);
  const cursorX = interpolate(frame, [72, 80], [500, 340], { ...CLAMP, easing: EASING.easeOut });
  const cursorY = interpolate(frame, [72, 80], [200, 48], { ...CLAMP, easing: EASING.easeOut });
  const cursorClick = frame >= 82
    ? interpolate(frame, [82, 84, 86], [1, 0.85, 1], { ...CLAMP, easing: EASING.spring })
    : 1;

  /* Status morph for first row (Phase 3) */
  const morphProgress = interpolate(frame, [94, 108], [0, 1], { ...CLAMP, easing: EASING.easeInOut });

  /* Green glow on row after morph */
  const greenGlow = interpolate(frame, [106, 114, 125, 130], [0, 12, 12, 0], CLAMP);
  const greenBg = interpolate(frame, [106, 114], [0, 0.08], CLAMP);

  /* Checkmark after morph */
  const checkOpacity = interpolate(frame, [110, 116], [0, 1], CLAMP);
  const checkScale = interpolate(frame, [110, 120], [0, 1], { ...CLAMP, easing: EASING.spring });

  const TABLE_COLS = "80px 1fr 1fr 100px 100px";

  return (
    <div
      style={{
        backgroundColor: COLORS.white,
        borderRadius: 14,
        border: `1px solid ${COLORS.gray200}`,
        overflow: "hidden",
        marginBottom: 20,
        opacity: tableOpacity,
        transform: `translateY(${tableY}px)`,
        position: "relative",
      }}
    >
      {/* Table header */}
      <div
        style={{
          padding: "16px 24px",
          display: "flex",
          justifyContent: "space-between",
          alignItems: "center",
          borderBottom: `1px solid ${COLORS.gray100}`,
        }}
      >
        <div style={{ display: "flex", alignItems: "center", gap: 10 }}>
          <div
            style={{
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.semibold,
              fontSize: 16,
              color: COLORS.dark,
            }}
          >
            Today's Pickups
          </div>
          <div
            style={{
              padding: "3px 10px",
              borderRadius: 99,
              backgroundColor: `${COLORS.confirmed}12`,
              fontFamily: FONT.regular,
              fontSize: 12,
              fontWeight: FONT.weights.semibold,
              color: COLORS.confirmed,
            }}
          >
            8
          </div>
        </div>
        <div
          style={{
            padding: "6px 14px",
            borderRadius: 8,
            border: `1px solid ${COLORS.gray200}`,
            fontFamily: FONT.regular,
            fontSize: 12,
            color: COLORS.gray500,
            display: "flex",
            alignItems: "center",
            gap: 6,
          }}
        >
          View all
          <svg width={12} height={12} viewBox="0 0 12 12" fill="none">
            <path d="M4 3l3 3-3 3" stroke={COLORS.gray400} strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
          </svg>
        </div>
      </div>

      {/* Column headers */}
      <div
        style={{
          display: "grid",
          gridTemplateColumns: TABLE_COLS,
          padding: "10px 24px",
          borderBottom: `1px solid ${COLORS.gray100}`,
          fontFamily: FONT.regular,
          fontSize: 11,
          fontWeight: FONT.weights.medium,
          color: COLORS.gray400,
          textTransform: "uppercase",
          letterSpacing: 0.5,
        }}
      >
        <div>Booking</div>
        <div>Customer</div>
        <div>Item</div>
        <div>Time</div>
        <div>Status</div>
      </div>

      {/* Rows */}
      {PICKUP_ROWS.map((row, i) => {
        const re = rowEntry(i);
        const isFirst = i === 0;
        const rowBg = isFirst && frame >= 78
          ? `rgba(37, 99, 235, ${0.06 * highlightOpacity})`
          : isFirst && frame >= 106
            ? `rgba(38, 175, 81, ${greenBg})`
            : "transparent";

        return (
          <div
            key={row.id}
            style={{
              display: "grid",
              gridTemplateColumns: TABLE_COLS,
              padding: "14px 24px",
              borderBottom: i < PICKUP_ROWS.length - 1 ? `1px solid ${COLORS.gray100}` : "none",
              alignItems: "center",
              fontFamily: FONT.regular,
              fontSize: 13,
              opacity: re.opacity,
              transform: `translateX(${re.x}px)`,
              backgroundColor: rowBg,
              boxShadow: isFirst && frame >= 106
                ? `inset 0 0 0 1px rgba(38, 175, 81, ${greenBg}), 0 0 ${greenGlow}px rgba(38, 175, 81, 0.15)`
                : isFirst && frame >= 78
                  ? `0 0 ${highlightGlow}px rgba(37, 99, 235, 0.12)`
                  : "none",
              borderRadius: isFirst && frame >= 78 ? 6 : 0,
              transition: "background-color 0.1s",
            }}
          >
            <div style={{ color: COLORS.confirmed, fontWeight: FONT.weights.semibold, fontSize: 12 }}>
              {row.id}
            </div>
            <div style={{ color: COLORS.dark, fontWeight: FONT.weights.medium, display: "flex", alignItems: "center", gap: 8 }}>
              {/* Avatar circle */}
              <div
                style={{
                  width: 28,
                  height: 28,
                  borderRadius: 14,
                  backgroundColor: `${COLORS.confirmed}15`,
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "center",
                  fontFamily: FONT.regular,
                  fontWeight: FONT.weights.bold,
                  fontSize: 10,
                  color: COLORS.confirmed,
                  flexShrink: 0,
                }}
              >
                {row.customer.split(" ").map((n) => n[0]).join("")}
              </div>
              {row.customer}
            </div>
            <div style={{ color: COLORS.gray500, fontSize: 13 }}>{row.item}</div>
            <div style={{ color: COLORS.gray500, fontSize: 12 }}>{row.time}</div>
            <div style={{ position: "relative" }}>
              {/* Morphing badge for first row */}
              {isFirst ? (
                <>
                  <div style={{ opacity: 1 - morphProgress }}>
                    <StatusBadge status="reserved" fontSize={11} />
                  </div>
                  {morphProgress > 0 && (
                    <div
                      style={{
                        position: "absolute",
                        top: 0,
                        left: 0,
                        opacity: morphProgress,
                        transform: `scale(${0.7 + 0.3 * morphProgress})`,
                        display: "flex",
                        alignItems: "center",
                        gap: 4,
                      }}
                    >
                      <StatusBadge status="picked-up" fontSize={11} />
                      {/* Checkmark */}
                      {checkOpacity > 0 && (
                        <div
                          style={{
                            width: 20,
                            height: 20,
                            borderRadius: 10,
                            backgroundColor: COLORS.greenLight,
                            border: `1.5px solid ${COLORS.greenBorder}`,
                            display: "flex",
                            alignItems: "center",
                            justifyContent: "center",
                            opacity: checkOpacity,
                            transform: `scale(${checkScale})`,
                          }}
                        >
                          <svg width={10} height={10} viewBox="0 0 10 10" fill="none">
                            <path d="M2.5 5l2 2 3-3" stroke={COLORS.green} strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
                          </svg>
                        </div>
                      )}
                    </div>
                  )}
                </>
              ) : (
                <StatusBadge status={row.status} fontSize={11} />
              )}
            </div>
          </div>
        );
      })}

      {/* Animated cursor (Phase 2) */}
      {cursorOpacity > 0 && frame < 120 && (
        <div
          style={{
            position: "absolute",
            left: cursorX,
            top: cursorY + 90, // offset for header + column headers
            zIndex: 10,
            opacity: cursorOpacity * (frame >= 100 ? interpolate(frame, [100, 108], [1, 0], CLAMP) : 1),
            transform: `scale(${cursorClick})`,
            pointerEvents: "none",
          }}
        >
          <svg width={24} height={24} viewBox="0 0 24 24" fill="none">
            <path
              d="M5 3l14 8-6 2-4 6L5 3z"
              fill={COLORS.dark}
              stroke={COLORS.white}
              strokeWidth="1.5"
              strokeLinejoin="round"
            />
          </svg>
        </div>
      )}
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Late Returns section (Phase 4)                                     */
/* ------------------------------------------------------------------ */
const LateReturnsSection: React.FC = () => {
  const frame = useCurrentFrame();

  if (frame < 126) return null;

  /* Section entry */
  const sectionOpacity = interpolate(frame, [128, 138], [0, 1], CLAMP);
  const sectionY = interpolate(frame, [128, 138], [24, 0], { ...CLAMP, easing: EASING.easeOut });

  /* Alert badge pulse */
  const alertPulse = frame >= 138
    ? interpolate(frame, [138, 148, 158, 168, 178, 188], [1, 1.12, 1, 1.12, 1, 1.08], CLAMP)
    : 1;
  const alertGlow = frame >= 138
    ? interpolate(frame, [138, 148, 158, 168, 178, 188], [0, 8, 0, 8, 0, 4], CLAMP)
    : 0;

  /* Warning icon animation */
  const warningRotate = frame >= 142
    ? interpolate(frame, [142, 148, 154], [0, -8, 0], { ...CLAMP, easing: EASING.spring })
    : 0;

  return (
    <div
      style={{
        opacity: sectionOpacity,
        transform: `translateY(${sectionY}px)`,
      }}
    >
      {/* Section header with alert badge */}
      <div
        style={{
          display: "flex",
          alignItems: "center",
          gap: 12,
          marginBottom: 14,
        }}
      >
        {/* Warning icon */}
        <div
          style={{
            width: 36,
            height: 36,
            borderRadius: 10,
            backgroundColor: "#FEF3F2",
            display: "flex",
            alignItems: "center",
            justifyContent: "center",
            transform: `rotate(${warningRotate}deg)`,
          }}
        >
          <svg width={18} height={18} viewBox="0 0 18 18" fill="none">
            <path d="M9 6v4M9 13h.01" stroke={COLORS.red} strokeWidth="2" strokeLinecap="round" />
            <path d="M7.86 2.5L1.21 14a1 1 0 00.86 1.5h13.38a1 1 0 00.86-1.5L9.86 2.5a1 1 0 00-1.72 0z" stroke={COLORS.red} strokeWidth="1.5" strokeLinejoin="round" />
          </svg>
        </div>
        <div>
          <div
            style={{
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.semibold,
              fontSize: 16,
              color: COLORS.dark,
            }}
          >
            Late Returns
          </div>
          <div style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray400 }}>
            Requires immediate attention
          </div>
        </div>
        {/* Pulsing alert count */}
        <div
          style={{
            marginLeft: "auto",
            padding: "6px 14px",
            borderRadius: 99,
            backgroundColor: "#FEF3F2",
            border: `1px solid #FECDCA`,
            fontFamily: FONT.regular,
            fontWeight: FONT.weights.bold,
            fontSize: 14,
            color: "#B42318",
            transform: `scale(${alertPulse})`,
            boxShadow: `0 0 ${alertGlow}px rgba(240, 68, 56, 0.25)`,
          }}
        >
          2 overdue
        </div>
      </div>

      {/* Late return cards */}
      <div style={{ display: "flex", gap: 16 }}>
        {LATE_RETURNS.map((item, i) => {
          const cardStart = 136 + i * 6;
          const cardOpacity = interpolate(frame, [cardStart, cardStart + 8], [0, 1], CLAMP);
          const cardX = interpolate(frame, [cardStart, cardStart + 8], [30, 0], { ...CLAMP, easing: EASING.easeOut });

          /* Red pulse on the card border */
          const borderPulse = frame >= cardStart + 12
            ? interpolate(
                frame,
                [cardStart + 12, cardStart + 22, cardStart + 32, cardStart + 42],
                [0.3, 0.6, 0.3, 0.6],
                CLAMP
              )
            : 0.3;

          return (
            <div
              key={item.id}
              style={{
                flex: 1,
                backgroundColor: COLORS.white,
                borderRadius: 14,
                border: `2px solid rgba(240, 68, 56, ${borderPulse})`,
                padding: "18px 22px",
                opacity: cardOpacity,
                transform: `translateX(${cardX}px)`,
              }}
            >
              {/* Header row */}
              <div style={{ display: "flex", justifyContent: "space-between", alignItems: "center", marginBottom: 14 }}>
                <div style={{ display: "flex", alignItems: "center", gap: 8 }}>
                  <div
                    style={{
                      fontFamily: FONT.regular,
                      fontWeight: FONT.weights.semibold,
                      fontSize: 14,
                      color: COLORS.confirmed,
                    }}
                  >
                    {item.id}
                  </div>
                  <StatusBadge status="late" fontSize={11} />
                </div>
                {/* Warning indicator */}
                <div
                  style={{
                    width: 28,
                    height: 28,
                    borderRadius: 8,
                    backgroundColor: "#FEF3F2",
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "center",
                  }}
                >
                  <svg width={14} height={14} viewBox="0 0 14 14" fill="none">
                    <circle cx="7" cy="7" r="5.5" stroke={COLORS.red} strokeWidth="1.5" />
                    <path d="M7 4.5v3M7 9.5h.01" stroke={COLORS.red} strokeWidth="1.5" strokeLinecap="round" />
                  </svg>
                </div>
              </div>

              {/* Customer + item */}
              <div style={{ marginBottom: 14 }}>
                <div style={{ display: "flex", alignItems: "center", gap: 8, marginBottom: 6 }}>
                  <div
                    style={{
                      width: 30,
                      height: 30,
                      borderRadius: 15,
                      backgroundColor: "#FEF3F2",
                      display: "flex",
                      alignItems: "center",
                      justifyContent: "center",
                      fontFamily: FONT.regular,
                      fontWeight: FONT.weights.bold,
                      fontSize: 10,
                      color: "#B42318",
                    }}
                  >
                    {item.customer.split(" ").map((n) => n[0]).join("")}
                  </div>
                  <div>
                    <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.semibold, fontSize: 14, color: COLORS.dark }}>
                      {item.customer}
                    </div>
                    <div style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray400 }}>
                      {item.item}
                    </div>
                  </div>
                </div>
              </div>

              {/* Due info */}
              <div
                style={{
                  padding: "10px 14px",
                  borderRadius: 8,
                  backgroundColor: "#FEF3F2",
                  display: "flex",
                  justifyContent: "space-between",
                  alignItems: "center",
                }}
              >
                <div>
                  <div style={{ fontFamily: FONT.regular, fontSize: 10, color: COLORS.gray400, textTransform: "uppercase", letterSpacing: 0.5, marginBottom: 2 }}>
                    Due
                  </div>
                  <div style={{ fontFamily: FONT.regular, fontSize: 13, fontWeight: FONT.weights.medium, color: COLORS.dark }}>
                    {item.due}
                  </div>
                </div>
                <div
                  style={{
                    padding: "4px 10px",
                    borderRadius: 6,
                    backgroundColor: COLORS.red,
                    fontFamily: FONT.regular,
                    fontWeight: FONT.weights.bold,
                    fontSize: 12,
                    color: COLORS.white,
                  }}
                >
                  {item.hours}
                </div>
              </div>
            </div>
          );
        })}
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Main component                                                     */
/* ------------------------------------------------------------------ */
export const ManageBookings: React.FC = () => {
  return (
    <AbsoluteFill style={{ backgroundColor: COLORS.gray50 }}>
      <AppMockup activeItem="Bookings" pageTitle="Bookings">
        {/* Phase 1: KPI Cards + Calendar */}
        <KPICards />
        <CalendarStrip />

        {/* Phase 2-3: Pickups table + status morph */}
        <PickupsTable />

        {/* Phase 4: Late Returns */}
        <LateReturnsSection />
      </AppMockup>
    </AbsoluteFill>
  );
};
