<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\ArticleModel;
use Illuminate\Http\Request;

class GuestController extends Controller
{

    // Route for home page
    public function enter_guest(){
        $articles=ArticleModel::limit(10)->get();
        return view('index',compact('articles'));
    }

    public function not_found(){
        return view('errors.404');
        }

    public function login(){
        return view('login');
    }
}
