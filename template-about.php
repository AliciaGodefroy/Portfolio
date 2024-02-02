<?php
/*
Template Name: Template About
*/
?>

<?php get_header('custom02'); ?>

<div class="ctn">
    <section class="about">
        <div class="heading">
            <h1 class="about_title"><?= get_the_title()?></h1>
        </div>
        <div class="about_wrp">
            <div class="about_txt">
                <p>Alicia, développeuse web depuis 2 ans.</p>
                <p>Après un Master 2 en Communication à Sup de Pub Paris et plus d’un an au sein de Buzzman Agency en tant que Consultante Social Média, j’ai décidé de me lancer dans le développement web.</br></br>Suite à une première formation Développeur Web OpenClassrooms de 6 mois à temps plein, je me suis spécialisée dans le développement WordPress avec une seconde formation en alternance chez FK Agency.</p>
            </div>
            <figure class="about_image">
                <img class="about_med" src="<?php echo get_template_directory_uri(); ?>/assets/about.png" alt="Photo - Portrait">
            </figure>
        </div>
    </section>
</div>

<?php get_footer(); ?>