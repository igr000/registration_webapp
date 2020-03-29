<?php
/**************************************************************************************
-- Register controller class validates if the inputs abide by the set of rules. -------
---------------------------------------------------------------------------------------
-- Author: Irene Gayle Roque ----------------------------------------------------------
**************************************************************************************/
class Register extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'Register';
		//let register page use $title
		$this->load->view('register', $data);
	}

	public function verify(){
		//set rules for inputs
		$this->form_validation->set_rules('txtfname', 'First Name', "required|trim");
		$this->form_validation->set_rules('txtlname', 'Last Name', "required|trim");
		$this->form_validation->set_rules('txtmname', 'Middle Nmae', "required|trim");
		$this->form_validation->set_rules('txtgender', 'Gender', "required");
		$this->form_validation->set_rules('txtbday', 'Birthday', "required");
		$this->form_validation->set_rules('txtcountry', 'Country', "required|trim");
		$this->form_validation->set_rules('txtarea', 'Area/Subdivision/Brgy/District', "required|trim");
		$this->form_validation->set_rules('txthouse_no', 'Floor/Dept/Building/House No', "required|trim");
		$this->form_validation->set_rules('txtstreet', 'Street', "required|trim");
		$this->form_validation->set_rules('txtcity_province', 'City/Province', "required|trim");
		$this->form_validation->set_rules('txtpostal_code', 'Postal Code', "required|trim");
		$this->form_validation->set_rules('txtphone', 'Phone', "required|trim");
		$this->form_validation->set_rules('txtemail', 'Email Address', "required|trim|valid_email");
		$this->form_validation->set_rules('txtuser', 'Username', "required|trim|is_unique[users.user_name]");
		$this->form_validation->set_rules('txtpass', 'Password', "required");
		$this->form_validation->set_rules('txtrepass', 'Re-Type Password', "required|matches[txtpass]");

		if($this->form_validation->run() === TRUE){
            //if inputs abide by rules, load register_model and proceed to nested if statement. If not, go back to register page
			$this->load->model('register_model');
			$isRegistered = $this->register_model->register();
            
            //if register method of register_model was successfully called, display 'Registration Successful' and 'Please check your email to activate your account'. If not, display 'Registration Failed' and 'Something went wrong. Please try again later.'
			if($isRegistered){

				$data['title'] = 'Registration Successful';
				$data['message'] = 'Please check your email to activate your account';

			}else{

				$data['title'] = 'Registration Failed';
				$data['message'] = 'Something went wrong. Please try again later.';

			}

			$this->load->view('registration_message', $data);

		}else{

			$this->index();
		}
	}
}
?>