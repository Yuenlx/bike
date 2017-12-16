<?php

namespace App\Http\Requests;

class ReplyRequest extends Request
{
    public function rules()
    {
        switch($this->method())
        {
            // CREATE
            case 'POST':
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'content' => 'required|min:2',
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
            'content.required' => '回复的想法少于2个字 =_=!',
            'content.min' => '回复的想法少于2个字 =_=！',
        ];
    }
}
