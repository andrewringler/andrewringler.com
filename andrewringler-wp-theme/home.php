<?php get_header(); ?>
			
			<div id="hero" class="wrap clearfix">
			  <p>
			    <b class="announce-header">
			      <?php
  			      $recent = new WP_Query('showposts=1');
  			      if($recent->have_posts()) : while($recent->have_posts()) : $recent->the_post();
                  echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago, I wrote';  			      
    			      endwhile;
    			    endif;
  			      wp_reset_postdata();
  			    ?>
			    </b>
			    <a href=""><b class="announce-statement">Buying an Amp With Emotion</b></a>
			  </p>
			</div>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix" role="main">

              <?php query_posts( 'posts_per_page=1' ); ?>
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
							    <h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							  
							    <?php the_post_date_and_category() ?>
						
						    </header> <!-- end article header -->
					
						    <section class="post-content clearfix">
							    <?php the_content(); ?>
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">

    							<p class="tags"><?php the_tags('<span class="tags-title">Topics:</span> ', ', ', ''); ?></p>

						    </footer> <!-- end article footer -->
						    
						    <?php // comments_template(); // uncomment if you want to use them ?>
					
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
  			      
					    ?>
			
				    </div> <!-- end #main -->
    
				    <?php get_sidebar('home'); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
