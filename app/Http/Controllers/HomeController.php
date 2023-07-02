<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }

    public function edit_profil()
    {

        return view('editprofile');
    }

    public function account_setting()
    {
        return view('account');
    }

    public function author_list()
    {
        return view('authorlist');
    }

    public function author_single()
    {
        return view('authorsingle');
    }

    public function riviews()
    {
        return view('riviews');
    }


    public function post_list()
    {
        return view('postlist');
    }

    public function post_categories()
    {
        return view('postcategories');
    }

    public function create_post()
    {
        return view('createpost');
    }

    public function edit_post()
    {
        return view('editpost');
    }
}
