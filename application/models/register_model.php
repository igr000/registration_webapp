<?php
/***********************************************************************************
-- Register_model is a model class that passes inputs to database variables. -------
------------------------------------------------------------------------------------
-- Author: Irene Gayle Roque -------------------------------------------------------
***********************************************************************************/
class register_model extends CI_Model{

	public function construct(){
		parent::__construct();
		//loads database
		$this->load->database();
	}

	public function register(){
		//pass personal details and billing address inputs to database variables
		$personal_info = array(
			'cust_lname' => $this->input->post('txtlname'),
			'cust_fname' => $this->input->post('txtfname'),
			'cust_mname' => $this->input->post('txtmname'),
			'cust_bday' => $this->input->post('txtbday'),
			'cust_gender' => $this->input->post('txtgender'),
			'cust_country' => $this->input->post('txtcountry'),
			'cust_house_no' => $this->input->post('txthouse_no'),
			'cust_street' => $this->input->post('txtstreet'),
			'cust_area' => $this->input->post('txtarea'),
			'cust_city_province' => $this->input->post('txtcity_province'),
			'cust_postal_code' => $this->input->post('txtpostal_code'),
			'cust_phone' => $this->input->post('txtphone'),
			'cust_email' => $this->input->post('txtemail'),
			'cust_dateRegistered' => date('Y-m-d H:i:s')
		);
		//insert inputs to customers table
		$isCustomer_added = $this->db->insert('customers', $personal_info);
        
        //pass login details to database variables
		$userAccess_info = array(
			'user_name' => $this->input->post('txtuser'),
			'user_pass' => $this->input->post('txtpass'),
			'user_lvl' => 2,
			'cust_id' => $this->db->insert_id(),
			'isApproved' => 0
		);
        //insert inputs to users table
		$isUser_added = $this->db->insert('users', $userAccess_info);

		if($isCustomer_added && $isUser_added){
			return true;
		}else{
			return false;
		}
	}
}
?>