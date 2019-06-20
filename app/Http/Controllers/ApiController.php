<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getBlogs(){
        $getBlogs = Blog::get();
        $blogs = [];
        foreach ($getBlogs as $key => $blog){
            $blogs[$key]['slug'] = $blog->slug;
            $blogs[$key]['title'] = $blog->title;
            $blogs[$key]['description'] = $blog->description;
            $blogs[$key]['category_title'] = $blog->category->title;
            $blogs[$key]['image'] = $blog->image;
            $blogs[$key]['created_date'] = date('F d, Y', strtotime($blog->created_at));
        }
        return response()->json($blogs);
    }

    public function getBlogDetails($slug){
        $blog = Blog::where('slug', $slug)->first();
        $data = [
            'slug' => $blog->slug,
            'title' => $blog->title,
            'description' => $blog->description,
            'category_title' => $blog->category->title,
            'image' => $blog->image,
            'created_date' => date('F d, Y', strtotime($blog->created_at))
        ];
        return response()->json($data);
    }

    public function getCategories(){
        $categories = Category::get();
        return response()->json($categories);
    }
}
