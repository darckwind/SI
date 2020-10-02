<?php

use Illuminate\Database\Seeder;

class rol extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'descripcion' => 'cliente',
        ]);
        DB::table('roles')->insert([
            'descripcion' => 'admin',
        ]);
    }
}
