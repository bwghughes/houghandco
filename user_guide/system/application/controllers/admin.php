<?php

class Content extends Controller {

	function Content()
	{
		log_message( 'debug' , "Admin Page Controller Initialized...");
		parent::Controller();
		$this->load->scaffolding('content');
	}
	
	
	
	function content()
	{
	 
	   
	}
	
	function update_content($id)
	{
	   $rows = $this->content->get_all_content();
	   $data['rows'] = $rows;
	   $this->load->view('admin', $data); 
	   
	}
	
	
	
	function properties()
	{
	   $rows = $this->content->get_all_content();
	   $data['rows'] = $rows;
	   $this->load->view('admin', $data); 
	   
	}

}
?>	
