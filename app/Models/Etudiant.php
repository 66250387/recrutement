<?php

namespace App\Models;

use Database\Seeders\DiplomeSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'filiere_id',
        'diplome_id',
        'user_id',
      
     ];
     public function user(){
        return $this->belongsTo(user::class);
    }
    public function diplome(){
        return $this->belongsTo(Diplome::class);
    }
    public function filiere(){
        return $this->belongsTo(filiere::class);
    }
}
