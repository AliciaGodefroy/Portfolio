<?php get_header(); ?>


    <div class="front-wrapper">
        <section class="main_left">
            <div class="main_left-ctn">
                <div class="main_left-ttl">
                    <h1>Alicia Godefroy</h1>
                </div>
                <div class="main_left-desc">
                    <p>Développeuse Front-End.
                    Actuellement en poste au sein de l’agence FK Agency.</p>
                </div>
            </div>
        </section>
        <section class="main_right">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'header-menu',
                    'menu_class'     => 'menu',
                ) );
                ?>
            </nav>
        </section>
    </div>


<?php get_footer(); ?>
