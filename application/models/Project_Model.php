<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_Model extends CI_Model{

	function __construct(){
        parent::__construct();
		$this->load->model('ConnectDB');
    }

	public function active_project_count($id)
	{
		$DB2=$this->ConnectDB->connect_db2($id);
		$result=$DB2->where('is_delete',0)->get('project_tbl')->num_rows();
		return $result;
	}
	public function project_info($id){
		$output='';
		$DB2=$this->ConnectDB->connect_db2($id);
		$query=$DB2->where('is_delete',0)->select('*')->from('project_tbl')->get();
		if(count($query->result())>=1){
		$output='';
		foreach ($query->result() as $row) {
			$output.='
					<div class="project-progress d-flex jc-sb ai-center fs20">
                                <div class="p-lft text-black dot">'.$row->project_title.'</div>
                                <div>'.$row->start_date.'</div>
                                <div>'.$row->completion_date.'</div>
                            </div>';
		}
		$output.='';
		}
		else{
			$output="<p style='text-align:center;font-size:25px;'>No Active Projects available for display</p>";
		}
		return $output;
	}
	public function Overdue_project($id){
		$dt = new DateTime();
    	$today=$dt->format('d-m-Y');
		$DB2=$this->ConnectDB->connect_db2($id);
		$query=$DB2->where("completion_date <'.$today.'")->get('project_tbl')->num_rows();
		return $query;
	}
	public function project_progress($id)
	{
		$output='';
		$DB2=$this->ConnectDB->connect_db2($id);
		$query=$DB2->where('ppt.status',1)->where('ppt.is_complete',0)->select('*')->from('project_process_tbl AS ppt')->join('project_tbl AS pt','pt.id=ppt.project_id')->get();
		
		if(count($query->result())>=1){
			$output='';
			foreach ($query->result() as $row) {
				$output.='
						<div class="project-progress d-flex jc-sb ai-center fs20">
							<div class="p-lft text-black dot">'.$row->project_title.'</div>
							<div class="progress-bars flex-1"><span class="progressed active-bg" style="width:'.$row->total_progress.'%;"></span></div>
							<div class="p-rgt text-nevy">'.$row->total_progress.'%</div>
						</div>';
			}
			$output.='';
		}
		else{
			$output="<p style='text-align:center;font-size:25px;'>No Progress Projects available for display</p>";
		}
		return $output;
	}
}
?>