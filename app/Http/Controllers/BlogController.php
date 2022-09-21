<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $categories;

    public function index()
    {
        $this->categories = Category::where('status', 1)->get();
        return view('admin.blog.index', ['categories' => $this->categories]);
    }

    public function create(Request $request)
    {
        Blog::newBlog($request);
        return redirect('/add-blog')->with('message', 'Blog added successfully.');
    }

    public function manage()
    {
        $this->categories = Category::all();
        return view('admin.category.manage', ['categories', $this->categories]);
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
