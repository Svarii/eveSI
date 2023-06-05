<?php
namespace eveSI;

Class eveSI_endpoints{
    public $alliances;
    public $characters;
    public $coporations;
    public $dogma;
    public $fw;
    public $fleet;
    public $incursion;
    public $industry;
    public $insurance;
    public $killmails;
    public $loyalty;
    public $markets;
    public $route;
    public $sovereignty;
    public $status;
    public $opportunities;
    public $universe;
    public $ui;
    
    public function __construct(){
        $this->alliances = new alliances_endpoints;
        $this->characters = new characters_endpoints;
        $this->corporations = new corporations_endpoints;
        $this->dogma = new dogma_endpoints;
        $this->fw = new fw_endpoints();
        $this->fleet = new fleet_endpoints();
        $this->incursion = new incursion_endpoints();
        $this->industry = new industry_endpoints();
        $this->insurance = new insurance_endpoints();
        $this->killmails = new killmails_endpoints();
        $this->loyalty = new loyalty_endpoints();
        $this->markets = new markets_endpoints();
        $this->route = new route_endpoints();
        $this->opportunities = new opportunities_endpoints();
        $this->sovereignty = new sovereignty_endpoints();
        $this->status = new status_endpoints();
        $this->universe = new universe_endpoints();
        $this->ui = new ui_endpoints();
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

Class getAllAlliancesList extends eveSI{
    function getAssociativeArray() : array{
        return json_decode($this->_esiRequestHandler('alliances'), true);
    }
    function getObject() : \stdClass{
        return json_decode($this->_esiRequestHandler('alliances'), true);
    }
}
Class getAllianceCorporations extends eveSI{   
    function getAssociativeArray(string $alliance_id) : array{
        return json_decode($this->esiRequestHandler('alliances/{$alliance_id}/corporations'), true);
    }
    function getObject(string $alliance_id) : \stdClass{
        return json_decode($this->esiRequestHandler('alliances/{$alliance_id}/corporations'));
    }
}
Class getAllianceContacts extends eveSI{
    
    function getAssociativeArray(string $alliance_id) : array{
        return json_decode($this->esiRequestHandler('alliances/{$alliance_id}/contacts'), true);
    }
    function getObject(string $alliance_id) : \stdClass{
        return json_decode($this->esiRequestHandler('alliances/{$alliance_id}/contacts'));
    }
}
Class getAllianceIcon extends eveSI{
    function getAssociativeArray(string $alliance_id) : array{
        return json_decode($this->esiRequestHandler('alliances/{$alliance_id}/icons'), true);
    }
    function getObject(string $alliance_id) : \stdClass{
        return json_decode($this->esiRequestHandler('alliances/{$alliance_id}/icons'));
    }
}
Class getAllianceInformation extends eveSI{
    function getAssociativeArray(string $alliance_id) : array{
        return json_decode($this->esiRequestHandler('alliances/{$alliance_id}'), true);
    }
    function getObject(string $alliance_id) : \stdClass{
        return json_decode($this->esiRequestHandler('alliances/{$alliance_id}'));
    }
}












Class characters_assets_endpoints{
    public $locations;
    public $names;
    
    private function __construct(){
        $this->locations = new characters_assets_locations();
        $this->names = new characters_assets_names();
    }
}


Class characters_bookmarks_endpoints{
    public $bookmarks;
    public $folders;
    private function __construct(){
        $this->bookmarks = new characters_bookmarks;
        $this->folders = new characters_bookmarks_folders;
    }
    
}

Class characters_calendar_endpoints{
    public $events;
    public $calendar;
    private function __constructor(){
        $this->events = new characters_calendar_events;
        $this->calendar = new characters_calendar;
    }
}

Class characters_assets_locations extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/assets/locations", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/assets/locations", $access_token));
    }
}
Class characters_assets_names extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/assets/names", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/assets/names", $access_token));
    }
}

Class characters_agents_research extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/agents_research", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/agents_research", $access_token));
    }
}

Class characters_blueprints extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/blueprints", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/blueprints", $access_token));
    }
}

Class corporations_assets extends eveSI{
    function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/assets", $access_token), true);
    }
    function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/assets", $access_token));
    }
}

Class corporations_bookmarks extends eveSI{
    function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/bookmarks", $access_token), true);
    }
    function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/bookmarks", $access_token));
    }
}

Class characters_cspa extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/cspa", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/cspa", $access_token));
    }
}

