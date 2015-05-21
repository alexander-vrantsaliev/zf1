<?php

class IndexController extends Zend_Controller_Action
{

	private $_user = null;
	private $_userRole = null;

    public function init()
    {
        // Render sidebar for every action
        $response = $this->getResponse();
        $response->insert('sidebar', $this->view->render('sidebar.phtml'));
    }

    public function indexAction()
    {
        $this->view->pageTitle = "Zend Layout Example";

        $this->view->bodyTitle = '<h1>Hello World!</h1>';
        $this->view->bodyCopy = "<p>Lorem ipsum dolor etc.</p>";
    }


}

