<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('industry');
            $table->string('toc');
            $table->string('company_name');
            $table->string('parent_company');
            $table->text('office_address');
            $table->text('branches');
            $table->string('yoe');
            $table->string('doi');
            $table->string('employees');
            $table->text('others')->nullable();
            $table->string('market');
            $table->string('traded_as');
            $table->string('stock_price');
            $table->string('isin');
            $table->string('rc');
            $table->string('founded');
            $table->string('founder');
            $table->string('area_served');
            $table->string('key_people');
            $table->string('products');
            $table->string('revenue');
            $table->string('asc');
            $table->string('market_cap');
            $table->string('asset');
            $table->string('equity');
            $table->string('operating_income');
            $table->string('net_income');
            $table->string('subsidiary');
            $table->string('website');
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            $table->string('security_question');
            $table->string('security_answer');
            $table->string('reg_date');
            $table->string('name');
            $table->text('address');
            $table->string('id_number');
            $table->string('id_type');
            $table->string('position');
            $table->string('psn');
            $table->string('security_status')->nullable();
            $table->string('rating')->nullable();
            $table->text('document');
            $table->string('csn')->nullable();
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
        Schema::dropIfExists('company_infos');
    }
}
