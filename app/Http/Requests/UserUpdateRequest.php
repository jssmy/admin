<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'last_name'=>'required|string|max:50',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function($validator) {
            $user_find = User::where('user_name', $this->user_name)->where('id','!=',$this->user->id)->first();
            if ($user_find) {
                return $validator->errors()->add('user_name', str_replace(':attribute','user_name',trans('validation.unique')));
            }
        });

        return $validator;
    }
}
