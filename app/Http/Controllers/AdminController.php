<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.dashboard');
    }

    public function blogs(){
        $blogs = Blog::get();
        return view('admin.blogs', compact('blogs'));
    }

    public function blogAdd(){
        $categories = Category::get();
        return view('admin.blog_add', compact('categories'));
    }

    public function blogStore(Request $request){
        $blog = new Blog();
        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/blog', $name);
            $blog->image = $name;
        }

        $blog->category_id  = $request->category_id;
        $blog->title        = $request->title;
        $blog->description  = $request->description;
        $blog->save();

        return redirect()->back()->with('status', 'Blog Save Successfully');
    }

    public function blogEdit($slug){
        $blog = Blog::where('slug', $slug)->first();
        $categories = Category::get();
        return view('admin.blog_edit', compact('blog', 'categories'));
    }

    public function blogUpdate(Request $request, $id){
        $blog = Blog::find($id);
        if ($request->hasFile('image'))
        {
            if ($blog->image){
                unlink(public_path('/images/blog/').$blog->image);
            }
            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/blog', $name);
            $blog->image = $name;
        }
        $blog->category_id  = $request->category_id;
        $blog->title        = $request->title;
        $blog->description  = $request->description;
        $blog->save();

        return redirect('admin/blogs')->with('status', 'Blog Update Successfully');
    }

    public function blogDelete($slug){
        $blog = Blog::where('slug', $slug)->first();
        if ($blog->image){
            unlink(public_path('/images/blog/').$blog->image);
        }
        $blog->delete();
        return redirect()->back()->with('status', 'Blog Update Successfully');
    }


}
