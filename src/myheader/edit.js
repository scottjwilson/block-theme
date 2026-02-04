/**
 * WordPress dependencies
 */
import { __ } from "@wordpress/i18n";
import {
  useBlockProps,
  RichText,
  InspectorControls,
} from "@wordpress/block-editor";
import { PanelBody, TextControl, Button } from "@wordpress/components";

/**
 * Editor styles
 */
import "./editor.scss";

/**
 * Header block edit component
 */
export default function Edit({ attributes, setAttributes }) {
  const {
    logoText,
    navLinks,
    volunteerText,
    volunteerUrl,
    donateText,
    donateUrl,
  } = attributes;

  const updateNavLink = (index, field, value) => {
    const newLinks = [...navLinks];
    newLinks[index] = { ...newLinks[index], [field]: value };
    setAttributes({ navLinks: newLinks });
  };

  const addNavLink = () => {
    setAttributes({
      navLinks: [...navLinks, { label: "New Link", url: "#" }],
    });
  };

  const removeNavLink = (index) => {
    const newLinks = navLinks.filter((_, i) => i !== index);
    setAttributes({ navLinks: newLinks });
  };

  return (
    <>
      <InspectorControls>
        <PanelBody
          title={__("Navigation Links", "myheader")}
          initialOpen={true}
        >
          {navLinks.map((link, index) => (
            <div
              key={index}
              style={{
                marginBottom: "16px",
                paddingBottom: "16px",
                borderBottom: "1px solid #ddd",
              }}
            >
              <TextControl
                label={__("Label", "myheader")}
                value={link.label}
                onChange={(value) => updateNavLink(index, "label", value)}
              />
              <TextControl
                label={__("URL", "myheader")}
                value={link.url}
                onChange={(value) => updateNavLink(index, "url", value)}
              />
              <Button
                isDestructive
                variant="secondary"
                onClick={() => removeNavLink(index)}
                style={{ marginTop: "8px" }}
              >
                {__("Remove Link", "myheader")}
              </Button>
            </div>
          ))}
          <Button variant="primary" onClick={addNavLink}>
            {__("Add Navigation Link", "myheader")}
          </Button>
        </PanelBody>

        <PanelBody title={__("Action Buttons", "myheader")} initialOpen={true}>
          <TextControl
            label={__("Volunteer Button Text", "myheader")}
            value={volunteerText}
            onChange={(value) => setAttributes({ volunteerText: value })}
          />
          <TextControl
            label={__("Volunteer Button URL", "myheader")}
            value={volunteerUrl}
            onChange={(value) => setAttributes({ volunteerUrl: value })}
          />
          <TextControl
            label={__("Donate Button Text", "myheader")}
            value={donateText}
            onChange={(value) => setAttributes({ donateText: value })}
          />
          <TextControl
            label={__("Donate Button URL", "myheader")}
            value={donateUrl}
            onChange={(value) => setAttributes({ donateUrl: value })}
          />
        </PanelBody>
      </InspectorControls>

      <header {...useBlockProps({ className: "site-header" })}>
        <nav className="nav-container">
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
              placeholder={__("Logo text...", "myheader")}
            />
          </a>

          <ul className="nav-links">
            {navLinks.map((link, index) => (
              <li key={index}>
                <a href={link.url}>{link.label}</a>
              </li>
            ))}
          </ul>

          <div className="nav-actions">
            <span className="btn btn-ghost">{volunteerText}</span>
            <span className="btn btn-primary">{donateText}</span>
          </div>

          <button
            className="mobile-toggle"
            aria-label="Open menu"
            aria-expanded="false"
          >
            <span></span>
            <span></span>
            <span></span>
          </button>
        </nav>
      </header>
    </>
  );
}
