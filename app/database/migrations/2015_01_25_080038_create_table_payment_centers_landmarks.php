<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePaymentCentersLandmarks extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_centers_landmarks', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('payment_center_id')->unsigned();
            $table->integer('landmark_id')->unsigned();
            $table->nullableTimestamps();
            $table->softDeletes();

            $table->foreign('payment_center_id')->references('id')->on('payment_centers')->onUpdate('cascade');
            $table->foreign('landmark_id')->references('id')->on('landmarks')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payment_centers_landmarks');
    }

}
