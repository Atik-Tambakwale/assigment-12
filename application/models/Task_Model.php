<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_Model extends CI_Model{

	function __construct(){
        parent::__construct();
		$this->load->model('ConnectDB');
    }

	public function active_task_count($id)
	{	
		$DB2=$this->ConnectDB->connect_db2($id);
		$query=$DB2->where('is_delete',0)->get('task_tbl')->num_rows();
		return $query;
	}
	public function completed_task_count($id)
	{
		$DB2=$this->ConnectDB->connect_db2($id);
		$query=$DB2->where('is_complete',1)->get('task_tbl')->num_rows();
		return $query;
	}
	public function created_tasks($id)
	{
		$DB2=$this->ConnectDB->connect_db2($id);
		$query=$DB2->get('task_log_tbl')->num_rows();
		return $query;
	}
	public function due_task_count($id)
	{	
		$dt = new DateTime();
    	$today=$dt->format('d-m-Y');
		$DB2=$this->ConnectDB->connect_db2($id);
		$query=$DB2->where("due_date < '.$today.'")->where('is_complete',1)->get('task_tbl')->num_rows();
		return $query;
	}
	public function load_task_dates($id)
	{
		$DB2=$this->ConnectDB->connect_db2($id);
		$data['result']=$DB2->where('assignee',387)->select('title,start_date,due_date')->get('task_tbl')->result();
		foreach ($data['result'] as $key => $value) {
            $data['data'][$key]['title'] = $value->title;
            $data['data'][$key]['start'] = date( "Y-m-d", strtotime($value->start_date));
            $data['data'][$key]['end'] = date( "Y-m-d", strtotime($value->due_date));
            /* $data['data'][$key]['backgroundColor'] = "#00a65a"; */
        }

		return $data;
	} 
	public function display_task_countable($id)
	{
		$DB2=$this->ConnectDB->connect_db2($id); 
		$query=$DB2->where('assignee',387)->get('task_tbl')->num_rows();
		return $query;
	}
	public function assigned_task_countable($id)
	{
		$DB2=$this->ConnectDB->connect_db2($id); 
		$query=$DB2->where('assignee != 387 ')->get('task_tbl')->num_rows();
		return $query;
	}
	public function display_task_details($id)
	{
		$output='';
		$DB2=$this->ConnectDB->connect_db2($id); 
		$query=$DB2->where('assignee',387)->get('task_tbl');
		if(count($query->result())>=1){
		$output='<div class="fs-20 fw-600 m-b-5 blue-text">My Tasks</div>
				';
		foreach ($query->result() as $row) {
			$output.='<div class="task-right_item pc fs-15 project-meeting pr">
						<div class="task-right_top">
							<div class="fw-600 m-b-5">'.$row->title.'</div>
							<div class="m-b-5"> '.date("d M", strtotime($row->start_date)).' - '.date("d M Y", strtotime($row->due_date)).'</div>
							<div class="d-flex jc-sb"><div><div class="plus-member">+3</div></div><a class="edit-cta blue-text fs-12 cp fw-600">Edit</a></div>
						</div>
						<div class="edit-content">
							<div class="fs12 m-b-5">Label</div>
							<div class="label-content">'.$row->title.'</div>
							<div class="fs12 m-b-5">Select Date</div>
							<div class="label-content"> '.date("d M", strtotime($row->start_date)).' - '.date("d M Y", strtotime($row->due_date)).'</div>
							<div class="fs12 m-b-5">Repeat</div>
							<div class="pr">
								<div class="label-content label-dw-content pr down">Every Monday</div>
								<div class="dw-content">
									<div class="dw-item tick">Every Monday</div>
									<div class="dw-item">Every Tuesday</div>
									<div class="dw-item">Every Wednesday</div>
									<div class="dw-item">Every Thursday</div>
									<div class="dw-item">Every Friday</div>
									<div class="dw-item">Every Saturday</div>
									<div class="dw-item">Every Sunday</div>
								</div>
							</div>
							<div class="d-flex jc-sb mb-24"><div><div class="plus-member">+3</div></div><a class="blue-text fs-12 cp fw-600">Add</a></div>
							<div class="d-flex jc-sb fs16 ai-center plr-40">
								<a class="blue-text back-btn fw-600">Back</a>
								<a class="btn save-btn fw-600 waves-effect">Save</a>
							</div>
							
						</div>
					</div>';
		}
		$output.='';
	/* 	echo $output; */
		}
		else{
			$output="<p style='text-align:center;'>No tasks</p>";
		}
		return $output;
	}
}
?>