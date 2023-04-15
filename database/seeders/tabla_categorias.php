<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tabla_categorias extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $var1[1]='Arcade';
        $var1[2]='Disparos';
        $var1[3]='Peleas';
        $var1[4]='Aventuras';
        $var1[5]='Acción';
        $var1[6]='Puzzle';
        $var1[7]='Preguntas';
        $var1[8]='Musical';
        $var1[9]='Estrategia';
        $var1[10]='Simulación';
        $var1[11]='Deportes';
        $var1[12]='Carreras';
        $var1[13]='Rol';
    
        $var2[1]='Llamados así porque mantienen los principios de los antiguos juegos de Arcade, basados en el entretenimiento inmediato y una jugabilidad sencilla y adictiva.';
        $var2[2]='Los videojuegos de disparos son aquellos en los que el jugador asume el rol de una persona, vehículo o nave y el objetivo principal es atacar a objetivos diversos disparándoles proyectiles.';
        $var2[3]='Incluyen combates directos entre personajes, usando los puños o armas.';
        $var2[4]='Incluye investigación, exploración, la solución de rompecabezas, la interacción con personajes del videojuego, y un enfoque en el relato en vez de desafíos basados en reflejos.';
        $var2[5]='Combinan elementos propios de los juegos de aventura (exploración, resolver intrigas, interacción con el escenario y personajes) con elementos característicos de los videojuegos de acción (combate en tiempo real, corridas, saltos y destrezas físicas).';
        $var2[6]='Este género incluye a los juegos en donde cada nivel se presenta como una situación problemática al jugador, que este debe resolver siguiendo las reglas impuestas mediante el uso de su razonamiento lógico.';
        $var2[7]='Está inspirado en los programas televisivos de concursos sobre preguntas y respuestas.';
        $var2[8]='Se basan en la interacción del jugador con una pieza musical determinada.';
        $var2[9]='La forma de juego requiere el uso de un pensamiento táctico y la planificación de acciones para alcanzar la victoria.';
        $var2[10]='Este género agrupa a los juegos que simulan una realidad determinada que puede ser semejante a la vida real o presentar un mundo ficticio en donde el jugador interactúa con el entorno haciendo uso de recursos y bienes.';
        $var2[11]='Los videojuegos deportivos están basados o son una simulación virtual de las distintas disciplinas deportivas reales.';
        $var2[12]='Los videojuegos de carreras son aquellos en donde el jugador controla a un personaje o vehículo que compite en una carrera contra otros vehículos a lo largo de una pista.';
        $var2[13]='Popularmente conocidos como RPG, este género está basado en los juegos de rol de mesa.';
    
        for ( $i = 1 ; $i <= 13 ; $i++ ){
            \DB::table('categorias')->insert([
                'nombre' => $var1[$i],
                'descripcion' => $var2[$i],
                'status' => 1,
            ]);
        }
    }
}
