    <!-- start footer-bottom area -->
    <section class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg">
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Copyright &copy; 2021, Themes-Land All Rights Reserved.</p>
                            </div>
                            <div class="col-lg-6">
                            <?php   
                            wp_nav_menu( array(
                                'theme_location' => 'bottom',
                                'container' => '',
                                'menu_class' => 'd-flex justify-content-end'
                            ) ) ?>
 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end footer-bottom area -->