<?php
/**
 * Homepage
 *
 * @package Andrew Profile Theme 2013
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<nav>
			<ul class="nav">
				<li><a href="http://andrewringler.com/about">About</a></li>
				<li><a href="http://andrewringler.com/category/code/">Code</a></li>
				<li><a href="http://andrewringler.com/category/film/">Film</a></li>
				<li><a href="http://andrewringler.com/category/writing/">Writing</a></li>
			</ul>
		</nav>
    <p id="abstract">I am a boston based professional software developer and artist. I bring together performance, comedy, filmmaking, 2D arts, and code to create engaging experiences.</p>

    <?php if ( have_posts() ) : ?>

      <?php if ( is_home() && ! is_front_page() ) : ?>
        <header>
          <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>
      <?php endif; ?>

      <ul>
        <?php while ( have_posts() ) : the_post();

        /*
        * Include the Post-Format-specific template for the content.
        * If you want to override this in a child theme, then include a file
        * called content-___.php (where ___ is the Post Format name) and that will be used instead.
        */
        //get_template_part( 'content', get_post_format() );
        ?>
        <li>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="home-post-title">
            <span class="home-post-date"><?php the_time('Y M') ?></span>
            <?php the_title(); ?>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>



		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
