<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

        <section id="main">
            <aside id="s-user-alerts" class="sidebar">
                <ul class="tab-nav tn-justified tn-icon m-t-10" data-tab-color="teal">
                    <li><a class="sua-messages" href="#sua-messages" data-toggle="tab"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a class="sua-notifications" href="#sua-notifications" data-toggle="tab"><i class="zmdi zmdi-notifications"></i></a> <span style="position: absolute; top:14px; left: 169px; background: #e04848;" class="badge al-notifications-cnt">0</span></li>
                    <li><a class="sua-tasks" href="#sua-tasks" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade" id="sua-messages">
                        <ul class="sua-menu list-inline list-unstyled palette-Light-Blue bg">
                            <li><a href=""><i class="zmdi zmdi-check-all"></i> Mark all</a></li>
                            <li><a href=""><i class="zmdi zmdi-long-arrow-tab"></i> View all</a></li>
                            <li><a href="" data-ma-action="sidebar-close"><i class="zmdi zmdi-close"></i> Close</a></li>
                        </ul>

                        <div class="list-group lg-alt c-overflow">
                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="<?php echo base_url()?>assets/material-theme/img/profile-pics/1.jpg" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="lgi-heading">David Villa Jacobs</div>
                                    <small class="lgi-text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                </div>
                            </a>
                        </div>

                        <a href="" class="btn btn-float btn-danger m-btn">
                            <i class="zmdi zmdi-plus"></i>
                        </a>
                    </div>
                    <div class="tab-pane fade" id="sua-notifications">
                        <ul class="sua-menu list-inline list-unstyled palette-Orange bg" id="sh-all-notifications">
                            <!-- <li><a href=""><i class="zmdi zmdi-volume-off"></i> Mute</a></li> -->
                            <li><a href="/associate/notice"><i class="zmdi zmdi-long-arrow-tab"></i> View My Notice's</a></li>
                            <li><a href="" data-ma-action="sidebar-close"><i class="zmdi zmdi-close"></i> Close</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="sua-tasks">
                        <ul class="sua-menu list-inline list-unstyled palette-Green-400 bg">
                            <li><a href=""><i class="zmdi zmdi-time"></i> Archived</a></li>
                            <li><a href=""><i class="zmdi zmdi-check-all"></i> Mark all</a></li>
                            <li><a href="" data-ma-action="sidebar-close"><i class="zmdi zmdi-close"></i> Close</a></li>
                        </ul>

                        <div class="list-group lg-alt c-overflow">
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">HTML5 Validation Report</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                        <span class="sr-only">95% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">HTML5 Validation Report</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                        <span class="sr-only">95% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">HTML5 Validation Report</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                        <span class="sr-only">95% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">HTML5 Validation Report</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                        <span class="sr-only">95% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">HTML5 Validation Report</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                        <span class="sr-only">95% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">HTML5 Validation Report</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                        <span class="sr-only">95% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">HTML5 Validation Report</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                        <span class="sr-only">95% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">Google Chrome Extension</div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">Social Intranet Projects</div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">Bootstrap Admin Template</div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">Youtube Client App</div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="" class="btn btn-float btn-danger m-btn">
                            <i class="zmdi zmdi-plus"></i>
                        </a>
                    </div>
                </div>
            </aside>
            <aside id="s-main-menu" class="sidebar" style="
    background: #ffffff;
    padding: 8px;
">
                <div class="smm-header">
                    <i class="zmdi zmdi-long-arrow-left" data-ma-action="sidebar-close"></i>
                </div>

                <ul class="smm-alerts">
                    <li data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                        <i class="zmdi zmdi-email"></i>
                    </li>
                    <li data-user-alert="sua-notifications" data-ma-action="sidebar-open" data-ma-target="user-alerts" onclick="updateNoticeCount(); return false;">
                        <i class="zmdi zmdi-notifications"></i><span style="position: absolute; top:22px; background: #e04848;" class="badge al-notifications-cnt">0</span>
                    </li>
                    <li data-user-alert="sua-tasks" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                        <i class="zmdi zmdi-view-list-alt"></i>
                    </li>
                </ul>

                <ul class="main-menu lg-main-menu" style="
    margin-top: 93px;
