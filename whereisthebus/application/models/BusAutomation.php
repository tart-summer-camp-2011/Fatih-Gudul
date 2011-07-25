<?php

class Model_BusAutomation
{
    private $_busStopArray = array("Taksim","Dolmabahce","Besiktas","Ortakoy","Bebek");
    private $_oldStop;
    private $_newStop;

    public function __construct() {
        ;
    }

    public function stopChange()
    {
        $this->setOldStop();
        $this->setNewStop($newStop);
    }
    
    public function setOldStop()
    {
        $this->_oldStop = $this->_newStop;       
    }
    
    public function setNewStop($newStop)
    {
        $this->_newStop = $newStop;
    }
}
?>
