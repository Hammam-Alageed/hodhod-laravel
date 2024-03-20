<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\City;


class CityController extends Controller
{

    protected $city;
     public function __construct(){
         $this->city = new City();
     }
    
    public function index()
    {
        //
        // return $this->city->all();
        return response()->json(['message' => 'success','status' => 200,  'data' => $this->city->all()]);
    }

  
    public function store(Request $request)
    {
        //
        // return $this->city->create($request->all());
             return response()->json(['message' => 'success','status' => 200,  'data' => $this->city->create($request->all())]);
    }

   
    public function show($id)
    {
        //
        return $city = $this->city->find($id);  

    }

  
    public function update(Request $request, $city_id)
    {
        //
    
        // $city = $this->city->find($id);
        // $city->update($request->all());
        // return response()->json(['message' => 'city updated successfully', 'city' => $city]);


        $city=city::find($city_id);
        $city->update($request->all());
        return $city;


    }

    
    public function destroy($id)
    {
        //
        $city = $this->city->find($id);
        return $city->delete();   
    }
}


