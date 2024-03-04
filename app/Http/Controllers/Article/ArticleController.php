<?php

namespace App\Http\Controllers\Article;

use App\Models\CommetModel;
use App\Models\ArticleModel;
use App\Models\CommentModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Comment\CommentRequest;

class ArticleController extends Controller
{
    public function articles(){
        $articles=ArticleModel::paginate(10);
        return view('admin.show',compact('articles'));
    }

    public function show_one($id){
        $article=ArticleModel::find($id);
        return view('admin.show_one',compact('article'));

    }

    public function store_comment(CommentRequest $request){
       $new=CommentModel::create(['comment_theme'=>$request->comment_theme,'comment_body'=>$request->comment_body]);
       Session::flash('success', "Comment created succesfully ");
       return to_route('articles');
    }
}
