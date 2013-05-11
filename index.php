<?php
/**
 * @package WordPress
 * @subpackage BoilerstrapWP
 */

get_header(); ?>

<div class="row">
    <div class="span8">
        <?php if (have_posts()) { ?>
            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part( 'content', get_post_format() ); ?>

            <?php endwhile; ?>

            <?php get_template_part( 'paginate' ); ?>

        <?php } else { ?>

            <h2>Not Found</h2>
            <p>Sorry, but you are looking for something that isn't here.</p>
            <?php get_search_form(); ?>

        <?php } ?>
    </div>
    <div class="span4">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>