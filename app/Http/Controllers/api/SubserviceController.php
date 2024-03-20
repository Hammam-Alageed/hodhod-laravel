<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\Subservice;


class SubserviceController extends Controller
{
    protected $subservice;
    public function __construct(){
        $this->subservice = new Subservice();
    }
    
    public function index()
    {
        //
        // return $this->subservice->all();
        return response()->json(['message' => 'success','status' => 200,  'data' => $this->subservice->all()]);


    }

    
    public function store(Request $request)
    {
        //
        return $this->subservice->create($request->all());

    }

    
    public function show($id)
    {
        //
        return $subservice = $this->subservice->find($id);  

    }

   
    public function update(Request $request, $id)
    {
        //
        $subservice = $this->subservice->find($id);
        $subservice->update($request->all());
        return $subservice;
    }

   
    public function destroy($id)
    {
        //
        $subservice = $this->subservice->find($id);
        return $subservice->delete();
    }
}


