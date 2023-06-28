<?php
namespace eveSI\endpoitns\route;

Class route{
    protected function identifier($origin, $destination){
        return "route/{$origin}/{$destination}";
    }
}
?>
