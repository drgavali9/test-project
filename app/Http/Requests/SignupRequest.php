<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name'     => 'required|string|min:5|max:20',
            'phone'    => 'required|string|min:12|max:17',
            'email'    => 'required|string|email:rfc,dns',
            'password' => 'required|confirmed|min:8'
        ];
    }
}
