<?php

class ProfessionalServices extends Controller {

	function index()
	{
            
       	// Get content for this section
    	$content = $this->content->get_content_for_url(); 
    	$this->load->view('professional_services_page', $content);
	}
	
	function buildingsurveys()
	{
       	// Get content for this section
        $content = $this->content->get_content_for_url();
        $this->load->view('professional_services_page', $content);

	}
	
	function sulphatereports()
	{
           // Get content for this section
        $content = $this->content->get_content_for_url();
        $this->load->view('professional_services_page', $content);

	}
	
	function landlordandtenant()
	{
	   // Get content for this section
        $content = $this->content->get_content_for_url();
        $this->load->view('professional_services_page', $content);

	}
	
	function asbestos()
	{
	   // Get content for this section
        $content = $this->content->get_content_for_url();
        $this->load->view('professional_services_page', $content);

	}
	
	function partywall()
	{
	   // Get content for this section
        $content = $this->content->get_content_for_url();
        $this->load->view('professional_services_page', $content);

	}
	
	function singleissuedefect()
	{
	   // Get content for this section
        $content = $this->content->get_content_for_url();
        $this->load->view('professional_services_page', $content);

	}
	
	function legaldisputes()
	{
	   // Get content for this section
        $content = $this->content->get_content_for_url();
        $this->load->view('professional_services_page', $content);

	}
	
	
	
}
?>	
