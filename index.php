<?php //get_header(); ?>

<div class="pg-archive">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php the_title() ?></h2>
    <p><?php the_content() ?></p>
  <?php endwhile; else: ?>
    <p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
  <?php endif; ?>
  
</div>

<?php //get_footer(); ?>
