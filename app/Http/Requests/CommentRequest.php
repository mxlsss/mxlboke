<?php

/**
 * 评论表单请求
 * User: zfs
 * Date: 2019/8/17
 * Time: 22:34
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'content' => 'required|max:255',
        ];
    }
    
    public function attributes()
    {
        return [
            'content' => '评论内容',
        ];
    }
}
