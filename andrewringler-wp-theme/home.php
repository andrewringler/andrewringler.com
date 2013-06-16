<?php
/**
 * Homepage
 *
 * @package Andrew Profile Theme 2013
 */

get_header(); ?>

<div id="primary" class="content-area">
    <div id="profile-header">
      <img src="<?php bloginfo('template_directory'); ?>/images/andrew_ringler_carson_beach3.jpg" id="profile-header-image">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <h1><?php bloginfo( 'name' ); ?></h1>
      </a>
			<p><?php bloginfo( 'description' ); ?></p>
    </div>
		
	<div id="content" class="site-content" role="main">
        <h3>Who</h3>
        <p>You have found the website of Andrew Ringler. I live in Medford Massachusetts.
          I work as a <span class="title">Senior Software Developer</span> at <a href="http://www.icosystem.com">Icosystem</a> in
          Cambridge MA. I get to work on incredible projects modeling people's behavior. I am passionate
          about usability, design and accessibility.
        </p>
        <p>Lately, I have been focusing on web technologies like CSS, Javascript, <a href="http://nodejs.org/">Node.js</a>, 
          <a href="http://www.playframework.com/">Play Framework</a> (with <a href="http://www.scala-lang.org/">Scala</a>).
          I build all sorts of things: prototypes, demonstrations and productions apps.
        </p>



        <!-- 
					
					Code
					
				-->							
        <?php query_posts( array( 'posts_per_page' => 15, 'category_name' => 'code') ); ?>
 				  <?php if (have_posts()) : ?>
          <h3>Code</h3>
          <p>I write a bit of code in my spare time. I love to learn new  
            technologies, building something is the best way to learn. I have written a post about
            most of my programming projects, the rest you'll find on github at <a href="https://github.com/andrewringler/">github.com/andrewringler</a>
          </p>

					<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
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
      
      
		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>