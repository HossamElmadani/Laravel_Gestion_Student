<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Eleve;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Eleve::factory()->count(10)->create([
            'nom' => Str::random(10),
            'prenom' => Str::random(10),
            'club_id' => 1, // Provide a valid club_id
        ]);
 
    }
}
