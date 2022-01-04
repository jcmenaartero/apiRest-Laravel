<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpansionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Debemos usar el siguiente metodo para realizar las inserciones
        DB::table('expansions')->insert([
            [
                'boardgame_id' => 1,
                'name' => 'Arkham Horror, El juego de cartas: Sangre en el altar',
                'language' => 'Español',
                'description' => '"Sangre en el altar" incluye el Escenario IV de la campaña El legado de Dunwich, con 60 cartas fijas, nuevas cartas de jugador y un nuevo escenario, que puede jugarse de forma independiente o como parte de la campaña El legado de Dunwich.',
                'price' => 14.95,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'boardgame_id' => 1,
                'name' => 'Arkham Horror, El juego de cartas: El Essex County Express',
                'language' => 'Español',
                'description' => '"El Essex County Express" incluye el Escenario III de la campaña El legado de Dunwich, con 60 cartas fijas, nuevas cartas de jugador y un nuevo escenario, que puede jugarse de forma independiente o como parte de la campaña El legado de Dunwich.',
                'price' => 14.95,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'boardgame_id' => 1,
                'name' => 'Arkham Horror, El juego de cartas: El límite del otro lado',
                'language' => 'Español',
                'description' => 'Este pack contiene 60 cartas fijas, con nuevas cartas de Jugador diseñadas para potenciar los mazos existentes, y un nuevo escenario que puede jugarse de forma independiente o como parte de la campaña La era olvidada.',
                'price' => 14.95,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'boardgame_id' => 2,
                'name' => 'Bang!: Fiebre del oro',
                'language' => 'Español',
                'description' => 'Pero cuidado con los espectrales pistoleros sombra... Sólo tienen un objetivo: ¡acabar contigo! ¿podrás galopar hasta la veta más rica? Bang!: Fiebre del oro es una expansión que hará tus partidas de Bang! aún más divertidas y emocionantes. Para poder jugar necesitas el juego básico.',
                'price' => 16.95,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'boardgame_id' => 2,
                'name' => 'Bang! Armados y Peligrosos',
                'language' => 'Español',
                'description' => 'Nueva expansión del juego de mesa Bang!, Armados y peligrosos, en el que nuevos pistoleros llegan a la ciudad, buscando pelea. Además, al almacén acaba de llegar una mercancía bastante peligrosa: armas mortíferas, poderosos accesorios y munición letal..., ¡las cartas Peligrosas! Pero su uso está limitado, y si no eres lo suficientemente rápido, ¡tus enemigos las utilizarán contra ti!',
                'price' => 16.95,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'boardgame_id' => 3,
                'name' => 'Catan: Piratas y Exploradores',
                'language' => 'Español',
                'description' => 'Nueva expansión Catan Piratas y Exploradores del gran juego Catán, para disfrutar de hasta cinco nuevos escenarios y tres misiones. A diferencia de una partida normal de Catán, en Piratas y Exploradores el mapa se forma con tres islas diferentes, dos de las cuales empiezan el juego por explorar. ¡Divertido, intrigante y muy entretenido!',
                'price' => 19.95,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'boardgame_id' => 4,
                'name' => 'Virus 2 Evolution',
                'language' => 'Español',
                'description' => '¡Preparate porque los Virus han evolucionado! Las medicinas convencionales ya no son efectivas contra los nuevos virus mutados. Trata de mantener a raya los virus poniéndolos en cuarentena para evitar su propagación o con medicamentos experimentales no aprobados todavía por la OMS. ¡Hasta podrás sustituir partes de tu cuerpo por el frío metal a prueba de infecciones!',
                'price' => 11.95,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