Class characters_fatigue extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/fatigue", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/fatigue", $access_token));
    }
}

Class characters_medals extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/medals", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/medals", $access_token));
    }
}

Class characters_notifications extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/notifications", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/notifications", $access_token));
    }
}

Class characters_portraits extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/portrait", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/potrait", $access_token));
    }
}

Class characters_roles extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/roles", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/roles", $access_token));
    }
}

Class characters_standings extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/standings", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/standings", $access_token));
    }
}

Class characters_titles extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/titles", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/titles", $access_token));
    }
}

Class characters_affiliation extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/affiliation", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/affiliation", $access_token));
    }
}

Class characters_clones extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/clones", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/clones", $access_token));
    }
}

Class characters_implants extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/implants", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/implants", $access_token));
    }
}

Class characters_contacts extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/contacts", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/contacts", $access_token));
    }
}

Class characters_contracts extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/contracts", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/contracts", $access_token));
    }
}

Class characters_fleet extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/fleet", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/fleet", $access_token));
    }
}

Class characters_mining extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/mining", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/mining", $access_token));
    }
}

Class characters_location extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/location", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/location", $access_token));
    }
}

Class characters_online extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/online", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/online", $access_token));
    }
}


Class characters_ship extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/ship", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/ship", $access_token));
    }
}

Class characters_loyalty extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/loyalty", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/loyalty", $access_token));
    }
}

Class characters_mail extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/mail", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/mail", $access_token));
    }
}

Class characters_orders extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/orders", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/orders", $access_token));
    }
}

Class characters_opportunities extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/opportunities", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/opportunities", $access_token));
    }
}

Class characters_planets extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/planets", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/planets", $access_token));
    }
}

Class characters_search extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/search", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/search", $access_token));
    }
}

Class characters_attributes extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/fatigue", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/fatigue", $access_token));
    }
}

Class characters_skills extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/skills", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/skills", $access_token));
    }
}

Class characters_wallet extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/wallet", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/wallet", $access_token));
    }
}

Class characters_killmails extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/killmails", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/killmails", $access_token));
    }
    //->recent required?
}

Class characters_corporationhistory extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/corporationhistory", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/corporationhistory", $access_token));
    }
}

Class characters_bookmarks extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/bookmarks", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/bookmarks", $access_token));
    }
}
Class characters_bookmarks_folders extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/bookmarks/folders", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/bookmarks/folders", $access_token));
    }
}
Class characters_calendar extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/caldendar", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/calendar", $access_token));
    }
}

Class characters_calendar_events extends eveSI{
    public $attendees;
    private function __construct(){
        $this->attendees = new characters_calendar_events_attendees;
    }
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/caldendar/events", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/calendar/events", $access_token));
    }
    function putEventResponse($character_id, $access_token, $body){
        
            if (json_decode($this->_esiRequestHandler("characters/{$character_id}/calendar/events", $access_token, 'PUT', $body))){
                return true;    
            }else{ return false;}            
    }
}

Class characters_calendar_events_attendees extends eveSI{
    function getAssociativeArray($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/caldendar/events/attendees", $access_token), true);
    }
    function getObject($character_id, $access_token){
        return json_decode($this->_esiRequestHandler("characters/{$character_id}/calendar/events/attendees", $access_token));
    }
}


Class characters_information{
    public function getAssociativeArray($character_id){
        return json_decode($this->_esiRequestHandler("characters/{character_id}"), true);
    }
    public function getObject($character_id){
        return json_decode($this->_esiRequestHandler("characters/{character_id}"));
    }
}

Class corporations_contacts{
    public $labels;    
    
    private function __construct(){
        $this->labels = new corporations_contacts_labels;  
    }
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/contacts"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/contacts"));
    }
    
}
Class corporations_contacts_labels{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/contacts/labels"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/contacts/labels"));
    }
}

Class corporations_contracts{
    public $bids;
    public $items;
    
    private function __construct(){
        $this->bids = new corporations_contracts_bids;
        $this->items = new corporations_contracts_items;
    }
    
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/contracts"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/contracts"));
    }
}

Class corporations_alliancehistory{
    public function getAssociativeArray($corporation_id){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/alliancehistory"), true);
    }
    public function getObject($corporation_id){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/alliancehistory"));
    }
}

Class corporations_blueprints{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/blueprints"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/blueprints"));
    }
}

