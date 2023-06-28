<?php
namespace eveSI\endpoints\universe\moons;

Class moons extends eveSI{
    protected fucntion identifer($moon_id){
        return "universe/moons/{$moon_id}";
    }
}
?>