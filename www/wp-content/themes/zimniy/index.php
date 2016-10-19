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
?>
    <div class="header-main">
        <div class="container">
            <div class="visible-xs">
                <div class="tel-button">
                    <a href="#popup-online2" class="modalbox">Заказать звонок</a>
                </div>
            </div>
            <div class="hidden-xs col-sm-3 col-md-3 col-lg-3 p0">
                <div class="tel-button">
                    <a href="#popup-online2" class="modalbox">Заказать звонок</a>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/css/images/logo.png" alt="">
            </div>

            <?php
            get_template_part('template_part/this_week_poster');
            ?>
        </div>
    </div>

<?php get_footer(); ?>