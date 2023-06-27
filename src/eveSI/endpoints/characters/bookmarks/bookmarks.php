<?php
namespace eveSI\endpoints\characters\bookmarks;

Class bookmarks{
    public $list;
    public $folders;
    
    private function __construct(){
        $this->list = new eveSI\characters\bookmarks\list;
        $this->folders = new eveSI\characters\bookmarks\folders;
    }
    
}
?>