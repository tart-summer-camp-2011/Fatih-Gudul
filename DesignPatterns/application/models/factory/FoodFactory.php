<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_Factory_FoodFactory
{
    function _construct()
    {
        
    }
    
    public static function sendFood($param)
    {
    switch ($param){
        case Model_Factory_FoodConstant::FOOD_PIZZA;
            return new Model_Factory_DominosPizza();
            break;
        case Model_Factory_FoodConstant::FOOD_MANTI;
            return new Model_Factory_Manti();
            break;
        case Model_Factory_FoodConstant::FOOD_MUHALLEBI;
            return new Model_Factory_Muhallebi();
            break;
    }
        
    } 
}
?>
