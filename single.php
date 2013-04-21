<?php

/**
 * @package WordPress
 * @subpackage BoilerstrapWP
 */

get_header(); ?>

<div id="main" role="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php get_template_part( 'content', get_post_format() ); ?>

<?php endwhile; else: ?>

  <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
