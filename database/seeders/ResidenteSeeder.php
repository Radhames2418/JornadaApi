<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class ResidenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('residentes')->insert([
            [
                'nombre' => 'Radhames',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Radhamesenc24102@gmail.com',
                'edad' => 20,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Marino',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Marinoenc24155@gmail.com',
                'edad' => 17,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Llecnia',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Llecnia@gmail.com',
                'edad' => 40,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 0,
                'observacion' => 'No pedi nada',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Amarlin',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Amarlin@gmail.com',
                'edad' => 25,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Lucenilda',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Lucenilda@gmail.com',
                'edad' => 47,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Amado',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Amdao@gmail.com',
                'edad' => 77,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Leidy',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Leidy@gmail.com',
                'edad' => 25,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Noelia',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Noelia@gmail.com',
                'edad' => 15,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Luzfranny',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Luzfranny@gmail.com',
                'edad' => 54,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Jefferson',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Jefferson@gmail.com',
                'edad' => 25,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Ariel',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Ariel@gmail.com',
                'edad' => 17,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Roister',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Roiser@gmail.com',
                'edad' => 28,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Ericka',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Ericka@gmail.com',
                'edad' => 17,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Paola',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Paola@gmail.com',
                'edad' => 52,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Pablo',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Pablo@gmail.com',
                'edad' => 10,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Bemmi',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Bemmi@gmail.com',
                'edad' => 25,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Elian',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Elian@gmail.com',
                'edad' => 24,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Henry',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Henry@gmail.com',
                'edad' => 27,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Laura',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Laura@gmail.com',
                'edad' => 47,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Natalia',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Natalia@gmail.com',
                'edad' => 37,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Samantha',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Samantha@gmail.com',
                'edad' => 35,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Kaela',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Kaela@gmail.com',
                'edad' => 57,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Colombia',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Colombia@gmail.com',
                'edad' => 17,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Zurry',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Zurry@gmail.com',
                'edad' => 25,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Xaviel',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Xaviel@gmail.com',
                'edad' => 66,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Bemson',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Bemson@gmail.com',
                'edad' => 57,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Daniel',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Daniel@gmail.com',
                'edad' => 20,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Fidia',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Fidia@gmail.com',
                'edad' => 68,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Hondura',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Hondura@gmail.com',
                'edad' => 44,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Gael',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Gael@gmail.com',
                'edad' => 35,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Ilia',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Ilia@gmail.com',
                'edad' => 77,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Koat',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Koat@gmail.com',
                'edad' => 70,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Nana',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Nana@gmail.com',
                'edad' => 55,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Quezy',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Quezy@gmail.com',
                'edad' => 80,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Sara',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Sara@gmail.com',
                'edad' => 10,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Trixy',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Trixy@gmail.com',
                'edad' => 100,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Veronica',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Veronica@gmail.com',
                'edad' => 52,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Wendy',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492051452,
                'correo' => 'Wendy@gmail.com',
                'edad' => 57,
                'direccion' => 'San Jose',
                'comida_entregable' => 0,
                'observacion' => 'No pedi Ningun servicio',
                'created_at' => date('Y-m-d')
            ],
            [
                'nombre' => 'Darwin',
                'apellidos' => 'Encarnacion Encarnacion',
                'telefono' => 8492052418,
                'correo' => 'Darwin@gmail.com',
                'edad' => 17,
                'direccion' => 'Hondo Valle',
                'comida_entregable' => 1,
                'observacion' => 'Gracias por el servicio',
                'created_at' => date('Y-m-d')
            ]
        ]);
    }
}
