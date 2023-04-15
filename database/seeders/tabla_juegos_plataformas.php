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

        $platformas_watchdoglegion[1]=1;
        $platformas_watchdoglegion[2]=2;
        $platformas_watchdoglegion[3]=3;
        $platformas_watchdoglegion[4]=4;
        $platformas_watchdoglegion[5]=5;

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

        #minecraft
        for($i = 1; $i <= 3; $i++) {
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

        #gtav
        for($i = 1; $i <= 2; $i++) {
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

        #cod cold war
        for($i = 1; $i <= 5; $i++) {
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

        #red dead redemption 2

        \DB::table('juegos_plataformas')->insert([
            'id_juego' => $id_juego[5],
            'id_plataforma' => $plataformas_reddead2[1],
            'stock' => 200,
            'total_descargas' => 0,
            'precio_compra' => 500,
            'precio_venta' => 1000,
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
            'status' => 1
        ]);

        #watch dogs legion
        for($i = 1; $i <= 5; $i++) {
            \DB::table('juegos_plataformas')->insert([
                'id_juego' => $id_juego[9],
                'id_plataforma' => $platformas_watchdoglegion[$i],
                'stock' => 200,
                'total_descargas' => 0,
                'precio_compra' => 500,
                'precio_venta' => 1000,
                'status' => 1
            ]);
        }

        #fall guys
        for($i = 1; $i <= 2; $i++) {
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

        #forza horizon 5
        for($i = 1; $i <= 3; $i++) {
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

        #Minecraft dungeons
        \DB::table('juegos_plataformas')->insert([
            'id_juego' => $id_juego[12],
            'id_plataforma' => $plataformas_minecraftdungeons[1],
            'stock' => 200,
            'total_descargas' => 0,
            'precio_compra' => 500,
            'precio_venta' => 1000,
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
            'status' => 1
        ]);

        #fifa 22
        for($i = 1; $i <= 2; $i++) {
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
