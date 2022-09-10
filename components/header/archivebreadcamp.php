<!-- start banner area -->
<section class="inner-page banner" data-img="<?php echo get_template_directory_uri(); ?>/assets/images/inner/banner-bg.jpg">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content text-center">
                            <h2><?php  the_archive_title(); ?></h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>"><?php echo esc_html('Home','rimk'); ?></a></li>
                                  <li class="breadcrumb-item active" aria-current="page"><?php the_archive_title(); ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner area -->