<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class classValidator extends FormRequest
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
            'name' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'img' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'ПОле :attribute обязательно для заполнения ',
            'image' => 'нужно изображение'
        ];
    }
}
