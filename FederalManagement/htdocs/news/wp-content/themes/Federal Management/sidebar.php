	<div id="sidebar">
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<?php /*?><p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p><?php */?>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<?php /*?><p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p><?php */?>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<?php /*?>	<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <?php the_time('F, Y'); ?>.</p><?php */?>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<?php /*?><p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the year <?php the_time('Y'); ?>.</p><?php */?>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<?php /*?><p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p><?php */?>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<?php /*?><p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p><?php */?>

			<?php } ?>

			</li> <?php }?>

		<li><a href="http://www.federalmanagement.co.uk/news">Blog Home</a></li>

			<li><h2><img src="http://www.federalmanagement.co.uk/graphics/arr_red.gif" width="11" height="8">Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php wp_list_categories('show_count=1&title_li=<h2><img src="http://www.federalmanagement.co.uk/graphics/arr_red.gif" width="11" height="8">Categories</h2>'); ?>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>

				<li><h2><img src="http://www.federalmanagement.co.uk/graphics/arr_red.gif" width="11" height="8">Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
				
				
							<?php } ?>

			<?php endif; ?>
		</ul>
	</div>

