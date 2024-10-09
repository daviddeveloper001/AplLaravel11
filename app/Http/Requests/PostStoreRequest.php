<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:400'],
            'slug' => ['required', 'string', 'max:400', 'unique:posts,slug'],
            'content' => ['required', 'string'],
            'user_id' => ['required', 'integer', 'exists:Users,id'],
        ];
    }
}
