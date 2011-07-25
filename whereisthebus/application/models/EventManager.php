<?php
/**
 * Description of EventManager
 * @author fth
 */
class Model_EventManager {
    private $_eventCallbacks = array();
    private $_subscribers = array();
    
    function registerEventCallback($callback) {
        $this->_callbacks[] = $callback;
    }
    
    public function publish($event){
            $callbacks = $this->subscribers[$event->getHead->getName];
            
            foreach($this->callbacks as $this->callback){
            $this->callback(event);
            }
    }  
}

?>
