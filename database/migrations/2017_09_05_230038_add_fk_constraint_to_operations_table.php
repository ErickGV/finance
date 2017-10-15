<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkConstraintToOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('operations', function (Blueprint $table) {
            $table->integer('customer_id')->unsigned()->nullable();
            $table->integer('sourceAccount_id')->unsigned()->nullable();
            $table->integer('targetAccount_id')->unsigned()->nullable();
            $table->integer('targetCreditCard_id')->unsigned()->nullable();
            $table->integer('sendCurrency_id')->unsigned()->nullable();
            $table->integer('receivedCurrency_id')->unsigned()->nullable();
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('sourceAccount_id')->references('id')->on('accounts');
            $table->foreign('targetAccount_id')->references('id')->on('accounts');
            $table->foreign('targetCreditCard_id')->references('id')->on('credit_cards');
            $table->foreign('sendCurrency_id')->references('id')->on('currencies');
            $table->foreign('receivedCurrency_id')->references('id')->on('currencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('operations', function (Blueprint $table) {
            $table->dropForeign(['customer_id'])->onDelete('cascade');
            $table->dropForeign(['sourceAccount_id'])->onDelete('cascade');
            $table->dropForeign(['targetAccount_id'])->onDelete('cascade');
            $table->dropForeign(['targetCreditCard_id'])->onDelete('cascade');
            $table->dropForeign(['sendCurrency_id'])->onDelete('cascade');
            $table->dropForeign(['receivedCurrency_id'])->onDelete('cascade');
        });
    }
}
