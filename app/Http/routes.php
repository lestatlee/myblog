<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
//Route::get('/','ArticleController@index');
//url后面参数加?表示可以使用默认值
//Route::get('view/{id?}','ArticleController@show');
//首页路由
Route::get('/','ArticleController@index');
//详情页路由
Route::get('/view/{id}','ArticleController@show');
//文章删除路由
Route::get('/del/{id}','ArticleController@destroy');
//文章编辑路由
Route::get('/edit/{id}','ArticleController@edit');
//文章创建路由--当动作只需要执行显示而不需要执行复杂的逻辑操作，则可以直接使用闭包函数
Route::get('/create',function(){
    return view('create');
});
//文章保存路由
Route::post('/store','ArticleController@store');
Route::post('/update/{id}','ArticleController@update');
//加载登录页面
Route::get('/login',function(){
    return view('login');
});
//加载注册页面
Route::get('/register',function(){
    return view('register');
});
//登录提交
Route::post('/signin','UserController@signin');
//注册提交
Route::post('/signup','UserController@signup');
