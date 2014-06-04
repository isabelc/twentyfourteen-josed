<?php
/**
 * The Template for displaying all single posts
 */
get_header(); ?><div id="primary" class="content-area"><div id="content" class="site-content" role="main"><?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
					
					// social_share ?><div id="social-wrap"><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink()); ?>" class="simple-share ss-gplus" title="Share on G+">G+ Share</a> <a target="_blank" href="https://twitter.com/share?text=<?php echo urlencode(get_the_title()); ?>&amp;hashtags=skater,skateboarding" class="simple-share ss-twitter" title="Tweet">Tweet</a> <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" class="simple-share ss-facebook" title="Share on Facebook">Share</a></div><?php

					// Previous/next post navigation.
					twentyfourteen_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?></div></div><?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
