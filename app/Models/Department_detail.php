<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department_detail extends Model
{
    protected $table = 'department_detail';
    protected $primaryKey = 'dept_detail_id';
     protected $fillable = [
          'subSubService_id',
          'dept_detail_name',
          'dept_detail_price',
          'dept_detail_offer',
          'dept_detail_hodoffer',
          'time_stamp',
      ];

    use HasFactory;
}



