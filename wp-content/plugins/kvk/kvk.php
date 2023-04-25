<?php
/**
 * Plugin Name: KVK
 * Plugin URI: 
 * Description: Test the KVK API
 * Version: Test
 * Author: Ronald Dijkstra
 * Author URI: https://github.com/RonaldDijkstra
 * License: 
 */

// Note: variable for the api key needs to be in an env var
// for speed i just made sure it works 
// the ssl verify + local ssl verify settings are security risks, which should not be used in prod 
// but again, for speed i just made sure it works

// Highly unrecommended 
add_filter( 'https_ssl_verify', '__return_false' );
add_filter( 'https_local_ssl_verify', '__return_false' );

function get_kvk_data()
{
    // Make a request to the API using the WordPress HTTP API
    $response = wp_remote_get( 'https://api.kvk.nl/test/api/v1/zoeken?apikey=l7xx1f2691f2520d487b902f4e0b57a0b197' );

    // Check for errors
    if ( is_wp_error( $response ) ) {
        return $response;
    }

    // Get the response body as a string
    $data = wp_remote_retrieve_body( $response );

    // Decode the JSON data
    $data = json_decode( $data );

    return $data;
}

function get_kvk_owner($kvkNummer)
{
    // Make a request to the API using the WordPress HTTP API
    $response = wp_remote_get( 'https://api.kvk.nl/test/api/v1/basisprofielen/' . $kvkNummer . '/eigenaar?apikey=l7xx1f2691f2520d487b902f4e0b57a0b197' );

    // Check for errors
    if ( is_wp_error( $response ) ) {
        return $response;
    }

    // Get the response body as a string
    $data = wp_remote_retrieve_body( $response );

    // Decode the JSON data
    $data = json_decode( $data );

    return $data;
}
