<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    //
    //
    public function index(){
        // echo "string";
        $articles = Articles::all();

        return view("articles")->with("articles", $articles);
    }
}
