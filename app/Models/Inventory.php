<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    //
    use HasFactory;
    use SoftDeletes;

    public function user()
    {
         return $this->belongsTo(User::class);
    }

    public function getNameAttribute($value) //yg ni gether
    {
         return strtoupper($value);
    }

    public function setNameAttribute($value) // yg ni center 
    {
         $this->attributes['name'] = strtoupper($value);
    }
}
