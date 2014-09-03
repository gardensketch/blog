<?php get_header(); ?>

<?php get_template_part('includes/breadcrumbs', 'index'); ?>

<div id="content-area" class="clearfix fullwidth">
  <div id="left-area">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php edit_post_link(esc_attr__('Edit this page','Flexible')); ?>
    <?php endwhile; // end of the loop. ?>
  </div> <!-- end #left_area -->

  <?php // get_sidebar(); ?>
</div>  <!-- end #content-area -->

<?php get_footer(); ?>
