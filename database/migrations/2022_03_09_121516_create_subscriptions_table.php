<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('offer_id');
            $table->integer('user_id');
            $table->integer('company_id');
            $table->string('applicant_firstname');
            $table->string('applicant_lastname');
            $table->string('applicant_email');
            $table->string('applicant_civility');
            $table->string('message');
            $table->string('notification_method');
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
        Schema::dropIfExists('subscriptions');
    }
}
