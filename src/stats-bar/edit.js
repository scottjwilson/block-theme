import { __ } from "@wordpress/i18n";
import { useBlockProps, RichText, InspectorControls } from "@wordpress/block-editor";
import { PanelBody, TextControl, Button } from "@wordpress/components";
import "./editor.scss";

export default function Edit({ attributes, setAttributes }) {
  const { stats } = attributes;

  const updateStat = (index, field, value) => {
    const newStats = [...stats];
    newStats[index] = { ...newStats[index], [field]: value };
    setAttributes({ stats: newStats });
  };

  const addStat = () => {
    setAttributes({
      stats: [...stats, { value: "0", title: "New Stat", description: "Description here" }]
    });
  };

  const removeStat = (index) => {
    setAttributes({ stats: stats.filter((_, i) => i !== index) });
  };

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Stats", "stats-bar")} initialOpen={true}>
          {stats.map((stat, index) => (
            <div key={index} style={{ marginBottom: '1.5rem', paddingBottom: '1rem', borderBottom: '1px solid #ddd' }}>
              <p style={{ fontWeight: '600' }}>Stat {index + 1}</p>
              <TextControl
                label={__("Value", "stats-bar")}
                value={stat.value}
                onChange={(value) => updateStat(index, "value", value)}
              />
              <TextControl
                label={__("Title", "stats-bar")}
                value={stat.title}
                onChange={(value) => updateStat(index, "title", value)}
              />
              <TextControl
                label={__("Description", "stats-bar")}
                value={stat.description}
                onChange={(value) => updateStat(index, "description", value)}
              />
              {stats.length > 1 && (
                <Button isDestructive isSmall onClick={() => removeStat(index)}>
                  {__("Remove", "stats-bar")}
                </Button>
              )}
            </div>
          ))}
          <Button isSecondary onClick={addStat}>
            {__("Add Stat", "stats-bar")}
          </Button>
        </PanelBody>
      </InspectorControls>

      <section {...useBlockProps({ className: "stats-section" })}>
        <div className="container">
          <div className="stats-grid">
            {stats.map((stat, index) => (
              <>
                {index > 0 && <div className="stat-divider"></div>}
                <div key={index} className="stat-item">
                  <RichText
                    tagName="span"
                    className="stat-value"
                    value={stat.value}
                    onChange={(value) => updateStat(index, "value", value)}
                    placeholder={__("0", "stats-bar")}
                  />
                  <RichText
                    tagName="span"
                    className="stat-title"
                    value={stat.title}
                    onChange={(value) => updateStat(index, "title", value)}
                    placeholder={__("Title", "stats-bar")}
                  />
                  <RichText
                    tagName="span"
                    className="stat-desc"
                    value={stat.description}
                    onChange={(value) => updateStat(index, "description", value)}
                    placeholder={__("Description", "stats-bar")}
                  />
                </div>
              </>
            ))}
          </div>
        </div>
      </section>
    </>
  );
}
