<?php

use Illuminate\Database\Seeder;

class AccountTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_types')->insert([
            'name' => 'Ahorros',
        ]);

        DB::table('account_types')->insert([
            'name' => 'Corriente',
        ]);

        DB::table('account_types')->insert([
            'name' => 'Maestra',
        ]);
    }
}
