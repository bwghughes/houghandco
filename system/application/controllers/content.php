<?php
class ContentAdmin extends Controller {

	function ContentAdmin()
	{
		log_message( 'debug' , "Admin Page Controller Initialized...");
		parent::Controller();
		$this->load->scaffolding('content');
	}
}
?>
