<?php
/*
Template Name: Custom Page Example
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <section class="post-content">
							    <?php the_content(); ?>
						    </section> <!-- end article section -->						
						    
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					
					    <?php else : ?>
					
        					<article id="post-not-found" class="hentry clearfix">
        					    <header class="article-header">
        						    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
        						</header>
        					    <section class="post-content">
        						    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        						</section>
        						<footer class="article-footer">
        						    <p><?php _e("This is the error message in the page-custom.php template.", "bonestheme"); ?></p>
        						</footer>
        					</article>
						
				    <?php endif; 
				    wp_reset_postdata();
	      
				    ?>
						
						<!-- 
						
						   Projects
						
						-->							
 	              		   <?php query_posts( array( 'posts_per_page' => 3, 'category_name' => 'projects') ); ?>
 	 					    <?php if (have_posts()) : 
 								$categoryId = get_category_link(get_cat_ID('projects'));
 								?>
								<section class="about-page-category-section">
 								<h2><a href="<?php echo esc_url( $categoryId ); ?>">Projects</a></h2>
								<p>I am always working on a few projects. Lately this has been creative webapps in Node.js and the Play Framework with Scala.
									In the not too distant past I have directed a few short films.</p>
								<h4 class="h4">Currently I am Working On</h4>

 								<ul>
								
 								<?php while (have_posts()) : the_post(); ?>
								
 									<li>
 										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
 									</li>
								
 	 					    <?php endwhile; ?>	
 								</ul>
							</section>
 	 					    <?php else : ?>
					    
					
 	 					    <?php endif; 
 	 					    wp_reset_postdata();
  			      
 	 					    ?>

						
						
						
						
						
						
						
						<!-- 
						
						   Writing
						
						-->
							
							
								
	              		   <?php query_posts( array( 'posts_per_page' => 3, 'category_name' => 'writing') ); ?>
	 					    <?php if (have_posts()) : 
								$categoryId = get_category_link(get_cat_ID('writing'));
								?>
								
							<section class="about-page-category-section">
								<h2><a href="<?php echo esc_url( $categoryId ); ?>">Writing</a></h2>
								<p>I write about code, philosophy, film, audio and whatever I happen to fancy.</p>
								<h4 class="h4">Recently I Wrote</h4>
								<ul>
								
								<?php while (have_posts()) : the_post(); ?>
								
									<li>
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
									</li>
								
	 					    <?php endwhile; ?>	
								</ul>
							</section>
	 					    <?php else : ?>
					    
					
	 					    <?php endif; 
	 					    wp_reset_postdata();
  			      
	 					    ?>
						
						
						
						
						
						
						
						
						
						
						
						
			
				    </div> <!-- end #main -->
    
				    <?php get_sidebar(); // sidebar 1 ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>