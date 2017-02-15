<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'User_c';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['parents'] = 'User_c/parents';
$route['getParents'] = 'User_c/getParents';
$route['searchParents'] = 'User_c/searchParents';
$route['parentsPage'] = 'User_c/parentsPage'; 
$route['newstudent'] = 'User_c/student_registration';
$route['registerStudent'] = 'User_c/registerStudent';