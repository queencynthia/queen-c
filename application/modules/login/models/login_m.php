<?php

class login_m extends MY_Model{


	function __construct() {


		parent::__construct();
	
	}

	public function check_login($username,$password)
	{

		$sha1_password = sha1($password);

		$query_str = "SELECT id,usertype,name,houseid FROM user WHERE username = ? and password = ? ";

		$result = $this->db ->query($query_str,array ($username, $sha1_password));

		if($result->num_rows()==1)
		{

			$results['id']=$result->row(0)->id;
			$results['usertype']=$result->row(0)->usertype;
			$results['name']=$result->row(0)->name;
			$results['houseid']=$result->row(0)->houseid;
		
		return $reults;

		}

		else{

			return $results="0";
		}

	}

}



?>