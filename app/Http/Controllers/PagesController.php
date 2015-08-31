<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //

    public function aboutme(){
        $name = 'My name is Hieu';
        $age = '24';
        return view("pages.aboutme")->with([
            'name' => $name,
            'age' => $age
        ]);
    }
}
