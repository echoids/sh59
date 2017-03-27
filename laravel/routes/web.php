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
Route::get('admin/index', function () {
    return view('admin.index');
});
/*Route::get('admin/index/info', function () {
    return view('admin.admin_index');
});*/
/*Route::get('admin/index/user',function (){
    return view('admin.admin_user');
});
Route::get('admin/index/index1',function (){
    return view('admin.admin_info');
});
Route::get('admin/index/user_search',function (){
    return view('admin.admin_user_search');
});*/
Route::group(['prefix'=>'admin'],function (){
    Route::get('info','IndexController@info');
    Route::get('index1','IndexController@index1');
    Route::get('user_search','IndexController@user_search');
    Route::get('user','IndexController@user');
    Route::get('admin','IndexController@admin');
    Route::get('add_admin','IndexController@add_admin');
    Route::get('weibo','IndexController@weibo');
    Route::get('weibo_repeat','IndexController@weibo_repeat');
    Route::get('weibo_search','IndexController@weibo_search');
    Route::get('comment','IndexController@comment');
    Route::get('comment_search','IndexController@comment_search');
    Route::get('weibo_classify','IndexController@weibo_classify');
    Route::get('feedback','IndexController@feedback');
    Route::get('report','IndexController@report');
    Route::get('image','IndexController@image');
    Route::get('login','IndexController@login');

});
Route::group(['prefix'=>'web/index'],function () {

});



