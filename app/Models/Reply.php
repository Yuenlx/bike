<?php

namespace App\Models;

class Reply extends Model
{
    protected $fillable = ['content'];


    // 回复数据模型与其他2个模型的关联
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
