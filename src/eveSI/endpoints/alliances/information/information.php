<?php
namespace eveSI\endpoints\alliances\information;

Class information extends eveSI{   
    protected function identifier($id) {
        return "alliances/{$id}";
    }
}
?>
