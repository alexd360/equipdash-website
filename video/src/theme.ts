export const COLORS = {
  primary: "#F7581F",
  navy: "#003264",
  dark: "#1B2B4B",
  white: "#FFFFFF",
  offWhite: "#F9FAFB",
  gray50: "#F9FAFB",
  gray100: "#F2F4F7",
  gray200: "#EAECF0",
  gray300: "#D0D5DD",
  gray400: "#98A2B3",
  gray500: "#667085",
  gray700: "#344054",
  gray900: "#101828",
  green: "#26AF51",
  greenLight: "#ECFDF3",
  greenBorder: "#A6F4C5",
  greenDark: "#027A48",
  blue: "#00A3FA",
  red: "#F04438",
  logoGreen: "#26AF51",
  logoBlue: "#00A3FA",
  logoOrange: "#F7581F",
  logoNavy: "#003264",
  aiGradientStart: "#2563EB",
  aiGradientMid: "#7C3AED",
  aiGradientEnd: "#9333EA",
  pickedUp: "#26AF51",
  reserved: "#F79009",
  confirmed: "#2563EB",
};

export const FONT = {
  regular: "BR Candor",
  weights: {
    light: 300,
    regular: 400,
    medium: 500,
    semibold: 600,
    bold: 700,
  },
};

export const EASING = {
  easeOut: (t: number) => 1 - Math.pow(1 - t, 3),
  easeIn: (t: number) => t * t * t,
  easeInOut: (t: number) =>
    t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2,
  spring: (t: number) => {
    const c4 = (2 * Math.PI) / 3;
    return t === 0
      ? 0
      : t === 1
        ? 1
        : Math.pow(2, -10 * t) * Math.sin((t * 10 - 0.75) * c4) + 1;
  },
};

export const FPS = 30;
export const WIDTH = 1920;
export const HEIGHT = 1080;
export const TOTAL_FRAMES = 3420;
