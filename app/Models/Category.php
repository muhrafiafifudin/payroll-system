<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class, 'id_category');
    }

    public function kgb_data()
    {
        return $this->hasMany(KgbData::class, 'id_category');
    }
}
