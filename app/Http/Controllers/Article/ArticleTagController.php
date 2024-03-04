<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;
use App\Models\ArticleTagModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Article\ArticleTagRequest;

class ArticleTagController extends Controller
{
    
    public function index()
    {
        $article_tags=ArticleTagModel::paginate(10);
        return view('article_tag.index',compact('article_tags'));
    }

   
    public function create()
    {

        return view('article_tag.create');
    }

    
    public function store(ArticleTagRequest $request)
    {
        $new_tag=ArticleTagModel::create(['name'=>$request->tag_name]);
        Session::flash('success', "Article Tag  created succesfully ");
        return to_route('admin.article_tag.index');
    }

   
    public function show(string $id)
    {
        
    }

  
    public function edit(string $id)
    {
        $teg=ArticleTagModel::find($id);
        return view('article_tag.edit',compact('teg'));
    }

   
    public function update(ArticleTagRequest $request, string $id)
    {
        $teg=ArticleTagModel::find($id)->update(['name'=>$request->teg_name]);
        Session::flash('success', "Article Tag  edited succesfully ");
        return to_route('admin.article_tag.index');
    }

   
    public function destroy(string $id)
    {
        $delete=ArticleTagModel::find($id)->delete();
        Session::flash('success', "Article deleted succesfully ");
        return to_route('admin.article_tag.index');
    }
}
