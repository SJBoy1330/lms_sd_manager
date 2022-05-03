<?php

defined('BASEPATH') or exit('No direct script access allowed');



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

$route['default_controller'] = 'auth/controller_ctl';

$route['auth'] = 'auth/controller_ctl';
$route['auth/(:any)'] = 'auth/controller_ctl/$1';
$route['auth/(:any)/(:any)'] = 'auth/controller_ctl/$1/$2';

$route['dashboard'] = 'gate/controller_ctl';
$route['dashboard/(:any)'] = 'gate/controller_ctl/$1';
$route['dashboard/(:any)/(:any)'] = 'gate/controller_ctl/$1/$2';

$route['gate'] = 'gate/controller_ctl';
$route['gate/(:any)'] = 'gate/controller_ctl/$1';
$route['gate/(:any)/(:any)'] = 'gate/controller_ctl/$1/$2';


$route['sekolah'] = 'gate/controller_ctl';
$route['sekolah/(:any)'] = 'gate/controller_ctl//$1';
$route['sekolah/(:any)/(:any)'] = 'gate/controller_ctl//$1/$2';


$route['user'] = 'gate/controller_ctl/user';
$route['user/(:any)'] = 'gate/controller_ctl/user/$1';
$route['user/(:any)/(:any)'] = 'gate/controller_ctl/user/$1/$2';


$route['staf'] = 'gate/controller_ctl/staf';
$route['staf/(:any)'] = 'gate/controller_ctl/staf/$1';
$route['staf/(:any)/(:any)'] = 'gate/controller_ctl/staf/$1/$2';


$route['bantuan'] = 'gate/controller_ctl/bantuan';
$route['bantuan/(:any)'] = 'gate/controller_ctl/bantuan/$1';
$route['bantuan/(:any)/(:any)'] = 'gate/controller_ctl/bantuan/$1/$2';


$route['kategori_bantuan'] = 'gate/controller_ctl/kategori_bantuan';
$route['kategori_bantuan/(:any)'] = 'gate/controller_ctl/kategori_bantuan/$1';
$route['kategori_bantuan/(:any)/(:any)'] = 'gate/controller_ctl/kategori_bantuan/$1/$2';



$route['pembayaran'] = 'gate/controller_ctl/pembayaran';
$route['pembayaran/(:any)'] = 'gate/controller_ctl/pembayaran/$1';
$route['pembayaran/(:any)/(:any)'] = 'gate/controller_ctl/pembayaran/$1/$2';


$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;
