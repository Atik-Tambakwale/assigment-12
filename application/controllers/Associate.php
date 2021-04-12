<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Associate extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Active_Assoc_Model');
		$this->load->model('InActive_Assoc_model');
		$this->load->model('Less_Used_Assoc_Model');
	}
	public function index()
	{	if(!$this->session->userdata("id"))
			return redirect(base_url());
		$this->load->view('associate/associate_list');
	}

	public function displayActiveAssocList()
	{
		$sigup_id=$this->input->get('id');
		$output=Array(
			'list_table'=>$this->Active_Assoc_Model->fetch_Active_Assoc($sigup_id),
			'count_list'=>$this->Active_Assoc_Model->count_all(),
			'lu_list'=>$this->Active_Assoc_Model->lu_count_all()
		);
		echo json_encode($output);
	}
	public function displayInActiveAssocList()
	{
		$sigup_id=$this->input->get('id');
		$output=Array(
			'list_table'=>$this->InActive_Assoc_model->fetch_InActive_Assoc($sigup_id),
			'count_list'=>$this->InActive_Assoc_model->count_all(),
			'group_one'=>$this->InActive_Assoc_model->fetch_GroupBy_Assoc()
		);
		echo json_encode($output);
	}
	public function displayLessUsedAssocLsit()
	{
		$sigup_id=$this->input->get('id');
		$output=Array(
			'lu_list_table'=>$this->Less_Used_Assoc_Model->fetch_Less_Used_Assoc($sigup_id),
			'lu_count_list'=>$this->Less_Used_Assoc_Model->lu_count_all(),
		);
		echo json_encode($output);
	}
	public function groupby_associate()
	{
		$sigup_id=$this->input->get('id');
		$output=Array(
			
			/* 'group_two'=>$this->InActive_Assoc_model->fetch_SecondGroupBy_Assoc($sigup_id) */
		);
		echo json_encode($output);
	}
}
?>