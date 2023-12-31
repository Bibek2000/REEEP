<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            'title'=> 'required|string|max:50',
            'description'=> 'required|string|between:2,1000',
            'image' => 'required|mimes:png,jpg,jpeg|max:8096',
            'album_id' => 'required|exists:albums,id',
        ];
        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules = [
                'title'=> 'required|string|max:50',
                'description'=> 'required|string|max:150',
                'album_id' => 'required|exists:albums,id',
            ];
        }
        return $rules;
    }
}
