<?php
class AuctionAdmin extends Controller {

	function AuctionAdmin()
	{
		log_message( 'debug' , "Admin Page Controller Initialized...");
		parent::Controller();
		$this->load->scaffolding('auctions');
	}
}
