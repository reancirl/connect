<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    public function author() {
        return $this->belongsTo('App\Models\User','created_by','id');
    }

    public function projects()
    {
        return $this->hasMany(Project::class); 
    }

}
