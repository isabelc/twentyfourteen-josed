<?php
/**
 * The template for displaying image attachments
 */
// Retrieve attachment metadata.
$metadata = wp_get_attachment_metadata();
get_header();
?><section id="primary" class="content-area image-attachment"><div id="content" class="site-content" role="main"><?php
		while ( have_posts() ) : the_post();
	?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><header class="entry-header"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?><div class="entry-meta"><span class="entry-date"><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time></span>

						<span class="full-size-link"><a href="<?php echo wp_get_attachment_url(); ?>"><?php echo $metadata['width']; ?> &times; <?php echo $metadata['height']; ?></a></span> 
						
						<span class="parent-post-link"><a href="<?php echo get_permalink( $post->post_parent ); ?>" rel="gallery"><?php echo get_the_title( $post->post_parent ); ?></a></span><?php edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' ); ?></div></header><div class="entry-content"><div class="entry-attachment"><div class="attachment"><?php twentyfourteen_the_attached_image(); ?></div><?php if ( has_excerpt() ) : ?><div class="entry-caption"><?php the_excerpt(); ?></div><?php endif; ?></div><?php
						the_content();
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?></div></article><div id="social-wrap"><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink()); ?>" class="simple-share ss-gplus" title="Share on G+" rel="nofollow">G+ Share</a> <a target="_blank" href="https://twitter.com/share?text=<?php echo urlencode(get_the_title()); ?>&amp;hashtags=skater,skateboarding" class="simple-share ss-twitter" title="Tweet" rel="nofollow">Tweet</a> <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" class="simple-share ss-facebook" title="Share on Facebook" rel="nofollow">Share</a></div><nav id="image-navigation" class="navigation image-navigation"><div class="nav-links"><?php previous_image_link( false, '<div class="previous-image">' . __( 'Previous Image', 'twentyfourteen' ) . '</div>' ); ?><?php next_image_link( false, '<div class="next-image">' . __( 'Next Image', 'twentyfourteen' ) . '</div>' ); ?></div></nav><?php comments_template(); ?><?php endwhile; ?></div></section><?php
get_sidebar();
get_footer();
