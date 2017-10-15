<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number',15);
            $table->integer('operationType'); // Valor: 1 FT Compra dolares | Valor 2 Ft Vende dolares
            $table->date('date');
            $table->double('sendAmount', 5, 2);
            $table->double('receivedAmount', 5, 2);
            $table->double('changePrice', 5, 3);
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
        Schema::drop('operations');
    }
}
