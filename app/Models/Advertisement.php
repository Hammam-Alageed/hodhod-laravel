<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $table = 'advertisement';
    protected $primaryKey = 'advertise_id';
     protected $fillable = [
          'advertise_name_en',
          'advertise_name_ar',
          'advertise_image',
          'time_stamp',
      ];
    use HasFactory;
}




