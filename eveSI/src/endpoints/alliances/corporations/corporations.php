<?php
namespace eveSI\endpoints\alliances\corporations;

Class corporations extends eveSI{   
    protected function identifier($id) {
        return "alliances/{$id}/corporations";
    }
}
?>
