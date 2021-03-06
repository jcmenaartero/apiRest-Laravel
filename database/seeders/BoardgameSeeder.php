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
                'name' => 'Arkham Horror: El juego de cartas',
                'publisher' => 'Fantasy Flight',
                'language' => 'Español',
                'dificulty' => 'Medio',
                'description' => 'Arkham Horror el juego de cartas es un juego cooperativo en una ambientación de horror lovecraftiano. Mientras los Antiguos buscan una forma de entrar en nuestro mundo, los investigadores se esfuerzan por desentrañar arcanos misterios y conspiraciones.',
                'min_players' => 1,
                'max_players' => 4,
                'play_time' => '60 - 120 minutos',
                'price' => 59.99,
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
                'price' => 35.95,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Virus',
                'publisher' => 'Tranjis',
                'language' => 'Español',
                'dificulty' => 'Fácil',
                'description' => 'Virus es uno de los juegos de cartas más vendidos. Consigue un cuerpo sano e inmunizado: cerebro, corazón, estómago y huesos libres de infecciones. No será fácil porque los virus van que vuelan. Prepara tus medicinas y arroja virus a los demás. Guárdate tus mejores armas; trasplantes de cuerpos, robos de órganos, trasmisión comunitaria, errores médicos galopantes... para los momentos más importantes.',
                'min_players' => 2,
                'max_players' => 6,
                'play_time' => '20 minutos',
                'price' => 13.46,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gloomhaven',
                'publisher' => 'Asmodée',
                'language' => 'Íngles',
                'dificulty' => 'Medio',
                'description' => '¡Bienvenidos a Gloomhaven! Ser un mercenario en la frontera de la civilización no es nada fácil. A aquellos lo suficientemente estúpidos o valientes como para dejar la relativa seguridad de los muros de Gloomhaven, la aventura, la riqueza y la fama les esperan en los bosques salvajes y sombríos, las cuevas nevadas de las montañas y las criptas largo tiempo olvidadas. Simplemente no esperes que nadie pague por tus servicios por adelantado, porque nadie espera que vuelvas. Gloomhaven es un juego cooperativo de combate táctico en un mundo de fantasía único y en evolución. Asume el papel de un mercenario curtido con sus propios intereses personales. Juntos, lucharéis a través de una campaña de escenarios que reaccionan y cambian en función de las acciones de los jugadores, creando un exclusivo tipo de juego lleno de tesoros descubiertos, aventureros retirados y opciones permanentes. Cada escenario ofrece a los jugadores decisiones tácticas profundas, donde las cartas de habilidad tienen múltiples usos, y usar la habilidad correcta en el momento adecuado puede significar la diferencia entre el éxito y el fracaso. Gloomhaven ofrece un combate táctico sin dados contra enemigos totalmente automatizados, cada uno con sus propios patrones de comportamiento. En esta caja, los jugadores encontrarán una experiencia de campaña de fantasía totalmente desarrollada de un alcance y profundidad sin precedentes.',
                'min_players' => 1,
                'max_players' => 4,
                'play_time' => '60 - 120 minutos',
                'price' => 149.95,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
