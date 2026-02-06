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
    formEmail,
    phone,
    email,
    address,
  } = attributes;

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Hero Section", "volunteer-signup")} initialOpen={true}>
          <TextControl
            label={__("Eyebrow", "volunteer-signup")}
            value={heroEyebrow}
            onChange={(value) => setAttributes({ heroEyebrow: value })}
          />
          <TextControl
            label={__("Title", "volunteer-signup")}
            value={heroTitle}
            onChange={(value) => setAttributes({ heroTitle: value })}
          />
          <TextControl
            label={__("Title Highlight", "volunteer-signup")}
            value={heroTitleHighlight}
            onChange={(value) => setAttributes({ heroTitleHighlight: value })}
          />
          <TextareaControl
            label={__("Description", "volunteer-signup")}
            value={heroDescription}
            onChange={(value) => setAttributes({ heroDescription: value })}
          />
        </PanelBody>
        <PanelBody title={__("Form Settings", "volunteer-signup")} initialOpen={false}>
          <TextControl
            label={__("Submission Email", "volunteer-signup")}
            value={formEmail}
            onChange={(value) => setAttributes({ formEmail: value })}
            help="Forms are sent to this email via FormSubmit.co"
          />
        </PanelBody>
        <PanelBody title={__("Contact Sidebar", "volunteer-signup")} initialOpen={false}>
          <TextControl
            label={__("Phone", "volunteer-signup")}
            value={phone}
            onChange={(value) => setAttributes({ phone: value })}
          />
          <TextControl
            label={__("Email", "volunteer-signup")}
            value={email}
            onChange={(value) => setAttributes({ email: value })}
          />
          <TextareaControl
            label={__("Address", "volunteer-signup")}
            value={address}
            onChange={(value) => setAttributes({ address: value })}
          />
        </PanelBody>
      </InspectorControls>

      <div {...useBlockProps({ className: "volunteer-signup" })}>
        <section className="signup-hero">
          <div className="signup-hero-bg"></div>
          <div className="container">
            <p className="signup-hero-eyebrow">{heroEyebrow}</p>
            <h1 className="signup-hero-title">
              {heroTitle} <em>{heroTitleHighlight}</em>
            </h1>
            <p className="signup-hero-description">{heroDescription}</p>
          </div>
        </section>

        <section className="signup-section">
          <div className="container">
            <div className="signup-layout">
              <div className="signup-form" style={{ pointerEvents: "none" }}>
                <h2 className="signup-form-title">Your Information</h2>
                <div className="form-row">
                  <div className="form-group">
                    <label>First Name <span className="required">*</span></label>
                    <input type="text" disabled placeholder="First name" />
                  </div>
                  <div className="form-group">
                    <label>Last Name <span className="required">*</span></label>
                    <input type="text" disabled placeholder="Last name" />
                  </div>
                </div>
                <div className="form-row">
                  <div className="form-group">
                    <label>Email <span className="required">*</span></label>
                    <input type="email" disabled placeholder="Email" />
                  </div>
                  <div className="form-group">
                    <label>Phone</label>
                    <input type="tel" disabled placeholder="Phone" />
                  </div>
                </div>
                <p style={{ color: "#9a918a", fontStyle: "italic", fontSize: "0.875rem" }}>
                  Form preview — edit settings in the sidebar panel.
                </p>
              </div>

              <aside className="signup-sidebar">
                <div className="sidebar-card sidebar-contact">
                  <h3>Contact Us Directly</h3>
                  <p style={{ fontSize: "0.9375rem" }}>{phone}</p>
                  <p style={{ fontSize: "0.9375rem" }}>{email}</p>
                </div>
                <div className="sidebar-card sidebar-steps">
                  <h3>What to Expect</h3>
                  <ol className="steps-list">
                    {(attributes.steps || []).map((step, i) => (
                      <li key={i}>
                        <span className="step-number">{i + 1}</span>
                        <span>{step}</span>
                      </li>
                    ))}
                  </ol>
                </div>
              </aside>
            </div>
          </div>
        </section>
      </div>
    </>
  );
}
