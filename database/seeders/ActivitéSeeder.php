<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Activité;

class ActivitéSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activité::factory()->count(10)->create([
            'description' => Str::random(10),
            'dateDebut' => '2000-01-01',
            'nombreJours' => '3',
        ]);        
    }
}
