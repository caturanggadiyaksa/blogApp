<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Kategori;

class BlogController extends Controller
{
    //


    public function index($judulBlog) {

       
        

        // Mengambil data blog berdasarkan judul
        $blog = Blog::where('text_link', $judulBlog)->first();

        // Mengambil kategori berdasarkan categori_id di blog
        $kategori = Kategori::find($blog->category_id);

        // Mengambil name_kategori dari kategori yang terkait
        $name_kategori = $kategori->name_kategori;

        $data = [
          'name_kategori' => $name_kategori,
          'blog' => $blog
        ];

        return view('blog.view', $data);

       
    }
}
