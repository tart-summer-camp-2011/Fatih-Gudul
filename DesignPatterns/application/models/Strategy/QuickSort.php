<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_Strategy_QuickSort implements Model_Strategy_StrategyInterface
{
    function sort($array) {
    if(count($array) < 2) return $array;
 
    $left = $right = array();
 
    reset($array);
    $pivot_key = key($array);
    $pivot = array_shift($array);
 
    foreach($array as $k => $v) {
        if($v < $pivot)
            $left[$k] = $v;
        else
            $right[$k] = $v;
    }
 
    return array_merge($this->sort($left), array($pivot_key => $pivot), $this->sort($right));
    }
}
?>
