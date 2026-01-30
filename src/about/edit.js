/**
 * WordPress dependencies
 */
import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";

/**
 * Editor styles
 */
import "./editor.scss";

/**
 * About block edit component
 */
export default function Edit() {
  return (
    <section {...useBlockProps({ className: "wp-block-myblocks-about" })}>
      <div className="about-container">
        <div className="about-images">
          <div className="about-image about-image-1">
            <div className="image-placeholder">{__("Image 1", "about")}</div>
          </div>
          <div className="about-image about-image-2">
            <div className="image-placeholder">{__("Image 2", "about")}</div>
          </div>
          <div className="about-image about-image-3">
            <div className="image-placeholder">{__("Image 3", "about")}</div>
          </div>
        </div>

        <div className="about-content">
          <span className="about-label">{__("About us", "about")}</span>
          <h2 className="about-title">
            {__("Making a Difference Together", "about")}
          </h2>
          <p className="about-description">
            {__(
              "We Are A Nonprofit Organization Dedicated To Creating Positive Change In Communities Worldwide. Our Mission Is To Empower Individuals, Protect The Environment, And Promote Social Equality Through Impactful Initiatives And Collaborative Efforts. With A Focus On Compassion And Sustainability, We Strive To Make A Lasting Difference Where It Matters Most.",
              "about",
            )}
          </p>

          <div className="about-cards">
            <div className="about-card">
              <div className="about-card-icon">
                <svg
                  width="28"
                  height="28"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  strokeWidth="1.5"
                  strokeLinecap="round"
                  strokeLinejoin="round"
                >
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
              </div>
              <h3 className="about-card-title">{__("Our Mission", "about")}</h3>
              <p className="about-card-text">
                {__(
                  "Committed to building a better future through education, sustainability, & humanitarian support.",
                  "about",
                )}
              </p>
            </div>

            <div className="about-card">
              <div className="about-card-icon">
                <svg
                  width="28"
                  height="28"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  strokeWidth="1.5"
                  strokeLinecap="round"
                  strokeLinejoin="round"
                >
                  <circle cx="12" cy="12" r="10"></circle>
                  <line x1="2" y1="12" x2="22" y2="12"></line>
                  <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                </svg>
              </div>
              <h3 className="about-card-title">{__("Our Vision", "about")}</h3>
              <p className="about-card-text">
                {__(
                  "A world where every individual has access to essential resources and opportunities for growth.",
                  "about",
                )}
              </p>
            </div>
          </div>

          <a href="#" className="about-cta">
            {__("Learn More", "about")}
            <svg
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              strokeWidth="2"
              strokeLinecap="round"
              strokeLinejoin="round"
            >
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>
      </div>
    </section>
  );
}
