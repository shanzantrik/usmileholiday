<?php
/**
 * Title: Travelin Banner
 * Slug: wp-travel-fse/travelin-banner
 * Categories: wptravelfse
 *
 * @package Travelin
 * @since 1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/about.jpg","id":1327,"dimRatio":10,"minHeight":700,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"blockGap":"0"}},"textColor":"bright","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-bright-color has-text-color" style="min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1327" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/about.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"textColor":"bright","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-bright-color has-text-color">

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size"><strong><?php echo __( 'Travel Around The World', 'travelin' ); ?></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php echo __( 'Discover New Place To Visit', 'travelin' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"style":{"typography":{"letterSpacing":"3px"},"border":{"radius":"0px"}}} -->
<div class="wp-block-button" style="letter-spacing:3px"><a href="#" class="wp-block-button__link wp-element-button" style="border-radius:0px">Find Trips</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->