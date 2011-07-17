<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        
    }
    
    public function getfoodAction()
    {
        $food = Model_Factory_FoodFactory::sendFood(Model_Factory_FoodConstant::FOOD_MANTI);
        $this->view->assign('food',$food);
    }
    
    public function registryAction()
    {
        $register = Model_Singleton_RegistrySingleton::getInstance();
        $this->view->assign('register',$register);
    }
    
    public function getcoffeeAction()
    {
        $coffee = Model_Decorator_SimpleCoffee::getCost();
        $this->view->assign('coffee',$coffee);
    }
    
    public function sortAction()
    {
        $type1 = "quick";
        $array = array(11,4,65,8,23,46,90,78,5,22,73);
        $sort = new Model_Strategy_StrategyContext($type1);
        $result1 = $sort->sort($array);
        $this->view->assign('result1',$result1);
        $this->view->assign('type1',$type1);
        
        $type2 = "bubble";
        $array = array(11,4,65,8,23,46,90,78,5,22,73);
        $sort = new Model_Strategy_StrategyContext($type2);
        $result2 = $sort->sort($array);
        $this->view->assign('result2',$result2);
        $this->view->assign('type2',$type2);

        $type3 = "insertion";
        $array = array(11,4,65,8,23,46,90,78,5,22,27);
        $sort = new Model_Strategy_StrategyContext($type3);
        $result3 = $sort->sort($array);
        $this->view->assign('result3',$result3);
        $this->view->assign('type3',$type3);
        
        
    }


}

