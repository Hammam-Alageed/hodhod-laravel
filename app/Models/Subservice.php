<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subservice extends Model
{
   
     protected $fillable = [
          'service_id',
          'subService_name_en',
          'subService_name_ar',
          'subService_desc',
          'subService_count',
          'subService_image',
          'subService_address',
          'subService_latitude',
          'subService_longitude',
          'subService_rates',
          
      ];

    use HasFactory;
}



