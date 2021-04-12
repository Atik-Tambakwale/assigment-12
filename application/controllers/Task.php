<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends MY_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Task_Model');
	}
	public function index()
	{
		if(!$this->session->userdata("id"))
			return redirect(base_url());
		$this->load->view('tasks/task_manager');
	}
	public function assigned_page()
	{
		$this->load->view('tasks/assigned_task_manager');
	}
	public function loadTaskDates(){
		$response=[];
		try{
			$sigup_id=$this->input->get('id');
			$auth = $this->token->decodeToken($this->token_verification());
			$data=Array(
			"load_task_details"=>$this->Task_Model->load_task_dates($sigup_id),
			"display_task_details"=>$this->Task_Model->display_task_details($sigup_id),
			"display_task_count"=>$this->Task_Model->display_task_countable($sigup_id),
			"display_atask_count"=>$this->Task_Model->assigned_task_countable($sigup_id)
			);
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