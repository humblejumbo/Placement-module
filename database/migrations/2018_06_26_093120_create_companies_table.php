<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CompanyName');
            $table->string('Sector');
            $table->string('IncorporationStatus');
            $table->string('Scale');
            $table->mediumText('Address');
            $table->string('Pin');
            $table->string('Country');
            $table->string('State');
            $table->string('District');
            $table->string('Pno');
            $table->string('Fno');
            $table->string('Email');
            $table->string('Website');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
