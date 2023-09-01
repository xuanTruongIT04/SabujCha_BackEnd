<?php

namespace App\Http\Requests\Users\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => ['required', 'exists:users', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }

    public function messages()
    {
        return [
            "string" => ":attribute must be a character string.",
            "required" => ":attribute is not blank.",
            "exists" => "The username does not exist, please register an account!",
            "max" => [
                "number" => ":attribute no greater than :max.",
                "file" => ":attribute is not more than :max KB.",
                "string" => ":attribute is not more than :max characters.",
                "array" => ":attribute is not more than :max item.",
            ],
            "min" => [
                "numeric" => ":attribute is not better than:min.",
                "file" => ":attribute is not less than :min KB.",
                "string" => ":attribute is not less than :min characters.",
                "array" => ":attribute must have at least :items.",
            ],

        ];
    }

    public function attributes()
    {
        return [
            'username' => "Username",
            'password' => "Password",
        ];
    }

}
