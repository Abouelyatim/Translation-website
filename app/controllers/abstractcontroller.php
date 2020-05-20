<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\FrontController;

class AbstractController{
    
    
    protected $_controller;
    protected $_action;
    protected $_params;

    protected $_data=[];

    

    /*public function notFoundAction()
    {
        echo'not';
        $this->view();


    }*/

    public function setController ($controllerName)
    {
        $this->_controller = $controllerName;
    }

    public function setAction ($actionName)
    {
        $this->_action = $actionName;
    }

    
    public function setParams ($params)
    {
        $this->_params = $params;
    }
    
    
    
    protected function _view()
    {

        
        if($this->_action == FrontController::NOT_FOUND_ACTION)
        {
            require_once VIEWS_PATH . 'notfound' . DS . 'notfound.view.php';
        }
        else{
            $view = VIEWS_PATH . $this->_controller . DS . $this->_action . '.view.php';
            
            if(file_exists($view)){
                extract($this->_data);
                require_once $view;
            }else{
                require_once VIEWS_PATH . 'notfound' . DS . 'noview.view.php';
            }
        }
        
       /* $view = VIEWS_PATH . $this->_controller . DS . $this->_action . '.view.php';
        
        if($this->_action == FrontController::NOT_FOUND_ACTION || !file_exists($view)) {
            $view = VIEWS_PATH . 'notfound' . DS . 'notfound.view.php';
        }
        $this->_data = array_merge($this->_data, $this->language->getDictionary());
        $this->_template->setRegistry($this->_registry);
        $this->_template->setActionViewFile($view);
        $this->_template->setAppData($this->_data);
        $this->_template->renderApp();*/
    }
}