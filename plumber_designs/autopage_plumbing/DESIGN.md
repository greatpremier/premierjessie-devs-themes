---
name: High-Trust Hydraulic Modernism
colors:
  surface: '#f8f9ff'
  surface-dim: '#cbdbf5'
  surface-bright: '#f8f9ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#eff4ff'
  surface-container: '#e5eeff'
  surface-container-high: '#dce9ff'
  surface-container-highest: '#d3e4fe'
  on-surface: '#0b1c30'
  on-surface-variant: '#44474e'
  inverse-surface: '#213145'
  inverse-on-surface: '#eaf1ff'
  outline: '#74777f'
  outline-variant: '#c4c6cf'
  surface-tint: '#495f82'
  primary: '#001026'
  on-primary: '#ffffff'
  primary-container: '#0b2545'
  on-primary-container: '#778db2'
  inverse-primary: '#b1c7f0'
  secondary: '#006399'
  on-secondary: '#ffffff'
  secondary-container: '#67bafd'
  on-secondary-container: '#004972'
  tertiary: '#1e0a00'
  on-tertiary: '#ffffff'
  tertiary-container: '#3e1b00'
  on-tertiary-container: '#d96f00'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#d5e3ff'
  primary-fixed-dim: '#b1c7f0'
  on-primary-fixed: '#001c3b'
  on-primary-fixed-variant: '#314769'
  secondary-fixed: '#cde5ff'
  secondary-fixed-dim: '#94ccff'
  on-secondary-fixed: '#001d32'
  on-secondary-fixed-variant: '#004b74'
  tertiary-fixed: '#ffdcc6'
  tertiary-fixed-dim: '#ffb784'
  on-tertiary-fixed: '#301400'
  on-tertiary-fixed-variant: '#713700'
  background: '#f8f9ff'
  on-background: '#0b1c30'
  surface-variant: '#d3e4fe'
typography:
  display-hero:
    fontFamily: Plus Jakarta Sans
    fontSize: 56px
    fontWeight: '800'
    lineHeight: 64px
    letterSpacing: -0.03em
  display-hero-mobile:
    fontFamily: Plus Jakarta Sans
    fontSize: 36px
    fontWeight: '800'
    lineHeight: 42px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 38px
    fontWeight: '700'
    lineHeight: 46px
    letterSpacing: -0.02em
  headline-lg-mobile:
    fontFamily: Plus Jakarta Sans
    fontSize: 28px
    fontWeight: '700'
    lineHeight: 34px
    letterSpacing: -0.01em
  headline-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 26px
    fontWeight: '700'
    lineHeight: 32px
    letterSpacing: -0.01em
  headline-sm:
    fontFamily: Plus Jakarta Sans
    fontSize: 20px
    fontWeight: '600'
    lineHeight: 28px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 15px
    fontWeight: '400'
    lineHeight: 24px
  body-sm:
    fontFamily: Inter
    fontSize: 13px
    fontWeight: '400'
    lineHeight: 20px
  label-lg:
    fontFamily: Inter
    fontSize: 15px
    fontWeight: '600'
    lineHeight: 20px
    letterSpacing: 0.01em
  label-md:
    fontFamily: Inter
    fontSize: 13px
    fontWeight: '600'
    lineHeight: 18px
    letterSpacing: 0.02em
  label-sm:
    fontFamily: Inter
    fontSize: 11px
    fontWeight: '700'
    lineHeight: 16px
    letterSpacing: 0.04em
  data-metric:
    fontFamily: Plus Jakarta Sans
    fontSize: 32px
    fontWeight: '800'
    lineHeight: 38px
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  gutter: 1.5rem
  gutter-mobile: 1rem
  margin: 2.5rem
  margin-mobile: 1rem
  space-xs: 0.25rem
  space-sm: 0.5rem
  space-md: 1rem
  space-lg: 1.5rem
  space-xl: 2.5rem
  space-xxl: 4rem
---

## Brand & Style

This design system establishes a high-tier architectural and technical identity for commercial and residential plumbing services operating throughout Gauteng, South Africa. Moving deliberately away from the kitsch, cartoonish tropes of legacy home repair websites, the visual direction merges corporate engineering precision with urgent human reassurance. 

The aesthetic is **Modern Engineering & Tactical Utility**:
- **Clarity over clutter:** Interfaces resemble high-end mechanical schematics or luxury corporate infrastructure dashboards rather than ad-laden local classifieds.
- **Immediate calm under crisis:** Homeowners dealing with burst pipes in Sandton or facility managers overseeing industrial pump failures in Midrand require fast, frictionless access to emergency dispatch.
- **Structural credibility:** Clean hairline dividers, solid structural grounding, and crisp typographic hierarchy signal accountability, certified licensing, and premium craft.

## Colors

The palette balances clinical cleanliness, industrial plumbing heritage, and urgent utility dispatching:

- **Primary (`#0B2545` - Deep Navy):** Represents foundational authority, structural stability, and executive plumbing management. Used for high-emphasis typography, headers, dark corporate panels, and primary navigation bars.
- **Secondary (`#0077B6` - Clean Hydro Azure):** Signifies fluid motion, pure pressurized water, filtration, and precision hydraulics. Used for interactive states, key iconography, progress bars, and trust markers.
- **Tertiary (`#F77F00` - Emergency Amber/Orange):** An intentional safety-first accent reserved strictly for 24/7 rapid dispatch CTAs, emergency contact phone prompts, active warning banners, and immediate quote requests. It must never be overused for generic UI elements to preserve its critical urgency value.
- **Neutral (`#64748B` - Slate Gray):** Bridges technical legibility between crisp cold `#FFFFFF` / `#F8FAFC` backgrounds and high-contrast navy content blocks. Used for secondary metadata, subtle borders, and structural captions.

