<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogValidator extends FormRequest
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
                'name' => 'required|max:40',
                'intro' => 'required',
                'text' => 'required',
                'image' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'поле :attribute обязательно для заполнения!',
            'name.max' => 'максимально допустимое количество сиволов для поля :attribute - :max',
            'image' => 'загружаемый файл должен быть изображением',
            'img.max' => 'превышен допустимый размер загружаемого файла'
        ];
    }
}
