<?php
Class characters_bookmarks_endpoints{
    public $bookmarks;
    public $folders;
    
    private function __construct(){
        $this->bookmarks = new characters_bookmarks;
        $this->folders = new characters_bookmarks_folders;
    }
    
}
?>