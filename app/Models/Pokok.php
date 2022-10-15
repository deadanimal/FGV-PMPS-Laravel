<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokok extends Model
{
    use HasFactory;

    public function tandan() {
        return $this->hasMany(Tandan::class);
    }        
}
