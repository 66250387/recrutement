<?php

namespace Database\Seeders;

use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {

    User::create([
      'nom' => 'KANDO',
      'prenom' => 'Naomie',
      'role_id' => 1,
      'email' => 'naomiekan@gmail.com',
      'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password,
    ]);

    $user =   User::create([
      'nom' => 'Ebomaf',
      // 'ville'=>'koudougou',
      // 'domaine'=>'contruction',
      // 'siteweb'=>'www.ebomaf.com',
      // 'description' => 'les routes et les bitumes',
      // 'logo'=>'ebomaf.png',
      'role_id' => 2,
      'email' => 'ebomaf@gmail.com',
      'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // 22222222,
    ]);

    Entreprise::create([
      'ville' => 'koudougou',
      'siteweb' => 'www.ebomaf.com',
      'domaine' => 'contruction',
      'logo' => 'ebomaf.png',
      'description' => 'les routes et les bitumes',
      'user_id' => $user->id
    ]);

    User::create([
      'nom' => 'Ouedraogo',
      'prenom' => 'Aminata',
      'role_id' => 3,
      'email' => 'aminat@gmail.com',
      'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password,
    ]);
  }
}
