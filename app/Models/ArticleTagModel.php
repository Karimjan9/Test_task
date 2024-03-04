<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTagModel extends Model
{
    use HasFactory;

        
    protected $table = "article_tag";
    protected $fillable = ['name'];
}
