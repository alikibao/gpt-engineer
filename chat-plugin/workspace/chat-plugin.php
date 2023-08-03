<?php
/*
Plugin Name: Chat Plugin
Description: A modern chat interface for WordPress.
Version: 1.0
Author: Your Name
*/

if (!defined('WPINC')) {
    die;
}

require_once plugin_dir_path(__FILE__) . 'includes/class-chat-plugin.php';

function run_chat_plugin() {
    $plugin = new Chat_Plugin();
    $plugin->run();
}

run_chat_plugin();
