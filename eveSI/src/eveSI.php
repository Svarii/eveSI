<?php
/**
 * @var eveSI
 * @author Svarii
 * @desc A PHP wrapper for the Eve Swagger Interface API<br/>
            Endpoints Included: All (I think, as of 06/05/2023)<br/>
            eTag Compliance: No, Addition Planned
            cache-Control Compliance: No, Addition Planned
            error checking: Virtually none, Planned addition during marjor refactoring
            composer?  Nope, I'll look into this.
            docker?  Nope, sounds cool though, I'll have to check it out.
            PHPDocs: Yes
            PlantUML: Yes
            gitHub Wiki: Yes
 */
namespace eveSI;

// Application Settings
require_once('config/core.php');

// Use constants defined in config/core.php
use const eveSI\BASEURI; 
use const eveSI\DATASOURCE;
use const eveSI\LANGUAGE;
use const eveSI\VERSION;

use const eveSI\CLIENT_ID;
use const eveSI\SECRET_KEY;
use const eveSI\ENABLE_SSL;
use const eveSI\IMAGESERVER;
use const eveSI\ENABLE_DEBUG;
use const eveSI\SWAGGER_JSON;

// Endpoint connectors
require('endpoints/_endpoints.php');

//Abstraction
require('convertAPIData.php');

Class eveSI{
    protected function _esiRequestHandler($endpoint, $access_token = null, $method = 'GET', $body = null, $version = VERSION, $datasource = DATASOURCE, $base_uri = BASEURI):string{
        
        //These checks are in place to compensate for the possible absesnce of a /config/core.php file
        //All of these constant variables should be defined in the constants.php file
        //BASEURI
        //USERAGENT
        //VERSION
        //DATASOURCE
        //ENABLE_SSL
        //This block of code is only here to ensure functionality of the _esiRequestHandler remains constant at its base level
        if (!defined('BASEURI')){
            $base_uri = "https://esi.evetech.net";
        } else {
            $base_uri = BASEURI;
        }
        if (!defined('USERAGENT')) {
            $useragent = "{eveSI || https://github.com/Svarii/eveSI}";
        } else {
            $useragent = USERAGENT;
        }
        if (!defined('VERSION')){
            $version = 'latest';
        } else {
            $version = VERSION;
        }
        if($defined('DATASOUCE')){
            $datasource = 'tranquility';
        } else {
            $datasource = DATASOURCE;
        }
        if($defined('ENABLE_SSL')){
            $datasource = true';
        } else {
            $datasource = ENABLE_SSL;
        }                
       
        $esiURI = "{$base_uri}/{$version}/{$endpoint}/?datasource={$datasource}";      
        $ch = curl_init();
        $headers = array();
        $headers[] = 'Accept: application/json';
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Accept-Language: ' . LANGUAGE;
        
        if ($access_token) {
            $headers[] = 'Authorization: Bearer ' . $access_token;
        }
        
        curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
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
        //file_put_contents('results_esiRequestHandler.log', $result);
        
        if (curl_errno($ch)) {
            $error_message = curl_error($ch);
            $error_code = curl_errno($ch);
            $error_details = curl_getinfo($ch);
            
            $errorLog = 'Error Code: ' . $error_code . PHP_EOL;
            $errorLog .= 'Error Message: ' . $error_message . PHP_EOL;
            $errorLog .= 'Error Details: ' . print_r($error_details, true) . PHP_EOL;
            file_put_contents('errors_esiRequestHandler.log', $error_log);
        }
        
        // Return headers separately from the Response Body
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $headers = substr($result, 0, $header_size);
        $body = substr($result, $header_size);
        $_SESSION['_esiRequestHandlerResponseHeaders'] = $headers; //TODO: Parse into something you can use.
        
        curl_close($ch);
        
        return $body;
    }
}
?>