Class corporations_containers{
    public $logs;
    
    private function __construct(){
        $this->logs = new corporations_containers_logs;
    }
}

Class corporations_divisions{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/divisions"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/divisions"));
    }
}

Class corporations_facilities{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/facilities"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/facilities"));
    }
}

Class corporations_icons{
    public function getAssociativeArray($corporation_id){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/icons"), true);
    }
    public function getObject($corporation_id){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/icons"));
    }
}

Class corporations_medals{
    public $issued;
    private function __construct(){
        $this->issued = new corporations_medals_issued;
    }
    
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/medals"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/medals"));
    }
}

Class corporations_medals_issued{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/medals/issued"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/medals/issued"));
    }
}

Class corporations_members{
    public $limit;
    public $titles;
    private function __construct(){
        $this->limit = new corporations_members_limit;
        $this->titles = new corporations_members_titles;
    }
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/members"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/members"));
    }
}

Class corporations_memberstracking{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/memberstracking"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/memberstracking"));
    }
}

Class corporations_roles{
    public $history;
    private function __construct(){
        $this->history = new corporations_roles_history;
    }
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/roles"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/roles"));
    }
}

Class corporations_roles_history{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/roles/history"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/history"));
    }
}

Class corporations_shareholders{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/shareholders"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/shareholders"));
    }
}

Class corporations_standings{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/standings"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/standings"));
    }
}

Class corporations_starbases{
    public $details;
    private function __construct(){
        $this->details = new corporations_starbases_details;
    }
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/starbases"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/starbases"));
    }
}

Class corporations_starbases_details extends eveSI{
    public function getAssociativeArray($corporation_id, $access_token, $starbase_id){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/starbases/{$starbase_id}"), true);
    }
    public function getObject($corporation_id, $access_token, $starbase_id){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/starbases/{$starbase_id}"));
    }
}

Class corporations_structures{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/structures"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/structures"));
    }
}

Class corporations_titles{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/titles"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/titles"));
    }
}

Class npccorps{
    public function getAssociativeArray(){
        return json_decode($this->_esiRequestHandler("corporations/npccorps"), true);
    }
    public function getObject(){
        return json_decode($this->_esiRequestHandler("corporations/npccorps"));
    }
}

Class corporations_fw{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/fw"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/fw"));
    }
}

Class corporations_mining{
    public $extractions;
    public $observers;
    private function __construct(){
        $this->extractions = new corporations_mining_extractions;
        $this->observers = new corporations_mining_observers;
    }
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/mining"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/mining"));
    }
}

Class corporations_mining_extractions{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/mining/extractions"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/mining/extractions"));
    }
}

Class corporations_mining_observers{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/mining/observers"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/mining/observers"));
    }
}

Class corporations_industry{
    public $industry;
    private function __construct(){
        $this->industry = new corporations_industry_jobs;
    }
}

Class corporations_industry_jobs{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/industry/jobs"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/industry/jobs"));
    }
}

Class corporations_killmails{
    public $killmails;
    private function _construct(){
        $this->killmails = new corporations_killmails_recent;
    }
}

Class corporations_killmails_recent{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/killmails/recent"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/killmails/recent"));
    }
}

Class corporations_orders{
    public $history;
    private function __contruct(){
        $this->history = new corporations_orders_history;
    }
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/orders"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/orders"));
    }
}

Class corporations_orders_history{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/orders/history"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/orders/history"));
    }
}

Class corporations_customsOffices{
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/customs_offices"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/customs_offices"));
    }
}

Class corporations_wallets{
    public $journal;
    public $transactions;
    private function __construct(){
        $this->journal = new corporations_wallets_journal;
        $this->transactions = new corporations_wallets_transactions;
    }
    public function getAssociativeArray($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/wallets"), true);
    }
    public function getObject($corporation_id, $access_token){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/wallets"));
    }
}

Class corporations_wallets_journal{
    public function getAssociativeArray($corporation_id, $access_token, $division){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/wallets/{$division}/journal"), true);
    }
    public function getObject($corporation_id, $access_token, $division){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/wallets/{$division}/journal"));
    }
}

Class corporations_wallets_transactions{
    public function getAssociativeArray($corporation_id, $access_token, $division){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/wallets/{$division}/transactions"), true);
    }
    public function getObject($corporation_id, $access_token, $division){
        return json_decode($this->_esiRequestHandler("corporations/{$corporation_id}/wallets/{$division}/transactions"));
    }
}
?>
