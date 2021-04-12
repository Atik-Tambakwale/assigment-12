<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConnectDB extends CI_Model{

	public function connect_db2($id)
	{
		$result=$this->db->where('id',$id)->select('*')->get('signup_tbl')->row();
		$db2=$this->load->database(array('dsn'	=> '','hostname' => $result->DB2_host,'username' => $result->DB2_username,'password' => $result->DB2_password,'database' => $result->DB2_name,'dbdriver' => 'mysqli','dbprefix' => '','pconnect' => FALSE,'db_debug' => (ENVIRONMENT !== 'production'),'cache_on' => FALSE,'cachedir' => '','char_set' => 'utf8','dbcollat' => 'utf8_general_ci','swap_pre' => '','encrypt' => FALSE,'compress' => FALSE,'stricton' => FALSE,'failover' => array(),'save_queries' => TRUE),TRUE);
		return $db2;
	}
	

}