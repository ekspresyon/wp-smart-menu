<?php
/*
Plugin Name:  Smart custom menus
Description:  WordPress Plugin to use Smart Menus on website.
Version:      0.0.1
Author:       David Delonnay
Author URI:   https://wwww.davidjd.com/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( '' );
define( 'SM_SET', __FILE__ );
define( 'SM_SET_DIR', untrailingslashit( dirname( SM_SET ) ) );

//call in functions
require SM_SET_DIR.'/functions.php';
