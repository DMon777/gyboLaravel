<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainersValidator extends FormRequest
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
        return  [
            'name' => 'required|max:20',
            'email' => 'required|email',
            'description' => 'required',
            'phone' => 'required',
            'specialization' => 'required',
            'password' => 'required|string|min:6',
            'img' => 'required|image'
        ];
    }

    public function messages()
    {
        return  [
            'required' => 'поле :attribute обязательно для заполнения!',
            'email' => 'поле :attribute должно соответствовать email адресу',
            'name.max' => 'максимально допустимое количество сиволов для поля :attribute - :max',
            'image' => 'загружаемый файл должен быть изображением',
            'img.max' => 'превышен допустимый размер загружаемого файла',
            'min' => ':attribute долже быть не менее :min символов'
        ];
    }
}
