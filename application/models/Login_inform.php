<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_inform extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function login_data($email,$password){
		$options = [
    		'cost' => 16,
		];
		$query=$this->db->where("email", $email)->where("password",MD5($password))->where("is_delete",0)->get("user_tbl");
		return $query;
	}
}
?> 