<?php

class Home extends Controller {

	function index()
	{
	    // Get content for this section
    	$content = $this->content->get_content_for_url();
		$this->load->view('home_page', $content);
	}
}
?>	
