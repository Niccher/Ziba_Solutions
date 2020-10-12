<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['add/service'] = 'auth/login';

$route['login'] = 'auth/login';
$route['login_admin'] = 'auth/admin_log';
$route['register'] = 'auth/register';
$route['logout'] = 'auth/user_logout';

$route['admin'] = 'pages/admin';
$route['orders'] = 'pages/orders';
$route['sellers'] = 'pages/sellers';

$route['list/users'] = 'pages/admin';
$route['list/orders'] = 'pages/orders';
$route['list/sellers'] = 'pages/sellers';

$route['services'] = 'pages/services';
$route['services/cat/(:any)'] = 'products/cat/$1';

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
