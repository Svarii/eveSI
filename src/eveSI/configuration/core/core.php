<?php
namespace eveSI\configuration\core;

/**
 * Class ApplicationConfiguration
 *
 * Manages application configuration settings.
 */
//TODO: Create an install.php file that loads a GUI for the user to create a configuration file that is written to the drive.
//          Then modify this code to check for a configuration file and load that if it exists.
Class core{
    /**
     * Retrieves the application configuration.
     *
     * @return array The application configuration.
     */
    public static function getApplicationConfiguration(): array
    {
        //TODO:: Load Values from file if config file that holds only config values
        return [
            'CLIENT_ID' => '{YOUR_CLIENT_ID}', // The Client ID generated when registering an Eve Online Application
            'SECRET_KEY' => '{SECRET_KEY}', // The Secret Key generated when registering an Eve Online Application
            'CALLBACK_URI' => '{CALLBACK_URI}', // The URI of the application's authorization handler
            'BASE_URI' => 'https://esi.evetech.net', // The Base URI of the Eve Swagger Interface
            'IMAGESERVER' => 'https://images.evetech.net', // The Base URI of the Eve Online CDN Image Server
            'VERSION' => 'latest', // The version of the API to use (e.g., "latest", "v1.5", etc.)
            'DATASOURCE' => 'tranquility', // The server to pull data from ("tranquility" -> Live Server, "singularity" -> Test Server)
            'LANGUAGE' => 'en-US', // The language to use (e.g., "en-US", "fr-FR", etc.)
            'ENABLE_SSL' => false, // Used to disable SSL in cURL during development (true -> Production, false -> Development Only)
            'ENABLE_DEBUG' => false, // Used to enable debugging output for the developer (true -> Development Only, false -> Production)
            //'SWAGGER_JSON' => 'https://esi.evetech.net/latest/swagger.json', // The URI to the location of the Eve Online ESI swagger.json file
        ];
    }
}
?>
