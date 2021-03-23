<?php
/*
Plugin Name: My plugin
Plugin URI: http://localhost/wordpress/
Description: Ceci est mon premier plugin
Author: Maya
Version: 0.1
Author URI: http://localhost/wordpress/
*/

add_action('wp_footer', 'say_hello');

function say_hello(){
    echo 'bonjour!';
}

?>