<?php
namespace eveSI\endpoints\characters;

Class characters{
    public $agents_research;
    public $blueprints;
    public $corporationhistory;
    public $cspa;
    public $fatigue;
    public $medals;
    public $notifications;
    public $portrait;
    public $roles;
    public $standings;
    public $titles;
    public $affiliation;
    public $assets;
    public $bookmarks;
    public $calendar;
    public $clones;
    public $implants;
    public $contacts;
    public $contracts;
    public $fitings;
    public $fleet;
    public $industry;
    public $mining;
    public $facilities;
    public $killmails;
    public $locaions;
    public $online;
    public $ship;
    public $loyalty;
    public $mail;
    public $orders;
    public $opportunities;
    public $planets;
    public $search;
    public $attributes;
    public $skillqueue;
    public $skills;
    public $wallet;

    public function __construct(){
        $this->agents_research = new eveSI\endpoints\characters\agents_research();
        $this->$blueprints = new eveSI\endpoints\characters\blueprints();
        $this->corporationhisotry = new eveSI\endpoints\characters\corporationhistory();
        $this->cspa = new eveSI\endpoints\characters\cspa();
        $this->fatigue = new eveSI\endpoints\characters\fatigue();
        $this->medals = new eveSI\characters\medals();
        $this->notifications = new eveSI\characters\notifications();
        $this->portrait = new eveSI\characters\portrait();
        $this->roles = new eveSI\characters\roles();
        $this->standings = new eveSI\characters\standings();
        $this->titles = new eveSI\characters\titles();
        $this->affiliation = new eveSI\characters\affiliation();
        $this->assets = new eveSI\characters\assets();
        $this->bookmarks = new eveSI\characters\bookmarks();
        $this->calendar = new eveSI\characters\calendar();
        $this->clones = new eveSI\characters\clones();
        $this->implants = new eveSI\characters\implants();
        $this->contacts = new eveSI\characters\contacts();
        $this->contracts = new eveSI\characters\contracts();
        $this->fittings = new eveSI\characters\fittings();
        $this->fleet = new eveSI\characters\fleet();
        this->$industry = new eveSI\characters\industry();
        $this->mining = new eveSI\characters\mining();
        $this->facilities = new eveSI\characters\facilities();
        $this->killmails = new eveSI\characters\killmails();
        $this->locations = new eveSI\characters\locations();
        $this->online = new eveSI\characters\online();
        $this->ship = new eveSI\characters\ship();
        $this->loyalty = new eveSI\characters\loyalty();
        $this->mail = new eveSI\characters\mail();
        $this->orders = new eveSI\characters\orders();
        $this->opportunities = new eveSI\characters\opportunities();
        $this->planets = new eveSI\characters\planets();
        $this->search = new eveSI\characters\search();
        $this->skillqueue = new eveSI\characters\skillqueue();
        $this->skills = new eveSI\characters\skills();
        $this->wallet = new eveSI\characters\wallet();
    }
}
?>