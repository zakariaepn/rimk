<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rimk
 */

get_header();

get_template_part( 'components/header/breadcrumb' ); ?>

<main id="primary" class="site-main">
    <section class="blog-detail p-120">
        <div class="container">
            <div class="row">
                <?php get_template_part( 'components/main/entry' ); ?>
                <?php get_sidebar( ); ?>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();
