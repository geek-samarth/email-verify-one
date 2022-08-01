<?php
/*
Plugin Name: Email Verify One
Description: Fill out the contact form 7 and submit it with an email address that is verified.
Author: Geek Code Lab
Version: 1.2
Author URI: https://geekcodelab.com/
Text Domain : email-verify-one
Github Plugin URI: geek-samarth/email-verify-one
Primary Branch: main
Release Asset: true
*/
if (!defined('ABSPATH')) exit;

if (!defined("EVCF7_PLUGIN_DIR_PATH"))

	define("EVCF7_PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));

if (!defined("EVCF7_PLUGIN_URL"))
    
    define("EVCF7_PLUGIN_URL", plugins_url() . '/' . basename(dirname(__FILE__)));
    
define("EVCF7_BUILD", '1.2');

$plugin = plugin_basename(__FILE__);
// add_filter( "plugin_action_links_$plugin", 'evcf7_add_plugin_link');
function evcf7_add_plugin_link( $links ) {
	$support_link = '<a href="https://geekcodelab.com/contact/" target="_blank" >' . __( 'Support', 'email-verify-one' ) . '</a>';
	array_unshift( $links, $support_link );

    $pro_link = '<a href="https://geekcodelab.com/wordpress-plugins/email-verify-one-pro/"  target="_blank" style="color:#46b450;font-weight: 600;">' . __( 'Premium Upgrade' ) . '</a>'; 
	array_unshift( $links, $pro_link );	
	
	$setting_link = '<a href="'. admin_url('admin.php?page=evcf7-email-verify-one') .'">' . __( 'Settings', 'email-verify-one' ) . '</a>';
	array_unshift( $links, $setting_link );

	return $links;
}
