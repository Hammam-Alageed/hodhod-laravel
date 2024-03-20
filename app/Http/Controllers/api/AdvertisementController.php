<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\Advertisement;


class AdvertisementController extends Controller
{
   
    
    protected $advertisement;
    public function __construct(){
        $this->advertisement = new Advertisement();
    }


    public function index()
    {
        //
        // return $this->advertisement->all();
        return response()->json(['message' => 'success','status' => 200,  'data' => $this->advertisement->all()]);


    }

   

    public function store(Request $request)
    {
        //
        return $this->advertisement->create($request->all());

    }


    


    public function show($id)
    {
        //
        return $advertisement = $this->advertisement->find($id);  

    }

    
    public function update(Request $request, $id)
    {
        //
        $advertisement = $this->advertisement->find($id);
        $advertisement->update($request->all());
        return $advertisement;
    }

   
    public function destroy($id)
    {
        //
        $advertisement = $this->advertisement->find($id);
        return $advertisement->delete();  
    }
}


