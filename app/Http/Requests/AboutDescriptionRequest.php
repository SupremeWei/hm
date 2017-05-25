<?php

namespace App\Http\Requests;

class AboutDescriptionRequest extends Request
{
    CONST DESCRIPTION_COUNT_MAX = 6;

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
        for ($ruleCount = 1; $ruleCount <= self::DESCRIPTION_COUNT_MAX; $ruleCount++) {
            $rules[sprintf('about%d_%d', self::DESCRIPTION_COUNT_MAX, $ruleCount)] = 'required';
            $rules[sprintf('about%d_%d-title', self::DESCRIPTION_COUNT_MAX, $ruleCount)] = 'required';
        }

        return $rules;
    }

    public function messages()
    {
        for ($ruleCount = 1; $ruleCount <= self::DESCRIPTION_COUNT_MAX; $ruleCount++) {
            $rules[sprintf('about%d_%d.required', self::DESCRIPTION_COUNT_MAX, $ruleCount)] = '內容不可為空白';
            $rules[sprintf('about%d_%d-title.required', self::DESCRIPTION_COUNT_MAX, $ruleCount)] = '標題不可為空白';
        }

        return $rules;
    }
}
