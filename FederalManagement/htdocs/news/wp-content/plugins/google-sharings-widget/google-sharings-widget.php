<?php
/*
 * Plugin Name: Google+ Sharings Widget
 * Version: 1.0
 * Plugin URI: http://www.romain-briand.fr/google-plus-sharings-wordpress-widget
 * Description: Ce plugin permet d'utiliser un widget qui affiche les derniers éléments partagés ur un profil ou une page Google+
 * Author: Romain Briand
 * Author URI: http://www.romain-briand.fr/
 */
class gPlusSharingsWidget extends WP_Widget
{
	/**
	* Declares the gPlusSharingsWidget class.
	*/
	function gPlusSharingsWidget(){
		$widget_ops = array(
			'classname' => "plus_sharings_widget",
			'description' => "Widget permettant d'afficher les liens partagés sur une page Google Plus"
		);
		$control_ops = array(
			'width' => 300,
			'height' => 300
		);
		$this->WP_Widget('gplussharings', __('Google+ Sharings'), $widget_ops, $control_ops);
	}
	
	/**
	* Displays the Widget
	*/
	function widget($args, $instance) {
		
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? '&nbsp;' : $instance['title']);
		$plusId = apply_filters('widget_plus_id', empty($instance['plus_id']) ? '&nbsp;' : $instance['plus_id']);
		$itemsNumber = apply_filters('widget_plus_id', empty($instance['itemsNumber']) ? '5' : $instance['itemsNumber']);
		
		$file = dirname(__FILE__) . '/gplus.json';
		
		if(is_file($file)) {
		
			$data = json_decode(file_get_contents($file));
			
			try {
				if($data != null) {
					
					//echo $before_widget;
					
					# The title
					if ( $title )
						echo $before_title . $title . $after_title;
			
					# Make widget
					echo '<ul>';

					for($i = 0; $i < $itemsNumber; $i++) {
						if(isset($data->items[$i]->object->attachments)) {
							for($j=0; $j < count($data->items[$i]->object->attachments); $j++) {
								if(isset($data->items[$i]->object->attachments[$j]->displayName)) {
									echo '<li>';
										echo '<a href="' . $data->items[$i]->object->attachments[$j]->url . '" target="_blank">';
										echo $data->items[$i]->object->attachments[$j]->displayName . '</a>';
									echo '</li>';
								}
							}
						}
					}

					echo '</ul>';
					
					# After the widget
					//echo $after_widget;
					
				} else {
					
					throw new Exception("Erreur");
					
				}
			}
					catch(Exception $e) { 
				//	echo $e->getMessage(); 
			}
		}
	}
	
	/*
	 * Saves the widgets settings.
	 */
	function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = strip_tags(stripslashes($new_instance['title']));
		$instance['apiKey'] = strip_tags(stripslashes($new_instance['apiKey']));
		$instance['plus_id'] = strip_tags(stripslashes($new_instance['plus_id']));
		$instance['itemsNumber'] = strip_tags(stripslashes($new_instance['itemsNumber']));
		
		updateFeed();
		
		return $instance;
	}
	
	/**
	 * Edit form
	 */
	function form($instance){
		//Defaults
		$instance = wp_parse_args( 
			(array) $instance,
			array(
				'title'=>'',
				'apiKey' => '',
				'plus_id'=>'',
				'itemsNumber'=>''
			),
			''
		);
		
		$title = htmlspecialchars($instance['title']);
		$plus_id = htmlspecialchars($instance['plus_id']);
		$apiKey = htmlspecialchars($instance['apiKey']);
		$itemsNumber = htmlspecialchars($instance['itemsNumber']);
		
		# Title
		echo '<p style="text-align:right;"><label for="' . $this->get_field_name('title') . '">' . __('Title:') . ' <input style="width: 250px;" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title . '" /></label></p>';
		
		# API Key
		echo '<p style="text-align:right;"><label for="' . $this->get_field_name('apiKey') . '">' . __('Google+ API key:') . ' <input style="width: 200px;" id="' . $this->get_field_id('apiKey') . '" name="' . $this->get_field_name('apiKey') . '" type="text" value="' . $apiKey . '" /></label></p>';
		
		# Google+ ID
		echo '<p style="text-align:right;"><label for="' . $this->get_field_name('plus_id') . '">' . __('Google+ Page Id:') . ' <input style="width: 200px;" id="' . $this->get_field_id('plus_id') . '" name="' . $this->get_field_name('plus_id') . '" type="text" value="' . $plus_id . '" /></label></p>';
		
		# Number of items
		echo '<p style="text-align:right;"><label for="' . $this->get_field_name('itemsNumber') . '">' . __('Number of items:') . ' <input style="width: 200px;" id="' . $this->get_field_id('itemsNumber') . '" name="' . $this->get_field_name('itemsNumber') . '" type="text" value="' . $itemsNumber . '" /></label></p>';
	}

}
	
/**
* Register the widget
*/

function gPlusSharingsInit() 
{
	register_widget('gPlusSharingsWidget');
}	
add_action('widgets_init', 'gPlusSharingsInit');
register_activation_hook(__FILE__, 'gPlusActivate');
register_deactivation_hook(__FILE__, 'gPlusDeactivate');
	
function gPlusActivate() 
{
	wp_schedule_event(time(), 'hourly', 'gPlusEvent');
}
add_action('gPlusEvent', 'updateFeed');
	
function updateFeed() 
{
	$options = get_option('widget_gplussharings');
	 
	$feedUrl = "https://www.googleapis.com/plus/v1/people/" . $options[3]['plus_id'] . "/activities/public?alt=json&pp=1&key=" . $options[3]['apiKey'];
		 
	$feed = file_get_contents($feedUrl, "r");
	$directory = dirname(__FILE__) . '/';
	$file = fopen($directory . 'gplus.json', 'w');
	fwrite($file, $feed);
}
	
function gPlusDeactivate()
{
	wp_clear_scheduled_hook('gPlusEvent');
}
	
?>