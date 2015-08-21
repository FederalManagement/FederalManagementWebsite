<?php get_header(); ?>

	<td valign="top" bgcolor="161616"><div id="content" class="widecolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

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

	</div></td>
              <td width="20" valign="top" bgcolor="161616">&nbsp;</td>
              <td width="214" valign="top" bgcolor="#FFFFFF"><?php get_sidebar(); ?></td>
              <td width="34" valign="top" bgcolor="161616">&nbsp;</td>
            </tr>
          </table></td>
        </tr>

        <tr>
          <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>

<?php get_footer(); ?>
