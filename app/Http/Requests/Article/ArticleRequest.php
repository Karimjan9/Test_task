<?php

namespace App\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'article_theme' => ['required', 'max:255'],
            'article_body' => ['required', ],
        ];
    }

    public function messages()
    {
        return [
            'article_theme.required' => 'Maqola mavzusi berilmadi !',
            'article_theme.max'=>"Maqola mavzusi keragidan uzun !",
            "article_body.required"=> "Maqola matni kiritilmadi !",
           
        ];
    }
}
