<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_Decorator_Milk extends Model_Decorator_DecoratorAbstract
{
    public function __construct(Model_Decorator_CoffeeInterface $coffee) {
        parent::__construct($coffee);
    }
    
    public function getCost() {
        return parent::getCost() + 0.5;
    }
    
    public function getIngredients() {
        parent::getIngredients().$this->_seperator."Milk";
    }
    
}

?>
