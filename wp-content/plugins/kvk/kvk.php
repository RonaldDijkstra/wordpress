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

 
 function get_kvk_data()
 {
    // $apikey = 'l7xx1f2691f2520d487b902f4e0b57a0b197'; // TODO: Move to env var
    $rest_api_url = 'https://api.kvk.nl/test/api/v1/zoeken?apikey=l7xx1f2691f2520d487b902f4e0b57a0b197';

    $curl = curl_init();

    // Set the URL and other curl options
    curl_setopt_array($curl, array(
        CURLOPT_URL => $rest_api_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYHOST => false, // TODO: Fix this stupid danger later!!
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
    ));

    // Send the request and get the response
    $response = curl_exec($curl);
    $error = curl_error($curl);

    // Close the curl session
    curl_close($curl);

    // If there was an error, return it
    if ($error) {
        return "Error: " . $error;
    }

    // Decode the JSON response
    $data = json_decode($response, true);

    // Get the results array
    $results = $data['resultaten'];

    // Return the results
    return $results;
 }