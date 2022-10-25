<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epreuve extends Model
{
    use HasFactory;
    
    public function matiere() 
    { 
        return $this->belongsTo(Matiere::class); 
    }
}
