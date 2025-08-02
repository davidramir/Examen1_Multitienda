<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertar Registros en la tabla
        DB::table('productos')->insert([
            [
                'nombre'=>'Fideo',
                'precio'=>7.00,
                'created_at'=> now(),
                'updated_at'=> now(), 
                'marca_id'=> 1
            ],
            [
                'nombre'=>'Coca Cola 3L',
                'precio'=>20.00,
                'created_at'=> now(),
                'updated_at'=> now(), 
                'marca_id'=> 2
            ],
            [
                'nombre'=>'Yogurt 1L',
                'precio'=>11.00,
                'created_at'=> now(),
                'updated_at'=> now(),
                'marca_id'=> 3
            ],
        ]);
    }
}