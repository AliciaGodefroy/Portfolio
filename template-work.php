<?php
/*
Template Name: Template Work
*/
?>

<?php get_header('custom'); ?>

<div class="ctn">
    <div class="heading">
        <h1 class="project-ttl"><?= get_the_title()?></h1>
    </div>
</div>

<?php the_content(); ?>