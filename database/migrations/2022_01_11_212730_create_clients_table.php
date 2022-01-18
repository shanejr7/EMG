<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id('user_id');
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
            $table->boolean('business_services_desired_startup')->nullable();
            $table->boolean('business_services_desired_tax_preparation')->nullable();
            $table->boolean('business_services_desired_planning_marketing')->nullable();
            $table->boolean('business_services_desired_web_development_design')->nullable();
            $table->boolean('business_services_desired_web_seo')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
