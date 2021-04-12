<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Less_Used_Assoc_Model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ConnectDB');
	}
	function lu_count_all(){
		$this->db->select('*');
		$this->db->from("associate_tbl");
		$this->db->where('last_seen BETWEEN created_at AND updated_at');
		$query=$this->db->get();
		
		return $query->num_rows();
	}
	
function fetch_Less_Used_Assoc($signup_id){
		$output='';
		/* $DB2=$this->ConnectDB->connect_db2($signup_id); */
		$this->db->select('*');
		$this->db->from('dailygate_primary.associate_tbl AS at');
		$this->db->where('signup_id',$signup_id)->where('at.last_seen BETWEEN at.created_at AND at.updated_at');;
		$this->db->join('dailygate_secondary.department_tbl AS dt','dt.id=at.dept_id');
	 	$this->db->join('dailygate_secondary.designation_tbl AS dst','dst.id=at.designation_id'); 
		$query=$this->db->get();
		if(count($query->result())>=1){
		$output='<thead >
					<tr>
						<td>ID</td>	
						<td>DP</td>
						<td>ASSOCIATE INFO</td>
						<td>DEPARTMENT AND DESIGN</td>
						<td>ADDRESS</td>
						<td>EMERGENCY INFO</td>
						<td>STATUS</td>
						<td>ACTIONS</td>
					</tr>
				</thead>
				<tbody >
					<div id="as-row-dt">';
		foreach ($query->result() as $row) {
			$output.='
					<tr>
						<td>
							<span class="dp-icon">'.$row->id.'</span>
						</td>
						<td>
							<img src="http://localhost/assignment-12/assets/images/1.png" alt="" width="50px" style="border-radius: 26px;position: relative;top: 39px;margin: 15px;">
						</td>
						<td>
						
							<label for="">Name</label>
							<h4>'.$row->name.'</h4>
							<label for="">Mobile</label>
							<h4>'.$row->mobile.'</h4>
							<label for="">Email</label>
							<h4>'.$row->email.'</h4>
						
						</td>
						<td>
							<label for="">Department:</label>
							<h4>'.$row->dept_name.'</h4>
							<label for="">Designation</label>
							<h4>'.$row->designation_name.'</h4>
						</td>
							
						
						<td>
							<div class="col">
								<label for="">Permanent Address</label>
								<h4>'.$row->paddr.'</h4>
								<label for="">Correspondence Address</label>
								<h4>'.$row->caddr.'</h4>
							</div>
						</td>
						
						<td>
							<label for="">Name</label>
							<h4>'.$row->emergency_person.'</h4>
							<label for="">Mobile</label>
							<h4>'.$row->emergency_contact.'</h4>
						</td>
						<td>
							<div class="col" >
								<label for="">Is Active</label>
								<h4 class="bln">'.(($row->is_active==1)?"YES":"NO").'</h4>
								<label for="">Is Deleted</label>
								<h4 class="bln">'.(($row->is_delete==1)?"YES":"NO").'</h4>
								<label for="">Is Donor</label>
								<h4 class="bln">'.(($row->is_donor==1)?"YES":"NO").'</h4>
							</div>
						</td>
						<td>
							<div class="btn-group" 	>
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="caret"></span>
									<span class="sr-only">Toggle Dropdown</span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#" class="view-btn" data-view_id='.$row->id.'>View Profile</a></li>
									<li><a href="#" class="edit-btn" data-edit_id='.$row->id.'>Edit</a></li>
									
									<li role="separator" class="divider"></li>
									<li><a href="#" class="delete-btn" data-delete_id='.$row->id.'>Delete</a></li>
									<li><a href="#" class="deactive-btn" data-deactive_id='.$row->id.'>Deactivate Employee</a></li>
									<li><a href="#" class="repass-btn" data-repass_id='.$row->id.'>Regenerated Password</a></li>
								</ul>
							</div>
						</td>
					</tr>';
		}
		$output.='</div>
				</tbody>';
	/* 	echo $output; */
		}
		else{
			$output="<p style='text-align:center;font-size:25px;'>No list available for display</p>";
		}
		return $output;		
	}

}
?>      
