<?php
/**
 * Title: Banner
 * Slug: wp-travel-fse/banner
 * Categories: wptravelfse
 *
 * @package wp-travel-fse
 * @since 1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg","id":1001,"dimRatio":0,"focalPoint":{"x":0.46,"y":0.24},"minHeight":850,"minHeightUnit":"px","align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:850px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1001" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg" style="object-position:46% 24%" data-object-fit="cover" data-object-position="46% 24%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html( "It's Time Get Refresh", "wp-travel-fse" ); ?><br><?php echo esc_html( "Travel Arould The World", "wp-travel-fse" ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50)"><?php echo esc_html( "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.", "wp-travel-fse" ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a href="#" class="wp-block-button__link wp-element-button"><?php echo esc_html( "Learn More", "wp-travel-fse" ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a href="#" class="wp-block-button__link wp-element-button"><?php echo esc_html( "Contact Us", "wp-travel-fse" ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
