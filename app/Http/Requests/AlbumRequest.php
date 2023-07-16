<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbumRequest extends FormRequest
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
            'name' => 'required|unique:albums,name',
            'image' => 'required|mimes:png,jpg,jpeg|max:8096',
        ];
        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules = [
                'title'=> 'required|string|max:50',
            ];
        }
        return $rules;
    }
}
