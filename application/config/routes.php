<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'C_login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['auth']="C_login/assoc_login";
$route['logout'] ='C_login/logout';

$route['dashboard']='Dashboard';
$route['loadFCD']='Dashboard/Fetch_Company_details';
$route['taskDisplay']='Dashboard/Tasks_Details';
$route['desicionDisplay']='Dashboard/Decision_Details';
$route['notesDisplay']='Dashboard/Notes_Details';
$route['notificationDisplay']='Dashboard/Notification_details';
$route['msgDisplay']='Dashboard/msg_details';
$route['projectDisplay']='Project/Project_Details';

$route['assoc_dashboard']='dashboard/Assoc_Dashboard';

$route['task']='Task';
$route['loadTask']='Task/loadTaskDates';
$route['loadDates']='Task/loadTaskDates';
$route['assigned_view']='Task/assigned_page';
$route['assoc']='Associate';
$route['at_assoc']="Associate/displayActiveAssocList";


$route['lu-assoc']='Associate/lu_Associate';

$route['ia-assoc']='Associate/ia_Associate';
$route['iat_assoc']="Associate/displayInActiveAssocList";
$route['lsa_assoc']="Associate/displayLessUsedAssocLsit";