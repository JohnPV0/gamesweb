<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tabla_tipos_pago extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('tipos_pago')->insert([
            'nombre' => 'EFECTIVO',
            'status' => 1,
        ]);
    
        \DB::table('tipos_pago')->insert([
            'nombre' => 'CHEQUE',
            'status' => 1,
        ]);
    
        \DB::table('tipos_pago')->insert([
            'nombre' => 'TRANSFERENCIA',
            'status' => 1,
        ]);
    
        \DB::table('tipos_pago')->insert([
            'nombre' => 'DEPOSITO',
            'status' => 1,
        ]);
    }
}
