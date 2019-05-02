<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'students';
// administrator routes
$route['admin'] = 'administrator/login';
$route['admin_dashboard'] = 'administrator';

$route['addprofessor'] = 'administrator/addProf';
$route['professors'] = 'administrator/profList';
$route['addprof'] = 'administrator/createProf';
$route['addsub'] = 'administrator/createSub';
$route['addstud'] = 'administrator/createStud';
$route['viewProfile/(:num)'] = 'administrator/viewprofile/$1';
$route['viewSubject/(:num)/(:num)'] = 'administrator/viewsubject/$1/$1';
$route['searchstud'] = 'administrator/searchStud';
$route['importstudents'] = 'administrator/importStud';
$route['students'] = 'administrator/studList';
$route['exams'] = 'administrator/examList';
$route['question_banks'] = 'administrator/banksList';
$route['addqbank'] = 'administrator/createQBank';
$route['getbanks'] = 'administrator/getBanks';
$route['viewBank/(:num)'] = 'administrator/viewBank/$1';
$route['createQuestion'] = 'administrator/createQ';
$route['addexam'] = 'administrator/createExam';
$route['saveQuestion'] = 'administrator/addTempQuestion';
$route['getBankQuestions'] = 'administrator/getBankQuestions';
$route['addExamination'] = 'administrator/addExamination';
$route['addstudent'] = 'administrator/createStudForm';
$route['admin_login'] = 'administrator/adminLogin';
$route['alogout'] = 'administrator/adminLogout';
$route['viewA/(:num)'] = 'administrator/viewAnalysis/$1';
$route['addtopic'] = 'administrator/addtopic';
$route['loadtopics'] = 'administrator/loadtopics';


//students


$route['sdashboard'] = 'students/dashboard';
$route['student_login'] = 'students/checkLogin';
$route['examinations'] = 'students/examinations';
$route['slogout'] = 'students/studentLogout';
$route['takeExam/(:num)'] = 'students/take_exam/$1';
$route['startExam/(:num)'] = 'students/start_exam/$1';
$route['submitQuiz'] = 'students/submitQuiz';
$route['saveScore'] = 'students/saveScore';


//professor
$route['prof'] = 'prof';
$route['prof_login'] = 'prof/checkLogin';
$route['ilogout'] = 'prof/profLogout';
$route['idashboard'] = 'prof/dashboard';
$route['profile'] = 'prof/viewprofile';
$route['prof_subjects/(:num)/(:num)'] = 'prof/viewsubject/$1/$1';
$route['view_exams/(:num)'] = 'prof/view_exams/$1';
$route['prof_banks'] = 'prof/banklist';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
