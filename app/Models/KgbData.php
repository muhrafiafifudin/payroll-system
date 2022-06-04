<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KgbData extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'category_id',
        'date',
        'start_date_salary',
        'year_of_services',
        'new_salary',
        'start_date'
    ];
}
