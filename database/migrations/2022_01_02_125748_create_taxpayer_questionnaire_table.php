<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxpayerQuestionnaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxpayer_questionnaire', function (Blueprint $table) {
            $table->id();
            $table->boolean('someone_claim_you_or_your_spouse_as_dependent');
            $table->boolean('received_correspondence_irs_prior_year_tax_returns');
            $table->string('refer_name')->nullable();
            $table->boolean('purchase_motor_vehicle');
            $table->boolean('attend_school_fulltime_student');
            $table->boolean('purchase_supplies_used_as_educator');
            $table->boolean('purchase_install_energy_efficient_home_item');
            $table->boolean('paid_estimated_tax_payments');
            $table->string('estimated_taxes_paid_and_date')->nullable();
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
        Schema::dropIfExists('taxpayer_questionnaire');
    }
}
