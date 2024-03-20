<?php

namespace App\Http\Controllers\api;
use Illuminate\Http\Request;
use App\Models\Subsubservice;



class SubsubserviceController extends Controller
{
    protected $subsubservice;
    public function __construct(){
        $this->subsubservice = new Subsubservice();
    }
    public function index()
    {
        //
        // return $this->subsubservice->all();
        return response()->json(['message' => 'success','status' => 200,  'data' => $this->subsubservice->all()]);


    }

   
    public function store(Request $request)
    {
        //
        return $this->subsubservice->create($request->all());

    }

   
    public function show($id)
    {
        //
        return $subsubservice = $this->subsubservice->find($id);  

    }

    
    public function update(Request $request, $id)
    {
        //
        $subsubservice = $this->subsubservice->find($id);
        $subsubservice->update($request->all());
        return $subsubservice;
    }

   
    public function destroy($id)
    {
        //
        $subsubservice = $this->subsubservice->find($id);
        return $subsubservice->delete();
    }
}
