<div id="sidebar">
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>
			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
						<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			
			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			
			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			
			<?php } ?>
			</li> <?php }?>
			<li><a href="http://www.federalmanagement.co.uk/news/">Blog Home</a></li>
			<li style="margin-top:20px;"><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>
			<?php wp_list_categories('show_count=1&title_li=<h2 style="margin-top:20px;">Categories</h2>'); ?>
			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<li style="margin-top:20px;"><h2>Meta</h2>
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

