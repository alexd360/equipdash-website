import React from "react";

interface DashAIIconProps {
  size?: number;
}

export const DashAIIcon: React.FC<DashAIIconProps> = ({ size = 14 }) => {
  const id = `dashGrad_${Math.random().toString(36).slice(2, 7)}`;
  return (
    <svg width={size} height={size} viewBox="0 0 120 120" fill="none">
      <path
        d="M60 6L102 33V87L60 114L18 87V33L60 6Z"
        fill={`url(#${id})`}
      />
      <path
        d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z"
        fill="white"
      />
      <circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white" />
      <defs>
        <linearGradient
          id={id}
          x1="18"
          y1="6"
          x2="102"
          y2="114"
          gradientUnits="userSpaceOnUse"
        >
          <stop stopColor="#2563EB" />
          <stop offset="0.5" stopColor="#7C3AED" />
          <stop offset="1" stopColor="#9333EA" />
        </linearGradient>
      </defs>
    </svg>
  );
};
