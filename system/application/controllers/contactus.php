<?php

class ContactUs extends Controller {

	function index()
	{
		// Get content for this section
		$content = $this->content->get_content_for_url();
		
		$this->validation->set_error_delimiters('<div class="error">', '</div>');
		
		// Set validation rules
		$rules['name']		= "trim|required";
		$rules['subject']	= "trim|required";
		$rules['email']		= "trim|required|valid_email";
		$rules['body']		= "trim|required";
		$this->validation->set_rules($rules);
		
		// Set form fields
		$fields['name']	= "name";
		$fields['subject']	= "subject";
		$fields['email']	= "email";
		$fields['body']	= "body";
		$this->validation->set_fields($fields);

		if ($this->validation->run() == FALSE)
		{
			// Failed - send back to form.
			$this->load->view('contact_form');
		}
		else 
		{
			// Success - Send an email with information in.
			$this->load->library('email');
			$this->email->from('website@houghandco.co.uk', $fields['name']);
			$this->email->to('bwghughes@gmail.com');
			$this->email->subject( $fields['subject']);
			$this->email->message( $fields['body']);
			$this->email->send();
			
			//go to view
			$this->load->view('success');
		}
			
		
	}
}
?>	