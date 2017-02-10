<?php
Route::get('/','StudentController@index');
Route::get('student/{id}', 'StudentController@detail');
Route::get('help', 'StudentController@help');
Route::get('login', 'StudentController@login');
Route::post('login', 'StudentController@check');
Route::get('logout', 'StudentController@logout');
Route::get('create', 'FormController@createForm');
Route::post('create', 'FormController@validateFields');
Route::get('student/{id}/edit', 'FormController@edit');
?>
