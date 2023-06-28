<?php
namespace eveSI\endpoints\opportunities;

Class opportunitites{
    public $groups;
    public $tasks;

    protected function identifier(){
        $this->groups = new eveSI\endpoints\opportunities();
        $this->tasks = new eveSI\endpoints\tasks();
    }
}
?>
