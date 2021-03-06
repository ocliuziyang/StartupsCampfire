<?php

namespace StartupsCampfire\Http\Requests;

class CreateCarouselRequest extends Request
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
            'order' => 'required',
            'image' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'order.required' => '幻灯片显示顺序不能为空~',
            'image.required' => '幻灯片图片不能为空~',
        ];
    }
}
