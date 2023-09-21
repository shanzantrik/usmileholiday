<?php
/**
 * Title: Latest Blog
 * Slug: wp-travel-fse/latest-blog
 * Categories: wptravelfse
 *
 * @package wp-travel-fse
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"0"}}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:0">Latest Travel Blog</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)"><?php echo esc_html( "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.", "wp-travel-fse" ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":0,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"height":"300px"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|40","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"var:preset|spacing|30"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-right:var(--wp--preset--spacing--30)"><strong><?php echo esc_html( 'On', 'wp-travel-fse' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:post-date /-->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<p style="margin-right:var(--wp--preset--spacing--40);margin-left:var(--wp--preset--spacing--40)">|</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"var:preset|spacing|30"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-right:var(--wp--preset--spacing--30)"><strong><?php echo esc_html( 'By', 'wp-travel-fse' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"showBio":false} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->