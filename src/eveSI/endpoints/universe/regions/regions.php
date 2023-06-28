<?php
namespace eveSI\endpoints\universe\regions;

Class regions extends eveSI{
    protected functions identifier($region_id = null){
        if ($region_id !==null){
            return "universe/regions";
        }else{
            return "universe/regions/{$region_id}";
        }
    }
}
?>