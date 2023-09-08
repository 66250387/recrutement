<?php

namespace Database\Seeders;
use App\Models\Etudiant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Etudiant::create([
            'filiere_id'=> 2,
            'diplome_id'=>3,
            'user_id'=> 3
          ]); 

          Etudiant::create([
            'filiere_id'=> 1,
            'diplome_id'=>1,
            'user_id'=> 3
          ]); 
    }
}
