<?php

class LicenseController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    	$this->view->layout = array();
    }

    public function indexAction()
    {
		$this->view->title = "Licensing Information";
    }

    public function fullAction()
    {
		$this->view->title = "Full License (GPL v3)";
    }

}

