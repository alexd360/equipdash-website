import React from "react";
import { COLORS, FONT } from "../theme";
import { DashAIIcon } from "./DashAIIcon";

interface MockupSidebarProps {
  activeItem?: string;
  width?: number;
}

const NAV_SECTIONS = [
  {
    label: "GENERAL",
    items: [
      { name: "Dashboard", icon: "dashboard" },
      { name: "AI Assistant", icon: "ai" },
    ],
  },
  {
    label: "OPERATIONS",
    items: [
      { name: "POS", icon: "pos" },
      { name: "Calendar", icon: "calendar" },
      { name: "Check Availability", icon: "check-avail" },
      { name: "Scan a barcode", icon: "barcode" },
      { name: "Bookings", icon: "bookings", hasArrow: true },
    ],
  },
  {
    label: "SERVICES",
    items: [
      { name: "Rentals", icon: "rentals", hasArrow: true },
      { name: "Experiences", icon: "experiences", hasArrow: true },
      { name: "Store", icon: "store", hasArrow: true },
    ],
  },
  {
    label: "MANAGEMENT",
    items: [
      { name: "Customers", icon: "customers" },
      { name: "Staff", icon: "staff", hasArrow: true },
      { name: "Waivers & Forms", icon: "waivers" },
      { name: "Promotions", icon: "promotions", hasArrow: true },
      { name: "Surveys", icon: "surveys" },
      { name: "Reports", icon: "reports" },
      { name: "Settings", icon: "settings" },
    ],
  },
  {
    label: "SUPPORT",
    items: [
      { name: "Help Center", icon: "help" },
    ],
  },
];

