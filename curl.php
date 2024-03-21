<?php

    function GetGeocoding($CityName) {

        // Set API Endpoint and API Key
        $APIkey = '29605d3b90671d9340ca4a0f0f59b429';

        // Initialize curl
        $url = 'http://api.openweathermap.org/geo/1.0/direct?q='.$CityName.'&appid='.$APIkey.'';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);   

        // Set a timeout for the cURL request
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        // return the response from the server as a string instead of outputting it directly
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // avoid following redirects, if any
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);


        // Store data
        $jsonResponse = curl_exec($ch);

        // Check for curl errors
        if( curl_errno($ch) ) {
            echo 'Curl Error: '.curl_error($ch);
        }
        else {
            $jsonResponseDecoded = json_decode($jsonResponse, true);       
            if( $jsonResponseDecoded !== null ) {

                header('Content-Type: application/json');
                //echo json_encode($jsonResponseDecoded, JSON_PRETTY_PRINT);

                $Name = $jsonResponseDecoded[0]['name'];
                $State = $jsonResponseDecoded[0]['state'];
                $Country = $jsonResponseDecoded[0]['country'];
                $Lat = $jsonResponseDecoded[0]['lat'];
                $Lon = $jsonResponseDecoded[0]['lon'];
                
                $ajsonResponseDecoded = array($Name, $State, $Country, $Lat, $Lon);

                return($ajsonResponseDecoded);
            }
            else {
                echo $json;
            }
        }
        curl_close($ch);
    }
