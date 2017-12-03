<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
| api.php 文件包含的路由位于 api 中间件组约束之内，支持频率限制功能，
| 这些路由是无状态的，所以请求通过这些路由进入应用需要通过 token 进行认证并且不能访问 Session 状态
| 定义API类型的的路由
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
