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
 * Hero block edit component
 */
export default function Edit() {
  return (
    <section {...useBlockProps({ className: "harborlight-hero" })}>
      <div className="hero-container">
        <div className="hero-content">
          <h1 className="hero-title">
            {__("Together, We Can Make a Difference", "hero")}
          </h1>
          <p className="hero-description">
            {__(
              "Together, We Create A Better Future For All. Join Hands With Us To Make A Positive Impact. Our Mission Is To Create Positive Change By Providing Essential Resources, Education, And Support To Underserved Communities.",
              "hero",
            )}
          </p>
          <a href="#" className="hero-cta">
            {__("Get Involved", "hero")}
          </a>

          <div className="hero-stats">
            <div className="stat-item">
              <span className="stat-number">150+</span>
              <span className="stat-label">{__("Lives Impacted", "hero")}</span>
            </div>
            <div className="stat-item">
              <span className="stat-number">200+</span>
              <span className="stat-label">
                {__("Communities Served", "hero")}
              </span>
            </div>
            <div className="stat-item">
              <span className="stat-number">20+</span>
              <span className="stat-label">
                {__("Years of Impact", "hero")}
              </span>
            </div>
          </div>
        </div>

        <div className="hero-images">
          <div className="image-stack">
            <div className="hero-image hero-image-1">
              <div className="image-placeholder">
                {__("Hero Image 1", "hero")}
              </div>
            </div>
            <div className="hero-image hero-image-2">
              <div className="image-placeholder">
                {__("Hero Image 2", "hero")}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
