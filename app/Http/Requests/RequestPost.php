<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\PostController;

class RequestPost extends FormRequest
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
            'key_post' => 'required|numeric',
            'title' => 'required|unique:post|min:6|max:10|regex:[A-z]',
            'slug' => 'required|min:6|max:10',
            'content' => 'required|regex:[a-zA-Z0-9]',
        ];
    }

    public function messages()
    {
        return [
            'key_post.required'=>'Key không được để trống',
            'key_post.numeric'=>'Phải là số',
            'title.required'=>'Title không được để trống',
            'title.min'=>' Title ít nhát 6 kí tự',
            'title.max'=>'Title nhiều nhất 10 kí tự',
            'title.regex'=>'Phải ghi hoa chữ cái đầu',
            'title.unique'=>'Title này đã có người sử dụng',
            'slug.required'=>'Slug không được để trống',
            'slug.min'=>'Slug ít nhát 6 kí tự',
            'slug.max'=>'Slug nhiều nhất 10 kí tự',
            'content.required'=>'Content không được để trống',
            'content.regex'=>'Content phải có chữ cả số',
        ];
    }
}
