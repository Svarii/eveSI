<?php
namespace eveSI\endpoints\ui\openwindow;

Class openwindow extends eveSI{
    public $contract;
    public $information;
    public $marketdetails;
    public $newmail;

    Class openwindow extends eveSI{
        $this->contract = new eveSI\endpoints\ui\openwindow\contract();
        $this->information = new eveSI\endpoints\ui\openwindow\information();
        $this->marketdetails = new eveSI\endpoints\ui\openwindow\marketdetails();
        $this->newmail = new eveSI\endpoints\ui\openwindow\newmail();
    }
}
?>