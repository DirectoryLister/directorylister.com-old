<?php

class UpdateBrowserController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    	$this->view->layout = array();
    }

    public function indexAction()
    {
        $this->view->title = "Update Your Browser";

		if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Gecko') )
		{
		   if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape') )
		   {
		     $browser = 'Netscape';
		   }
		   else if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') )
		   {
		     $browser = 'Mozilla Firefox';
		   }
		   else
		   {
		     $browser = 'Mozilla';
		   }
		}
		else if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') )
		{
		   if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') )
		   {
		     $browser = 'Opera';
		   }
		   else
		   {
		     $browser = 'Internet Explorer';
		   }
		}
		else
		{
		   $browser = 'an unidentifiable browser';
		}

		$this->view->browser = $browser;
    }


}

