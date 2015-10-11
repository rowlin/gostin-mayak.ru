<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateBronRequest extends Request
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
            'name' => 'required|min:3',
            'bron_comment' => 'required',
            'k_start' => 'required|date',
            'k_end' => 'required|date',
            'phone'=> 'required|digits_between:5,13',
            'mail'=>'required|email',
            'nomer'=> 'required'
        ];
    }
}
