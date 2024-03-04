<?php

namespace App\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;

class ArticleTagRequest extends FormRequest
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
            'teg_name' => ['required', 'max:100'],
           
        ];
    }

    public function messages()
    {
        return [
            'tag_name.required' => 'Teg berilmadi!',
            'tag_name.max'=>"Teg maks qiymatdan oshib ketdi !",
        ];
    }
}
