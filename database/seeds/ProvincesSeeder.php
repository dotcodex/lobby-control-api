<?php

use Illuminate\Database\Seeder;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([

            ['id' => 1,  "name" =>'Arica', 'region_id' => 15],
            ['id' => 2,  "name" =>'Parinacota', 'region_id' => 15],
            ['id' => 3,  "name" =>'Iquique', 'region_id' => 1],
            ['id' => 4,  "name" =>'Tamarugal', 'region_id' => 1],
            ['id' => 5,  "name" =>'Antofagasta', 'region_id' => 2],
            ['id' => 6,  "name" =>'El Loa', 'region_id' => 2],
            ['id' => 7,  "name" =>'Tocopilla', 'region_id' => 2],
            ['id' => 8,  "name" =>'Copiapó', 'region_id' => 3],
            ['id' => 9,  "name" =>'Chañaral', 'region_id' => 3],
            ['id' => 10, "name" => 'Huasco', 'region_id' => 3],
            ['id' => 11, "name" => 'Elqui', 'region_id' => 4],
            ['id' => 12, "name" => 'Choapa', 'region_id' => 4],
            ['id' => 13, "name" => 'Limarí', 'region_id' => 4],
            ['id' => 14, "name" => 'Valparaíso', 'region_id' => 5],
            ['id' => 15, "name" => 'Isla de Pascua', 'region_id' => 5],
            ['id' => 16, "name" => 'Los Andes', 'region_id' => 5],
            ['id' => 17, "name" => 'Petorca', 'region_id' => 5],
            ['id' => 18, "name" => 'Quillota', 'region_id' => 5],
            ['id' => 19, "name" => 'San Antonio', 'region_id' => 5],
            ['id' => 20, "name" => 'San Felipe de Aconcagua', 'region_id' => 5],
            ['id' => 21, "name" => 'Marga Marga', 'region_id' => 5],
            ['id' => 22, "name" => 'Cachapoal', 'region_id' => 6],
            ['id' => 23, "name" => 'Cardenal Caro', 'region_id' => 6],
            ['id' => 24, "name" => 'Colchagua', 'region_id' => 6],
            ['id' => 25, "name" => 'Talca', 'region_id' => 7],
            ['id' => 26, "name" => 'Cauquenes', 'region_id' => 7],
            ['id' => 27, "name" => 'Curicó', 'region_id' => 7],
            ['id' => 28, "name" => 'Linares', 'region_id' => 7],
            ['id' => 29, "name" => 'Concepción', 'region_id' => 8],
            ['id' => 30, "name" => 'Arauco', 'region_id' => 8],
            ['id' => 31, "name" => 'Biobío', 'region_id' => 8],
            ['id' => 32, "name" => 'Ñuble', 'region_id' => 8],
            ['id' => 33, "name" => 'Cautín', 'region_id' => 9],
            ['id' => 34, "name" => 'Malleco', 'region_id' => 9],
            ['id' => 35, "name" => 'Valdivia', 'region_id' => 14],
            ['id' => 36, "name" => 'Ranco', 'region_id' => 14],
            ['id' => 37, "name" => 'Llanquihue', 'region_id' => 10],
            ['id' => 38, "name" => 'Chiloé', 'region_id' => 10],
            ['id' => 39, "name" => 'Osorno', 'region_id' => 10],
            ['id' => 40, "name" => 'Palena', 'region_id' => 10],
            ['id' => 41, "name" => 'Coihaique', 'region_id' => 11],
            ['id' => 42, "name" => 'Aysén', 'region_id' => 11],
            ['id' => 43, "name" => 'Capitán Prat', 'region_id' => 11],
            ['id' => 44, "name" => 'General Carrera', 'region_id' => 11],
            ['id' => 45, "name" => 'Magallanes', 'region_id' => 12],
            ['id' => 46, "name" => 'Antártica Chilena', 'region_id' => 12],
            ['id' => 47, "name" => 'Tierra del Fuego', 'region_id' => 12],
            ['id' => 48, "name" => 'Última Esperanza', 'region_id' => 12],
            ['id' => 49, "name" => 'Santiago', 'region_id' => 13],
            ['id' => 50, "name" => 'Cordillera', 'region_id' => 13],
            ['id' => 51, "name" => 'Chacabuco', 'region_id' => 13],
            ['id' => 52, "name" => 'Maipo', 'region_id' => 13],
            ['id' => 53, "name" => 'Melipilla', 'region_id' => 13],
            ['id' => 54, "name" => 'Talagante', 'region_id' => 13],
      
          ]);
    }
}
