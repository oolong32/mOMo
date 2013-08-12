<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post single" id="post-<?php the_ID(); ?>">
		<h3 class="storytitle"><?php the_title(); ?></h3>
			<div class="storycontent">
				<?php the_content('<p class="serif">' . __('(more...)') . '</p>'); ?>

			</div>
		</div>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

<?php get_footer(); ?>