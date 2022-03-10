<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('image');
            $table->string('phone_number');
            $table->string('civility');
            $table->string('country');
            $table->json('languages');
            $table->string('notification_method');
            $table->json('activity_area_ids');
            $table->json('research_trades_ids');
            $table->string('regions');
            $table->json('desired_contract_type');
            $table->string('desired_salary');
            $table->integer('user_id');
            $table->integer('status_id');
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
        Schema::dropIfExists('personals');
    }
}
