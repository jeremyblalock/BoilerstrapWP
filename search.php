<?php
/**
 * @package WordPress
 * @subpackage BoilerstrapWP
 */

get_header(); ?>

  <div class="row" role="main">

  <?php if (have_posts()) : ?>

    <h2>Search Results</h2>

    <?php get_template_part( 'nav' ); ?>

    <?php while (have_posts()) : the_post(); ?>

      <article <?php post_class() ?>>
        <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        <time><?php the_time('l, F jS, Y') ?></time>

        <footer>
          <?php the_tags('Tags: ', ', ', '<br />'); ?> 
          Posted in <?php the_category(', ') ?>
          | <?php edit_post_link('Edit', '', ' | '); ?>
          <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
        </footer>
      </article>

    <?php endwhile; ?>

  <?php get_template_part( 'nav' ); ?>

  <?php else : ?>

    <h2>No posts found. Try a different search?</h2>
    <?php get_search_form(); ?>

  <?php endif; ?>

  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
