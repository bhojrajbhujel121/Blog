<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::all();
        return view('backend.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::all();
        return view('backend.category.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title"=>"required",
            "description"=>"required"

        ]);
        $category=new Category();
        $category->title=$request->title;
        $category->description=$request->description;
        $category->save();
        return redirect()->back()->with('message','Data save successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category=Category::find($id);
       return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "title"=>"required",
            "description"=>"required"

        ]);
        $category=Category::find($id);
        $category->title=$request->title;
        $category->description=$request->description;
        $category->save();
        return redirect()->back()->with('message','Data save successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect()->back()->with('message','Data Deleted successfully');
    }
    public function showCategories()
{
    $categories = Category::with('blogs')->get(); // Ensure 'blogs' relationship is defined
    return view('frontend.categories', compact('categories'));
}

}
