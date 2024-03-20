<?php

namespace App\Http\Controllers\api;
use Illuminate\Http\Request;
use App\Models\Department_detail;


class Department_detailController extends Controller
{
  
    protected $department_detail;
    public function __construct(){
        $this->department_detail = new department_detail();
    }

    public function index()
    {
        //
        // return $this->department_detail->all();
        return response()->json(['message' => 'success','status' => 200,  'data' => $this->department_detail->all()]);


    }

   
    public function store(Request $request)
    {
        //
        return $this->department_detail->create($request->all());

    }

   
    public function show($id)
    {
        //
        return $department_detail = $this->department_detail->find($id);  

    }

    
    public function update(Request $request, $id)
    {
        //
        $department_detail = $this->department_detail->find($id);
        $department_detail->update($request->all());
        return $department_detail;
    }

   
    public function destroy($id)
    {
        //
        $department_detail = $this->department_detail->find($id);
        return $department_detail->delete();
    }
}
