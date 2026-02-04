import { __ } from "@wordpress/i18n";
import { useBlockProps, RichText, InspectorControls } from "@wordpress/block-editor";
import { PanelBody, TextControl, Button } from "@wordpress/components";
import "./editor.scss";

export default function Edit({ attributes, setAttributes }) {
  const { label, partners } = attributes;

  const updatePartner = (index, value) => {
    const newPartners = [...partners];
    newPartners[index] = { name: value };
    setAttributes({ partners: newPartners });
  };

  const addPartner = () => {
    setAttributes({
      partners: [...partners, { name: "New Partner" }]
    });
  };

  const removePartner = (index) => {
    setAttributes({ partners: partners.filter((_, i) => i !== index) });
  };

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Settings", "partners")} initialOpen={true}>
          <TextControl
            label={__("Label", "partners")}
            value={label}
            onChange={(value) => setAttributes({ label: value })}
          />
        </PanelBody>

        <PanelBody title={__("Partners", "partners")} initialOpen={true}>
          {partners.map((partner, index) => (
            <div key={index} style={{ display: 'flex', gap: '8px', marginBottom: '8px' }}>
              <TextControl
                value={partner.name}
                onChange={(value) => updatePartner(index, value)}
                style={{ flex: 1 }}
              />
              <Button
                isDestructive
                isSmall
                onClick={() => removePartner(index)}
              >
                {__("×", "partners")}
              </Button>
            </div>
          ))}
          <Button isSecondary onClick={addPartner}>
            {__("Add Partner", "partners")}
          </Button>
        </PanelBody>
      </InspectorControls>

      <section {...useBlockProps({ className: "partners-section" })}>
        <div className="container">
          <RichText
            tagName="p"
            className="partners-label"
            value={label}
            onChange={(value) => setAttributes({ label: value })}
            placeholder={__("Label...", "partners")}
          />
          <div className="partners-grid">
            {partners.map((partner, index) => (
              <div key={index} className="partner-logo">
                <RichText
                  tagName="span"
                  value={partner.name}
                  onChange={(value) => updatePartner(index, value)}
                  placeholder={__("Partner name...", "partners")}
                />
              </div>
            ))}
          </div>
        </div>
      </section>
    </>
  );
}
