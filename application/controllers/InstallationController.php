<?php

class InstallationController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    	$this->view->layout = array();
    }

    public function indexAction()
    {
		$this->view->title = "Installation Instructions";
    }

    public function fullAction()
    {
		$this->view->title = "Full Installation Instructions";
    }


}

