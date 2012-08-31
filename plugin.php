<?php
add_plugin_hook('install', 'item_title_switch');

function item_title_switch($title, $item) {
/**
 * Replace the title of all items in public/admin view with a different field.
 *
 * For use with element sets other than PBCore, change the new field to whatever field you want, and activate the plugin.
 */
    $request = Zend_Controller_Front::getInstance()->getRequest();

        // Replace title field here.
        $title = item('PBCore', 'Title', null, $item);

    return $title;
}

add_filter(array('Display', 'Item', 'Dublin Core', 'Title'), item_title_switch);
