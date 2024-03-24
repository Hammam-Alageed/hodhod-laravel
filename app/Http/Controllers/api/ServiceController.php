<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

    protected $service;
    public function __construct(){
        $this->service = new Service();
    }

    public function index($id)
    {
    
        $service =  service::where('category_id', $id)->first();
        // if category_id
        if ($service) {
             return response()->json(['message' => 'success','status' => 200,  'data' => $this->service->all()]);

        }else{
              return response()->json(['message' => 'no data','status' => 200,  'data' => null]);
        }
       
        return response()->json($response, 400);
    }
    
   
    public function store(Request $request)
    {
        //
        return $this->service->create($request->all());
    }

   
    // public function show($id)
    // {
    //     //
    //     return $service = $this->service->find($id);  

    // }

   
    
    public function update(Request $request, $id)
    {
        //
        $service = $this->service->find($id);
        $service->update($request->all());
        return $service;
    }

   
    public function destroy($id)
    {
        //
        $service = $this->service->find($id);
        return $service->delete();
    }

//this api to get service where category_id from mobile = category_id in table

    public function getService($id)
    {
   
     }
    

}

