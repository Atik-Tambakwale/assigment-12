<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msg_Model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ConnectDB');
	}
	public function sent_msg($id){
		$DB2=$this->ConnectDB->connect_db2($id);
		$query=$DB2->get('request_comments')->num_rows();
		return $query;
	}
	public function task_msg($id){
		$DB2=$this->ConnectDB->connect_db2($id);
		$query=$DB2->get('request_tbl')->num_rows();
		return $query;
	}
}
?>