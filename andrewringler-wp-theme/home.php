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

		<section>
			<p>I am a boston based professional software developer and artist. I bring together performance, comedy, filmmaking,
				2D arts, and code to create engaging experiences. I am an MFA candidate at the <a href="http://dynamicmediainstitute.org/">Dynamic Media Institute of MassArt</a>.
				Feel free to email me at <a href="mailto:public@andrewringler.com">public@andrewringler.com</a>. Or find me on
				<a href="https://twitter.com/andrewringler">Twitter @andrewringler</a>,
				<a href="http://www.linkedin.com/in/andrewringler">LinkedIn</a>,
				<a href="https://github.com/andrewringler">GitHub</a> or
				<a href="https://www.facebook.com/andrew.ringler">Facebook</a>.
			</p>
		</section>


				<!--

				Recent

			-->
			<?php query_posts( array( 'posts_per_page' => 5) ); ?>
			<?php if (have_posts()) : ?>
				<h3>Recent</h3>
				<ul class="asr-post-list">
					<?php while (have_posts()) : the_post(); ?>
						<li>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								<?php the_title(); ?>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; wp_reset_postdata(); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
