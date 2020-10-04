<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('password');
            $table->string('security_question');
            $table->string('security_answer');
            $table->string('title');
            $table->string('fname');
            $table->string('lname');
            $table->string('mname');
            $table->string('median_name');
            $table->string('marital_status');
            $table->string('gender');
            $table->string('dob');
            $table->string('pob');
            $table->string('state');
            $table->string('lga');
            $table->string('city');
            $table->string('nationality');
            $table->string('residence_status');
            $table->string('native_lang');
            $table->string('other_lang')->nullable();
            $table->string('religion');
            $table->string('education');
            $table->string('employment_status');
            $table->string('company');
            $table->string('company_address');
            $table->string('job_title');
            $table->string('yoa');
            $table->string('ecp');
            $table->string('ecp_address');
            $table->string('ecp_phone');
            $table->string('relationship');
            $table->string('ecp_psn')->nullable();
            $table->string('health_status');
            $table->string('security_status');
            $table->string('phone');
            $table->string('email');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('id_type');
            $table->string('id_number');
            $table->string('bank_name');
            $table->text('bank_address');
            $table->string('sort_code');
            $table->string('account_type');
            $table->string('account_number');
            $table->string('tax');
            $table->text('passport');
            $table->string('psn')->nullable();
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
        Schema::dropIfExists('personal_details');
    }
}
