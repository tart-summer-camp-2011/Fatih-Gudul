<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_Decorator_Cream extends Model_Decorator_DecoratorAbstract
{
    public function __construct(Model_Decorator_CoffeeInterface $coffee) {
        parent::__construct($coffee);
    }
    

    public function getCost() {
        return parent::getCost() + 0.6;
    }
    
    public function getIngredients() {
        parent::getIngredients().$this->_seperator."Cream";
    }
}
?>
