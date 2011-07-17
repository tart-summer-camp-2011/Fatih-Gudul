<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */ 
class Model_Decorator_DecoratorAbstract implements Model_Decorator_CoffeeInterface
{
    protected $_coffee;
    protected $_seperator = ", ";


    public function __construct(Model_Decorator_CoffeeInterface $coffee)
    {
        
        $this->_coffee = $coffee;
        
    }
    
    public function getCost()
    {
        return $this->_coffee->getCost();
    }
    
    public function getIngredients()
    {
        return $this->_coffee->getIngredients();
    }
}
?>
