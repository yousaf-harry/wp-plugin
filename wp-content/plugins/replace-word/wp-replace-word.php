<?php

/*
Plugin Name: Replace Word
Plugin URI:  https://github.com/yousaf-harry/wp-plugin
Description: This plugin replace your few spacific words which your want to replace with other words
Version:     1.0
Author:      Yousaf Harry
Author URI:  http://yousafharry.com
License:     GPL2 etc
License URI: http://link to your plugin license
*/


/* Copyright YEAR PLUGIN_AUTHOR_NAME (email : your email address)
(Plugin Name) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

(Plugin Name) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with (Plugin Name). If not, see (http://link to your plugin license).
*/


function renym_content_replace( $content ) {
    $search  = array( 'wordpress', 'goat', 'Easter', '70', 'sensational' );
    $replace = array( 'WordPress', 'coffee', 'Easter holidays', 'seventy', 'extraordinary' );
    return str_replace( $search, $replace, $content );
}
add_filter( 'the_content', 'renym_content_replace' );


function renym_content_footer_note( $content ) {
    $content .= '<footer class="renym-content-footer"><b>Plugin Footer:</b> Thank you for reading this tutorial. Maybe next time I will let you buy me a coffee! For more WordPress tutorials visit our Blog</footer>';
    return $content;
}
add_filter( 'the_content', 'renym_content_footer_note' );
?>
