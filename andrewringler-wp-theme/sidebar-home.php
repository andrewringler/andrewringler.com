				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'home' ) ) : ?>

						<?php dynamic_sidebar( 'home' ); ?>

            <?php // Import and display goodreads currently reading bookshelf
              if(function_exists('fetch_feed')){
                $feed = fetch_feed('http://www.goodreads.com/review/list_rss/6742432?key=91bbdec3aee0e7274696c27c8b6e0d823e26b6cf&shelf=currently-reading');
                if(!is_wp_error($feed)) :
                  $feed->set_cache_duration(1200);
                  $feed->init();
                  $limit = $feed->get_item_quantity(10);
                  $items = $feed->get_items(0, $limit);
                endif;
              }
              if($items) { ?>
                <ul>
                <?php foreach ($items as $item) { 
                  $img_url_item = $item->get_item_tags($SIMPLEPIE_NAMESPACE_ATOM_10, 'book_small_image_url');
                  $img_url = $img_url_item[0]['data']; 
                  $link_item = $item->get_item_tags($SIMPLEPIE_NAMESPACE_ATOM_10, 'link');
                  $link = $link_item[0]['data'];
                  $author_item = $item->get_item_tags($SIMPLEPIE_NAMESPACE_ATOM_10, 'author_name');
                  $author = $author_item[0]['data'];
                  ?>
                  <li>
                    <img src="<?php 
                      echo $img_url;
                    ?>">
                    <a href="<?php echo $link; ?>"><?php echo $item->get_title(); ?></a>
                    by <?php echo $author; ?>
                  </li>
                <?php } ?>
              <?php } ?>
              </ul>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert help">
							<p>Please activate some Widgets for the 'Homepage Sidebar' sidebar.</p>
						</div>

					<?php endif; ?>

				</div>