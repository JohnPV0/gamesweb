<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tabla_plataformas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('plataformas')->insert([
            'nombre' => 'XBOX ONE',
            'status' => 1,
        ]);

        \db::table('plataformas')->insert([
            'nombre' => 'XBOX SERIES X|S',
            'status' => 1,
        ]);

        \DB::table('plataformas')->insert([
            'nombre' => 'PS4',
            'status' => 1,
        ]);

        \DB::table('plataformas')->insert([
            'nombre' => 'PS5',
            'status' => 1,
        ]);

        \DB::table('plataformas')->insert([
            'nombre' => 'PC',
            'status' => 1,
        ]);

        \DB::table('plataformas')->insert([
            'nombre' => 'SWITCH',
            'status' => 1,
        ]);
    }
}
