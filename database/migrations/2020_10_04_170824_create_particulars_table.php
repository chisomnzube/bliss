<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('particulars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('city');
            $table->string('lga');
            $table->string('state');
            $table->string('country');
            $table->text('address');
            $table->string('occupation');
            $table->string('dob');
            $table->string('psn');
            $table->string('tax');
            $table->string('class');
            $table->string('type');
            $table->string('licence_number');
            $table->string('por');
            $table->string('model');
            $table->string('model_code');
            $table->string('manufactured_year');
            $table->string('status');
            $table->string('engine_number');
            $table->string('chassis_number');
            $table->string('color');
            $table->string('body_type');
            $table->string('origin');
            $table->string('cylinder_capacity');
            $table->string('rated_power');
            $table->string('seating_capacity');
            $table->string('propulsion');
            $table->string('steering');
            $table->string('tire_no');
            $table->string('door_no')->nullable();
            $table->string('gps');
            $table->string('airbag');
            $table->string('tracker');
            $table->string('insurance_company');
            $table->string('policy_holder');
            $table->text('policy_note');
            $table->string('effective_date_from');
            $table->string('effective_date_to');
            $table->string('ecp_name');
            $table->string('ecp_phone');
            $table->string('ecp_email');
            $table->string('ecp_city');
            $table->string('ecp_lga');
            $table->string('ecp_state');
            $table->string('ecp_country');
            $table->text('ecp_address');
            $table->text('document');
            $table->boolean('featured')->default(false);
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
        Schema::dropIfExists('particulars');
    }
}
