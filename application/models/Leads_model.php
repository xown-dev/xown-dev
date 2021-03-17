<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leads_model extends CI_Model
{
	// Fields

	private $_consultation_slots;

	// Constructor
	public function __construct()
	{
		parent::__construct();

		// Load database
		$this->load->database();

		// Initialize consultation slots
		$this->_consultation_slots = array(0, 1, 2, 3, 4, 5);
	}

	// Loads and analyse leads information
	public function get_available_slots($date)
	{
		// Filter by specified date

		// Get all the records corresponding to 
		// the specified date...

		// Arguments:
		// Consultation Date
		// Lead Magnet Id

		$records = $this->db
		->select('consultation_time_slot')
		->where('consultation_date', $date)
		->where('lead_magnet_id', '1')
		->get('tbl_leads')
		->result_array();
		
		// Initialize values
		$values = [];

		// For each record...
		foreach ($records as $record) {
			// Extract the value and push to values
			array_push($values, $record['consultation_time_slot']);
		}
		
		// Filter records and return remaining values
		return array_diff($this->_consultation_slots, $values);
	}

	// Returns true if email is unique
	public function email_is_unique($email)
	{
		$query = $this->db
			->select('email')
			->where('email', $email)
			->limit('1')
			->get('tbl_leads')
			->row_array();

		return $query == null ? true : false;
	}

	// Adds a new lead's record database
	public function add_lead($record)
	{
		$this->db->insert('tbl_leads', array(
			'full_name' => $record['fullname'],
			'email' => $record['email'],
			'phone' => $record['phone'],
			'company_name' => $record['company_name'],
			'website' => $record['website'],
			'consultation_date' => $record['date'],
			'consultation_time' => $record['time'],
			'consultation_time_slot' => $record['timeIndex'],
			'lead_magnet_id' => $record['lead_magnet_id'],
			'date_added' => date("Y-m-d H:i:s")
			)
		);
	}
}
