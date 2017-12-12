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
        // 在话题模型保存是，生成话题摘要。自定义辅助函数 make_excerpt 写在 helpers.php 文件中
        $topic->excerpt = make_excerpt($topic->body);
    }
}