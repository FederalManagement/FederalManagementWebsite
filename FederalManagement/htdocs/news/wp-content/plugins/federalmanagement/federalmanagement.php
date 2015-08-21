<?php

/*
* Plugin Name: Federal Management
* Plugin URI: http://www.federalmanagement.co.uk
* Description: Federal Management Plugins
* Version: 1.0
* Author: Liam Kelly
* Author URI: http://www.liamptk.co.uk
* License: GPL2
*/

// Add related articles to single posts
add_filter ('the_content', 'fm_add_related_posts');

function fm_add_related_posts($content) {
	//if not singular post then ignore
	if(!is_singular('post')) {
		return $content;
	}
	$categories = get_the_terms(get_the_ID(),'category');
	$categoriesIds = array();
	
	foreach($categories as $category) {
		$categoriesIds[] = $category->term_id;
	}
	
	$loop = new WP_Query(array(
		'category_in'=>$categoriesIds,
		'posts_per_page'=> 4,
		'post_not_in'=>array(get_the_ID()),
		'orderby'=>'rand'
	));
	if($loop->have_posts()) {
		$content .= 'RELATED POSTS: </br><ul>';
		while($loop->have_posts()) {
			$loop->the_post();
			$content .='<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
		}
		wp_reset_query();
	}
	return $content;
}
?>