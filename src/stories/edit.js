import { __ } from "@wordpress/i18n";
import { useBlockProps, RichText, InspectorControls } from "@wordpress/block-editor";
import { PanelBody, TextControl, ToggleControl, Button } from "@wordpress/components";
import { useState } from "@wordpress/element";
import "./editor.scss";

export default function Edit({ attributes, setAttributes }) {
  const { eyebrow, title, titleHighlight, stories, ctaText, ctaUrl } = attributes;
  const [selectedStory, setSelectedStory] = useState(0);

  const updateStory = (index, field, value) => {
    const newStories = [...stories];
    newStories[index] = { ...newStories[index], [field]: value };
    setAttributes({ stories: newStories });
  };

  const addStory = () => {
    setAttributes({
      stories: [...stories, {
        imageAlt: "Portrait placeholder",
        tag: "Story Tag",
        title: "New Story Title",
        excerpt: "Story excerpt here...",
        linkText: "Read the story",
        linkUrl: "#",
        featured: false
      }]
    });
  };

  const removeStory = (index) => {
    setAttributes({ stories: stories.filter((_, i) => i !== index) });
  };

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Section Header", "stories")} initialOpen={true}>
          <TextControl
            label={__("Eyebrow", "stories")}
            value={eyebrow}
            onChange={(value) => setAttributes({ eyebrow: value })}
          />
          <TextControl
            label={__("Title", "stories")}
            value={title}
            onChange={(value) => setAttributes({ title: value })}
          />
          <TextControl
            label={__("Title Highlight", "stories")}
            value={titleHighlight}
            onChange={(value) => setAttributes({ titleHighlight: value })}
          />
        </PanelBody>

        <PanelBody title={__("CTA Button", "stories")} initialOpen={false}>
          <TextControl
            label={__("Button Text", "stories")}
            value={ctaText}
            onChange={(value) => setAttributes({ ctaText: value })}
          />
          <TextControl
            label={__("Button URL", "stories")}
            value={ctaUrl}
            onChange={(value) => setAttributes({ ctaUrl: value })}
          />
        </PanelBody>

        {stories.map((story, index) => (
          <PanelBody
            key={index}
            title={`Story ${index + 1}: ${story.tag}`}
            initialOpen={selectedStory === index}
          >
            <TextControl
              label={__("Image Description", "stories")}
              value={story.imageAlt}
              onChange={(value) => updateStory(index, "imageAlt", value)}
            />
            <TextControl
              label={__("Tag", "stories")}
              value={story.tag}
              onChange={(value) => updateStory(index, "tag", value)}
            />
            <TextControl
              label={__("Title", "stories")}
              value={story.title}
              onChange={(value) => updateStory(index, "title", value)}
            />
            <TextControl
              label={__("Link Text", "stories")}
              value={story.linkText}
              onChange={(value) => updateStory(index, "linkText", value)}
            />
            <TextControl
              label={__("Link URL", "stories")}
              value={story.linkUrl}
              onChange={(value) => updateStory(index, "linkUrl", value)}
            />
            <ToggleControl
              label={__("Featured Story", "stories")}
              checked={story.featured}
              onChange={(value) => updateStory(index, "featured", value)}
            />
            {stories.length > 1 && (
              <Button isDestructive isSmall onClick={() => removeStory(index)}>
                {__("Remove Story", "stories")}
              </Button>
            )}
          </PanelBody>
        ))}
        <div style={{ padding: '0 16px 16px' }}>
          <Button isSecondary onClick={addStory}>
            {__("Add Story", "stories")}
          </Button>
        </div>
      </InspectorControls>

      <section {...useBlockProps({ className: "stories-section" })}>
        <div className="container">
          <header className="section-header section-header-centered">
            <RichText
              tagName="p"
              className="section-eyebrow"
              value={eyebrow}
              onChange={(value) => setAttributes({ eyebrow: value })}
              placeholder={__("Eyebrow...", "stories")}
            />
            <h2 className="section-title">
              <RichText
                tagName="span"
                value={title}
                onChange={(value) => setAttributes({ title: value })}
                placeholder={__("Title...", "stories")}
              />
              <br />
              <RichText
                tagName="em"
                value={titleHighlight}
                onChange={(value) => setAttributes({ titleHighlight: value })}
                placeholder={__("Highlight...", "stories")}
              />
            </h2>
          </header>

          <div className="stories-grid">
            {stories.map((story, index) => (
              <article
                key={index}
                className={`story-card ${story.featured ? "story-card-featured" : ""}`}
                onClick={() => setSelectedStory(index)}
              >
                <div className="story-image">
                  <div className="image-placeholder">
                    <span>{story.imageAlt}</span>
                  </div>
                </div>
                <div className="story-content">
                  <span className="story-tag">{story.tag}</span>
                  <RichText
                    tagName="h3"
                    className="story-title"
                    value={story.title}
                    onChange={(value) => updateStory(index, "title", value)}
                    placeholder={__("Story title...", "stories")}
                  />
                  <RichText
                    tagName="p"
                    className="story-excerpt"
                    value={story.excerpt}
                    onChange={(value) => updateStory(index, "excerpt", value)}
                    placeholder={__("Excerpt...", "stories")}
                  />
                  <span className="story-link">{story.linkText}</span>
                </div>
              </article>
            ))}
          </div>

          <div className="stories-cta">
            <span className="btn btn-ghost">{ctaText}</span>
          </div>
        </div>
      </section>
    </>
  );
}
