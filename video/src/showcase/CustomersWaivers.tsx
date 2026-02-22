import React from "react";
import { AbsoluteFill, interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";
import { AppMockup } from "../components/AppMockup";

/* ------------------------------------------------------------------ */
/*  Customer CRM — "List → Profile → Coupon" cinematic                 */
/*                                                                     */
/*  Duration: 185 frames                                               */
/*  Phase 1 (0-75):   Customer table with staggered row entry          */
/*  Phase 2 (75-130): Customer profile with stats + history            */
/*  Phase 3 (130-185): Promotions tab + coupon creation form           */
/* ------------------------------------------------------------------ */

const CLAMP = { extrapolateLeft: "clamp" as const, extrapolateRight: "clamp" as const };

/* ---- Customer table data ---- */
const CUSTOMERS = [
  { name: "Emma Scott", email: "emma@gmail.com", bookings: 32, spent: "$4,280", status: "VIP" },
  { name: "Jake Thompson", email: "jake.t@outlook.com", bookings: 18, spent: "$2,140", status: "Active" },
  { name: "Liam Chen", email: "liam.c@yahoo.com", bookings: 14, spent: "$1,820", status: "Active" },
  { name: "Sofia Rodriguez", email: "sofia.r@gmail.com", bookings: 9, spent: "$1,350", status: "Active" },
  { name: "Noah Williams", email: "noah.w@hotmail.com", bookings: 5, spent: "$680", status: "New" },
  { name: "Olivia Martin", email: "olivia.m@gmail.com", bookings: 3, spent: "$420", status: "New" },
];

/* ---- Helper: typewriter ---- */
const typedText = (text: string, frame: number, startFrame: number, speed = 0.5): string => {
  const elapsed = Math.max(0, frame - startFrame);
  return text.substring(0, Math.min(text.length, Math.floor(elapsed * speed)));
};

/* ------------------------------------------------------------------ */
/*  Phase 1: Customer List Table                                       */
/* ------------------------------------------------------------------ */
const CustomerTable: React.FC = () => {
  const frame = useCurrentFrame();

  /* Search bar entry */
  const searchOpacity = interpolate(frame, [5, 12], [0, 1], CLAMP);

  /* Table header entry */
  const headerOpacity = interpolate(frame, [8, 15], [0, 1], CLAMP);

  /* Row stagger */
  const rowEntry = (i: number) => {
    const start = 12 + i * 4;
    const opacity = interpolate(frame, [start, start + 8], [0, 1], CLAMP);
    const y = interpolate(frame, [start, start + 8], [15, 0], { ...CLAMP, easing: EASING.easeOut });
    return { opacity, y };
  };

  /* VIP badge pulse on Emma */
  const vipScale = frame >= 30
    ? interpolate(frame, [30, 38], [0, 1], { ...CLAMP, easing: EASING.spring })
    : 0;

  /* Highlight row before transition */
  const highlightOpacity = interpolate(frame, [58, 62], [0, 0.08], CLAMP);

  /* Exit */
  const exitOpacity = interpolate(frame, [68, 75], [1, 0], { ...CLAMP, easing: EASING.easeIn });
  const exitX = interpolate(frame, [68, 75], [0, -60], { ...CLAMP, easing: EASING.easeIn });

  const COLS = ["Customer", "Email", "Bookings", "Total Spent", "Status"];

  return (
    <div style={{ opacity: exitOpacity, transform: `translateX(${exitX}px)` }}>
      {/* Search bar */}
      <div
        style={{
          display: "flex",
          justifyContent: "space-between",
          alignItems: "center",
          marginBottom: 18,
          opacity: searchOpacity,
        }}
      >
        <div
          style={{
            display: "flex",
            alignItems: "center",
            gap: 8,
            backgroundColor: COLORS.white,
            border: `1px solid ${COLORS.gray200}`,
            borderRadius: 8,
            padding: "8px 14px",
            width: 280,
          }}
        >
          <svg width={14} height={14} viewBox="0 0 14 14" fill="none">
            <circle cx="6" cy="6" r="4.5" stroke={COLORS.gray400} strokeWidth="1.2" />
            <path d="M9.5 9.5l3 3" stroke={COLORS.gray400} strokeWidth="1.2" strokeLinecap="round" />
          </svg>
          <span style={{ fontFamily: FONT.regular, fontSize: 13, color: COLORS.gray400 }}>
            Search customers...
          </span>
        </div>
        <div
          style={{
            display: "flex",
            gap: 8,
          }}
        >
          <div
            style={{
              padding: "8px 16px",
              borderRadius: 8,
              border: `1px solid ${COLORS.gray200}`,
              backgroundColor: COLORS.white,
              fontFamily: FONT.regular,
              fontSize: 12,
              fontWeight: FONT.weights.medium,
              color: COLORS.gray500,
            }}
          >
            Export CSV
          </div>
          <div
            style={{
              padding: "8px 16px",
              borderRadius: 8,
              backgroundColor: COLORS.primary,
              fontFamily: FONT.regular,
              fontSize: 12,
              fontWeight: FONT.weights.semibold,
              color: COLORS.white,
            }}
          >
            + Add Customer
          </div>
        </div>
      </div>

      {/* Table */}
      <div
        style={{
          backgroundColor: COLORS.white,
          borderRadius: 12,
          border: `1px solid ${COLORS.gray200}`,
          overflow: "hidden",
        }}
      >
        {/* Header row */}
        <div
          style={{
            display: "grid",
            gridTemplateColumns: "200px 200px 100px 120px 100px",
            gap: 0,
            padding: "14px 20px",
            borderBottom: `1px solid ${COLORS.gray100}`,
            opacity: headerOpacity,
          }}
        >
          {COLS.map((col) => (
            <div
              key={col}
              style={{
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.semibold,
                fontSize: 11,
                color: COLORS.gray400,
                letterSpacing: 0.5,
                textTransform: "uppercase",
              }}
            >
              {col}
            </div>
          ))}
        </div>

        {/* Data rows */}
        {CUSTOMERS.map((cust, i) => {
          const re = rowEntry(i);
          const isEmma = i === 0;
          return (
            <div
              key={cust.name}
              style={{
                display: "grid",
                gridTemplateColumns: "200px 200px 100px 120px 100px",
                padding: "14px 20px",
                borderBottom: i < CUSTOMERS.length - 1 ? `1px solid ${COLORS.gray100}` : "none",
                alignItems: "center",
                opacity: re.opacity,
                transform: `translateY(${re.y}px)`,
                backgroundColor: isEmma ? `rgba(247, 88, 31, ${highlightOpacity})` : "transparent",
                position: "relative",
              }}
            >
              {/* Name with avatar */}
              <div style={{ display: "flex", alignItems: "center", gap: 10 }}>
                <div
                  style={{
                    width: 32,
                    height: 32,
                    borderRadius: 16,
                    backgroundColor: isEmma ? `${COLORS.primary}15` : COLORS.gray100,
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "center",
                    flexShrink: 0,
                  }}
                >
                  <span
                    style={{
                      fontFamily: FONT.regular,
                      fontWeight: FONT.weights.semibold,
                      fontSize: 12,
                      color: isEmma ? COLORS.primary : COLORS.gray500,
                    }}
                  >
                    {cust.name.split(" ").map((n) => n[0]).join("")}
                  </span>
                </div>
                <span
                  style={{
                    fontFamily: FONT.regular,
                    fontWeight: FONT.weights.medium,
                    fontSize: 14,
                    color: COLORS.gray900,
                  }}
                >
                  {cust.name}
                </span>
              </div>

              {/* Email */}
              <span style={{ fontFamily: FONT.regular, fontSize: 13, color: COLORS.gray500 }}>
                {cust.email}
              </span>

              {/* Bookings */}
              <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.semibold, fontSize: 14, color: COLORS.navy }}>
                {cust.bookings}
              </span>

              {/* Spent */}
              <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 14, color: COLORS.gray700 }}>
                {cust.spent}
              </span>

              {/* Status badge */}
              <div>
                <span
                  style={{
                    padding: "4px 10px",
                    borderRadius: 99,
                    fontSize: 11,
                    fontFamily: FONT.regular,
                    fontWeight: FONT.weights.semibold,
                    backgroundColor:
                      cust.status === "VIP" ? `${COLORS.primary}15` :
                      cust.status === "Active" ? COLORS.greenLight :
                      COLORS.gray100,
                    color:
                      cust.status === "VIP" ? COLORS.primary :
                      cust.status === "Active" ? COLORS.greenDark :
                      COLORS.gray500,
                    transform: isEmma ? `scale(${vipScale})` : undefined,
                    display: "inline-block",
                  }}
                >
                  {cust.status}
                </span>
              </div>
            </div>
          );
        })}
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Phase 2: Customer Profile                                          */
/* ------------------------------------------------------------------ */
const CustomerProfile: React.FC = () => {
  const frame = useCurrentFrame();

  /* Entry from right */
  const profileOpacity = interpolate(frame, [75, 85], [0, 1], CLAMP);
  const profileX = interpolate(frame, [75, 85], [60, 0], { ...CLAMP, easing: EASING.easeOut });

  /* Avatar entry */
  const avatarScale = interpolate(frame, [78, 88], [0.5, 1], { ...CLAMP, easing: EASING.spring });

  /* Stat cards stagger */
  const statEntry = (i: number) => {
    const start = 82 + i * 5;
    const opacity = interpolate(frame, [start, start + 8], [0, 1], CLAMP);
    const y = interpolate(frame, [start, start + 8], [15, 0], { ...CLAMP, easing: EASING.easeOut });
    return { opacity, y };
  };

  /* Stats count up */
  const bookingsCount = interpolate(frame, [85, 105], [0, 32], { ...CLAMP, easing: EASING.easeOut });
  const spentCount = interpolate(frame, [88, 108], [0, 4280], { ...CLAMP, easing: EASING.easeOut });

  /* Booking history rows */
  const historyEntry = (i: number) => {
    const start = 98 + i * 4;
    return interpolate(frame, [start, start + 6], [0, 1], CLAMP);
  };

  /* Exit */
  const exitOpacity = interpolate(frame, [125, 130], [1, 0], { ...CLAMP, easing: EASING.easeIn });

  const HISTORY = [
    { date: "Dec 1", item: "Mountain Bike Rental", amount: "$45.00", status: "Completed" },
    { date: "Nov 28", item: "Sunset Kayak Tour", amount: "$75.00", status: "Completed" },
    { date: "Nov 15", item: "Ski Equipment", amount: "$120.00", status: "Completed" },
  ];

  return (
    <div
      style={{
        opacity: profileOpacity * exitOpacity,
        transform: `translateX(${profileX}px)`,
        display: "flex",
        gap: 24,
      }}
    >
      {/* Left: Profile info */}
      <div style={{ width: 320 }}>
        {/* Avatar + name */}
        <div
          style={{
            backgroundColor: COLORS.white,
            borderRadius: 14,
            border: `1px solid ${COLORS.gray200}`,
            padding: 24,
            textAlign: "center",
            marginBottom: 16,
          }}
        >
          <div
            style={{
              width: 72,
              height: 72,
              borderRadius: 36,
              backgroundColor: `${COLORS.primary}15`,
              display: "flex",
              alignItems: "center",
              justifyContent: "center",
              margin: "0 auto 12px",
              transform: `scale(${avatarScale})`,
            }}
          >
            <span
              style={{
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.bold,
                fontSize: 24,
                color: COLORS.primary,
              }}
            >
              ES
            </span>
          </div>
          <div
            style={{
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.bold,
              fontSize: 20,
              color: COLORS.navy,
              marginBottom: 4,
            }}
          >
            Emma Scott
          </div>
          <div
            style={{
              fontFamily: FONT.regular,
              fontSize: 13,
              color: COLORS.gray400,
              marginBottom: 12,
            }}
          >
            emma@gmail.com
          </div>
          <span
            style={{
              padding: "5px 14px",
              borderRadius: 99,
              fontSize: 12,
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.bold,
              backgroundColor: `${COLORS.primary}15`,
              color: COLORS.primary,
            }}
          >
            VIP Customer
          </span>
        </div>

        {/* Stat cards */}
        <div style={{ display: "flex", gap: 10 }}>
          {[
            { label: "Total Bookings", value: Math.round(bookingsCount).toString(), color: COLORS.navy },
            { label: "Total Spent", value: `$${Math.round(spentCount).toLocaleString()}`, color: COLORS.green },
            { label: "VIP Tier", value: "Gold", color: COLORS.primary },
          ].map((stat, i) => {
            const se = statEntry(i);
            return (
              <div
                key={stat.label}
                style={{
                  flex: 1,
                  backgroundColor: COLORS.white,
                  borderRadius: 10,
                  border: `1px solid ${COLORS.gray200}`,
                  padding: "14px 12px",
                  textAlign: "center",
                  opacity: se.opacity,
                  transform: `translateY(${se.y}px)`,
                }}
              >
                <div
                  style={{
                    fontFamily: FONT.regular,
                    fontWeight: FONT.weights.bold,
                    fontSize: 22,
                    color: stat.color,
                    marginBottom: 4,
                  }}
                >
                  {stat.value}
                </div>
                <div
                  style={{
                    fontFamily: FONT.regular,
                    fontSize: 10,
                    color: COLORS.gray400,
                    textTransform: "uppercase",
                    letterSpacing: 0.5,
                  }}
                >
                  {stat.label}
                </div>
              </div>
            );
          })}
        </div>
      </div>

      {/* Right: Booking history */}
      <div style={{ flex: 1 }}>
        <div
          style={{
            backgroundColor: COLORS.white,
            borderRadius: 14,
            border: `1px solid ${COLORS.gray200}`,
            overflow: "hidden",
          }}
        >
          {/* Tab nav */}
          <div
            style={{
              display: "flex",
              borderBottom: `1px solid ${COLORS.gray100}`,
              padding: "0 20px",
            }}
          >
            {["Bookings", "Notes", "Waivers", "Surveys"].map((tab, i) => (
              <div
                key={tab}
                style={{
                  padding: "14px 16px",
                  fontFamily: FONT.regular,
                  fontWeight: i === 0 ? FONT.weights.semibold : FONT.weights.regular,
                  fontSize: 13,
                  color: i === 0 ? COLORS.primary : COLORS.gray400,
                  borderBottom: i === 0 ? `2px solid ${COLORS.primary}` : "2px solid transparent",
                }}
              >
                {tab}
              </div>
            ))}
          </div>

          {/* History rows */}
          <div style={{ padding: "8px 0" }}>
            {HISTORY.map((item, i) => (
              <div
                key={item.date}
                style={{
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "space-between",
                  padding: "12px 20px",
                  borderBottom: i < HISTORY.length - 1 ? `1px solid ${COLORS.gray100}` : "none",
                  opacity: historyEntry(i),
                }}
              >
                <div>
                  <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 14, color: COLORS.gray900 }}>
                    {item.item}
                  </div>
                  <div style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray400, marginTop: 2 }}>
                    {item.date}
                  </div>
                </div>
                <div style={{ display: "flex", alignItems: "center", gap: 12 }}>
                  <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.semibold, fontSize: 14, color: COLORS.navy }}>
                    {item.amount}
                  </span>
                  <span
                    style={{
                      padding: "3px 8px",
                      borderRadius: 99,
                      fontSize: 10,
                      fontFamily: FONT.regular,
                      fontWeight: FONT.weights.semibold,
                      backgroundColor: COLORS.greenLight,
                      color: COLORS.greenDark,
                    }}
                  >
                    {item.status}
                  </span>
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Phase 3: Promotions Tab + Coupon Form                              */
/* ------------------------------------------------------------------ */
const CouponCreation: React.FC = () => {
  const frame = useCurrentFrame();

  /* Entry */
  const entryOpacity = interpolate(frame, [130, 140], [0, 1], CLAMP);
  const entryY = interpolate(frame, [130, 140], [20, 0], { ...CLAMP, easing: EASING.easeOut });

  /* Code typing */
  const codeText = typedText("LOYAL20", frame, 145, 0.4);
  const descText = typedText("20% off next rental", frame, 155, 0.5);

  /* Date fields */
  const dateOpacity = interpolate(frame, [162, 168], [0, 1], CLAMP);

  /* Create button glow */
  const btnGlow = frame >= 170
    ? interpolate(frame, [170, 178], [0, 1], { ...CLAMP, easing: EASING.easeOut })
    : 0;

  return (
    <div
      style={{
        opacity: entryOpacity,
        transform: `translateY(${entryY}px)`,
        display: "flex",
        gap: 24,
      }}
    >
      {/* Left: mini profile reminder */}
      <div style={{ width: 260 }}>
        <div
          style={{
            backgroundColor: COLORS.white,
            borderRadius: 14,
            border: `1px solid ${COLORS.gray200}`,
            padding: 20,
          }}
        >
          <div style={{ display: "flex", alignItems: "center", gap: 12, marginBottom: 16 }}>
            <div
              style={{
                width: 44,
                height: 44,
                borderRadius: 22,
                backgroundColor: `${COLORS.primary}15`,
                display: "flex",
                alignItems: "center",
                justifyContent: "center",
              }}
            >
              <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 16, color: COLORS.primary }}>
                ES
              </span>
            </div>
            <div>
              <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 16, color: COLORS.navy }}>
                Emma Scott
              </div>
              <span
                style={{
                  fontSize: 10,
                  fontFamily: FONT.regular,
                  fontWeight: FONT.weights.semibold,
                  padding: "2px 8px",
                  borderRadius: 99,
                  backgroundColor: `${COLORS.primary}15`,
                  color: COLORS.primary,
                }}
              >
                VIP
              </span>
            </div>
          </div>
          {/* Tab nav */}
          <div style={{ display: "flex", gap: 2, marginBottom: 4 }}>
            {["Bookings", "Promotions", "Notes"].map((tab, i) => (
              <div
                key={tab}
                style={{
                  padding: "8px 12px",
                  borderRadius: 6,
                  fontFamily: FONT.regular,
                  fontSize: 12,
                  fontWeight: i === 1 ? FONT.weights.semibold : FONT.weights.regular,
                  color: i === 1 ? COLORS.white : COLORS.gray500,
                  backgroundColor: i === 1 ? COLORS.primary : "transparent",
                }}
              >
                {tab}
              </div>
            ))}
          </div>
        </div>
      </div>

      {/* Right: Coupon form */}
      <div style={{ flex: 1 }}>
        <div
          style={{
            backgroundColor: COLORS.white,
            borderRadius: 14,
            border: `1px solid ${COLORS.gray200}`,
            padding: "24px 28px",
          }}
        >
          <div
            style={{
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.bold,
              fontSize: 18,
              color: COLORS.navy,
              marginBottom: 20,
            }}
          >
            Create Promotion
          </div>

          {/* Coupon code */}
          <div style={{ marginBottom: 16 }}>
            <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 13, color: COLORS.gray700, marginBottom: 6 }}>
              Coupon Code
            </div>
            <div
              style={{
                padding: "10px 14px",
                borderRadius: 8,
                border: `1px solid ${codeText.length > 0 ? COLORS.primary : COLORS.gray200}`,
                backgroundColor: COLORS.white,
                fontFamily: FONT.regular,
                fontSize: 16,
                fontWeight: FONT.weights.bold,
                color: COLORS.navy,
                letterSpacing: 2,
              }}
            >
              {codeText}
              {frame >= 145 && frame < 160 && (
                <span style={{ borderRight: `2px solid ${COLORS.primary}`, marginLeft: 1 }} />
              )}
            </div>
          </div>

          {/* Description */}
          <div style={{ marginBottom: 16 }}>
            <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 13, color: COLORS.gray700, marginBottom: 6 }}>
              Description
            </div>
            <div
              style={{
                padding: "10px 14px",
                borderRadius: 8,
                border: `1px solid ${COLORS.gray200}`,
                fontFamily: FONT.regular,
                fontSize: 14,
                color: COLORS.gray900,
              }}
            >
              {descText}
              {frame >= 155 && frame < 170 && (
                <span style={{ borderRight: `2px solid ${COLORS.primary}`, marginLeft: 1 }} />
              )}
            </div>
          </div>

          {/* Date range */}
          <div style={{ display: "flex", gap: 12, marginBottom: 24, opacity: dateOpacity }}>
            <div style={{ flex: 1 }}>
              <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 13, color: COLORS.gray700, marginBottom: 6 }}>
                Valid From
              </div>
              <div
                style={{
                  padding: "10px 14px",
                  borderRadius: 8,
                  border: `1px solid ${COLORS.gray200}`,
                  fontFamily: FONT.regular,
                  fontSize: 13,
                  color: COLORS.gray700,
                }}
              >
                Dec 1, 2024
              </div>
            </div>
            <div style={{ flex: 1 }}>
              <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 13, color: COLORS.gray700, marginBottom: 6 }}>
                Valid To
              </div>
              <div
                style={{
                  padding: "10px 14px",
                  borderRadius: 8,
                  border: `1px solid ${COLORS.gray200}`,
                  fontFamily: FONT.regular,
                  fontSize: 13,
                  color: COLORS.gray700,
                }}
              >
                Jan 31, 2025
              </div>
            </div>
          </div>

          {/* Create button */}
          <div
            style={{
              padding: "12px 24px",
              borderRadius: 10,
              backgroundColor: COLORS.primary,
              color: COLORS.white,
              fontFamily: FONT.regular,
              fontWeight: FONT.weights.bold,
              fontSize: 14,
              textAlign: "center",
              boxShadow: btnGlow > 0 ? `0 0 ${20 * btnGlow}px rgba(247, 88, 31, ${0.4 * btnGlow})` : "none",
              transform: `scale(${1 + btnGlow * 0.02})`,
            }}
          >
            Create Coupon
          </div>
        </div>
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Main                                                               */
/* ------------------------------------------------------------------ */
export const CustomersWaivers: React.FC = () => {
  const frame = useCurrentFrame();

  const showPhase1 = frame < 75;
  const showPhase2 = frame >= 70 && frame < 130;
  const showPhase3 = frame >= 128;

  return (
    <AbsoluteFill style={{ backgroundColor: COLORS.gray50 }}>
      <AppMockup activeItem="Customers" pageTitle="Customer Management">
        <div style={{ position: "relative", width: "100%", height: "100%" }}>
          {showPhase1 && (
            <div style={{ position: "absolute", inset: 0 }}>
              <CustomerTable />
            </div>
          )}
          {showPhase2 && (
            <div style={{ position: "absolute", inset: 0 }}>
              <CustomerProfile />
            </div>
          )}
          {showPhase3 && (
            <div style={{ position: "absolute", inset: 0 }}>
              <CouponCreation />
            </div>
          )}
        </div>
      </AppMockup>
    </AbsoluteFill>
  );
};
