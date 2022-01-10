<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_information', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('suffix')->nullable();
            $table->string('website_url')->nullable();
            $table->string('business_type');
            $table->string('business_activity');
            $table->string('business_services');
            $table->string('business_solutions');
            $table->string('business_ideal_clients');
            $table->string('business_environment');
            $table->string('business_issues');
            $table->string('business_goal_and_timeframe');
            $table->string('business_services_desired');
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
        Schema::dropIfExists('client_information');
    }
}
