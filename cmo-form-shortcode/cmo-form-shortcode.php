<?php
/*
Plugin Name: CMO Form Shortcode
Description: Adds the [cmo_form] shortcode to display the CMO form and handles the response accordingly.
Version:     1.2
Author:      Inggo Espinosa
Author URI:  http://nyo.me
License:     MIT
Text Domain: cmo-form-shortcode
*/
defined('ABSPATH') or die();

define('CMO_PLUGIN_VERSION', '1.1');

/**
 * 1. Handle all post data and store to global $cmo_response variable
 * 2. Register stylesheet to be used
 */
function cmo_form_init()
{
    global $cmo_response;
    $cmo_response_names = array(
        'Error',
        'QuotationID',
        'LocationReference',
        'SendQuotationEmail',
        'QuotationClientID',
        'ClientTitle',
        'Initials',
        'Surname',
        'Firstname',
        'Salutation',
        'Department',
        'Company',
        'Address1',
        'Address2',
        'Address3',
        'Address4',
        'PostcodeZipcode',
        'International',
        'TelNo',
        'FaxNo',
        'Email',
        'Description',
        'StartDateTime',
        'PositionDateTime',
        'PickupDateTime',
        'PickupLatitude',
        'PickupLongitude',
        'Pickup',
        'PickupInstructions',
        'SingleJourney',
        'VehicleToStay',
        'DestinationLatitude',
        'DestinationLongitude',
        'Destination',
        'DestinationInstructions',
        'ArrivalDateTime',
        'LeaveDateTime',
        'BackDateTime',
        'FinishDateTime',
        'Passengers',
        'Distance',
        'EmptyDistance',
        'ClientReference1',
        'ClientReference2',
        'Route',
        'FurtherRequirements',
        'Code1',
        'Code2',
        'Code3',
        'Code4',
        'Code5',
        'Notes',
        'Quantity',
        'Seats',
        'VehicleType',
    );
    foreach ($cmo_response_names as $key) {
        if (array_key_exists($key, $_POST)) {
            $cmo_response[$key] = sanitize_text_field($_POST[$key]);
        } else {
            $cmo_response[$key] = '';
        }
    }
    wp_register_style('cmo-form-style', plugins_url('style.css', __FILE__), CMO_PLUGIN_VERSION);
}
add_action('init', 'cmo_form_init');

/**
 * Define the [cmo_form] shortcode
 * @param  array   $atts  Array of shortcode attributes
 * @return string         HTML of the CMO form
 */
function cmo_form_shortcode($atts)
{
    $a = shortcode_atts(array(
        'layout' => 'minimum',
        'action' => 'http://www.coachres.com/CMO_BelleVue/Client/Integration/Default.aspx',
        'vehicle_types' => 'AirExec,Car,Disability,Exec,Midi,Mini,Standard',
        'vehicle_values' => '',
        'delimiter' => ',',
        'success_message' => 'Your Quotation has been created!',
        'view' => 'cmo-form-view.php',
    ), $atts);

    $cmo_layout_full = $a['layout'] == 'full' ? true : false;
    $cmo_vehicle_types = explode($a['delimiter'], $a['vehicle_types']);
    $cmo_vehicle_values = $a['vehicle_values'] ?
        explode($a['delimiter'], $a['vehicle_values']) :
        $cmo_vehicle_types;

    ob_start();
    include(sprintf("%s/%s", dirname(__FILE__), $a['view']));
    $form = ob_get_contents();
    ob_end_clean();

    return $form;
}
add_shortcode('cmo_form', 'cmo_form_shortcode');

/**
 * Enqueue the stylesheet only if the shortcode is used
 */
function cmo_form_shortcode_styles()
{
    global $post;
    if (is_a($post, 'WP_Post') &&
            (has_shortcode($post->post_content, 'cmo_form') ||
            has_shortcode($post->post_content, 'cmo_success') ||
            has_shortcode($post->post_content, 'cmo_error'))) {
        wp_enqueue_style('cmo-form-style');
    }
}
add_action('wp_enqueue_scripts', 'cmo_form_shortcode_styles');

/**
 * Define the [cmo_success] shortcode
 * @param  array   $atts  Array of shortcode attributes
 * @return string         HTML of the CMO success response
 */
function cmo_success_shortcode($atts)
{
    $a = shortcode_atts(array(
        'success_message' => 'Your Quotation has been created!',
    ), $atts);

    ob_start();
    include(sprintf("%s/cmo-success-view.php", dirname(__FILE__)));
    $response = ob_get_contents();
    ob_end_clean();

    return $response;
}
add_shortcode('cmo_success', 'cmo_success_shortcode');

/**
 * Define the [cmo_error] shortcode
 * @param  array   $atts  Array of shortcode attributes
 * @return string         HTML of the CMO error response
 */
function cmo_error_shortcode($atts)
{
    $a = shortcode_atts(array(
        'success_message' => 'Your Quotation has been created!',
    ), $atts);

    ob_start();
    include(sprintf("%s/cmo-error-view.php", dirname(__FILE__)));
    $response = ob_get_contents();
    ob_end_clean();

    return $response;
}
add_shortcode('cmo_error', 'cmo_error_shortcode');
