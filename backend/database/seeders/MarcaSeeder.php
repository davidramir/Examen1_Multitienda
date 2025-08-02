<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertar Registro a la tabla
        DB::table('marcas')->insert([
            [
                'nombre'=>'Suprema',
                'created_at'=> now(),
                'updated_at'=> now(), 
            ],
            [
                'nombre'=>'Coca Cola',
                'created_at'=> now(),
                'updated_at'=> now(), 
            ],
            [
                'nombre'=>'Pil',
                'created_at'=> now(),
                'updated_at'=> now(), 
            ],
        ]);
    }
}