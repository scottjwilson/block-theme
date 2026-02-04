/**
 * WordPress dependencies
 */
import { __ } from "@wordpress/i18n";
import {
  useBlockProps,
  RichText,
  InspectorControls,
} from "@wordpress/block-editor";
import { PanelBody, TextControl } from "@wordpress/components";

/**
 * Editor styles
 */
import "./editor.scss";

/**
 * Hero block edit component
 */
export default function Edit({ attributes, setAttributes }) {
  const {
    eyebrow,
    title,
    titleHighlight,
    description,
    primaryButtonText,
    primaryButtonUrl,
    secondaryButtonText,
    secondaryButtonUrl,
    statNumber,
    statLabel,
  } = attributes;

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Button Settings", "hero")} initialOpen={true}>
          <TextControl
            label={__("Primary Button URL", "hero")}
            value={primaryButtonUrl}
            onChange={(value) => setAttributes({ primaryButtonUrl: value })}
          />
          <TextControl
            label={__("Secondary Button URL", "hero")}
            value={secondaryButtonUrl}
            onChange={(value) => setAttributes({ secondaryButtonUrl: value })}
          />
        </PanelBody>
        <PanelBody title={__("Stat Card", "hero")} initialOpen={true}>
          <TextControl
            label={__("Stat Number", "hero")}
            value={statNumber}
            onChange={(value) => setAttributes({ statNumber: value })}
          />
          <TextControl
            label={__("Stat Label", "hero")}
            value={statLabel}
            onChange={(value) => setAttributes({ statLabel: value })}
          />
        </PanelBody>
      </InspectorControls>

      <section {...useBlockProps({ className: "hero" })}>
        <div className="hero-background">
          <div className="hero-gradient"></div>
          <div className="hero-waves">
            <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
              <path
                fill="currentColor"
                fillOpacity="0.03"
                d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
              ></path>
            </svg>
          </div>
        </div>

        <div className="hero-content">
          <div className="hero-text">
            <RichText
              tagName="p"
              className="hero-eyebrow"
              value={eyebrow}
              onChange={(value) => setAttributes({ eyebrow: value })}
              placeholder={__("Enter eyebrow text...", "hero")}
            />
            <h1 className="hero-title">
              <RichText
                tagName="span"
                value={title}
                onChange={(value) => setAttributes({ title: value })}
                placeholder={__("Enter title...", "hero")}
              />
              <br />
              <RichText
                tagName="em"
                value={titleHighlight}
                onChange={(value) => setAttributes({ titleHighlight: value })}
                placeholder={__("Enter highlighted text...", "hero")}
              />
            </h1>
            <RichText
              tagName="p"
              className="hero-description"
              value={description}
              onChange={(value) => setAttributes({ description: value })}
              placeholder={__("Enter description...", "hero")}
            />
            <div className="hero-actions">
              <RichText
                tagName="span"
                className="btn btn-primary btn-lg"
                value={primaryButtonText}
                onChange={(value) =>
                  setAttributes({ primaryButtonText: value })
                }
                placeholder={__("Button text...", "hero")}
              />
              <RichText
                tagName="span"
                className="btn btn-outline btn-lg"
                value={secondaryButtonText}
                onChange={(value) =>
                  setAttributes({ secondaryButtonText: value })
                }
                placeholder={__("Button text...", "hero")}
              />
            </div>
          </div>

          <div className="hero-visual">
            <div className="hero-image-wrapper">
              <div className="image-placeholder hero-image">
                <span>
                  {__(
                    "Hero Image: Volunteer helping client with paperwork at Harbor Light center",
                    "hero",
                  )}
                </span>
              </div>
              <div className="hero-image-accent"></div>
            </div>

            <div className="hero-stat-card">
              <span className="stat-number">{statNumber}</span>
              <span className="stat-label">{statLabel}</span>
            </div>
          </div>
        </div>

        <div className="hero-scroll">
          <span>{__("Scroll to discover", "hero")}</span>
          <div className="scroll-line"></div>
        </div>
      </section>
    </>
  );
}
