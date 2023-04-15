<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tabla_juegos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('juegos')->insert([
            'nombre'=>'FIFA 21',
            'descripcion'=>'FIFA 2021 para PC es el increíble juego número 28 de esta serie. Los desarrolladores del juego han tenido años para alcanzar la perfección y, como resultado, hay poco en lo que se ha interferido para arruinar el clásico tan querido. Como siempre, es la licencia lo que atrae a los compradores, y esta edición no es diferente con la asombrosa cantidad de 17,000 jugadores de 700 clubes que juegan en 30 ligas para elegir, intercambiar y transferir.',
            'puntuacion'=>0,
            'fecha_lanzamiento'=>'2020-08-14',
            'id_categoria'=>11,
            'status'=>1,
        ]);

        \DB::table('juegos')->insert([
            'nombre'=>'Minecraft',
            'descripcion'=>'Minecraft es un juego de construcción, aventura y supervivencia. En el modo de juego de supervivencia, los jugadores deben recolectar recursos para construir el mundo y protegerse de los peligros nocturnos. El modo de juego de creatividad permite a los jugadores crear con ilimitadas posibilidades de recursos. El modo de juego de supervivencia se juega en mundos generados aleatoriamente, mientras que el modo de juego de creatividad se juega en mundos creados por el jugador.',
            'puntuacion'=>0,
            'fecha_lanzamiento'=>'2011-11-18',
            'id_categoria'=>4,
            'status'=>1
        ]);

        \DB::table('juegos')->insert([
            'nombre'=>'Grand Theft Auto V',
            'descripcion'=>'Grand Theft Auto V es un juego de acción y aventura de mundo abierto desarrollado por Rockstar North y publicado por Rockstar Games. Los jugadores pueden completar misiones para avanzar en la historia, o ignorar la historia y centrarse en la exploración y el juego libre. El juego incluye elementos de acción y aventura, y los jugadores pueden participar en actividades como carreras de coches, carreras de motocicletas, buceo, golf, natación, ciclismo, esquí, surf, escalada, equitación, y vuelo.',
            'puntuacion'=>0,
            'fecha_lanzamiento'=>'2013-09-17',
            'id_categoria'=>5,
            'status'=>1
        ]);
        
        \DB::table('juegos')->insert([
            'nombre'=>'Call of Duty: Black Ops Cold War',
            'descripcion'=>'Call of Duty: Black Ops Cold War es un videojuego de disparos en primera persona desarrollado por Treyarch y Raven Software y publicado por Activision. Es la decimosexta entrega principal de la serie Call of Duty y una secuela directa de Call of Duty: Black Ops (2010). El juego se lanzó el 13 de noviembre de 2020 para Microsoft Windows, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X y Series S, y Stadia.',
            'puntuacion'=>0,
            'fecha_lanzamiento'=>'2020-11-13',
            'id_categoria'=>2,
            'status'=>1
        ]);

        \DB::table('juegos')->insert([
            'nombre'=>'Red Dead Redemption 2',
            'descripcion'=>'Red Dead Redemption 2 es un videojuego de acción-aventura western desarrollado y publicado por Rockstar Games. Es la secuela de Red Dead Redemption (2010) y la tercera entrega de la saga Red Dead, siendo el primero de la serie en ser desarrollado para las ocho generaciones de consolas. El juego se lanzó el 26 de octubre de 2018 para PlayStation 4 y Xbox One, y el 5 de noviembre de 2019 para Microsoft Windows y Stadia.',
            'puntuacion'=>0,
            'fecha_lanzamiento'=>'2018-10-26',
            'id_categoria'=>5,
            'status'=>1
        ]);

        \DB::table('juegos')->insert([
            'nombre'=>'The Last of Us Part II',
            'descripcion'=>'The Last of Us Part II es un videojuego de acción-aventura desarrollado por Naughty Dog y publicado por Sony Interactive Entertainment. Es la secuela de The Last of Us (2013) y la segunda entrega de la saga The Last of Us. El juego se lanzó el 19 de junio de 2020 para PlayStation 4.',
            'puntuacion'=>0,
            'fecha_lanzamiento'=>'2020-06-19',
            'id_categoria'=>5,
            'status'=>1
        ]);

        \DB::table('juegos')->insert([
            'nombre'=>'Assassin’s Creed Valhalla',
            'descripcion'=>'Assassin’s Creed Valhalla es un videojuego de acción-aventura desarrollado por Ubisoft Montreal y publicado por Ubisoft. Es la décima entrega principal de la serie Assassin’s Creed y la secuela de Assassin’s Creed Odyssey (2018). El juego se lanzó el 10 de noviembre de 2020 para PlayStation 4, Xbox One, Stadia, Microsoft Windows y PlayStation 5 y Xbox Series X y Series S.',
            'puntuacion'=>0,
            'fecha_lanzamiento'=>'2020-11-10',
            'id_categoria'=>5,
            'status'=>1
        ]);

        \DB::table('juegos')->insert([
            'nombre'=>'Cyberpunk 2077',
            'descripcion'=>'Cyberpunk 2077 es un videojuego de rol de acción desarrollado y publicado por CD Projekt. Es el primer juego de la serie Cyberpunk y se lanzó el 10 de diciembre de 2020 para PlayStation 4, Xbox One, Stadia, Microsoft Windows y PlayStation 5 y Xbox Series X y Series S.',
            'puntuacion'=>0,
            'fecha_lanzamiento'=>'2020-12-10',
            'id_categoria'=>5,
            'status'=>1
        ]);

        \DB::table('juegos')->insert([
            'nombre'=>'Watch Dogs: Legion',
            'descripcion'=>'Watch Dogs: Legion es un videojuego de acción-aventura desarrollado por Ubisoft Toronto y publicado por Ubisoft. Es la tercera entrega principal de la serie Watch Dogs y la secuela de Watch Dogs 2 (2016). El juego se lanzó el 29 de octubre de 2020 para PlayStation 4, Xbox One, Stadia, Microsoft Windows y PlayStation 5 y Xbox Series X y Series S.',
            'puntuacion'=>0,
            'fecha_lanzamiento'=>'2020-10-29',
            'id_categoria'=>5,
            'status'=>1
        ]);

        \DB::table('juegos')->insert([
            'nombre'=>'Fall GUys: Ultimate Knockout',
            'descripcion'=>'Fall Guys: Ultimate Knockout es un videojuego desarrollado por Mediatonic y publicado por Devolver Digital. Es un juego multijugador masivo en línea (MMO) de hasta 60 jugadores en el que los jugadores controlan a personajes de peluche que compiten en una serie de minijuegos para ser el último en quedar en pie.',
            'puntuacion'=>0,
            'fecha_lanzamiento'=>'2020-08-04',
            'id_categoria'=>4,
            'status'=>1
        ]);

        \DB::table('juegos')->insert([
            'nombre'=>'Forza Horizon 5',
            'descripcion'=>'Forza Horizon 5 es un videojuego de carreras de mundo abierto desarrollado por Playground Games y publicado por Xbox Game Studios. Es la quinta entrega principal de la serie Forza Horizon y la secuela de Forza Horizon 4 (2018). El juego se lanzó el 9 de noviembre de 2021 para Xbox Series X y Series S, Xbox One, Microsoft Windows y Stadia.',
            'puntuacion'=>0,
            'fecha_lanzamiento'=>'2021-11-05',
            'id_categoria'=>12,
            'status'=>1
        ]);

        \DB::table('juegos')->insert([
            'nombre'=>'Minecraft Dungeons',
            'descripcion'=>'Minecraft Dungeons es un videojuego de acción-aventura desarrollado por Mojang Studios y publicado por Xbox Game Studios. Es un spin-off de Minecraft y se lanzó el 26 de mayo de 2020 para PlayStation 4, Xbox One, Nintendo Switch, Microsoft Windows y Stadia.',
            'puntuacion'=>0,
            'fecha_lanzamiento'=>'2020-05-26',
            'id_categoria'=>4,
            'status'=>1
        ]);

        \DB::table('juegos')->insert([
            'nombre'=>'Genshin Impact',
            'descripcion'=>'Genshin Impact es un videojuego de rol de acción desarrollado por miHoYo. Es un juego de mundo abierto gratuito que se lanzó el 28 de septiembre de 2020 para Microsoft Windows, PlayStation 4, iOS y Android.',
            'puntuacion'=>0,
            'fecha_lanzamiento'=>'2020-09-28',
            'id_categoria'=>13,
            'status'=>1
        ]);

        \DB::table('juegos')->insert([
            'nombre'=>'FIFA 22',
            'descripcion'=>'FIFA 22 es un videojuego de fútbol desarrollado por EA Vancouver y EA Bucharest y publicado por Electronic Arts. Es la vigésima segunda entrega principal de la serie FIFA y la secuela de FIFA 21 (2020). El juego se lanzó el 1 de octubre de 2021 para PlayStation 4, PlayStation 5, Xbox One, Xbox Series X y Series S, Nintendo Switch, Stadia y Microsoft Windows.',
            'puntuacion'=>0,
            'fecha_lanzamiento'=>'2021-09-27',
            'id_categoria'=>12,
            'status'=>1
        ]);
    }
}
