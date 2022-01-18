<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxpayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxpayers', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('user_id');
            $table->integer('tax_year');
            $table->string('date');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('suffix')->nullable();
            $table->string('ssn');
            $table->string('date_of_birth');
            $table->string('occupation');
            $table->string('email_address')->nullable();
            $table->string('work_phone')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('address');
            $table->string('address_2');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('spouse_first_name')->nullable();
            $table->string('spouse_middle_name')->nullable();
            $table->string('spouse_last_name')->nullable();
            $table->string('spouse_suffix')->nullable();
            $table->string('spouse_ssn')->nullable();
            $table->string('spouse_date_of_birth')->nullable();
            $table->string('spouse_occupation')->nullable();
            $table->string('spouse_email_address')->nullable();
            $table->string('spouse_work_phone')->nullable();
            $table->string('spouse_mobile_phone')->nullable();
            $table->string('filing_status');
            $table->boolean('direct_deposit');
            $table->boolean('direct_deposit_information_change')->nullable();
            $table->string('bank_routing_number')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('card_holder_name')->nullable();
            $table->string('card_number')->nullable();
            $table->string('card_expiration_date')->nullable();
            $table->string('card_cvv')->nullable();
            $table->string('paper_file_or_E_file');
            $table->string('reason_for_paper_filing')->nullable();
            $table->string('receive_your_completed_return');
            $table->string('tax_submission_status')->nullable();
            $table->string('tax_submission_return_amount')->nullable();
            $table->string('tax_service_deduction_amount')->nullable();
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
        Schema::dropIfExists('taxpayers');
    }
}
