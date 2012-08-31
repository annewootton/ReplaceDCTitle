<?php
add_plugin_hook('install', 'exhibit_item_title_switch');

function exhibit_item_title_switch($title, $item) {
/**
 * Replace the title of all items in Exhibit Builder with a different field.
 *
 * Add this to a new plugin, change the field to whatever field you want, and 
 * activate the plugin.
 */
    $request = Zend_Controller_Front::getInstance()->getRequest();

        // Replace title field here.
        $title = item('PBCore', 'Title', null, $item);

    return $title;
}

add_filter(array('Display', 'Item', 'Dublin Core', 'Title'), exhibit_item_title_switch);
