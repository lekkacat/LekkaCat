<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template_Lekkacattpl{

	public function action_index()
	{
		$this->template->layout = new View('layouts/welcome');
	}


} // End Welcome
