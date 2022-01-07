<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenuItem extends Model
{
    protected $table = 'sub_menu_items';

    public function main_menu() {
        return $this->hasOne('App\Models\MenuItem');
    }
}
