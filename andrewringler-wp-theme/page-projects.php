<?php
/*
Template Name: Projects Template
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="twelveeightcol first clearfix" role="main">

						<h1 class="page-title"><?php the_title(); ?></h1>
					    

						<ul class="projects">
							<li class="project">
								<h2><a href="https://github.com/andrewringler/my-nike-data">my-nike-data</a></h2>
								<ul class="project-technologies">
									<li>Node.js</li>
								</ul>
								<img class="project-img" src="<?php bloginfo('template_directory'); ?>/images/my-nike-data-screenshot.png">
								<p>I wanted to build something with Cloud 9 so I made this with nodejs. Cloud 9 lets you code, fully in the cloud, thats pretty cool! The app pulls in my Nike FuelBand data from the Nike Plus API on every page load and then visualizes it using Mike Bostock's Calendar View visualization. Running live on <a href="http://andrew-nike-data.herokuapp.com/">heroku here</a>, there is no caching so there will be a 10 sec. delay while the Nike API is being queried.</p>
							</li>
			
							<li class="project">
								<h2><a href="https://github.com/andrewringler/love-that-actor">love-that-actor</a></h2>
								<ul class="project-technologies">
									<li>Scala</li>
									<li>Play</li>
								</ul>
								<img class="project-img" src="<?php bloginfo('template_directory'); ?>/images/love-that-actor-screenshot.png">
								<p>Get new movies recomendations based on actors and movies you have liked. Build with <a href="http://www.scala-lang.org/">Scala</a> <a href="http://www.playframework.com/">Play</a>. Uses <a href="http://www.themoviedb.org/">The Movie Database</a> API for movie meta data and poster images.
								</p>
							</li>
			
							<li class="project">
								<h2><a href="https://github.com/andrewringler/email-to-sunrise">email-to-sunrise</a></h2>
								<ul class="project-technologies">
									<li>Wordpress Theme &amp; Plugin</li>
									<li>PHP</li>
								</ul>
								<img class="project-img" src="<?php bloginfo('template_directory'); ?>/images/email-to-sunrise-screenshot.png">
								<p>My family sends around sunrise and sunset photos via email. I built a Wordpress plugin that fetches and parses those emails and converts them into Wordress posts maintaining threaded conversations by converting all replies to comments on the original post. Also with a custom Wordpress theme.
								</p>
							</li>
			
							<li class="project">
								<h2><a href="https://github.com/andrewringler/d3-sorting-algorithms">d3-sorting-algorithms</a></h2>
								<ul class="project-technologies">
									<li>Javascript</li>
									<li>D3</li>
								</ul>
								<img class="project-img" src="<?php bloginfo('template_directory'); ?>/images/d3-sorting-algorithms-screenshot.png">
								<p>Animated head-to-head visual comparison of several of the popular array sorting algorithms; built with <a href="http://d3js.org/">D3</a>. Checkout the live preview running on <a href="http://bl.ocks.org/andrewringler/3809399">bl.ocks</a>.				
								</p>
							</li>
			
							<li class="project">
								<h2><a href="https://github.com/andrewringler/andrewringler.com">andrewringler.com</a></h2>
								<ul class="project-technologies">
									<li>Wordpress Theme &amp; Plugin</li>
									<li>PHP</li>
								</ul>
								<img class="project-img" src="<?php bloginfo('template_directory'); ?>/images/andrewringler-screenshot.png">
								<p>Custom Wordpress theme for my personal site andrewringler.com. As well as investigations into Vagrant / Chef workflows for development of Wordpress themes.				
								</p>
							</li>
			
							<li class="project">
								<h2><a href="https://github.com/andrewringler/24-game">24-game</a></h2>
								<ul class="project-technologies">
									<li>Javascript</li>
								</ul>
								<img class="project-img" src="<?php bloginfo('template_directory'); ?>/images/24-game-screenshot.jpg">
								<p>Finds solutions to the <a href="http://en.wikipedia.org/wiki/24_Game">24 Card Game</a>. I decided to write this program after playing the game and being dealt 8, Jack, 7, 6 (or 8,1,7,6), and not being able to find a solution. So I wrote a program to try and find one, and no, there does not appear to be a solution for 8, Jack, 7, 6.
								</p>
							</li>
			
							<li class="project">
								<h2>Digital Cane</h2>
								<ul class="project-technologies">
									<li>Basic Stamp</li>
									<li>Sensors</li>
									<li>Haptic Feedback</li>
								</ul>
								<img class="project-img" src="<?php bloginfo('template_directory'); ?>/images/distance-sensor-testing.png">
								<p>Technology exploration of ultrasonic sensors and haptic feedback for use in the development of a digital cane for blind persons. Ongoing 2013. Collaboration with <a href="https://twitter.com/KyleMKeane">Kyle Keane</a>
								</p>
							</li>
						</ul>
			
				    </div> <!-- end #main -->
    				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
