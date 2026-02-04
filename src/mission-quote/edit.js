import { __ } from "@wordpress/i18n";
import { useBlockProps, RichText, InspectorControls } from "@wordpress/block-editor";
import { PanelBody, TextControl } from "@wordpress/components";
import "./editor.scss";

export default function Edit({ attributes, setAttributes }) {
  const { quote, authorName, authorTitle } = attributes;

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Citation", "mission-quote")} initialOpen={true}>
          <TextControl
            label={__("Author Name", "mission-quote")}
            value={authorName}
            onChange={(value) => setAttributes({ authorName: value })}
          />
          <TextControl
            label={__("Author Title", "mission-quote")}
            value={authorTitle}
            onChange={(value) => setAttributes({ authorTitle: value })}
          />
        </PanelBody>
      </InspectorControls>

      <section {...useBlockProps({ className: "mission-section" })}>
        <div className="container">
          <div className="mission-content">
            <div className="mission-icon">
              <svg viewBox="0 0 64 64" fill="none">
                <circle cx="32" cy="32" r="28" stroke="currentColor" strokeWidth="1.5" strokeDasharray="4 4"/>
                <path d="M32 16V32L42 42" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
              </svg>
            </div>
            <RichText
              tagName="blockquote"
              className="mission-quote"
              value={quote}
              onChange={(value) => setAttributes({ quote: value })}
              placeholder={__("Enter quote...", "mission-quote")}
            />
            <cite className="mission-cite">
              <RichText
                tagName="strong"
                value={authorName}
                onChange={(value) => setAttributes({ authorName: value })}
                placeholder={__("Author name...", "mission-quote")}
              />
              <RichText
                tagName="span"
                value={authorTitle}
                onChange={(value) => setAttributes({ authorTitle: value })}
                placeholder={__("Author title...", "mission-quote")}
              />
            </cite>
          </div>
        </div>
      </section>
    </>
  );
}
