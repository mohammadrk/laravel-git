<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => ['required', 'max:50'],
            'body' => 'required',
            'file' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'عنوان خود را وارد کنید ',
            'title.max' => 'عنوان شما باید بیش از 2 کاراکتر باشد  ',
            'body.required' => 'توضیحات خود را وارد کنید ',
            'file.required' => 'عکس  خود را وارد کنید ',
            'file.image' => 'فرمت عکس باید باشد ',
        ];
    }
}
