<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

class AuthRegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        switch ($this->method()) {
            case 'POST':
                return [
                    'nama' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'email', 'max:255', 'unique:users,email'],
                    'perumahan' => ['required', 'string'],
                    'rt' => ['required', 'string', 'max:255'],
                    'rw' => ['required', 'string', 'max:255'],
                    'cluster' => ['required', 'string', 'max:255'],
                    'domain' => ['required', 'string', 'max:255', 'unique:users,domain'],
                ];
                break;

            case 'PATCH':
            case 'PUT':
        }
    }
}
