<?php

namespace App\Observers;

use App\Models\Topic;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class TopicObserver
{
    public function creating(Topic $topic)
    {
        //
    }

    public function updating(Topic $topic)
    {
        //
    }

    // 每个数据模型都有生命周期，周期里会有很多事件(creating、...saved...)
    public function saving(Topic $topic)
    {
        // 当不使用simditor时，使用 HTMLPurifier for Laravel 5 的XSS配置过滤规则
        $topic->body = clean($topic->body, 'user_topic_body');

        // 在话题模型保存是，生成话题摘要。自定义辅助函数 make_excerpt 写在 helpers.php 文件中
        $topic->excerpt = make_excerpt($topic->body);
    }
}