<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleModel extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = "article";
    protected $fillable = ['article_theme', 'article_body','created_at','shifts'];
    protected $casts = [
        'shifts' => 'array'
    ];

    public function get_tag() 
    {
        return ArticleTagModel::whereIn('id',$this->shifts)->get();    
    }
}
