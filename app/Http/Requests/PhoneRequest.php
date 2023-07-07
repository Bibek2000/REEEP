<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhoneRequest extends FormRequest
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
        $rules = [
            'name'=> 'required|string|max:100',
            'location'=> 'required|string|max:100',
            'email' => 'required|email',
            "phone" => 'required|regex:/^[0-9]{10}$/|numeric',
            'maps' => 'required|url|max:200'
        ];
        return $rules;
    }
}
