<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desicion_Model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ConnectDB');
	}
	public function desicion_info($id)
	{
		$DB2=$this->ConnectDB->connect_db2($id);
		$query=$DB2->where('is_deleted',0)->select('*')->from('decision_tbl')->get();
		if(count($query->result())>=1){
		$output='<div class="row">
					<div class="col-md-2"><label>Title</label></div>
					<div class="col-md-2"><label>Problem</label></div>
					<div class="col-md-2"><label>Reasoning</label></div>
					<div class="col-md-2"><label>Description</label></div>
					<div class="col-md-2"><label>Created_At</label></div>
				</div>';
		foreach ($query->result() as $row) {
			$output.='<div class="row">
						<div class="col-md-2">'.$row->title.'</div>
						<div class="col-md-2">'.$row->problem.'</div>
						<div class="col-md-2">'.$row->reasoning.'</div>
						<div class="col-md-2">'.$row->decision.'</div>
						<div class="col-md-2">'.$row->created_at.'</div>
				  	  </div>';
		}
		$output.='';
	/* 	echo $output; */
		}
		else{
			$output="<p style='text-align:center;'>No list available for display</p>";
		}
		return $output;
	}
}
?>