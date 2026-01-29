<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>

<header class="header">
  <div class="container">
    <div class="header__inner">
      <a href="index.html" class="header__logo">Harborlight Foundation</a>
      <nav class="header__nav" aria-label="Main navigation">
        <ul class="header__nav-list" id="nav-menu">
          <li><a href="index.html" class="header__nav-link header__nav-link--active">Home</a></li>
          <li><a href="about.html" class="header__nav-link">About</a></li>
          <li><a href="programs.html" class="header__nav-link">Programs</a></li>
          <li><a href="news.html" class="header__nav-link">News</a></li>
          <li><a href="get-involved.html" class="header__nav-link">Get Involved</a></li>
          <li><a href="contact.html" class="header__nav-link">Contact</a></li>
        </ul>
        <a href="donate.html" class="btn btn--primary btn--small">Donate</a>
      </nav>
    </div>
  </div>
</header>
