<?php
/**
 * @var eveSI
 * @author Svarii
 * @desc A PHP wrapper for the Eve Swagger Interface API<br/>
            Endpoints Included: All (I think, as of 06/05/2023)<br/>
            eTag Compliance: No, Addition Planned
            cache-Control Comliance: No, Addition Planned
            error checking: Virtually none, Planned addition during marjor refactoring
            composer?  Nope, I'll look into this.
            docker?  Nope, sounds cool though, I'll have to check it out.
            PHPDocs: Yes
            PlantUML: Yes
            gitHub Wiki: Yes
 */
namespace eveSI;

// Application Settings
require_once('constants.php');

// Use constants from the Eve Swagger Interface
use const eveSI\BASEURI; 
use const eveSI\DATASOURCE;
use const eveSI\LANGUAGE;
use const eveSI\VERSION;

// Endpoint connectors
require('eveSI_endpoints.php');

Class eveSI{
    protected function _esiRequestHandler($endpoint, $access_token = null, $method = 'GET', $body = null):string{
        
        $esiURI = BASEURI . '/' . VERSION . '/' . $endpoint . '/?datasource=' . DATASOURCE;
        //$esiURI = sprintf('%s/%s/%s/?datasource=%s', BASEURI, VERSION, $endpoint, DATASOURCE);
        
       
        $ch = curl_init();
        $headers = array();
        $headers[] = 'Accept: application/json';
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Accept-Language: ' . LANGUAGE;
        
        if ($access_token) {
            $headers[] = 'Authorization: Bearer ' . $access_token;
        }
        
        curl_setopt($ch, CURLOPT_USERAGENT, "Svarii || mpeplow855@gmail.com {NEW APP || Test Application for PHP ESI Class Module Development}");
        curl_setopt($ch, CURLOPT_URL,  $esiURI);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, ENABLE_SSL);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, ENABLE_SSL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $result = curl_exec($ch);
        
        if (curl_errno($ch)) {
            $error_message = curl_error($ch);
            $error_code = curl_errno($ch);
            $error_details = curl_getinfo($ch);
            
            echo 'Error Code: ' . $error_code . PHP_EOL;
            echo $_SESSION['error_string'] = 'Error Message: ' . $error_message . PHP_EOL;
            echo 'Error Details: ' . print_r($error_details, true) . PHP_EOL;
        }
        
        // Return headers separately from the Response Body
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $headers = substr($result, 0, $header_size);
        $body = substr($result, $header_size);
        $_SESSION['comm_response_headers'] = $headers; //TODO: Parse into something you can use.
        
        curl_close($ch);
        
        return $body;
    }
}


?>