">
                    <li class="menu-item ">
                        <select name="comapny_name" id="comapny_name" class="form-control">
                        </select>
                    </li>    
                    </li>
                    <li class="menu-item ">
                        <a href="<?php echo base_url()?>dashboard"><i class="zmdi zmdi-home"></i> Dashboard</a>
                    </li>
                    <li class="sub-menu menu-item ">
                        <a href="" data-ma-action="submenu-toggle">
                        <i class="zmdi zmdi-user"></i>      
                        Associate
                    </a>
                    <ul>
                        <li><a href="<?php echo base_url()?>assoc_dashboard"><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i> <span>Dashboard</span></a></li>
                        <li> <a href="<?php echo base_url()?>assoc"><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i> <span>Lists</span></a></li>
                    </ul>
                </li>
                <li class="menu-item ">
                    <a href="<?php echo base_url()?>task">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 486 486" id="vector">
                            <path
                            id="path_8"
                            d="M 344.25 202.5 L 141.75 202.5 L 141.75 243 L 344.25 243 L 344.25 202.5 Z M 384.75 60.75 L 364.5 60.75 L 364.5 20.25 L 324 20.25 L 324 60.75 L 162 60.75 L 162 20.25 L 121.5 20.25 L 121.5 60.75 L 101.25 60.75 C 78.772 60.75 60.953 78.975 60.953 101.25 L 60.75 384.75 C 60.75 407.025 78.772 425.25 101.25 425.25 L 384.75 425.25 C 407.025 425.25 425.25 407.025 425.25 384.75 L 425.25 101.25 C 425.25 78.975 407.025 60.75 384.75 60.75 Z M 384.75 384.75 L 101.25 384.75 L 101.25 162 L 384.75 162 L 384.75 384.75 Z M 283.5 283.5 L 141.75 283.5 L 141.75 324 L 283.5 324 L 283.5 283.5 Z"
                            fill="#4c4c4c"/>
                        </svg>
                    Tasks</a>
                </li>

                   <!--  <li>
                        <li class="menu-item ">
                            <a href="project-list.html">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 486 486" id="vector">
                                    <path id="path_6" d="M 384.75 60.75 L 101.25 60.75 C 78.975 60.75 60.75 78.975 60.75 101.25 L 60.75 384.75 C 60.75 407.025 78.975 425.25 101.25 425.25 L 384.75 425.25 C 407.025 425.25 425.25 407.025 425.25 384.75 L 425.25 101.25 C 425.25 78.975 407.025 60.75 384.75 60.75 Z M 182.25 344.25 L 141.75 344.25 L 141.75 202.5 L 182.25 202.5 L 182.25 344.25 Z M 263.25 344.25 L 222.75 344.25 L 222.75 141.75 L 263.25 141.75 L 263.25 344.25 Z M 344.25 344.25 L 303.75 344.25 L 303.75 263.25 L 344.25 263.25 L 344.25 344.25 Z" fill="#4c4c4c"/>
                                </svg>
                                <span>Project</span>
                            </a>
                        </li>
                    </li>
                    <li class="menu-item">
                        <a href="" target="_blank" id="sendTomessenger"> 
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 486 486" id="vector">
                                <path id="path_3" d="M 8.586 234.333 L 120.577 276.129 L 163.928 415.53 C 166.698 424.456 177.617 427.761 184.858 421.832 L 247.277 370.948 C 253.822 365.618 263.137 365.359 269.973 370.316 L 382.563 452.061 C 390.307 457.699 401.29 453.454 403.234 444.074 L 485.708 47.336 C 487.831 37.098 477.77 28.561 468.034 32.335 L 8.456 209.628 C -2.884 214.002 -2.786 230.056 8.586 234.333 Z M 156.929 253.87 L 375.791 119.07 C 379.728 116.656 383.778 121.97 380.392 125.113 L 199.762 293.009 C 193.412 298.922 189.313 306.828 188.163 315.414 L 182.007 361.017 C 181.197 367.108 172.643 367.708 170.959 361.811 L 147.29 278.656 C 144.585 269.179 148.538 259.054 156.929 253.87 Z" fill="#4c4c4c"/>
                            </svg>
                            <span>Messenger</span>
                        </a>
                    </li>
                    <li>
                    <li class="menu-item associate/forms"><i class="zmdi zmdi-tv-list zmdi-hc-fw"></i> <span>Daily Sheet</span></a></li>
                    </li>
                    <li>
                        <li class="menu-item "><a href="request-list.html">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 486 486" id="vector">
                            <path id="path_7" d="M 101.25 81 L 101.25 121.5 L 384.75 121.5 L 384.75 81 L 101.25 81 Z M 101.25 283.5 L 182.25 283.5 L 182.25 405 L 303.75 405 L 303.75 283.5 L 384.75 283.5 L 243 141.75 L 101.25 283.5 Z" fill="#4c4c4c"/>
                        </svg>
                        <span>Request</span></a></li>
                    </li>
                    <li>
                        <li class="menu-item">
                            <a href="decision-list.html">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 486 486" id="vector">
                                    <path id="path" d="M 298.4 424.7 L 298.4 438.9 C 298.4 450.2 290.1 459.6 279.3 461.2 L 275.8 474.1 C 273.9 481.1 267.6 486 260.3 486 L 225.6 486 C 218.3 486 212 481.1 210.1 474.1 L 206.7 461.2 C 195.8 459.5 187.5 450.2 187.5 438.8 L 187.5 424.6 C 187.5 417 193.6 410.9 201.2 410.9 L 284.7 410.9 C 292.3 411 298.4 417.1 298.4 424.7 Z M 362.7 233.3 C 362.7 265.6 349.9 294.9 329.1 316.4 C 313.3 332.8 303.1 353.7 299.7 376 C 298.2 385.6 289.9 392.7 280.1 392.7 L 205.8 392.7 C 196.1 392.7 187.7 385.7 186.3 376.1 C 182.8 353.8 172.5 332.6 156.7 316.3 C 136.3 295.1 123.6 266.3 123.3 234.6 C 122.6 168 175.6 114.1 242.2 113.6 C 308.7 113.1 362.7 166.9 362.7 233.3 Z M 256.5 160.8 C 256.5 153.4 250.5 147.3 243 147.3 C 195.4 147.3 156.6 186 156.6 233.7 C 156.6 241.1 162.6 247.2 170.1 247.2 C 177.5 247.2 183.6 241.2 183.6 233.7 C 183.6 200.9 210.3 174.3 243 174.3 C 250.5 174.3 256.5 168.3 256.5 160.8 Z M 243 74.3 C 250.4 74.3 256.5 68.3 256.5 60.8 L 256.5 13.5 C 256.5 6.1 250.5 0 243 0 C 235.5 0 229.5 6 229.5 13.5 L 229.5 60.8 C 229.5 68.3 235.6 74.3 243 74.3 Z M 84.1 233.2 C 84.1 225.8 78.1 219.7 70.6 219.7 L 23.3 219.7 C 15.9 219.7 9.8 225.7 9.8 233.2 C 9.8 240.6 15.8 246.7 23.3 246.7 L 70.6 246.7 C 78.1 246.7 84.1 240.7 84.1 233.2 Z M 462.7 219.7 L 415.4 219.7 C 408 219.7 401.9 225.7 401.9 233.2 C 401.9 240.6 407.9 246.7 415.4 246.7 L 462.7 246.7 C 470.1 246.7 476.2 240.7 476.2 233.2 C 476.2 225.8 470.2 219.7 462.7 219.7 Z M 111.6 345.6 L 78.1 379.1 C 72.8 384.4 72.8 392.9 78.1 398.2 C 80.7 400.8 84.2 402.1 87.6 402.1 C 91 402.1 94.5 400.8 97.1 398.2 L 130.6 364.7 C 135.9 359.4 135.9 350.9 130.6 345.6 C 125.4 340.3 116.8 340.3 111.6 345.6 Z M 364.9 124.8 C 368.3 124.8 371.8 123.5 374.4 120.9 L 407.9 87.4 C 413.2 82.1 413.2 73.6 407.9 68.3 C 402.6 63 394.1 63 388.8 68.3 L 355.3 101.8 C 350 107.1 350 115.6 355.3 120.9 C 358 123.5 361.4 124.8 364.9 124.8 Z M 111.6 120.8 C 114.2 123.4 117.7 124.7 121.1 124.7 C 124.5 124.7 128 123.4 130.6 120.8 C 135.9 115.5 135.9 107 130.6 101.7 L 97.1 68.2 C 91.8 62.9 83.3 62.9 78 68.2 C 72.7 73.5 72.7 82 78 87.3 L 111.6 120.8 Z M 374.4 345.6 C 369.1 340.3 360.6 340.3 355.3 345.6 C 350 350.9 350 359.4 355.3 364.7 L 388.8 398.2 C 391.4 400.8 394.9 402.1 398.3 402.1 C 401.7 402.1 405.2 400.8 407.8 398.2 C 413.1 392.9 413.1 384.4 407.8 379.1 L 374.4 345.6 Z" fill="#4c4c4c"/>
                                </svg>
                                <span>Decisions</span>
                            </a>
                        </li>
                    </li>
                    <li>
                        <li  class="menu-item">
                            <a href="notice-list.html">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 486 486" id="vector">
                                    <path
                                        id="path_4"
                                        d="M 136.826 124.937 L 69.029 124.937 C 69.029 124.937 15.448 127.263 15.448 179.108 L 15.448 250.498 C 15.448 250.498 14.337 310.311 66.86 310.311 C 66.86 310.311 85.449 321.871 85.449 343.776 L 85.449 472.774 C 85.449 472.774 82.169 493.481 102.928 493.481 C 102.928 493.481 163.556 502.923 133.511 440.923 C 156.232 417.509 136.08 393.521 136.08 393.521 C 136.08 393.521 156.527 373.977 136.826 347.23 C 136.826 347.23 154.34 323.034 154.34 309.2 L 155.416 144.516 C 155.416 144.498 158.714 124.937 136.826 124.937 Z M 57.903 254.143 C 57.903 262.735 50.961 269.713 42.317 269.713 C 33.708 269.713 26.765 262.735 26.765 254.143 L 26.765 178.969 C 26.765 170.378 33.708 163.417 42.317 163.417 C 50.961 163.417 57.903 170.378 57.903 178.969 L 57.903 254.143 Z"
                                        fill="#4c4c4c"
                                        stroke="#000000"/>
                                    <path
                                        id="path_5"
                                        d="M 447.415 158.714 L 447.415 8.227 C 447.415 -11.473 430.735 10.38 430.735 10.38 C 351.864 132.886 189.106 123.062 189.106 123.062 C 169.874 123.062 172.929 139.447 172.929 139.447 L 172.929 281.585 C 172.929 297.97 190.078 297.97 190.078 297.97 C 372.068 297.97 434.067 412.978 434.067 412.978 C 434.067 412.978 448.404 430.822 447.415 412.232 L 447.415 262.023 C 465.831 252.095 478.554 232.811 478.554 210.351 C 478.554 187.908 465.814 168.642 447.415 158.714 Z"
                                        fill="#4c4c4c"/>
                                </svg>
                                <span>Add Notice</span>
                            </a>
                        </li>
                    </li>
                    <li>
                        <li class="menu-item">
                            <a href="department-list.html">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path id="department" d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" fill="#4c4c4c"/></svg>
                                <span>Department</span>
                            </a>
                        </li>
                    </li> -->
                </ul>
            </aside>
            <section id="content"  style="background-color: #f8f8f8;">
                <div class="container-fluid">