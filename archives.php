<?php
/**
 * @package WordPress
 * @subpackage BoilerstrapWP
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div class="row">
  <div class="span8">

  <?php get_search_form(); ?>

  <section>
    <h2>Archives by Month:</h2>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
  </section>

  <section>
    <h2>Archives by Subject:</h2>
    <ul>
      <?php wp_list_categories(); ?>
    </ul>
  </section>

  </div> <!-- end left column -->
  <div class="span4">
    <?php get_sidebar(); ?>
  </div> <!-- end right column -->
</div> <!-- end row -->
<?php get_footer(); ?>
