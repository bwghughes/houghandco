<?php

class AuctionServices extends Controller {

	
	function __construct()
    {
      parent::Controller();
    }
	
	function index()
	{
		// Get content for this section
    	$content = $this->content->get_content_for_url(); 
		$this->load->view('auction_services_page', $content);
	}
	
	function auctiondates()
	{
		$data['query'] = $this->auction->get_all_auction_dates();
		$this->load->view('auction_dates_page', $data);
	}
	
	function enterproperty()
	{
		$this->load->view('contactus');
	}
	
	function estateagents()
	{
		$content = $this->content->get_content_for_url();
		$this->load->view('estate_agents', $content);
	}
	
	function auctioncatalogue()
	{
		// Get all by default.
		// Get id from URL - get last one - if not, set it to 1.
		$property_offset = $this->uri->segment(3, 0);
		log_message( 'debug' , "Calling property from database with offset ".$property_offset."...");
		$data['query'] = $this->property->get_unauctioned_property($property_offset);
		
		if($data['query']->num_rows() == 0)
		{
			log_message( 'debug' , "Got to end of list, calling back to beginning.");
			$property_offset = 0;
			$data['query'] = $this->property->get_unauctioned_property($property_offset);
		}
		// Add the offset in so we can get the next ones....
		$data['offset'] = $property_offset;
		//$data['next-property'] = 
		$this->load->view('auction_catalogue', $data);
	}
	
	function auctionpdf()
	{
		$content = $this->content->get_content_for_url();
		$this->load->view('standard_content', $content);
	}
	
	function auctionvenue()
	{
		$this->load->view('standard_content');
	}
	
	function auctionresults()
	{
		// Get all by default.
		// Get id from URL - get last one - if not, set it to 1.
		$property_offset = $this->uri->segment(3, 0);
		log_message( 'debug' , "Calling property from database with offset ".$property_offset."...");
		$data['query'] = $this->property->get_sold_property($property_offset);

		if($data['query']->num_rows() == 0)
		{
			log_message( 'debug' , "Got to end of list, calling back to beginning.");
			$property_offset = 0;
			$data['query'] = $this->property->get_sold_property($property_offset);
		}
		// Add the offset in so we can get the next ones....
		$data['offset'] = $property_offset;
		//$data['next-property'] = 
		$this->load->view('auction_catalogue', $data);
	}
	
	function auctionadministration()
	{
		$content = $this->content->get_content_for_url();
		$this->load->view('estate_agents', $content);
	}
}
?>	
