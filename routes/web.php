<?php
Route::get('/','StudentController@index')->name('root');
Route::get('student/{id}', 'StudentController@detail');
Route::post('student/{id}', 'FormController@deleteStudent');
Route::get('help', 'StudentController@help');
Route::get('login', 'StudentController@login');
Route::post('login', 'StudentController@check');
Route::get('logout', 'StudentController@logout');
Route::get('create', 'FormController@createForm');
Route::post('create', 'FormController@validateFields');
Route::get('student/{id}/edit', 'FormController@edit');
Route::post('student/{id}/edit', 'FormController@validateEdit');
?>
