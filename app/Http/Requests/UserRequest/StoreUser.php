<?php

namespace App\Http\Requests\UserRequest;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreUser
 * @package App\Http\Requests\UserRequest
 * @author Richard Guevara ( https://kingrgdev.com )
 */

class StoreUser extends FormRequest
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
            'uuid' => [ 'required' , 'unique:users' , 'max:36' ],
            'name' => [ 'required' ],
            'ip_address' => [ 'required' ]
        ];
    }
}
