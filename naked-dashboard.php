<?php

/**
 * Plugin Name: Naked Dashboard
 * Description: Removes all dashboard widgets, with exceptions.
 * Version: 1.0.0
 * Plugin URI: https://github.com/Brugman/naked-dashboard
 * Author: Tim Brugman
 * Author URI: https://timbr.dev
 * Text Domain: naked-dashboard
 */

if ( !defined( 'ABSPATH' ) )
    exit;

add_action( 'wp_dashboard_setup', function () {

    $exceptions = [
        'dashboard_site_health',
        // 'dashboard_right_now',
        // 'dashboard_activity',
        // 'dashboard_quick_press',
        // 'dashboard_primary',
    ];

    global $wp_meta_boxes;

    foreach ( $wp_meta_boxes['dashboard'] as $location => $mb_group_a )
        foreach ( $mb_group_a as $k => $mb_group_b )
            foreach ( $mb_group_b as $mb )
                if ( !in_array( $mb['id'], $exceptions ) )
                    remove_meta_box( $mb['id'], 'dashboard', $location );
}, 999 );

