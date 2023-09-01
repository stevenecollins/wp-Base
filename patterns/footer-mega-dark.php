<?php

/**
 * Title: Footer with text, button, links.
 * Slug: myBase/footer-mega-dark
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0px"}}},"backgroundColor":"contrast","textColor":"base","className":"has-background-color","layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-background-color has-base-color has-contrast-background-color has-text-color has-background has-link-color has-small-font-size" style="margin-top:0px;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide","style":{"elements":{"link":{"color":[]}}}} -->
  <div class="wp-block-columns alignwide has-link-color"><!-- wp:column {"width":"55%"} -->
    <div class="wp-block-column" style="flex-basis:55%"><!-- wp:heading {"level":4,"anchor":"our-company","className":"wp-block-heading"} -->
      <h4 class="wp-block-heading" id="our-company"><?php echo esc_html__('Our Company', 'myBase'); ?></h4>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p><?php echo esc_html__('With its clean, minimal design and powerful feature set, myBase enables agencies to build stylish and sophisticated WordPress websites.', 'myBase'); ?></p>
      <!-- /wp:paragraph -->
      <!-- wp:buttons -->
      <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"className":"is-style-fill"} -->
        <div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__('Learn More', 'myBase'); ?></a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->
    <!-- wp:column {"width":"15%"} -->
    <div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":4,"anchor":"about-us","className":"wp-block-heading"} -->
      <h4 class="wp-block-heading" id="about-us"><?php echo esc_html__('About Us', 'myBase'); ?></h4>
      <!-- /wp:heading -->
      <!-- wp:list -->
      <ul><!-- wp:list-item -->
        <li><a href="#"><?php echo esc_html__('Start Here', 'myBase'); ?></a></li>
        <!-- /wp:list-item -->
        <!-- wp:list-item -->
        <li><a href="#"><?php echo esc_html__('Our Mission', 'myBase'); ?></a></li>
        <!-- /wp:list-item -->
        <!-- wp:list-item -->
        <li><a href="#"><?php echo esc_html__('Brand Guide', 'myBase'); ?></a></li>
        <!-- /wp:list-item -->
        <!-- wp:list-item -->
        <li><a href="#"><?php echo esc_html__('Newsletter', 'myBase'); ?></a></li>
        <!-- /wp:list-item -->
        <!-- wp:list-item -->
        <li><a href="#"><?php echo esc_html__('Accessibility', 'myBase'); ?></a></li>
        <!-- /wp:list-item -->
      </ul>
      <!-- /wp:list -->
    </div>
    <!-- /wp:column -->
    <!-- wp:column {"width":"15%"} -->
    <div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":4,"anchor":"services","className":"wp-block-heading"} -->
      <h4 class="wp-block-heading" id="services"><?php echo esc_html__('Services', 'myBase'); ?></h4>
      <!-- /wp:heading -->
      <!-- wp:list -->
      <ul><!-- wp:list-item -->
        <li><a href="#"><?php echo esc_html__('Web Design', 'myBase'); ?></a></li>
        <!-- /wp:list-item -->
        <!-- wp:list-item -->
        <li><a href="#"><?php echo esc_html__('Development', 'myBase'); ?></a></li>
        <!-- /wp:list-item -->
        <!-- wp:list-item -->
        <li><a href="#"><?php echo esc_html__('Copywriting', 'myBase'); ?></a></li>
        <!-- /wp:list-item -->
        <!-- wp:list-item -->
        <li><a href="#"><?php echo esc_html__('Marketing', 'myBase'); ?></a></li>
        <!-- /wp:list-item -->
        <!-- wp:list-item -->
        <li><a href="#"><?php echo esc_html__('Social Media', 'myBase'); ?></a></li>
        <!-- /wp:list-item -->
      </ul>
      <!-- /wp:list -->
    </div>
    <!-- /wp:column -->
    <!-- wp:column {"width":"15%"} -->
    <div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":4,"anchor":"connect","className":"wp-block-heading"} -->
      <h4 class="wp-block-heading" id="connect"><?php echo esc_html__('Connect', 'myBase'); ?></h4>
      <!-- /wp:heading -->
      <!-- wp:list -->
      <ul><!-- wp:list-item -->
        <li><a href="#"><?php echo esc_html__('Facebook', 'myBase'); ?></a></li>
        <!-- /wp:list-item -->
        <!-- wp:list-item -->
        <li><a href="#"><?php echo esc_html__('Instagram', 'myBase'); ?></a></li>
        <!-- /wp:list-item -->
        <!-- wp:list-item -->
        <li><a href="#"><?php echo esc_html__('Twitter', 'myBase'); ?></a></li>
        <!-- /wp:list-item -->
        <!-- wp:list-item -->
        <li><a href="#"><?php echo esc_html__('LinkedIn', 'myBase'); ?></a></li>
        <!-- /wp:list-item -->
        <!-- wp:list-item -->
        <li><a href="#"><?php echo esc_html__('Dribbble', 'myBase'); ?></a></li>
        <!-- /wp:list-item -->
      </ul>
      <!-- /wp:list -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->