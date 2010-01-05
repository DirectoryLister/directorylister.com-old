<?php

class DownloadController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    	$this->view->layout = array();
    }

    public function indexAction()
    {
        $this->view->title = "All Downloads";
    }


}

