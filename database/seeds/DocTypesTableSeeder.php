<?php

use Illuminate\Database\Seeder;

class DocTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doc_types')->insert([
            'name' => 'DNI',
        ]);

        DB::table('doc_types')->insert([
            'name' => 'PASAPORTE',
        ]);

        DB::table('doc_types')->insert([
            'name' => 'C.E.',
        ]);
    }
}
