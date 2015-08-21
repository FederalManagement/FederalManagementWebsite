<?php
/*
Plugin Name:  Google+ Share Button
Plugin URI:   http://pleer.co.uk/wordpress/plugins/google-plus-share-button/
Description:  Adds an unofficial Google+ Share button to any WordPress page, post or template.
Version:      1.2
Author:       Alex Moss
Author URI:   http://alex-moss.co.uk/
Contributors: pleer

Copyright (C) 2010-2010, Alex Moss
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
Neither the name of Alex Moss or pleer nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

*/

function gplusbutton($atts) {
    extract(shortcode_atts(array(
		"colour" => '',
    ), $atts));
	$content = get_the_title()." - ".get_permalink();
	$gplusbutton = "<!-- Google+ Share Button: http://pleer.co.uk/wordpress/plugins/google-plus-share-button/ -->\n<a href=\"javascript:(function(){var w=480;var h=380;var x=Number((window.screen.width-w)/2);var y=Number((window.screen.height-h)/2);window.open('https://plusone.google.com/_/+1/confirm?hl=en&url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title),'','width='+w+',height='+h+',left='+x+',top='+y+',scrollbars=no');})();\"><img src=\"".  plugin_dir_url(__FILE__)."/images/plus".$colour.".png\" alt=\"Share on Google+\" width=\"55\" height=\"22\" /></a>";
	return $gplusbutton;
	}

add_shortcode('gplusbutton', 'gplusbutton');
?>