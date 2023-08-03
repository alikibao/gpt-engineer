<?php

class Chat_Plugin {

    public function __construct() {
        add_action('admin_menu', array($this, 'add_plugin_page'));
        add_action('admin_init', array($this, 'register_settings'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_shortcode('chat_plugin', array($this, 'shortcode'));
    }

    public function run() {
        add_action('wp_ajax_send_message', 'ajax_send_message');
        add_action('wp_ajax_nopriv_send_message', 'ajax_send_message');
        add_action('wp_ajax_receive_message', 'ajax_receive_message');
        add_action('wp_ajax_nopriv_receive_message', 'ajax_receive_message');
    }

    public function add_plugin_page() {
        add_options_page(
            'Chat Plugin Settings',
            'Chat Plugin',
            'manage_options',
            'chat-plugin',
            array($this, 'display_settings')
        );
    }

    public function register_settings() {
        register_setting('chat_plugin', 'api_key');
        register_setting('chat_plugin', 'chat_color');
    }

    public function display_settings() {
        // Display the settings page in the WordPress admin area.
    }

    public function enqueue_styles() {
        wp_enqueue_style('chat_plugin', plugins_url('css/chat-plugin.css', __FILE__));
    }

    public function enqueue_scripts() {
        wp_enqueue_script('chat_plugin', plugins_url('js/chat-plugin.js', __FILE__), array('jquery'), '1.0', true);
        wp_localize_script('chat_plugin', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
    }

    public function shortcode() {
        // Display the chat interface in a WordPress page.
    }
}
