<?php
/**
 * Created by PhpStorm.
 * User: swift
 * Date: 17/11/30
 * Time: 下午4:37
 */

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

abstract class BaseRepositoryEloquent extends BaseRepository{
    public function paginate($limit = null, $columns = ['*'], $method = "paginate")
    {
        $pageSize = request('page_size', $limit);
        return parent::paginate($pageSize, $columns, $method);
    }
}