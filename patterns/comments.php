<?php

/**
 * Title: Comments section and form
 * Slug: myBase/comments
 * Inserter: false
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
  <!-- wp:comments-query-loop {"className":"site-comments"} -->
  <div class="wp-block-comments-query-loop site-comments">
    <!-- wp:comments-title {"level":3} /-->
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}}} -->
    <div class="wp-block-group" style="margin-bottom:60px">
      <!-- wp:comment-template -->
      <!-- wp:columns {"style":{"spacing":{"blockGap":"10px","margin":{"bottom":"30px"}}}} -->
      <div class="wp-block-columns" style="margin-bottom:30px">
        <!-- wp:column {"width":"48px"} -->
        <div class="wp-block-column" style="flex-basis:48px">
          <!-- wp:avatar {"size":48,"style":{"border":{"radius":"24px"}}} /-->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"style":{"spacing":{"blockGap":"10px"}}} -->
        <div class="wp-block-column">
          <!-- wp:comment-author-name /-->
          <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"10px"}},"layout":{"type":"flex"}} -->
          <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
            <!-- wp:comment-date /-->
            <!-- wp:comment-edit-link /-->
          </div>
          <!-- /wp:group -->
          <!-- wp:comment-content /-->
          <!-- wp:comment-reply-link /-->
        </div>
        <!-- /wp:column -->
      </div>
      <!-- /wp:columns -->
      <!-- /wp:comment-template -->
    </div>
    <!-- /wp:group -->
    <!-- wp:comments-pagination -->
    <!-- wp:comments-pagination-previous /-->
    <!-- wp:comments-pagination-numbers /-->
    <!-- wp:comments-pagination-next /-->
    <!-- /wp:comments-pagination -->
    <!-- wp:post-comments-form /-->
  </div>
  <!-- /wp:comments-query-loop -->
</div>
<!-- /wp:group -->