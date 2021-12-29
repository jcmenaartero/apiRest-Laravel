<?php

namespace Database\Seeders;

//Por defecto
use Illuminate\Database\Seeder;
//Añadidas
use Illuminate\Support\Facades\DB;

class BoardgameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Debemos usar el siguiente metodo para realizar las inserciones
        DB::table('boardgames')->insert([
            [
                'name' => 'Arkham Horror',
                'publisher' => 'Fantasy Flight',
                'language' => 'Español',
                'dificulty' => 'Medio',
                'description' => 'Juego cooperativo, donde todos los jugadores colaboran entre sí y ganan o pierden la partida como equipo. Cada jugador controla a un intrépido investigador, uno de los pocos individuos excepcionales que están al tanto del peligro que se cierne sobre nuestro mundo. Los investigadores deben explorar la ciudad para descubrir lugares, personas y criaturas de naturaleza tanto ordinaria como sobrenatural. Con suerte, a lo largo de este periplo los investigadores reunirán las pistas y recursos necesarios para enfrentarse a los Primigenios y, en última instancia, frustrar sus malvados designios',
                'min_players' => 1,
                'max_players' => 6,
                'play_time' => '30 minutos por jugador',
                'price' => 64.95,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bang!: La Bala',
                'publisher' => 'Edge Entertainment',
                'language' => 'Español',
                'dificulty' => 'Fácil',
                'description' => '¿Pero quiénes son los despiadados Forajidos que quieren coserte a tiros? ¡Para averiguarlo, tendrás que desenfundar (las cartas, claro)! Ahora, el Sheriff ha decidido zanjar las cosas de una vez por todas, a su manera. Ha escrito un nombre en una sola bala. Ese nombre es... BANG.',
                'min_players' => 3,
                'max_players' => 8,
                'play_time' => '20 - 40 minutos',
                'price' => 39.95,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Catan',
                'publisher' => 'Devir',
                'language' => 'Español',
                'dificulty' => 'Medio',
                'description' => 'En el juego Los Colonos de Catán el objetivo es colonizar la isla y lo conseguirás cuando acumules 10 ó más puntos los puntos que tienes que lograr en tu tirada, así que espabila y crea tu estrategia. Tendrás que mostrar tus dotes de comerciante: compra materias primas, vende las que producen tus campos y construye poblados, ciudades y carreteras. No es una tarea fácil porque ladrones, caballeros y ejércitos se cruzarán en tu camino. Si ganas una vez, no te hagas ilusiones, en cada partida la isla es diferente, no pienses que te servirá tu estrategia para la próxima. Cambiarán tus campos y tus materias primas, y puede que la suerte no te acompañe.',
                'min_players' => 3,
                'max_players' => 4,
                'play_time' => '75 minutos',
                'price' => 36.00,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
