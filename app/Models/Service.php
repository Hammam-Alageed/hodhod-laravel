<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

 
     protected $fillable = [
          'category_id',
          'service_name_en',
          'service_name_ar',
          'service_count',
          'has_subservice', 
          'service_image',
          
      ];
    use HasFactory;
}
