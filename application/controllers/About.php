<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Controller for the about page
class About extends Application {

	/**
	 * Index Page for this controller
	 */
	public function index()
	{
		$this->data['pagebody'] = 'about';
                $this->render();
	}
}

