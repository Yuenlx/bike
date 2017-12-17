<?php

namespace App\Observers;

use App\Models\Topic;
//use App\Handlers\SlugTranslateHandler;
use App\Jobs\TranslateSlug;

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
    public function saved(Topic $topic)
    {

        // 若 slug 字段为空，使用翻译器对 title 进行翻译
        if (! $topic->slug) {
            //$topic->slug = app(SlugTranslateHandler::class)->translate($topic->title);
            dispatch(new TranslateSlug($topic));
        }
    }
    public function deleted(Topic $topic)
    {
        // 话题删除完成时，将话题的全部回复一并删除掉
        \DB::table('replies')->where('topic_id', $topic->id)->delete();
    }
}