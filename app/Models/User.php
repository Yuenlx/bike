<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class User extends Model implements Transformable
{
    use TransformableTrait;

    protected $table='users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'nickname',
        'mobile',
        'weixin_open_id',
        'gender',
        'avatar',
        'is_deposit',
        'deposit_money',
        'money'
    ];

    public $casts=[
        'is_deposit'=>'bool'
    ];

    /**
     * 骑行记录
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function riders()
    {
        return $this->hasMany(Rider::class, 'user_id');
    }


    /**
     * 骑过的单车
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function bikes()
    {
        return $this->belongsToMany(
            Bike::class,
            'riders',
            'user_id',
            'bike_id')
            ->withTimestamps();
    }
}
