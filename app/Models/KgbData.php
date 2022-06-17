<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KgbData extends Model
{
    use HasFactory;

    protected $table = 'kgb_data';

    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
