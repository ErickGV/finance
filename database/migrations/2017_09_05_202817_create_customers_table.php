<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20);
            $table->string('fatherLastname', 20)->nullable();
            $table->string('motherLastname', 20)->nullable();
            $table->string('telephone', 10)->nullable();
            $table->string('mobilephone', 11)->nullable();
            $table->date('birthday')->nullable();
            $table->string('docCode', 15)->unique()->nullable();
            $table->integer('customerType'); // Valor: 1 Cliente Natural | Valor 2 Cliente Empresa
            $table->string('ruc', 11)->unique()->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}
