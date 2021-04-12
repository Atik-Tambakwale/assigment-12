<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('layout/header');
$this->load->view('layout/sidebar');


?>
<div class="main-content">
        <div class="mid-content" style="width: 950px;">
            <div class="d-flex text-white ai-center center mb40">
                <div class=" active-task type-grid" style="height: 72px;">
                    <div class="task-count" id="count_list"></div>
                    <div class="task-type"><a class="a-link-tag" href="<?php echo base_url();?>assoc">Active Associate</a></div>
                </div>
                <div class="delayed-task type-grid" style="height: 72px;">
                    <div class="task-count" id="lu_assoc"></div>
                    <div class="task-type"><a class="a-link-tag" href="<?php echo base_url();?>lu-assoc">Less Used Associate</a></div>
                </div>
                <div class="projects-created type-grid" style="height: 72px;">
                    <div class="task-count" id="iat_count_list"></div>
                    <div class="task-type"><a class="a-link-tag" href="<?php echo base_url();?>ia-assoc">Inactive Associate</a></div>
                </div>
            </div>
            <div class="row d-flex" style="display: flex;">
                <div class="col-md-4">
                    <div class="row card-label m-3">
                        <div class="col-sm-10 h-title_no">Number of Active Tasks</div>
                        <div class="col-sm-2 icon-num_bl" id="active_tasks"></div>
                    </div>
                    <br>
                    <div class="row card-label m-3">
                        <div class="col-sm-10 h-title_no">Number of completed Tasks</div>
                        <div class="col-sm-2 icon-num_gn" id="complete_tasks"></div>
                    </div>
                    <br>
                    <div class="row card-label m-3">
                        <div class="col-sm-10 h-title_no">Number of Overdue Tasks</div>
                        <div class="col-sm-2 icon-num_yl" id="due_tasks_count"></div>
                    </div>
                    <br>
                     <div class="row card-label m-3">
                        <div class="col-sm-10 h-title_no">Number of Overdue Projects</div>
                        <div class="col-sm-2 icon-num_bl" id="overdue_project_count"></div>
                    </div>
                    <br>
                </div>
                <div class="col-md-4" style="margin-left: 3px;">
                    <div class="row card-label-sqt">
                        <div class="col-sm-9 h-title_box h-title_l2">Total Messages sent till today </div>
                        <div class="col-sm-3 icon-num-box_gn" id="msg_sent_count"></div>
                    </div>
                    <br>
                     <div class="row card-label-sqt">
                        <div class="col-sm-9 h-title_box">Total Number of Messages coverted to tasks</div>
                        <div class="col-sm-3 icon-num-box_bl" id="msg_task_count"></div>
                    </div>
                    <br>
                     <div class="row card-label-sqt">
                        <div class="col-sm-9 h-title_box h-title_l1">Total count of Dailynotes</div>
                        <div class="col-sm-3 icon-num-box_yl" id="notes_count"></div>
                    </div>
                    <br>
                </div>
                
                <div class="col-md-4">
                    <div class="row  card-label-sqt">
                        <div class="col-sm-9 h-title_box h-title_l2">Total Tasks Created till Today</div>
                        <div class="col-sm-3 icon-num-box_yl" id="created_tasks_list"></div>
                    </div>
                    <br>
                     <div class="row  card-label-sqt">
                        <div class="col-sm-9 h-title_box h-title_l2">Total Number of notes converted to task</div>
                        <div class="col-sm-3 icon-num-box_gn" id="notes_task_count"></div>
                    </div>
                    <br>
                     <div class="row  card-label-sqt">
                        <div class="col-sm-9 h-title_box h-title_l2">Total count of DailySheets</div>
                        <div class="col-sm-3 icon-num-box_bl" id="dailysheet_count"></div>
                    </div>
                    <br>
                </div>
            </div>  
            <div class="row d-flex">
                <div class="col-md-6 m-6">
                    <div class="wrap mb20">
                        <div class="wrap-head fs16 d-flex jc-sb">
                            <div class="text-nevy"><span id="active_projects"></span>  Projects</div>
                            <div class="text-black">Start Date</div>
                            <div class="text-black">End Date</div>
                        </div>
                        <div class="progress-wrap" id="active_projects_list">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 m-5">
                    <div class="wrap mb20 p-b-5">
                        <div class="wrap-head fs16 d-flex jc-sb mb16 ">
                            <div class="text-custom">1 Groups</div>
                            <div class="text-black">Members</div>
                        </div>
                      

                        <div class="decision-head fs16 d-flex jc-sb mb4 collapsible_group">
                            <div class="text-custom dot l-decision">Group 1</div>
                            <div class="text-black view-details">View Members</div>
                        </div>
                        <div class="content_group" id="group_assoc">
                         
                        </div>
                    </div>
                </div>
            </div>         
        </div>
        <div class="right-content">
            <div class="right-inner">
                      <div type="button" class="d-flex ai-center fs20 collapsible_notice"><span class="active-bg circle-count">2</span>Active Notices</div>
            </div>
            <div class="right-inner">
                <div type="button" class="d-flex ai-center fs20 collapsible_notification"><span class="active-bg circle-count" id="notice_list">2</span>Notification Board</div>
                    <!-- <div class="content_notification">
                    <div class="top-text-heading">New asset recommendations in <b>Gaming Laptop</b></div>
                    <div class="top-text-light">2 hours ago</div>
                    </div>  -->
            </div> 
             
        </div>

    </div>
<?php $this->load->view('layout/footer'); ?>