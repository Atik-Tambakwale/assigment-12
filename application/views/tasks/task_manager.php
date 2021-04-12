	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('layout/header');
$this->load->view('layout/sidebar');

?>

	<div class="main-content pc fs-25 pb0">Task Manager</div>
		<div class="main-content">
			<div class="mid-content">
				<div class="d-flex fs-20"><div href="<?php echo base_url()?>task" class="task-item pr active">My Tasks(<span id="my_tasks"></span>)</div><div class="task-item pr" id="assigned_task_page">Assigned Tasks(<span id="assigned_tasks"></span>)</div></div>
				<div class="br-14" id="calendar" style="background: black;">
				
				</div>
				<!-- <div class="card inner-gap br-14">
					<div class="d-flex jc-center pr m-y-content"><div class="prev"></div><div class="fs-20 fw-600 pc">November 2020</div><div class="next"></div></div>
					<div class="d-flex jc-center ai-center s-e-date-content">
						<a class="btn primary-bg fs-20 s-date-btn waves-effect">Start Date</a>
						<a class="fs-20 e-date-btn">End Date</a>
					</div>
					<div class="week-row">
						<div class="week-col">S</div>
						<div class="week-col">M</div>
						<div class="week-col">T</div>
						<div class="week-col">W</div>
						<div class="week-col">T</div>
						<div class="week-col">F</div>
						<div class="week-col">S</div>
					</div>
					<div class="week-row">
						<div class="week-col"><div class="week-col-day">29</div></div>
						<div class="week-col"><div class="week-col-day">30</div></div>
						<div class="week-col selected-date selected-active"><div class="week-col-day">01</div></div>
						<div class="week-col"><div class="week-col-day">02</div></div>
						<div class="week-col selected-range selected-range-active selected-range-start"><div class="week-col-day">03</div></div>
						<div class="week-col selected-range selected-range-active"><div class="week-col-day">04</div></div>
						<div class="week-col selected-range selected-range-active selected-range-end"><div class="week-col-day">05</div></div>
					</div>
					<div class="week-row">
						<div class="week-col selected-date selected-delayed"><div class="week-col-day">6</div></div>
						<div class="week-col"><div class="week-col-day">07</div></div>
						<div class="week-col selected-range selected-range-delayed selected-range-start"><div class="week-col-day">08</div></div>
						<div class="week-col selected-range selected-range-delayed"><div class="week-col-day">09</div></div>
						<div class="week-col selected-range selected-range-delayed selected-range-end"><div class="week-col-day">10</div></div>
						<div class="week-col"><div class="week-col-day">11</div></div>
						<div class="week-col"><div class="week-col-day">12</div></div>
					</div>
					<div class="week-row">
						<div class="week-col"><div class="week-col-day">13</div></div>
						<div class="week-col"><div class="week-col-day">14</div></div>
						<div class="week-col"><div class="week-col-day">15</div></div>
						<div class="week-col"><div class="week-col-day">16</div></div>
						<div class="week-col"><div class="week-col-day">17</div></div>
						<div class="week-col selected-date selected-created"><div class="week-col-day">18</div></div>
						<div class="week-col"><div class="week-col-day">19</div></div>
					</div>
					<div class="week-row">
						<div class="week-col"><div class="week-col-day">20</div></div>
						<div class="week-col selected-range selected-range-created selected-range-start"><div class="week-col-day">21</div></div>
						<div class="week-col selected-range selected-range-created"><div class="week-col-day">22</div></div>
						<div class="week-col selected-range selected-range-created"><div class="week-col-day">23</div></div>
						<div class="week-col selected-range selected-range-created"><div class="week-col-day">24</div></div>
						<div class="week-col selected-range selected-range-created"><div class="week-col-day">25</div></div>
						<div class="week-col selected-range selected-range-created selected-range-end"><div class="week-col-day">26</div></div>
					</div>
					<div class="week-row">
						<div class="week-col"><div class="week-col-day">27</div></div>
						<div class="week-col"><div class="week-col-day">28</div></div>
						<div class="week-col"><div class="week-col-day">29</div></div>
						<div class="week-col"><div class="week-col-day">30</div></div>
						<div class="week-col"><div class="week-col-day">31</div></div>
						
					</div>

				</div> -->
			</div>
			<div class="right-content">
				<a class="btn primary-bg d-block br-40 fs-20 mb-24 create-task-cta waves-effect">Create Task</a>

				<div class="card task-right br-14 create-task-container">
					<div class="fs-20 fw-600 m-b-5 blue-text">My Tasks</div>
					<div class="create-task-content">
						<div class="fs12 m-b-5">Task Title</div>
						<input class="input-field" type="text">

						<div class="fs12 m-b-5">Select Date</div>
						<input class="input-field" type="text" placeholder="(Select start and end dates on the date chart)">
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
						<div class="fs12 m-b-5">Attach Files</div>
						<div class="pr">
							<input class="input-field file" type="file">
							<label class="file-label input-field"></label>
							<span class="attachIcon"><img width="15px" src="assets/images/attach_file.svg" alt=""></span>
						</div>
						
						<div class="mb-24"><a class="blue-text fs-12 cp fw-600">+ Add Users</a></div>
						<div class="d-flex jc-sb fs16 ai-center plr-40">
							<a class="blue-text back-btn fw-600">Back</a>
							<a class="btn create-btn fw-600 waves-effect">Create</a>
						</div>
						
					</div>
				</div>

				<div class="card task-right br-14 my-task-container" id="task_info_box">
					<div class="fs-20 fw-600 m-b-5 blue-text">My Tasks</div>
					<!-- <div class="fs-15 pc m-b-10">Friday, 6th November 2020</div> -->
					<!-- <div class="content mCustomScrollbar _mCS_1"><div id="mCSB_1" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr"> -->
					<!-- <div class="task-right_item pc fs-15 project-meeting pr">
						<div class="task-right_top">
							<div class="fw-600 m-b-5">Project Meeting</div>
							<div class="m-b-5">6 Nov- 10 Nov</div>
							<div class="d-flex jc-sb"><div><div class="plus-member">+3</div></div><a class="edit-cta blue-text fs-12 cp fw-600">Edit</a></div>
						</div>
						<div class="edit-content">
							<div class="fs12 m-b-5">Label</div>
							<div class="label-content">Project Meeting</div>
							<div class="fs12 m-b-5">Select Date</div>
							<div class="label-content">6 Nov - 10 Nov</div>
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
					</div>
					<div class="task-right_item pc fs-15 accounts-meeting pr">
						<div class="fw-600 m-b-5">Accounts Meeting</div>
						<div class="m-b-5">18 Nov</div>
						<div class="d-flex jc-sb"><div><div class="plus-member">+3</div></div><a class="edit-cta blue-text fs-12 cp fw-600">Edit</a></div>
					</div>
					<div class="task-right_item pc fs-15 project-planning pr">
						<div class="fw-600 m-b-5">Project Planning</div>
						<div class="m-b-5">6 Nov- 10 Nov</div>
						<div class="d-flex jc-sb"><div><div class="plus-member">+3</div></div><a class="edit-cta blue-text fs-12 cp fw-600">Edit</a></div>
					</div>
					<div class="task-right_item pc fs-15 send-documents pr">
						<div class="fw-600 m-b-5">Send Documents</div>
						<div class="m-b-5">6 Nov- 10 Nov</div>
						<div class="d-flex jc-sb"><div><div class="plus-member">+3</div></div><a class="edit-cta blue-text fs-12 cp fw-600">Edit</a></div>
					</div>
					<div class="task-right_item pc fs-15 project-meeting pr">
						<div class="fw-600 m-b-5">Project Meeting</div>
						<div class="m-b-5">6 Nov- 10 Nov</div>
						<div class="d-flex jc-sb"><div><div class="plus-member">+3</div></div><a class="edit-cta blue-text fs-12 cp fw-600">Edit</a></div>
					</div>
					<div class="task-right_item pc fs-15 accounts-meeting pr">
						<div class="fw-600 m-b-5">Accounts Meeting</div>
						<div class="m-b-5">18 Nov</div>
						<div class="d-flex jc-sb"><div><div class="plus-member">+3</div></div><a class="edit-cta blue-text fs-12 cp fw-600">Edit</a></div>
					</div>
					<div class="task-right_item pc fs-15 project-planning pr">
						<div class="fw-600 m-b-5">Project Planning</div>
						<div class="m-b-5">6 Nov- 10 Nov</div>
						<div class="d-flex jc-sb"><div><div class="plus-member">+3</div></div><a class="edit-cta blue-text fs-12 cp fw-600">Edit</a></div>
					</div>
					<div class="task-right_item pc fs-15 send-documents pr">
						<div class="fw-600 m-b-5">Send Documents</div>
						<div class="m-b-5">6 Nov- 10 Nov</div>
						<div class="d-flex jc-sb"><div><div class="plus-member">+3</div></div><a class="edit-cta blue-text fs-12 cp fw-600">Edit</a></div>
					</div> -->
				</div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 188px; max-height: 420px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
				</div>
			</div>
		</div>
	<?php 
	$this->load->view('layout/footer') 
	?>