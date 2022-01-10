<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxpayerDocumentationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxpayer_documentation', function (Blueprint $table) {
            $table->id();
            $table->string('salary_wages_w2')->nullable();
            $table->string('rental_property_income')->nullable();
            $table->string('self_employment_expenses')->nullable(); 
            $table->string('self_employed_business_income')->nullable();
            $table->string('interest_1099_int')->nullable();
            $table->string('child_care_expenses')->nullable();
            $table->string('independent_contractor_1099_misc')->nullable();
            $table->string('dividends_1099_div')->nullable();
            $table->string('charitable_contributions')->nullable();
            $table->string('unemployment_1099_g')->nullable();
            $table->string('hsa_1099_sa')->nullable();
            $table->string('prior_years_tax_return_new_clients_only')->nullable();
            $table->string('stocks_bonds_1099_b')->nullable();
            $table->string('mortgage_statement_1098')->nullable();
            $table->string('estimated_tax_payments_made')->nullable();
            $table->string('ira_distributions_1099_r')->nullable();
            $table->string('real_estate_taxes_paid ')->nullable();
            $table->string('partnership_s_corp_k1')->nullable();
            $table->string('social_security_benefits_ss_1099')->nullable();
            $table->string('education_expenses_1098_t')->nullable();
            $table->string('medical_expenses')->nullable();
            $table->string('lottery_gambling_winnings ')->nullable();
            $table->string('student_loan_interest_1098_e')->nullable();
            $table->string('state_return')->nullable();
            $table->boolean('direct_deposit');
            $table->boolean('direct_deposit_information_change')->nullable();
            $table->string('bank_routing_number');
            $table->string('bank_account_number');
            $table->string('paper_file_or_E-file');
            $table->string('reason_for_paper_filing');
            $table->string('receive_your_completed_return');
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
        Schema::dropIfExists('taxpayer_documentation');
    }
}
