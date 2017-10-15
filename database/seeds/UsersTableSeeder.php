<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Erick Gonzales',
            'email'  => 'gonzales.erick@pucp.edu.pe',
            'password'  => bcrypt('erickelme28'),
            'remember_token'  => str_random(10) ,
            'customer_id'  => 1,
        ]);
    }
}
