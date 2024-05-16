<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(){
        echo "constructor call<br><br>";
    }
    public function index(){
        return "hello info@txphong2010@gmail.com";
    }
    public function show(){
        return "this is function show";
    }

    public function edit(){
        return "this is function edit";
    }
}
