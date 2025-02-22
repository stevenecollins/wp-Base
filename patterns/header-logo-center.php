<?php
/**
 * Title: Header with social icons, site logo
 * Slug: powder/header-logo-center
 * Categories: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|x-small","right":"30px","bottom":"var:preset|spacing|x-small","left":"30px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;padding-top:var(--wp--preset--spacing--x-small);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-small);padding-left:30px">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","iconBackgroundColor":"contrast","iconBackgroundColorValue":"#0a0a0a","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-small","left":"5px"}},"layout":{"selfStretch":"fixed","flexSize":"300px"}},"className":"is-style-hidden-mobile"} -->
		<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color is-style-hidden-mobile">
			<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->
			<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
			<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
			<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->
			<!-- wp:social-link {"url":"https://www.tiktok.com/","service":"tiktok"} /-->
		</ul>
		<!-- /wp:social-links -->
		<!-- wp:site-title {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->
		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"},"typography":{"textTransform":"uppercase","fontSize":"12px","fontStyle":"normal","fontWeight":"400"},"layout":{"selfStretch":"fixed","flexSize":"300px"}}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
