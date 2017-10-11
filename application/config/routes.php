<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'homepage';
$route['404_override'] = 'default_controller/notfound';
$route['translate_uri_dashes'] = TRUE;


$route['login'] = 'default_controller/login';
$route['logout'] = 'default_controller/logout';
$route['inventaris'] = 'inventaris';
$route['inventaris/result'] = 'inventaris/search';
$route['inventaris/tambah'] = 'inventaris/tambah';
$route['inventaris/edit/(:num)'] = 'inventaris/edit/$1';
$route['inventaris/hapus/(:num)'] = 'inventaris/hapus/$1';
$route['inventaris/detail/(:num)'] = 'inventaris/detail/$1';
$route['tentang-perusahaan'] = 'default_controller/tentang';

$route['jenis_barang/tambah'] = 'jenis_barang/tambah';
$route['jenis_barang/edit/(:num)'] = 'jenis_barang/edit/$1';
$route['jenis_barang/hapus/(:num)'] = 'jenis_barang/hapus/$1';

$route['dana_barang/tambah'] = 'dana_barang/tambah';
$route['dana_barang/edit/(:num)'] = 'dana_barang/edit/$1';
$route['dana_barang/hapus/(:num)'] = 'dana_barang/hapus/$1';

$route['users/tambah'] = 'users/tambah';
$route['users/edit/(:num)'] = 'users/edit/$1';
$route['users/hapus/(:num)'] = 'users/hapus/$1';

$route['rekap_barang'] = 'rekap_barang';
