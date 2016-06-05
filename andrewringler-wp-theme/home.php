<?php
/**
 * Homepage
 *
 * @package Andrew Profile Theme 2013
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
    <div id="abstract">
			<p>I am based in Boston. I create interactive public installations that allow participants to create their own novel visual and auditory experiences. I challenge participants to invest time and effort learning new systems collaboratively, and through that investment receive the pride of achievement, and the joy of connecting with others.</p>
			<p>
				Selected entries:
			</p>
		</div>

    <?php 
		query_posts('tag=gallery,public');
		if (have_posts()) :
			?> <div class="home-section">				
			<h2 class="home-category">Public and Gallery</h2> <?php
			get_template_part('template-parts/content', 'home');
			?> </div> <?php
		endif;
		wp_reset_query(); 

		query_posts('tag=conceptual');
		if (have_posts()) :
			?> <div class="home-section">				
					<h2 class="home-category">Conceptual</h2> <?php
			get_template_part('template-parts/content', 'home');
			?> </div> <?php
		endif;
		wp_reset_query(); 
		
		query_posts('tag=teaching');
		if (have_posts()) :
			?> <div class="home-section">				
			<h2 class="home-category">Teaching</h2> <?php
			get_template_part('template-parts/content', 'home');
			?> </div> <?php
		endif;
		wp_reset_query(); 		
		
		?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
