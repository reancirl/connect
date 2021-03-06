<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author() {
        return $this->belongsTo('App\Models\User','created_by','id');
    }

    public function media() {
        return $this->hasOne('App\Models\Media','title','name');
    }
}
