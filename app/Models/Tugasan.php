<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugasan extends Model
{
    use HasFactory;

    public function tandan() {
        return $this->belongsTo(Tandan::class);
    }       

    public function assignee() {
        return $this->belongsTo(User::class, 'assignee_id');
    }       
    
    public function pengesah() {
        return $this->belongsTo(User::class, 'pengesah_id');
    }        
     
}
