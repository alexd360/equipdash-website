import React from "react";
import { AbsoluteFill, interpolate, useCurrentFrame, staticFile } from "remotion";
import { COLORS, FONT, EASING } from "../theme";
import { AppMockup } from "../components/AppMockup";

/* ------------------------------------------------------------------ */
/*  Online Bookings — "Storefront → POS → Confirmed" cinematic        */
/*                                                                     */
/*  Duration: 240 frames                                               */
/*  Phase 1 (0-100):   Online storefront in browser chrome, product    */
/*                      selected, date picker, Add to Cart bounce      */
/*  Phase 2 (100-130): Cinematic transition — storefront scales down,  */
/*                      blurs, POS view sweeps in from right           */
/*  Phase 3 (130-190): POS terminal (AppMockup), customer typed in,    */
/*                      dates auto-fill, total counts up               */
/*  Phase 4 (190-240): "Booking Confirmed!" success overlay rises      */
/* ------------------------------------------------------------------ */

const CLAMP = { extrapolateLeft: "clamp" as const, extrapolateRight: "clamp" as const };

/* ---- Helper: typewriter ---- */
const typedText = (text: string, frame: number, startFrame: number, speed = 0.5): string => {
  const elapsed = Math.max(0, frame - startFrame);
  return text.substring(0, Math.min(text.length, Math.floor(elapsed * speed)));
};

