<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Task_Model');
		$this->load->model('Desicion_Model');
		$this->load->model('Note_Model');
		$this->load->model('Msg_Model');
	}
	public function index()
	{
		if(!$this->session->userdata("id"))
			return redirect(base_url());
		$this->load->view('dashboard');
	}
	public function Assoc_Dashboard(){
		if(!$this->session->userdata("id"))
			return redirect(base_url());
		$this->load->view('assoc_dashboard');
	}
	public function Fetch_Company_details()
	{
		$response=[];
		try{
			$auth = $this->token->decodeToken($this->token_verification());
			$result=$this->db->where('is_active',1)->get('signup_tbl');
			$data=$result->result();
			
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
	public function Tasks_Details()
	{
		$response=[];
		try{
			$sigup_id=$this->input->get('id');
			$auth = $this->token->decodeToken($this->token_verification());
			$data=Array(
			"total_active_tasks"=>$this->Task_Model->active_task_count($sigup_id),
			"total_completed_tasks"=>$this->Task_Model->completed_task_count($sigup_id),
			"created_tasks"=>$this->Task_Model->created_tasks($sigup_id),
			"due_tasks"=>$this->Task_Model->due_task_count($sigup_id)
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
	public function Decision_Details()
	{
		$response=[];
		try{
			$sigup_id=$this->input->get('id');
			$auth = $this->token->decodeToken($this->token_verification());
			$data=Array(
			"desicion_info"=>$this->Desicion_Model->desicion_info($sigup_id),
			//"total_completed_tasks"=>$this->Task_Model->completed_task_count($sigup_id)
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
	public function Notes_Details(){
		$response=[];
		try{
			$sigup_id=$this->input->get('id');
			$auth = $this->token->decodeToken($this->token_verification());
			$data=Array(
			"notes_countable"=>$this->Note_Model->notes_count($sigup_id),
			"notes_tasks_count"=>$this->Note_Model->note_into_task($sigup_id),
			"dailysheet_count"=>$this->Note_Model->dailysheet_counts($sigup_id)
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
	public function Notification_details()
	{
		$response=[];
		try{
			$sigup_id=$this->input->get('id');
			$auth = $this->token->decodeToken($this->token_verification());
			$data=Array(
			"notes_countable"=>$this->Note_Model->notes_count($sigup_id),
			//"total_completed_tasks"=>$this->Task_Model->completed_task_count($sigup_id)
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
	public function msg_details(){
		$response=[];
		try{
			$sigup_id=$this->input->get('id');
			$auth = $this->token->decodeToken($this->token_verification());
			$data=Array(
			"msg_countable"=>$this->Msg_Model->sent_msg($sigup_id),
			"msg_task_countable"=>$this->Msg_Model->task_msg($sigup_id)
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