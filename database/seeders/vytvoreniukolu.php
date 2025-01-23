<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;
use function PHPSTORM_META\type;

class vytvoreniukolu extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ukoly = [
            ["nazev"=>"Vynést odpadky"],
            ["nazev"=>"Uklidit pokoj"],
            ["nazev"=>"Dělat wtv"],
            ["nazev"=>"Pokus"],
            ["nazev"=>"Geometrie"],
            ["nazev"=>"Matematika"]

            
        ];

        foreach ($ukoly as $ukol ) {
            DB::table('ukoly')->insert([
                $ukol
                
            ]);
        }

    }
}
