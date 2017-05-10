<?php

namespace App\Http\Requests;

class SendEmailRequest extends Request
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
            'name' => 'required|string',
            'email' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => '姓名 欄位為必填',
            'email.required' => '電子郵件 欄位為必填',
            'subject.required' => '諮詢主旨 欄位為必填',
            'message.required' => '諮詢內容 欄位為必填',
        ];
    }
}
