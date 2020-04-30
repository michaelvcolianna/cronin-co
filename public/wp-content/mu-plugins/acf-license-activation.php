<?php

/*
  Plugin Name: ACF License Activation
  Plugin URI: https://www.cronin-co.com
  Description: Provides a filter to add the license key to wp-config.php
  Version: 0.1
  Author: MVC
  Author URI: https://colianna.net
*/

/**
 * ACF Activation
 *
 * Automatically applies the Cronin ACF license so it doesn't mess up across
 * dev/prod boxes.
 *
 * @example wp-config.php: define('ACF_PRO_LICENSE', 'key');
 */
function acf_pro_license_option($pre)
{
    if(!defined('ACF_PRO_LICENSE') || empty(ACF_PRO_LICENSE))
    {
        return $pre;
    }

    $data = [
        'key' => ACF_PRO_LICENSE,
        'url' => home_url(),
    ];

    return base64_encode(serialize($data));
}
add_filter('pre_option_acf_pro_license', 'acf_pro_license_option');
