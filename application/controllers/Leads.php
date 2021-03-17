<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leads extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->load->library('form_validation');

		$this->load->model('Leads_model');
	}

	public function post_lead_info()
	{
		$data = $this->input->post();
		
		// Initialize response
		$response = [];
		
		// Validate email uniqueness
		$email_is_unique = $this->Leads_model->email_is_unique($data['email']);

		// If email is not unique...
		if (!$email_is_unique) {
			// Set the error message
			$response['errorMessage'] = "The email address you provided already exist. \n Please provide another.";
			
			// Return the response
			echo json_encode($response);

			// Exit the function
			return;
		}

		// Store the lead's record
		$this->Leads_model->add_lead($data);

		// Return the response
		echo json_encode($response);
	}
}
