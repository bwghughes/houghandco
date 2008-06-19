<?php

class Upload extends Controller {

	function Upload()
	{
		parent::Controller();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{	
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = 
'/var/www/html/houghandco/public/images/uploaded/';
		$config['allowed_types'] = 'gif|jpg|png|pdf|docx';
		$config['max_size']	= '10000';
		$config['remove_spaces'] = 'true';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success', $data);
		}
	}	
}
?>
