<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_documento')->insert([
            'id' => 1,
            'descripcion' => 'Cedula Ciudadania',
        ]);
        DB::table('tipo_documento')->insert([
            'id' => 2,
            'descripcion' => 'Tarjeta de Identidad',
        ]);
        DB::table('tipo_documento')->insert([
            'id' => 3,
            'descripcion' => 'Pasaporte',
        ]);
    }
}
