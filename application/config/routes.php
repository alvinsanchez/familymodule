<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'User_c';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['parents'] = 'User_c/parents';
$route['getParents'] = 'User_c/getParents';