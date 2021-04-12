<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <title>Dashbord</title>
    <!-- <meta name="keywords" content=""> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico">
    <!-- Vendor CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" integrity="sha512-KXkS7cFeWpYwcoXxyfOumLyRGXMp7BTMTjwrgjMg0+hls4thG2JGzRgQtRfnAuKTn2KWTDZX4UdPg+xTs8k80Q==" crossorigin="anonymous" />
    <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/material-theme/vendors/bootgrid/jquery.bootgrid.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/material-theme/css/demo.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/nouislider/distribute/jquery.nouislider.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/chosen/chosen.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/ImageSelect.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/Flat.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    
    <link href="<?php echo base_url()?>assets/material-theme/css/app.min.1.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/material-theme/css/app.min.2.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/app.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom(1).css">
    <style>
        body{
            background-color: #f8f8f8;
        }
        tbody>tr>td{
            margin-right:40px;
        }
    </style>
</head>    
    <body>
        <input type="hidden" name="host" id="host" value="<?=base_url()?>">
        <header id="header" class="bg-custom">
            <div class="h-logo">
                <a href="/associate/dashboard" class="hidden-xs">
                    <img src="<?php echo base_url()?>assets/images/logo.png" alt="dailyGate_logo" style="width:120px;">
                </a>

                <div class="menu-collapse" data-ma-action="sidebar-open" data-ma-target="main-menu">
                    <div class="mc-wrap">
                        <div class="mcw-line top palette-White bg"></div>
                        <div class="mcw-line center palette-White bg"></div>
                        <div class="mcw-line bottom palette-White bg"></div>
                    </div>
                </div>
            </div>
            <div class="c-header custom-c-header">
                <li class="search-icon show-serach c-pointer  list-none">
                  <input type="text" class="search-input c-white search-input-w" placeholder="Search project/task">
               </li>
           </div>
            <ul class="h-menu m-b-0">
               <!--<li class="hm-search-trigger">
                    <a href="" data-ma-action="search-open">
                        <i class="hm-icon zmdi zmdi-search"></i>
                    </a>
                </li>
                <li class="hm-alerts" data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                    <a href=""><i class="hm-icon zmdi zmdi-notifications"></i></a>
                </li>--> 
                <li class="sort-btn show-filter m-t-5 c-pointer m-r-20 hide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="41.519" height="27.68" viewBox="0 0 41.519 27.68"><defs><style>.a{fill:#fff;}</style></defs><path class="a" d="M19.146,33.68h9.227V29.066H19.146ZM3,6v4.613H44.519V6ZM9.92,22.146H37.6V17.533H9.92Z" transform="translate(-3 -6)"></path></svg>
                </li>
                <li class="dropdown hm-profile">
                    <a data-toggle="dropdown" href="">
                        <div class="missing-company-logo text-uppercase"><?php echo $this->session->userdata('profile_pic');?>                                
                        </div>
                    </a>
                    <ul class="dropdown-menu pull-right dm-icon dropdown-rm-hover p-10">
                        <div>
                            <div class="pull-left">
                                <button class="btn btn-circle btn-lg m-r-5 d-inline-block"></button>
                            </div>
                            <div class="media-body">
                                <div class="lgi-heading f-15 f-700 m-b-0"><?php echo $this->session->userdata('name');?></div>
                                <small class="f-10 f-700"><?php echo $this->session->userdata('email');?></small>
                            </div>  
                        </div>
                        <li class="m-t-20 border-top">
                            <a href="<?=base_url()?>associate/profile/view_profile"><i class="zmdi zmdi-account"></i> View Profile</a>
                        </li>
                        <li class="switchPopover">
                            <a href="#">
                                <svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.75 30.671"><path d="M43.421,33.395V43.618H47.8V33.395Zm8.763,0V43.618h4.382V33.395ZM40.5,50.921H68.25V46.539H40.5ZM60.947,33.395V43.618h4.382V33.395ZM54.375,20.25,40.5,27.553v2.921H68.25V27.553Z" transform="translate(-40.5 -20.25)" fill="#4c4c4c"/></svg>
                                <span class="m-l-15">Switch Company</span>
                            </a>
                        </li>
                        <li class="hidden-xs">
                            <a data-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>logout"><i class="zmdi zmdi-time-restore"></i> Log out</a>
                        </li>
                    </ul>
                </li>
            </ul>                     
            
        </header>
        <div class="col-md-3 card-overlay col-width hide" id="popover-content">
            <div class="card br-5">
                <ul class="p-l-0" style="list-style:none">
                    <div class="border-bottom">
                        <div class="m-b-10">
                            <span class="f-16 f-700">Select Company</span>
                            <i class="pull-right f-16 m-t-5 zmdi zmdi-close zmdi-hc-fw c-pointer c-black" id="hideClose"></i>
                        </div>
                    </div>
                    <li>
                        <div class="pull-left">
                            <button class="btn adm-btn-circle btn-lg m-r-5 waves-effect" style="display:inline-block;"></button>
                        </div>
                        <div class="media-body m-t-6">
                            <div class="lgi-heading">Company Name</div>
                        </div>  
                    </li>
                    <li>
                        <div class="pull-left">
                            <button class="btn adm-btn-circle btn-lg m-r-5 waves-effect" style="display:inline-block;"></button>
                        </div>
                        <div class="media-body m-t-6">
                            <div class="lgi-heading">Company Name</div>
                        </div>  
                    </li>
                    <li>
                        <div class="pull-left">
                            <button class="btn adm-btn-circle btn-lg m-r-5 waves-effect" style="display:inline-block;"></button>
                        </div>
                        <div class="media-body m-t-6">
                            <div class="lgi-heading">Company Name</div>
                        </div>  
                    </li>
                    <li>
                        <div class="pull-left">
                            <button class="btn adm-btn-circle btn-lg m-r-5 waves-effect" style="display:inline-block;"></button>
                        </div>
                        <div class="media-body m-t-6">
                            <div class="lgi-heading">Company Name</div>
                        </div>  
                    </li>
                    <li>
                        <div class="pull-left">
                            <button class="btn adm-btn-circle btn-lg m-r-5 waves-effect" style="display:inline-block;"></button>
                        </div>
                        <div class="media-body m-t-6">
                            <div class="lgi-heading">Company Name</div>
                        </div>  
                    </li>
                    <li>
                        <div class="pull-left">
                            <button class="btn adm-btn-circle btn-lg m-r-5 waves-effect" style="display:inline-block;"></button>
                        </div>
                        <div class="media-body m-t-6">
                            <div class="lgi-heading">Company Name</div>
                        </div>  
                    </li>
                </ul>
            </div>
        </div> 