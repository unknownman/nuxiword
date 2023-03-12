<?php

/**
 * Template for single my_custom_post_type post type.
 */

get_header();

// Start the loop
while (have_posts()) :
	the_post();
	?>
		<article>
			<header>
				<h1><?php the_title(); ?></h1>
			</header>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<footer>
				<p>Author: <?php the_author(); ?></p>
				<p>Categories: <?php the_category(', '); ?></p>
				<p><?php the_tags('Tags: ', ', '); ?></p>
			</footer>
		</article>
	<?php
endwhile;

get_footer();
