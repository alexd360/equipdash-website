import React from "react";
import { COLORS, FONT } from "../theme";

type StatusType =
  | "picked-up"
  | "reserved"
  | "confirmed"
  | "active"
  | "completed"
  | "cancelled"
  | "checked-in"
  | "paid"
  | "unpaid"
  | "refunded"
  | "partially-paid"
  | "published"
  | "overdue"
  | "late"
  | "draft";

const STATUS_STYLES: Record<StatusType, { bg: string; color: string; label: string }> = {
  "picked-up": { bg: "#ECFDF3", color: COLORS.greenDark, label: "Picked Up" },
  reserved: { bg: "#FFFAEB", color: "#B54708", label: "Reserved" },
  confirmed: { bg: "#EFF8FF", color: "#175CD3", label: "Confirmed" },
  active: { bg: "#ECFDF3", color: COLORS.greenDark, label: "Active" },
  completed: { bg: "#ECFDF3", color: COLORS.greenDark, label: "Completed" },
  cancelled: { bg: "#FEF3F2", color: "#B42318", label: "Cancelled" },
  "checked-in": { bg: "#FFFAEB", color: "#B54708", label: "Checked In" },
  paid: { bg: "#ECFDF3", color: COLORS.greenDark, label: "Paid" },
  unpaid: { bg: "#FFFAEB", color: "#B54708", label: "Unpaid" },
  refunded: { bg: "#FEF3F2", color: "#B42318", label: "Refunded" },
  "partially-paid": { bg: "#FFFAEB", color: "#B54708", label: "Partially Paid" },
  published: { bg: "#ECFDF3", color: COLORS.greenDark, label: "Published" },
  overdue: { bg: "#FEF3F2", color: "#B42318", label: "Overdue" },
  late: { bg: "#FEF3F2", color: "#B42318", label: "Late" },
  draft: { bg: "#F2F4F7", color: "#344054", label: "Draft" },
};

interface StatusBadgeProps {
  status: StatusType;
  label?: string;
  fontSize?: number;
}

export const StatusBadge: React.FC<StatusBadgeProps> = ({
  status,
  label,
  fontSize = 11,
}) => {
  const s = STATUS_STYLES[status];
  return (
    <span
      style={{
        display: "inline-flex",
        alignItems: "center",
        padding: "3px 10px",
        borderRadius: 99,
        backgroundColor: s.bg,
        color: s.color,
        fontSize,
        fontFamily: FONT.regular,
        fontWeight: FONT.weights.medium,
        whiteSpace: "nowrap",
      }}
    >
      {label || s.label}
    </span>
  );
};
