<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	// Constructor
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		
		// Load models
		$this->load->model('Leads_model'); 

		// Load Form Helper
		$this->load->library('form_validation');
	}
	
	// Loads the index page
	public function index()
	{
		$this->load->view('index');
	}

	public function test()
	{
		// $result = $this->Leads_model->get_available_slots();

		// echo json_encode(array_values($result));

		$this->load->view('test');
	}

	public function post_lead_application()
	{
		$data = $this->input->post();

		// $validated = $this->form_validation->run();

		$encoded = json_encode($data);
		

		echo $encoded;
	}

	public function test2()
	{

	}

	// Process the selected date
	public function processdate()
	{
		$data = $this->input->post();

		// Check and return the available time slots
		$availableSlots = $this->Leads_model->get_available_slots($data['date']);

		$a = array_values($availableSlots);

		$data['availableSlots'] = $a;

		echo json_encode($data);
	}
}
