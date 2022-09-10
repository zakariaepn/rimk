<!-- start menubar area for homepage -->
<section class='menubar <?php if (is_user_logged_in(  )) { echo "logged-menubar"; } ?> '>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="menu-bg">
                    <nav class="navbar p-0">
                    <?php get_template_part('components/header/nav-brand'); ?>
                    <?php get_template_part('components/header/nav-menu'); ?>
                    <?php get_template_part('components/header/nav-button'); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end menubar area -->



