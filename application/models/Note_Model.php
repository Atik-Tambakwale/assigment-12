<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Note_Model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ConnectDB');
	}
	public function notes_count($id){
		$DB2=$this->ConnectDB->connect_db2($id);
		$query=$DB2->where('is_delete',0)->select('*')->get('notes_tbl')->num_rows();
		return $query;
	}
	public function note_into_task($id){
		$DB2=$this->ConnectDB->connect_db2($id);
		$query=$DB2->get('notes_assignment_tbl')->num_rows();
		return $query;
	}
	public function dailysheet_counts($id)
	{
		$DB2=$this->ConnectDB->connect_db2($id);
		$query=$DB2->where('is_deleted',0)->select('*')->get('forms_component_tbl')->num_rows();
		return $query;
	}
}
?>