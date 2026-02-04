/**
 * WordPress dependencies
 */
import { __ } from "@wordpress/i18n";
import {
  useBlockProps,
  RichText,
  InspectorControls,
} from "@wordpress/block-editor";
import { PanelBody, TextControl, RangeControl, Button } from "@wordpress/components";
import { useState } from "@wordpress/element";

/**
 * Editor styles
 */
import "./editor.scss";

/**
 * Arrow icon for button
 */
const ExternalArrowIcon = () => (
  <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
    <path d="M4 12L12 4M12 4H6M12 4V10" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
  </svg>
);

/**
 * Impact block edit component
 */
export default function Edit({ attributes, setAttributes }) {
  const {
    eyebrow,
    title,
    titleHighlight,
    description,
    metrics,
    buttonText,
    buttonUrl,
    image1Alt,
    image2Alt,
  } = attributes;

  const [selectedMetric, setSelectedMetric] = useState(0);

  const updateMetric = (index, field, value) => {
    const newMetrics = [...metrics];
    newMetrics[index] = { ...newMetrics[index], [field]: value };
    setAttributes({ metrics: newMetrics });
  };

  const addMetric = () => {
    const newMetrics = [...metrics, { value: "0%", percentage: 0, label: "New metric" }];
    setAttributes({ metrics: newMetrics });
  };

  const removeMetric = (index) => {
    const newMetrics = metrics.filter((_, i) => i !== index);
    setAttributes({ metrics: newMetrics });
  };

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Section Header", "impact")} initialOpen={true}>
          <TextControl
            label={__("Eyebrow", "impact")}
            value={eyebrow}
            onChange={(value) => setAttributes({ eyebrow: value })}
          />
          <TextControl
            label={__("Title", "impact")}
            value={title}
            onChange={(value) => setAttributes({ title: value })}
          />
          <TextControl
            label={__("Title Highlight", "impact")}
            value={titleHighlight}
            onChange={(value) => setAttributes({ titleHighlight: value })}
          />
        </PanelBody>

        <PanelBody title={__("Button Settings", "impact")} initialOpen={false}>
          <TextControl
            label={__("Button Text", "impact")}
            value={buttonText}
            onChange={(value) => setAttributes({ buttonText: value })}
          />
          <TextControl
            label={__("Button URL", "impact")}
            value={buttonUrl}
            onChange={(value) => setAttributes({ buttonUrl: value })}
          />
        </PanelBody>

        <PanelBody title={__("Images", "impact")} initialOpen={false}>
          <TextControl
            label={__("Image 1 Description", "impact")}
            value={image1Alt}
            onChange={(value) => setAttributes({ image1Alt: value })}
          />
          <TextControl
            label={__("Image 2 Description", "impact")}
            value={image2Alt}
            onChange={(value) => setAttributes({ image2Alt: value })}
          />
        </PanelBody>

        <PanelBody title={__("Metrics", "impact")} initialOpen={true}>
          {metrics.map((metric, index) => (
            <div key={index} style={{ marginBottom: '1.5rem', paddingBottom: '1rem', borderBottom: '1px solid #ddd' }}>
              <p style={{ fontWeight: '600', marginBottom: '0.5rem' }}>
                {__("Metric", "impact")} {index + 1}
              </p>
              <TextControl
                label={__("Display Value", "impact")}
                value={metric.value}
                onChange={(value) => updateMetric(index, "value", value)}
              />
              <RangeControl
                label={__("Percentage", "impact")}
                value={metric.percentage}
                onChange={(value) => updateMetric(index, "percentage", value)}
                min={0}
                max={100}
              />
              <TextControl
                label={__("Label", "impact")}
                value={metric.label}
                onChange={(value) => updateMetric(index, "label", value)}
              />
              {metrics.length > 1 && (
                <Button
                  isDestructive
                  isSmall
                  onClick={() => removeMetric(index)}
                >
                  {__("Remove Metric", "impact")}
                </Button>
              )}
            </div>
          ))}
          <Button
            isSecondary
            onClick={addMetric}
          >
            {__("Add Metric", "impact")}
          </Button>
        </PanelBody>
      </InspectorControls>

      <section {...useBlockProps({ className: "impact-section" })}>
        <div className="container">
          <div className="impact-layout">
            <div className="impact-content">
              <RichText
                tagName="p"
                className="section-eyebrow"
                value={eyebrow}
                onChange={(value) => setAttributes({ eyebrow: value })}
                placeholder={__("Enter eyebrow...", "impact")}
              />
              <h2 className="section-title">
                <RichText
                  tagName="span"
                  value={title}
                  onChange={(value) => setAttributes({ title: value })}
                  placeholder={__("Enter title...", "impact")}
                />
                <br />
                <RichText
                  tagName="em"
                  value={titleHighlight}
                  onChange={(value) => setAttributes({ titleHighlight: value })}
                  placeholder={__("Enter highlighted text...", "impact")}
                />
              </h2>
              <RichText
                tagName="p"
                className="impact-text"
                value={description}
                onChange={(value) => setAttributes({ description: value })}
                placeholder={__("Enter description...", "impact")}
              />

              <div className="impact-metrics">
                {metrics.map((metric, index) => (
                  <div key={index} className="metric" onClick={() => setSelectedMetric(index)}>
                    <div className="metric-bar">
                      <div
                        className="metric-fill"
                        style={{ '--width': `${metric.percentage}%` }}
                      ></div>
                    </div>
                    <div className="metric-info">
                      <span className="metric-value">{metric.value}</span>
                      <span className="metric-label">{metric.label}</span>
                    </div>
                  </div>
                ))}
              </div>

              <span className="btn btn-outline">
                {buttonText}
                <ExternalArrowIcon />
              </span>
            </div>

            <div className="impact-visual">
              <div className="impact-image-stack">
                <div className="image-placeholder impact-image-1">
                  <span>Image: {image1Alt}</span>
                </div>
                <div className="image-placeholder impact-image-2">
                  <span>Image: {image2Alt}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
