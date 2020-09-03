<?php

use Illuminate\Support\Facades\Route;

Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');

Route::get('/folders/create', 'FolderController@cshowCreateForm')->name('folders.create');
Route::post('folders/create', 'FolderController@create');

Route::get('/folders/{id}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');
Route::post('/folders/{id}/tasks/create', 'TaskController@create');
