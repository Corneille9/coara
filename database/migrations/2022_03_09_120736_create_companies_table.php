<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('postal_code');
            $table->string('country');
            $table->string('city');
            $table->string('staff_size');
            $table->string('website_url');
            $table->string('company_email');
            $table->string('logo');
            $table->json('activity_area_ids');
            $table->string('description');
            $table->string('civility');
            $table->string('contact_firstname');
            $table->string('contact_lastname');
            $table->string('phone_number1');
            $table->string('phone_number2');
            $table->integer('user_id');
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
        Schema::dropIfExists('companies');
    }
}
