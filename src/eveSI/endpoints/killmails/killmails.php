<?php
namespace eveSI\endpoints\killmails;

Class killmails extends eveSI{
    protected function identifier($killmail_id, $killmail_hash){
        return "killmails/{$killmail_id}/{$killmail_hash}";
    }
}
?>
