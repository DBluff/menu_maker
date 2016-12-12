<?php
#
# menu_maker setup page
#

// Do the include and authorization checking ritual -- don't change this section.
include '../../../include/db.php';
include_once '../../../include/general.php';
include '../../../include/authenticate.php'; if (!checkperm('a')) {exit ($lang['error-permissiondenied']);}

$plugin_name = 'menu_maker';
if(!in_array($plugin_name, $plugins))
{plugin_activate_for_setup($plugin_name);}

// Specify the name of this plugin and the heading to display for the page.
$plugin_name = 'menu_maker';
$plugin_page_heading = $lang['menu_maker_configuration'];

// Build the $page_def array of descriptions of each configuration variable the plugin uses.

$page_def[] = config_add_text_input('menu_maker_URL', $lang['menu_maker_URL']);
$page_def[] = config_add_text_input('menu_maker_site', $lang['menu_maker_site']);

// Do the page generation ritual -- don't change this section.
$upload_status = config_gen_setup_post($page_def, $plugin_name);
include '../../../include/header.php';
config_gen_setup_html($page_def, $plugin_name, $upload_status, $plugin_page_heading);
include '../../../include/footer.php';
