
<?php if (is_single()) : ?>

  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <header>
      <h2><?php the_title(); ?></a></h2>
    </header>
    <?php the_content('Read the rest of this entry &raquo;'); ?>
    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
    <footer>
      <p>This entry was posted by <?php the_author() ?>
      on <time datetime="<?php the_time('Y-m-d')?>"><?php the_time('l, F jS, Y') ?></time>
      at <time><?php the_time() ?></time>
      and is filed under <?php the_category(', ') ?>.
      You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.

      <?php if ( comments_open() && pings_open() ) {
        // Both Comments and Pings are open ?>
        You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

      <?php } elseif ( !comments_open() && pings_open() ) {
        // Only Pings are Open ?>
        Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

      <?php } elseif ( comments_open() && !pings_open() ) {
        // Comments are open, Pings are not ?>
        You can skip to the end and leave a response. Pinging is currently not allowed.

      <?php } elseif ( !comments_open() && !pings_open() ) {
        // Neither Comments, nor Pings are open ?>
        Both comments and pings are currently closed.

      <?php } edit_post_link('Edit this entry','','.'); ?>
      </p>
    </footer>
    <nav>
      <div><?php previous_post_link('&laquo; %link') ?></div>
      <div><?php next_post_link('%link &raquo;') ?></div>
    </nav>

    <?php comments_template(); ?>

  </article>

<?php else : // the following loop is used if we're not on a single page ?> 

  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <header>
      <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <time datetime="<?php the_time('Y-m-d')?>"><?php the_time('F jS, Y') ?></time>
      <span class="author">by <?php the_author() ?></span>
    </header>
    <?php the_content('Read the rest of this entry &raquo;'); ?>
    <footer>
      <?php the_tags('Tags: ', ', ', '<br />'); ?> 
      Posted in <?php the_category(', ') ?>
      | <?php edit_post_link('Edit', '', ' | '); ?>
      <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
    </footer>
  </article>

<?php endif; // is_single() ?>