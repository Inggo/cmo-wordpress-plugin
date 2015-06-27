<?php
/*
Plugin Name: CMO Form Shortcode
Description: Adds the [cmo_form] shortcode to display the CMO form
Version:     1.0
Author:      Inggo Espinosa
Author URI:  http://nyo.me
License:     MIT
Text Domain: cmo-form-shortcode
*/
defined('ABSPATH') or die();

/**
 * Define the [cmo_form] shortcode
 * @param  array   $atts  Array of shortcode attributes
 * @return string         HTML of the CMO form
 */
function cmo_wordpress_shortcode($atts)
{
    $a = shortcode_atts(array(
        'layout' => 'minimum',
        'action' => 'http://www.coachres.com/CMO_BelleVue/Client/Integration/Default.aspx',
        'vehicle_types' => 'AirExec,Car,Disability,Exec,Midi,Mini,Standard',
        'delimiter' => ',',
    ), $atts);

    $full = $a['layout'] == 'full' ? true : false;
    $vehicle_types = explode($a['delimiter'], $a['vehicle_types']);

    ob_start();
    include(sprintf("%s/cmo-form-view.php", dirname(__FILE__)));
    $form = ob_get_contents();
    ob_end_clean();

    return $form;
}
add_shortcode('cmo_form', 'cmo_form_shortcode');
