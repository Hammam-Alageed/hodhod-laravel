<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department';
    protected $primaryKey = 'department_id';
     protected $fillable = [
          'subSubService_id',
          'department_name',
          'department_price',
          'department_offer',
          'department_hodhodoffer',
          'time_stamp',
      ];
    use HasFactory;
}


