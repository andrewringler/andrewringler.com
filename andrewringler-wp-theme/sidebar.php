				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'mainsidebar' ) ) : ?>

						<?php dynamic_sidebar( 'mainsidebar' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						

					<?php endif; ?>

				</div>