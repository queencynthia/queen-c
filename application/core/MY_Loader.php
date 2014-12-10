<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {




	public function load_admin($template_pm, $vars = array(), $return = FALSE){


		//load the session library

		$this->load->library('session');

		//get the session
		//if there is no session

	if(!$this->session->userdata('name')){
		redirect('login/login');
	}
	else{

		$content = $this->view('template/header_v', $vars,$return);
		$content .= $this->view($template_admin, $vars,$return);
		$content .= $this->view('template/footer_v', $vars,$return);


		return $content;
			
			}	

	}








}