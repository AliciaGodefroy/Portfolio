<?php
/*
Template Name: Template Contact
*/
?>

<?php get_header('custom'); ?>

<div class="ctn">
    <section class="contact">
        <div class="heading">
            <h1 class="contact_title"><?= get_the_title()?></h1>
        </div>
        <div class="contact_form">
            <?= do_shortcode('[contact-form-7 id="536c1c3" title="Formulaire de contact 1"]') ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>