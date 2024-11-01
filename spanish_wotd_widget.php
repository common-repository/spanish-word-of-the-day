<?php
/*
Plugin Name: Spanish Word of the Day
Plugin URI: http://www.declan-software.com/spanish
Description: Adds a daily Spanish Word of the Day (with audio) widget to the WordPress sidebar.
Author: Declan Software
Version: 1.0
Author URI: http://www.declan-software.com/
Notes:  Adobe Flash required to play the audio
*/

function widget_spanishwotdwidget_init() 
{
	if ( !function_exists('register_sidebar_widget') )
	{
		return;
	}
		
	function widget_spanishwotdwidget($args) 
        {
		extract($args);
			
		echo $before_widget;
		echo $before_title ."Spanish Word of the Day". $after_title;

		$wotd_code = "<script src='http://www.hitsalive.com/spanish_wotd/spanish.php?link=WP' language='javascript' type='text/javascript'></script>";
                             
		echo '<div style="margin-top:5px;text-align:left;">'.$wotd_code.'</div>';
		echo $after_widget;
	}

	
	function widget_spanishwotdwidget_control() 
        {
		echo '<p style="text-align:left;">Brought to you by <b>Declan Software</b> - Language Learning Software for serious students.</p>';
	}

	register_widget_control(array('Spanish Word of the Day', 'widgets'), 'widget_spanishwotdwidget_control', 200, 200);

	register_sidebar_widget(array('Spanish Word of the Day', 'widgets'), 'widget_spanishwotdwidget');
}

add_action('widgets_init', 'widget_spanishwotdwidget_init');

?>