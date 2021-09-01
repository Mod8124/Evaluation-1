<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class blog extends Controller
{
    public function index() {
        $tabla = Post::all();

        return view('blog', compact('tabla'));
    }
}
