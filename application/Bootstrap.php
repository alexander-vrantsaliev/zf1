<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    protected function _initNavigation()
    {
        $view = $this->_getLayoutView();
        $config = new Zend_Config_Xml(APPLICATION_PATH.'/configs/navigation.xml');
     
        $navigation = new Zend_Navigation($config);
        $view->navigation($navigation);
    }
    
    protected function _initLogin()
    {
        $this->_getLayoutView()->loginForm = new Application_Form_Login();
    }
    
    private function _getLayoutView()
    {
        $this->bootstrap('layout');
        $layout = $this->getResource('layout');
        
        return $layout->getView();    
    }
    
}

