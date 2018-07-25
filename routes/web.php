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

Auth::routes();

Route::group(['middleware' => ['auth', 'admin'], 'namespace' => 'Admin'], function(){
	$this->get('admin', 'AdminController@index')->name('admin.home');
	Route::get('empresas', 'EmpresasController@index')->name('empresas');
Route::get('cadastrar', 'EmpresasController@create');
Route::post('admin/users/create','EmpresasController@store')->name('empresas');
Route::delete('admin/users/{id}','EmpresasController@destroy')->name('delete');

Route::get('gerar', 'ReciboController@create');
Route::post('recibo', 'ReciboController@store')->name('recibo');
Route::get('recibos', 'ReciboController@generate_pdf');
Route::get('todos', 'ReciboController@show');
Route::get('admin/recibos/download/{id}','ReciboController@generate_pdf')->name('downloadrecibo');


Route::get('perfil', 'EmpresasController@profile');
Route::post('/perfil', 'EmpresasController@update_avatar');

Route::get('tarefas', 'TarefasController@create');
Route::post('tarefas', 'TarefasController@store')->name('tarefas');
Route::get('tarefa', 'TarefasController@show')->name('tarefa');
Route::delete('admin/tarefas/{id}', 'TarefasController@destroy')->name('destroy');


Route::get('documentos', 'FileController@index')->name('viewfile');
Route::get('/upload', 'FileController@create')->name('formfile');
Route::post('admin/file/upload','FileController@store')->name('uploadfile');
Route::delete('admin/file/{id}','FileController@destroy')->name('deletefile');
Route::get('admin/file/download/{id}','FileController@show')->name('downloadfile');

Route::get('relatorios', 'ExcelController@index');
Route::get('financas', 'ExcelController@create');
Route::post('financas', 'ExcelController@store')->name('financas');



});


Route::get('/home', 'HomeController@index')->name('home');

Route::get('recibo', 'User\RecibosController@index');
Route::get('admin/recibos/download/{id}','Admin\ReciboController@generate_pdf')->name('downloadrecibo');


Route::get('entradas', 'User\ExcelController@index');




Route::get('profile', 'User\UserController@profile');
Route::post('/profile', 'User\UserController@update_avatar');
Route::get('docs', 'User\FileController@index');
Route::get('outros', 'User\FileController@view');
Route::get('admin/file/download/{id}','Admin\FileController@show')->name('downloadfile');
Route::delete('admin/tarefas/{id}','AdminTarefasController@destroy')->name('destroy');