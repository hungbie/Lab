<?php
Route::get('/','StudentController@index');
Route::get('student/{id}', 'StudentController@detail');
Route::get('help', function() { return view('help');} );
