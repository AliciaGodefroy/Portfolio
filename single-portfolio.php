<?php

// ==========================================
  // Variable(s) ACF & WP de base
// ==========================================

      $id		     = get_the_ID();
      $terms     = get_the_terms($id, 'type-projet');
      $ttl       = get_the_title();

      $projet    = get_field('b-projet');
      
// ==========================================
  // Manipulations des Variable(s) 
// ==========================================

      foreach($terms as $term) {
        $cat = $term->name;
      }

// ==========================================
?>	

<?php get_header('custom02'); ?>

<div class="ctn">
    <div class="heading">
        <h1 class="project_ttl"><?= $ttl ?></h1>
        <div class="heading-sub">
          <span class="horizontal-line"></span>
          <p class="project_subttl"><?= $cat ?></p>
        </div>
    </div>
    <div class="project_ctn">
      <figure class="project_img">
        <img src="<?= $projet['med']['url'] ?>" alt="Site internet - Rendu visuel">
      </figure>
      <div class="project_txt">
        <div class="project_item">
          <div class="project_item-ttl">
            <figure class="picto-wrp">
              <img class="picto" src="<?php echo get_template_directory_uri(); ?>/assets/hand-shake.png" alt="Icon - Poignée de main">
            </figure>
            <h3>CLIENT</h3>
          </div>
          <p><?= $projet['client']?></p>
        </div>
        <div class="project_item">
          <div class="project_item-ttl">
            <figure class="picto-wrp">
              <img class="picto" src="<?php echo get_template_directory_uri(); ?>/assets/target.png" alt="Icon - Cible">
            </figure>
            <h3>MISSION</h3>
          </div>
          <p><?= $projet['mission']?></p>
        </div>
        <div class="project_item">
          <div class="project_item-ttl">
            <figure class="picto-wrp">
              <img class="picto" src="<?php echo get_template_directory_uri(); ?>/assets/parameters.png" alt="Icon - Rôle">
            </figure>
            <h3>RÔLE</h3>
          </div>
          <p><?= $projet['role']?></p>
        </div>
        <div class="project_item">
          <div class="project_item-ttl">
            <figure class="picto-wrp">
              <img class="picto" src="<?php echo get_template_directory_uri(); ?>/assets/website.png" alt="Icon - Website">
            </figure>
            <h3>SITE WEB</h3>
          </div>
          <a href="<?= $projet['url']['url']?>" <?= $projet['url']['target']?>><?= $projet['url']['title']?></a>
        </div>
      </div>
    </div>
</div>

<?php the_content(); ?>