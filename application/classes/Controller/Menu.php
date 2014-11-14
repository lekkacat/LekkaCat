<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Menu extends Controller{

	public function action_index()
	{
		$tpl_menu = new View('menu');
		$this->response->body($tpl_menu);
	}

} // End Welcome
