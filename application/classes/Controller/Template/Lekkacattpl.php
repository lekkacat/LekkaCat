<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Template_Lekkacattpl extends Controller_Template 
{

	public function before()
	{
		parent::before();
 
		// Page Title
		$this->template->title = '';
		
		// Meta Tags
		$this->template->meta_tags = array();
		
		// Relational Links (other than stylesheets)
		$this->template->links = array();
		
		// Stylesheets
		$this->template->stylesheets = array(
										array('href' => URL::base($this->request).'assets/bootstrap.css'),
										array('href' => URL::base($this->request).'assets/lekkacat.css'),
										array('href' => URL::base($this->request).'assets/bootswatch.min.css'),
										array('href' => URL::base($this->request).'assets/jquery.edittable.css'),
										
		);
		
		// Javascripts
		$this->template->javascripts = array(URL::base($this->request).'assets/jquery-1.11.1.min.js',
											'http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', 
											 URL::base($this->request).'assets/jquery.edittable.js');

	
		// Javascript Custom
		$this->template->js_custom = '';

		// Default layout
		$this->template->layout = new View('layouts/empty');
		
		// No content by default
		$this->template->layout->content = '';

		// Layout Shortcut
		$this->layout = $this->template->layout;
		
		$this->template->bind('menu', $menu);
  
        $menu = Request::factory('Menu')->execute(); 
	}
 
} // End Controller_Template_Base
