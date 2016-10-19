<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage zimniy
 * @since zimniy 0.0.1
 */

get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
<?php get_footer(); ?>