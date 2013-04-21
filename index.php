<?php
/**
 * @package WordPress
 * @subpackage BoilerstrapWP
 */

get_header(); ?>

<div id="main" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'content', get_post_format() ); ?>

    <?php endwhile; ?>
    
    <?php get_template_part( 'nav' ); ?>

  <?php else : ?>

    <h2>Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>

  <?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>