## Typography

The type system pairs **Plus Jakarta Sans** for structural headlines with **Inter** for dense transactional UI, dispatch timetables, and quote calculators:

- **Headlines & Display:** Plus Jakarta Sans provides crisp geometric weight with slightly rounded aperture terminals, balancing industrial solidity with customer-facing warmth. Headlines use tight negative tracking (`-0.02em` to `-0.03em`) for a premium corporate look.
- **Body & Data:** Inter guarantees exceptional clarity on small screens, particularly when rendering South African phone numbers (`+27 (0)11 ...`), Rand pricing formats (`R 850.00 / hr`), and technical compliance codes (SABS/PIRB standards).
- **Labeling & Badges:** `label-sm` utilizes uppercase formatting and expanded letter spacing for tactical status indicators (e.g., "DISPATCH EN ROUTE", "CERTIFIED PIRB REGISTERED").

## Layout & Spacing

The layout is governed by a responsive 12-column grid designed to handle mixed-mode workflows (emergency speed on mobile; rich architectural quoting on desktop):

- **Desktop (1024px+):** Max-width 1280px container, 12 columns, 1.5rem (`24px`) gutters, and 2.5rem outer canvas margins. Complex services and regional maps display side-by-side with dispatch forms.
- **Tablet (768px - 1023px):** 8 columns, 1.5rem gutters, and 2rem outer margins. Cards collapse from 4 or 3 columns to dual-column configurations.
- **Mobile (< 768px):** 4 columns, 1rem (`16px`) gutters, and 1rem outer margins. High-priority interactive modules stack into sticky vertical rails with the 24/7 hotline locked to a bottom floating drawer.

## Elevation & Depth

Visual hierarchy combines **crisp low-contrast technical outlines** with **cool-tinted ambient shadows**:

- **Ground Layer (`Surface-0`):** `#F8FAFC` provides a clean slate baseline that cuts glare compared to raw white.
- **Card Tier (`Surface-1`):** Pure `#FFFFFF` surfaces bounded by a 1px structural outline (`#E2E8F0`). Subtle drop shadow: `0 2px 4px -1px rgba(11, 37, 69, 0.04), 0 4px 12px -2px rgba(11, 37, 69, 0.06)`. The cool navy undertone keeps shadows crisp rather than muddy.
- **Interactive Hover & Overlay (`Surface-2`):** Elevates to `0 12px 24px -4px rgba(11, 37, 69, 0.08), 0 4px 8px -2px rgba(11, 37, 69, 0.04)`.
- **Emergency Sticky Drawers & Dispatch Overlays (`Surface-Top`):** Layered above all content with backdrop blur (`backdrop-filter: blur(12px)`) on a semi-translucent primary surface (`rgba(11, 37, 69, 0.95)`), framed by an emergency amber hairline highlight.

## Shapes

The system relies on a **Soft (`1`)** shape language:
- Standard elements (buttons, inputs, status pills) feature a `0.25rem` (`4px`) border radius.
- Structural cards, service tiles, and map containers step up to `rounded-lg` (`0.5rem` / `8px`).
- Modals, prominent alert dialogs, and hero panels use `rounded-xl` (`0.75rem` / `12px`).

This controlled curvature projects structural precision, technical discipline, and industrial order, avoiding both aggressive brutalist hard corners and overly casual pill/bubble shapes.

## Components

### Buttons
- **Emergency Dispatch (Tertiary CTA):** Solid `#F77F00` background, `#FFFFFF` bold typography, `space-sm` vertical by `space-lg` horizontal padding. Includes an emergency telephone icon or beacon pulse animation. Hover state darkens to `#E65100`.
- **Primary Action:** Solid `#0B2545` navy with crisp `#FFFFFF` text. Focus state features a 2px offset ring in `#0077B6`.
- **Secondary Action:** Transparent background with a 1.5px `#0077B6` border and `#0077B6` typography. On hover, fills with an azure wash (`rgba(0, 119, 182, 0.06)`).

### Cards & Service Tiles
- Crisp `#FFFFFF` card containers with 1px `#E2E8F0` border.
- Commercial vs. Residential tags placed top-right using `label-sm` badges.
- Service cards highlight technical compliance markers (e.g., "PIRB Certified Geyser Installation", "Commercial Drain Jetting").
- Top or left 4px color-coded accent bars indicating service category (cyan for water supply, navy for commercial installations, amber for emergency bursts).

### Inputs & Booking Forms
- Base height: 48px to accommodate glove/thumb touch targets on site.
- Border: 1px `#CBD5E1` on white, transitioning to 2px `#0077B6` on focus with no drop shadow.
- Region selector custom-tuned for Gauteng municipalities (Sandton, Randburg, Rosebank, Midrand, Centurion).
- Phone input with hardcoded `+27` South African dialing code prefix flag and spacing mask.

### Badges & Status Chips
- **Status Indicator:** Pill format (`rounded-full`), height 24px, uppercase `label-sm`.
- **Active Dispatch:** `#FEF3C7` background with `#B45309` text and a continuous pulsating dot.
- **PIRB / SABS Compliance:** `#F0FDF4` background with `#15803D` text and shield micro-icon.

### Emergency Hotline Sticky Banner
- Mobile-docked bottom bar spanning the full viewport width with a 1px border-t (`#E2E8F0`).
- Displays immediate click-to-call button with local Johannesburg routing (`+27 11 XXX XXXX`), estimated dispatch time (`"Midrand/Sandton: ~25 mins"`), and instant WhatsApp direct dispatch integration.