<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'auth/login';
$route['register'] = 'auth/register';

$route['services'] = 'pages/services';
$route['services/add'] = 'products/add';
$route['cart'] = 'pages/cart';
$route['checkout'] = 'pages/checkout';
$route['details/(:any)'] = 'pages/details/$1';

$route['index'] = 'pages';
$route['home'] = 'pages';
$route['(:any)'] = 'pages';

$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
