<?php
/*
Plugin Name: Form Plugin
Description: Plugin Developed For Practice Purpose
Version: 1.0
Author: Bait ur Rehman
*/

// Constant defined for form plugin directory path
define("form_plugin_dir_path",plugin_dir_path(__FILE__));

function create_menus()
{
  // Add the main menu page
  add_menu_page("Forms", "Forms", "manage_options" ,"form-plugin" ,"form_wp_call_back");

  // Add the submenu pages
  add_submenu_page("form-plugin", "User List", "User List", "manage_options" ,"form-list" ,"form_wp_call_back");
  add_submenu_page("form-plugin", "Add User", "Add User", "manage_options" ,"form-add" ,"add_user_call_back");

}

add_action("admin_menu","create_menus");

function form_wp_call_back()
{
  echo "The Plugin is working";
}

function add_user_call_back()
{
   include_once form_plugin_dir_path.'/views/add-user.php';
}

?>
