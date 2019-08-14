<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'patient'], function () {
    Route::get('/login','PatientController@loginForm');
    Route::post('/login','PatientController@login');
    Route::post('/register','PatientController@createPatient');
    Route::get('register','PatientController@register');
});
Route::group(['prefix' => 'hospital'], function () {
    Route::get('/consult','PatientController@consult');
    Route::post('/consult','PatientController@saveConsultation');
    Route::get('/home','PatientController@home');
    Route::get('/viewreply','PatientController@viewReply');
    Route::get('/description', 'PatientController@viewSolution');
    Route::post('/diet','PatientController@diet');
    Route::any('/dietdisplay','PatientController@viewDiet');
    Route::get('/password','PatientController@changepatient');
    Route::post('/password','PatientController@changespatient');
    Route::view('/viewhelp','pages.patienthelp');
});
Route::group(['prefix' => 'doctor'], function () {
    Route::get('/login','DoctorController@showLoginForm');
    Route::post('/login', 'DoctorController@login');
    Route::get('/register','DoctorController@showRegisterForm');
    Route::post('/register','DoctorController@register');
    Route::view('/registerchief','pages.chiefregister');
    Route::post('/registerchief','DoctorController@registerchief');
    Route::get('/getconsultations','DoctorController@getConsultation');
    Route::get('/viewdescription','DoctorController@description');
    Route::get('/sendreply','DoctorController@reply');
    Route::view('/diet','pages.dietentry');
    Route::post('/sendreply','DoctorController@sendreply');
    Route::view('/chiefhealthlogin','pages.chieflogin');
    Route::get('/dietregister','DoctorController@registerdiets');
    Route::post('/dietregister','DoctorController@registerdiet');
    Route::post('/logindiet','DoctorController@logindietician');
    Route::view('/getdietician','pages.dietlogin');
    Route::post('/loginchief','DoctorController@loginchief');
    Route::get('/viewdoctors','DoctorController@viewDoctors');
    Route::get('/viewpatients','DoctorController@viewPatients');
    Route::post('/findpatient','DoctorController@findPatient');
    Route::post('/finddoctor','DoctorController@findDoctor');
    Route::get('/removedoctor','DoctorController@deleteDoctor');
    Route::get('/removepatient','DoctorController@deletePatient');
    Route::get('/changechief','DoctorController@changechief');
    Route::post('/changeschief','DoctorController@changeschief');
    Route::view('/getchiefhelp','pages.chiefhelp');
    Route::view('/getdoctorhelp','pages.doctorhelp');
    Route::get('/changedoctor','DoctorController@changedoctor');
    Route::post('/changedoctor','DoctorController@changesdoctor');
    Route::get('/changediet','DoctorController@changediet');
    Route::post('/changediet','DoctorController@changesdiet');
    Route::view('/getdiethelp','pages.diethelp');
    Route::get('/abuse','DoctorController@getabuse');
    Route::post('/abuse','DoctorController@abuse');
    Route::get('/viewabuse','DoctorController@viewabuse');
    Route::get('/abusedesc','DoctorController@abusedesc');
    Route::get('/deleteabuse','DoctorController@deleteabuse');
    Route::get('/viewarchives','DoctorController@viewarchives');
    Route::get('/archivedescription','DoctorController@archivedescription');
});
Route::view('/home','pages.home');
Route::view('/second','master.second');