const NavIcon: React.FC<{ icon: string; color: string; size?: number }> = ({ icon, color, size = 18 }) => {
  switch (icon) {
    case "dashboard":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <rect x="1.7" y="1.7" width="7" height="7" rx="1.5" fill={color} />
          <rect x="11.3" y="1.7" width="7" height="7" rx="1.5" fill={color} />
          <rect x="1.7" y="11.2" width="7" height="7" rx="1.5" fill={color} />
          <rect x="11.3" y="11.2" width="7" height="7" rx="1.5" fill={color} />
        </svg>
      );
    case "ai":
      return <DashAIIcon size={size} />;
    case "pos":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <path d="M3.33 5.83C3.33 5.37 3.71 5 4.17 5h8.33c.46 0 .83.37.83.83v10.84c0 .46-.37.83-.83.83H4.17c-.46 0-.83-.37-.83-.83V5.83z" fill={color} opacity=".25" />
          <path d="M4.17 3.33h8.33C13.88 3.33 15 4.45 15 5.83v10.84c0 1.38-1.12 2.5-2.5 2.5H4.17c-1.38 0-2.5-1.12-2.5-2.5V5.83c0-1.38 1.12-2.5 2.5-2.5z" stroke={color} strokeWidth="1.2" />
          <rect x="5" y=".83" width="6.67" height="4.17" rx=".83" fill={color} />
          <rect x="5" y="8.33" width="6.67" height="2.5" rx=".6" fill={color} opacity=".2" />
          <circle cx="6.25" cy="14.17" r=".7" fill={color} />
          <circle cx="8.33" cy="14.17" r=".7" fill={color} />
          <circle cx="10.42" cy="14.17" r=".7" fill={color} />
        </svg>
      );
    case "calendar":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <rect x="2.5" y="3.5" width="15" height="14" rx="2" stroke={color} strokeWidth="1.2" />
          <path d="M2.5 8h15" stroke={color} strokeWidth="1" />
          <path d="M6.25 1.67v3.33M13.75 1.67v3.33" stroke={color} strokeWidth="1.2" strokeLinecap="round" />
          <circle cx="6.5" cy="11.5" r=".8" fill={color} />
          <circle cx="10" cy="11.5" r=".8" fill={color} />
          <circle cx="13.5" cy="11.5" r=".8" fill={color} />
          <circle cx="6.5" cy="14.5" r=".8" fill={color} />
          <circle cx="10" cy="14.5" r=".8" fill={color} />
        </svg>
      );
    case "check-avail":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <rect x="2.5" y="3.5" width="15" height="14" rx="2" stroke={color} strokeWidth="1.2" />
          <path d="M2.5 8h15" stroke={color} strokeWidth="1" />
          <path d="M6.25 1.67v3.33M13.75 1.67v3.33" stroke={color} strokeWidth="1.2" strokeLinecap="round" />
          <path d="M7 12l2 2 4-4" stroke={color} strokeWidth="1.2" strokeLinecap="round" strokeLinejoin="round" />
        </svg>
      );
    case "barcode":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <rect x="3" y="4" width="2" height="12" rx=".5" fill={color} />
          <rect x="6.5" y="4" width="1" height="12" rx=".5" fill={color} />
          <rect x="9" y="4" width="2.5" height="12" rx=".5" fill={color} />
          <rect x="13" y="4" width="1" height="12" rx=".5" fill={color} />
          <rect x="15.5" y="4" width="2" height="12" rx=".5" fill={color} />
        </svg>
      );
    case "bookings":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <rect x="3" y="2.5" width="10.5" height="15" rx="1.5" stroke={color} strokeWidth="1.1" />
          <path d="M6 7h5M6 10h5M6 13h3" stroke={color} strokeWidth=".9" strokeLinecap="round" />
          <circle cx="15.3" cy="14.4" r="3.5" fill={color} />
          <path d="M13.7 14.4l1.1 1.1 2-2" stroke={COLORS.navy} strokeWidth="1" strokeLinecap="round" strokeLinejoin="round" />
        </svg>
      );
    case "rentals":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <path d="M6.1 6.1c-1.8 1.8-1.3 5 1.5 7.8s6 3.3 7.8 1.5-1.3-5-1.5-7.8c-1.5-1.5-3.8-2.3-5.3-2.3-.8 0-1.7.2-2.5.8z" fill={color} opacity=".9" />
          <path d="M7.5 12.5l5-5M10 15l4-4" stroke={color} strokeWidth="1" strokeLinecap="round" />
        </svg>
      );
    case "experiences":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <path d="M3.35 7.5V18.75h.83V9.08c.2.09.41.14.63.14h4.06l.63 2.25-2.47.75c-.94.29-1.5 1.27-1.28 2.24l.72 3.14c.18.78.94 1.28 1.72 1.12.39-.08.74-.32.95-.66.22-.34.28-.76.19-1.16l-.47-1.9 4.44-1.29c.78-.22 1.23-1.04 1.01-1.83l-1.44-5.24c-.12-.46-.44-.84-.85-1.06-.42-.22-.91-.24-1.35-.08l-1.98.75H4.79c-.39 0-.76.16-1.03.43-.22.22-.36.5-.41.81z" fill={color} />
          <circle cx="14.5" cy="3" r="2.2" fill={color} />
        </svg>
      );
    case "store":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <path d="M4 6.5h12c.55 0 1 .45 1 1V17c0 .55-.45 1-1 1H4c-.55 0-1-.45-1-1V7.5c0-.55.45-1 1-1z" stroke={color} strokeWidth="1.2" />
          <path d="M7 6.5V5c0-1.66 1.34-3 3-3s3 1.34 3 3v1.5" stroke={color} strokeWidth="1.2" strokeLinecap="round" />
          <path d="M8 12l1.5 1.5L13 10" stroke={color} strokeWidth="1.1" strokeLinecap="round" strokeLinejoin="round" />
        </svg>
      );
    case "customers":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <circle cx="10" cy="6.9" r="3.5" fill={color} />
          <path d="M4.66 16.67c0-2.38 2.43-4.55 5.3-4.55s5.3 2.17 5.3 4.55" fill={color} />
          <circle cx="15" cy="6.9" r="2" fill={color} opacity=".5" />
          <path d="M15.3 12.3c1.5.3 3 1.5 3 3.2" stroke={color} strokeWidth="1" strokeLinecap="round" opacity=".5" />
        </svg>
      );
    case "staff":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <circle cx="7" cy="6" r="3" fill={color} />
          <path d="M2 15c0-2 2-4 5-4s5 2 5 4" fill={color} />
          <circle cx="14" cy="7" r="2.2" fill={color} opacity=".6" />
          <path d="M14 11c2.2 0 4 1.5 4 3" stroke={color} strokeWidth="1" strokeLinecap="round" opacity=".6" />
        </svg>
      );
    case "waivers":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <rect x="3" y="2" width="11" height="16" rx="1.5" stroke={color} strokeWidth="1.1" />
          <path d="M6.5 8h4M6.5 11h4" stroke={color} strokeWidth=".9" strokeLinecap="round" />
          <path d="M10 14l1.5 1.5 3-3" stroke={color} strokeWidth="1.1" strokeLinecap="round" strokeLinejoin="round" />
        </svg>
      );
    case "promotions":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <path d="M3 10l7-7 7 7-7 7-7-7z" stroke={color} strokeWidth="1.2" />
          <circle cx="10" cy="10" r="2" fill={color} />
        </svg>
      );
    case "surveys":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <rect x="3" y="2" width="14" height="16" rx="2" stroke={color} strokeWidth="1.1" />
          <circle cx="7" cy="7" r="1" fill={color} />
          <circle cx="7" cy="11" r="1" fill={color} />
          <circle cx="7" cy="15" r="1" fill={color} />
          <path d="M10 7h4M10 11h4M10 15h3" stroke={color} strokeWidth=".9" strokeLinecap="round" />
        </svg>
      );
    case "reports":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <rect x="3" y="12" width="3" height="6" rx=".5" fill={color} />
          <rect x="8.5" y="8" width="3" height="10" rx=".5" fill={color} />
          <rect x="14" y="4" width="3" height="14" rx=".5" fill={color} />
          <path d="M2 2v16h16" stroke={color} strokeWidth="1.1" strokeLinecap="round" />
        </svg>
      );
    case "settings":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <circle cx="10" cy="10" r="3" stroke={color} strokeWidth="1.2" />
          <path d="M10 2v2M10 16v2M2 10h2M16 10h2M4.2 4.2l1.4 1.4M14.4 14.4l1.4 1.4M4.2 15.8l1.4-1.4M14.4 5.6l1.4-1.4" stroke={color} strokeWidth="1" strokeLinecap="round" />
        </svg>
      );
    case "help":
      return (
        <svg width={size} height={size} viewBox="0 0 20 20" fill="none">
          <circle cx="10" cy="10" r="8" stroke={color} strokeWidth="1.2" />
          <path d="M7.5 7.5c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5c0 1.4-1.1 2-2.5 2.5" stroke={color} strokeWidth="1.1" strokeLinecap="round" />
          <circle cx="10" cy="14" r=".8" fill={color} />
        </svg>
      );
    default:
      return null;
  }
};

