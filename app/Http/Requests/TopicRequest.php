<?php

namespace App\Http\Requests;

// 话题的表单验证类
class TopicRequest extends Request
{

    public function rules()
    {
        switch($this->method())
        {
            // CREATE
            case 'POST':

            // UPDATE
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'title'         => 'required|min:2',
                    'body'          => 'required|min:3',
                    'category_id'   => 'required|numeric',
                ];
            }
            case 'GET':
            case 'DELETE':
            default:
            {
                return [];
            };
        }
    }




    public function messages()
    {
        return [
            // Validation messages 表单验证有效性提示
            'title.min' => '标题必须至少两个字符',
            'body.min' => '内容必须至少三个字符',
        ];
    }


}
