import { __ } from "@wordpress/i18n";
import { useBlockProps, RichText, InspectorControls } from "@wordpress/block-editor";
import { PanelBody, TextControl, ToggleControl, SelectControl } from "@wordpress/components";
import { useState } from "@wordpress/element";
import "./editor.scss";

const icons = {
  heart: (
    <svg viewBox="0 0 48 48" fill="none">
      <path d="M24 44C24 44 42 32 42 20C42 12 36 6 28 6C25 6 24 10 24 10C24 10 23 6 20 6C12 6 6 12 6 20C6 32 24 44 24 44Z" stroke="currentColor" strokeWidth="2" strokeLinejoin="round"/>
    </svg>
  ),
  volunteer: (
    <svg viewBox="0 0 48 48" fill="none">
      <circle cx="24" cy="14" r="8" stroke="currentColor" strokeWidth="2"/>
      <path d="M10 42C10 32 16 26 24 26C32 26 38 32 38 42" stroke="currentColor" strokeWidth="2" strokeLinecap="round"/>
      <path d="M32 36L36 40L44 32" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
    </svg>
  ),
  email: (
    <svg viewBox="0 0 48 48" fill="none">
      <rect x="6" y="10" width="36" height="28" rx="2" stroke="currentColor" strokeWidth="2"/>
      <path d="M6 18L24 28L42 18" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
    </svg>
  ),
};

export default function Edit({ attributes, setAttributes }) {
  const { title, titleHighlight, description, cards } = attributes;
  const [selectedCard, setSelectedCard] = useState(0);

  const updateCard = (index, field, value) => {
    const newCards = [...cards];
    newCards[index] = { ...newCards[index], [field]: value };
    setAttributes({ cards: newCards });
  };

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Section Header", "cta-section")} initialOpen={true}>
          <TextControl
            label={__("Title", "cta-section")}
            value={title}
            onChange={(value) => setAttributes({ title: value })}
          />
          <TextControl
            label={__("Title Highlight", "cta-section")}
            value={titleHighlight}
            onChange={(value) => setAttributes({ titleHighlight: value })}
          />
        </PanelBody>

        {cards.map((card, index) => (
          <PanelBody
            key={index}
            title={`Card ${index + 1}: ${card.title}`}
            initialOpen={selectedCard === index}
          >
            <SelectControl
              label={__("Icon", "cta-section")}
              value={card.icon}
              options={[
                { label: "Heart", value: "heart" },
                { label: "Volunteer", value: "volunteer" },
                { label: "Email", value: "email" },
              ]}
              onChange={(value) => updateCard(index, "icon", value)}
            />
            <TextControl
              label={__("Title", "cta-section")}
              value={card.title}
              onChange={(value) => updateCard(index, "title", value)}
            />
            <TextControl
              label={__("Button Text", "cta-section")}
              value={card.buttonText}
              onChange={(value) => updateCard(index, "buttonText", value)}
            />
            <TextControl
              label={__("Button URL", "cta-section")}
              value={card.buttonUrl}
              onChange={(value) => updateCard(index, "buttonUrl", value)}
            />
            <SelectControl
              label={__("Button Style", "cta-section")}
              value={card.buttonStyle}
              options={[
                { label: "Primary", value: "primary" },
                { label: "White", value: "white" },
                { label: "Outline", value: "outline" },
              ]}
              onChange={(value) => updateCard(index, "buttonStyle", value)}
            />
            <ToggleControl
              label={__("Highlight Card (Dark)", "cta-section")}
              checked={card.highlight}
              onChange={(value) => updateCard(index, "highlight", value)}
            />
          </PanelBody>
        ))}
      </InspectorControls>

      <section {...useBlockProps({ className: "cta-section" })}>
        <div className="cta-background">
          <div className="cta-pattern"></div>
        </div>
        <div className="container">
          <div className="cta-layout">
            <div className="cta-content">
              <h2 className="cta-title">
                <RichText
                  tagName="span"
                  value={title}
                  onChange={(value) => setAttributes({ title: value })}
                  placeholder={__("Title...", "cta-section")}
                />
                <br />
                <RichText
                  tagName="em"
                  value={titleHighlight}
                  onChange={(value) => setAttributes({ titleHighlight: value })}
                  placeholder={__("Highlight...", "cta-section")}
                />
              </h2>
              <RichText
                tagName="p"
                className="cta-description"
                value={description}
                onChange={(value) => setAttributes({ description: value })}
                placeholder={__("Description...", "cta-section")}
              />
            </div>

            <div className="cta-cards">
              {cards.map((card, index) => (
                <div
                  key={index}
                  className={`cta-card ${card.highlight ? "cta-card-highlight" : ""}`}
                  onClick={() => setSelectedCard(index)}
                >
                  <div className="cta-card-icon">
                    {icons[card.icon] || icons.heart}
                  </div>
                  <RichText
                    tagName="h3"
                    value={card.title}
                    onChange={(value) => updateCard(index, "title", value)}
                    placeholder={__("Card title...", "cta-section")}
                  />
                  <RichText
                    tagName="p"
                    value={card.description}
                    onChange={(value) => updateCard(index, "description", value)}
                    placeholder={__("Description...", "cta-section")}
                  />
                  <span className={`btn btn-${card.buttonStyle} btn-block`}>
                    {card.buttonText}
                  </span>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
