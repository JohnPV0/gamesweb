<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tabla_especificaciones extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('especificaciones')->insert([
            'id_juego_plataforma' => 3,
            'procesador' => 'Core i3-6100 a 3.7GHz o equivalente, Athlon X4 880K a 4GHz o equivalente.',
            'memoria_ram' => '8GB',
            'disco_duro' => '50GB',
            'tarjeta_grafica' => 'NVIDIA GeForce GTX 660 o equivalente., Radeon HD 7850 o equivalente',
            'sistema_operativo' => 'Windows 10 de 64 bits, Windows 11 de 64 bits',
            'status' => 1,
        ]);

        \DB::table('especificaciones')->insert([
            'id_juego_plataforma' => 6,
            'procesador' => 'Intel Pentium D ó AMD Athlon 64 (K8) 2.6 GHz',
            'memoria_ram' => '2GB',
            'disco_duro' => '1GB',
            'tarjeta_grafica' => '(Integrada): Intel HD Graphics ó AMD (antes ATI) Radeon HD con OpenGL 2.1 o Nvidia GeForce 9600 GT ó AMD Radeon HD 2400 con OpenGL 3.1',
            'sistema_operativo' => 'Windows 10 versión 14393.0 o posterior. Arquitectura: ARM, x64, x86.',
            'status' => 1,
        ]);

        \DB::table('especificaciones')->insert([
            'id_juego_plataforma' => 8,
            'procesador' => 'ntel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core Processor (4 CPUs) @ 2.5GHz',
            'memoria_ram' => '4GB',
            'disco_duro' => '65GB',
            'tarjeta_grafica' => 'NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)',
            'sistema_operativo' => 'Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1, Windows Vista 64 Bit Service Pack 2',
            'status' => 1,
        ]);

        \DB::table('especificaciones')->insert([
            'id_juego_plataforma' => 13,
            'procesador' => 'Intel Core i3-4340 o AMD FX-6300',
            'memoria_ram' => '8GB',
            'disco_duro' => '35 GB solo para el MJ y 82 GB para todos los modos de juego',
            'tarjeta_grafica' => 'NVIDIA GeForce GTX 670 / GeForce GTX 1650 o Radeon HD 7950',
            'sistema_operativo' => 'Windows® 10 de 64 bits (v. 1803 o superior)',
            'status' => 1,
        ]);
    
        \DB::table('especificaciones')->insert([
            'id_juego_plataforma' => 14,
            'procesador' => ' ¿Intel® Core™ i7-4770K / AMD Ryzen 5 1500X',
            'memoria_ram' => '12GB',
            'disco_duro' => '150GB',
            'tarjeta_grafica' => 'Nvidia GeForce GTX 1060 6GB / AMD Radeon RX 480 4GB',
            'sistema_operativo' => 'Windows 10 de 64 bits, Windows 11 de 64 bits',
            'status' => 1,
        ]);

        \DB::table('especificaciones')->insert([
            'id_juego_plataforma' => 18,
            'procesador' => 'Intel Core i5-9400F 2.9GHz / AMD Ryzen R5 1600',
            'memoria_ram' => '8GB',
            'disco_duro' => '70GB',
            'tarjeta_grafica' => 'AMD Radeon RX 570 / NVIDIA GeForce GTX 1650',
            'sistema_operativo' => 'Windows 7 o poterior de 64 bits',
            'status' => 1,
        ]);

        \DB::table('especificaciones')->insert([
            'id_juego_plataforma' => 23,
            'procesador' => 'Intel Core i5-4460 o AMD Ryzen 5 1400',
            'memoria_ram' => '8GB',
            'disco_duro' => '80GB',
            'tarjeta_grafica' => 'NVIDIA GeForce GTX 960 o AMD Radeon R9 290X',
            'sistema_operativo' => 'Windows 10 (versiones de 64 bits)',
            'status' => 1,
        ]);

        \DB::table('especificaciones')->insert([
            'id_juego_plataforma' => 24,
            'procesador' => 'Intel Core i5 o AMD equivalente.',
            'memoria_ram' => '8GB',
            'disco_duro' => '2GB',
            'tarjeta_grafica' => 'NVIDIA GTX 660 o AMD Radeon HD 7950.',
            'sistema_operativo' => 'Windows 10 (64 bits).',
            'status' => 1,
        ]);

        \DB::table('especificaciones')->insert([
            'id_juego_plataforma' => 28,
            'procesador' => 'Intel i5-8400 or AMD Ryzen 5 1500X.',
            'memoria_ram' => '16GB',
            'disco_duro' => '110GB',
            'tarjeta_grafica' => 'NVidia GTX 1070 OR AMD RX 590. Direct X12',
            'sistema_operativo' => 'Windows 10 versión 15063.0',
            'status' => 1,
        ]);

        \DB::table('especificaciones')->insert([
            'id_juego_plataforma' => 29,
            'procesador' => 'Core i5 2.8GHz ó equivalente.',
            'memoria_ram' => '8GB',
            'disco_duro' => '6GB',
            'tarjeta_grafica' => 'NVIDIA GeForce GTX 660 ó AMD Radeon HD 7870 ó GPU DX11 equivalente.',
            'sistema_operativo' => 'Windows 10, 8 ó 7 (64-bit; algunas funcionalidades no disponibles en Windows 8 y 7)',
            'status' => 1,
        ]);

        \DB::table('especificaciones')->insert([
            'id_juego_plataforma' => 30,
            'procesador' => 'Intel Core i5 y superior o similar',
            'memoria_ram' => '8GB',
            'disco_duro' => '30GB',
            'tarjeta_grafica' => 'GeForce GT 1030 y superior o similar',
            'sistema_operativo' => 'Windows 7 SP1 64-bit, Windows 8.1 64-bit o Windows 10 64-bit',
            'status' => 1,
        ]);
    }
}
