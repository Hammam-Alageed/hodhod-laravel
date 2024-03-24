<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsubservice extends Model
{
  
     protected $fillable = [
          'subService_id',
          'work_time',
          'department',
          'department_offer',
          'department_hodhod_offer',
          'department_rates',
          'count',
          
      ];
    use HasFactory;
}
