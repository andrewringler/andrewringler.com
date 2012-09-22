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
  				
  				<p class="attribution copyright clearfix wrap">COPYRIGHT &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. ALL RIGHTS RESERVED.</p>
    			
				</div> <!-- end #inner-footer -->
			</footer> <!-- end footer -->

		
		</div> <!-- end #container -->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html> <!-- end page. what a ride! -->