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
        <PanelBody title={__("Hero Section", "donate-page")} initialOpen={true}>
          <TextControl
            label={__("Eyebrow", "donate-page")}
            value={heroEyebrow}
            onChange={(value) => setAttributes({ heroEyebrow: value })}
          />
          <TextControl
            label={__("Title", "donate-page")}
            value={heroTitle}
            onChange={(value) => setAttributes({ heroTitle: value })}
          />
          <TextControl
            label={__("Title Highlight", "donate-page")}
            value={heroTitleHighlight}
            onChange={(value) => setAttributes({ heroTitleHighlight: value })}
          />
          <TextareaControl
            label={__("Description", "donate-page")}
            value={heroDescription}
            onChange={(value) => setAttributes({ heroDescription: value })}
          />
        </PanelBody>
        <PanelBody title={__("CTA Section", "donate-page")} initialOpen={false}>
          <TextControl
            label={__("Title", "donate-page")}
            value={ctaTitle}
            onChange={(value) => setAttributes({ ctaTitle: value })}
          />
          <TextareaControl
            label={__("Description", "donate-page")}
            value={ctaDescription}
            onChange={(value) => setAttributes({ ctaDescription: value })}
          />
          <TextControl
            label={__("Button Text", "donate-page")}
            value={ctaButtonText}
            onChange={(value) => setAttributes({ ctaButtonText: value })}
          />
          <TextControl
            label={__("Button URL", "donate-page")}
            value={ctaButtonUrl}
            onChange={(value) => setAttributes({ ctaButtonUrl: value })}
            help="Link to your PayPal, Stripe, or payment processor"
          />
        </PanelBody>
      </InspectorControls>

      <div {...useBlockProps({ className: "donate-page" })}>
        <section className="donate-hero">
          <div className="donate-hero-bg">
            <div className="donate-hero-pattern"></div>
          </div>
          <div className="container">
            <p className="donate-hero-eyebrow">{heroEyebrow}</p>
            <h1 className="donate-hero-title">
              {heroTitle}<br />
              <em>{heroTitleHighlight}</em>
            </h1>
            <p className="donate-hero-description">{heroDescription}</p>
            <span className="btn btn-primary btn-lg">{ctaButtonText}</span>
          </div>
        </section>

        <section className="donate-tiers">
          <div className="container">
            <h2 className="section-title">What your gift provides</h2>
            <div className="tiers-grid">
              {(attributes.tiers || []).map((tier, index) => (
                <div className="tier-card" key={index}>
                  <span className="tier-amount">{tier.amount}</span>
                  <h3 className="tier-title">{tier.title}</h3>
                  <p className="tier-description">{tier.description}</p>
                  <span className="btn btn-outline">Give {tier.amount}</span>
                </div>
              ))}
            </div>
          </div>
        </section>

        <section className="donate-impact">
          <div className="container">
            <h2 className="section-title">{attributes.impactTitle}</h2>
            <div className="impact-grid">
              {(attributes.impactItems || []).map((item, index) => (
                <div className="impact-item" key={index}>
                  <span className="impact-stat">{item.stat}</span>
                  <span className="impact-label">{item.label}</span>
                </div>
              ))}
            </div>
          </div>
        </section>

        <section className="donate-ways">
          <div className="container">
            <h2 className="section-title">{attributes.waysTitle}</h2>
            <div className="ways-grid">
              {(attributes.ways || []).map((way, index) => (
                <div className="way-card" key={index}>
                  <h3 className="way-title">{way.title}</h3>
                  <p className="way-description">{way.description}</p>
                </div>
              ))}
            </div>
          </div>
        </section>

        <section className="donate-cta">
          <div className="container">
            <div className="donate-cta-card">
              <h2 className="donate-cta-title">{ctaTitle}</h2>
              <p className="donate-cta-description">{ctaDescription}</p>
              <span className="btn btn-primary btn-lg">{ctaButtonText}</span>
            </div>
          </div>
        </section>
      </div>
    </>
  );
}
