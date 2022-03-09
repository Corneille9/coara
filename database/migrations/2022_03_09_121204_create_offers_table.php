<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->integer('type_id');
            $table->string('position_offered');
            $table->json('assignments');
            $table->string('assignments_description');
            $table->json('required_profile');
            $table->string('required_profile_description');
            $table->json('skills');
            $table->json('job_benefits');
            $table->string('job_benefits_description');
            $table->json('nb');
            $table->integer('trades_id');
            $table->string('activity_area');
            $table->integer('contract_type_id');
            $table->string( 'experience_level');
            $table->string('studies_level');
            $table->json('languages');
            $table->string('post_size');
            $table->json('cities');
            $table->json('countries');
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
        Schema::dropIfExists('offers');
    }
}
