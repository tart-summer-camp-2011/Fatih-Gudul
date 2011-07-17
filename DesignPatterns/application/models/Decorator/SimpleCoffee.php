<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_Decorator_SimpleCoffee implements Model_Decorator_CoffeeInterface
{
    
    public function getCost()
    {
    return 3;    
    }
    
    public function getIngredients()
    {
        return "coffee";
    }
        
}
?>
