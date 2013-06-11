<?php
/*
Template Name: Random Post Page Template
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix" role="main">

              <?php query_posts( array( 'posts_per_page' => 1) ); ?>
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
						    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
							    <header class="article-header">
							
								    <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

								    <?php the_post_date_and_category() ?>
						
							    </header> <!-- end article header -->
					
							    <section class="post-content clearfix">
						
								    <?php the_post_thumbnail( 'bones-thumb-300' ); ?>
						
								    <?php the_excerpt(); ?>
					
							    </section> <!-- end article section -->

							    <section class="post-content clearfix">
						
								    <h3 class="h3">Continue to <a href="<?php echo get_permalink(get_page_by_title('About')); ?>">andrewringler.com</a></h3>
					
							    </section> <!-- end article section -->
						
							    <footer class="article-footer">
							
							    </footer> <!-- end article footer -->
					
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
					        	    <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
					        	</footer>
					        </article>
					
					    <?php endif; 
					    wp_reset_postdata();
						$asr_is_random_page = true; // for footer
  			      
					    ?>
			
				    </div> <!-- end #main -->
    				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

		</div> <!-- end #container -->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html> <!-- end page. what a ride! -->
