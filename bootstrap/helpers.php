<?php
/**
 * 创建的私有辅助函数
 * 在bootstrap/app.php文件顶部进行加载
 */


/**
 * 将当前请求的路由名称转换为 CSS 类名称
 * @return mixed
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
