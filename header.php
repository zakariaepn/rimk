<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rimk
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- start preloader area -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
            <div class="line line-4"></div>
           <div class="line line-5"></div> 
        </div>
    </div>
    <!-- end preloader area -->

    <!-- start top-tp button area -->
    <button class="top-btn">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- end top-tp button area -->

    <!-- start header area -->
    <header>
    
    <?php get_template_part( 'components/header/menubar' ); ?>

    </header>
    <!-- end header area -->

<!-- start Search modal area -->
<div class="inner-page modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">search here</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="search-area">
                    <input type="search" placeholder="search..." class="inputs">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Search modal area -->