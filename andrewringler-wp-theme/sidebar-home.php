				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'home' ) ) :
            dynamic_sidebar( 'home' );
            else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						

					<?php endif; ?>

				</div>