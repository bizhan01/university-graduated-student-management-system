<?php
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

// CRUD Users Routes
Route::get('/deleteUser/{id}','UserOperationController@destroy');
Route::get('/editUser/{id}','UserOperationController@showInfo');
Route::post('/update/{id}','UserOperationController@edit');
Route::get('/blockList','UserOperationController@blockList')->name('blockList');
Route::get('/blockUser/{id}','UserOperationController@show');
Route::post('/updateUserStatus/{id}','UserOperationController@edit');
Route::get('/unBlockUser/{id}','UserOperationController@unBlock');
Route::post('/updateUser/{id}', 'UserOperationController@edit')->name('updateUserStatus/{id}');

// user profile routes
Route::get('profile', 'UserProfileController@profile')->name('profile');
Route::post('updateNameUser', 'UserProfileController@updateNameUser')->name('updateNameUser');
Route::post('updateUserImage', 'UserProfileController@updateUserImage')->name('updateUserImage');
Route::post('updateUserPass', 'UserProfileController@updateUserPass')->name('updateUserPass');

// student
Route::get('addStudent', 'StudentController@addStudent')->name('addStudent');
Route::post('/saveStudent', 'StudentController@store')->name('saveStudent');
Route::get('softStudentList', 'StudentController@softStudentList')->name('softStudentList');
Route::get('itStudentList', 'StudentController@itStudentList')->name('itStudentList');
Route::get('studentList', 'StudentController@itStudentList')->name('studentList');



// Comment & Rating Section Routes
Route::get('/comments', 'CommentController@index')->name('comments');
Route::post('/addComment', 'CommentController@store')->name('addComment');
Route::get('/deleteComment/{id}','CommentController@destroy')->name('deleteComment/{id}');
Route::get('/editComment/{id}','CommentController@show')->name('editComment/{id}');
Route::post('/updateComment/{id}','CommentController@edit')->name('updateComment/{id}');


// Opinion Section
Route::get('/opinions', 'OpinionController@index')->name('opinions');
Route::get('/opinionList', 'OpinionController@opinionList')->name('opinionList');
Route::post('/addOpinion', 'OpinionController@store')->name('addOpinion');
Route::get('/deleteOpinion/{id}','OpinionController@destroy')->name('deleteOpinion/{id}');
Route::get('/editOpinion/{id}','OpinionController@show')->name('editOpinion/{id}');
Route::post('/updateOpinion/{id}','OpinionController@edit')->name('updateOpinion/{id}');


// Opinion Section
Route::get('/messages', 'MessageController@index')->name('messages');
Route::get('/inbox', 'MessageController@inbox')->name('inbox');
Route::get('/sendbox', 'MessageController@sendbox')->name('sendbox');
Route::post('/sendMessage', 'MessageController@store')->name('sendMessage');
Route::get('/readMessage/{id}','MessageController@readMessage')->name('readMessage/{id}');
Route::get('/replyMessage/{id}','MessageController@show')->name('replyMessage/{id}');
Route::get('/receivedMessages','MessageController@receivedMessages')->name('receivedMessages');
Route::post('/updateMessage/{id}','MessageController@edit')->name('updateOpinion/{id}');
Route::get('/deleteMessage/{id}','MessageController@destroy')->name('deleteMessage/{id}');



// Serrices  Section Routes
Route::get('/services', 'ServiceController@index')->name('services');
Route::post('/addService', 'ServiceController@store')->name('addService');
Route::get('/deleteService/{id}','ServiceController@destroy')->name('deleteService/{id}');
Route::get('/editService/{id}','ServiceController@show')->name('editService/{id}');
Route::post('/updateService/{id}','ServiceController@edit')->name('updateService/{id}');

// Jobs  Section Routes
Route::get('/jobs', 'JobController@index')->name('jobs');
Route::post('/addJob', 'JobController@store')->name('addJob');
Route::get('/jobsList', 'JobController@jobsList')->name('jobsList');
Route::get('/deleteJob/{id}','JobController@destroy')->name('deleteJob/{id}');
Route::get('/editeJob/{id}','JobController@show')->name('editJob/{id}');
Route::post('/updateJob/{id}','JobController@edit')->name('updateJob/{id}');
Route::get('/applicantList/{id}','JobController@applicantList')->name('applicantList/{id}');


// Application  Section Routes
Route::get('/applications', 'ApplicationController@index')->name('applications');
Route::post('/addApplication', 'ApplicationController@store')->name('addApplication');
Route::get('/applicationsList', 'ApplicationController@applicationsList')->name('applicationsList');
Route::get('/deleteApplication/{id}','ApplicationController@destroy')->name('deleteApplication/{id}');
Route::get('/editApplication/{id}','ApplicationController@show')->name('editApplication/{id}');
Route::post('/updateApplication/{id}','ApplicationController@edit')->name('updateApplication/{id}');


// Advertisement Section Routes
Route::get('/advertisement', 'AdvertisementController@index')->name('advertisement');
Route::post('/addAdvertisement', 'AdvertisementController@store')->name('addAdvertisement');
Route::get('/deleteAdvertisement/{id}','AdvertisementController@destroy')->name('deleteAdvertisement/{id}');
