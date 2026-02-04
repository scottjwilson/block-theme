/**
 * WordPress dependencies
 */
import { __ } from "@wordpress/i18n";
import {
  useBlockProps,
  RichText,
  InspectorControls,
} from "@wordpress/block-editor";
import {
  PanelBody,
  TextControl,
  TextareaControl,
  Button,
} from "@wordpress/components";

/**
 * Editor styles
 */
import "./editor.scss";

/**
 * Footer block edit component
 */
export default function Edit({ attributes, setAttributes }) {
  const {
    logoText,
    tagline,
    address,
    phone,
    email,
    programsLinks,
    involvedLinks,
    aboutLinks,
    newsletterTitle,
    newsletterDescription,
    facebookUrl,
    instagramUrl,
    linkedinUrl,
    twitterUrl,
    ein,
  } = attributes;

  const updateLink = (linkType, index, field, value) => {
    const links = attributes[linkType];
    const newLinks = [...links];
    newLinks[index] = { ...newLinks[index], [field]: value };
    setAttributes({ [linkType]: newLinks });
  };

  const addLink = (linkType) => {
    const links = attributes[linkType];
    setAttributes({
      [linkType]: [...links, { label: "New Link", url: "#" }],
    });
  };

  const removeLink = (linkType, index) => {
    const links = attributes[linkType];
    const newLinks = links.filter((_, i) => i !== index);
    setAttributes({ [linkType]: newLinks });
  };

  const renderLinkEditor = (linkType, title) => (
    <PanelBody title={title} initialOpen={false}>
      {attributes[linkType].map((link, index) => (
        <div
          key={index}
          style={{
            marginBottom: "16px",
            paddingBottom: "16px",
            borderBottom: "1px solid #ddd",
          }}
        >
          <TextControl
            label={__("Label", "myfooter")}
            value={link.label}
            onChange={(value) => updateLink(linkType, index, "label", value)}
          />
          <TextControl
            label={__("URL", "myfooter")}
            value={link.url}
            onChange={(value) => updateLink(linkType, index, "url", value)}
          />
          <Button
            isDestructive
            variant="secondary"
            onClick={() => removeLink(linkType, index)}
            style={{ marginTop: "8px" }}
          >
            {__("Remove", "myfooter")}
          </Button>
        </div>
      ))}
      <Button variant="primary" onClick={() => addLink(linkType)}>
        {__("Add Link", "myfooter")}
      </Button>
    </PanelBody>
  );

  return (
    <>
      <InspectorControls>
        <PanelBody
          title={__("Contact Information", "myfooter")}
          initialOpen={true}
        >
          <TextareaControl
            label={__("Address", "myfooter")}
            value={address}
            onChange={(value) => setAttributes({ address: value })}
          />
          <TextControl
            label={__("Phone", "myfooter")}
            value={phone}
            onChange={(value) => setAttributes({ phone: value })}
          />
          <TextControl
            label={__("Email", "myfooter")}
            value={email}
            onChange={(value) => setAttributes({ email: value })}
          />
          <TextControl
            label={__("EIN Number", "myfooter")}
            value={ein}
            onChange={(value) => setAttributes({ ein: value })}
          />
        </PanelBody>

        {renderLinkEditor("programsLinks", __("Programs Links", "myfooter"))}
        {renderLinkEditor(
          "involvedLinks",
          __("Get Involved Links", "myfooter"),
        )}
        {renderLinkEditor("aboutLinks", __("About Links", "myfooter"))}

        <PanelBody title={__("Social Media", "myfooter")} initialOpen={false}>
          <TextControl
            label={__("Facebook URL", "myfooter")}
            value={facebookUrl}
            onChange={(value) => setAttributes({ facebookUrl: value })}
          />
          <TextControl
            label={__("Instagram URL", "myfooter")}
            value={instagramUrl}
            onChange={(value) => setAttributes({ instagramUrl: value })}
          />
          <TextControl
            label={__("LinkedIn URL", "myfooter")}
            value={linkedinUrl}
            onChange={(value) => setAttributes({ linkedinUrl: value })}
          />
          <TextControl
            label={__("Twitter/X URL", "myfooter")}
            value={twitterUrl}
            onChange={(value) => setAttributes({ twitterUrl: value })}
          />
        </PanelBody>
      </InspectorControls>

      <footer {...useBlockProps({ className: "site-footer" })}>
        <div className="container">
          <div className="footer-main">
            <div className="footer-brand">
              <a href="#" className="logo">
                <svg
                  className="logo-icon"
                  viewBox="0 0 48 48"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M18 44V28H30V44"
                    stroke="currentColor"
                    strokeWidth="2"
                    fill="none"
                  />
                  <path
                    d="M16 28L20 12H28L32 28H16Z"
                    stroke="currentColor"
                    strokeWidth="2"
                    fill="none"
                  />
                  <rect
                    x="20"
                    y="6"
                    width="8"
                    height="6"
                    rx="1"
                    stroke="currentColor"
                    strokeWidth="2"
                    fill="currentColor"
                    fillOpacity="0.2"
                  />
                  <path
                    d="M18 9L6 6"
                    stroke="currentColor"
                    strokeWidth="1.5"
                    strokeLinecap="round"
                    opacity="0.6"
                  />
                  <path
                    d="M17 11L4 12"
                    stroke="currentColor"
                    strokeWidth="1.5"
                    strokeLinecap="round"
                    opacity="0.4"
                  />
                  <path
                    d="M30 9L42 6"
                    stroke="currentColor"
                    strokeWidth="1.5"
                    strokeLinecap="round"
                    opacity="0.6"
                  />
                  <path
                    d="M31 11L44 12"
                    stroke="currentColor"
                    strokeWidth="1.5"
                    strokeLinecap="round"
                    opacity="0.4"
                  />
                  <path
                    d="M22 6V4C22 3.44772 22.4477 3 23 3H25C25.5523 3 26 3.44772 26 4V6"
                    stroke="currentColor"
                    strokeWidth="2"
                  />
                  <rect
                    x="22"
                    y="16"
                    width="4"
                    height="5"
                    rx="0.5"
                    fill="currentColor"
                    opacity="0.3"
                  />
                  <rect
                    x="22"
                    y="32"
                    width="4"
                    height="6"
                    rx="0.5"
                    fill="currentColor"
                    opacity="0.3"
                  />
                  <path
                    d="M10 44H38"
                    stroke="currentColor"
                    strokeWidth="2"
                    strokeLinecap="round"
                  />
                </svg>
                <RichText
                  tagName="span"
                  className="logo-text"
                  value={logoText}
                  onChange={(value) => setAttributes({ logoText: value })}
                  placeholder={__("Logo text...", "myfooter")}
                />
              </a>
              <RichText
                tagName="p"
                className="footer-tagline"
                value={tagline}
                onChange={(value) => setAttributes({ tagline: value })}
                placeholder={__("Tagline...", "myfooter")}
              />
              <address className="footer-address">
                {address.split("\n").map((line, i) => (
                  <span key={i}>
                    {line}
                    <br />
                  </span>
                ))}
                <a href={`tel:${phone.replace(/[^0-9+]/g, "")}`}>{phone}</a>
                <br />
                <a href={`mailto:${email}`}>{email}</a>
              </address>
            </div>

            <nav className="footer-nav">
              <div className="footer-nav-group">
                <h4>Programs</h4>
                <ul>
                  {programsLinks.map((link, index) => (
                    <li key={index}>
                      <a href={link.url}>{link.label}</a>
                    </li>
                  ))}
                </ul>
              </div>
              <div className="footer-nav-group">
                <h4>Get Involved</h4>
                <ul>
                  {involvedLinks.map((link, index) => (
                    <li key={index}>
                      <a href={link.url}>{link.label}</a>
                    </li>
                  ))}
                </ul>
              </div>
              <div className="footer-nav-group">
                <h4>About</h4>
                <ul>
                  {aboutLinks.map((link, index) => (
                    <li key={index}>
                      <a href={link.url}>{link.label}</a>
                    </li>
                  ))}
                </ul>
              </div>
            </nav>

            <div className="footer-newsletter">
              <RichText
                tagName="h4"
                value={newsletterTitle}
                onChange={(value) => setAttributes({ newsletterTitle: value })}
                placeholder={__("Newsletter title...", "myfooter")}
              />
              <RichText
                tagName="p"
                value={newsletterDescription}
                onChange={(value) =>
                  setAttributes({ newsletterDescription: value })
                }
                placeholder={__("Newsletter description...", "myfooter")}
              />
              <form className="newsletter-form">
                <input type="email" placeholder="Your email" disabled />
                <button type="button" className="btn btn-primary">
                  Subscribe
                </button>
              </form>
              <div className="footer-social">
                <span aria-label="Facebook">FB</span>
                <span aria-label="Instagram">IG</span>
                <span aria-label="LinkedIn">LI</span>
                <span aria-label="Twitter">X</span>
              </div>
            </div>
          </div>

          <div className="footer-bottom">
            <p className="footer-legal">
              &copy; {new Date().getFullYear()} Harbor Light Community
              Initiative. 501(c)(3) nonprofit organization. EIN: {ein}
            </p>
          </div>
        </div>
      </footer>
    </>
  );
}
