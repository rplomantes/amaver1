<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
//Route::get('home', 'HomeController@index');

Route::get('checksession','CheckSessionController@index');

Route::get('/','PortalController@index');
Route::post('/','PortalController@store');
Route::get('book/delete/{id}','PortalController@destroy');

Route::post('interest','InterestController@store');

Route::get('evaluation','EvaluationController@search');
Route::post('evaluation','EvaluationController@search');
Route::post('view','EvaluationController@update');
Route::get('view/{id}','EvaluationController@view');
Route::get('notifystudent/{id}','EvaluationController@notifystudent');
Route::post('enrollment','EvaluationController@enrollment');
Route::post('shortcourse','EvaluationController@shortcourse');
Route::get('audit','AuditController@index');
Route::post('audit','AuditController@enrollment');
Route::post('auditshortcourse','AuditController@shortcourse');

Route::get('individual/userid/{id}/requestid/{requestid}', 'AuditController@view');
Route::get('individualshortcourse/userid/{id}/requestid/{requestid}', 'AuditController@shortcourseindividual');
Route::get('roy',function(){
return "Roy";
});

Route::get('changecourse/{id}','EvaluationController@changeCourse');
Route::post('changecourse','EvaluationController@doChange');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


