<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Administrador',
            'description'  => 'Es el Administrador del sistema',
        ]);

        DB::table('roles')->insert([
            'name' => 'Supervisor',
            'description'  => 'Es un supervisor del sistema',
        ]);

        DB::table('roles')->insert([
            'name' => 'Cliente',
            'description'  => 'Es un cliente del sistema',
        ]);

    }
}
