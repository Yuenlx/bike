<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
| 文件用于定义所有基于闭包的控制台命令
| 每个闭包都被绑定到一个控制台命令并且允许与命令行 IO 方法进行交互
| 尽管这个文件并不定义HTTP路由，但是它定义了基于控制台的应用入口（路由）
| 定义Artisan命令
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
