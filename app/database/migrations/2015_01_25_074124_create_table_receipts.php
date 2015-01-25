<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReceipts extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->decimal('amount', 10, 4);
            $table->integer('bill_id')->unsigned();
            $table->nullableTimestamps();
            $table->softDeletes();

            $table->foreign('bill_id')->references('id')->on('bills')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('receipts');
    }

}
