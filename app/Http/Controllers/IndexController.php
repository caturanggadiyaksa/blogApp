<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //

    public function index() {
        $blog = Blog::all();
        return view('index', ['data' => $blog]);
    }
}
