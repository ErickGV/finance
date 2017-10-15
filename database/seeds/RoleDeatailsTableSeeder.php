<?php

use Illuminate\Database\Seeder;

class RoleDeatailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roledetails')->insert([
            'active' => 1,
            'role_id'  => 1,
            'user_id'  => 1,
        ]);
    }
}
