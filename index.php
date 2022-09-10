<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
