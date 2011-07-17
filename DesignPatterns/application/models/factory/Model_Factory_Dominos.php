<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_Factory_Dominos implements FoodInterface{
    
    private $_name = "DominosPizza";
    private $_calorie = "2000";
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName($name)
    {
        $this->name = $name;
    }
    
    public function setName($name)
    {
        $this->_name = $name;
    }
    
    public function getName()
    {
        return $this->_name;
    }
    
    public function setCalorie ($calorie)
    {
        $this->calorie = $_calorie;
    }
    
    public function getCalorie ()
    {
        $return $this->_calorie;
    }
}
?>
