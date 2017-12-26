<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Andrew Profile Theme 2013
 */
?>

	</div><!-- #main -->
	
	<footer id="footer">	
		<div class="footer-inner">
			<div class="copyright-notice"><span class="copyright">Copyright &copy; <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><h2 class="inline"><?php bloginfo( 'name' ); ?></h2></a> <?php echo date("Y");?></span></div>
			<div class="location">Somerville, MA</div>
			<div class="contact"><a href="mailto:public@andrewringler.com">public@andrewringler.com</a></div>
		</div>
	</footer>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
