<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Carbon;

class ArticlesController extends Controller
{
    //
    //
    public function index(){
        //code mới, chỉ lấy các bài viết từ thời điểm hiện tại trở về trước
        $articles = Articles::latest('created_at')->where('created_at', '<=', Carbon::now())->get();

        return view("articles")->with("articles", $articles);
    }
    public function create(){
        return view("create");
    }
    public function store(Request $request){
        // lấy dữ liệu từ form
		  $dulieu_tu_input = $request->all();

  //dùng hàm create của laravel 5 để đưa hết thông tin lấy từ input và lưu vào trong database
		  Articles::create($dulieu_tu_input);

 // chuyển hướng người dùng đến trang hiển thị danh sách bài viết
		  return redirect('articles');
	}
}
