<?php

use Illuminate\Database\Seeder;

class TypeDocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_documents')->insert([
            'name' => 'Ficha de Registro',
            'academy_has' => true,
            'athlete_has' => true
        ]);

        DB::table('type_documents')->insert([
            'name' => 'Certificado de faixa do professor responsável',
            'academy_has' => true
        ]);
    }
}
