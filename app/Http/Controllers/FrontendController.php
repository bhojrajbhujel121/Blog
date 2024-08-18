<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $category = Category::with('blogs')->get(); 
        $categorys = Category::all(); 

        $blogs = Blog::latest()->take(4)->get(); // Load the first 6 blogs
        return view('frontend.index', compact('blogs','category','categorys'));


    }
    
    public function loadMore(Request $request)
    {
        if ($request->ajax()) {
            $blogs = Blog::latest()->skip($request->skip)->take(4)->get();
            $category = Category::all();
            return view('partials.blogs', compact('blogs','category'))->render();
        }
    }
    

    
    public function indexs(Request $request)
    {
        
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(4); // 6 blogs per page

        if ($request->ajax()) {
            $view = view('partials.blogs', compact('blogs','category'))->render();
            return response()->json(['html' => $view]);
        }
    


        // $blogs = Blog::orderBy('id', 'desc')->take(6)->get();
        // $category = Category::all();
        // // dd($products);

        // return view('frontend.index',compact('blogs','category'));
    }

    public function initial()
{
    $blogs = Blog::latest()->take(4)->get(); // Adjust as needed
    $category = Category::all();
    return view('partials.blogs', compact('blogs','category'));
}


}
