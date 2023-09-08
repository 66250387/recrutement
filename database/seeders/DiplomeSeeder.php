<?php

namespace Database\Seeders;
use App\Models\Diplome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiplomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Diplome::create([
            'diplome'=>'Bac',
           
          ]); 
          Diplome::create([
            'diplome'=>'licence',
           
          ]); 
          Diplome::create([
            'diplome'=>'Master',
           
          ]); 
          Diplome::create([
            'diplome'=>'Doctorat',
           
          ]); 
    }
}
