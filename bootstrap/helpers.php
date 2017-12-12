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

// 为发布新话题时，数据模型观察器生成话题摘要 excerpt 字段用
function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', '', strip_tags($value)));
    return str_limit($excerpt, $length);
}