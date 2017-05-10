<?php

namespace App\Http\Requests;

class MainDescriptionRequest extends Request
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
            'center' => 'required',
            '3-1' => 'required',
            '3-2' => 'required',
            '3-3' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'center.required' => '內容不可為空白',
            '3-1.required' => '內容不可為空白',
            '3-2.required' => '內容不可為空白',
            '3-3.required' => '內容不可為空白',
        ];
    }
}
