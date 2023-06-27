<?php
namespace eveSI\endpoints\loyalty;

Class loyalty{
    public $stores;
    
    public function __construct(){
        $stores = new eveSI\loyalty\stores;
    }
}
?>
