<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'document_number'=>'required|numeric',
            'user_name' => 'required|max:8|string|unique:users',
            'name' => 'required|string|max:100',
            'last_name'=>'required|string|max:255',
            'password'=>'required|string|max:20'
        ];
    }
}
