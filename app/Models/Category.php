<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'category_id';
     protected $fillable = [
          'category_name_en',
          'category_name_ar',
          'category_image',
          'time_stamp',
      ];
    use HasFactory;
}

