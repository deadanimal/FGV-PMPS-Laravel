<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tandan extends Model
{
    use HasFactory;

    public function pokok() {
        return $this->belongsTo(Pokok::class);
    }      
    
    public function tugasan() {
        return $this->hasMany(Tugasan::class);
    }       
}
