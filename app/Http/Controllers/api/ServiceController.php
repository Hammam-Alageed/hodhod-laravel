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

    public function index()
    {
        //
        return $this->service->all();

    }

   
    public function store(Request $request)
    {
        //
        return $this->service->create($request->all());

    }

   
    public function show($id)
    {
        //
        return $service = $this->service->find($id);  

    }

   
    
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
}


