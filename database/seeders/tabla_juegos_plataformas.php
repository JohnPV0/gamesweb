<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tabla_juegos_plataformas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id_juego[1]='1'; //FIFA 21
        $id_juego[2]='2'; //Minecraft
        $id_juego[3]='3'; //Grand Theft Auto V
        $id_juego[4]='4'; //Call of Duty: Black Ops Cold War
        $id_juego[5]='5'; //Red dead redemption 2
        $id_juego[6]='6'; //The last of us part 2
        $id_juego[7]='7'; //Assassin's Creed Valhalla
        $id_juego[8]='8'; //Cyberpunk 2077
        $id_juego[9]='9'; //Watch Dogs Legion
        $id_juego[10]='10'; //Fall Guys
        $id_juego[11]='11'; //Forza Horizon 5
        $id_juego[12]='12'; //MInecraft Dungeons
        $id_juego[13]='13'; //Geshin Impact
        $id_juego[14]='14'; //FIFA 22


        $id_plataforma[1]='1'; //|  1 | XBOX ONE      |
        $id_plataforma[2]='2'; //|  2 | XBOX SERIES X|S|
        $id_plataforma[3]='3'; //|  3 | PS4           |
        $id_plataforma[4]='4'; //|  4 | PS5           |
        $id_plataforma[5]='5'; //|  5 | PC            |
        $id_plataforma[6]='6'; //|  6 | SWITCH        |


        $plataformas_min_fifa21[1]=1;
        $plataformas_min_fifa21[2]=2;
        $plataformas_min_fifa21[3]=5;

        $plataformas_gtav[1]=1;
        $plataformas_gtav[2]=5;

        $plataformas_codcoldwar[1]=1;
        $plataformas_codcoldwar[2]=2;
        $plataformas_codcoldwar[3]=3;
        $plataformas_codcoldwar[4]=4;
        $plataformas_codcoldwar[5]=5;

        $plataformas_reddead2[1]=5;

        $plataformas_lastofus2[1]=3;

        $plataformas_assassinscreedvalhalla[1]=1;
        $plataformas_assassinscreedvalhalla[2]=2;

        $plataformas_cyberpunk2077[1]=5;

        $plataformas_watchdoglegion[1]=1;
        $plataformas_watchdoglegion[2]=2;
        $plataformas_watchdoglegion[3]=3;
        $plataformas_watchdoglegion[4]=4;
        $plataformas_watchdoglegion[5]=5;

        $plataformas_fallguys[1]=5;
        $plataformas_fallguys[2]=6;

        $plataformas_forzahorizon5[1]=1;
        $plataformas_forzahorizon5[2]=2;
        $plataformas_forzahorizon5[3]=5;

        $plataformas_minecraftdungeons[1]=5;

        $plataformas_geshinimpact[1]=5;

        $plataformas_fifa22[1]=1;
        $plataformas_fifa22[2]=2;
        $plataformas_fifa22[3]=5;

        #fifa 21
        for($i = 1; $i <= 3; $i++) {
            if($plataformas_min_fifa21[$i] == 5) {
                \DB::table('juegos_plataformas')->insert([
                    'id_juego' => $id_juego[1],
                    'id_plataforma' => $plataformas_min_fifa21[$i],
                    'stock' => 200,
                    'total_descargas' => 0,
                    'precio_compra' => 500,
                    'precio_venta' => 1000,
                    'procesador' => 'Core i3-6100 a 3.7GHz o equivalente, Athlon X4 880K a 4GHz o equivalente.',
                    'memoria_ram' => '8GB',
                    'disco_duro' => '50GB',
                    'tarjeta_grafica' => 'NVIDIA GeForce GTX 660 o equivalente., Radeon HD 7850 o equivalente',
                    'sistema_operativo' => 'Windows 10 de 64 bits, Windows 11 de 64 bits',
                    'status' => 1
                ]);
            } else {
                \DB::table('juegos_plataformas')->insert([
                    'id_juego' => $id_juego[1],
                    'id_plataforma' => $plataformas_min_fifa21[$i],
                    'stock' => 200,
                    'total_descargas' => 0,
                    'precio_compra' => 500,
                    'precio_venta' => 1000,
                    'status' => 1
                ]);
            }
        }

        #minecraft
        for($i = 1; $i <= 3; $i++) {
            if ($plataformas_min_fifa21[$i] == 5) {
                \DB::table('juegos_plataformas')->insert([
                    'id_juego' => $id_juego[2],
                    'id_plataforma' => $plataformas_min_fifa21[$i],
                    'stock' => 200,
                    'total_descargas' => 0,
                    'precio_compra' => 500,
                    'precio_venta' => 1000,
                    'procesador' => 'Intel Pentium D ó AMD Athlon 64 (K8) 2.6 GHz',
                    'memoria_ram' => '2GB',
                    'disco_duro' => '1GB',
                    'tarjeta_grafica' => '(Integrada): Intel HD Graphics ó AMD (antes ATI) Radeon HD con OpenGL 2.1 o Nvidia GeForce 9600 GT ó AMD Radeon HD 2400 con OpenGL 3.1',
                    'sistema_operativo' => 'Windows 10 versión 14393.0 o posterior. Arquitectura: ARM, x64, x86.',
                    'status' => 1
                ]);
            } else {
                \DB::table('juegos_plataformas')->insert([
                    'id_juego' => $id_juego[2],
                    'id_plataforma' => $plataformas_min_fifa21[$i],
                    'stock' => 200,
                    'total_descargas' => 0,
                    'precio_compra' => 500,
                    'precio_venta' => 1000,
                    'status' => 1
                ]);
            }
            
        }

        #gtav
        for($i = 1; $i <= 2; $i++) {
            if($plataformas_gtav[$i] == 5) {
                \DB::table('juegos_plataformas')->insert([
                    'id_juego' => $id_juego[3],
                    'id_plataforma' => $plataformas_gtav[$i],
                    'stock' => 200,
                    'total_descargas' => 0,
                    'precio_compra' => 500,
                    'precio_venta' => 1000,
                    'procesador' => 'Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core Processor (4 CPUs) @ 2.5GHz',
                    'memoria_ram' => '4GB',
                    'disco_duro' => '65GB',
                    'tarjeta_grafica' => 'NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)',
                    'sistema_operativo' => 'Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1, Windows Vista 64 Bit Service Pack 2',
                    'status' => 1
                ]);
            } else {
                \DB::table('juegos_plataformas')->insert([
                    'id_juego' => $id_juego[3],
                    'id_plataforma' => $plataformas_gtav[$i],
                    'stock' => 200,
                    'total_descargas' => 0,
                    'precio_compra' => 500,
                    'precio_venta' => 1000,
                    'status' => 1
                ]);
            }
            
        }

        #cod cold war
        for($i = 1; $i <= 5; $i++) {

            if ($plataformas_codcoldwar[$i] == 5) {
                \DB::table('juegos_plataformas')->insert([
                    'id_juego' => $id_juego[4],
                    'id_plataforma' => $plataformas_codcoldwar[$i],
                    'stock' => 200,
                    'total_descargas' => 0,
                    'precio_compra' => 500,
                    'precio_venta' => 1000,
                    'procesador' => 'Intel Core i3-4340 o AMD FX-6300',
                    'memoria_ram' => '8GB',
                    'disco_duro' => '35 GB solo para el MJ y 82 GB para todos los modos de juego',
                    'tarjeta_grafica' => 'NVIDIA GeForce GTX 670 / GeForce GTX 1650 o Radeon HD 7950',
                    'sistema_operativo' => 'Windows® 10 de 64 bits (v. 1803 o superior)',
                    'status' => 1
                ]);
            } else {
                \DB::table('juegos_plataformas')->insert([
                    'id_juego' => $id_juego[4],
                    'id_plataforma' => $plataformas_codcoldwar[$i],
                    'stock' => 200,
                    'total_descargas' => 0,
                    'precio_compra' => 500,
                    'precio_venta' => 1000,
                    'status' => 1
                ]);
            }

            
        }

        #red dead redemption 2
        \DB::table('juegos_plataformas')->insert([
            'id_juego' => $id_juego[5],
            'id_plataforma' => $plataformas_reddead2[1],
            'stock' => 200,
            'total_descargas' => 0,
            'precio_compra' => 500,
            'precio_venta' => 1000,
            'procesador' => ' ¿Intel® Core™ i7-4770K / AMD Ryzen 5 1500X',
            'memoria_ram' => '12GB',
            'disco_duro' => '150GB',
            'tarjeta_grafica' => 'Nvidia GeForce GTX 1060 6GB / AMD Radeon RX 480 4GB',
            'sistema_operativo' => 'Windows 10 de 64 bits, Windows 11 de 64 bits',
            'status' => 1
        ]);

        #the last of us part 2
        \DB::table('juegos_plataformas')->insert([
            'id_juego' => $id_juego[6],
            'id_plataforma' => $plataformas_lastofus2[1],
            'stock' => 200,
            'total_descargas' => 0,
            'precio_compra' => 500,
            'precio_venta' => 1000,
            'status' => 1
        ]);

        #assassin's creed valhalla
        for($i = 1; $i <= 2; $i++) {
            \DB::table('juegos_plataformas')->insert([
                'id_juego' => $id_juego[7],
                'id_plataforma' => $plataformas_assassinscreedvalhalla[$i],
                'stock' => 200,
                'total_descargas' => 0,
                'precio_compra' => 500,
                'precio_venta' => 1000,
                'status' => 1
            ]);
        }

        #cyberpunk 2077
        \DB::table('juegos_plataformas')->insert([
            'id_juego' => $id_juego[8],
            'id_plataforma' => $plataformas_cyberpunk2077[1],
            'stock' => 200,
            'total_descargas' => 0,
            'precio_compra' => 500,
            'precio_venta' => 1000,
            'procesador' => 'Intel Core i5-9400F 2.9GHz / AMD Ryzen R5 1600',
            'memoria_ram' => '8GB',
            'disco_duro' => '70GB',
            'tarjeta_grafica' => 'AMD Radeon RX 570 / NVIDIA GeForce GTX 1650',
            'sistema_operativo' => 'Windows 7 o poterior de 64 bits',
            'status' => 1
        ]);

        #watch dogs legion
        for($i = 1; $i <= 5; $i++) {
            if ($plataformas_watchdoglegion[$i] == 5) {
                \DB::table('juegos_plataformas')->insert([
                    'id_juego' => $id_juego[9],
                    'id_plataforma' => $plataformas_watchdoglegion[$i],
                    'stock' => 200,
                    'total_descargas' => 0,
                    'precio_compra' => 500,
                    'precio_venta' => 1000,
                    'procesador' => 'Intel Core i5-4460 o AMD Ryzen 5 1400',
                    'memoria_ram' => '8GB',
                    'disco_duro' => '80GB',
                    'tarjeta_grafica' => 'NVIDIA GeForce GTX 960 o AMD Radeon R9 290X',
                    'sistema_operativo' => 'Windows 10 (versiones de 64 bits)',
                    'status' => 1
                ]);
            } else {
                \DB::table('juegos_plataformas')->insert([
                    'id_juego' => $id_juego[9],
                    'id_plataforma' => $plataformas_watchdoglegion[$i],
                    'stock' => 200,
                    'total_descargas' => 0,
                    'precio_compra' => 500,
                    'precio_venta' => 1000,
                    'status' => 1
                ]);
            }
            
        }

        #fall guys
        for($i = 1; $i <= 2; $i++) {
            if ($plataformas_fallguys[$i] == 5) {
                \DB::table('juegos_plataformas')->insert([
                    'id_juego' => $id_juego[10],
                    'id_plataforma' => $plataformas_fallguys[$i],
                    'stock' => 200,
                    'total_descargas' => 0,
                    'precio_compra' => 500,
                    'precio_venta' => 1000,
                    'procesador' => 'Intel Core i5 o AMD equivalente.',
                    'memoria_ram' => '8GB',
                    'disco_duro' => '2GB',
                    'tarjeta_grafica' => 'NVIDIA GTX 660 o AMD Radeon HD 7950.',
                    'sistema_operativo' => 'Windows 10 (64 bits).',
                    'status' => 1
                ]);
            } else {
                \DB::table('juegos_plataformas')->insert([
                    'id_juego' => $id_juego[10],
                    'id_plataforma' => $plataformas_fallguys[$i],
                    'stock' => 200,
                    'total_descargas' => 0,
                    'precio_compra' => 500,
                    'precio_venta' => 1000,
                    'status' => 1
                ]);
            }
        }

        #forza horizon 5
        for($i = 1; $i <= 3; $i++) {
            if ($plataformas_forzahorizon5[$i] == 5) {
                \DB::table('juegos_plataformas')->insert([
                    'id_juego' => $id_juego[11],
                    'id_plataforma' => $plataformas_forzahorizon5[$i],
                    'stock' => 200,
                    'total_descargas' => 0,
                    'precio_compra' => 500,
                    'precio_venta' => 1000,
                    'procesador' => 'Intel i5-8400 or AMD Ryzen 5 1500X.',
                    'memoria_ram' => '16GB',
                    'disco_duro' => '110GB',
                    'tarjeta_grafica' => 'NVidia GTX 1070 OR AMD RX 590. Direct X12',
                    'sistema_operativo' => 'Windows 10 versión 15063.0',
                    'status' => 1
                ]) ;
            } else {
                \DB::table('juegos_plataformas')->insert([
                    'id_juego' => $id_juego[11],
                    'id_plataforma' => $plataformas_forzahorizon5[$i],
                    'stock' => 200,
                    'total_descargas' => 0,
                    'precio_compra' => 500,
                    'precio_venta' => 1000,
                    'status' => 1
                ]);
            }
        }

        #Minecraft dungeons
        \DB::table('juegos_plataformas')->insert([
            'id_juego' => $id_juego[12],
            'id_plataforma' => $plataformas_minecraftdungeons[1],
            'stock' => 200,
            'total_descargas' => 0,
            'precio_compra' => 500,
            'precio_venta' => 1000,
            'procesador' => 'Core i5 2.8GHz ó equivalente.',
            'memoria_ram' => '8GB',
            'disco_duro' => '6GB',
            'tarjeta_grafica' => 'NVIDIA GeForce GTX 660 ó AMD Radeon HD 7870 ó GPU DX11 equivalente.',
            'sistema_operativo' => 'Windows 10, 8 ó 7 (64-bit; algunas funcionalidades no disponibles en Windows 8 y 7)',
            'status' => 1
        ]);

        #Geshin impact
        \DB::table('juegos_plataformas')->insert([
            'id_juego' => $id_juego[13],
            'id_plataforma' => $plataformas_geshinimpact[1],
            'stock' => 200,
            'total_descargas' => 0,
            'precio_compra' => 500,
            'precio_venta' => 1000,
            'procesador' => 'Intel Core i5 y superior o similar',
            'memoria_ram' => '8GB',
            'disco_duro' => '30GB',
            'tarjeta_grafica' => 'GeForce GT 1030 y superior o similar',
            'sistema_operativo' => 'Windows 7 SP1 64-bit, Windows 8.1 64-bit o Windows 10 64-bit',
            'status' => 1
        ]);

        #fifa 22
        for($i = 1; $i <= 2; $i++) {

            if($plataformas_fifa22[$i] == 5) {
                \DB::table('juegos_plataformas')->insert([
                    'id_juego' => $id_juego[14],
                    'id_plataforma' => $plataformas_fifa22[$i],
                    'stock' => 200,
                    'total_descargas' => 0,
                    'precio_compra' => 500,
                    'precio_venta' => 1000,
                    'procesador' => 'Intel Core i5-3550 de 3,40 GHz o equivalente. AMD FX 8150 de 3,6 GHz o equivalente',
                    'memoria_ram' => '8GB',
                    'disco_duro' => '50GB',
                    'tarjeta_grafica' => 'NVIDIA GeForce GTX 670 o equivalente. AMD Radeon R9 270x o equivalente                    ',
                    'sistema_operativo' => 'Windows 10 de 64 bits',
                    'status' => 1
                ]);
            } else {
                \DB::table('juegos_plataformas')->insert([
                    'id_juego' => $id_juego[14],
                    'id_plataforma' => $plataformas_fifa22[$i],
                    'stock' => 200,
                    'total_descargas' => 0,
                    'precio_compra' => 500,
                    'precio_venta' => 1000,
                    'status' => 1
                ]);
            }

            
        }


    }
}