/* ------------------------------------------------------------------ */
/*  Phase 1: Online Storefront (in browser chrome)                     */
/* ------------------------------------------------------------------ */
const Storefront: React.FC = () => {
  const frame = useCurrentFrame();

  /* Browser chrome entry */
  const chromeOpacity = interpolate(frame, [3, 12], [0, 1], CLAMP);
  const chromeScale = interpolate(frame, [3, 12], [0.95, 1], { ...CLAMP, easing: EASING.easeOut });

  /* Products grid stagger */
  const productEntry = (i: number) => {
    const start = 10 + i * 4;
    const opacity = interpolate(frame, [start, start + 8], [0, 1], CLAMP);
    const y = interpolate(frame, [start, start + 8], [15, 0], { ...CLAMP, easing: EASING.easeOut });
    return { opacity, y };
  };

  /* Product selection highlight */
  const selectBorder = interpolate(frame, [28, 34], [0, 1], { ...CLAMP, easing: EASING.spring });

  /* Date picker animation */
  const datePickerOpacity = interpolate(frame, [36, 42], [0, 1], CLAMP);
  const dateHighlight = interpolate(frame, [44, 50], [0, 1], { ...CLAMP, easing: EASING.spring });

  /* Add to Cart bounce */
  const cartBtnScale = frame >= 55
    ? interpolate(frame, [55, 60, 63], [1, 1.08, 1], { ...CLAMP, easing: EASING.spring })
    : 1;
  const cartBtnGlow = interpolate(frame, [55, 60], [0, 1], CLAMP);

  /* Cart counter bounce */
  const cartCountScale = frame >= 58
    ? interpolate(frame, [58, 65], [0, 1], { ...CLAMP, easing: EASING.spring })
    : 0;

  /* Exit: scale down and blur effect */
  const exitScale = interpolate(frame, [95, 105], [1, 0.85], { ...CLAMP, easing: EASING.easeIn });
  const exitOpacity = interpolate(frame, [95, 105], [1, 0], CLAMP);
  const exitRotate = interpolate(frame, [95, 105], [0, -2], { ...CLAMP, easing: EASING.easeIn });

  const PRODUCTS = [
    { name: "Mountain Bike - Trail Pro", price: "$45/day", category: "Mountain Bikes", selected: true, image: "mountain-bike.jpg" },
    { name: "E-Bike City Cruiser", price: "$55/day", category: "E-Bikes", selected: false, image: "e-bike.jpg" },
    { name: "Road Bike - Carbon", price: "$65/day", category: "Road Bikes", selected: false, image: "road-bike.jpg" },
    { name: "Kids Bike - Adventure", price: "$25/day", category: "Kids", selected: false, image: "kids-bike.jpg" },
  ];

  const CALENDAR_DAYS = [
    [null, null, null, null, null, 1, 2],
    [3, 4, 5, 6, 7, 8, 9],
    [10, 11, 12, 13, 14, 15, 16],
    [17, 18, 19, 20, 21, 22, 23],
    [24, 25, 26, 27, 28, null, null],
  ];

  return (
    <AbsoluteFill
      style={{
        display: "flex",
        alignItems: "center",
        justifyContent: "center",
        backgroundColor: COLORS.gray100,
        opacity: exitOpacity,
        transform: `scale(${chromeScale * exitScale}) rotate(${exitRotate}deg)`,
      }}
    >
      {/* Browser chrome wrapper */}
      <div
        style={{
          width: 1400,
          backgroundColor: COLORS.white,
          borderRadius: 16,
          overflow: "hidden",
          boxShadow: "0 20px 60px rgba(0,0,0,0.12)",
          opacity: chromeOpacity,
        }}
      >
        {/* Browser title bar */}
        <div
          style={{
            height: 44,
            backgroundColor: COLORS.gray50,
            borderBottom: `1px solid ${COLORS.gray200}`,
            display: "flex",
            alignItems: "center",
            padding: "0 16px",
            gap: 8,
          }}
        >
          {/* Traffic lights */}
          <div style={{ display: "flex", gap: 6 }}>
            <div style={{ width: 12, height: 12, borderRadius: 6, backgroundColor: "#FF5F57" }} />
            <div style={{ width: 12, height: 12, borderRadius: 6, backgroundColor: "#FFBD2E" }} />
            <div style={{ width: 12, height: 12, borderRadius: 6, backgroundColor: "#28C840" }} />
          </div>
          {/* URL bar */}
          <div
            style={{
              flex: 1,
              marginLeft: 20,
              padding: "6px 14px",
              borderRadius: 8,
              backgroundColor: COLORS.white,
              border: `1px solid ${COLORS.gray200}`,
              fontFamily: FONT.regular,
              fontSize: 12,
              color: COLORS.gray500,
              display: "flex",
              alignItems: "center",
              gap: 6,
            }}
          >
            <svg width={12} height={12} viewBox="0 0 12 12" fill="none">
              <path d="M3 6h6M6 3v6" stroke={COLORS.gray400} strokeWidth="1" strokeLinecap="round" />
              <circle cx="6" cy="6" r="5" stroke={COLORS.gray400} strokeWidth="1" />
            </svg>
            book.equipdash.com/marina-adventures
          </div>
          {/* Cart icon with counter */}
          <div style={{ position: "relative", marginLeft: 12 }}>
            <svg width={20} height={20} viewBox="0 0 20 20" fill="none">
              <path d="M4 4h2l1.5 8h7L17 7H7" stroke={COLORS.navy} strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
              <circle cx="9" cy="16" r="1.2" fill={COLORS.navy} />
              <circle cx="14.5" cy="16" r="1.2" fill={COLORS.navy} />
            </svg>
            {cartCountScale > 0 && (
              <div
                style={{
                  position: "absolute",
                  top: -4,
                  right: -6,
                  width: 16,
                  height: 16,
                  borderRadius: 8,
                  backgroundColor: COLORS.primary,
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "center",
                  fontFamily: FONT.regular,
                  fontWeight: FONT.weights.bold,
                  fontSize: 9,
                  color: COLORS.white,
                  transform: `scale(${cartCountScale})`,
                }}
              >
                1
              </div>
            )}
          </div>
        </div>

        {/* Page content */}
        <div style={{ padding: "24px 32px", display: "flex", gap: 28 }}>
          {/* Left: Product grid */}
          <div style={{ flex: 1 }}>
            <div
              style={{
                fontFamily: FONT.regular,
                fontWeight: FONT.weights.bold,
                fontSize: 22,
                color: COLORS.navy,
                marginBottom: 6,
              }}
            >
              Marina Adventures
            </div>
            <div style={{ fontFamily: FONT.regular, fontSize: 13, color: COLORS.gray400, marginBottom: 18 }}>
              Choose your rental equipment
            </div>

            <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: 12 }}>
              {PRODUCTS.map((prod, i) => {
                const pe = productEntry(i);
                const isSelected = prod.selected && frame >= 28;
                return (
                  <div
                    key={prod.name}
                    style={{
                      borderRadius: 12,
                      border: isSelected ? `2px solid ${COLORS.primary}` : `1px solid ${COLORS.gray200}`,
                      backgroundColor: isSelected ? `${COLORS.primary}05` : COLORS.white,
                      overflow: "hidden",
                      opacity: pe.opacity,
                      transform: `translateY(${pe.y}px) scale(${isSelected ? 1 + selectBorder * 0.01 : 1})`,
                    }}
                  >
                    {/* Product image */}
                    <div
                      style={{
                        height: 90,
                        backgroundColor: COLORS.gray100,
                        overflow: "hidden",
                      }}
                    >
                      <img
                        src={staticFile(prod.image)}
                        style={{
                          width: "100%",
                          height: "100%",
                          objectFit: "cover",
                        }}
                      />
                    </div>
                    <div style={{ padding: "10px 12px" }}>
                      <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 13, color: COLORS.gray900 }}>
                        {prod.name}
                      </div>
                      <div style={{ display: "flex", justifyContent: "space-between", alignItems: "center", marginTop: 4 }}>
                        <span style={{ fontFamily: FONT.regular, fontSize: 11, color: COLORS.gray400 }}>{prod.category}</span>
                        <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 14, color: COLORS.primary }}>{prod.price}</span>
                      </div>
                    </div>
                    {/* Selected check */}
                    {isSelected && (
                      <div
                        style={{
                          position: "absolute",
                          top: 8,
                          right: 8,
                          width: 22,
                          height: 22,
                          borderRadius: 11,
                          backgroundColor: COLORS.primary,
                          display: "flex",
                          alignItems: "center",
                          justifyContent: "center",
                          transform: `scale(${selectBorder})`,
                        }}
                      >
                        <svg width={12} height={12} viewBox="0 0 12 12" fill="none">
                          <path d="M3 6l2.5 2.5L9 4" stroke={COLORS.white} strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
                        </svg>
                      </div>
                    )}
                  </div>
                );
              })}
            </div>
          </div>

          {/* Right: Date picker + Add to Cart */}
          <div style={{ width: 320 }}>
            {/* Date Picker */}
            <div
              style={{
                backgroundColor: COLORS.white,
                borderRadius: 12,
                border: `1px solid ${COLORS.gray200}`,
                padding: 16,
                marginBottom: 16,
                opacity: datePickerOpacity,
              }}
            >
              <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.semibold, fontSize: 14, color: COLORS.navy, marginBottom: 12 }}>
                February 2026
              </div>
              {/* Day headers */}
              <div style={{ display: "grid", gridTemplateColumns: "repeat(7, 1fr)", gap: 2, marginBottom: 4 }}>
                {["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"].map((d) => (
                  <div key={d} style={{ textAlign: "center", fontFamily: FONT.regular, fontSize: 10, color: COLORS.gray400, padding: "4px 0" }}>
                    {d}
                  </div>
                ))}
              </div>
              {/* Calendar grid */}
              {CALENDAR_DAYS.map((week, wi) => (
                <div key={wi} style={{ display: "grid", gridTemplateColumns: "repeat(7, 1fr)", gap: 2 }}>
                  {week.map((day, di) => {
                    const isStart = day === 20;
                    const isEnd = day === 25;
                    const isRange = day !== null && day >= 20 && day <= 25;
                    const highlighted = isRange && dateHighlight > 0;
                    return (
                      <div
                        key={`${wi}-${di}`}
                        style={{
                          textAlign: "center",
                          padding: "6px 0",
                          fontFamily: FONT.regular,
                          fontSize: 12,
                          color: highlighted ? COLORS.white : day ? COLORS.gray700 : "transparent",
                          backgroundColor: highlighted
                            ? (isStart || isEnd) ? COLORS.primary : `${COLORS.primary}30`
                            : "transparent",
                          borderRadius: isStart ? "6px 0 0 6px" : isEnd ? "0 6px 6px 0" : 0,
                          fontWeight: highlighted ? FONT.weights.bold : FONT.weights.regular,
                        }}
                      >
                        {day || ""}
                      </div>
                    );
                  })}
                </div>
              ))}
            </div>

            {/* Summary + Add to Cart */}
            <div
              style={{
                backgroundColor: COLORS.white,
                borderRadius: 12,
                border: `1px solid ${COLORS.gray200}`,
                padding: 16,
              }}
            >
              <div style={{ display: "flex", justifyContent: "space-between", marginBottom: 8 }}>
                <span style={{ fontFamily: FONT.regular, fontSize: 13, color: COLORS.gray500 }}>Mountain Bike - Trail Pro</span>
                <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.semibold, fontSize: 13, color: COLORS.navy }}>$45/day</span>
              </div>
              <div style={{ display: "flex", justifyContent: "space-between", marginBottom: 12 }}>
                <span style={{ fontFamily: FONT.regular, fontSize: 13, color: COLORS.gray500 }}>5 days (Feb 20-25)</span>
                <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 15, color: COLORS.navy }}>$225</span>
              </div>
              <div
                style={{
                  padding: "12px 0",
                  borderRadius: 10,
                  backgroundColor: COLORS.primary,
                  color: COLORS.white,
                  fontFamily: FONT.regular,
                  fontWeight: FONT.weights.bold,
                  fontSize: 15,
                  textAlign: "center",
                  transform: `scale(${cartBtnScale})`,
                  boxShadow: cartBtnGlow > 0 ? `0 0 ${16 * cartBtnGlow}px rgba(247, 88, 31, ${0.3 * cartBtnGlow})` : "none",
                }}
              >
                Add to Cart
              </div>
            </div>
          </div>
        </div>
      </div>
    </AbsoluteFill>
  );
};

