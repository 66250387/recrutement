<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poste extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'description',
        'user_id',
     
     ];
     public function user(){
        return $this->belongsTo(user::class);
    }
    public function description(){
        return $this->belongsTo(poste::class);
    }
    
}

   
   


