<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['add/service'] = 'auth/login';

$route['login'] = 'auth/login';
$route['register'] = 'auth/register';

$route['services'] = 'pages/services';
$route['services/add'] = 'products/add';
$route['cart'] = 'pages/cart';
$route['cart/(:any)'] = 'products/cart/$1';
$route['checkout'] = 'pages/checkout';
$route['details/(:any)'] = 'pages/details/$1';

$route['products/info/(:any)'] = 'products/info/$1';

$route['index'] = 'pages';
$route['home'] = 'pages';
$route['(:any)'] = 'pages';

$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
