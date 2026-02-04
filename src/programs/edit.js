/**
 * WordPress dependencies
 */
import { __ } from "@wordpress/i18n";
import {
  useBlockProps,
  RichText,
  InspectorControls,
} from "@wordpress/block-editor";
import { PanelBody, TextControl, ToggleControl, Button } from "@wordpress/components";
import { useState } from "@wordpress/element";

/**
 * Editor styles
 */
import "./editor.scss";

/**
 * Program icons
 */
const icons = {
  education: (
    <svg viewBox="0 0 48 48" fill="none">
      <path d="M24 4L4 16L24 28L44 16L24 4Z" stroke="currentColor" strokeWidth="2" strokeLinejoin="round"/>
      <path d="M12 22V34C12 34 18 40 24 40C30 40 36 34 36 34V22" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
      <path d="M44 16V32" stroke="currentColor" strokeWidth="2" strokeLinecap="round"/>
    </svg>
  ),
  home: (
    <svg viewBox="0 0 48 48" fill="none">
      <path d="M24 4L4 20V44H18V32H30V44H44V20L24 4Z" stroke="currentColor" strokeWidth="2" strokeLinejoin="round"/>
      <path d="M18 32H30V44" stroke="currentColor" strokeWidth="2" strokeLinejoin="round"/>
    </svg>
  ),
  calendar: (
    <svg viewBox="0 0 48 48" fill="none">
      <rect x="6" y="14" width="36" height="26" rx="2" stroke="currentColor" strokeWidth="2"/>
      <path d="M6 22H42" stroke="currentColor" strokeWidth="2"/>
      <path d="M16 8V14" stroke="currentColor" strokeWidth="2" strokeLinecap="round"/>
      <path d="M32 8V14" stroke="currentColor" strokeWidth="2" strokeLinecap="round"/>
      <path d="M16 30H24" stroke="currentColor" strokeWidth="2" strokeLinecap="round"/>
      <path d="M16 35H20" stroke="currentColor" strokeWidth="2" strokeLinecap="round"/>
    </svg>
  ),
  youth: (
    <svg viewBox="0 0 48 48" fill="none">
      <circle cx="24" cy="16" r="8" stroke="currentColor" strokeWidth="2"/>
      <path d="M12 42C12 34.268 17.372 28 24 28C30.628 28 36 34.268 36 42" stroke="currentColor" strokeWidth="2" strokeLinecap="round"/>
      <path d="M32 14L40 10" stroke="currentColor" strokeWidth="2" strokeLinecap="round"/>
      <circle cx="42" cy="8" r="4" stroke="currentColor" strokeWidth="2"/>
    </svg>
  ),
};

/**
 * Arrow icon for links
 */
const ArrowIcon = () => (
  <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
    <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
  </svg>
);

/**
 * Programs block edit component
 */
