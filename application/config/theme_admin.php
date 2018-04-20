<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* * **************
 * Theme config
 *
 */

//This is the physical path to the themes (Thanks Marcus Reinhardt & Kristories, for the Mac and Linux fix)
$config['theme_admin']['path'] = realpath(APPPATH . '../themes') . '/';

//This is the url to the themes path
$config['theme_admin']['url'] = trim(config_item('base_url'), '/ ') . '/themes/';

//This is the default theme (subfolder in the themes folder)
$config['theme_admin']['theme'] = 'adminlte'; //'default';
//This is the default layout (index: a mapping to index.php)
$config['theme_admin']['layout'] = 'template';

?>
