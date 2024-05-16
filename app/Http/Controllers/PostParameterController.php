<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostParameterController extends Controller
{
    public function index($id){
        return "Hello " . $id;
    }
}