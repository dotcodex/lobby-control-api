<?php

use Illuminate\Database\Seeder;
//use illuminate\Support\Facades\DB;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            ['id'=>1	,'name'=>'I Región de Tarapacá'],
            ['id'=>2	,'name'=>'II Región de Antofagasta'],
            ['id'=>3	,'name'=>'III Región de Atacama'],
            ['id'=>4	,'name'=>'IV Región de Coquimbo'],
            ['id'=>5	,'name'=>'V Región de Valparaíso'],
            ['id'=>6	,'name'=>'VI Región de O’Higgins'],
            ['id'=>7	,'name'=>'VII Región del Maule'],
            ['id'=>8	,'name'=>'VIII Región del Biobío'],
            ['id'=>9	,'name'=>'IX Región de la Araucanía'],
            ['id'=>10	,'name'=>'X Región de Los Lagos'],
            ['id'=>11	,'name'=>'XI Región Aysén'],
            ['id'=>12	,'name'=>'XII Región de Magallanes'],
            ['id'=>13	,'name'=>'RM Región Metropolitana de Santiago'],
            ['id'=>14	,'name'=>'XIV Región de Los Ríos'],
            ['id'=>15	,'name'=>'XV Región de Arica y Parinacota']
          ]);

        
        
    }
}
