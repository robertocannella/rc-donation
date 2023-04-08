<?php

/*
Plugin Name: RC Donation
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A Simple Donation Popup Tool.
Version: 1.0
Author: robertocannella
Author URI: https://www.robertocannella.com
License: A "Slug" license name e.g. GPL2
*/


// Load block.json
function rc_donation_init(){
        // This grabs block.json from the current directory
        register_block_type_from_metadata( __DIR__ );
}

add_action('init',"rc_donation_init");