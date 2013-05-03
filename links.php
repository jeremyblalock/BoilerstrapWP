<?php
/**
 * @package WordPress
 * @subpackage BoilerstrapWP
 */

/*
Template Name: Links
*/
?>

<?php get_header(); ?>

<div class="row">
  <div class="span8">

  <h2>Links:</h2>
  <ul>
    <?php wp_list_bookmarks(); ?>
  </ul>

  </div> <!-- end left column -->
  <div class="span4">
    <?php get_sidebar(); ?>
  </div> <!-- end right column -->
</div> <!-- end row -->
<?php get_footer(); ?>
