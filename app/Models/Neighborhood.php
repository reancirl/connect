<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    public function author() {
        return $this->belongsTo('App\Models\User','created_by','id');
    }
}
