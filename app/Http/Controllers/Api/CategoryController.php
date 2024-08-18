<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    //
    public function index(){
        $blog = Blog:: all();
        return response($blog);


    }
    
    public function edit($id){
        $blog = Blog:: find($id);
        return response($blog);


    }
    
    public function store(Request $request){
        $request->validate([
            'title' =>"required",
            "description"=> "required"
        ]);
           $blog = new Blog();
           $blog->title = $request->title;
   

           $blog->description = $request->description;
           $blog->save();
           return response($blog);
        }


        public function update(Request $request, $id)
        {
            //
            $request->validate([
                "title"=>"required",
                "description"=>"required"
    
            ]);
            $blog=Blog::find($id);
            $blog->title=$request->title;
            $blog->description=$request->description;
            $blog->save();
            return response($blog);
        }
    


    
    
}
