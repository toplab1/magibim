<?php
get_header();
?>
<div class="container py-5">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class( 'mb-4' ); ?>>
        <h1 class="h2"><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p><?php esc_html_e( 'Контент пока не добавлен.', 'magibim' ); ?></p>
  <?php endif; ?>
</div>
<?php
get_footer();
