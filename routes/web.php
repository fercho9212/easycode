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


Route::group(['prefix'=>'articles'],function (){
  Route::get('view/{article?}',[
    'uses'=>'Admin\ArticleController@view',
    'as'=>'articlesview'
  ]);
});

Route::group(['prefix'=>'admin'],function(){
   Route::resource('users','Admin\UsersController');
   Route::resource('categories','Admin\CategoriesController');
   Route::get('users/{id}/destroy',[
     'uses' => 'Admin\UsersController@destroy',
     'as'   => 'users.destroy'
   ]);

Route::get('categories/{id}/destroy',[
     'uses' => 'Admin\CategoriesController@destroy',
     'as'   => 'categories.destroy'
   ]);
});



Route::get('login','Login\LoginController@login');
Route::post('login',[
  'uses' => 'Login\LoginController@postLogin',
  'as'   => 'login'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');
