<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    
     protected $fillable = [
          'subSubService_id',
          'department_name',
          'department_price',
          'department_offer',
          'department_hodhodoffer',
        
      ];
    use HasFactory;
}


