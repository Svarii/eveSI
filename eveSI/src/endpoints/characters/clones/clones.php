<?php
namespace eveSI\endpoints\characters\clones;

Class clones extends eveSI{
    protected function identifier($id) {
        return "characters/{$id}/clones";
    }
}
?>