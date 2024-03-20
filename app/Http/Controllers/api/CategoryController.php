<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
   
    use ApiResponseTrait;

     protected $category;
     public function __construct(){
         $this->category = new Category();
     }

     public function index()
    {
        //
        //return $this->category->all();
           return response()->json(['message' => 'success','status' => 200,  'data' => $this->category->all()]);
        //return $this->apiResponse(message:'succsess',status :200 ,data :$category);
        //return $this->apiResponse($category,'ok',200);
    }
    
   
    public function store(Request $request)
    {
        //

//         $data = [];
// $data['Total Amount'] = Invoice::where('status', 'Completed')->sum('amount');
// $data['Count'] = Invoice::where('status', 'Completed')->count();
// $data['Activity'] = 'Invoices';

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
        return response()->json(['message' => 'Category updated successfully', 'category' => $category]);

    }

   
    public function destroy($id)
    {
        //
        $category = $this->category->find($id);
        return $category->delete();   
    }

}
