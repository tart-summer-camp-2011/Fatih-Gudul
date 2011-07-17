<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_Singleton_RegistrySingleton
{
    private static $instance = NULL;
    
    private function __construct() {

    }
    
    public static function getInstance()
    {
        if(self::$instance == NULL){
            self::$instance = new Model_Singleton_RegistrySingleton();
        }
        
        return self::$instance; 
    }
    
    public function getMuzluSut()
    {
        return "Sut dedigin muzlu olmaz!";
    }
}
?>
