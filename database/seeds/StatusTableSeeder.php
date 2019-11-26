<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'name' => 'Ativo',
            'created_at' => \Illuminate\Support\Carbon::now()
        ]);

        DB::table('status')->insert([
            'name' => 'Aguardando Homologação',
            'created_at' => \Illuminate\Support\Carbon::now()
        ]);

        DB::table('status')->insert([
            'name' => 'Inativo',
            'created_at' => \Illuminate\Support\Carbon::now()
        ]);
    }
}
