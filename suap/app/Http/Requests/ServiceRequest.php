<?php

namespace Suap\Http\Requests;

use Suap\Http\Requests\Request;

class ServiceRequest extends Request
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
            'title'=>'required|max:20|min:3|alpha_num',
            'description'=>'required|min:5|max:200',
            'file'=>'required|image',
        ];
    }
}
