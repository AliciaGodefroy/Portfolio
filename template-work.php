<?php
/*
Template Name: Template Work
*/
?>

<?php get_header('custom'); ?>

<div class="ctn">
    <section class="work">
        <div class="heading">
            <h1 class="project-ttl"><?= get_the_title() ?></h1>
        </div>
    </section>

    <?php
// Utiliser WP_Query pour récupérer les projets du CPT "portfolio"
$args = array(
  'post_type'      => 'portfolio',
  'posts_per_page' => -1,
);

$query = new WP_Query($args);



// Vérifier si des projets sont trouvés
if ($query->have_posts()) :
?>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="swiper-slide">
        <?php
          // Récupérer l'URL de l'image depuis le champ ACF 'med'
          $projet = get_field('b-projet');
          $image_url = $projet['med']['url'];
          // Afficher l'image
          if ($image_url) {
            echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr(get_the_title()) . '" />';
          }
          ?>
          <h2><?php the_title(); ?></h2>
        </div>
      <?php endwhile; ?>
    </div>
    <!-- Ajouter la pagination et les boutons de navigation si nécessaire -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
<?php
  // Restaurer les données de la requête principale
  wp_reset_postdata();
else :
  // Aucun projet trouvé
  echo 'Aucun projet trouvé.';
endif;
?>
</div>

