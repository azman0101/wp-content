<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file. 
* Wordpress will use those functions instead of the original functions then.
*/

function clickrdv_script() {
    //get some external script that is needed for this script
    $script = get_template_directory_uri() . '/js/clickrdv.js';
    wp_register_script('clickrdvjs',
                        $script, 
                        array ('jquery', 'jquery-ui'), 
                        false, false);
    //always enqueue the script after registering or nothing will happen
    wp_enqueue_script('clickrdvjs');
     
}
add_action("wp_enqueue_scripts", "clickrdv_script");

