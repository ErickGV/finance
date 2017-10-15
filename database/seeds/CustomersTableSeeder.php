<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name' => 'Erick',
            'fatherLastname' => 'Gonzales',
            'motherLastname' => 'Vasquez',
            'telephone' => '5353632',
            'mobilephone' => '954604372',
            'birthday' => date("Y-m-d", strtotime('28-05-2017')),
            'docCode' => '71844756',
            'customerType' => 1,
            'ruc' => '',
            'docType_id'  => 1,
            'gender_id'  => 1,
        ]);
    }
}
