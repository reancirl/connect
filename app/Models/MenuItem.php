<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'menu_items';

    public function menu() {
        return $this->hasOne('App\Models\Menu');
    }

    public function sub_menu() {
        return $this->hasMany('App\Models\SubMenuItem');
    }
}