/* ------------------------------------------------------------------ */
/*  Phase 3: POS Terminal                                              */
/* ------------------------------------------------------------------ */
const POSTerminal: React.FC = () => {
  const frame = useCurrentFrame();

  /* Entry from right */
  const posOpacity = interpolate(frame, [105, 120], [0, 1], CLAMP);
  const posX = interpolate(frame, [105, 120], [200, 0], { ...CLAMP, easing: EASING.easeOut });

  /* Customer name typing */
  const customerName = typedText("Emma Scott", frame, 135, 0.6);

  /* Dates auto-fill */
  const pickupOpacity = interpolate(frame, [148, 154], [0, 1], CLAMP);
  const returnOpacity = interpolate(frame, [152, 158], [0, 1], CLAMP);

  /* Security deposit */
  const depositOpacity = interpolate(frame, [160, 166], [0, 1], CLAMP);

  /* Total count up */
  const totalValue = interpolate(frame, [162, 180], [0, 275], { ...CLAMP, easing: EASING.easeOut });

  /* Exit before success overlay */
  const exitDim = interpolate(frame, [188, 195], [0, 0.4], CLAMP);

  const INPUT_STYLE: React.CSSProperties = {
    padding: "10px 14px",
    borderRadius: 8,
    border: `1px solid ${COLORS.gray200}`,
    backgroundColor: COLORS.white,
    fontFamily: FONT.regular,
    fontSize: 14,
    color: COLORS.gray900,
  };

  return (
    <div
      style={{
        opacity: posOpacity,
        transform: `translateX(${posX}px)`,
        position: "relative",
      }}
    >
      {/* Dim overlay for success */}
      {exitDim > 0 && (
        <div
          style={{
            position: "absolute",
            inset: -32,
            backgroundColor: `rgba(0, 20, 50, ${exitDim})`,
            zIndex: 20,
            borderRadius: 0,
          }}
        />
      )}

      <div style={{ display: "flex", gap: 24 }}>
        {/* Left: Booking form */}
        <div style={{ flex: 1 }}>
          <div
            style={{
              backgroundColor: COLORS.white,
              borderRadius: 14,
              border: `1px solid ${COLORS.gray200}`,
              padding: "24px 28px",
            }}
          >
            {/* Booking type */}
            <div style={{ display: "flex", gap: 8, marginBottom: 20 }}>
              {["Rental", "Experience", "Store"].map((type, i) => (
                <div
                  key={type}
                  style={{
                    flex: 1,
                    padding: "10px 14px",
                    borderRadius: 8,
                    border: i === 0 ? `2px solid ${COLORS.confirmed}` : `1px solid ${COLORS.gray200}`,
                    backgroundColor: i === 0 ? "#EFF8FF" : COLORS.white,
                    textAlign: "center",
                    fontFamily: FONT.regular,
                    fontSize: 13,
                    fontWeight: i === 0 ? FONT.weights.semibold : FONT.weights.regular,
                    color: i === 0 ? COLORS.confirmed : COLORS.gray500,
                  }}
                >
                  {type}
                </div>
              ))}
            </div>

            {/* Customer */}
            <div style={{ marginBottom: 16 }}>
              <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 13, color: COLORS.gray700, marginBottom: 6 }}>
                Customer
              </div>
              <div style={INPUT_STYLE}>
                {customerName}
                {frame >= 135 && frame < 150 && (
                  <span style={{ borderRight: `2px solid ${COLORS.primary}`, marginLeft: 1 }} />
                )}
              </div>
            </div>

            {/* Date row */}
            <div style={{ display: "flex", gap: 12, marginBottom: 16 }}>
              <div style={{ flex: 1, opacity: pickupOpacity }}>
                <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 13, color: COLORS.gray700, marginBottom: 6 }}>
                  Pickup
                </div>
                <div style={INPUT_STYLE}>Feb 20, 2026</div>
              </div>
              <div style={{ flex: 1, opacity: returnOpacity }}>
                <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 13, color: COLORS.gray700, marginBottom: 6 }}>
                  Return
                </div>
                <div style={INPUT_STYLE}>Feb 25, 2026</div>
              </div>
            </div>

            {/* Item */}
            <div
              style={{
                padding: "12px 16px",
                borderRadius: 8,
                backgroundColor: COLORS.gray50,
                border: `1px solid ${COLORS.gray100}`,
                display: "flex",
                justifyContent: "space-between",
                alignItems: "center",
              }}
            >
              <div>
                <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 14, color: COLORS.gray900 }}>
                  Mountain Bike - Trail Pro
                </div>
                <div style={{ fontFamily: FONT.regular, fontSize: 12, color: COLORS.gray400, marginTop: 2 }}>
                  x1 &middot; $45.00/day &middot; 5 days
                </div>
              </div>
              <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 16, color: COLORS.navy }}>
                $225.00
              </span>
            </div>
          </div>
        </div>

        {/* Right: Cart summary */}
        <div style={{ width: 300 }}>
          <div
            style={{
              backgroundColor: COLORS.white,
              borderRadius: 14,
              border: `1px solid ${COLORS.gray200}`,
              padding: "20px 22px",
            }}
          >
            <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 16, color: COLORS.navy, marginBottom: 16 }}>
              Order Summary
            </div>

            <div style={{ display: "flex", justifyContent: "space-between", marginBottom: 8 }}>
              <span style={{ fontFamily: FONT.regular, fontSize: 13, color: COLORS.gray500 }}>Subtotal</span>
              <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 13, color: COLORS.gray900 }}>$225.00</span>
            </div>

            <div style={{ display: "flex", justifyContent: "space-between", marginBottom: 8, opacity: depositOpacity }}>
              <span style={{ fontFamily: FONT.regular, fontSize: 13, color: COLORS.gray500 }}>Security deposit</span>
              <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 13, color: COLORS.gray900 }}>$50.00</span>
            </div>

            <div
              style={{
                borderTop: `2px solid ${COLORS.gray200}`,
                marginTop: 12,
                paddingTop: 12,
                display: "flex",
                justifyContent: "space-between",
                alignItems: "baseline",
              }}
            >
              <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 15, color: COLORS.navy }}>Total</span>
              <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 24, color: COLORS.primary }}>
                ${totalValue > 0 ? totalValue.toFixed(2) : "0.00"}
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Phase 4: Success Overlay                                           */
/* ------------------------------------------------------------------ */
const SuccessOverlay: React.FC = () => {
  const frame = useCurrentFrame();

  if (frame < 190) return null;

  /* Card entry */
  const cardY = interpolate(frame, [192, 208], [300, 0], { ...CLAMP, easing: EASING.easeOut });
  const cardOpacity = interpolate(frame, [192, 202], [0, 1], CLAMP);
  const cardScale = interpolate(frame, [192, 208], [0.9, 1], { ...CLAMP, easing: EASING.easeOut });

  /* Checkmark spring */
  const checkScale = interpolate(frame, [202, 215], [0, 1], { ...CLAMP, easing: EASING.spring });

  /* Text stagger */
  const titleOpacity = interpolate(frame, [208, 215], [0, 1], CLAMP);
  const detailsOpacity = interpolate(frame, [215, 222], [0, 1], CLAMP);
  const confNumOpacity = interpolate(frame, [222, 230], [0, 1], CLAMP);

  /* Confetti particles */
  const confettiOpacity = interpolate(frame, [205, 210], [0, 1], CLAMP);

  return (
    <div
      style={{
        position: "absolute",
        inset: 0,
        display: "flex",
        alignItems: "center",
        justifyContent: "center",
        zIndex: 30,
      }}
    >
      {/* Confetti dots */}
      {confettiOpacity > 0 && (
        <div style={{ position: "absolute", inset: 0, overflow: "hidden", pointerEvents: "none" }}>
          {Array.from({ length: 20 }).map((_, i) => {
            const x = 300 + (i * 73) % 1320;
            const startY = 200 + (i * 37) % 400;
            const drift = interpolate(frame, [205, 240], [startY, startY + 120 + (i % 5) * 30], CLAMP);
            const colors = [COLORS.primary, COLORS.green, COLORS.blue, "#F79009", "#7C3AED"];
            return (
              <div
                key={i}
                style={{
                  position: "absolute",
                  left: x,
                  top: drift,
                  width: 6 + (i % 3) * 2,
                  height: 6 + (i % 3) * 2,
                  borderRadius: i % 2 === 0 ? "50%" : 1,
                  backgroundColor: colors[i % colors.length],
                  opacity: confettiOpacity * 0.7,
                  transform: `rotate(${i * 45 + frame * 3}deg)`,
                }}
              />
            );
          })}
        </div>
      )}

      {/* Card */}
      <div
        style={{
          width: 440,
          backgroundColor: COLORS.white,
          borderRadius: 20,
          boxShadow: "0 24px 80px rgba(0,0,0,0.18)",
          transform: `translateY(${cardY}px) scale(${cardScale})`,
          opacity: cardOpacity,
          overflow: "hidden",
        }}
      >
        <div style={{ height: 5, background: `linear-gradient(90deg, ${COLORS.green}, #28C840, ${COLORS.blue})` }} />
        <div style={{ padding: "32px 36px", textAlign: "center" }}>
          {/* Green check */}
          <div
            style={{
              width: 68,
              height: 68,
              borderRadius: 34,
              backgroundColor: COLORS.greenLight,
              border: `3px solid ${COLORS.greenBorder}`,
              display: "flex",
              alignItems: "center",
              justifyContent: "center",
              margin: "0 auto 18px",
              transform: `scale(${checkScale})`,
            }}
          >
            <svg width={32} height={32} viewBox="0 0 32 32" fill="none">
              <path d="M9 16l5 5 9-9" stroke={COLORS.green} strokeWidth="3.5" strokeLinecap="round" strokeLinejoin="round" />
            </svg>
          </div>

          <div style={{ opacity: titleOpacity }}>
            <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 24, color: COLORS.navy, marginBottom: 4 }}>
              Booking Confirmed!
            </div>
          </div>

          <div style={{ opacity: confNumOpacity, marginBottom: 20 }}>
            <span
              style={{
                fontFamily: FONT.regular,
                fontSize: 14,
                color: COLORS.gray400,
              }}
            >
              Confirmation #
            </span>
            <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 14, color: COLORS.navy, marginLeft: 4 }}>
              EQ-2026-0128
            </span>
          </div>

          <div
            style={{
              opacity: detailsOpacity,
              backgroundColor: COLORS.gray50,
              borderRadius: 12,
              padding: "16px 20px",
              display: "grid",
              gridTemplateColumns: "1fr 1fr",
              gap: "10px 20px",
              textAlign: "left",
            }}
          >
            {[
              { label: "Customer", value: "Emma Scott" },
              { label: "Item", value: "Mountain Bike" },
              { label: "Pickup", value: "Feb 20, 2026" },
              { label: "Return", value: "Feb 25, 2026" },
            ].map((d) => (
              <div key={d.label}>
                <div style={{ fontFamily: FONT.regular, fontSize: 10, color: COLORS.gray400, textTransform: "uppercase", letterSpacing: 0.5, marginBottom: 2 }}>
                  {d.label}
                </div>
                <div style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.medium, fontSize: 14, color: COLORS.gray900 }}>
                  {d.value}
                </div>
              </div>
            ))}
          </div>

          <div
            style={{
              opacity: detailsOpacity,
              marginTop: 16,
              display: "flex",
              justifyContent: "space-between",
              alignItems: "baseline",
              borderTop: `2px solid ${COLORS.gray200}`,
              paddingTop: 12,
            }}
          >
            <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 16, color: COLORS.navy }}>Total</span>
            <span style={{ fontFamily: FONT.regular, fontWeight: FONT.weights.bold, fontSize: 26, color: COLORS.primary }}>$275.00</span>
          </div>
        </div>
      </div>
    </div>
  );
};

/* ------------------------------------------------------------------ */
/*  Main                                                               */
/* ------------------------------------------------------------------ */
export const OnlineBookings: React.FC = () => {
  const frame = useCurrentFrame();

  const showStorefront = frame < 108;
  const showPOS = frame >= 100;

  return (
    <AbsoluteFill style={{ backgroundColor: COLORS.gray50 }}>
      {/* Phase 1: Storefront (standalone, no AppMockup) */}
      {showStorefront && <Storefront />}

      {/* Phase 3: POS in AppMockup */}
      {showPOS && (
        <AppMockup activeItem="POS" pageTitle="New Booking">
          <div style={{ position: "relative", width: "100%", height: "100%" }}>
            <div style={{ position: "absolute", inset: 0 }}>
              <POSTerminal />
            </div>
          </div>
        </AppMockup>
      )}

      {/* Phase 4: Success overlay */}
      <SuccessOverlay />
    </AbsoluteFill>
  );
};
