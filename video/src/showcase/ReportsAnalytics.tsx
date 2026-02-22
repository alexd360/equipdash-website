import React from "react";
import { AbsoluteFill, interpolate, useCurrentFrame } from "remotion";
import { COLORS, FONT, EASING } from "../theme";
import { AppMockup } from "../components/AppMockup";

/* ------------------------------------------------------------------ */
/*  Reports & Analytics — Rich chart animations showcase               */
/*                                                                     */
/*  Phase 1 (0-35):   Dashboard header, KPI cards stagger in           */
/*  Phase 2 (35-80):  Bar chart with sequential bar growth             */
/*  Phase 3 (80-120): Year comparison bars + legend + YoY badge        */
/*  Phase 4 (120-160): Insight panel slides in from right              */
/* ------------------------------------------------------------------ */

const BAR_DATA = [18, 22, 25, 28, 32, 35, 42, 38, 33, 28, 24, 20];
const MONTH_LABELS = [
  "Jan",
  "Feb",
  "Mar",
  "Apr",
  "May",
  "Jun",
  "Jul",
  "Aug",
  "Sep",
  "Oct",
  "Nov",
  "Dec",
];
const MAX_BAR = 42;
const Y_LABELS = ["$0K", "$10K", "$20K", "$30K", "$40K"];

