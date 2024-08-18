<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $blog=Blog::all();
           // Fetch all blogs with their associated categories
    $blog = Blog::with('category')->get();

    // Pass the blogs to the view
   
        return view('backend.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();

        return view('backend.blog.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' =>"required",
            "description"=> "required",
            "image"=>"required"
        ]);
           $blog = new Blog();
           $blog->title = $request->title;
           $blog->title = $request->title;
           $image= $request->image;
           $image_new_name=time().$image->getClientOriginalName();
           $image->move('blog',$image_new_name);
           $blog->image = $image_new_name;
           $blog->category_id = $request->category_id;

           $blog->description = $request->description;
           $blog->save();
           return redirect()->back()->with('message','Data saved Sucessfully');
        }
    
    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    // Retrieve all blogs or filtered blogs based on request parameters
    $blogs = Blog::with('category')->latest()->paginate(6); // Adjust based on your needs
    return view('frontend.blogs.index', compact('blogs'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog=Blog::find($id);
        return view('backend.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            "title"=>"required",
            "image"=>"required",
            "description"=>"required"

        ]);
        $blog=Blog::find($id);
        $blog->title=$request->title;
        $blog->image=$request->image;
        $blog->description=$request->description;
        $blog->save();
        return redirect()->back()->with('message','Data save successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        //
        $blog=Blog::find($id);
        $blog->delete();
        return redirect()->back()->with('message','Data Deleted successfully');
    }


    public function display($id)
{
    $blog = Blog::findOrFail($id);
    return view('frontend.blog.show', compact('blog'));
}




}
