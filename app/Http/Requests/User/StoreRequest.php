<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'surname' => 'required|string',
            'email'=> ['required', Rule::unique('users')->where('deleted_at')],
            'age' => 'required|string',
            'address' => 'nullable|string',
            'password' => 'required|string|confirmed',
            'gender' => 'nullable|string',

        ];
    }
}
