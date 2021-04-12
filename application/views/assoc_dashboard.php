 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('layout/header');
$this->load->view('layout/sidebar');

?>
<div class="row d-flex" style="margin-top: 28px;margin-left: 20px;"> 
 <div class="mid-content">
	<div class="d-flex text-white ai-center center mb40">
		<div class="active-task type-grid" style="height: 75px;">
			<div class="task-count" id="active_tasks"></div>
			<div class="task-type"> <a class="a-link-tag" href="<?php echo base_url()?>task"> Active Tasks</a></div>
		</div>
		<div class="delayed-task type-grid" style="height: 75px;">
			<div class="task-count" id="overdue_project_count"></div>
			<div class="task-type">Delayed/Due Projects</div>
		</div>
		<div class="projects-created type-grid" style="height: 75px;">
			<div class="task-count" id="active_projects"></div>
			<div class="task-type" >Projects Created</div>
		</div>
	</div>
	<div class="wrap mb20">
		<div class="wrap-head fs16 d-flex jc-sb">
			<div class="text-nevy">Most Viewed Projects</div>
			<div class="text-black">Project Progress</div>
		</div>
		<div class="progress-wrap" id="project_progress">
			<!-- <div class="project-progress d-flex jc-sb ai-center fs20">
				<div class="p-lft text-black dot">Project 1</div>
				<div class="progress-bars flex-1"><span class="progressed active-bg" style="width:70%;"></span></div>
				<div class="p-rgt text-nevy">70%</div>
			</div> -->
		</div>
		


	</div>
	<div class="wrap mb20 p-b-5">
		<div class="wrap-head fs16 d-flex jc-sb mb16">
			<div class="text-custom">Latest Decisions</div>
			<div class="text-black">Members</div>
		</div>
		<div type="button" class="decision-head fs16 d-flex jc-sb mb4 collapsible">
			<div class="text-custom dot l-decision">Decision abc</div>
			<div class="text-black view-details">View Details</div>
		</div>
		<div class=" fs16 content" id="decision_info">
			<!-- <div class="row">
				<div class="col-md-2">a</div>
				<div class="col-md-2">b</div>
				<div class="col-md-2">n</div>
				<div class="col-md-2">g</div>
				<div class="col-md-2">j</div>
			</div> -->
		</div>
	</div>   	
</div>
<div class="right-content">
	<div class="right-inner">
		<div class="d-flex ai-center fs20"><span class="bg-color-green circle-count">1</span>Notification Board</div>
	</div>
	<div class="right-inner">
		<div class="d-flex ai-center fs20"><span class="active-bg circle-count">2</span>Active Notices</div>
	</div>
	
</div>
</div>
<?php $this->load->view('layout/footer'); ?>