/* ------------------------------------------------------------------ */
/*  KPI Card                                                           */
/* ------------------------------------------------------------------ */
const KPICard: React.FC<{
  icon: React.ReactNode;
  value: number;
  prefix: string;
  suffix: string;
  label: string;
  trend: string;
  trendPositive: boolean;
  enterDelay: number;
}> = ({ icon, value, prefix, suffix, label, trend, trendPositive, enterDelay }) => {
  const frame = useCurrentFrame();

  const opacity = interpolate(frame, [enterDelay, enterDelay + 8], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });
  const y = interpolate(frame, [enterDelay, enterDelay + 10], [20, 0], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });
  const currentValue = interpolate(
    frame,
    [enterDelay + 4, enterDelay + 24],
    [0, value],
    {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
      easing: EASING.easeOut,
    }
  );

  const displayValue =
    prefix +
    Math.round(currentValue).toLocaleString() +
    suffix;

  return (
    <div
      style={{
        flex: 1,
        backgroundColor: COLORS.white,
        borderRadius: 14,
        border: `1px solid ${COLORS.gray200}`,
        padding: "22px 24px",
        opacity,
        transform: `translateY(${y}px)`,
      }}
    >
      {/* Icon circle */}
      <div
        style={{
          width: 40,
          height: 40,
          borderRadius: 10,
          backgroundColor: trendPositive ? COLORS.greenLight : "#FFF4ED",
          display: "flex",
          alignItems: "center",
          justifyContent: "center",
          marginBottom: 14,
        }}
      >
        {icon}
      </div>
      {/* Counting number */}
      <div
        style={{
          fontFamily: FONT.regular,
          fontWeight: FONT.weights.bold,
          fontSize: 28,
          color: COLORS.navy,
          marginBottom: 4,
        }}
      >
        {displayValue}
      </div>
      {/* Label */}
      <div
        style={{
          fontFamily: FONT.regular,
          fontSize: 13,
          color: COLORS.gray500,
          marginBottom: 10,
        }}
      >
        {label}
      </div>
      {/* Trend badge */}
      <div
        style={{
          display: "inline-flex",
          alignItems: "center",
          gap: 4,
          padding: "4px 10px",
          borderRadius: 99,
          backgroundColor: trendPositive ? COLORS.greenLight : "#FEF3F2",
          fontFamily: FONT.regular,
          fontWeight: FONT.weights.medium,
          fontSize: 12,
          color: trendPositive ? COLORS.greenDark : "#B42318",
        }}
      >
        <svg width={10} height={10} viewBox="0 0 10 10" fill="none">
          <path
            d={trendPositive ? "M5 2l3 4H2l3-4z" : "M5 8l3-4H2l3 4z"}
            fill={trendPositive ? COLORS.greenDark : "#B42318"}
          />
        </svg>
        {trend}
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Revenue by Channel mini pie chart                                  */
/* ------------------------------------------------------------------ */
const MiniPieChart: React.FC<{ animProgress: number }> = ({
  animProgress,
}) => {
  const r = 40;
  const cx = 50;
  const cy = 50;
  const circumference = 2 * Math.PI * r;
  const segments = [
    { pct: 0.57, color: COLORS.primary, label: "Website 57%" },
    { pct: 0.30, color: COLORS.navy, label: "Walk-in 30%" },
    { pct: 0.13, color: COLORS.blue, label: "OTA 13%" },
  ];

  let accumulated = 0;
  return (
    <div style={{ display: "flex", alignItems: "center", gap: 16 }}>
      <svg width={100} height={100} viewBox="0 0 100 100">
        {segments.map((seg, i) => {
          const dashLen = circumference * seg.pct * animProgress;
          const dashGap = circumference - dashLen;
          const offset = -circumference * accumulated;
          accumulated += seg.pct;
          return (
            <circle
              key={i}
              cx={cx}
              cy={cy}
              r={r}
              fill="none"
              stroke={seg.color}
              strokeWidth={16}
              strokeDasharray={`${dashLen} ${dashGap}`}
              strokeDashoffset={offset}
              transform={`rotate(-90 ${cx} ${cy})`}
            />
          );
        })}
      </svg>
      <div style={{ display: "flex", flexDirection: "column", gap: 6 }}>
        {segments.map((seg, i) => (
          <div
            key={i}
            style={{
              display: "flex",
              alignItems: "center",
              gap: 6,
              fontFamily: FONT.regular,
              fontSize: 11,
              color: COLORS.gray700,
            }}
          >
            <div
              style={{
                width: 8,
                height: 8,
                borderRadius: "50%",
                backgroundColor: seg.color,
              }}
            />
            {seg.label}
          </div>
        ))}
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Main export                                                        */
/* ------------------------------------------------------------------ */
export const ReportsAnalytics: React.FC = () => {
  const frame = useCurrentFrame();

  /* ================================================================ */
  /*  Phase 1: Header + KPI cards (0-35)                               */
  /* ================================================================ */
  const headerOpacity = interpolate(frame, [8, 16], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });
  const dateOpacity = interpolate(frame, [12, 18], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });
  const filterOpacity = interpolate(frame, [14, 20], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });

  /* ================================================================ */
  /*  Phase 2: Chart card + sequential bars (35-80)                    */
  /* ================================================================ */
  const chartCardOpacity = interpolate(frame, [35, 42], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });
  const chartCardY = interpolate(frame, [35, 44], [24, 0], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });

  // Y-axis labels fade
  const yAxisOpacity = interpolate(frame, [37, 44], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });

  // X-axis labels
  const xAxisOpacity = interpolate(frame, [40, 46], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });

  // Individual bar heights (orange, current year)
  const barHeight = (i: number): number => {
    const startFrame = 42 + i * 2;
    const endFrame = startFrame + 12;
    const progress = interpolate(frame, [startFrame, endFrame], [0, 1], {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
      easing: EASING.spring,
    });
    return (BAR_DATA[i] / MAX_BAR) * 240 * Math.min(progress, 1);
  };

  // Tooltip for peak bar (July, index 6) — appears when July finishes growing
  const julyFinishFrame = 42 + 6 * 2 + 12; // = 66
  const tooltipOpacity = interpolate(
    frame,
    [julyFinishFrame, julyFinishFrame + 8],
    [0, 1],
    {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
    }
  );
  const tooltipY = interpolate(
    frame,
    [julyFinishFrame, julyFinishFrame + 10],
    [8, 0],
    {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
      easing: EASING.easeOut,
    }
  );

  /* ================================================================ */
  /*  Phase 3: Comparison bars + legend + YoY badge (80-120)           */
  /* ================================================================ */
  const compBarHeight = (i: number): number => {
    const progress = interpolate(frame, [82, 97], [0, 1], {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
      easing: EASING.easeOut,
    });
    const compValue = BAR_DATA[i] * 0.8;
    return (compValue / MAX_BAR) * 240 * progress;
  };

  const legendOpacity = interpolate(frame, [94, 102], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });

  // YoY Growth badge with spring pop
  const yoyScale = interpolate(frame, [100, 112], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.spring,
  });
  const yoyOpacity = interpolate(frame, [100, 106], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });

  /* ================================================================ */
  /*  Phase 4: Insight panel slides in (120-160)                       */
  /* ================================================================ */
  const panelX = interpolate(frame, [120, 138], [300, 0], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });
  const panelOpacity = interpolate(frame, [120, 132], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
  });

  // Top Products progress bars
  const topProductBarProgress = interpolate(frame, [132, 148], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });

  // Pie chart draw
  const pieProgress = interpolate(frame, [138, 155], [0, 1], {
    extrapolateLeft: "clamp",
    extrapolateRight: "clamp",
    easing: EASING.easeOut,
  });

  // Export button pulse glow
  const exportGlow = interpolate(
    frame,
    [148, 155, 160],
    [0, 0.6, 0.3],
    {
      extrapolateLeft: "clamp",
      extrapolateRight: "clamp",
    }
  );

  const chartHeight = 240;
  const barGap = 82;
  const barWidth = 36;
  const compBarWidth = 24;

  const topProducts = [
    { name: "Mountain Bike", revenue: "$12,400", barPct: 1 },
    { name: "Tandem Kayak", revenue: "$8,900", barPct: 0.72 },
    { name: "E-Bike", revenue: "$7,200", barPct: 0.58 },
  ];

  return (
    <AbsoluteFill style={{ backgroundColor: COLORS.gray50 }}>
      <AppMockup activeItem="Reports" pageTitle="Reports">
        <div style={{ display: "flex", gap: 0, height: "100%" }}>
          {/* Left: main content */}
          <div style={{ flex: 1, display: "flex", flexDirection: "column", overflow: "hidden" }}>
            {/* Dashboard header */}
            <div
              style={{
                display: "flex",
                alignItems: "center",
                justifyContent: "space-between",
                marginBottom: 20,
                opacity: headerOpacity,
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
                Revenue Report
              </div>
              <div style={{ display: "flex", gap: 10, alignItems: "center" }}>
                {/* Date range pill */}
                <div
                  style={{
                    padding: "6px 14px",
                    borderRadius: 99,
                    backgroundColor: COLORS.gray100,
                    fontFamily: FONT.regular,
                    fontSize: 12,
                    color: COLORS.gray700,
                    fontWeight: FONT.weights.medium,
                    opacity: dateOpacity,
                  }}
                >
                  This Month
                </div>
                {/* Filter buttons */}
                {["Location", "Product", "Channel"].map((f, i) => (
                  <div
                    key={f}
                    style={{
                      padding: "6px 14px",
                      borderRadius: 8,
                      border: `1px solid ${COLORS.gray200}`,
                      fontFamily: FONT.regular,
                      fontSize: 12,
                      color: COLORS.gray500,
                      opacity: filterOpacity,
                    }}
                  >
                    {f}
                  </div>
                ))}
              </div>
            </div>

            {/* KPI Cards */}
            <div style={{ display: "flex", gap: 16, marginBottom: 22 }}>
              <KPICard
                icon={
                  <svg width={20} height={20} viewBox="0 0 20 20" fill="none">
                    <path
                      d="M10 2v16M6 6l4-4 4 4M4 10h12"
                      stroke={COLORS.greenDark}
                      strokeWidth="1.5"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    />
                  </svg>
                }
                value={48250}
                prefix="$"
                suffix=""
                label="Revenue"
                trend="+12%"
                trendPositive={true}
                enterDelay={15}
              />
              <KPICard
                icon={
                  <svg width={20} height={20} viewBox="0 0 20 20" fill="none">
                    <rect
                      x="2.5"
                      y="3.5"
                      width="15"
                      height="14"
                      rx="2"
                      stroke={COLORS.greenDark}
                      strokeWidth="1.2"
                    />
                    <path d="M2.5 8h15" stroke={COLORS.greenDark} strokeWidth="1" />
                    <path
                      d="M6.25 1.67v3.33M13.75 1.67v3.33"
                      stroke={COLORS.greenDark}
                      strokeWidth="1.2"
                      strokeLinecap="round"
                    />
                  </svg>
                }
                value={342}
                prefix=""
                suffix=""
                label="Bookings"
                trend="+8%"
                trendPositive={true}
                enterDelay={20}
              />
              <KPICard
                icon={
                  <svg width={20} height={20} viewBox="0 0 20 20" fill="none">
                    <circle
                      cx="10"
                      cy="10"
                      r="7"
                      stroke="#B54708"
                      strokeWidth="1.5"
                    />
                    <path
                      d="M10 6v4l3 2"
                      stroke="#B54708"
                      strokeWidth="1.5"
                      strokeLinecap="round"
                    />
                  </svg>
                }
                value={78}
                prefix=""
                suffix="%"
                label="Utilisation"
                trend="-2%"
                trendPositive={false}
                enterDelay={25}
              />
              <KPICard
                icon={
                  <svg width={20} height={20} viewBox="0 0 20 20" fill="none">
                    <path
                      d="M10 2C5.6 2 2 5.6 2 10s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8z"
                      stroke={COLORS.greenDark}
                      strokeWidth="1.3"
                    />
                    <path
                      d="M8 8c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2M8 12h4"
                      stroke={COLORS.greenDark}
                      strokeWidth="1.2"
                      strokeLinecap="round"
                    />
                  </svg>
                }
                value={141}
                prefix="$"
                suffix=""
                label="Avg Order"
                trend="+5%"
                trendPositive={true}
                enterDelay={30}
              />
            </div>

            {/* Chart card */}
            <div
              style={{
                backgroundColor: COLORS.white,
                borderRadius: 14,
                border: `1px solid ${COLORS.gray200}`,
                padding: "24px 28px 20px",
                flex: 1,
                opacity: chartCardOpacity,
                transform: `translateY(${chartCardY}px)`,
                position: "relative",
                overflow: "hidden",
              }}
            >
              {/* Chart header row */}
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
                    color: COLORS.navy,
                  }}
                >
                  Monthly Revenue
                </div>
                {/* Legend */}
                <div
                  style={{
                    display: "flex",
                    gap: 18,
                    alignItems: "center",
                    opacity: legendOpacity,
                  }}
                >
                  <div
                    style={{
                      display: "flex",
                      alignItems: "center",
                      gap: 6,
                    }}
                  >
                    <div
                      style={{
                        width: 10,
                        height: 10,
                        borderRadius: 3,
                        backgroundColor: COLORS.primary,
                      }}
                    />
                    <span
                      style={{
                        fontFamily: FONT.regular,
                        fontSize: 12,
                        color: COLORS.gray500,
                      }}
                    >
                      2024
                    </span>
                  </div>
                  <div
                    style={{
                      display: "flex",
                      alignItems: "center",
                      gap: 6,
                    }}
                  >
                    <div
                      style={{
                        width: 10,
                        height: 10,
                        borderRadius: 3,
                        backgroundColor: COLORS.navy,
                        opacity: 0.3,
                      }}
                    />
                    <span
                      style={{
                        fontFamily: FONT.regular,
                        fontSize: 12,
                        color: COLORS.gray500,
                      }}
                    >
                      2023
                    </span>
                  </div>
                </div>
              </div>

              {/* YoY Growth badge */}
              <div
                style={{
                  position: "absolute",
                  top: 20,
                  right: 28,
                  opacity: yoyOpacity,
                  transform: `scale(${yoyScale})`,
                  transformOrigin: "center",
                }}
              >
                <div
                  style={{
                    display: "flex",
                    alignItems: "center",
                    gap: 6,
                    padding: "8px 16px",
                    borderRadius: 99,
                    backgroundColor: COLORS.greenLight,
                    fontFamily: FONT.regular,
                    fontWeight: FONT.weights.semibold,
                    fontSize: 14,
                    color: COLORS.greenDark,
                    border: `1px solid ${COLORS.greenBorder}`,
                  }}
                >
                  <svg width={14} height={14} viewBox="0 0 14 14" fill="none">
                    <path
                      d="M7 11V3M4 5.5L7 3l3 2.5"
                      stroke={COLORS.greenDark}
                      strokeWidth="1.5"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    />
                  </svg>
                  +23% YoY Growth
                </div>
              </div>

              {/* Chart area */}
              <div style={{ display: "flex", position: "relative" }}>
                {/* Y-axis */}
                <div
                  style={{
                    width: 44,
                    height: chartHeight,
                    display: "flex",
                    flexDirection: "column-reverse",
                    justifyContent: "space-between",
                    paddingRight: 8,
                    opacity: yAxisOpacity,
                  }}
                >
                  {Y_LABELS.map((label) => (
                    <div
                      key={label}
                      style={{
                        fontFamily: FONT.regular,
                        fontSize: 11,
                        color: COLORS.gray400,
                        textAlign: "right",
                      }}
                    >
                      {label}
                    </div>
                  ))}
                </div>

                {/* Bars area */}
                <div
                  style={{
                    flex: 1,
                    height: chartHeight,
                    position: "relative",
                    borderLeft: `1px solid ${COLORS.gray200}`,
                    borderBottom: `1px solid ${COLORS.gray200}`,
                  }}
                >
                  {/* Grid lines */}
                  {Y_LABELS.map((_, i) => (
                    <div
                      key={i}
                      style={{
                        position: "absolute",
                        left: 0,
                        right: 0,
                        bottom: `${(i / (Y_LABELS.length - 1)) * 100}%`,
                        borderBottom: `1px solid ${COLORS.gray100}`,
                      }}
                    />
                  ))}

                  {/* Bars */}
                  {MONTH_LABELS.map((month, i) => {
                    const thisH = barHeight(i);
                    const compH = frame >= 80 ? compBarHeight(i) : 0;
                    const xPos = 18 + i * barGap;
                    const isJuly = i === 6;

                    return (
                      <React.Fragment key={month}>
                        {/* Comparison bar (behind, navy at 30% opacity) */}
                        {frame >= 80 && (
                          <div
                            style={{
                              position: "absolute",
                              bottom: 0,
                              left: xPos - 2,
                              width: compBarWidth,
                              height: compH,
                              backgroundColor: COLORS.navy,
                              opacity: 0.3,
                              borderRadius: "3px 3px 0 0",
                            }}
                          />
                        )}

                        {/* Current year bar (orange) */}
                        <div
                          style={{
                            position: "absolute",
                            bottom: 0,
                            left: xPos + (frame >= 80 ? compBarWidth + 2 : 0),
                            width: barWidth,
                            height: thisH,
                            backgroundColor: COLORS.primary,
                            borderRadius: "4px 4px 0 0",
                          }}
                        />

                        {/* Tooltip on July (peak) */}
                        {isJuly && frame >= julyFinishFrame && (
                          <div
                            style={{
                              position: "absolute",
                              bottom: (BAR_DATA[i] / MAX_BAR) * chartHeight + 10,
                              left: xPos + (frame >= 80 ? compBarWidth + 2 : 0) - 24,
                              opacity: tooltipOpacity,
                              transform: `translateY(${tooltipY}px)`,
                              zIndex: 10,
                            }}
                          >
                            <div
                              style={{
                                backgroundColor: COLORS.navy,
                                color: COLORS.white,
                                fontFamily: FONT.regular,
                                fontWeight: FONT.weights.semibold,
                                fontSize: 12,
                                padding: "6px 12px",
                                borderRadius: 8,
                                whiteSpace: "nowrap",
                                boxShadow: "0 4px 12px rgba(0,0,0,0.15)",
                              }}
                            >
                              Jul &mdash; $42,180 Peak
                            </div>
                            <div
                              style={{
                                width: 0,
                                height: 0,
                                borderLeft: "6px solid transparent",
                                borderRight: "6px solid transparent",
                                borderTop: `6px solid ${COLORS.navy}`,
                                margin: "0 auto",
                              }}
                            />
                          </div>
                        )}

                        {/* X-axis label */}
                        <div
                          style={{
                            position: "absolute",
                            bottom: -22,
                            left: xPos - 4,
                            width:
                              barWidth +
                              (frame >= 80 ? compBarWidth + 4 : 0),
                            textAlign: "center",
                            fontFamily: FONT.regular,
                            fontSize: 10,
                            color: COLORS.gray400,
                            opacity: xAxisOpacity,
                          }}
                        >
                          {month}
                        </div>
                      </React.Fragment>
                    );
                  })}
                </div>
              </div>
            </div>
          </div>

          {/* Right: Insight panel (Phase 4) */}
          <div
            style={{
              width: 320,
              marginLeft: 20,
              opacity: panelOpacity,
              transform: `translateX(${panelX}px)`,
              display: "flex",
              flexDirection: "column",
              gap: 16,
              flexShrink: 0,
            }}
          >
            {/* Top Products card */}
            <div
              style={{
                backgroundColor: COLORS.white,
                borderRadius: 14,
                border: `1px solid ${COLORS.gray200}`,
                padding: "20px 22px",
                boxShadow: "-4px 0 20px rgba(0,0,0,0.04)",
              }}
            >
              <div
                style={{
                  fontFamily: FONT.regular,
                  fontWeight: FONT.weights.semibold,
                  fontSize: 15,
                  color: COLORS.navy,
                  marginBottom: 16,
                }}
              >
                Top Products
              </div>
              {topProducts.map((product, i) => (
                <div key={i} style={{ marginBottom: i < 2 ? 14 : 0 }}>
                  <div
                    style={{
                      display: "flex",
                      justifyContent: "space-between",
                      marginBottom: 6,
                    }}
                  >
                    <span
                      style={{
                        fontFamily: FONT.regular,
                        fontSize: 13,
                        color: COLORS.gray700,
                      }}
                    >
                      {product.name}
                    </span>
                    <span
                      style={{
                        fontFamily: FONT.regular,
                        fontSize: 13,
                        fontWeight: FONT.weights.semibold,
                        color: COLORS.navy,
                      }}
                    >
                      {product.revenue}
                    </span>
                  </div>
                  <div
                    style={{
                      height: 8,
                      borderRadius: 4,
                      backgroundColor: COLORS.gray100,
                      overflow: "hidden",
                    }}
                  >
                    <div
                      style={{
                        height: "100%",
                        borderRadius: 4,
                        backgroundColor:
                          i === 0
                            ? COLORS.primary
                            : i === 1
                              ? COLORS.navy
                              : COLORS.blue,
                        width: `${product.barPct * 100 * topProductBarProgress}%`,
                        transition: "none",
                      }}
                    />
                  </div>
                </div>
              ))}
            </div>

            {/* Revenue by Channel card */}
            <div
              style={{
                backgroundColor: COLORS.white,
                borderRadius: 14,
                border: `1px solid ${COLORS.gray200}`,
                padding: "20px 22px",
                boxShadow: "-4px 0 20px rgba(0,0,0,0.04)",
              }}
            >
              <div
                style={{
                  fontFamily: FONT.regular,
                  fontWeight: FONT.weights.semibold,
                  fontSize: 15,
                  color: COLORS.navy,
                  marginBottom: 16,
                }}
              >
                Revenue by Channel
              </div>
              <MiniPieChart animProgress={pieProgress} />
            </div>

            {/* Export Report button */}
            <div
              style={{
                backgroundColor: COLORS.white,
                borderRadius: 14,
                border: `1px solid ${COLORS.gray200}`,
                padding: "16px 22px",
                display: "flex",
                alignItems: "center",
                justifyContent: "center",
                gap: 10,
                boxShadow: `0 0 ${20 + exportGlow * 20}px rgba(247, 88, 31, ${0.05 + exportGlow * 0.15}), -4px 0 20px rgba(0,0,0,0.04)`,
              }}
            >
              <svg width={16} height={16} viewBox="0 0 16 16" fill="none">
                <path
                  d="M8 2v8M5 8l3 3 3-3"
                  stroke={COLORS.primary}
                  strokeWidth="1.5"
                  strokeLinecap="round"
                  strokeLinejoin="round"
                />
                <path
                  d="M2 12v2h12v-2"
                  stroke={COLORS.primary}
                  strokeWidth="1.3"
                  strokeLinecap="round"
                  strokeLinejoin="round"
                />
              </svg>
              <span
                style={{
                  fontFamily: FONT.regular,
                  fontWeight: FONT.weights.semibold,
                  fontSize: 14,
                  color: COLORS.primary,
                }}
              >
                Export Report
              </span>
            </div>
          </div>
        </div>
      </AppMockup>
    </AbsoluteFill>
  );
};
