import { continueRender, delayRender, staticFile } from "remotion";

const fontFaces = [
  { weight: 300, file: "BRCandor-Light.woff2" },
  { weight: 400, file: "BRCandor-Regular.woff2" },
  { weight: 500, file: "BRCandor-Medium.woff2" },
  { weight: 600, file: "BRCandor-SemiBold.woff2" },
  { weight: 700, file: "BRCandor-Bold.woff2" },
];

let loaded = false;

export const loadFonts = () => {
  if (loaded) return;
  const waitForFonts = delayRender("Loading BR Candor fonts");

  const promises = fontFaces.map(({ weight, file }) => {
    const font = new FontFace("BR Candor", `url(${staticFile(`fonts/${file}`)})`, {
      weight: String(weight),
      style: "normal",
    });
    return font.load().then((loadedFont) => {
      document.fonts.add(loadedFont);
    });
  });

  Promise.all(promises)
    .then(() => {
      loaded = true;
      continueRender(waitForFonts);
    })
    .catch((err) => {
      console.error("Font loading failed:", err);
      continueRender(waitForFonts);
    });
};
