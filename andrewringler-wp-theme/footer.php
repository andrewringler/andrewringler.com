
			<footer class="footer" role="contentinfo">
				<div id="inner-footer">
				  
	        <div id="footer-widgets" class="footer-links wrap clearfix" role="complementary">
  					<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
  						<?php dynamic_sidebar( 'footer-widgets' ); ?>
  					<?php else : ?>

  						<!-- This content shows up if there are no widgets defined in the backend. -->

  						<div class="alert help">
  							<p>Please activate some Widgets on the 'Footer widgets sidebar'.</p>
  						</div>

  					<?php endif; ?>

  				</div>
  				
				  <ul class="attribution clearfix wrap">
				    <li><span class="copyright">Copyright <span class="copyright">&copy;</span> <?php echo date('Y'); ?> <?php bloginfo('name'); ?></span></li>
  				  <li><a href="mailto:public@andrewringler.com">Contact me</a></li>
  				</ul>
    			
				</div> <!-- end #inner-footer -->
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html> <!-- end page. what a ride! -->