export default function Edit({ attributes, setAttributes }) {
  const { eyebrow, title, description, programs } = attributes;
  const [selectedProgram, setSelectedProgram] = useState(0);

  const updateProgram = (index, field, value) => {
    const newPrograms = [...programs];
    newPrograms[index] = { ...newPrograms[index], [field]: value };
    setAttributes({ programs: newPrograms });
  };

  const updateHighlight = (programIndex, highlightIndex, value) => {
    const newPrograms = [...programs];
    const newHighlights = [...newPrograms[programIndex].highlights];
    newHighlights[highlightIndex] = value;
    newPrograms[programIndex] = { ...newPrograms[programIndex], highlights: newHighlights };
    setAttributes({ programs: newPrograms });
  };

  const addHighlight = (programIndex) => {
    const newPrograms = [...programs];
    const newHighlights = [...newPrograms[programIndex].highlights, "New highlight"];
    newPrograms[programIndex] = { ...newPrograms[programIndex], highlights: newHighlights };
    setAttributes({ programs: newPrograms });
  };

  const removeHighlight = (programIndex, highlightIndex) => {
    const newPrograms = [...programs];
    const newHighlights = newPrograms[programIndex].highlights.filter((_, i) => i !== highlightIndex);
    newPrograms[programIndex] = { ...newPrograms[programIndex], highlights: newHighlights };
    setAttributes({ programs: newPrograms });
  };

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Section Header", "programs")} initialOpen={true}>
          <TextControl
            label={__("Eyebrow", "programs")}
            value={eyebrow}
            onChange={(value) => setAttributes({ eyebrow: value })}
          />
          <TextControl
            label={__("Title", "programs")}
            value={title}
            onChange={(value) => setAttributes({ title: value })}
          />
        </PanelBody>

        {programs.map((program, index) => (
          <PanelBody
            key={index}
            title={`Program ${index + 1}: ${program.title}`}
            initialOpen={selectedProgram === index}
            onToggle={() => setSelectedProgram(index)}
          >
            <TextControl
              label={__("Number", "programs")}
              value={program.number}
              onChange={(value) => updateProgram(index, "number", value)}
            />
            <TextControl
              label={__("Title", "programs")}
              value={program.title}
              onChange={(value) => updateProgram(index, "title", value)}
            />
            <TextControl
              label={__("Tagline", "programs")}
              value={program.tagline}
              onChange={(value) => updateProgram(index, "tagline", value)}
            />
            <TextControl
              label={__("Link Text", "programs")}
              value={program.linkText}
              onChange={(value) => updateProgram(index, "linkText", value)}
            />
            <TextControl
              label={__("Link URL", "programs")}
              value={program.linkUrl}
              onChange={(value) => updateProgram(index, "linkUrl", value)}
            />
            <ToggleControl
              label={__("Featured (with image)", "programs")}
              checked={program.featured}
              onChange={(value) => updateProgram(index, "featured", value)}
            />

            {program.featured && (
              <>
                <p style={{ marginTop: '1rem', fontWeight: '600' }}>{__("Highlights", "programs")}</p>
                {program.highlights.map((highlight, hIndex) => (
                  <div key={hIndex} style={{ display: 'flex', gap: '8px', marginBottom: '8px' }}>
                    <TextControl
                      value={highlight}
                      onChange={(value) => updateHighlight(index, hIndex, value)}
                      style={{ flex: 1 }}
                    />
                    <Button
                      isDestructive
                      isSmall
                      onClick={() => removeHighlight(index, hIndex)}
                    >
                      {__("Remove", "programs")}
                    </Button>
                  </div>
                ))}
                <Button
                  isSecondary
                  isSmall
                  onClick={() => addHighlight(index)}
                >
                  {__("Add Highlight", "programs")}
                </Button>
              </>
            )}
          </PanelBody>
        ))}
      </InspectorControls>

      <section {...useBlockProps({ className: "programs-section" })}>
        <div className="container">
          <header className="section-header">
            <RichText
              tagName="p"
              className="section-eyebrow"
              value={eyebrow}
              onChange={(value) => setAttributes({ eyebrow: value })}
              placeholder={__("Enter eyebrow...", "programs")}
            />
            <RichText
              tagName="h2"
              className="section-title"
              value={title}
              onChange={(value) => setAttributes({ title: value })}
              placeholder={__("Enter title...", "programs")}
            />
            <RichText
              tagName="p"
              className="section-description"
              value={description}
              onChange={(value) => setAttributes({ description: value })}
              placeholder={__("Enter description...", "programs")}
            />
          </header>

          <div className="programs-grid">
            {programs.map((program, index) => (
              <article
                key={index}
                className={`program-card ${program.featured ? "program-card-featured" : ""}`}
                onClick={() => setSelectedProgram(index)}
              >
                {program.featured ? (
                  <>
                    <div className="program-card-image">
                      <div className="image-placeholder">
                        <span>Image: Adult education classroom at {program.title}</span>
                      </div>
                      <span className="program-number">{program.number}</span>
                    </div>
                    <div className="program-card-content">
                      <RichText
                        tagName="h3"
                        className="program-title"
                        value={program.title}
                        onChange={(value) => updateProgram(index, "title", value)}
                        placeholder={__("Program title...", "programs")}
                      />
                      <RichText
                        tagName="p"
                        className="program-tagline"
                        value={program.tagline}
                        onChange={(value) => updateProgram(index, "tagline", value)}
                        placeholder={__("Tagline...", "programs")}
                      />
                      <RichText
                        tagName="p"
                        className="program-description"
                        value={program.description}
                        onChange={(value) => updateProgram(index, "description", value)}
                        placeholder={__("Description...", "programs")}
                      />
                      {program.highlights.length > 0 && (
                        <ul className="program-highlights">
                          {program.highlights.map((highlight, hIndex) => (
                            <li key={hIndex}>{highlight}</li>
                          ))}
                        </ul>
                      )}
                      <span className="program-link">
                        {program.linkText}
                        <ArrowIcon />
                      </span>
                    </div>
                  </>
                ) : (
                  <>
                    <span className="program-number">{program.number}</span>
                    <div className="program-card-icon">
                      {icons[program.icon] || icons.home}
                    </div>
                    <RichText
                      tagName="h3"
                      className="program-title"
                      value={program.title}
                      onChange={(value) => updateProgram(index, "title", value)}
                      placeholder={__("Program title...", "programs")}
                    />
                    <RichText
                      tagName="p"
                      className="program-tagline"
                      value={program.tagline}
                      onChange={(value) => updateProgram(index, "tagline", value)}
                      placeholder={__("Tagline...", "programs")}
                    />
                    <RichText
                      tagName="p"
                      className="program-description"
                      value={program.description}
                      onChange={(value) => updateProgram(index, "description", value)}
                      placeholder={__("Description...", "programs")}
                    />
                    <span className="program-link">
                      {program.linkText}
                      <ArrowIcon />
                    </span>
                  </>
                )}
              </article>
            ))}
          </div>
        </div>
      </section>
    </>
  );
}
