<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| web.php 文件包含的路由都位于 RouteServiceProvider 所定义的 web 中间件组约束之内，因而支持 Session、CSRF 保护以及 Cookie 加密功能，
| 如果应用无需提供无状态的、RESTful 风格的 API，那么路由基本上都要定义在 web.php 文件中
| 定义Web类型的路由
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
