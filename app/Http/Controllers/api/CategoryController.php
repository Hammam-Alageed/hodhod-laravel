<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
   
    

     protected $category;
     public function __construct(){
         $this->category = new Category();
     }

     public function index()
    {
        //
        return $this->category->all();
    }
    

   
    public function store(Request $request)
    {
        //
        return $this->category->create($request->all());
    }

  
    public function show($id)
    {
        //
        return $category = $this->category->find($id);  
    }

   
    public function update(Request $request, $id)
    {
        //
        $category = $this->category->find($id);
        $category->update($request->all());
        return $category;
    }

   
    public function destroy($id)
    {
        //
        $category = $this->category->find($id);
        return $category->delete();   
    }
}
