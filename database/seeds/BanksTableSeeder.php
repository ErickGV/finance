<?php

use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert([
            'name' => 'BBVA',
        ]);

        DB::table('banks')->insert([
            'name' => 'INTERBANK',
        ]);

        DB::table('banks')->insert([
            'name' => 'SCOTIABANK',
        ]);

        DB::table('banks')->insert([
            'name' => 'BCP',
        ]);
    }
}
