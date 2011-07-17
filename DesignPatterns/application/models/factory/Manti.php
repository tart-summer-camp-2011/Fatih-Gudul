<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Manti
 *
 * @author fth
 */
class Model_Factory_Manti implements Model_Factory_FoodInterface{
    //put your code here
    private $_name = "Manti";
    private $_calorie = "500";
    
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
        return $this->_calorie;
    }
}

?>
