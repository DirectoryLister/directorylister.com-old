<?php

class SitemapController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    	$this->view->layout = array();
    }

    public function indexAction()
    {
        // action body
        $this->vew->layout = false;

        $urls = array(
        	array(
        		'loc' => 'http://www.directorylister.com/',
        		'lastmod' => '2009-04-02T11:34:48+00:00',
        		'changefreq' => 'daily',
        		'priority' => '1.0'
        	)
        );

        $this->view->urls = $urls;
    }


}

