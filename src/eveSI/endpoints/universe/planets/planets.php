<?php
namespace eveSI\endpoints\universe\planets;

Class planets extends eveSI{
    protected function identifier($planet_id){
        return "universe/planets/{$planet_id}";
    }
}
?>