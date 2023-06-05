<?php
namespace eveSI;
require_once('constants.php'); //Application Settings
use const eveSI\BASEURI; //Base URI of the Eve Swagger Interface
use const eveSI\DATASOURCE; //The server to pull the data from
use const eveSI\LANGUAGE;
use const eveSI\VERSION; //The version of the API you want to use (App wide default)
//use const eveSI\IMAGESERVER; //it unlikley we'll need a direct interface to the image server.  Use dynaic URIs pulled from the API to link images.

require('eveSI_endpoints.php'); //endpoint connectors?  FIXME: Standardize format and flow : IN Progress :  plantuml and phpdocs in continuous development


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

Class alliances_endpoints{
    private $allianceID;
    /**
     * @desc Public information about an alliance<br/><br/>->getAssociativeArray($alliance_id)<br/>->getObject($alliance_id)
     */
    public $information;
    /**  
     * @var $allianceInformation
     * @desc List all current member corporations of an alliance<br/><br/>->getAssociativeArray($alliance_id)<br/>->getObject($alliance_id)
     *
     */
    public $corporations;
    /**
     * @var $allianceIcon
     * @desc Get the icon urls for a alliance<br/><br/>->getAssociativeArray($alliance_id)<br/>->getObject($alliance_id)
     */
    public $icon;
    /**
     * @var $allAlliancesList
     * @desc List all active player alliances<br/><br/>->getAssociativeArray()<br/>->getObject()
     */
    public $listAll;
    public $contacts;
    
    private function  __construct($allianceID){
        $this->information = new getAllianceInformation;
        $this->corporations = new getAllianceCorporations;
        $this->icon = new getAllianceIcon;
        $this->allianceID = $allianceID;
        $this->listAll = new getAllAlliancesList;
        $this->contacts = new getAllianceContacts;
    }
   
}

Class characters_endpoints{
    public $assets;
    public $bookmarks;
    public $calendar;
    public $characterInformation;
    public $agentsResearch;
    public $blueprints;
    public $corporationHistory;
    public $cspa;
    public $fatigue;
    public $medals;
    public $notifications;
    public $portrait;
    public $roles;
    public $standings;
    public $titles;
    public $affiliation;
    public $clones;
    public $implants;
    public $contacts;
    public $contracts;
    public $fleet;
    public $mining;
    public $killmails;
    public $location;
    public $online;
    public $ship;
    public $loylaty;
    public $mail;
    public $orders;
    public $opportunities;
    public $planets;
    public $search;
    public $atrributes;
    public $skilqueue;
    public $skills;
    public $wallet;
    
    private function __construct(){
        $this->assets = new characters_assets_endpoints;
        $this->bookmarks = new characters_bookmarks_endpoints;
        $this->calendar = new characters_calendar_endpoints;
        $this->characterInformation = new characters_information;
        $this->agentsResearch = new characters_agents_research;
        $this->blueprints = new characters_blueprints;
        $this->corporationHistory = new characters_corporationhistory;
        $this->cspa = new characters_cspa;
        $this->fatigue = new characters_fatigue;
        $this->medals = new characters_fatigue;
        $this->notifications = new characters_notifications;
        $this->portrait = new characters_portraits;
        $this->roles = new characters_roles;
        $this->standings = new characters_standings;
        $this->titles = new characters_titles;
        $this->affiliation = new characters_affiliation;
        $this->clones = new characters_clones;
        $this->implants = new characters_implants;
        $this->contacts = new characters_contacts;
        $this->contracts = new characters_contracts;
        $this->fleet = new characters_fleet;
        $this->mining = new characters_mining;
        $this->killmails = new characters_killmails;
        $this->location = new characters_location;
        $this->online = new characters_online;
        $this->ship = new characters_ship;
        $this->loyalty = new characters_loyalty;
        $this->mail = new characters_mail;
        $this->orders = new characters_orders;
        $this->opportunities = new characters_opportunities;
        $this->planets = new characters_planets;
        $this->search = new characters_search;
        $this->atrributes = new characters_attributes;
        $this->skills = new characters_skills;
        $this->wallet = new characters_wallet;
    }
    
}