export const MockupSidebar: React.FC<MockupSidebarProps> = ({
  activeItem = "Dashboard",
  width = 224,
}) => {
  return (
    <div
      style={{
        width,
        backgroundColor: COLORS.navy,
        display: "flex",
        flexDirection: "column",
        flexShrink: 0,
        overflow: "hidden",
        height: "100%",
      }}
    >
      {/* Logo */}
      <div
        style={{
          padding: "20px 18px 16px",
          display: "flex",
          alignItems: "center",
          gap: 10,
          borderBottom: "1px solid rgba(255,255,255,0.08)",
          marginBottom: 4,
        }}
      >
        <svg width={26} height={26} viewBox="0 0 571.05 565.2">
          <polygon fill={COLORS.logoGreen} points="489.47 0 326.32 0 244.74 141.3 244.74 141.3 407.89 141.3 489.47 282.6 571.05 141.3 489.47 0" />
          <polygon fill={COLORS.logoBlue} points="244.74 141.3 81.58 141.3 0 282.6 81.58 423.9 244.74 423.9 163.16 282.6 244.74 141.3" />
          <polygon fill={COLORS.logoOrange} points="489.47 282.6 407.89 423.9 244.74 423.9 326.32 565.2 489.47 565.2 571.05 423.9 489.47 282.6" />
          <polygon fill={COLORS.logoNavy} points="407.89 141.3 244.73 141.3 163.16 282.6 244.73 423.9 407.89 423.89 489.46 282.6 407.89 141.3" />
          <path fill={COLORS.white} d="m163.16,282.6c100.96,0,194.26,53.86,244.74,141.3h0s0-282.6,0-282.6l-244.74,141.3Z" />
        </svg>
        <span
          style={{
            color: COLORS.white,
            fontFamily: FONT.regular,
            fontWeight: FONT.weights.bold,
            fontSize: 17,
            letterSpacing: -0.3,
          }}
        >
          EquipDash
        </span>
      </div>

      {/* Nav sections */}
      <div style={{ flex: 1, overflowY: "hidden", padding: "0 10px" }}>
        {NAV_SECTIONS.map((section) => (
          <div key={section.label} style={{ marginBottom: 2 }}>
            <div
              style={{
                fontSize: 10,
                color: "rgba(255,255,255,0.35)",
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.semibold,
                letterSpacing: 1.2,
                textTransform: "uppercase",
                padding: "8px 10px 3px",
              }}
            >
              {section.label}
            </div>
            {section.items.map((item) => {
              const isActive = item.name === activeItem;
              return (
                <div
                  key={item.name}
                  style={{
                    display: "flex",
                    alignItems: "center",
                    gap: 10,
                    padding: "7px 10px",
                    borderRadius: 8,
                    backgroundColor: isActive ? "rgba(255,255,255,0.1)" : "transparent",
                    color: isActive ? COLORS.white : "rgba(255,255,255,0.65)",
                    fontSize: 13,
                    fontFamily: FONT.regular,
                    fontWeight: isActive ? FONT.weights.medium : FONT.weights.regular,
                    marginBottom: 1,
                  }}
                >
                  <NavIcon
                    icon={item.icon}
                    color={
                      item.icon === "ai"
                        ? "#9333EA"
                        : isActive
                          ? COLORS.white
                          : "rgba(255,255,255,0.65)"
                    }
                    size={16}
                  />
                  <span style={{ flex: 1 }}>{item.name}</span>
                  {(item as any).hasArrow && (
                    <svg width={10} height={10} viewBox="0 0 10 10" fill="none">
                      <path
                        d="M4 3l2 2-2 2"
                        stroke={isActive ? COLORS.white : "rgba(255,255,255,0.4)"}
                        strokeWidth="1.2"
                        strokeLinecap="round"
                      />
                    </svg>
                  )}
                </div>
              );
            })}
          </div>
        ))}
      </div>
    </div>
  );
};
