<?php
/**
 * Homepage
 *
 * @package Andrew Profile Theme 2013
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
				<!--

				Recent

			-->
			<?php query_posts( array( 'posts_per_page' => 3) ); ?>
			<?php if (have_posts()) : ?>
				<h3>Recent</h3>
				<ul>
					<?php while (have_posts()) : the_post(); ?>
						<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
				</ul>
			<?php endif; wp_reset_postdata(); ?>

        <!--

					Code

				-->
        <?php query_posts( array( 'posts_per_page' => 15, 'category_name' => 'code') ); ?>
 				  <?php if (have_posts()) : ?>
          <h3>Code</h3>
          <p>I love to learn new technologies so I end up building small apps in my spare time. I have written a post about
            most of my programming projects, the rest you'll find on github at <a href="https://github.com/andrewringler/">github.com/andrewringler</a>
          </p>

					<ul class="asr-post-list">
							<?php while (have_posts()) : the_post(); ?>
								<li>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
										<?php
										if ( has_post_thumbnail() ) {
											the_post_thumbnail('large');
										}
										?>
									</a>
								</li>
 					    <?php endwhile; ?>
					</ul>
 					<?php endif; wp_reset_postdata(); ?>


          <!--

  					Film

  				-->
          <?php query_posts( array( 'posts_per_page' => 15, 'category_name' => 'film') ); ?>
   				  <?php if (have_posts()) : ?>
            <h3>Film</h3>
            <p>I have made a few short films. None too recently. 'Happy as an Oyster' is my favorite, 4 minutes long, shot
              on 16mm BW Reversal.</p>

  					<ul>
  							<?php while (have_posts()) : the_post(); ?>
  								<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
   					    <?php endwhile; ?>
  					</ul>
   					<?php endif; wp_reset_postdata(); ?>



            <!--

    					Writing

    				-->
            <?php query_posts( array( 'posts_per_page' => 15, 'category_name' => 'writing') ); ?>
     				  <?php if (have_posts()) : ?>
              <h3>Writing</h3>
    					<ul>
    							<?php while (have_posts()) : the_post(); ?>
    								<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
     					    <?php endwhile; ?>
    					</ul>
     					<?php endif; wp_reset_postdata(); ?>


					<h3>About</h3>
					<p>I am a professional software developer and artist. I bring together performance, comedy, filmmaking,
						2D arts, and code to create engaging experiences.
						I am an MFA candidate at the <a href="http://dynamicmediainstitute.org/">Dynamic Media Institute of MassArt</a>.
						I live in Boston.
					</p>

					<p>Feel free to email me at <a href="mailto:public@andrewringler.com">public@andrewringler.com</a>.
					</p>
					<p>
						<h4>You can also find me on</h4>
						<ul>
							<li><a href="https://twitter.com/andrewringler">Twitter @andrewringler</a></li>
							<li><a href="http://www.linkedin.com/in/andrewringler">LinkedIn</a></li>
							<li><a href="https://github.com/andrewringler">GitHub</a></li>
							<li><a href="https://www.facebook.com/andrew.ringler">Facebook</a></li>
						</ul>
					</p>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
