import { __ } from "@wordpress/i18n";
import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import { PanelBody, TextControl, TextareaControl } from "@wordpress/components";
import "./editor.scss";

export default function Edit({ attributes, setAttributes }) {
  const {
    heroEyebrow,
    heroTitle,
    heroTitleHighlight,
    heroDescription,
    ctaTitle,
    ctaDescription,
    ctaButtonText,
    ctaButtonUrl,
  } = attributes;

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Hero Section", "volunteer-page")} initialOpen={true}>
          <TextControl
            label={__("Eyebrow", "volunteer-page")}
            value={heroEyebrow}
            onChange={(value) => setAttributes({ heroEyebrow: value })}
          />
          <TextControl
            label={__("Title", "volunteer-page")}
            value={heroTitle}
            onChange={(value) => setAttributes({ heroTitle: value })}
          />
          <TextControl
            label={__("Title Highlight", "volunteer-page")}
            value={heroTitleHighlight}
            onChange={(value) => setAttributes({ heroTitleHighlight: value })}
          />
          <TextareaControl
            label={__("Description", "volunteer-page")}
            value={heroDescription}
            onChange={(value) => setAttributes({ heroDescription: value })}
          />
        </PanelBody>
        <PanelBody title={__("CTA Section", "volunteer-page")} initialOpen={false}>
          <TextControl
            label={__("Title", "volunteer-page")}
            value={ctaTitle}
            onChange={(value) => setAttributes({ ctaTitle: value })}
          />
          <TextareaControl
            label={__("Description", "volunteer-page")}
            value={ctaDescription}
            onChange={(value) => setAttributes({ ctaDescription: value })}
          />
          <TextControl
            label={__("Button Text", "volunteer-page")}
            value={ctaButtonText}
            onChange={(value) => setAttributes({ ctaButtonText: value })}
          />
          <TextControl
            label={__("Button URL", "volunteer-page")}
            value={ctaButtonUrl}
            onChange={(value) => setAttributes({ ctaButtonUrl: value })}
          />
        </PanelBody>
      </InspectorControls>

      <div {...useBlockProps({ className: "volunteer-page" })}>
        <section className="volunteer-hero">
          <div className="volunteer-hero-bg">
            <div className="volunteer-hero-pattern"></div>
          </div>
          <div className="container">
            <p className="volunteer-hero-eyebrow">{heroEyebrow}</p>
            <h1 className="volunteer-hero-title">
              {heroTitle}<br />
              <em>{heroTitleHighlight}</em>
            </h1>
            <p className="volunteer-hero-description">{heroDescription}</p>
            <span className="btn btn-primary btn-lg">{ctaButtonText}</span>
          </div>
        </section>

        <section className="volunteer-opportunities">
          <div className="container">
            <h2 className="section-title">Volunteer Opportunities</h2>
            <div className="opportunities-grid">
              {(attributes.opportunities || []).map((opp, index) => (
                <div className="opportunity-card" key={index}>
                  <div className="opportunity-content">
                    <h3 className="opportunity-title">{opp.title}</h3>
                    <span className="opportunity-commitment">{opp.commitment}</span>
                    <p className="opportunity-description">{opp.description}</p>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </section>

        <section className="volunteer-why">
          <div className="container">
            <h2 className="section-title">Why volunteer with us</h2>
            <div className="why-grid">
              {(attributes.whyItems || []).map((item, index) => (
                <div className="why-item" key={index}>
                  <span className="why-stat">{item.stat}</span>
                  <span className="why-label">{item.label}</span>
                </div>
              ))}
            </div>
          </div>
        </section>

        <section className="volunteer-cta">
          <div className="container">
            <div className="volunteer-cta-card">
              <h2 className="volunteer-cta-title">{ctaTitle}</h2>
              <p className="volunteer-cta-description">{ctaDescription}</p>
              <span className="btn btn-primary btn-lg">{ctaButtonText}</span>
            </div>
          </div>
        </section>
      </div>
    </>
  );
}
