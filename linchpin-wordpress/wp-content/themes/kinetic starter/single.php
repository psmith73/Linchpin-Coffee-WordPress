<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="post" id="post-<?php the_ID(); ?>">                    
		<h2><?php the_title(); ?></h2>
		<div class="entry">

		<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

		</div>
	</div>


	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php get_footer(); ?>
