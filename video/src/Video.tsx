import { AbsoluteFill, Audio, Sequence, staticFile } from "remotion";
import { loadFonts } from "./fonts";
import { AudienceMontage } from "./scenes/AudienceMontage";
import { PainPoints } from "./scenes/PainPoints";
import { EquipDashReveal } from "./scenes/EquipDashReveal";
import { FeatureWalkthrough, WALKTHROUGH_DURATION } from "./scenes/FeatureWalkthrough";
import { CtaScene } from "./scenes/CtaScene";

// V3 Scene breakdown (30fps, 3420 frames total = ~114 seconds / 1:54):
// Scene 1: Audience Montage — 0 to 240 (8s)
// Scene 2: Pain Points — 240 to 500 (8.7s, 5 pain points)
// Scene 3: EquipDash Reveal — 500 to 620 (4s)
// Scene 4: Feature Walkthrough — 620 to 3090 (82.3s, 9 features × variable durations)
// Scene 5: CTA — 3090 to 3420 (11s)

const WALKTHROUGH_START = 620;
const CTA_START = WALKTHROUGH_START + WALKTHROUGH_DURATION; // 2905
const CTA_DURATION = 330;

export const Video: React.FC = () => {
  loadFonts();

  return (
    <AbsoluteFill>
      <Audio src={staticFile("soundtrack.mp3")} volume={0.3} />
      {/* Voice overs — layered on top of soundtrack */}
      <Audio src={staticFile("voice-over/intro-voice-over.mp3")} volume={1} />
      <Sequence from={240} name="EquipDash For You VO">
        <Audio src={staticFile("voice-over/equipdash-for-you-voiceover.mp3")} volume={1} />
      </Sequence>
      {/* Showcase voice overs — 10 frames after each showcase title appears */}
      <Sequence from={630} name="VO: Online Bookings">
        <Audio src={staticFile("voice-over/showcase1.mp3")} volume={1} />
      </Sequence>
      <Sequence from={905} name="VO: Manage Bookings">
        <Audio src={staticFile("voice-over/showcase2.mp3")} volume={1} />
      </Sequence>
      <Sequence from={1130} name="VO: Surveys & Reviews">
        <Audio src={staticFile("voice-over/showcase3.mp3")} volume={1} />
      </Sequence>
      <Sequence from={1475} name="VO: Customer CRM">
        <Audio src={staticFile("voice-over/showcase4.mp3")} volume={1} />
      </Sequence>
      <Sequence from={1695} name="VO: Products & Experiences">
        <Audio src={staticFile("voice-over/showcase5.mp3")} volume={1} />
      </Sequence>
      <Sequence from={1980} name="VO: Staff">
        <Audio src={staticFile("voice-over/showcase6.mp3")} volume={1} />
      </Sequence>
      <Sequence from={2255} name="VO: Inventory">
        <Audio src={staticFile("voice-over/showcase7.mp3")} volume={1} />
      </Sequence>
      <Sequence from={2580} name="VO: Reports">
        <Audio src={staticFile("voice-over/showcase8.mp3")} volume={1} />
      </Sequence>
      <Sequence from={2775} name="VO: Dash AI">
        <Audio src={staticFile("voice-over/showcase9.mp3")} volume={1} />
      </Sequence>
      <Sequence from={0} durationInFrames={240} name="Audience Montage">
        <AudienceMontage />
      </Sequence>
      <Sequence from={240} durationInFrames={260} name="Pain Points">
        <PainPoints />
      </Sequence>
      <Sequence from={500} durationInFrames={120} name="EquipDash Reveal">
        <EquipDashReveal />
      </Sequence>
      <Sequence from={WALKTHROUGH_START} durationInFrames={WALKTHROUGH_DURATION} name="Feature Walkthrough">
        <FeatureWalkthrough />
      </Sequence>
      <Sequence from={CTA_START} durationInFrames={CTA_DURATION} name="CTA">
        <CtaScene />
      </Sequence>
    </AbsoluteFill>
  );
};
