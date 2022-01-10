<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxpayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxpayer', function (Blueprint $table) {
            $table->id()->unique();
            $table->timestamp('tax_year');
            $table->timestamp('date');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('suffix')->nullable();
            $table->string('ssn');
            $table->timestamp('date_of_birth');
            $table->string('occupation');
            $table->string('email_address');
            $table->string('home_phone')->nullable();
            $table->string('work_phone')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('spouse_first_name')->nullable();
            $table->string('spouse_middle_name')->nullable();
            $table->string('spouse_last_name')->nullable();
            $table->string('spouse_suffix')->nullable();
            $table->string('spouse_ssn')->nullable();
            $table->timestamp('spouse_date_of_birth')->nullable();
            $table->string('spouse_occupation')->nullable();
            $table->string('spouse_email_address')->nullable();
            $table->string('spouse_home_phone')->nullable();
            $table->string('spouse_work_phone')->nullable();
            $table->string('spouse_mobile_phone')->nullable();
            $table->string('filing_status');
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
        Schema::dropIfExists('taxpayer');
    }
}
