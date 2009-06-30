<?php

class BrowsersController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    	$this->view->layout = array();
    }

    public function indexAction()
    {
		$this->view->title = "Browser Compatiblity";
		$this->view->css = '/css/thickbox.css';
		$this->view->js = '/js/jquery.thickbox.js';
    }


}

