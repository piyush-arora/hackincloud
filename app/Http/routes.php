<?php

Route::get('/','HomeController@home');



Route::get('/projects','ProjectsController@home');
Route::post('/projects','ProjectsController@create_project');


Route::get('/projects/{project_id}','ProjectsController@project_details');


Route::get('/choose_things','ThingsController@index');


Route::get('/things','ThingsController@create_things');

Route::post('/things','ThingsController@thing_created');

Route::get('/boards','ThingsController@boards');

Route::get('/editors','EditorsController@home');
Route::get('/editor','EditorsController@editor');
Route::get('/blockly','EditorsController@blockly');
Route::get('/graph','HomeController@graph');


Route::get('/virtual_reality','HomeController@virtual_reality');


Route::get('/sensor_data','HomeController@virtual_sensor');


Route::get('/editor/compile/test','EditorsController@compile');














