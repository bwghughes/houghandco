<?php
class PropertyAdmin extends Controller {

	function PropertyAdmin()
	{
		log_message( 'debug' , "Admin Page Controller Initialized...");
		parent::Controller();
		$this->load->scaffolding('properties');
	}
}
