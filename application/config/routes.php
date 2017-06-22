<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['register']  = 'auth/register';
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';
$route['verify/(:any)/(:any)'] = 'auth/verify/$1/$2';
$route['profile'] = 'user/profile';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
