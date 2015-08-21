<?php 
	get_header();
?>

	
<div class="container wrapper">
        <div class="row">
            <div class="box">
				<?php
					query_posts('posts_per_page=1');
						while(have_posts()) : the_post(); 
				?>
						<div class="jumbotron">
							<h2 class="text-center"><a href='<?php the_permalink() ?>'rel='bookmark' title='<?php the_title_attribute(); ?>'><?php the_title(); ?></a></h2>
							<p class="text-center"><?php the_excerpt();?></p>
						</div>

						
				<?php
					endwhile; wp_reset_query();
				?>
				</div>
            </div>
			
			<div class="row">
            <div class="box">
				<div class="col-md-12">
					<div class="panel panel-default panel-body">
						<div class="row">				
							<div class="col-md-12">
								<?php while(have_posts()) : the_post();?>
									<h3 class=""><a href='<?php the_permalink() ?>'rel='bookmark' title='<?php the_title_attribute(); ?>'><?php the_title(); ?></a></h3>
									<p><?php the_excerpt();?></p>
									<p class="text-muted">Posted by <?php the_author(); ?> on <?php the_time('F jS, Y');?> </p>
								<?php endwhile; wp_reset_query();?>
							</div>
						</div>
					</div>
				</div>
					<div class="col-md-4">
						<ul class="nav nav-pills nav-stacked">
								<?php wp_list_categories('orderby=name&title_li='); ?>
						</ul>
					</div>
				</div>
            </div>
			
			
			

<?php 
	get_footer();
?>