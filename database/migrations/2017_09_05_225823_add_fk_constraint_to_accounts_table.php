<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkConstraintToAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->integer('bank_id')->unsigned()->nullable();
            $table->integer('accountType_id')->unsigned()->nullable();
            $table->integer('currency_id')->unsigned()->nullable();
            $table->integer('customer_id')->unsigned()->nullable();
            $table->foreign('bank_id')->references('id')->on('banks');
            $table->foreign('accountType_id')->references('id')->on('account_types');
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->dropForeign(['bank_id'])->onDelete('cascade');
            $table->dropForeign(['accountType_id'])->onDelete('cascade');
            $table->dropForeign(['currency_id'])->onDelete('cascade');
            $table->dropForeign(['customer_id'])->onDelete('cascade');
        });
    }
}
