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
import "./editor.scss";

export default function Edit({ attributes, setAttributes }) {
  const {
    eyebrow,
    title,
    titleHighlight,
    paragraphs,
    teamTitle,
    teamMembers,
    teamLinkText,
    teamLinkUrl,
    imageAlt,
  } = attributes;

  const updateParagraph = (index, value) => {
    const newParagraphs = [...paragraphs];
    newParagraphs[index] = value;
    setAttributes({ paragraphs: newParagraphs });
  };

  const addParagraph = () => {
    setAttributes({ paragraphs: [...paragraphs, "New paragraph..."] });
  };

  const removeParagraph = (index) => {
    setAttributes({ paragraphs: paragraphs.filter((_, i) => i !== index) });
  };

  const updateTeamMember = (index, field, value) => {
    const newMembers = [...teamMembers];
    newMembers[index] = { ...newMembers[index], [field]: value };
    setAttributes({ teamMembers: newMembers });
  };

  const addTeamMember = () => {
    setAttributes({
      teamMembers: [...teamMembers, { name: "New Member", role: "Role" }],
    });
  };

  const removeTeamMember = (index) => {
    setAttributes({ teamMembers: teamMembers.filter((_, i) => i !== index) });
  };

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Section Header", "about")} initialOpen={true}>
          <TextControl
            label={__("Eyebrow", "about")}
            value={eyebrow}
            onChange={(value) => setAttributes({ eyebrow: value })}
          />
          <TextControl
            label={__("Title", "about")}
            value={title}
            onChange={(value) => setAttributes({ title: value })}
          />
          <TextControl
            label={__("Title Highlight", "about")}
            value={titleHighlight}
            onChange={(value) => setAttributes({ titleHighlight: value })}
          />
        </PanelBody>

        <PanelBody
          title={__("Content Paragraphs", "about")}
          initialOpen={false}
        >
          {paragraphs.map((para, index) => (
            <div key={index} style={{ marginBottom: "1rem" }}>
              <TextareaControl
                label={`Paragraph ${index + 1}`}
                value={para}
                onChange={(value) => updateParagraph(index, value)}
              />
              {paragraphs.length > 1 && (
                <Button
                  isDestructive
                  isSmall
                  onClick={() => removeParagraph(index)}
                >
                  {__("Remove", "about")}
                </Button>
              )}
            </div>
          ))}
          <Button isSecondary onClick={addParagraph}>
            {__("Add Paragraph", "about")}
          </Button>
        </PanelBody>

        <PanelBody title={__("Team Preview", "about")} initialOpen={false}>
          <TextControl
            label={__("Section Title", "about")}
            value={teamTitle}
            onChange={(value) => setAttributes({ teamTitle: value })}
          />
          {teamMembers.map((member, index) => (
            <div
              key={index}
              style={{
                marginBottom: "1rem",
                paddingBottom: "1rem",
                borderBottom: "1px solid #ddd",
              }}
            >
              <TextControl
                label={__("Name", "about")}
                value={member.name}
                onChange={(value) => updateTeamMember(index, "name", value)}
              />
              <TextControl
                label={__("Role", "about")}
                value={member.role}
                onChange={(value) => updateTeamMember(index, "role", value)}
              />
              {teamMembers.length > 1 && (
                <Button
                  isDestructive
                  isSmall
                  onClick={() => removeTeamMember(index)}
                >
                  {__("Remove", "about")}
                </Button>
              )}
            </div>
          ))}
          <Button isSecondary onClick={addTeamMember}>
            {__("Add Team Member", "about")}
          </Button>
        </PanelBody>

        <PanelBody title={__("Team Link", "about")} initialOpen={false}>
          <TextControl
            label={__("Link Text", "about")}
            value={teamLinkText}
            onChange={(value) => setAttributes({ teamLinkText: value })}
          />
          <TextControl
            label={__("Link URL", "about")}
            value={teamLinkUrl}
            onChange={(value) => setAttributes({ teamLinkUrl: value })}
          />
        </PanelBody>

        <PanelBody title={__("Image", "about")} initialOpen={false}>
          <TextControl
            label={__("Image Description", "about")}
            value={imageAlt}
            onChange={(value) => setAttributes({ imageAlt: value })}
          />
        </PanelBody>
      </InspectorControls>

      <section {...useBlockProps({ className: "about-section" })}>
        <div className="container">
          <div className="about-layout">
            <div className="about-image">
              <div className="image-placeholder">
                <span>{imageAlt}</span>
              </div>
            </div>

            <div className="about-content">
              <RichText
                tagName="p"
                className="section-eyebrow"
                value={eyebrow}
                onChange={(value) => setAttributes({ eyebrow: value })}
                placeholder={__("Eyebrow...", "about")}
              />
              <h2 className="section-title">
                <RichText
                  tagName="span"
                  value={title}
                  onChange={(value) => setAttributes({ title: value })}
                  placeholder={__("Title...", "about")}
                />
                <br />
                <RichText
                  tagName="em"
                  value={titleHighlight}
                  onChange={(value) => setAttributes({ titleHighlight: value })}
                  placeholder={__("Highlight...", "about")}
                />
              </h2>
              <div className="about-text">
                {paragraphs.map((para, index) => (
                  <RichText
                    key={index}
                    tagName="p"
                    value={para}
                    onChange={(value) => updateParagraph(index, value)}
                    placeholder={__("Paragraph...", "about")}
                  />
                ))}
              </div>

              <div className="about-team-preview">
                <h3>{teamTitle}</h3>
                <ul className="team-list">
                  {teamMembers.map((member, index) => (
                    <li key={index}>
                      <strong>{member.name}</strong>
                      <span>{member.role}</span>
                    </li>
                  ))}
                </ul>
                <span className="team-link">{teamLinkText}</span>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
