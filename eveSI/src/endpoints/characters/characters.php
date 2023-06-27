<?php
namespace eveSI\endpoints\characters;

Class _endpoints{
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
        $agents_research = new eveSI\endpoints\characters\agents_research;
        $blueprints = new eveSI\endpoints\characters\blueprints;
        $corporationhisotry = new eveSI\endpoints\characters\corporationhistory;
        $cspa = new eveSI\endpoints\characters\cspa;
        $fatigue = new eveSI\endpoints\characters\fatigue;
        $medals = new eveSI\characters\medals;
        $notifications = new eveSI\characters\notifications;
        $portrait = new eveSI\characters\portrait;
        $roles = new eveSI\characters\roles;
        $standings = new eveSI\characters\standings;
        $titles = new eveSI\characters\titles;
        $affiliation = new eveSI\characters\affiliation;
        $assets = new eveSI\characters\assets;
        $bookmarks = new eveSI\characters\bookmarks;
        $calendar = new eveSI\characters\calendar;
        $clones = new eveSI\characters\clones;
        $implants = new eveSI\characters\implants;
        $contacts = new eveSI\characters\contacts;
        $contracts = new eveSI\characters\contracts;
        $fittings = new eveSI\characters\fittings;
        $fleet = new eveSI\characters\fleet;
        $industry = new eveSI\characters\industry;
        $mining = new eveSI\characters\mining;
        $facilities = new eveSI\characters\facilities;
        $killmails = new eveSI\characters\killmails;
        $locations = new eveSI\characters\locations;
        $online = new eveSI\characters\online;
        $ship = new eveSI\characters\ship;
        $loyalty = new eveSI\characters\loyalty;
        $mail = new eveSI\characters\mail;
        $orders = new eveSI\characters\orders;
        $opportunities = new eveSI\characters\opportunities;
        $planets = new eveSI\characters\planets;
        $search = new eveSI\characters\search;
        $skillqueue = new eveSI\characters\skillqueue;
        $skills = new eveSI\characters\skills;
        $wallet = new eveSI\characters\wallet;
    }
}
?>