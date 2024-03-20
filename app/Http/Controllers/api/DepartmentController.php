<?php

namespace App\Http\Controllers\api;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
  
    protected $department;
    public function __construct(){
        $this->department = new department();
    }

    public function index()
    {
        //
        // return $this->department->all();
        return response()->json(['message' => 'success','status' => 200,  'data' => $this->department->all()]);


    }

   
    public function store(Request $request)
    {
        //
        return $this->department->create($request->all());

    }

   
    public function show($id)
    {
        //
        return $department = $this->department->find($id);  

    }

    
    public function update(Request $request, $id)
    {
        //
        $department = $this->department->find($id);
        $department->update($request->all());
        return $department;
    }

   
    public function destroy($id)
    {
        //
        $department = $this->department->find($id);
        return $department->delete();
    }
}
