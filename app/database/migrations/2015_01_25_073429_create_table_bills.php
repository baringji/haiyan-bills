<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBills extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->decimal('amount', 10, 4);
            $table->date('due_date');
            $table->date('period_start');
            $table->date('period_end');
            $table->string('details');
            $table->string('status');
            $table->integer('user_id')->unsigned();
            $table->nullableTimestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bills');
    }

}
