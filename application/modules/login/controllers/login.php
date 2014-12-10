<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class login extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		
		$this->login_();
	}

	public function login_() {
		
		$this->form_validation->set_rules('username','Username','required|trim|max_length[50]|xss_clean');
		$this->form_validation->set_rules('password','Password','required|trim|max_length[200]|xss_clean');

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('login_v');
		}

	else
	{
		//process their input and log in the user

		extract($_POST);
		$this->load->model("login_m");
		$login_data = $this-> login_m->check_login($username,$password);

		if ($login_data=="0")
		{
			$this->session->set_flashdata('login_error',TRUE);

			redirect('login/login');
		} 
		else
		{
			$this->session->set_userdata(array(

										'logged_in'=>TRUE,
										'usertype'=>$login_data['usertype'],
										'name'=>$login_data['name'],
										'houseid'=>$login_data['houseid'],
				));


			//log them in
			if($login_data['usertype']==1)
			{
				//redirects to allocated user group
				redirect('login/login');
			} 




			else if ($login_data['usertype']==2)
			{
				//redirects to allocated user group
				//redirect('login/login');
				echo 'hi there';
			}




		else 
		{
			return FALSE;
		}	


		}


	}	


	}

}
