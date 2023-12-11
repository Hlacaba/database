<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DemoController extends Controller
{
    //
    public function getAllPosts() {
   return view('login', ['posts' => Post::all()]);
 }
}
