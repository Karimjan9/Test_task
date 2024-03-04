<?php

namespace App\Http\Controllers\Admin;

use App\Models\ArticleModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Article\ArticleRequest;
use App\Models\ArticleTagModel;

class AdminController extends Controller
{
   
    public function index()
    {
    $articles=ArticleModel::paginate(10);
    // dd($articles);

     return view('admin.index',compact('articles'))->with('success', 200);
     
    }

  
    public function create()
    {
        $tegs=ArticleTagModel::get();
        return view('admin.create',compact('tegs'))->with('success', 200);
    }

  
    public function store(ArticleRequest $request)
    {
        
       
        $count=ArticleTagModel::get()->count();
        $array=[];
        // dd($count);
        for ($i=0; $i < $count; $i++) { 
            $name="name"."$i";
            if ( $request->$name==1) {
                array_push($array,$i+1);
            }
        }
        // $array=json_encode($array);
        // dd($array);
        $new=ArticleModel::create(['article_theme'=>$request->article_theme,'article_body'=>$request->article_body,'shifts'=>$array]);
        Session::flash('success', "Article created succesfully ");
        return to_route('admin.admin_work.index');
    }

   
    public function show( $id)
    {
    
        
    }

 
    public function edit( $id)
    {
        $edit=ArticleModel::find($id);
        // dd($edit);
        return view('admin.edit',compact('edit'));
    }

    public function update(ArticleRequest $request, $id)
    {
        $edit=ArticleModel::where('id',$id)->update(['article_theme'=>$request->article_theme,'article_body'=>$request->article_body]);
        Session::flash('success', "Article edited succesfully ");
        return to_route('admin.admin_work.index');
    }

   
    public function destroy( $id)
    {
        $delete=ArticleModel::find($id)->delete();
        Session::flash('success', "Article deleted succesfully ");
        return to_route('admin.admin_work.index');
    }
}
