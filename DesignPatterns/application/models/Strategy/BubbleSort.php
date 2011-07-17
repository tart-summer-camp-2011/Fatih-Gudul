<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_Strategy_BubbleSort implements Model_Strategy_StrategyInterface
{
    public function sort ($items) {
     $size = count($items);
     for ($i=0; $i<$size; $i++) {
          for ($j=0; $j<$size-1-$i; $j++) {
               if ($items[$j+1] < $items[$j]) {
                   $this->arraySwap($items, $j, $j+1);
               }
          }
     }
     return $items;
     }
 
     private function arraySwap(&$arr, $index1, $index2) {
         list($arr[$index1], $arr[$index2]) = array($arr[$index2], $arr[$index1]);
     }
}
?>
