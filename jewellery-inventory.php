<?php
/**
 * Plugin Name: Jewellery Inventory Manager
 * Description: Inventory management plugin for jewellery products.
 * Version: 1.0
 * Author: Digvijay Gharal
 */

if (!defined('ABSPATH')) exit;

add_action('admin_menu', function () {
    add_menu_page(
        'Jewellery Inventory',
        'Jewellery Inventory',
        'manage_options',
        'jewellery-inventory',
        function () {
            echo '<h1>Jewellery Inventory Plugin</h1>';
        }
    );
});
