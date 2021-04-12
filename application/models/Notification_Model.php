<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification_Model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ConnectDB');
	}
	public function notice_info($id){
		$DB2=$this->ConnectDB->connect_db2($id);
		
	}
}
?>