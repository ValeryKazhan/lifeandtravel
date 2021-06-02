<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view ('blog.index');
    }

    public function blogList(){
        return view ('blog.blogList');
    }

    public function blogPages($number){
        return view ("blog.pages.$number");
    }

}