<?php get_header(); ?>

	</div>
    <div id="content">
    	<div id="right_column" class="narrowcolumn">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>
		<hr />
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>

		  <div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

			  
			</div>
		</div>

		<?php comments_template(); ?>

		<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

		<?php endif; ?>
		</div>	
    <div id="left_column">
		<?php get_sidebar(); ?>
    </div>
	</div>
   </div>
<?php get_footer(); ?>
