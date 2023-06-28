<?php
namespace eveSI\endpoints\industry;

Class industry{
    public $facilities;
    public $systems;    

    public function __construct(){
        $this->facilities = new eveSI\industry\facilities();
        $this->systems = new eveSI\industry\systems();    
    }
}
?>
