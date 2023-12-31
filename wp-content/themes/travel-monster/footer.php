<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travel Monster
*/

	/**
     * After Content
     * 
     * @hooked travel_monster_content_end - 20
    */
    do_action( 'travel_monster_before_footer' );
    
    /**
     * Footer
     * 
     * @hooked travel_monster_footer_start  - 20
     * @hooked travel_monster_footer_top    - 30
     * @hooked travel_monster_footer_bottom - 40
     * @hooked travel_monster_footer_end    - 50
    */
    do_action( 'travel_monster_footer' );
    
    /**
     * After Footer
     * 
     * @hooked travel_monster_scrolltotop - 20
     * @hooked travel_monster_page_end    - 30
    */
    do_action( 'travel_monster_after_footer' );

	wp_footer(); ?>

</body>
</html>