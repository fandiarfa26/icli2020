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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home']                  = 'welcome';
$route['call_for_paper']        = 'welcome/callForPaper';
$route['topic']                 = 'welcome/topic';
$route['keynote_speakers']      = 'welcome/keynoteSpeakers';
$route['important_date']        = 'welcome/importantDate';
$route['venue']                 = 'welcome/venue';
$route['organizing_commitee']   = 'welcome/organizingCommitee';
$route['advisory_commitee']     = 'welcome/advisoryCommitee';
$route['scientific_commitee']   = 'welcome/scientificCommitee';
$route['brochure']              = 'welcome/brochure';
$route['article_template']      = 'welcome/article_template';
$route['contribution']          = 'welcome/contribution';

$route['choose_register']       = 'register/choose';
$route['speaker_register']      = 'register/addSpeaker';
$route['participant_register']  = 'register/addParticipant';

$route['login']                 = 'login';

$route['user/home']             = 'dashboard';
$route['user/logout']           = 'login/logout';
$route['user/important_date']   = 'dashboard/importantDate';
$route['user/profile']          = 'profile';
$route['user/payment']          = 'payment';
$route['user/payment/sendproof']= 'payment/sendProof';
$route['user/article']          = 'article';
$route['user/article/save']     = 'article/saveArticle';

$route['admin0']                = 'admin_home';
$route['admin0/login']          = 'admin_login';
$route['admin0/logout']         = 'admin_login/logout';
$route['admin0/users']          = 'admin_users';
$route['admin0/users/setActive']= 'admin_users/usersActive';
$route['admin0/payment']        = 'admin_payment';
$route['admin0/payment/confirmproof']= 'admin_payment/confirmProof';
$route['admin0/articles']       = 'admin_articles';
$route['admin0/articles/confirm']       = 'admin_articles/confirm';


$route['2019']                  = 'web2019';
$route['2019/callforpaper']     = 'web2019/callforpaper';
$route['2019/topic']            = 'web2019/topic';
$route['2019/keynotespeakers']  = 'web2019/keynotespeakers';
$route['2019/importantdate']    = 'web2019/importantdate';
$route['2019/venue']            = 'web2019/venue';
$route['2019/organizing']       = 'web2019/organizing';
$route['2019/advisory']         = 'web2019/advisory';
$route['2019/scientific']       = 'web2019/scientific';
$route['2019/brochure']         = 'web2019/brochure';
$route['2019/guidebook']        = 'web2019/guidebook';
$route['2019/templates']        = 'web2019/templates';
$route['2019/contribution']     = 'web2019/contribution';

