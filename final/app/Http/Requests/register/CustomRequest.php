<?php

namespace App\Http\Requests\register;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CustomRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => [
            'required',
            //'min:8',
            //'regex:/^(?=.*[A-Z])(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]+$/',
            ],
            'password__repeat' => 'required|same:password',
        ];
    }
}
