<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage zimniy
 * @since zimniy 0.0.0
 */

get_header();
get_template_part('template_part/area_scheme');
get_template_part('template_part/poster');
get_template_part('template_part/rest_menu');
get_template_part('template_part/vacancies');
get_template_part('template_part/photo_gallery');
get_template_part('template_part/management');
get_template_part('template_part/about');
get_template_part('template_part/entrance_info');
get_template_part('template_part/night_club_info');

get_footer();