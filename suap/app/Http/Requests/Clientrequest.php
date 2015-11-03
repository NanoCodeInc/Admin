<?php

namespace Suap\Http\Requests;

use Suap\Http\Requests\Request;

class Clientrequest extends Request
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
            'description' =>'required|min:5|max:200',
            'file'=> 'required',
            'phone'=>'required|min:5|max:20',
            'work' => 'required|min:5|max:50',
            'address' => 'required|min:5|max:50',

        ];

    }
}