Class corporations_endpoints{
    public $assets;
    public $bookmarks;
    public $contacts;
    public $contracts;
    public $allianceHistory;
    public $blueprints;
    public $containers;
    public $divisions;
    public $facilities;
    public $icons;
    public $medals;
    public $members;
    public $membersTracking;
    public $roles;
    public $shareholders;
    public $standings;
    public $starbases;
    public $structures;
    public $titles;
    public $npcCorps;
    public $fw;
    public $mining;
    public $industry;
    public $killmails;
    public $orders;
    public $customsOffices;
    public $wallet;
    
    private function __construct(){
        $this->assets = new corporations_assets;
        $this->bookmarks = new corporations_bookmarks;
        $this->contacts = new corporations_contacts;
        $this->contracts = new corporations_contracts;
        $this->allianceHistory = new corporations_alliancehistory;
        $this->blueprints = new corporations_blueprints;
        $this->containers = new corporations_containers;
        $this->divisions = new corporations_divisions;
        $this->facilities = new corporations_facilities;
        $this->icons = new corporations_icons;
        $this->medals = new corporations_medals;
        $this->members = new corporations_members;
        $this->membersTracking = new corporations_memberstracking;
        $this->roles = new corporations_roles;
        $this->shareholders = new corporations_shareholders;
        $this->standings = new corporations_standings;
        $this->starbases = new corporations_starbases;
        $this->structures = new corporations_structures;
        $this->titles = new corporations_titles;
        $this->npCorps = new npccorps;
        $this->fw = new corporations_fw;
        $this->mining = new corporations_mining;
        $this->industry = new corporations_industry;
        $this->killmails = new corporations_killmails;
        $this->orders = new corporations_orders;
        $this->customsOffices = new corporations_customsOffices;
        $this->wallet = new corporations_wallets;
    }
}

Class dogma_endpoints{
    public $attributes;
    public $dynamic;
    public $effects;
    
    private function __construct(){
        $this->attributes = new dogma_atrributs;
        $this->dynamic = new dogma_dynamic;
        $this->efffects = new dogma_effects;
    }
}

Class fw_endpoints{
    public $leaderboards;
    public $status;
    public $systems;
    public $wars;
    
    private function __construct(){
        $this->leaderboard = new fw_leaderboards;
        $this->status = new fw_status;
        $this->systems = new fw_systems;
        $this->wars = new fw_wars;
    }
}

/**
 * @var class
 * @desc Return a list of current incursions
 *
 */
Class incursion_endpoints extends eveSI{

    function getAssociativeArray() : array{
        return json_decode($this->esiRequestHandler('incursions'), true);
    }
    function getObject() : \stdClass{
        return json_decode($this->esiRequestHandler('incursions'));
    }

}

Class industry_endpoints{
    public $facilities;
    public $systems;
    
    private function __construct(){
        $this->facilities = new industry_facilities;
        $this->systems = new industry_systems;
    }
    
}
Class insurance_endpoints{
    public $prices;
    
    private function __construct(){
        $this->prices = new insurance_prices;
    }
}

Class killmails_endpoints extends eveSI{
    function getAssociativeArray($killmail_id, $killmail_hash) : array{
        return json_decode($this->esiRequestHandler("killmails/{$killmail_id}/{$killmail_hash}"), true);
    }
    function getObject($killmail_id, $killmail_hash) : \stdClass{
        return json_decode($this->esiRequestHandler("killmails/{$killmail_id}/{$killmail_hash}"));
    }
}

Class loyalty_endpoints{
    public $stores;
    
    private function __construct(){
        $this->stores = new loyalty_stores;
    }
}

Class markets_endpoints{
    public $history;
    public $orders;
    public $types;
    public $groups;
    public $prices;
    public $structures;
    
    private function __construct(){
        $this->history = new markets_history;
        $this->orders = new markets_orders;
        $this->types = new markets_types;
        $this->types = new markets_groups;
        $this->prices = new markets_prices;
        $this->structures = new markets_structures;
    }
}

Class opportunities_endpoints{
    public $groups;
    public $tasks;
    
    private function __construct(){
        $this->groups = new opportunities_groups;
        $this->tasks = new opportunities_tasks;
    }
}

Class route_endpoints extends eveSI{
    function getAssociativeArray($origin, $destination) : array{
        return json_decode($this->esiRequestHandler("route/{$origin}/{$destination}"), true);
    }
    function getObject($origin, $destination) : \stdClass{
        return json_decode($this->esiRequestHandler("route/{$origin}/{$destination}"));
    }
}

Class sovereignty_endpoints{
    public $campaigns;
    public $map;
    public $structures;
    
    private function __construct(){
        $this->campaigns = new sovereignty_campaigns;
        $this->map = new sovereignty_map;
        $this->structures = new sovereignty_structures();
    }
}

Class status_endpoints{
    function getAssociativeArray() : array{
        return json_decode($this->esiRequestHandler('status'), true);
    }
    function getObject() : \stdClass{
        return json_decode($this->esiRequestHandler('status'));
    }
}

Class universe_endpoints{
    public $ancestries;
    public $asteroidBelts;
    public $bloodlines;
    public $categories;
    public $constellations;
    public $factions;
    public $graphics;
    public $groups;
    public $ids;
    public $moons;
    public $names;
    public $planets;
    public $races;
    public $regions;
    public $stargates;
    public $stars;
    public $stations;
    public $structures;
    public $systemJumps;
    public $systemKills;
    public $systems;
    public $types;
    
    private function __construct(){
        $this->ancestries new universe_ancestries;
        $this->asteroidBelts = new universe_asteroidBelts;
        $this->bloodlines = new universe_bloodlines;
        $this->categories = new universe_categories;
        $this->constellations = new universe_constellations;
        $this->factions = new universe_factions;
        
    }
}
//TODO: Add Class ui after testing esiRequestHandler POST method usage

Class wars_endpoints{
    
}
?>
