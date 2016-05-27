<?php

/*

Theme Name: Spring 2016 Demo
Author: Milo
Author URI: http://www.milo.sh
Description: This is a demo WP theme for web170
Version: 0.0.1

*/

//menu registry 
register_nav_menus(array(
    'main-menu' => _('Menu'),
    ));


//sidebar registry
register_sidebars();



//thumbnail support
add_theme_support('post-thumbnails');


?>