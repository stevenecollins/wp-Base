<?php

/**
 * Title: Footer with text, button, links.
 * Slug: myBase/footer-mega
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-top:0px;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide","style":{"elements":{"link":{"color":[]}}}} -->
  <div class="wp-block-columns alignwide has-link-color"><!-- wp:column {"width":"55%"} -->
    <div class="wp-block-column" style="flex-basis:55%"><!-- wp:heading {"level":4,"anchor":"our-company","className":"wp-block-heading"} -->
      <h4 class="wp-block-heading" id="our-company"><?php echo esc_html__('Our Company', 'myBase'); ?></h4>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p><?php echo esc_html__('With its clean, minimal design and powerful feature set, myBase enables agencies to build stylish and sophisticated WordPress websites.', 'myBase'); ?></p>
      <!-- /wp:paragraph -->

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
  <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|small"}},"border":{"top":{"color":"#e5e5e5","width":"1px"}}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
  <div class="wp-block-group alignwide" style="border-top-color:#e5e5e5;border-top-width:1px;padding-top:var(--wp--preset--spacing--small)">
    <!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group">
      <!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
      <div class="wp-block-group">
        <!-- wp:paragraph -->
        <p>&copy; <?php echo esc_html(gmdate('Y')); ?> <?php echo esc_html__('Your Company LLC', 'myBase'); ?></p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph -->
      <p> · </p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p>Theme by <a href="https://stevenecollins.com/">Steven Collins</a></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
    <!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#0a0a0a","openInNewTab":true,"size":"has-small-icon-size","className":"is-style-outline"} -->
    <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-outline">
      <!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->
      <!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
      <!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
      <!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->
    </ul>
    <!-- /wp:social-links -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->