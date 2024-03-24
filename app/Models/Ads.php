<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;
    protected $fillable = [
        'advertise_name_en',
        'advertise_name_ar',
        'advertise_image',
        'type',
        'main_page',
        'category_id',
        'service',
        'subservice',
        'subsubservice',
       
    ];
}
