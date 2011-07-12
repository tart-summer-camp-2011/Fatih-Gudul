<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class TestController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $this->view->test = 10;
    }
    
    public function testAction()
    {
        echo '12345';
    }
}
?>
