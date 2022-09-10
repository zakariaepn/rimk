<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rimk
 */

get_header();

get_template_part( 'components/header/breadcrumb' ); ?>

<main id="primary" class="site-main post">
    <section class="blog-detail p-120">
        <div class="container">
            <div class="row">
                <!-- start blog detail inner -->
                <div class="col-lg-8 order-1 order-lg-0">
                    <div class="detail-inner">
                        <!-- blog image -->
                        <div class="main-img wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <!-- blog title -->
                        <h3 class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s"><?php the_title(); ?></h3>

                       <!-- blog meta data -->
                       <div class="blog-meta d-flex align-items-center wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                            <div class="author d-flex align-items-center">
                                <?php $user = wp_get_current_user(); 

                                        global $post;
                                       
                                ?>
                                <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" class="img-fluid" alt="Author">
                                <p>By: <?php echo the_author_meta( 'nickname', $user->ID ); ?></p>
                            </div>
                            <ul class="meta-list d-flex">
                                <li class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <p><?php echo get_the_date( 'dS M Y', $post->ID ); ?></p>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="far fa-comment"></i>
                                    <p>Comments: <?php echo get_comments_number(); ?></p>
                                </li>
                            </ul>
                        </div>

                        <?php the_content(); ?>
                        
                        <!-- share blog -->
                        <div class="share-blog d-flex align-items-center justify-content-center wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                            <span>share:</span>
                            <div class="media-body">
                                <ul class="social d-flex">
                                   
                                </ul>
                                <?php  my_social_btn(); ?>
                            </div>
                        </div>

                        <div class="comments">
                           <?php // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif; ?>
                        </div>
                        
                    </div>
                </div>
                <!-- end blog detail inner -->

                <?php get_sidebar( ); ?>
            </div>
        </div>
    </section>
</main><!-- #main -->
<?php

get_footer();
