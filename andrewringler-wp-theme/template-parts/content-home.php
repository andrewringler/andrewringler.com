<?php
/**
 * Template part for displaying page content in home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
?>

<ul>
	<?php while ( have_posts() ) : the_post();

	/*
	* Include the Post-Format-specific template for the content.
	* If you want to override this in a child theme, then include a file
	* called content-___.php (where ___ is the Post Format name) and that will be used instead.
	*/
	//get_template_part( 'content', get_post_format() );
	?>
	<li class="home-post-title <?php echo "home-post-$post->post_name"; ?>">										
		<?php
		$image = get_field('homepage_squareimage');
		if(!empty($image)):
			$img_id = $image['id'];
			
			// calculate width of image, given a fixed height of 400px
			// which we will scale down to 200px high on widescreen layouts
			$width = '400px';
			if($image['height'] > 400 && $image['width'] > 100){
					$ratio = $image['width'] / $image['height'];					
					$width = $ratio * 400;
					$width = $width . 'px';
			}
			$img_url = wp_get_attachment_image_src($img_id,'home-400w', true);							
			$srcset = wp_get_attachment_image_srcset($img_id, array(400,400,800,800,1000,1000));
			// adapted from wp-content/media.php
			$alt_text = trim(strip_tags(get_post_meta($img_id, '_wp_attachment_image_alt', true)));
			
			?>
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<img class="homepage-entry-image" src="<?php echo $img_url[0]; ?>" alt="<?php echo $alt_text; ?>" srcset="<?php echo $srcset; ?>" sizes="((max-width: 10000px) and (max-height: 10000px)) <?php echo $width; ?>, <?php echo $width; ?>" />							
			
			<span class="article-link">
				<?php 
					$title = get_field('home_shorttitle');
					if($title){
						echo $title;
					}else{
						the_title(); 					
					}
				?>

			</span>
		</a>								
		
		<?php endif; ?>
		

	</li>
<?php endwhile; ?>
</ul>
