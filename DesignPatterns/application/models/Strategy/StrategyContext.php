<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_Strategy_StrategyContext
{
    private $_sorter;
    
    public function __construct($type) {
        switch ($type){
           case 'quick':
            $this->_sorter = new Model_Strategy_QuickSort();
            return $this->_sorter;
            break;
            case 'bubble':
            $this->_sorter = new Model_Strategy_BubbleSort;
            return $this->_sorter;
            break;
            case 'insertion':
            $this->_sorter = new Model_Strategy_InsertionSort();
            return $this->_sorter;
            break;
        }
        
    }
    
    public function sort($array)
    {
        return $this->_sorter->sort($array);
        
    }
    
}
?>
