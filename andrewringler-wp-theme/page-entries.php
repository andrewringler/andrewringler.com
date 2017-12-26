<?php
/**
 * Entries list
 *
 * @package Andrew Profile Theme 2013
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content page-entries" role="main">
		<p>All project related site content is listed below. Subjects include talks, lectures, teaching, projects and events. You can also click on a category to see all its entries.</p>

    <?php 
		$journalid = get_term_by('name', 'journal', 'post_tag');
		query_posts('tag__not_in='. $journalid->term_id);		
		if ( have_posts() ) : ?>

      <header>
        <h1 class="page-title screen-reader-text">Entries</h1>
      </header>

      <ul>
        <?php while ( have_posts() ) : the_post();

        /*
        * Include the Post-Format-specific template for the content.
        * If you want to override this in a child theme, then include a file
        * called content-___.php (where ___ is the Post Format name) and that will be used instead.
        */
        //get_template_part( 'content', get_post_format() );
        ?>
        <li class="entries-post-title">
          <span class="entries-post-date"><?php the_time('Y M') ?></span>

          <?php
          /* translators: used between list items, there is a space after the comma */
          $categories_list = get_the_category_list( __( ', ', 'andrewringler_profile_2013' ) );
					
          if ( $categories_list && andrewringler_profile_2013_categorized_blog() ) :
            ?>
            <span class="cat-links">
              <?php printf( __( '%1$s', 'andrewringler_profile_2013' ), $categories_list ); ?>
            </span>
          <?php endif; // End if categories ?>

          <a class="article-link" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
          </a>
					
					<?php
						/* show featured image if available
						 * it shold be a 10px tall sparkline */
						if (has_post_thumbnail())
						{
								$thumb_id = get_post_thumbnail_id();
								$thumb_attr = wp_get_attachment_image_src($thumb_id,'full', true);
								$thumb_url = $thumb_attr[0];
								$thumb_width = $thumb_attr[1];
								$thumb_height = $thumb_attr[2];
								
								if($thumb_height == 10){
									// adapted from wp-content/media.php
									$alt_text = trim(strip_tags( get_post_meta($thumb_id, '_wp_attachment_image_alt', true)));
								?>
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="homepage-sparkline-image-link">
									<img src="<?php echo $thumb_url; ?>" class="homepage-sparkline-image" alt="<?php echo $alt_text; ?>" />								
								</a>								
								<?php									
							}
						}
					?>
					
        </li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>



		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
