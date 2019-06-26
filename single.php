<?php
get_header(); ?>

<?php
  // Start the loop.
  while ( have_posts() ) : the_post();
      /*
       * Include the post format-specific template for the content. If you want to
       * use this in a child theme, then include a file called called content-___.php
       * (where ___ is the post format) and that will be used instead.
       */
       ?>

       <article class="post">
         <h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
       	<?php the_content(); ?>
       </article>

       <?php
      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
          comments_template();
      endif;
      // Previous/next post navigation.
      the_post_navigation( array(
          'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
              '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
              '<span class="post-title">%title</span>',
          'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
              '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
              '<span class="post-title">%title</span>',
      ) );
  // End the loop.
  endwhile;
?>
