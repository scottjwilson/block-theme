/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from "@wordpress/i18n";

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from "@wordpress/block-editor";

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import "./editor.scss";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit() {
  return (
    <div {...useBlockProps()}>
      <footer class="footer">
        <div class="container">
          <div class="footer__inner">
            <div class="footer__brand">
              <div class="footer__logo">Harborlight Foundation</div>
              <p class="footer__mission">
                We expand access to education and career pathways for
                underserved communities across California.
              </p>
            </div>
            <div class="footer__col">
              <h4 class="footer__heading">Programs</h4>
              <ul class="footer__links">
                <li>
                  <a href="program-workforce.html">Workforce Skills</a>
                </li>
                <li>
                  <a href="program-student.html">Student Support</a>
                </li>
                <li>
                  <a href="program-grants.html">Community Grants</a>
                </li>
              </ul>
            </div>
            <div class="footer__col">
              <h4 class="footer__heading">Organization</h4>
              <ul class="footer__links">
                <li>
                  <a href="about.html">About Us</a>
                </li>
                <li>
                  <a href="news.html">News</a>
                </li>
                <li>
                  <a href="get-involved.html">Get Involved</a>
                </li>
                <li>
                  <a href="contact.html">Contact</a>
                </li>
              </ul>
            </div>
            <div class="footer__col footer__contact">
              <h4 class="footer__heading">Contact</h4>
              <p>hello@harborlight.org</p>
              <p>California</p>
            </div>
          </div>
          <div class="footer__bottom">
            <p>&copy; 2024 Harborlight Foundation. All rights reserved.</p>
          </div>
        </div>
      </footer>
    </div>
  );
}
