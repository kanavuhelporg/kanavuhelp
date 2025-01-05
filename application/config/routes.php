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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'kanavuhelp';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['index'] = 'kanavuhelp';
$route['kanavuhome'] = 'kanavuhelp';
$route['login'] = 'kanavuhelp/login';
$route['register'] = 'kanavuhelp/register';
$route['dummy'] = 'kanavuhelp/dummyl';
$route['startahelp'] = 'kanavuhelp/startahelp';
$route['donate'] = 'kanavuhelp/donate';
$route['myhelps'] = 'donors/myhelps';
$route['login_myhelps'] = 'donors/login_myhelps';
$route['blogs'] = 'kanavuhelp/blogs';
$route['contactus'] = 'kanavuhelp/contactus';
$route['individual'] = 'kanavuhelp/individual';
$route['charity'] = 'kanavuhelp/charity';
$route['abouts'] = 'kanavuhelp/abouts';
$route['logout'] = 'kanavuhelp/logout';
$route['adminlogout'] = 'admin/adminlogout';
$route['helpus/(:any)-(:num)'] = 'kanavuhelp/helpus/$2/$1';
$route['indexpage'] = 'kanavuhelp/indexpage';
$route['processDonation'] = 'kanavuhelp/processDonation';
$route['myFundraisers'] = 'kanavuhelp/user_causes';
$route['myDonations'] = 'donors/mydonations';
$route['data/fetch/(:any)'] = 'data/fetch/$1';
$route['admindashbord'] = 'admin/admindashbord';
$route['admin'] = 'admin/admin';
$route['verifytransaction'] = 'admin/transactionverification';
$route['admin/logout'] = 'admin/logout';
$route['causesverification'] = 'admin/causesverification';
$route['transactionverification'] = 'admin/transactionverification';
$route['contact_submissions'] = 'admin/contact_submissions';
$route['login_modal'] = 'kanavuhelp/login_modal';
$route['login_modal1'] = 'kanavuhelp/login_modal1';
$route['filterCauses'] = 'kanavuhelp/filterCauses';
$route['helpus/fundraiserprofile'] = 'kanavuhelp/fundraiserProfile';
$route['contact'] = 'contact/index';
$route['contact/submit'] = 'contact/submit';
$route['contact/success'] = 'contact/success'; // Create a success page or redirect
$route['contact/failure'] = 'contact/failure'; // Handle form failure
$route['admin/dashboard'] = 'admin/dashboard';
$route['register'] = 'kanavuhelp/register';
$route['profile'] = 'kanavuhelp/profile';
$route['login'] = 'kanavuhelp/login';
$route['profile_edit'] = 'kanavuhelp/editProfile';  // Add this line for editing profile
$route['contact_submissions'] = 'admin/contact_submissions';
$route['profile/viewProfile'] = 'profile/viewProfile';
$route['profile/editProfile'] = 'profile/editProfile';
$route['privacy_policy'] = 'kanavuhelp/privacy_policy';
$route['terms_of_use'] = 'kanavuhelp/terms_of_use';
$route['send'] = 'kanavuhelp/send';
$route['sendcauseVerficationstatus'] = 'admin/sendcauseVerficationstatus';
$route['changeCausespagepagesetup'] = 'admin/changeCausespagepagesetup';
$route['changeVerificationpagesetup'] = 'admin/changeVerificationpagesetup';
$route['changeContactpagesetup'] = 'admin/changeContactpagesetup';
$route['sendtransactionVerficationstatus'] = 'admin/sendtransactionVerficationstatus';
$route['updatecause'] = 'kanavuhelp/updatecause';
$route['fetchDonordata'] = 'donors/fetchDonordata';
$route['helpus/fetchDonordata'] = 'donors/fetchDonordata';
$route['donorLogin'] = 'donors/donorLogin';
$route['donor_otp_email'] = 'donors/donor_otp_email';
$route['filterCauses'] = 'donations/filterCauses';

