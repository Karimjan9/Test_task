<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'comment_theme' => ['required', 'max:255'],
            'comment_body' => ['required', ],
        ];
    }

    public function messages()
    {
        return [
            'comment_theme.required' => 'Comment mavzusi berilmadi !',
            'comment_theme.max'=>"Comment mavzusi keragidan uzun !",
            "comment_body.required"=> "Comment matni kiritilmadi !",
           
        ];
    }
}
