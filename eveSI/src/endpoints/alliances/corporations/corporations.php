<?php
namespace eveSI\endpoints\alliances\corporations;

Class corporations extends convertAPIData{   
    protected function identifier($id) {
        return "alliances/{$id}/corporations";
    }
}
?>
