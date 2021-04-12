<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MY_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ConnectDB');
		$this->load->model('Project_Model');
	}
	public function Project_Details(){
		$response=[];
		try{
			$sigup_id=$this->input->get('id');
			$auth = $this->token->decodeToken($this->token_verification());
			$this->ConnectDB->connect_db2($sigup_id);
			$data=Array(
			"active_projects"=>$this->Project_Model->active_project_count($sigup_id),
			"active_project_list"=>$this->Project_Model->project_info($sigup_id),
			"overdue_project_count"=>$this->Project_Model->Overdue_project($sigup_id),
			"project_progress_info"=>$this->Project_Model->project_progress($sigup_id)
			);
			/* print_r($data); */
			
			if (count($data) > 0) {
			
				$response=[
					'status'=>200,
					'data'=>$data
				];
			}
				else{
				$response=[
					'status'=>200,
					'msg'=>"display error !"
				];
			}


		}catch(Exception $e){

		}
		echo json_encode($response);
	}
}
?>