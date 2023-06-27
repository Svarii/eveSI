<?php
namespace eveSI\endpoints\alliances;

Class alliances{
    public $all;
    public $contacts;
    public $corporations;
    public $icons;
    public $information;
    
    public funcion __construct(){
        $this->all = new eveSI\endpoints\alliances\all();
        $this->contacts = new eveSI\endpoints\alliances\contacts();
        $this->corporations = new eveSI\endpoints\alliances\corporations();
        $this->icons = new eveSI\endpoints\alliances\icons();
        $this->information = new eveSI\endpoints\alliances\information();
    }
}
?>